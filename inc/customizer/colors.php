<?php
/**
 * Colors Settings Panel
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Colors Settings Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Customizer_Colors {

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
        $wp_customize->add_panel( 'nextoolify_colors_panel', array(
            'title'       => esc_html__( 'Color Scheme', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Manage theme colors', 'nextoolify-real-estate' ),
            'priority'    => 40,
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
        // Primary Colors Section
        $wp_customize->add_section( 'nextoolify_primary_colors_section', array(
            'title'    => esc_html__( 'Primary Colors', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_colors_panel',
            'priority' => 10,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_color_control( $wp_customize, 'nextoolify_primary_color', array(
            'label'       => esc_html__( 'Primary Color', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Main theme color used for buttons, links, and accents.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_primary_colors_section',
            'priority'    => 10,
            'default'     => '#2c3e50',
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_color_control( $wp_customize, 'nextoolify_secondary_color', array(
            'label'       => esc_html__( 'Secondary Color', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Secondary accent color.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_primary_colors_section',
            'priority'    => 20,
            'default'     => '#3498db',
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_color_control( $wp_customize, 'nextoolify_accent_color', array(
            'label'       => esc_html__( 'Accent Color', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Accent color for highlights and CTAs.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_primary_colors_section',
            'priority'    => 30,
            'default'     => '#e74c3c',
        ) );

        // Body Colors Section
        $wp_customize->add_section( 'nextoolify_body_colors_section', array(
            'title'    => esc_html__( 'Body Colors', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_colors_panel',
            'priority' => 20,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_color_control( $wp_customize, 'nextoolify_body_bg_color', array(
            'label'       => esc_html__( 'Body Background', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_body_colors_section',
            'priority'    => 10,
            'default'     => '#ffffff',
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_color_control( $wp_customize, 'nextoolify_text_color', array(
            'label'       => esc_html__( 'Text Color', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_body_colors_section',
            'priority'    => 20,
            'default'     => '#333333',
        ) );

        // Typography Colors Section
        $wp_customize->add_section( 'nextoolify_typography_colors_section', array(
            'title'    => esc_html__( 'Typography Colors', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_colors_panel',
            'priority' => 30,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_color_control( $wp_customize, 'nextoolify_heading_color', array(
            'label'       => esc_html__( 'Heading Color', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_typography_colors_section',
            'priority'    => 10,
            'default'     => '#2c3e50',
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_color_control( $wp_customize, 'nextoolify_link_color', array(
            'label'       => esc_html__( 'Link Color', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_typography_colors_section',
            'priority'    => 20,
            'default'     => '#3498db',
        ) );

        // Button Colors Section
        $wp_customize->add_section( 'nextoolify_button_colors_section', array(
            'title'    => esc_html__( 'Button Colors', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_colors_panel',
            'priority' => 40,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_color_control( $wp_customize, 'nextoolify_button_bg_color', array(
            'label'       => esc_html__( 'Button Background', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_button_colors_section',
            'priority'    => 10,
            'default'     => '#2c3e50',
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_color_control( $wp_customize, 'nextoolify_button_text_color', array(
            'label'       => esc_html__( 'Button Text Color', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_button_colors_section',
            'priority'    => 20,
            'default'     => '#ffffff',
        ) );
    }
}
