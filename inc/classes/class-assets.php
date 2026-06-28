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
        // Register modular CSS files
        $css_files = array(
            'variables',
            'base',
            'typography',
            'layout',
            'header',
            'navigation',
            'footer',
            'buttons',
            'forms',
            'cards',
            'blog',
            'widgets',
            'utilities',
            'animations',
            'responsive',
        );

        foreach ( $css_files as $file ) {
            wp_register_style(
                'nextoolify-' . $file,
                get_template_directory_uri() . '/assets/css/' . $file . '.css',
                array(),
                $this->version
            );
        }
    }

    /**
     * Enqueue frontend styles
     *
     * @since 1.0.0
     * @return void
     */
    private function enqueue_frontend_styles() {
        $css_files = array(
            'variables',
            'base',
            'typography',
            'layout',
            'header',
            'navigation',
            'footer',
            'buttons',
            'forms',
            'cards',
            'blog',
            'widgets',
            'utilities',
            'animations',
            'responsive',
        );

        foreach ( $css_files as $file ) {
            wp_enqueue_style( 'nextoolify-' . $file );
        }
    }

    /**
     * Register frontend scripts
     *
     * @since 1.0.0
     * @return void
     */
    private function register_frontend_scripts() {
        // Customizer script
        wp_register_script(
            'nextoolify-customizer',
            get_template_directory_uri() . '/assets/js/customizer.js',
            array( 'jquery' ),
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
    }

    /**
     * Enqueue admin assets
     *
     * @since 1.0.0
     * @param string $hook Current admin hook.
     * @return void
     */
    public function enqueue_admin_assets( $hook ) {
        // Only load on theme settings pages
        if ( 'appearance_page_theme-options' !== $hook && 'themes.php' !== $hook ) {
            return;
        }
    }

    /**
     * Enqueue customizer assets
     *
     * @since 1.0.0
     * @return void
     */
    public function enqueue_customizer_assets() {
        wp_enqueue_script(
            'nextoolify-customizer',
            get_template_directory_uri() . '/assets/js/customizer.js',
            array( 'jquery', 'customize-preview' ),
            $this->version,
            true
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
