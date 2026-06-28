<?php
/**
 * Navigation Class
 *
 * Handles navigation menus and menu helpers.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Navigation Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Navigation {

    /**
     * Navigation instance
     *
     * @since 1.0.0
     * @var Nextoolify_Real_Estate_Navigation
     */
    private static $instance = null;

    /**
     * Get instance
     *
     * @since 1.0.0
     * @return Nextoolify_Real_Estate_Navigation
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
        $this->init_hooks();
    }

    /**
     * Initialize hooks
     *
     * @since 1.0.0
     * @return void
     */
    private function init_hooks() {
        add_filter( 'nav_menu_link_attributes', array( $this, 'nav_menu_link_attributes' ), 10, 4 );
        add_filter( 'nav_menu_item_title', array( $this, 'nav_menu_item_title' ), 10, 4 );
    }

    /**
     * Add ARIA attributes to navigation links
     *
     * @since 1.0.0
     * @param array $atts Link attributes.
     * @param WP_Post $item Menu item.
     * @param stdClass $args Menu arguments.
     * @param int $depth Menu depth.
     * @return array
     */
    public function nav_menu_link_attributes( $atts, $item, $args, $depth ) {
        // Add current class for active items
        if ( in_array( 'current-menu-item', $item->classes, true ) ) {
            $atts['aria-current'] = 'page';
        }

        return $atts;
    }

    /**
     * Filter menu item title
     *
     * @since 1.0.0
     * @param string $title Menu item title.
     * @param WP_Post $item Menu item.
     * @param stdClass $args Menu arguments.
     * @param int $depth Menu depth.
     * @return string
     */
    public function nav_menu_item_title( $title, $item, $args, $depth ) {
        return $title;
    }

    /**
     * Display navigation menu
     *
     * @since 1.0.0
     * @param string $theme_location Theme location.
     * @param array $args Additional arguments.
     * @return void
     */
    public function display_menu( $theme_location, $args = array() ) {
        $defaults = array(
            'theme_location' => $theme_location,
            'container'      => false,
            'fallback_cb'    => false,
            'echo'           => true,
        );

        $args = wp_parse_args( $args, $defaults );

        if ( has_nav_menu( $theme_location ) ) {
            wp_nav_menu( $args );
        }
    }

    /**
     * Check if menu has items
     *
     * @since 1.0.0
     * @param string $theme_location Theme location.
     * @return bool
     */
    public function has_menu_items( $theme_location ) {
        $locations = get_nav_menu_locations();
        if ( ! isset( $locations[ $theme_location ] ) ) {
            return false;
        }

        $menu = wp_get_nav_menu_object( $locations[ $theme_location ] );
        if ( ! $menu ) {
            return false;
        }

        $menu_items = wp_get_nav_menu_items( $menu->term_id );
        return ! empty( $menu_items );
    }

    /**
     * Get menu items
     *
     * @since 1.0.0
     * @param string $theme_location Theme location.
     * @return array|false
     */
    public function get_menu_items( $theme_location ) {
        $locations = get_nav_menu_locations();
        if ( ! isset( $locations[ $theme_location ] ) ) {
            return false;
        }

        $menu = wp_get_nav_menu_object( $locations[ $theme_location ] );
        if ( ! $menu ) {
            return false;
        }

        return wp_get_nav_menu_items( $menu->term_id );
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
