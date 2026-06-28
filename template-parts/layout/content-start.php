<?php
/**
 * Content Start Template Part
 *
 * Opening content area with column classes.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$sidebar_position = nextoolify_get_sidebar_position();
$column_class = nextoolify_get_column_class( $sidebar_position, 'content' );
$additional_classes = $additional_classes ?? array();

$classes = array_merge(
    array( $column_class, 'content-area' ),
    $additional_classes
);
?>

<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $classes ) ) ); ?>">
