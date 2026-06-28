<?php
/**
 * Copyright Template Part
 *
 * Copyright text display.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$copyright_text = class_exists( 'Nextoolify_Real_Estate_Customizer' ) ? Nextoolify_Real_Estate_Customizer::get_copyright_text() : '';
?>

<div class="site-info">
    <p class="copyright">
        <?php echo wp_kses_post( $copyright_text ); ?>
    </p>
</div><!-- .site-info -->
