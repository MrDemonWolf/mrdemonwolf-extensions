<?php
/**
 * Plugin Name: MrDemonWolf Extensions
 * Plugin URI:  https://github.com/mrdemonwolf/mrdemonwolf-extensions
 * Description: A collection of small WordPress customizations: time-based admin bar greeting, oEmbed author removal, and custom CSS/JS enqueuing.
 * Version:     1.0.0
 * Author:      MrDemonWolf
 * Author URI:  https://mrdemonwolf.com
 * License:     GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mrdemonwolf-extensions
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Plugin constants.
define( 'MRDEMONWOLF_EXT_VERSION', '1.0.0' );
define( 'MRDEMONWOLF_EXT_DIR', plugin_dir_path( __FILE__ ) );
define( 'MRDEMONWOLF_EXT_URL', plugin_dir_url( __FILE__ ) );

// Load modules.
require_once MRDEMONWOLF_EXT_DIR . 'includes/admin-bar.php';
require_once MRDEMONWOLF_EXT_DIR . 'includes/oembed.php';
require_once MRDEMONWOLF_EXT_DIR . 'includes/enqueue.php';
