<?php
/**
 * Footer Settings Panel
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Footer Settings Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Customizer_Footer {

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
        $wp_customize->add_panel( 'nextoolify_footer_panel', array(
            'title'       => esc_html__( 'Footer Settings', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Footer and copyright settings', 'nextoolify-real-estate' ),
            'priority'    => 30,
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
        // Footer Layout Section
        $wp_customize->add_section( 'nextoolify_footer_layout_section', array(
            'title'    => esc_html__( 'Footer Layout', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_footer_panel',
            'priority' => 10,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_footer_layout', 'default', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'select' ) );
        $wp_customize->add_control( 'nextoolify_footer_layout', array(
            'type'        => 'select',
            'label'       => esc_html__( 'Footer Layout', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_footer_layout_section',
            'priority'    => 10,
            'choices'     => array(
                'default' => esc_html__( 'Default', 'nextoolify-real-estate' ),
                'minimal' => esc_html__( 'Minimal', 'nextoolify-real-estate' ),
                'centered' => esc_html__( 'Centered', 'nextoolify-real-estate' ),
            ),
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_footer_columns', array(
            'label'       => esc_html__( 'Footer Columns', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Number of footer widget columns.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_footer_layout_section',
            'priority'    => 20,
            'default'     => 4,
            'min'         => 1,
            'max'         => 4,
            'step'        => 1,
        ) );

        // Copyright Section
        $wp_customize->add_section( 'nextoolify_copyright_section', array(
            'title'    => esc_html__( 'Copyright', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_footer_panel',
            'priority' => 20,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_copyright_text', '', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'html' ) );
        $wp_customize->add_control( 'nextoolify_copyright_text', array(
            'type'        => 'textarea',
            'label'       => esc_html__( 'Copyright Text', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'HTML allowed. Use {year} for current year and {site_name} for site name.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_copyright_section',
            'priority'    => 10,
        ) );

        // Footer Colors Section
        $wp_customize->add_section( 'nextoolify_footer_colors_section', array(
            'title'    => esc_html__( 'Footer Colors', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_footer_panel',
            'priority' => 30,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_color_control( $wp_customize, 'nextoolify_footer_bg_color', array(
            'label'       => esc_html__( 'Footer Background', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_footer_colors_section',
            'priority'    => 10,
            'default'     => '#2c3e50',
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_color_control( $wp_customize, 'nextoolify_footer_text_color', array(
            'label'       => esc_html__( 'Footer Text Color', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_footer_colors_section',
            'priority'    => 20,
            'default'     => '#ffffff',
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_color_control( $wp_customize, 'nextoolify_footer_link_color', array(
            'label'       => esc_html__( 'Footer Link Color', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_footer_colors_section',
            'priority'    => 30,
            'default'     => '#3498db',
        ) );
    }
}
