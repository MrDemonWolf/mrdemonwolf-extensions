<?php
/**
 * Enqueue Custom Assets
 *
 * Enqueues the plugin's custom CSS and JS files on the frontend.
 *
 * @since   1.0.0
 * @package MrDemonWolf_Extensions
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue custom CSS and JS on the frontend.
 *
 * @since 1.0.0
 */
function mrdemonwolf_enqueue_assets() {
	$css_file = MRDEMONWOLF_EXT_DIR . 'assets/css/custom.css';
	$js_file  = MRDEMONWOLF_EXT_DIR . 'assets/js/custom.js';

	// Only enqueue CSS if the file has meaningful content beyond the header comment.
	if ( file_exists( $css_file ) && filesize( $css_file ) > 100 ) {
		wp_enqueue_style(
			'mrdemonwolf-custom',
			MRDEMONWOLF_EXT_URL . 'assets/css/custom.css',
			array(),
			filemtime( $css_file )
		);
	}

	// Only show the console warning to non-admin visitors.
	if ( file_exists( $js_file ) && ! current_user_can( 'manage_options' ) ) {
		wp_enqueue_script(
			'mrdemonwolf-custom',
			MRDEMONWOLF_EXT_URL . 'assets/js/custom.js',
			array(),
			filemtime( $js_file ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'mrdemonwolf_enqueue_assets' );
