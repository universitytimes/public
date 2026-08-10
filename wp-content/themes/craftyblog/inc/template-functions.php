<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package craftyblog
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function craftyblog_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'craftyblog_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function craftyblog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'craftyblog_pingback_header' );


/**
 * Adding Getting Started Page in admin menu
 */
function craftyblog_admin_notice() {
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'craftyblog-update-notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();
    
    if ( is_admin() && 'themes.php' == $pagenow && !$meta ) {
        
        if( $current_screen->id !== 'dashboard' && $current_screen->id !== 'themes' ) {
            return;
        }

        if ( is_network_admin() ) {
            return;
        }

        if ( ! current_user_can( 'manage_options' ) ) {
            return;
        } ?>

        <div class="welcome-message notice notice-info">
            <div class="notice-wrapper">
                <div class="notice-text">
                    <h3><?php esc_html_e( 'Congratulations!', 'craftyblog' ); ?></h3>
                    <p><?php printf( __( '%1$s is now installed and ready to use. Click below to see theme documentation, plugins to install and other details to get started.', 'craftyblog' ), esc_html( $name ) ) ; ?></p>
                    <p><a href="<?php echo esc_url( admin_url( 'themes.php?page=craftyblog-getting-started' ) ); ?>" class="button button-primary" style="text-decoration: none;"><?php esc_html_e( 'Go to the getting started.', 'craftyblog' ); ?></a></p>
                    <p class="dismiss-link"><strong><a href="?craftyblog-update-notice=1"><?php esc_html_e( 'Dismiss','craftyblog' ); ?></a></strong></p>
                </div>
            </div>
        </div>
    <?php }else{
        ?>
        <div class="welcome-message theme-rate-notice notice notice-info">
            <div class="notice-wrapper">
                <div class="notice-text">
                    <h3><?php printf( __( '%1$s is now installed and ready to use. if you do like this theme please leave us a 5-star rating. Huge Thanks in Advance', 'craftyblog' ), esc_html( $name ) ) ; ?></h3>
                    <p>
                        <a href="<?php echo esc_url( 'https://wordpress.org/support/theme/craftyblog/reviews/#new-post'); ?>" class="button button-primary" target="_blank" style="text-decoration: none;"><?php esc_html_e( 'Rate This Theme', 'craftyblog' ); ?></a>
                        <a href="<?php echo esc_url( 'https://theimran.com/themes/wordpress-theme/crafty-blog-pro-simply-beautiful-wordpress-theme/' ); ?>" class="button button-primary" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'View Pro Version Details.', 'craftyblog' ); ?></a>
                    </p>
                    <p class="dismiss-link"><strong><a href="?craftyblog-update-notice=1"><?php esc_html_e( 'Dismiss','craftyblog' ); ?></a></strong></p>
                </div>
            </div>
        </div>
        <?php
    }
}

add_action( 'admin_notices', 'craftyblog_admin_notice' );