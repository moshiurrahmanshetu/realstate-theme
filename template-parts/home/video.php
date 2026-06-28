<?php
/**
 * Video Presentation Section
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<!-- Video Presentation Section -->
<section class="video-presentation-section" style="background-image: url('https://images.unsplash.com/photo-1512915922686-57c11dde9b6b?auto=format&fit=crop&w=1920&q=80');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="video-content-box" data-aos="zoom-in" data-aos-duration="1000">
                    <button class="video-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal" aria-label="<?php esc_attr_e( 'Play presentation video', 'nextoolify-real-estate' ); ?>">
                        <i class="fa-solid fa-play"></i>
                    </button>
                    <span class="section-subtitle text-primary text-uppercase mb-3 d-block"><?php esc_html_e( 'Cinematic Experience', 'nextoolify-real-estate' ); ?></span>
                    <h2 class="h1 font-heading text-white mb-4" style="font-family: var(--font-heading); font-size: 45px;"><?php esc_html_e( 'Aurelia: Art of Space', 'nextoolify-real-estate' ); ?></h2>
                    <p class="text-light-50 mx-auto" style="max-width: 600px; color:#dddddd;"><?php esc_html_e( 'An elegant walkthrough of our curated waterfront villas, penthouse sanctuaries, and architectural marvels across the French Riviera and Malibu hills.', 'nextoolify-real-estate' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Modal Popup -->
<div class="modal fade luxury-video-modal" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php esc_attr_e( 'Close', 'nextoolify-real-estate' ); ?>"></button>
            </div>
            <div class="modal-body p-4">
                <!-- Responsive video container -->
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="<?php esc_attr_e( 'Aurelia Real Estate Presentation', 'nextoolify-real-estate' ); ?>" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
