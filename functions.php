<?php
/**
 * Nextoolify Real Estate Theme Functions
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 *
 * @since 1.0.0
 */
function nextoolify_real_estate_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) );
    add_theme_support( 'custom-header', array(
        'default-image'          => '',
        'width'                  => 1920,
        'height'                 => 600,
        'flex-height'            => true,
        'flex-width'             => true,
        'uploads'                => true,
        'random-default'         => false,
        'header-text'            => true,
        'default-text-color'     => '333333',
    ) );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );

    // Add image sizes
    add_image_size( 'nextoolify-property-thumb', 400, 300, true );
    add_image_size( 'nextoolify-property-large', 800, 600, true );
    add_image_size( 'nextoolify-agent-thumb', 150, 150, true );
    add_image_size( 'nextoolify-hero', 1920, 800, true );

    // Register navigation menus
    register_nav_menus( array(
        'primary'   => esc_html__( 'Primary Menu', 'nextoolify-real-estate' ),
        'footer'    => esc_html__( 'Footer Menu', 'nextoolify-real-estate' ),
        'top-bar'   => esc_html__( 'Top Bar Menu', 'nextoolify-real-estate' ),
    ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'nextoolify_real_estate_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nextoolify_real_estate_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'nextoolify_real_estate_content_width', 1200 );
}
add_action( 'after_setup_theme', 'nextoolify_real_estate_content_width', 0 );

/**
 * Register block pattern categories.
 *
 * @since 1.0.0
 */
function nextoolify_real_estate_register_block_pattern_categories() {
    register_block_pattern_category(
        'hero',
        array(
            'label'       => esc_html__( 'Hero', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Hero sections with call-to-action elements.', 'nextoolify-real-estate' ),
        )
    );

    register_block_pattern_category(
        'about',
        array(
            'label'       => esc_html__( 'About', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'About sections and team introductions.', 'nextoolify-real-estate' ),
        )
    );

    register_block_pattern_category(
        'features',
        array(
            'label'       => esc_html__( 'Features', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Feature highlights and service displays.', 'nextoolify-real-estate' ),
        )
    );

    register_block_pattern_category(
        'cta',
        array(
            'label'       => esc_html__( 'Call to Action', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Call-to-action sections for conversions.', 'nextoolify-real-estate' ),
        )
    );

    register_block_pattern_category(
        'gallery',
        array(
            'label'       => esc_html__( 'Gallery', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Image galleries and portfolios.', 'nextoolify-real-estate' ),
        )
    );

    register_block_pattern_category(
        'testimonials',
        array(
            'label'       => esc_html__( 'Testimonials', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Customer testimonials and reviews.', 'nextoolify-real-estate' ),
        )
    );

    register_block_pattern_category(
        'contact',
        array(
            'label'       => esc_html__( 'Contact', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Contact forms and information sections.', 'nextoolify-real-estate' ),
        )
    );

    register_block_pattern_category(
        'blog',
        array(
            'label'       => esc_html__( 'Blog', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Blog post layouts and archives.', 'nextoolify-real-estate' ),
        )
    );

    register_block_pattern_category(
        'footer',
        array(
            'label'       => esc_html__( 'Footer', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Footer layouts and copyright sections.', 'nextoolify-real-estate' ),
        )
    );
}
add_action( 'init', 'nextoolify_real_estate_register_block_pattern_categories' );

/**
 * Register widget areas.
 *
 * @since 1.0.0
 */
function nextoolify_real_estate_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Main Sidebar', 'nextoolify-real-estate' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'nextoolify-real-estate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 1', 'nextoolify-real-estate' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here to appear in footer column 1.', 'nextoolify-real-estate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 2', 'nextoolify-real-estate' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here to appear in footer column 2.', 'nextoolify-real-estate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 3', 'nextoolify-real-estate' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here to appear in footer column 3.', 'nextoolify-real-estate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 4', 'nextoolify-real-estate' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here to appear in footer column 4.', 'nextoolify-real-estate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'nextoolify_real_estate_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function nextoolify_real_estate_scripts() {
    // Get theme version
    $theme_version = wp_get_theme()->get( 'Version' );

    // Bootstrap 5 CSS
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.2' );

    // Swiper CSS
    wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '11.0.5' );

    // AOS CSS
    wp_enqueue_style( 'aos-css', get_template_directory_uri() . '/assets/css/aos.css', array(), '2.3.4' );

    // Font Awesome
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '6.5.1' );

    // Theme Style CSS
    wp_enqueue_style( 'nextoolify-real-estate-style', get_stylesheet_uri(), array(), $theme_version );

    // Responsive CSS
    wp_enqueue_style( 'nextoolify-real-estate-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array( 'nextoolify-real-estate-style' ), $theme_version );

    // Bootstrap 5 JS
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.3.2', true );

    // Swiper JS
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '11.0.5', true );

    // AOS JS
    wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/js/aos.js', array(), '2.3.4', true );

    // Theme Main JS
    wp_enqueue_script( 'nextoolify-real-estate-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery', 'bootstrap-js' ), $theme_version, true );

    // Localize script for AJAX
    wp_localize_script( 'nextoolify-real-estate-main', 'nextoolifyRealEstate', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'nextoolify_real_estate_nonce' ),
        'strings' => array(
            'loading' => esc_html__( 'Loading...', 'nextoolify-real-estate' ),
            'error'   => esc_html__( 'An error occurred. Please try again.', 'nextoolify-real-estate' ),
        ),
    ) );

    // Comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'nextoolify_real_estate_scripts' );

/**
 * Enqueue admin styles and scripts.
 *
 * @since 1.0.0
 */
function nextoolify_real_estate_admin_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );
    
    wp_enqueue_style( 'nextoolify-real-estate-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), $theme_version );
}
add_action( 'admin_enqueue_scripts', 'nextoolify_real_estate_admin_scripts' );

/**
 * Enqueue editor styles and scripts.
 *
 * @since 1.0.0
 */
function nextoolify_real_estate_editor_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    // Editor stylesheet
    wp_enqueue_style( 'nextoolify-real-estate-editor-style', get_template_directory_uri() . '/assets/css/editor-style.css', array(), $theme_version );

    // Bootstrap 5 CSS for editor
    wp_enqueue_style( 'bootstrap-editor-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.2' );

    // Font Awesome for editor
    wp_enqueue_style( 'font-awesome-editor', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '6.5.1' );
}
add_action( 'enqueue_block_editor_assets', 'nextoolify_real_estate_editor_scripts' );

/**
 * Customizer preview styles.
 *
 * @since 1.0.0
 */
function nextoolify_real_estate_customizer_preview_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );
    
    wp_enqueue_style( 'nextoolify-real-estate-customizer', get_template_directory_uri() . '/assets/css/customizer.css', array(), $theme_version );
}
add_action( 'customize_preview_init', 'nextoolify_real_estate_customizer_preview_styles' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since 1.0.0
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function nextoolify_real_estate_resource_hints( $urls, $relation_type ) {
    if ( wp_style_is( 'nextoolify-real-estate-style', 'queue' ) && 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}
add_filter( 'wp_resource_hints', 'nextoolify_real_estate_resource_hints', 10, 2 );

/**
 * Load customizer autoload system.
 */
if ( file_exists( get_template_directory() . '/inc/customizer/autoload.php' ) ) {
    require get_template_directory() . '/inc/customizer/autoload.php';
}

/**
 * Custom template tags for this theme.
 */
if ( file_exists( get_template_directory() . '/inc/template-tags/header-tags.php' ) ) {
    require get_template_directory() . '/inc/template-tags/header-tags.php';
}

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
if ( file_exists( get_template_directory() . '/inc/helpers/template-helpers.php' ) ) {
    require get_template_directory() . '/inc/helpers/template-helpers.php';
}

/**
 * Layout helper functions.
 */
if ( file_exists( get_template_directory() . '/inc/helpers/layout-helpers.php' ) ) {
    require get_template_directory() . '/inc/helpers/layout-helpers.php';
}
