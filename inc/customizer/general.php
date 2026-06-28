<?php
/**
 * General Settings Panel
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * General Settings Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Customizer_General {

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
        $wp_customize->add_panel( 'nextoolify_general_panel', array(
            'title'       => esc_html__( 'General Settings', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'General theme settings', 'nextoolify-real-estate' ),
            'priority'    => 10,
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
        // Container Width Section
        $wp_customize->add_section( 'nextoolify_container_section', array(
            'title'    => esc_html__( 'Container', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_general_panel',
            'priority' => 10,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_container_width', array(
            'label'       => esc_html__( 'Site Container Width', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Maximum width of the site container in pixels.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_container_section',
            'priority'    => 10,
            'default'     => 1200,
            'min'         => 1000,
            'max'         => 1600,
            'step'        => 10,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_content_width', array(
            'label'       => esc_html__( 'Content Width', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Maximum width of the content area in pixels.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_container_section',
            'priority'    => 20,
            'default'     => 1200,
            'min'         => 600,
            'max'         => 1400,
            'step'        => 10,
        ) );

        // Features Section
        $wp_customize->add_section( 'nextoolify_features_section', array(
            'title'    => esc_html__( 'Features', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_general_panel',
            'priority' => 20,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_back_to_top', true, array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'checkbox' ) );
        $wp_customize->add_control( 'nextoolify_back_to_top', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Enable Back to Top Button', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_features_section',
            'priority'    => 10,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_sticky_header', true, array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'checkbox' ) );
        $wp_customize->add_control( 'nextoolify_sticky_header', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Enable Sticky Header', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_features_section',
            'priority'    => 20,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_preloader', false, array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'checkbox' ) );
        $wp_customize->add_control( 'nextoolify_preloader', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Enable Preloader', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_features_section',
            'priority'    => 30,
        ) );
    }
}
