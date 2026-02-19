# MrDemonWolf Extensions

A lightweight WordPress plugin that bundles useful site customizations into a single package.

## Features

- **Admin Bar Greeting** - Replaces "Howdy," with a time-based greeting (Good morning/afternoon/evening)
- **oEmbed Author Removal** - Strips author name and URL from oEmbed response data
- **Custom CSS & JS** - Enqueues `custom.css` and `custom.js` with automatic `filemtime()` cache-busting

## Installation

1. Download the latest release ZIP from [Releases](https://github.com/mrdemonwolf/mrdemonwolf-extensions/releases)
2. Upload via **Plugins > Add New > Upload Plugin** in WordPress admin
3. Activate the plugin

Or clone/symlink into `wp-content/plugins/`:

```bash
cd wp-content/plugins
git clone https://github.com/mrdemonwolf/mrdemonwolf-extensions.git
```

## Adding Custom CSS & JS

Edit the starter files in the `assets/` directory:

- `assets/css/custom.css` - Custom styles
- `assets/js/custom.js` - Custom scripts

Changes are automatically cache-busted using file modification timestamps.

## Adding New Modules

1. Create a new PHP file in `includes/` (e.g. `includes/my-feature.php`)
2. Add an ABSPATH guard and your hooked functions with the `mrdemonwolf_` prefix
3. Add `require_once MRDEMONWOLF_EXT_DIR . 'includes/my-feature.php';` to the main plugin file

## License

GPL-2.0+ - see [LICENSE.md](LICENSE.md) for details.
