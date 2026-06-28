<?php
/**
 * Wrapper Start Template Part
 *
 * Opening wrapper for main content area.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$wrapper_class = nextoolify_get_wrapper_class( $context ?? 'main' );
$layout_class = nextoolify_get_layout_class();
$additional_classes = $additional_classes ?? array();

$classes = array_merge(
    array( $wrapper_class, $layout_class ),
    $additional_classes
);
?>

<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $classes ) ) ); ?>">
