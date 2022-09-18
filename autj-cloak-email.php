<?php

/*
 * Plugin Name: AuJ Cloak Email
 * Description: Simple email cloaking shortcode for WP. Shortcode <code>[cloak email=you@domain.com]</code>
 * Plugin URI: https://github.com/izzylively/xoi-cloak-email/releases/
 * Author: Jane Lively
 * Author URI: https://autisticjane.com
 * Text Domain: autj-cloak-email
 * License: GPL 3+
 * Version: 2.0.0
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
