<?php
/**
 * Plugin Name: Fuel Your Photos SEO Preview Blocks
 * Plugin URI: https://github.com/delster/fyp-seo-preview-blocks
 * Description: Gutenberg Blocks for SERP previews (pages, YouTube videos, etc)
 * Author: David Elster
 * Author URI: https://github.com/delster/
 * Version: 1.0.0
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 *
 * @package fyp-seo-preview
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
