<?php
/**
 * Enqueue Custom Assets
 *
 * Enqueues the plugin's custom CSS and JS files on the frontend.
 *
 * @package MrDemonWolf_Extensions
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue custom CSS and JS on the frontend.
 */
function mrdemonwolf_enqueue_assets() {
	$css_file = MRDEMONWOLF_EXT_DIR . 'assets/css/custom.css';
	$js_file  = MRDEMONWOLF_EXT_DIR . 'assets/js/custom.js';

	wp_enqueue_style(
		'mrdemonwolf-custom',
		MRDEMONWOLF_EXT_URL . 'assets/css/custom.css',
		array(),
		file_exists( $css_file ) ? filemtime( $css_file ) : MRDEMONWOLF_EXT_VERSION
	);

	wp_enqueue_script(
		'mrdemonwolf-custom',
		MRDEMONWOLF_EXT_URL . 'assets/js/custom.js',
		array(),
		file_exists( $js_file ) ? filemtime( $js_file ) : MRDEMONWOLF_EXT_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'mrdemonwolf_enqueue_assets' );
