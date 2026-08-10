<?php
/**
 * examples and filter tests.
 *
 */

/**
 *
 *
 * @param $template_elements ( defualt : '###AVATAR### ###AUTHOR###  ###TIME### ###HEADER###' )
 *
 * @return string
 */
function livepress_meta_info_template_order_example( $template_elements ) {

	// remove time
//	$template_elements = '###AVATAR### ###AUTHOR### ###HEADER###';

	// reorder
	$template_elements = '###AUTHOR### ###HEADER### ###TIME### ###AVATAR### ';

	return $template_elements;
}
//add_filter( 'livepress_meta_info_template_order','livepress_meta_info_template_order_example' );


/**
 *
 *
 * @param array $classes
 * @param array $atts { "authors", "author" ,"time", "avatar_url", "has_avatar", "timestamp", "update_header", "avatar_block"
 *
 * @return array
 */
function livepress_meta_info_template_header_class_example( $classes, $atts ){

	if ( isset( $atts['has_avatar'] ) && false === $atts['has_avatar'] ) {
		$classes[] = 'avater_missing';
	}

	return $classes;

}

// add_filter( 'livepress_meta_info_template_header_class','livepress_meta_info_template_header_class_example', 10, 2 );

/**
 *
 *
 * @param string $time_info
 * @param string $timestring { "authors", "author" ,"time", "avatar_url", "has_avatar", "timestamp", "update_header", "avatar_block"
 *
 * @return string
 */
function livepress_meta_info_template_time_example(  $time_info, $timestring ){

	if( strpos( strtolower( $timestring ),  'pm' ) ) {
		$time_info = str_replace( 'class="', 'class=" PM ' , $time_info );
	}

	return $time_info;

}

// add_filter( 'livepress_meta_info_template_time','livepress_meta_info_template_time_example', 10, 2 );

/**
 * change or add post to load the livepress editor interface
 *
 * @param array $post_types { 'post' }
 *
 *
 * @return string
 */
function livepress_post_types_example(  $post_types ){

	$post_types[] = 'page';
	return $post_types;

}

 //add_filter( 'livepress_post_types','livepress_post_types_example', 10, 2 );

/**
 * Allows you adjust the "powered by LivePress" HTML
 *
 * @param string $html
 *
 * @return string
 */
function livepress_remove_logo_from_live_bar(  $html ){
	// this will remove the bottom logo. Needs to be called after plugins loaded.
	remove_filter( 'livepress_inject_widget', array( 'LivePress_Themes_Helper', 'append_logo' ), 99 );
	return '';
}

//add_filter( 'livepress_live_bar_logo_html','livepress_remove_logo_from_live_bar' );

/**
 * Allows you adjust which HTML object used to workout if we have scrolled to the top of the live updates
 *
 * @param string $selector
 *
 * @return string
 */
function livepress_scroll_target_for_post_title_selector( $selector ){
	return '.widget_archive';
}
//add_filter( 'livepress_scroll_target_for_post_title_selector', 'livepress_scroll_target_for_post_title_selector' );


//add_filter( 'livepress_show_update_on_scroll', '__return_false' );
//add_filter( 'livepress_float_pause_button', '__return_false' );


/**
 * Allows you adjust which HTML object used to workout if we have scrolled to the top of the live updates
 *
 * @param string $selector
 *
 * @return string
 */
function LP_status_text( $selector ){
	return '.widget_archive';
}
//add_filter( 'LP_status_text', 'LP_status_text' );


// We have whitelist of the_content fliters that we allow to run.

// example hte_content filter that is not in the whitelist
function lp_the_content ( $content ){
	return $content . '.the_content filter is here';
}
//add_filter( 'the_content', 'lp_the_content' );

// example fileter to add to the whitelist
// the example filter above
function lp_livepress_whitelisted_content_filters ( $whitelist ){
	$whitelist[] = 'lp_the_content';

	return $whitelist;
}
//add_filter( 'livepress_whitelisted_content_filters', 'lp_livepress_whitelisted_content_filters' );