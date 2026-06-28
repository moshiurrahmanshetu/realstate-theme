<?php
/**
 * Header Customizer Settings
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Register Header Customizer Settings
 *
 * @since 1.0.0
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function nextoolify_real_estate_header_customizer( $wp_customize ) {
    
    // Header Section
    $wp_customize->add_section( 'nextoolify_real_estate_header_section', array(
        'title'    => esc_html__( 'Header Settings', 'nextoolify-real-estate' ),
        'priority' => 30,
    ) );

    // Header Layout
    $wp_customize->add_setting( 'nextoolify_real_estate_header_layout', array(
        'default'           => 'default',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( 'nextoolify_real_estate_header_layout', array(
        'label'    => esc_html__( 'Header Layout', 'nextoolify-real-estate' ),
        'section'  => 'nextoolify_real_estate_header_section',
        'type'     => 'select',
        'choices'  => array(
            'default' => esc_html__( 'Default', 'nextoolify-real-estate' ),
            'centered' => esc_html__( 'Centered', 'nextoolify-real-estate' ),
            'minimal' => esc_html__( 'Minimal', 'nextoolify-real-estate' ),
        ),
    ) );

    // Sticky Header
    $wp_customize->add_setting( 'nextoolify_real_estate_sticky_header', array(
        'default'           => true,
        'sanitize_callback' => 'rest_sanitize_boolean',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( 'nextoolify_real_estate_sticky_header', array(
        'label'    => esc_html__( 'Enable Sticky Header', 'nextoolify-real-estate' ),
        'section'  => 'nextoolify_real_estate_header_section',
        'type'     => 'checkbox',
    ) );

    // Top Bar Visibility
    $wp_customize->add_setting( 'nextoolify_real_estate_top_bar', array(
        'default'           => true,
        'sanitize_callback' => 'rest_sanitize_boolean',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( 'nextoolify_real_estate_top_bar', array(
        'label'    => esc_html__( 'Show Top Bar', 'nextoolify-real-estate' ),
        'section'  => 'nextoolify_real_estate_header_section',
        'type'     => 'checkbox',
    ) );
}
add_action( 'customize_register', 'nextoolify_real_estate_header_customizer' );
