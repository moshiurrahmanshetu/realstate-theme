<?php
/**
 * Header Settings Panel
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Header Settings Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Customizer_Header {

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
        $wp_customize->add_panel( 'nextoolify_header_panel', array(
            'title'       => esc_html__( 'Header Settings', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Header and navigation settings', 'nextoolify-real-estate' ),
            'priority'    => 20,
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
        // Logo Section
        $wp_customize->add_section( 'nextoolify_logo_section', array(
            'title'    => esc_html__( 'Logo', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_header_panel',
            'priority' => 10,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_image_control( $wp_customize, 'nextoolify_custom_logo', array(
            'label'       => esc_html__( 'Custom Logo', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Upload your custom logo image.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_logo_section',
            'priority'    => 10,
            'default'     => '',
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_logo_width', array(
            'label'       => esc_html__( 'Logo Width', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Maximum width of the logo in pixels.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_logo_section',
            'priority'    => 20,
            'default'     => 400,
            'min'         => 100,
            'max'         => 600,
            'step'        => 10,
        ) );

        // Header Layout Section
        $wp_customize->add_section( 'nextoolify_header_layout_section', array(
            'title'    => esc_html__( 'Header Layout', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_header_panel',
            'priority' => 20,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_header_layout', 'default', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'select' ) );
        $wp_customize->add_control( 'nextoolify_header_layout', array(
            'type'        => 'select',
            'label'       => esc_html__( 'Header Layout', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_header_layout_section',
            'priority'    => 10,
            'choices'     => array(
                'default'  => esc_html__( 'Default', 'nextoolify-real-estate' ),
                'centered' => esc_html__( 'Centered', 'nextoolify-real-estate' ),
                'minimal'  => esc_html__( 'Minimal', 'nextoolify-real-estate' ),
            ),
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_transparent_header', false, array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'checkbox' ) );
        $wp_customize->add_control( 'nextoolify_transparent_header', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Transparent Header', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Make the header transparent on the front page.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_header_layout_section',
            'priority'    => 20,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_header_sticky', true, array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'checkbox' ) );
        $wp_customize->add_control( 'nextoolify_header_sticky', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Sticky Header', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Make the header sticky on scroll.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_header_layout_section',
            'priority'    => 30,
        ) );

        // Header Spacing Section
        $wp_customize->add_section( 'nextoolify_header_spacing_section', array(
            'title'    => esc_html__( 'Header Spacing', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_header_panel',
            'priority' => 30,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_header_padding_top', array(
            'label'       => esc_html__( 'Header Padding Top', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Top padding in pixels.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_header_spacing_section',
            'priority'    => 10,
            'default'     => 20,
            'min'         => 0,
            'max'         => 60,
            'step'        => 5,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_header_padding_bottom', array(
            'label'       => esc_html__( 'Header Padding Bottom', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Bottom padding in pixels.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_header_spacing_section',
            'priority'    => 20,
            'default'     => 20,
            'min'         => 0,
            'max'         => 60,
            'step'        => 5,
        ) );
    }
}
