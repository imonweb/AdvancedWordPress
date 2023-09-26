<?php 
 
/* ================== */
/* 
  Plugin Name: Gourmet Artist Gutenberg Blocks 
  Plugin URI:
  Description: Adds Gutenberg Blocks
  Version: 1.0
  Author: John Doe
  Author URI: https://www.twitter.com/JohnDoe
  License: GPL2
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/*  Prevent the execution */
if(!defined('ABSPATH')) exit;

/*  Register The Gutenberg blocks and CSS */

add_action('init', 'ga_register_gutenberg_blocks');
function ga_register_gutenberg_blocks() {
  // Check if gutenberg is installed

  if( !function_exists('register_block_type')){
    return;
  }

  // Register the Block editor script
  wp_register_script(
    'ga-editor-script',
    plugins_url( 'build/index.js', __FILE__ ), // url to file
    array('wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor'), // dependencies
    filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js') // version
  );
}