<?php
/*
Plugin Name: Gravity Forms - Placeholders add-on
Plugin URI: http://github.com/neojp/gravity-forms-placeholders/
Description: Adds HTML5 placeholder support to Gravity Forms' fields with a javascript fallback. Javascript & jQuery are required.
Version: 1.0
Author: Joan Piedra
Author URI: http://joanpiedra.com

Instructions:
Just add a "gplaceholder" CSS classname to the required fields.

*/

if ( isset( $GLOBALS['pagenow'] ) && $GLOBALS['pagenow'] == 'wp-login.php' )
	return;

add_action( 'wp_print_scripts', 'gf_placeholder_enqueue_scripts' );
function gf_placeholder_enqueue_scripts() {
	wp_enqueue_script( '_gf_placeholders', plugins_url( null, __FILE__ ) . '/gf.placeholders.js.php', array( 'jquery'), '1.0' );
}