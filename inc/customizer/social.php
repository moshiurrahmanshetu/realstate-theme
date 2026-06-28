<?php
/**
 * Social Links Settings Panel
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Social Links Settings Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Customizer_Social {

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
        $wp_customize->add_panel( 'nextoolify_social_panel', array(
            'title'       => esc_html__( 'Social Links', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Manage social media links', 'nextoolify-real-estate' ),
            'priority'    => 60,
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
        // Social Links Section
        $wp_customize->add_section( 'nextoolify_social_links_section', array(
            'title'    => esc_html__( 'Social Links', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_social_panel',
            'priority' => 10,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_facebook_url', '', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'url' ) );
        $wp_customize->add_control( 'nextoolify_facebook_url', array(
            'type'        => 'url',
            'label'       => esc_html__( 'Facebook URL', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_social_links_section',
            'priority'    => 10,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_twitter_url', '', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'url' ) );
        $wp_customize->add_control( 'nextoolify_twitter_url', array(
            'type'        => 'url',
            'label'       => esc_html__( 'Twitter (X) URL', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_social_links_section',
            'priority'    => 20,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_instagram_url', '', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'url' ) );
        $wp_customize->add_control( 'nextoolify_instagram_url', array(
            'type'        => 'url',
            'label'       => esc_html__( 'Instagram URL', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_social_links_section',
            'priority'    => 30,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_linkedin_url', '', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'url' ) );
        $wp_customize->add_control( 'nextoolify_linkedin_url', array(
            'type'        => 'url',
            'label'       => esc_html__( 'LinkedIn URL', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_social_links_section',
            'priority'    => 40,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_youtube_url', '', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'url' ) );
        $wp_customize->add_control( 'nextoolify_youtube_url', array(
            'type'        => 'url',
            'label'       => esc_html__( 'YouTube URL', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_social_links_section',
            'priority'    => 50,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_pinterest_url', '', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'url' ) );
        $wp_customize->add_control( 'nextoolify_pinterest_url', array(
            'type'        => 'url',
            'label'       => esc_html__( 'Pinterest URL', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_social_links_section',
            'priority'    => 60,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_tiktok_url', '', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'url' ) );
        $wp_customize->add_control( 'nextoolify_tiktok_url', array(
            'type'        => 'url',
            'label'       => esc_html__( 'TikTok URL', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_social_links_section',
            'priority'    => 70,
        ) );

        // Social Display Section
        $wp_customize->add_section( 'nextoolify_social_display_section', array(
            'title'    => esc_html__( 'Social Display', 'nextoolify-real-estate' ),
            'panel'    => 'nextoolify_social_panel',
            'priority' => 20,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_show_social_icons', true, array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'checkbox' ) );
        $wp_customize->add_control( 'nextoolify_show_social_icons', array(
            'type'        => 'checkbox',
            'label'       => esc_html__( 'Show Social Icons', 'nextoolify-real-estate' ),
            'description' => esc_html__( 'Display social icons in header and footer.', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_social_display_section',
            'priority'    => 10,
        ) );

        Nextoolify_Real_Estate_Customizer_Controls::add_setting( $wp_customize, 'nextoolify_social_icon_style', 'rounded', array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'select' ) );
        $wp_customize->add_control( 'nextoolify_social_icon_style', array(
            'type'        => 'select',
            'label'       => esc_html__( 'Social Icon Style', 'nextoolify-real-estate' ),
            'section'     => 'nextoolify_social_display_section',
            'priority'    => 20,
            'choices'     => array(
                'rounded'  => esc_html__( 'Rounded', 'nextoolify-real-estate' ),
                'square'   => esc_html__( 'Square', 'nextoolify-real-estate' ),
                'circle'   => esc_html__( 'Circle', 'nextoolify-real-estate' ),
                'outlined' => esc_html__( 'Outlined', 'nextoolify-real-estate' ),
            ),
        ) );
    }
}
