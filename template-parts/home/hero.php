<?php
/**
 * Hero Slider Section
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<!-- Hero Slider Section (Swiper Integrated) -->
<section class="position-relative">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide swiper-slide-hero" style="background-image: url('https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1920&q=80');">
                <div class="hero-swiper-content">
                    <span class="section-subtitle text-uppercase text-primary mb-3 d-inline-block"><?php esc_html_e( 'The Peak of Sophistication', 'nextoolify-real-estate' ); ?></span>
                    <h1><?php esc_html_e( 'Exceptional Living', 'nextoolify-real-estate' ); ?> <span><?php esc_html_e( 'Redefined', 'nextoolify-real-estate' ); ?></span></h1>
                    <p><?php esc_html_e( 'Experience an elite curated portfolio of bespoke waterfront estates, sky-high penthouses, and private sanctuaries across the globe\'s premier locations.', 'nextoolify-real-estate' ); ?></p>
                    <div class="btn-group-luxury d-flex justify-content-center gap-3">
                        <a href="#featured" class="btn btn-luxury btn-luxury-primary"><?php esc_html_e( 'View Collection', 'nextoolify-real-estate' ); ?></a>
                        <a href="#about" class="btn btn-luxury btn-luxury-white"><?php esc_html_e( 'Our Story', 'nextoolify-real-estate' ); ?></a>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide swiper-slide-hero" style="background-image: url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1920&q=80');">
                <div class="hero-swiper-content">
                    <span class="section-subtitle text-uppercase text-primary mb-3 d-inline-block"><?php esc_html_e( 'Waterfront Masterpieces', 'nextoolify-real-estate' ); ?></span>
                    <h1><?php esc_html_e( 'Coastal Luxury', 'nextoolify-real-estate' ); ?> <span><?php esc_html_e( 'Sanctuaries', 'nextoolify-real-estate' ); ?></span></h1>
                    <p><?php esc_html_e( 'Unmatched architectural marvels hugging pristine coastlines, crafted for high luxury living with private marinas and panoramic marine views.', 'nextoolify-real-estate' ); ?></p>
                    <div class="btn-group-luxury d-flex justify-content-center gap-3">
                        <a href="#featured" class="btn btn-luxury btn-luxury-primary"><?php esc_html_e( 'Explore Coastal', 'nextoolify-real-estate' ); ?></a>
                        <a href="#contact" class="btn btn-luxury btn-luxury-white"><?php esc_html_e( 'Inquire Now', 'nextoolify-real-estate' ); ?></a>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide swiper-slide-hero" style="background-image: url('https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1920&q=80');">
                <div class="hero-swiper-content">
                    <span class="section-subtitle text-uppercase text-primary mb-3 d-inline-block"><?php esc_html_e( 'High-Society Skyline Living', 'nextoolify-real-estate' ); ?></span>
                    <h1><?php esc_html_e( 'Bespoke Skyline', 'nextoolify-real-estate' ); ?> <span><?php esc_html_e( 'Penthouses', 'nextoolify-real-estate' ); ?></span></h1>
                    <p><?php esc_html_e( 'Soar high above worldly concerns in architectural crown jewels featuring custom helipads, indoor heated pools, and endless views.', 'nextoolify-real-estate' ); ?></p>
                    <div class="btn-group-luxury d-flex justify-content-center gap-3">
                        <a href="#featured" class="btn btn-luxury btn-luxury-primary"><?php esc_html_e( 'Discover Skylines', 'nextoolify-real-estate' ); ?></a>
                        <a href="#contact" class="btn btn-luxury btn-luxury-white"><?php esc_html_e( 'Book Private Tour', 'nextoolify-real-estate' ); ?></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Swiper Custom Navigation & Pagination -->
        <div class="swiper-button-custom-prev"><i class="fa-solid fa-chevron-left"></i></div>
        <div class="swiper-button-custom-next"><i class="fa-solid fa-chevron-right"></i></div>
        <div class="swiper-pagination-custom"></div>
    </div>
</section>
