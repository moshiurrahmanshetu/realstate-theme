<?php
/**
 * Nextoolify Real Estate Child Theme Functions and Definitions
 *
 * @package Nextoolify_Real_Estate_Child
 * @since 1.0.0
 */

/**
 * Enqueue parent and child theme styles.
 *
 * @since 1.0.0
 */
function nextoolify_child_enqueue_styles() {
    // Parent theme style.css
    wp_enqueue_style(
        'nextoolify-real-estate-parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme( get_template() )->get( 'Version' )
    );

    // Child theme style.css
    wp_enqueue_style(
        'nextoolify-real-estate-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'nextoolify-real-estate-parent-style' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'nextoolify_child_enqueue_styles' );

/**
 * Load child theme text domain for translation.
 *
 * @since 1.0.0
 */
function nextoolify_child_load_textdomain() {
    load_child_theme_textdomain( 'nextoolify-real-estate-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'nextoolify_child_load_textdomain' );
