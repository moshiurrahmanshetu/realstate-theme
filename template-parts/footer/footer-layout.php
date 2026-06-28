<?php
/**
 * Footer Layout Template Part
 *
 * Main footer layout wrapper.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$footer_layout = nextoolify_get_footer_layout();
$footer_classes = array( 'site-footer' );
$footer_classes[] = 'footer-' . sanitize_html_class( $footer_layout );
?>

<footer id="colophon" class="<?php echo esc_attr( implode( ' ', $footer_classes ) ); ?>" role="contentinfo">
    <?php
    // Footer Widgets
    get_template_part( 'template-parts/footer/footer-widgets' );

    // Footer Bottom
    get_template_part( 'template-parts/footer/footer-bottom' );
    ?>
</footer><!-- #colophon -->

<?php
// Back to Top Button
get_template_part( 'template-parts/footer/back-to-top' );
