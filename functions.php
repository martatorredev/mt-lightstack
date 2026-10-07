<?php
/**
 * Theme functions.
 *
 * @package MT_Lightstack
 */

/**
 * Enqueue the theme stylesheet.
 */
function mt_lightstack_enqueue_styles() {
        wp_enqueue_style(
                'mt-lightstack-style',
                get_stylesheet_uri(),
                array(),
                (string) filemtime( get_stylesheet_directory() . '/style.css' )
        );
}
add_action( 'wp_enqueue_scripts', 'mt_lightstack_enqueue_styles' );
