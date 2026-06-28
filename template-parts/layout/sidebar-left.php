<?php
/**
 * Sidebar Left Template Part
 *
 * Left sidebar layout.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if ( ! nextoolify_has_sidebar() ) {
    return;
}

$column_class = nextoolify_get_column_class( 'left', 'sidebar' );
$additional_classes = $additional_classes ?? array();

$classes = array_merge(
    array( $column_class, 'sidebar-area', 'sidebar-left' ),
    $additional_classes
);
?>

<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $classes ) ) ); ?>">
    <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'nextoolify-real-estate' ); ?>">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- .widget-area -->
</div><!-- .sidebar-area -->
