<?php
/**
 * Class for Slack Notifications in Ninja Forms
 *
 * Extends the NF_Notification_Base_Type class
 *
 * @since 1.0
 */

class NF_Notification_Slack extends NF_Notification_Base_Type {

	/**
	 * Get things rolling
	 */
	function __construct() {
		$this->name = __( 'Slack', 'ninja-forms-slack' );

	}

	/**
	 * Output our edit screen
	 *
	 * @access public
	 * @since 2.8
	 * @return void
	 */
	public function edit_screen( $id = '' ) {
		//wp_editor args
		$settings = array(
			'textarea_name' => 'settings[slack]',
			'tinymce' => false,
			'quicktags' => false,
		);


		?>

		<style>
			button#slack-html {
				display: none;
			}

			#wp-slack-media-buttons .insert-media {
				display: none;
			}
		</style>
		<tr>
			<th scope="row"><label for="slack"><?php _e( 'Message', 'ninja-forms-slack' ); ?></label></th>
			<td>
				<?php wp_editor( nf_get_object_meta_value( $id, 'slack' ), 'slack', $settings ); ?>
			</td>
		</tr>

		<tr>
			<th scope="row"><label for="settings-slack_url"><?php _e( 'Slack Webhook URL', 'ninja-forms-slack' ); ?></label></th>
			<td><input type="url" name="settings[slack_url]"  size="60" id="settings-slack_url" value="<?php echo esc_attr( nf_get_object_meta_value( $id, 'slack_url' ) ); ?>" />
			<p class="description"><?php _e('You can find this URL when you have Slack Webhook integration activated.', 'ninja-forms-slack'); ?></p>
			</td>


		</tr>


		<?php
	}

	/**
	 * Process our Slack notification, then send to Slack
	 *
	 * @access public
	 * @since 2.8
	 * @return void
	 */
	public function process( $id ) {

		global $ninja_forms_processing;

		//Get the main Ninja Forms Instance
		$ninja_forms_instance =  Ninja_Forms::instance();

		// We need to get our name setting so that we can use it to create a unique success message ID.
		$name = $ninja_forms_instance->notification( $id )->get_setting( 'name' );
		// If our name is empty, we need to generate a random string.
		if ( empty ( $name ) ) {
			$name = ninja_forms_random_string( 4 );
		}
		$slack_notification = apply_filters( 'nf_slack', $ninja_forms_instance->notification( $id )->get_setting( 'slack' ), $id );

		$success_msg = do_shortcode( $slack_notification );

		//The Selected Form Title
		$form_title = $ninja_forms_processing->get_form_setting('form_title');

		//Slack webhook URL
		$url = $ninja_forms_instance->notification( $id )->get_setting( 'slack_url' );

		$payload = array(
			'text'        => __( 'Form Submitted through Ninja Forms', 'ninja-forms-slack' ),
			'username'    => 'FormBot',
			'icon_emoji'  => ':page_facing_up:',
			'attachments' => array(
				'fallback' => __('Form Submitted', 'ninja-forms-slack'),
				'color'    => '#EF4748',
				'fields'   => array(
					'title' => __('Form "' . $form_title . '" Submitted', 'ninja-forms-slack'),
					'value' => __('Form Submitted through Ninja Forms', 'ninja-forms-slack'),
					'text'  =>
		strip_tags(preg_replace('/(<\/[^>]+?>)(<[^>\/][^>]*?>)/', '
$1
$2', nf_parse_fields_shortcode( $success_msg ))),

				)
			),
		);

		// Send it away!
		$output  = 'payload=' . json_encode( $payload );
		$response = wp_remote_post( $url, array(
					'body' => $output,
				) );
				if ( is_wp_error( $response ) ) {
					$error_message = $response->get_error_message();
					_e('Slack Notifications not sent, Something went wrong: $error_message', 'ninja-forms-slack');
				}
	}
}
return new NF_Notification_Slack();