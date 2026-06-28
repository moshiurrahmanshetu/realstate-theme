<?php
/**
 * Customizer Autoloader
 *
 * Autoloads customizer classes and files.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Customizer Autoload Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Customizer_Autoload {

    /**
     * Constructor
     *
     * @since 1.0.0
     */
    public function __construct() {
        spl_autoload_register( array( $this, 'autoload_classes' ) );
        $this->load_files();
    }

    /**
     * Autoload classes
     *
     * @since 1.0.0
     * @param string $class Class name.
     * @return void
     */
    public function autoload_classes( $class ) {
        // Only autoload our customizer classes
        if ( strpos( $class, 'Nextoolify_Real_Estate_Customizer_' ) !== 0 ) {
            return;
        }

        // Convert class name to file name
        $class_name = strtolower( str_replace( '_', '-', str_replace( 'Nextoolify_Real_Estate_Customizer_', '', $class ) ) );
        $file_path = trailingslashit( get_template_directory() ) . 'inc/customizer/class-' . $class_name . '.php';

        if ( file_exists( $file_path ) ) {
            require_once $file_path;
        }
    }

    /**
     * Load customizer files
     *
     * @since 1.0.0
     * @return void
     */
    private function load_files() {
        $customizer_dir = trailingslashit( get_template_directory() ) . 'inc/customizer/';
        $files = array(
            'sanitize',
            'controls',
            'general',
            'header',
            'footer',
            'colors',
            'typography',
            'social',
            'blog',
        );

        foreach ( $files as $file ) {
            $file_path = $customizer_dir . $file . '.php';
            if ( file_exists( $file_path ) ) {
                require_once $file_path;
            }
        }
    }
}

// Initialize the autoloader
new Nextoolify_Real_Estate_Customizer_Autoload();
