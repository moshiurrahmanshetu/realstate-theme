<?php
/**
 * Main Customizer Class
 *
 * Initializes all customizer panels and settings.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Customizer Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Customizer {

    /**
     * Constructor
     *
     * @since 1.0.0
     */
    public function __construct() {
        add_action( 'customize_register', array( $this, 'register_panels' ) );
    }

    /**
     * Register all customizer panels
     *
     * @since 1.0.0
     * @param object $wp_customize Customizer object.
     * @return void
     */
    public function register_panels( $wp_customize ) {
        // Initialize all panel classes
        new Nextoolify_Real_Estate_Customizer_General( $wp_customize );
        new Nextoolify_Real_Estate_Customizer_Header( $wp_customize );
        new Nextoolify_Real_Estate_Customizer_Footer( $wp_customize );
        new Nextoolify_Real_Estate_Customizer_Colors( $wp_customize );
        new Nextoolify_Real_Estate_Customizer_Typography( $wp_customize );
        new Nextoolify_Real_Estate_Customizer_Social( $wp_customize );
        new Nextoolify_Real_Estate_Customizer_Blog( $wp_customize );
    }

    /**
     * Get theme option
     *
     * @since 1.0.0
     * @param string $key Option key.
     * @param mixed $default Default value.
     * @return mixed
     */
    public static function get_option( $key, $default = '' ) {
        return get_theme_mod( $key, $default );
    }

    /**
     * Get container width
     *
     * @since 1.0.0
     * @return int
     */
    public static function get_container_width() {
        return self::get_option( 'nextoolify_container_width', 1200 );
    }

    /**
     * Get content width
     *
     * @since 1.0.0
     * @return int
     */
    public static function get_content_width() {
        return self::get_option( 'nextoolify_content_width', 1200 );
    }

    /**
     * Check if back to top is enabled
     *
     * @since 1.0.0
     * @return bool
     */
    public static function is_back_to_top_enabled() {
        return self::get_option( 'nextoolify_back_to_top', true );
    }

    /**
     * Check if sticky header is enabled
     *
     * @since 1.0.0
     * @return bool
     */
    public static function is_sticky_header_enabled() {
        return self::get_option( 'nextoolify_sticky_header', true );
    }

    /**
     * Check if preloader is enabled
     *
     * @since 1.0.0
     * @return bool
     */
    public static function is_preloader_enabled() {
        return self::get_option( 'nextoolify_preloader', false );
    }

    /**
     * Get header layout
     *
     * @since 1.0.0
     * @return string
     */
    public static function get_header_layout() {
        return self::get_option( 'nextoolify_header_layout', 'default' );
    }

    /**
     * Get footer layout
     *
     * @since 1.0.0
     * @return string
     */
    public static function get_footer_layout() {
        return self::get_option( 'nextoolify_footer_layout', 'default' );
    }

    /**
     * Get footer columns
     *
     * @since 1.0.0
     * @return int
     */
    public static function get_footer_columns() {
        return self::get_option( 'nextoolify_footer_columns', 4 );
    }

    /**
     * Get copyright text
     *
     * @since 1.0.0
     * @return string
     */
    public static function get_copyright_text() {
        $text = self::get_option( 'nextoolify_copyright_text', '' );
        if ( empty( $text ) ) {
            $text = sprintf( esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'nextoolify-real-estate' ), date_i18n( 'Y' ), get_bloginfo( 'name' ) );
        } else {
            $text = str_replace( '{year}', date_i18n( 'Y' ), $text );
            $text = str_replace( '{site_name}', get_bloginfo( 'name' ), $text );
        }
        return $text;
    }

    /**
     * Get primary color
     *
     * @since 1.0.0
     * @return string
     */
    public static function get_primary_color() {
        return self::get_option( 'nextoolify_primary_color', '#2c3e50' );
    }

    /**
     * Get secondary color
     *
     * @since 1.0.0
     * @return string
     */
    public static function get_secondary_color() {
        return self::get_option( 'nextoolify_secondary_color', '#3498db' );
    }

    /**
     * Get accent color
     *
     * @since 1.0.0
     * @return string
     */
    public static function get_accent_color() {
        return self::get_option( 'nextoolify_accent_color', '#e74c3c' );
    }

    /**
     * Get blog layout
     *
     * @since 1.0.0
     * @return string
     */
    public static function get_blog_layout() {
        return self::get_option( 'nextoolify_blog_layout', 'grid' );
    }

    /**
     * Get sidebar position
     *
     * @since 1.0.0
     * @return string
     */
    public static function get_sidebar_position() {
        return self::get_option( 'nextoolify_sidebar_position', 'right' );
    }

    /**
     * Get social links
     *
     * @since 1.0.0
     * @return array
     */
    public static function get_social_links() {
        return array(
            'facebook'  => self::get_option( 'nextoolify_facebook_url', '' ),
            'twitter'   => self::get_option( 'nextoolify_twitter_url', '' ),
            'instagram' => self::get_option( 'nextoolify_instagram_url', '' ),
            'linkedin'  => self::get_option( 'nextoolify_linkedin_url', '' ),
            'youtube'   => self::get_option( 'nextoolify_youtube_url', '' ),
            'pinterest' => self::get_option( 'nextoolify_pinterest_url', '' ),
            'tiktok'    => self::get_option( 'nextoolify_tiktok_url', '' ),
        );
    }

    /**
     * Check if social icons should be shown
     *
     * @since 1.0.0
     * @return bool
     */
    public static function show_social_icons() {
        return self::get_option( 'nextoolify_show_social_icons', true );
    }
}

// Initialize the customizer
new Nextoolify_Real_Estate_Customizer();
