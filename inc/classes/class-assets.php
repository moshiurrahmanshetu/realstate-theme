<?php
/**
 * Assets Class
 *
 * Handles CSS and JavaScript asset registration and enqueuing.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Assets Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Assets {

    /**
     * Assets instance
     *
     * @since 1.0.0
     * @var Nextoolify_Real_Estate_Assets
     */
    private static $instance = null;

    /**
     * Theme version
     *
     * @since 1.0.0
     * @var string
     */
    private $version;

    /**
     * Get instance
     *
     * @since 1.0.0
     * @return Nextoolify_Real_Estate_Assets
     */
    public static function get_instance() {
        if ( null === self::$instance ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Constructor
     *
     * @since 1.0.0
     */
    private function __construct() {
        $this->version = Nextoolify_Real_Estate_Theme::get_version();
        $this->init_hooks();
    }

    /**
     * Initialize hooks
     *
     * @since 1.0.0
     * @return void
     */
    private function init_hooks() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_frontend_assets' ) );
        add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_editor_assets' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_assets' ) );
        add_action( 'customize_preview_init', array( $this, 'enqueue_customizer_assets' ) );
    }

    /**
     * Enqueue frontend assets
     *
     * @since 1.0.0
     * @return void
     */
    public function enqueue_frontend_assets() {
        // CSS
        $this->register_frontend_styles();
        $this->enqueue_frontend_styles();

        // JavaScript
        $this->register_frontend_scripts();
        $this->enqueue_frontend_scripts();
    }

    /**
     * Register frontend styles
     *
     * @since 1.0.0
     * @return void
     */
    private function register_frontend_styles() {
        wp_register_style(
            'bootstrap-css',
            get_template_directory_uri() . '/assets/css/bootstrap.min.css',
            array(),
            '5.3.2'
        );

        wp_register_style(
            'swiper-css',
            get_template_directory_uri() . '/assets/css/swiper.min.css',
            array(),
            '11.0.5'
        );

        wp_register_style(
            'aos-css',
            get_template_directory_uri() . '/assets/css/aos.css',
            array(),
            '2.3.4'
        );

        wp_register_style(
            'font-awesome',
            get_template_directory_uri() . '/assets/css/font-awesome.min.css',
            array(),
            '6.5.1'
        );

        wp_register_style(
            'nextoolify-real-estate-style',
            get_stylesheet_uri(),
            array(),
            $this->version
        );

        wp_register_style(
            'nextoolify-real-estate-responsive',
            get_template_directory_uri() . '/assets/css/responsive.css',
            array( 'nextoolify-real-estate-style' ),
            $this->version
        );
    }

    /**
     * Enqueue frontend styles
     *
     * @since 1.0.0
     * @return void
     */
    private function enqueue_frontend_styles() {
        wp_enqueue_style( 'bootstrap-css' );
        wp_enqueue_style( 'swiper-css' );
        wp_enqueue_style( 'aos-css' );
        wp_enqueue_style( 'font-awesome' );
        wp_enqueue_style( 'nextoolify-real-estate-style' );
        wp_enqueue_style( 'nextoolify-real-estate-responsive' );
    }

    /**
     * Register frontend scripts
     *
     * @since 1.0.0
     * @return void
     */
    private function register_frontend_scripts() {
        wp_register_script(
            'bootstrap-js',
            get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
            array(),
            '5.3.2',
            true
        );

        wp_register_script(
            'swiper-js',
            get_template_directory_uri() . '/assets/js/swiper.min.js',
            array(),
            '11.0.5',
            true
        );

        wp_register_script(
            'aos-js',
            get_template_directory_uri() . '/assets/js/aos.js',
            array(),
            '2.3.4',
            true
        );

        wp_register_script(
            'nextoolify-real-estate-main',
            get_template_directory_uri() . '/assets/js/main.js',
            array( 'jquery', 'bootstrap-js' ),
            $this->version,
            true
        );
    }

    /**
     * Enqueue frontend scripts
     *
     * @since 1.0.0
     * @return void
     */
    private function enqueue_frontend_scripts() {
        wp_enqueue_script( 'bootstrap-js' );
        wp_enqueue_script( 'swiper-js' );
        wp_enqueue_script( 'aos-js' );
        wp_enqueue_script( 'nextoolify-real-estate-main' );

        // Localize script
        wp_localize_script( 'nextoolify-real-estate-main', 'nextoolifyRealEstate', array(
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
            'nonce'   => wp_create_nonce( 'nextoolify_real_estate_nonce' ),
            'strings' => array(
                'loading' => esc_html__( 'Loading...', 'nextoolify-real-estate' ),
                'error'   => esc_html__( 'An error occurred. Please try again.', 'nextoolify-real-estate' ),
            ),
        ) );

        // Comment reply
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }

    /**
     * Enqueue editor assets
     *
     * @since 1.0.0
     * @return void
     */
    public function enqueue_editor_assets() {
        wp_enqueue_style(
            'nextoolify-real-estate-editor-style',
            get_template_directory_uri() . '/assets/css/editor-style.css',
            array(),
            $this->version
        );

        wp_enqueue_style(
            'bootstrap-editor-css',
            get_template_directory_uri() . '/assets/css/bootstrap.min.css',
            array(),
            '5.3.2'
        );

        wp_enqueue_style(
            'font-awesome-editor',
            get_template_directory_uri() . '/assets/css/font-awesome.min.css',
            array(),
            '6.5.1'
        );
    }

    /**
     * Enqueue admin assets
     *
     * @since 1.0.0
     * @param string $hook Current admin hook.
     * @return void
     */
    public function enqueue_admin_assets( $hook ) {
        wp_enqueue_style(
            'nextoolify-real-estate-admin-style',
            get_template_directory_uri() . '/assets/css/admin-style.css',
            array(),
            $this->version
        );
    }

    /**
     * Enqueue customizer assets
     *
     * @since 1.0.0
     * @return void
     */
    public function enqueue_customizer_assets() {
        wp_enqueue_style(
            'nextoolify-real-estate-customizer',
            get_template_directory_uri() . '/assets/css/customizer.css',
            array(),
            $this->version
        );
    }

    /**
     * Get asset URL
     *
     * @since 1.0.0
     * @param string $path Asset path relative to assets directory.
     * @return string
     */
    public static function get_asset_url( $path ) {
        return get_template_directory_uri() . '/assets/' . ltrim( $path, '/' );
    }

    /**
     * Prevent cloning
     *
     * @since 1.0.0
     * @return void
     */
    private function __clone() {}

    /**
     * Prevent unserialization
     *
     * @since 1.0.0
     * @return void
     */
    public function __wakeup() {
        throw new Exception( 'Cannot unserialize singleton' );
    }
}
