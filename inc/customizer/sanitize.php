<?php
/**
 * Customizer Sanitize Callbacks
 *
 * Provides sanitization methods for customizer settings.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Sanitize Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Customizer_Sanitize {

    /**
     * Sanitize checkbox
     *
     * @since 1.0.0
     * @param mixed $checked Value to sanitize.
     * @return bool
     */
    public static function checkbox( $checked ) {
        return ( ( isset( $checked ) && true === $checked ) ? true : false );
    }

    /**
     * Sanitize select/radio
     *
     * @since 1.0.0
     * @param string $input Value to sanitize.
     * @param object $setting Setting object.
     * @return string
     */
    public static function select( $input, $setting ) {
        $input = sanitize_key( $input );
        $choices = $setting->manager->get_control( $setting->id )->choices;
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }

    /**
     * Sanitize number
     *
     * @since 1.0.0
     * @param string $number Value to sanitize.
     * @return int
     */
    public static function number( $number ) {
        return absint( $number );
    }

    /**
     * Sanitize number range
     *
     * @since 1.0.0
     * @param string $number Value to sanitize.
     * @param object $setting Setting object.
     * @return int
     */
    public static function number_range( $number, $setting ) {
        $number = absint( $number );
        $atts = $setting->manager->get_control( $setting->id )->input_attrs;
        $min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
        $max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
        return ( $number >= $min && $number <= $max ? $number : $setting->default );
    }

    /**
     * Sanitize URL
     *
     * @since 1.0.0
     * @param string $url Value to sanitize.
     * @return string
     */
    public static function url( $url ) {
        return esc_url_raw( $url );
    }

    /**
     * Sanitize email
     *
     * @since 1.0.0
     * @param string $email Value to sanitize.
     * @return string
     */
    public static function email( $email ) {
        return sanitize_email( $email );
    }

    /**
     * Sanitize text
     *
     * @since 1.0.0
     * @param string $text Value to sanitize.
     * @return string
     */
    public static function text( $text ) {
        return sanitize_text_field( $text );
    }

    /**
     * Sanitize textarea
     *
     * @since 1.0.0
     * @param string $text Value to sanitize.
     * @return string
     */
    public static function textarea( $text ) {
        return sanitize_textarea_field( $text );
    }

    /**
     * Sanitize HTML
     *
     * @since 1.0.0
     * @param string $html Value to sanitize.
     * @return string
     */
    public static function html( $html ) {
        return wp_kses_post( $html );
    }

    /**
     * Sanitize color
     *
     * @since 1.0.0
     * @param string $color Value to sanitize.
     * @return string
     */
    public static function color( $color ) {
        if ( empty( $color ) || is_array( $color ) ) {
            return '';
        }

        if ( false === strpos( $color, '#' ) ) {
            return sanitize_hex_color_no_hash( $color );
        }

        return sanitize_hex_color( $color );
    }

    /**
     * Sanitize image
     *
     * @since 1.0.0
     * @param string $image Value to sanitize.
     * @param object $setting Setting object.
     * @return string
     */
    public static function image( $image, $setting ) {
        $type = get_post_type( $image );
        if ( 'attachment' !== $type || ! wp_attachment_is_image( $image ) ) {
            return $setting->default;
        }
        return $image;
    }

    /**
     * Sanitize CSS
     *
     * @since 1.0.0
     * @param string $css Value to sanitize.
     * @return string
     */
    public static function css( $css ) {
        return wp_strip_all_tags( $css );
    }

    /**
     * Sanitize integer abs
     *
     * @since 1.0.0
     * @param string $value Value to sanitize.
     * @return int
     */
    public static function integer_abs( $value ) {
        return absint( $value );
    }

    /**
     * Sanitize float
     *
     * @since 1.0.0
     * @param string $value Value to sanitize.
     * @return float
     */
    public static function float( $value ) {
        return floatval( $value );
    }
}
