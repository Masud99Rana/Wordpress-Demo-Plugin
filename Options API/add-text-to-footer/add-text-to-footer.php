<?php
/*
Plugin Name: MR Simple Plugin
Plugin URI: https://github.com/zgordon/wp-dev-course
Description: Demo plugin for learning about the plugin information comment.
Version: 1.0.0
Contributors: Masud
Author: Masud Rana
Author URI: fb.com/masudrana99mr
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wpplugin
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

// Define plugin paths and URLs
define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );


// Create Plugin Options
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-options.php');

// Create Plugin Admin Menus and Setting Pages
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-menus.php');

// Add the wpplugin_options to the footer
function wpplugin_custom_admin_footer( $footer ) {

  $footer_text = esc_html( get_option( 'wpplugin_options' ) );

  return $footer_text;

}
add_filter( 'admin_footer_text', 'wpplugin_custom_admin_footer', 10, 1 );


?>
