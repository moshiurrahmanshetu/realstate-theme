<?php
/**
 * Typography Settings Panel
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Typography Settings Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Customizer_Typography {

    /**
     * Constructor
     *
     * @since 1.0.0
     * @param object $wp_customize Customizer object.
     */
    public function __construct( $wp_customize ) {
        $this->add_panel( $wp_customize );
        $this->add_settings( $wp_customize );
    }

    /**
     * Add panel
     *
     * @since 1.0.0
     * @param object $wp_customize Customizer object.
     * @return void
     */
    private function add_panel( $wp_customize ) {
        $wp_customize->add_panel( 'nextoolify_typography_panel', array(
            'title'       => esc_html__( 'Typography', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Manage typography settings', 'nextoolify-real-estate' ),
            'priority'    => 50,
        ) );
    }

    /**
     * Add settings
     *
     * @since 1.0.0
     * @param object $wp_customize Customizer object.
     * @return void
     */
    private function add_settings( $wp_customize ) {
        // Font Families Section
        $wp_customize->add_section( 'nextoolify_font_families_section', array(
            'title'    => esc_html__( 'Font Families', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_typography_panel',
            'priority' => 10,
        ) );

        $font_choices = array(
            'system'        => esc_html__( 'System Font', 'nextoolify-real-estate' ),
            'playfair'      => esc_html__( 'Playfair Display', 'nextoolify-real-estate' ),
            'open-sans'     => esc_html__( 'Open Sans', 'nextoolify-real-estate' ),
            'lato'          => esc_html__( 'Lato', 'nextoolify-real-estate' ),
            'roboto'        => esc_html__( 'Roboto', 'nextoolify-real-estate' ),
            'montserrat'    => esc_html__( 'Montserrat', 'nextoolify-real-estate' ),
            'poppins'       => esc_html__( 'Poppins', 'nextoolify-real-estate' ),
        );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_body_font_family', 'system', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'select' ) );
        $wp_customize->add_control( 'nextoolify_body_font_family', array(
            'type'        => 'select',
            'label'       => esc_html__( 'Body Font Family', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_font_families_section',
            'priority'    => 10,
            'choices'     => $font_choices,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_heading_font_family', 'playfair', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'select' ) );
        $wp_customize->add_control( 'nextoolify_heading_font_family', array(
            'type'        => 'select',
            'label'       => esc_html__( 'Heading Font Family', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_font_families_section',
            'priority'    => 20,
            'choices'     => $font_choices,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_nav_font_family', 'system', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'select' ) );
        $wp_customize->add_control( 'nextoolify_nav_font_family', array(
            'type'        => 'select',
            'label'       => esc_html__( 'Navigation Font Family', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_font_families_section',
            'priority'    => 30,
            'choices'     => $font_choices,
        ) );

        // Font Sizes Section
        $wp_customize->add_section( 'nextoolify_font_sizes_section', array(
            'title'    => esc_html__( 'Font Sizes', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_typography_panel',
            'priority' => 20,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_base_font_size', array(
            'label'       => esc_html__( 'Base Font Size', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Base font size in pixels.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_font_sizes_section',
            'priority'    => 10,
            'default'     => 16,
            'min'         => 12,
            'max'         => 24,
            'step'        => 1,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_h1_font_size', array(
            'label'       => esc_html__( 'H1 Font Size', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_font_sizes_section',
            'priority'    => 20,
            'default'     => 48,
            'min'         => 24,
            'max'         => 72,
            'step'        => 1,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_h2_font_size', array(
            'label'       => esc_html__( 'H2 Font Size', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_font_sizes_section',
            'priority'    => 30,
            'default'     => 36,
            'min'         => 20,
            'max'         => 60,
            'step'        => 1,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_h3_font_size', array(
            'label'       => esc_html__( 'H3 Font Size', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_font_sizes_section',
            'priority'    => 40,
            'default'     => 28,
            'min'         => 18,
            'max'         => 48,
            'step'        => 1,
        ) );

        // Typography Settings Section
        $wp_customize->add_section( 'nextoolify_typography_settings_section', array(
            'title'    => esc_html__( 'Typography Settings', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_typography_panel',
            'priority' => 30,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_line_height', array(
            'label'       => esc_html__( 'Line Height', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Line height for body text.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_typography_settings_section',
            'priority'    => 10,
            'default'     => 1.6,
            'min'         => 1.0,
            'max'         => 2.5,
            'step'        => 0.1,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_letter_spacing', array(
            'label'       => esc_html__( 'Letter Spacing', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Letter spacing in pixels.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_typography_settings_section',
            'priority'    => 20,
            'default'     => 0,
            'min'         => -2,
            'max'         => 5,
            'step'        => 0.5,
        ) );
    }
}
