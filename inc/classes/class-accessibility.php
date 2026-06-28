<?php
/**
 * Accessibility Class
 *
 * Handles accessibility features and helpers.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Accessibility Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Accessibility {

    /**
     * Accessibility instance
     *
     * @since 1.0.0
     * @var Nextoolify_Real_Estate_Accessibility
     */
    private static $instance = null;

    /**
     * Get instance
     *
     * @since 1.0.0
     * @return Nextoolify_Real_Estate_Accessibility
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
        add_action( 'wp_head', array( $this, 'skip_links' ), 1 );
        add_filter( 'nav_menu_link_attributes', array( $this, 'nav_menu_aria_current' ), 10, 4 );
    }

    /**
     * Add skip links
     *
     * @since 1.0.0
     * @return void
     */
    public function skip_links() {
        ?>
        <style>
            .skip-link {
                position: absolute;
                top: -100px;
                left: 0;
                background: #000;
                color: #fff;
                padding: 8px 16px;
                z-index: 9999;
                transition: top 0.3s;
            }
            .skip-link:focus {
                top: 0;
            }
        </style>
        <a href="#primary" class="skip-link screen-reader-text"><?php esc_html_e( 'Skip to content', 'nextoolify-real-estate' ); ?></a>
        <?php
    }

    /**
     * Add aria-current to navigation links
     *
     * @since 1.0.0
     * @param array $atts Link attributes.
     * @param WP_Post $item Menu item.
     * @param stdClass $args Menu arguments.
     * @param int $depth Menu depth.
     * @return array
     */
    public function nav_menu_aria_current( $atts, $item, $args, $depth ) {
        if ( in_array( 'current-menu-item', $item->classes, true ) || in_array( 'current_page_item', $item->classes, true ) ) {
            $atts['aria-current'] = 'page';
        }
        return $atts;
    }

    /**
     * Get ARIA landmark
     *
     * @since 1.0.0
     * @param string $context Context for the landmark.
     * @return string
     */
    public function get_landmark( $context ) {
        $landmarks = array(
            'header'    => 'banner',
            'nav'       => 'navigation',
            'main'      => 'main',
            'aside'     => 'complementary',
            'footer'    => 'contentinfo',
            'search'    => 'search',
            'form'      => 'form',
        );

        return isset( $landmarks[ $context ] ) ? $landmarks[ $context ] : 'region';
    }

    /**
     * Get screen reader text class
     *
     * @since 1.0.0
     * @return string
     */
    public function get_screen_reader_class() {
        return 'screen-reader-text';
    }

    /**
     * Output screen reader text
     *
     * @since 1.0.0
     * @param string $text Text to output.
     * @return void
     */
    public function screen_reader_text( $text ) {
        echo '<span class="' . esc_attr( $this->get_screen_reader_class() ) . '">' . esc_html( $text ) . '</span>';
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
