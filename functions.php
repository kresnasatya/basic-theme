<?php

/**
 * Theme functions
 */

 /**
  * Theme Support.
  */
if (! function_exists('btx_setup') ) {
    function btx_setup() {
        add_theme_support('title-tag');
    }
}

add_action( 'after_setup_theme', 'btx_setup' );

if (! function_exists('btx_scripts') ) {
    function btx_scripts() {
        wp_enqueue_style( 'btx-style', get_stylesheet_uri(), [], '1.0' );
    }
}

add_action( 'wp_enqueue_scripts', 'btx_scripts' );

/**
 * Register menu
 */
if (! function_exists('btx_register') ) {
    function btx_register() {
        register_nav_menu( 'primary-navigation', 'Primary Navigation' );
    }
}

add_action( 'init', 'btx_register' );