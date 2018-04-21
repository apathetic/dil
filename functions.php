<?php

include_once('inc/general.php');

// custom post types
// include_once('inc/class.types.php');
// include_once('inc/types.php');

// custom fields
// include_once('inc/class.fields.php');
// include_once('inc/fields.php');

// sidebars
// include_once('inc/sidebars.php');





if ( function_exists( 'add_image_size' ) ) {
	// add_image_size( 'portrait', 400, 9999 );		//400 pixels wide (and unlimited height)
	// add_image_size( 'landscape', 9999, 400 );
}


function enable_more_buttons($buttons) {
	$buttons[] = 'hr';
	return $buttons;
}

add_filter("mce_buttons", "enable_more_buttons");


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
