<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
    	/* From Parent Theme */
    	wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'wp-bootstrap-starter-bootstrap-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

function custom_scripts() {
	/* Slick */
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/slick/slick.css', array( ) );
    wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/slick/slick-theme.css', array( ) );
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/slick/slick.min.js', array('jquery') );

    /* Custom Script */
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/script.js', array('jquery') );

    /* Custom WooCommerce CSS */
    wp_enqueue_style( 'woocommerce-css', get_stylesheet_directory_uri() . '/woocommerce.css', array( ) );
}
add_action('wp_enqueue_scripts','custom_scripts',10);
// END ENQUEUE PARENT ACTION
