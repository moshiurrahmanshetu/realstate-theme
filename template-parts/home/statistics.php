<?php
/**
 * Statistics Counter Section
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<!-- Statistics Counter Section (Animated Counts) -->
<section class="stats-counter-section">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="counter-item">
                    <span class="counter-number" data-target="25">0</span>
                    <span class="counter-label"><?php esc_html_e( 'Years of Prestige', 'nextoolify-real-estate' ); ?></span>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="counter-item">
                    <span class="counter-number" data-target="1500">0</span>
                    <span class="counter-label"><?php esc_html_e( 'Sanctuaries Sold', 'nextoolify-real-estate' ); ?></span>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="counter-item">
                    <span class="counter-number" data-target="380">0</span>
                    <span class="counter-label"><?php esc_html_e( 'Off-Market Assets', 'nextoolify-real-estate' ); ?></span>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="counter-item">
                    <span class="counter-number" data-target="98">0</span>
                    <span class="counter-label"><?php esc_html_e( 'Client Loyalty %', 'nextoolify-real-estate' ); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
