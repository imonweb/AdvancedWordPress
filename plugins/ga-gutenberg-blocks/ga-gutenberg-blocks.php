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

  // Gutenberg Editor CSS (Backend)
  wp_register_style(
    'ga-editor-styles', // name
    plugins_url( 'build/index.js', __FILE__ ), // file
    array(), //dependencies
    filemtime( plugin_dir_path( __FILE__ ) . 'build/editor.css') // version
  );

  // Front-end Stylesheet
  wp_register_style(
    'ga-front-end-styles', // name
    plugins_url( 'build/index.js', __FILE__ ), // file
    array(), //dependencies
    filemtime( plugin_dir_path( __FILE__ ) . 'build/style.css') // version
  );

  // An array of blocks
  $blocks = array(
    'ga/testimonial'
    
  );

  // Add the blocks and register the stylesheets
  foreach($blocks as $block){
    register_block_type( $block, array(
      'editor_script' => 'ga-editor-script',
      'editor_style' => 'ga-editor-style', // backend css
      'style' => 'ga-front-end-styles', // front end css
    ) );
  } 
}