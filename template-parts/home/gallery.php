<?php
/**
 * Gallery Preview Section
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<!-- Gallery Preview Section -->
<section class="element-section" id="gallery">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-duration="1000">
                <div class="section-title-wrap">
                    <span class="section-subtitle"><?php esc_html_e( 'Aesthetic Landscapes', 'nextoolify-real-estate' ); ?></span>
                    <h2 class="section-title"><?php esc_html_e( 'The Gallery', 'nextoolify-real-estate' ); ?> <span><?php esc_html_e( 'Preview', 'nextoolify-real-estate' ); ?></span></h2>
                    <p class="text-muted"><?php esc_html_e( 'A visual compilation of architectural compositions, fine interiors, and premium estate features.', 'nextoolify-real-estate' ); ?></p>
                    <div class="section-divider center"></div>
                </div>
            </div>
        </div>

        <!-- Mosaic Bento Layout -->
        <div class="gallery-mosaic-grid">
            <!-- Item 1 (Wide) -->
            <div class="gallery-mosaic-item wide" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?auto=format&fit=crop&w=1200&q=80" alt="<?php esc_attr_e( 'Kitchen Concept', 'nextoolify-real-estate' ); ?>" class="gallery-mosaic-img">
                <div class="gallery-mosaic-overlay">
                    <h4 class="gallery-mosaic-title"><?php esc_html_e( 'Epicurean Kitchens', 'nextoolify-real-estate' ); ?></h4>
                    <span class="gallery-mosaic-category"><?php esc_html_e( 'Interior design', 'nextoolify-real-estate' ); ?></span>
                </div>
            </div>
            <!-- Item 2 (Tall) -->
            <div class="gallery-mosaic-item tall" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=80" alt="<?php esc_attr_e( 'Spiral Stairs', 'nextoolify-real-estate' ); ?>" class="gallery-mosaic-img">
                <div class="gallery-mosaic-overlay">
                    <h4 class="gallery-mosaic-title"><?php esc_html_e( 'Bespoke Foyer Lines', 'nextoolify-real-estate' ); ?></h4>
                    <span class="gallery-mosaic-category"><?php esc_html_e( 'Architecture details', 'nextoolify-real-estate' ); ?></span>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="gallery-mosaic-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80" alt="<?php esc_attr_e( 'Lobby', 'nextoolify-real-estate' ); ?>" class="gallery-mosaic-img">
                <div class="gallery-mosaic-overlay">
                    <h4 class="gallery-mosaic-title"><?php esc_html_e( 'High Ceilings', 'nextoolify-real-estate' ); ?></h4>
                    <span class="gallery-mosaic-category"><?php esc_html_e( 'Structural form', 'nextoolify-real-estate' ); ?></span>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="gallery-mosaic-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=800&q=80" alt="<?php esc_attr_e( 'Modern House', 'nextoolify-real-estate' ); ?>" class="gallery-mosaic-img">
                <div class="gallery-mosaic-overlay">
                    <h4 class="gallery-mosaic-title"><?php esc_html_e( 'Luminescent Pools', 'nextoolify-real-estate' ); ?></h4>
                    <span class="gallery-mosaic-category"><?php esc_html_e( 'Water features', 'nextoolify-real-estate' ); ?></span>
                </div>
            </div>
            <!-- Item 5 (Wide) -->
            <div class="gallery-mosaic-item wide" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?auto=format&fit=crop&w=1200&q=80" alt="<?php esc_attr_e( 'Ocean Pool', 'nextoolify-real-estate' ); ?>" class="gallery-mosaic-img">
                <div class="gallery-mosaic-overlay">
                    <h4 class="gallery-mosaic-title"><?php esc_html_e( 'Private Marine Docks', 'nextoolify-real-estate' ); ?></h4>
                    <span class="gallery-mosaic-category"><?php esc_html_e( 'Coastal Living', 'nextoolify-real-estate' ); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
