<?php
/**
 * Customizer Custom Controls
 *
 * Provides custom control classes for the customizer.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Custom Controls Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Customizer_Controls {

    /**
     * Constructor
     *
     * @since 1.0.0
     * @param object $wp_customize Customizer object.
     */
    public function __construct( $wp_customize ) {
        $this->register_controls( $wp_customize );
    }

    /**
     * Register custom controls
     *
     * @since 1.0.0
     * @param object $wp_customize Customizer object.
     * @return void
     */
    private function register_controls( $wp_customize ) {
        // Register custom control types if needed in the future
        // For now, we'll use native WordPress controls
    }

    /**
     * Helper method to add setting with default options
     *
     * @since 1.0.0
     * @param object $wp_customize Customizer object.
     * @param string $id Setting ID.
     * @param string $default Default value.
     * @param string $sanitize_callback Sanitize callback.
     * @param string $transport Transport type.
     * @return void
     */
    public static function add_setting( $wp_customize, $id, $default, $sanitize_callback = 'sanitize_text_field', $transport = 'refresh' ) {
        $wp_customize->add_setting( $id, array(
            'default'           => $default,
            'sanitize_callback' => $sanitize_callback,
            'transport'         => $transport,
        ) );
    }

    /**
     * Helper method to add control with default options
     *
     * @since 1.0.0
     * @param object $wp_customize Customizer object.
     * @param string $id Control ID.
     * @param array $args Control arguments.
     * @return void
     */
    public static function add_control( $wp_customize, $id, $args ) {
        $defaults = array(
            'type'        => 'text',
            'label'       => '',
            'description' => '',
            'section'     => '',
            'priority'    => 10,
        );

        $args = wp_parse_args( $args, $defaults );
        $wp_customize->add_control( $id, $args );
    }

    /**
     * Helper method to add color control
     *
     * @since 1.0.0
     * @param object $wp_customize Customizer object.
     * @param string $id Control ID.
     * @param array $args Control arguments.
     * @return void
     */
    public static function add_color_control( $wp_customize, $id, $args ) {
        $defaults = array(
            'label'       => '',
            'description' => '',
            'section'     => '',
            'priority'    => 10,
            'default'     => '',
        );

        $args = wp_parse_args( $args, $defaults );

        self::add_setting( $wp_customize, $id, $args['default'], array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'color' ), 'postMessage' );

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                $id,
                array(
                    'label'       => $args['label'],
                    'description' => $args['description'],
                    'section'     => $args['section'],
                    'priority'    => $args['priority'],
                )
            )
        );
    }

    /**
     * Helper method to add image control
     *
     * @since 1.0.0
     * @param object $wp_customize Customizer object.
     * @param string $id Control ID.
     * @param array $args Control arguments.
     * @return void
     */
    public static function add_image_control( $wp_customize, $id, $args ) {
        $defaults = array(
            'label'       => '',
            'description' => '',
            'section'     => '',
            'priority'    => 10,
            'default'     => '',
        );

        $args = wp_parse_args( $args, $defaults );

        self::add_setting( $wp_customize, $id, $args['default'], array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'image' ) );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                $id,
                array(
                    'label'       => $args['label'],
                    'description' => $args['description'],
                    'section'     => $args['section'],
                    'priority'    => $args['priority'],
                )
            )
        );
    }

    /**
     * Helper method to add range control
     *
     * @since 1.0.0
     * @param object $wp_customize Customizer object.
     * @param string $id Control ID.
     * @param array $args Control arguments.
     * @return void
     */
    public static function add_range_control( $wp_customize, $id, $args ) {
        $defaults = array(
            'label'       => '',
            'description' => '',
            'section'     => '',
            'priority'    => 10,
            'default'     => 0,
            'min'         => 0,
            'max'         => 100,
            'step'        => 1,
        );

        $args = wp_parse_args( $args, $defaults );

        self::add_setting( $wp_customize, $id, $args['default'], array( 'Nextoolify_Real_Estate_Customizer_Sanitize', 'number_range' ), 'postMessage' );

        $wp_customize->add_control( $id, array(
            'type'        => 'range',
            'label'       => $args['label'],
            'description' => $args['description'],
            'section'     => $args['section'],
            'priority'    => $args['priority'],
            'input_attrs' => array(
                'min'  => $args['min'],
                'max'  => $args['max'],
                'step' => $args['step'],
            ),
        ) );
    }
}
