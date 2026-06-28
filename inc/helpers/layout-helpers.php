<?php
/**
 * Layout Helper Functions
 *
 * Provides reusable layout helper functions for the theme.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Get container class
 *
 * Returns the appropriate container class based on customizer settings.
 *
 * @since 1.0.0
 * @param string $context Context for the container (header, content, footer).
 * @return string
 */
function nextoolify_get_container_class( $context = 'content' ) {
    $container_class = 'container';

    // Check if customizer class is available
    if ( class_exists( 'Nextoolify_Real_Estate_Customizer' ) ) {
        $container_width = Nextoolify_Real_Estate_Customizer::get_container_width();

        if ( $container_width > 1400 ) {
            $container_class = 'container-xxl';
        } elseif ( $container_width > 1200 ) {
            $container_class = 'container-xl';
        }
    }

    /**
     * Filter the container class.
     *
     * @since 1.0.0
     * @param string $container_class Container class.
     * @param string $context Context.
     */
    return apply_filters( 'nextoolify_container_class', $container_class, $context );
}

/**
 * Get content width
 *
 * Returns the content width from customizer settings.
 *
 * @since 1.0.0
 * @return int
 */
function nextoolify_get_content_width() {
    if ( class_exists( 'Nextoolify_Real_Estate_Customizer' ) ) {
        return Nextoolify_Real_Estate_Customizer::get_content_width();
    }
    return 1200;
}

/**
 * Get sidebar position
 *
 * Returns the sidebar position from customizer settings.
 *
 * @since 1.0.0
 * @return string
 */
function nextoolify_get_sidebar_position() {
    if ( class_exists( 'Nextoolify_Real_Estate_Customizer' ) ) {
        return Nextoolify_Real_Estate_Customizer::get_sidebar_position();
    }
    return 'right';
}

/**
 * Get layout class
 *
 * Returns the layout class based on sidebar position.
 *
 * @since 1.0.0
 * @param string $sidebar_position Sidebar position.
 * @return string
 */
function nextoolify_get_layout_class( $sidebar_position = '' ) {
    if ( empty( $sidebar_position ) ) {
        $sidebar_position = nextoolify_get_sidebar_position();
    }

    $layout_class = 'no-sidebar';

    switch ( $sidebar_position ) {
        case 'left':
            $layout_class = 'has-sidebar sidebar-left';
            break;
        case 'right':
            $layout_class = 'has-sidebar sidebar-right';
            break;
        case 'none':
        default:
            $layout_class = 'no-sidebar';
            break;
    }

    /**
     * Filter the layout class.
     *
     * @since 1.0.0
     * @param string $layout_class Layout class.
     * @param string $sidebar_position Sidebar position.
     */
    return apply_filters( 'nextoolify_layout_class', $layout_class, $sidebar_position );
}

/**
 * Get wrapper class
 *
 * Returns the wrapper class for the main content area.
 *
 * @since 1.0.0
 * @param string $context Context for the wrapper.
 * @return string
 */
function nextoolify_get_wrapper_class( $context = 'main' ) {
    $wrapper_class = 'site-wrapper';

    if ( 'main' === $context ) {
        $wrapper_class = 'main-wrapper';
    } elseif ( 'content'  === $context ) {
        $wrapper_class = 'content-wrapper';
    }

    /**
     * Filter the wrapper class.
     *
     * @since 1.0.0
     * @param string $wrapper_class Wrapper class.
     * @param string $context Context.
     */
    return apply_filters( 'nextoolify_wrapper_class', $wrapper_class, $context );
}

/**
 * Get section class
 *
 * Returns the section class for content sections.
 *
 * @since 1.0.0
 * @param string $section Section identifier.
 * @param array $additional_classes Additional classes to add.
 * @return string
 */
function nextoolify_get_section_class( $section = '', $additional_classes = array() ) {
    $classes = array( 'section' );

    if ( ! empty( $section ) ) {
        $classes[] = 'section-' . sanitize_html_class( $section );
    }

    if ( is_array( $additional_classes ) && ! empty( $additional_classes ) ) {
        $classes = array_merge( $classes, $additional_classes );
    }

    $section_class = implode( ' ', array_map( 'sanitize_html_class', $classes ) );

    /**
     * Filter the section class.
     *
     * @since 1.0.0
     * @param string $section_class Section class.
     * @param string $section Section identifier.
     * @param array $additional_classes Additional classes.
     */
    return apply_filters( 'nextoolify_section_class', $section_class, $section, $additional_classes );
}

/**
 * Get column class
 *
 * Returns the appropriate Bootstrap column class based on layout.
 *
 * @since 1.0.0
 * @param string $sidebar_position Sidebar position.
 * @param string $context Context (content or sidebar).
 * @return string
 */
function nextoolify_get_column_class( $sidebar_position = '', $context = 'content' ) {
    if ( empty( $sidebar_position ) ) {
        $sidebar_position = nextoolify_get_sidebar_position();
    }

    $column_class = 'col-12';

    if ( 'none' === $sidebar_position ) {
        $column_class = 'col-12';
    } else {
        if ( 'content' === $context ) {
            $column_class = 'col-lg-8 col-md-12';
        } elseif ( 'sidebar' === $context ) {
            $column_class = 'col-lg-4 col-md-12';
        }
    }

    /**
     * Filter the column class.
     *
     * @since 1.0.0
     * @param string $column_class Column class.
     * @param string $sidebar_position Sidebar position.
     * @param string $context Context.
     */
    return apply_filters( 'nextoolify_column_class', $column_class, $sidebar_position, $context );
}

/**
 * Get content width class
 *
 * Returns the content width class (wide or narrow).
 *
 * @since 1.0.0
 * @param string $width Width type (wide, narrow, default).
 * @return string
 */
function nextoolify_get_content_width_class( $width = 'default' ) {
    $width_class = 'content-width-default';

    switch ( $width ) {
        case 'wide':
            $width_class = 'content-width-wide';
            break;
        case 'narrow':
            $width_class = 'content-width-narrow';
            break;
        case 'default':
        default:
            $width_class = 'content-width-default';
            break;
    }

    /**
     * Filter the content width class.
     *
     * @since 1.0.0
     * @param string $width_class Width class.
     * @param string $width Width type.
     */
    return apply_filters( 'nextoolify_content_width_class', $width_class, $width );
}

/**
 * Check if sidebar is active
 *
 * Checks if the sidebar is active for the current context.
 *
 * @since 1.0.0
 * @param string $sidebar_id Sidebar ID.
 * @return bool
 */
function nextoolify_is_sidebar_active( $sidebar_id = 'sidebar-1' ) {
    return is_active_sidebar( $sidebar_id );
}

/**
 * Check if layout has sidebar
 *
 * Checks if the current layout should display a sidebar.
 *
 * @since 1.0.0
 * @return bool
 */
function nextoolify_has_sidebar() {
    $sidebar_position = nextoolify_get_sidebar_position();
    return 'none' !== $sidebar_position && nextoolify_is_sidebar_active();
}

/**
 * Get layout type
 *
 * Returns the layout type (full-width, contained, boxed).
 *
 * @since 1.0.0
 * @return string
 */
function nextoolify_get_layout_type() {
    $layout_type = 'contained';

    /**
     * Filter the layout type.
     *
     * @since 1.0.0
     * @param string $layout_type Layout type.
     */
    return apply_filters( 'nextoolify_layout_type', $layout_type );
}

/**
 * Get blog layout
 *
 * Returns the blog layout from customizer settings.
 *
 * @since 1.0.0
 * @return string
 */
function nextoolify_get_blog_layout() {
    if ( class_exists( 'Nextoolify_Real_Estate_Customizer' ) ) {
        return Nextoolify_Real_Estate_Customizer::get_blog_layout();
    }
    return 'grid';
}

/**
 * Get responsive breakpoint class
 *
 * Returns responsive classes for different breakpoints.
 *
 * @since 1.0.0
 * @param array $breakpoints Breakpoint configuration.
 * @return string
 */
function nextoolify_get_responsive_class( $breakpoints = array() ) {
    $defaults = array(
        'mobile'  => 'col-12',
        'tablet'  => 'col-md-6',
        'desktop' => 'col-lg-4',
    );

    $breakpoints = wp_parse_args( $breakpoints, $defaults );
    $classes = array_values( array_filter( $breakpoints ) );

    return implode( ' ', array_map( 'esc_attr', $classes ) );
}

/**
 * Get spacing class
 *
 * Returns spacing classes for padding/margin.
 *
 * @since 1.0.0
 * @param string $type Type (padding or margin).
 * @param string $size Size (none, small, medium, large, extra-large).
 * @param string $side Side (top, bottom, left, right horizontal, vertical, all).
 * @return string
 */
function nextoolify_get_spacing_class( $type = 'padding', $size = 'medium', $side = 'all' ) {
    $spacing_map = array(
        'none'         => '0',
        'small'        => '1',
        'medium'       => '3',
        'large'        => '4',
        'extra-large'  => '5',
    );

    $size_value = isset( $spacing_map[ $size ] ) ? $spacing_map[ $size ] : '3';
    $type_short = 'p' === $type ? 'p' : 'm';

    $side_map = array(
        'top'       => 't',
        'bottom'    => 'b',
        'left'      => 's',
        'right'     => 'e',
        'horizontal'=> 'x',
        'vertical'  => 'y',
        'all'       => '',
    );

    $side_value = isset( $side_map[ $side ] ) ? $side_map[ $side ] : '';

    return esc_attr( $type_short . $side_value . '-' . $size_value );
}

/**
 * Add custom body classes
 *
 * Adds layout-related classes to the body tag.
 *
 * @since 1.0.0
 * @param array $classes Existing body classes.
 * @return array
 */
function nextoolify_body_classes( $classes ) {
    // Add layout type class
    $layout_type = nextoolify_get_layout_type();
    $classes[] = 'layout-' . sanitize_html_class( $layout_type );

    // Add sidebar position class
    $sidebar_position = nextoolify_get_sidebar_position();
    $classes[] = 'sidebar-' . sanitize_html_class( $sidebar_position );

    // Add sidebar status class
    if ( nextoolify_has_sidebar() ) {
        $classes[] = 'has-active-sidebar';
    } else {
        $classes[] = 'no-active-sidebar';
    }

    // Add customizer feature classes
    if ( class_exists( 'Nextoolify_Real_Estate_Customizer' ) ) {
        if ( Nextoolify_Real_Estate_Customizer::is_sticky_header_enabled() ) {
            $classes[] = 'has-sticky-header';
        }

        if ( Nextoolify_Real_Estate_Customizer::is_back_to_top_enabled() ) {
            $classes[] = 'has-back-to-top';
        }

        if ( Nextoolify_Real_Estate_Customizer::is_preloader_enabled() ) {
            $classes[] = 'has-preloader';
        }
    }

    // Add device detection classes
    wp_is_mobile() ? $classes[] = 'is-mobile' : $classes[] = 'is-desktop';

    return $classes;
}
add_filter( 'body_class', 'nextoolify_body_classes' );
