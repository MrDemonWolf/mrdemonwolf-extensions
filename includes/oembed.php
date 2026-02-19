<?php
/**
 * oEmbed Filtering
 *
 * Strips author information from oEmbed response data.
 *
 * @package MrDemonWolf_Extensions
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Remove author info from oEmbed responses.
 *
 * @param array  $data The oEmbed response data.
 * @param string $url  The requested URL.
 * @param array  $args Additional arguments.
 * @return array Filtered response data.
 */
function mrdemonwolf_filter_oembed_response_data( $data, $url, $args ) {
	unset( $data['author_url'] );
	unset( $data['author_name'] );
	return $data;
}
add_filter( 'oembed_response_data', 'mrdemonwolf_filter_oembed_response_data', 10, 3 );
