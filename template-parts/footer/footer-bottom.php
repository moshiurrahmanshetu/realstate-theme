<?php
/**
 * Footer Bottom Template Part
 *
 * Footer bottom section with copyright and navigation.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div class="footer-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php get_template_part( 'template-parts/footer/copyright' ); ?>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php get_template_part( 'template-parts/footer/footer-navigation' ); ?>
            </div>
        </div>
    </div>
</div>
