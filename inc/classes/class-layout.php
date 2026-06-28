<?php
/**
 * Layout Class
 *
 * Wraps existing layout helper functions for object-oriented access.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Layout Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Layout {

    /**
     * Layout instance
     *
     * @since 1.0.0
     * @var Nextoolify_Real_Estate_Layout
     */
    private static $instance = null;

    /**
     * Get instance
     *
     * @since 1.0.0
     * @return Nextoolify_Real_Estate_Layout
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
        // Layout helpers are already loaded via functions.php
        // This class provides an OOP wrapper for backward compatibility
    }

    /**
     * Get container class
     *
     * @since 1.0.0
     * @param string $context Context for the container.
     * @return string
     */
    public function get_container_class( $context = 'content' ) {
        return nextoolify_get_container_class( $context );
    }

    /**
     * Get content width
     *
     * @since 1.0.0
     * @return int
     */
    public function get_content_width() {
        return nextoolify_get_content_width();
    }

    /**
     * Get sidebar position
     *
     * @since 1.0.0
     * @return string
     */
    public function get_sidebar_position() {
        return nextoolify_get_sidebar_position();
    }

    /**
     * Get layout class
     *
     * @since 1.0.0
     * @param string $sidebar_position Sidebar position.
     * @return string
     */
    public function get_layout_class( $sidebar_position = '' ) {
        return nextoolify_get_layout_class( $sidebar_position );
    }

    /**
     * Get wrapper class
     *
     * @since 1.0.0
     * @param string $context Context for the wrapper.
     * @return string
     */
    public function get_wrapper_class( $context = 'main' ) {
        return nextoolify_get_wrapper_class( $context );
    }

    /**
     * Get section class
     *
     * @since 1.0.0
     * @param string $section Section identifier.
     * @param array $additional_classes Additional classes.
     * @return string
     */
    public function get_section_class( $section = '', $additional_classes = array() ) {
        return nextoolify_get_section_class( $section, $additional_classes );
    }

    /**
     * Get column class
     *
     * @since 1.0.0
     * @param string $sidebar_position Sidebar position.
     * @param string $context Context.
     * @return string
     */
    public function get_column_class( $sidebar_position = '', $context = 'content' ) {
        return nextoolify_get_column_class( $sidebar_position, $context );
    }

    /**
     * Check if sidebar is active
     *
     * @since 1.0.0
     * @param string $sidebar_id Sidebar ID.
     * @return bool
     */
    public function is_sidebar_active( $sidebar_id = 'sidebar-1' ) {
        return nextoolify_is_sidebar_active( $sidebar_id );
    }

    /**
     * Check if layout has sidebar
     *
     * @since 1.0.0
     * @return bool
     */
    public function has_sidebar() {
        return nextoolify_has_sidebar();
    }

    /**
     * Get layout type
     *
     * @since 1.0.0
     * @return string
     */
    public function get_layout_type() {
        return nextoolify_get_layout_type();
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
