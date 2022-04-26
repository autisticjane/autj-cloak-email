<?php

/*
 * Plugin Name: XOI Cloak Email
 * Description: Simple email cloaking shortcode for WP. Shortcode <code>[cloak email=you@domain.com]</code>
 * Plugin URI: https://github.com/izzylively/xoi-cloak-email/releases/
 * Author: Izzy Lively
 * Author URI: https://github.com/izzylively/xoi-cloak-email/
 * Text Domain: xoi-cloak-email
 * License: GPL 3+
 * Version: 1.0.0
*/

// Add Shortcode
function email_cloaking_shortcode( $atts ) {
	// Attributes
	$atts = shortcode_atts(
		array(
			'email' => '',
		),
		$atts,
		'cloak'
	);
	// Return cloaked email
	return antispambot( $atts['email'] );
}
add_shortcode( 'cloak', 'email_cloaking_shortcode' );

?>
