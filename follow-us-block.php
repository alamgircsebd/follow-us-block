<?php
/**
 * Plugin Name:       Follow Us Block
 * Description:       Follow us gutenberg block with some patterns.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Alamgir
 * License:           GPL-2.0-or-later
 * License URI:       https://github.com/alamgircsebd/
 * Text Domain:       follow-us-block
 *
 * @package           create-block
 */

define( 'FOLLOW_US_DIR', __DIR__ );
define( 'FOLLOW_US_FILE', __FILE__ );

require FOLLOW_US_DIR . '/inc/patterns.php';

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_follow_us_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_follow_us_block_block_init' );
