<?php
/**
 * Blog Settings Panel
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Blog Settings Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Customizer_Blog {

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
        $wp_customize->add_panel( 'nextoolify_blog_panel', array(
            'title'       => esc_html__( 'Blog Settings', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Manage blog and archive settings', 'nextoolify-real-estate' ),
            'priority'    => 70,
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
        // Blog Layout Section
        $wp_customize->add_section( 'nextoolify_blog_layout_section', array(
            'title'    => esc_html__( 'Blog Layout', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_blog_panel',
            'priority' => 10,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_blog_layout', 'grid', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'select' ) );
        $wp_customize->add_control( 'nextoolify_blog_layout', array(
            'type'        => 'select',
            'label'       => esc_html__( 'Blog Layout', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_blog_layout_section',
            'priority'    => 10,
            'choices'     => array(
                'grid' => esc_html__( 'Grid', 'nextoolify-real-estate' ),
                'list' => esc_html__( 'List', 'nextoolify-real-estate' ),
            ),
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_sidebar_position', 'right', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'select' ) );
        $wp_customize->add_control( 'nextoolify_sidebar_position', array(
            'type'        => 'select',
            'label'       => esc_html__( 'Sidebar Position', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_blog_layout_section',
            'priority'    => 20,
            'choices'     => array(
                'right'  => esc_html__( 'Right', 'nextoolify-real-estate' ),
                'left'   => esc_html__( 'Left', 'nextoolify-real-estate' ),
                'none'   => esc_html__( 'No Sidebar', 'nextoolify-real-estate' ),
            ),
        ) );

        // Blog Meta Section
        $wp_customize->add_section( 'nextoolify_blog_meta_section', array(
            'title'    => esc_html__( 'Post Meta', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_blog_panel',
            'priority' => 20,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_show_author', true, array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'checkbox' ) );
        $wp_customize->add_control( 'nextoolify_show_author', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Show Author', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_blog_meta_section',
            'priority'    => 10,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_show_date', true, array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'checkbox' ) );
        $wp_customize->add_control( 'nextoolify_show_date', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Show Date', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_blog_meta_section',
            'priority'    => 20,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_show_category', true, array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'checkbox' ) );
        $wp_customize->add_control( 'nextoolify_show_category', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Show Category', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_blog_meta_section',
            'priority'    => 30,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_show_tags', true, array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'checkbox' ) );
        $wp_customize->add_control( 'nextoolify_show_tags', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Show Tags', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_blog_meta_section',
            'priority'    => 40,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_show_read_more', true, array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'checkbox' ) );
        $wp_customize->add_control( 'nextoolify_show_read_more', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Show Read More', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_blog_meta_section',
            'priority'    => 50,
        ) );

        // Blog Content Section
        $wp_customize->add_section( 'nextoolify_blog_content_section', array(
            'title'    => esc_html__( 'Blog Content', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_blog_panel',
            'priority' => 30,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_posts_per_page', array(
            'label'       => esc_html__( 'Posts Per Page', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_blog_content_section',
            'priority'    => 10,
            'default'     => 10,
            'min'         => 1,
            'max'         => 20,
            'step'        => 1,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_range_control( $wp_customize, 'nextoolify_excerpt_length', array(
            'label'       => esc_html__( 'Excerpt Length', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Number of words in excerpt.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_blog_content_section',
            'priority'    => 20,
            'default'     => 30,
            'min'         => 10,
            'max'         => 100,
            'step'        => 5,
        ) );
    }
}
