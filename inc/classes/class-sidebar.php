<?php
/**
 * Sidebar Class
 *
 * Handles sidebars and widgets.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Sidebar Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Sidebar {

    /**
     * Sidebar instance
     *
     * @since 1.0.0
     * @var Nextoolify_Real_Estate_Sidebar
     */
    private static $instance = null;

    /**
     * Get instance
     *
     * @since 1.0.0
     * @return Nextoolify_Real_Estate_Sidebar
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
        // Widget areas are registered in functions.php
        // This class provides helper methods
    }

    /**
     * Display sidebar
     *
     * @since 1.0.0
     * @param string $sidebar_id Sidebar ID.
     * @return void
     */
    public function display_sidebar( $sidebar_id = 'sidebar-1' ) {
        if ( $this->is_active( $sidebar_id ) ) {
            dynamic_sidebar( $sidebar_id );
        }
    }

    /**
     * Check if sidebar is active
     *
     * @since 1.0.0
     * @param string $sidebar_id Sidebar ID.
     * @return bool
     */
    public function is_active( $sidebar_id = 'sidebar-1' ) {
        return is_active_sidebar( $sidebar_id );
    }

    /**
     * Get sidebar count
     *
     * @since 1.0.0
     * @param string $sidebar_id Sidebar ID.
     * @return int
     */
    public function get_widget_count( $sidebar_id = 'sidebar-1' ) {
        if ( ! $this->is_active( $sidebar_id ) ) {
            return 0;
        }

        $sidebars_widgets = wp_get_sidebars_widgets();
        return isset( $sidebars_widgets[ $sidebar_id ] ) ? count( $sidebars_widgets[ $sidebar_id ] ) : 0;
    }

    /**
     * Get registered sidebars
     *
     * @since 1.0.0
     * @return array
     */
    public function get_registered_sidebars() {
        global $wp_registered_sidebars;
        return $wp_registered_sidebars;
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
