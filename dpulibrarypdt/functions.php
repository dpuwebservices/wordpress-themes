<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'genericons','twentysixteen-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 20 );

function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( 'Topic: ', true );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );

// END ENQUEUE PARENT ACTION