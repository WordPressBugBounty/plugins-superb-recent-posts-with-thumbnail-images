<?php

namespace SuperbRecentPosts;

/*
Plugin Name: Superb Recent Posts With Thumbnail Images
Description: Responsive Recent Posts Widget With Images for WordPress. Lightweight & SEO Optimized Code. Free.
Version: 1.5.0
Author: SuPlugins
Author URI: http://superbthemes.com/
License: GPL2 or later
*/

defined('ABSPATH') || exit;

if (!defined('WPINC')) {
    die;
}
// Constants
if (!defined('SUPERBRECENTPOSTS_VERSION')) {
    define('SUPERBRECENTPOSTS_VERSION', '1.5.0');
}

if (!defined('SUPERBRECENTPOSTS_BASE_PATH')) {
    define('SUPERBRECENTPOSTS_BASE_PATH', __FILE__);
}

if (!defined('SUPERBRECENTPOSTS_PATH')) {
    define('SUPERBRECENTPOSTS_PATH', untrailingslashit(plugins_url('', SUPERBRECENTPOSTS_BASE_PATH)));
}

if (!defined('SUPERBRECENTPOSTS_PLUGIN_DIR')) {
    define('SUPERBRECENTPOSTS_PLUGIN_DIR', untrailingslashit(dirname(SUPERBRECENTPOSTS_BASE_PATH)));
}

if (!defined('SUPERBRECENTPOSTS_ASSETS_PATH')) {
    define('SUPERBRECENTPOSTS_ASSETS_PATH', SUPERBRECENTPOSTS_PATH . '/assets');
}
//

// Autoload
require_once SUPERBRECENTPOSTS_PLUGIN_DIR . '/vendor/autoload.php';

use \SuperbRecentPosts\SuperbRecentPosts;

$spbrposts = SuperbRecentPosts::GetInstance();

//
