<?php
/**
 * Admin Bar Greeting
 *
 * Replaces the default "Howdy," greeting in the WordPress admin bar
 * with a time-based greeting (Good morning/afternoon/evening).
 *
 * @package MrDemonWolf_Extensions
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Replace the "Howdy," greeting with a time-based greeting.
 *
 * @param WP_Admin_Bar $wp_admin_bar The admin bar instance.
 */
function mrdemonwolf_replace_howdy( $wp_admin_bar ) {
	$hour = (int) date( 'G' );
	$msg  = '';

	if ( $hour >= 5 && $hour <= 11 ) {
		$msg = 'Good morning,';
	} elseif ( $hour >= 12 && $hour <= 18 ) {
		$msg = 'Good afternoon,';
	} elseif ( $hour >= 19 || $hour <= 4 ) {
		$msg = 'Good evening,';
	}

	$my_account = $wp_admin_bar->get_node( 'my-account' );

	if ( $my_account && isset( $my_account->title ) ) {
		$new_title = str_replace( 'Howdy,', $msg, $my_account->title );
		$wp_admin_bar->add_node( array(
			'id'    => 'my-account',
			'title' => $new_title,
		) );
	}
}
add_filter( 'admin_bar_menu', 'mrdemonwolf_replace_howdy', 9992 );
