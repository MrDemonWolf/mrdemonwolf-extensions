<?php
/**
 * Admin Bar Greeting
 *
 * Replaces the default "Howdy," greeting in the WordPress admin bar
 * with a time-based greeting (Good morning/afternoon/evening).
 *
 * @since   1.0.0
 * @package MrDemonWolf_Extensions
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Replace the "Howdy," greeting with a time-based greeting.
 *
 * @since 1.0.0
 *
 * @param WP_Admin_Bar $wp_admin_bar The admin bar instance.
 */
function mrdemonwolf_replace_howdy( $wp_admin_bar ) {
	$hour = (int) wp_date( 'G' );

	if ( $hour >= 5 && $hour <= 11 ) {
		$greeting = esc_html__( 'Good morning,', 'mrdemonwolf-extensions' );
	} elseif ( $hour >= 12 && $hour <= 18 ) {
		$greeting = esc_html__( 'Good afternoon,', 'mrdemonwolf-extensions' );
	} else {
		$greeting = esc_html__( 'Good evening,', 'mrdemonwolf-extensions' );
	}

	$my_account = $wp_admin_bar->get_node( 'my-account' );

	if ( $my_account ) {
		$display_name = wp_get_current_user()->display_name;
		$wp_admin_bar->add_node( array(
			'id'    => 'my-account',
			'title' => $greeting . ' ' . esc_html( $display_name ),
		) );
	}
}
// Priority 9992: run after WordPress core (priority 0) and most plugins so the greeting is not overwritten.
add_action( 'admin_bar_menu', 'mrdemonwolf_replace_howdy', 9992 );
