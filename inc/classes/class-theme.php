<?php
/**
 * Theme Bootstrap Class
 *
 * Main theme class that initializes all modules.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Theme {

    /**
     * Theme instance
     *
     * @since 1.0.0
     * @var Nextoolify_Real_Estate_Theme
     */
    private static $instance = null;

    /**
     * Theme version
     *
     * @since 1.0.0
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * Theme slug
     *
     * @since 1.0.0
     * @var string
     */
    const SLUG = 'nextoolify-real-estate';

    /**
     * Get instance
     *
     * @since 1.0.0
     * @return Nextoolify_Real_Estate_Theme
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
        $this->load_dependencies();
        $this->init_hooks();
    }

    /**
     * Load dependencies
     *
     * @since 1.0.0
     * @return void
     */
    private function load_dependencies() {
        // Load core classes
        $classes_dir = get_template_directory() . '/inc/classes/';

        $classes = array(
            'class-assets',
            'class-layout',
            'class-navigation',
            'class-sidebar',
            'class-accessibility',
            'class-performance',
            'class-hooks',
        );

        foreach ( $classes as $class_file ) {
            $file_path = $classes_dir . $class_file . '.php';
            if ( file_exists( $file_path ) ) {
                require_once $file_path;
            }
        }
    }

    /**
     * Initialize hooks
     *
     * @since 1.0.0
     * @return void
     */
    private function init_hooks() {
        add_action( 'after_setup_theme', array( $this, 'setup_theme' ), 0 );
        add_action( 'init', array( $this, 'init_modules' ) );
    }

    /**
     * Setup theme
     *
     * @since 1.0.0
     * @return void
     */
    public function setup_theme() {
        // Theme support is already handled in functions.php
        // This hook is for any additional setup needed by the class architecture
        do_action( 'nextoolify_theme_setup' );
    }

    /**
     * Initialize modules
     *
     * @since 1.0.0
     * @return void
     */
    public function init_modules() {
        // Initialize core modules
        if ( class_exists( 'Nextoolify_Real_Estate_Assets' ) ) {
            Nextoolify_Real_Estate_Assets::get_instance();
        }

        if ( class_exists( 'Nextoolify_Real_Estate_Layout' ) ) {
            Nextoolify_Real_Estate_Layout::get_instance();
        }

        if ( class_exists( 'Nextoolify_Real_Estate_Navigation' ) ) {
            Nextoolify_Real_Estate_Navigation::get_instance();
        }

        if ( class_exists( 'Nextoolify_Real_Estate_Sidebar' ) ) {
            Nextoolify_Real_Estate_Sidebar::get_instance();
        }

        if ( class_exists( 'Nextoolify_Real_Estate_Accessibility' ) ) {
            Nextoolify_Real_Estate_Accessibility::get_instance();
        }

        if ( class_exists( 'Nextoolify_Real_Estate_Performance' ) ) {
            Nextoolify_Real_Estate_Performance::get_instance();
        }

        if ( class_exists( 'Nextoolify_Real_Estate_Hooks' ) ) {
            Nextoolify_Real_Estate_Hooks::get_instance();
        }

        do_action( 'nextoolify_modules_init' );
    }

    /**
     * Get theme version
     *
     * @since 1.0.0
     * @return string
     */
    public static function get_version() {
        return self::VERSION;
    }

    /**
     * Get theme slug
     *
     * @since 1.0.0
     * @return string
     */
    public static function get_slug() {
        return self::SLUG;
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
