<?php
/**
 * Plugin Name: Fuel Your Photos SEO Preview Blocks
 * Plugin URI: https://github.com/delster/fyp-seo-preview-blocks
 * Description: Gutenberg Blocks for SERP previews (pages, YouTube videos, etc)
 * Author: David elster
 * Author URI: https://github.com/delster/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package fyp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
