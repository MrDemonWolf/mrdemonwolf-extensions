=== MrDemonWolf Extensions ===
Contributors: mrdemonwolf
Tags: admin bar, oembed, custom css, custom js, customization
Requires at least: 5.0
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A collection of small WordPress customizations: time-based admin bar greeting, oEmbed author removal, and custom CSS/JS enqueuing.

== Description ==

MrDemonWolf Extensions bundles several useful WordPress tweaks into a single lightweight plugin:

* **Admin Bar Greeting** - Replaces the default "Howdy," with a time-based greeting (Good morning, Good afternoon, or Good evening).
* **oEmbed Author Removal** - Strips author name and URL from oEmbed response data for cleaner embeds.
* **Custom CSS & JS** - Enqueues `custom.css` and `custom.js` from the plugin's assets folder, with automatic cache-busting via `filemtime()`.

== Installation ==

1. Upload the `mrdemonwolf-extensions` folder to `/wp-content/plugins/`.
2. Activate the plugin through the **Plugins** menu in WordPress.
3. That's it! The customizations are active immediately.

To add your own styles or scripts, edit the files in `wp-content/plugins/mrdemonwolf-extensions/assets/css/custom.css` and `assets/js/custom.js`.

== Frequently Asked Questions ==

= Can I disable a specific feature? =

Currently all features are enabled by default. To disable one, comment out or remove the corresponding `require_once` line in the main plugin file.

= Where do I add my custom CSS and JS? =

Edit the files at `assets/css/custom.css` and `assets/js/custom.js` inside the plugin folder. Changes are cache-busted automatically.

== Changelog ==

= 1.0.0 =
* Initial release
* Time-based admin bar greeting (replaces "Howdy,")
* oEmbed author info removal
* Custom CSS and JS enqueuing with cache-busting
* Facebook-style developer console warning
