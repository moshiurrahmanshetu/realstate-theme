<?php
/**
 * Container Template Part
 *
 * Reusable container wrapper for layout sections.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$container_class = nextoolify_get_container_class( $context ?? 'content' );
$additional_classes = $additional_classes ?? array();

if ( is_array( $additional_classes ) && ! empty( $additional_classes ) ) {
    $container_class .= ' ' . implode( ' ', array_map( 'sanitize_html_class', $additional_classes ) );
}
?>

<div class="<?php echo esc_attr( $container_class ); ?>">
