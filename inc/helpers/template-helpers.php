<?php
/**
 * Template helper functions
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Check if a plugin is active
 *
 * @since 1.0.0
 * @param string $plugin Plugin slug
 * @return bool
 */
function nextoolify_real_estate_is_plugin_active( $plugin ) {
    return in_array( $plugin, (array) get_option( 'active_plugins', array() ), true ) || nextoolify_real_estate_is_plugin_active_for_network( $plugin );
}

/**
 * Check if plugin is active for network
 *
 * @since 1.0.0
 * @param string $plugin Plugin slug
 * @return bool
 */
function nextoolify_real_estate_is_plugin_active_for_network( $plugin ) {
    if ( ! is_multisite() ) {
        return false;
    }
    $plugins = get_site_option( 'active_sitewide_plugins' );
    if ( isset( $plugins[ $plugin ] ) ) {
        return true;
    }
    return false;
}

/**
 * Get template part with fallback
 *
 * @since 1.0.0
 * @param string $slug Template slug
 * @param string $name Template name
 * @return void
 */
function nextoolify_real_estate_get_template_part( $slug, $name = null ) {
    get_template_part( $slug, $name );
}

/**
 * Get post type label
 *
 * @since 1.0.0
 * @param string $post_type Post type
 * @return string
 */
function nextoolify_real_estate_get_post_type_label( $post_type ) {
    $obj = get_post_type_object( $post_type );
    return $obj ? $obj->labels->name : '';
}

/**
 * Get taxonomy terms as array
 *
 * @since 1.0.0
 * @param string $taxonomy Taxonomy name
 * @param int $post_id Post ID
 * @return array
 */
function nextoolify_real_estate_get_taxonomy_terms( $taxonomy, $post_id = 0 ) {
    if ( 0 === $post_id ) {
        $post_id = get_the_ID();
    }
    $terms = get_the_terms( $post_id, $taxonomy );
    return $terms && ! is_wp_error( $terms ) ? $terms : array();
}

/**
 * Sanitize checkbox
 *
 * @since 1.0.0
 * @param mixed $checked Value to sanitize
 * @return bool
 */
function nextoolify_real_estate_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true === $checked ) ? true : false );
}

/**
 * Sanitize select/radio
 *
 * @since 1.0.0
 * @param string $input Value to sanitize
 * @param object $setting Setting object
 * @return string
 */
function nextoolify_real_estate_sanitize_select( $input, $setting ) {
    $input = sanitize_key( $input );
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
 * Sanitize number
 *
 * @since 1.0.0
 * @param string $number Value to sanitize
 * @return int
 */
function nextoolify_real_estate_sanitize_number( $number ) {
    return absint( $number );
}

/**
 * Sanitize number range
 *
 * @since 1.0.0
 * @param string $number Value to sanitize
 * @param object $setting Setting object
 * @return int
 */
function nextoolify_real_estate_sanitize_number_range( $number, $setting ) {
    $number = absint( $number );
    $atts = $setting->manager->get_control( $setting->id )->input_attrs;
    $min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
    $max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
    return ( $number >= $min && $number <= $max ? $number : $setting->default );
}
