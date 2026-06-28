<?php
/**
 * Performance Class
 *
 * Handles performance optimizations.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Performance Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Performance {

    /**
     * Performance instance
     *
     * @since 1.0.0
     * @var Nextoolify_Real_Estate_Performance
     */
    private static $instance = null;

    /**
     * Get instance
     *
     * @since 1.0.0
     * @return Nextoolify_Real_Estate_Performance
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
        add_action( 'wp_head', array( $this, 'resource_hints' ), 2 );
        add_filter( 'wp_resource_hints', array( $this, 'add_resource_hints' ), 10, 2 );
        add_filter( 'script_loader_tag', array( $this, 'defer_non_critical_scripts' ), 10, 2 );
        add_filter( 'style_loader_tag', array( $this, 'preload_critical_css' ), 10, 2 );
    }

    /**
     * Add resource hints to head
     *
     * @since 1.0.0
     * @return void
     */
    public function resource_hints() {
        // DNS prefetch for external resources
        $domains = array(
            'fonts.googleapis.com',
            'fonts.gstatic.com',
        );

        foreach ( $domains as $domain ) {
            printf( '<link rel="dns-prefetch" href="//%s" />', esc_attr( $domain ) );
        }
    }

    /**
     * Add resource hints
     *
     * @since 1.0.0
     * @param array $urls URLs to print.
     * @param string $relation_type Relation type.
     * @return array
     */
    public function add_resource_hints( $urls, $relation_type ) {
        if ( 'preconnect' === $relation_type ) {
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

    /**
     * Defer non-critical scripts
     *
     * @since 1.0.0
     * @param string $tag Script tag.
     * @param string $handle Script handle.
     * @return string
     */
    public function defer_non_critical_scripts( $tag, $handle ) {
        // Scripts to defer (non-critical)
        $defer_scripts = array(
            'swiper-js',
            'aos-js',
        );

        if ( in_array( $handle, $defer_scripts, true ) ) {
            return str_replace( ' src', ' defer src', $tag );
        }

        return $tag;
    }

    /**
     * Preload critical CSS
     *
     * @since 1.0.0
     * @param string $tag Link tag.
     * @param string $handle Style handle.
     * @return string
     */
    public function preload_critical_css( $tag, $handle ) {
        // Critical styles to preload
        $critical_styles = array(
            'bootstrap-css',
            'nextoolify-real-estate-style',
        );

        if ( in_array( $handle, $critical_styles, true ) ) {
            return str_replace( "rel='stylesheet'", "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"", $tag );
        }

        return $tag;
    }

    /**
     * Enable lazy loading for images
     *
     * @since 1.0.0
     * @param string $content Content.
     * @return string
     */
    public function lazy_load_images( $content ) {
        if ( is_feed() || is_preview() ) {
            return $content;
        }

        $content = preg_replace(
            '/<img([^>]+?)src=[\'"]([^\'"]+?)[\'"]([^>]*?)>/i',
            '<img$1src="$2" loading="lazy"$3>',
            $content
        );

        return $content;
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
