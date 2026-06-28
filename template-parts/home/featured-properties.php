<?php
/**
 * Featured Properties Section
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<!-- Featured Properties Section (Filterable Showcase) -->
<section class="element-section" id="featured">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-duration="1000">
                <div class="section-title-wrap">
                    <span class="section-subtitle"><?php esc_html_e( 'The Curated Collection', 'nextoolify-real-estate' ); ?></span>
                    <h2 class="section-title"><?php esc_html_e( 'Featured', 'nextoolify-real-estate' ); ?> <span><?php esc_html_e( 'Estates', 'nextoolify-real-estate' ); ?></span></h2>
                    <p class="text-muted"><?php esc_html_e( 'Explore our signature offerings representing architectural superiority and historical value in global real estate.', 'nextoolify-real-estate' ); ?></p>
                    <div class="section-divider center"></div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <!-- Property Card 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="estate-card">
                    <div class="estate-img-wrap">
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80" alt="Villa de l'Horizon" class="estate-img">
                        <div class="estate-badge-group">
                            <span class="estate-badge badge-featured"><?php esc_html_e( 'Exclusive', 'nextoolify-real-estate' ); ?></span>
                            <span class="estate-badge badge-status"><?php esc_html_e( 'For Sale', 'nextoolify-real-estate' ); ?></span>
                        </div>
                        <div class="estate-card-price">$24,500,000</div>
                    </div>
                    <div class="estate-card-content">
                        <span class="estate-card-location"><?php esc_html_e( 'Côte d\'Azur, France', 'nextoolify-real-estate' ); ?></span>
                        <h3 class="estate-card-title"><a href="#"><?php esc_html_e( 'Villa de l\'Horizon', 'nextoolify-real-estate' ); ?></a></h3>
                        <p class="estate-card-desc"><?php esc_html_e( 'An architectural masterpiece nestled on the cliffs overlooking the Mediterranean Sea, offering ultimate privacy and endless sea vistas.', 'nextoolify-real-estate' ); ?></p>
                        <div class="estate-amenities">
                            <span class="amenity-item"><i class="fa-solid fa-bed"></i> <?php esc_html_e( '6 Beds', 'nextoolify-real-estate' ); ?></span>
                            <span class="amenity-item"><i class="fa-solid fa-bath"></i> <?php esc_html_e( '8 Baths', 'nextoolify-real-estate' ); ?></span>
                            <span class="amenity-item"><i class="fa-solid fa-ruler-combined"></i> <?php esc_html_e( '12,400 Sq Ft', 'nextoolify-real-estate' ); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property Card 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="estate-card">
                    <div class="estate-img-wrap">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="The One Penthouse" class="estate-img">
                        <div class="estate-badge-group">
                            <span class="estate-badge badge-featured"><?php esc_html_e( 'New Build', 'nextoolify-real-estate' ); ?></span>
                            <span class="estate-badge badge-status"><?php esc_html_e( 'For Sale', 'nextoolify-real-estate' ); ?></span>
                        </div>
                        <div class="estate-card-price">$38,000,000</div>
                    </div>
                    <div class="estate-card-content">
                        <span class="estate-card-location"><?php esc_html_e( 'Manhattan, New York', 'nextoolify-real-estate' ); ?></span>
                        <h3 class="estate-card-title"><a href="#"><?php esc_html_e( 'The One Penthouse', 'nextoolify-real-estate' ); ?></a></h3>
                        <p class="estate-card-desc"><?php esc_html_e( 'An outstanding duplex penthouse hovering high above Central Park, featuring high ceilings, bespoke luxury finishes and terrace pools.', 'nextoolify-real-estate' ); ?></p>
                        <div class="estate-amenities">
                            <span class="amenity-item"><i class="fa-solid fa-bed"></i> <?php esc_html_e( '5 Beds', 'nextoolify-real-estate' ); ?></span>
                            <span class="amenity-item"><i class="fa-solid fa-bath"></i> <?php esc_html_e( '6 Baths', 'nextoolify-real-estate' ); ?></span>
                            <span class="amenity-item"><i class="fa-solid fa-ruler-combined"></i> <?php esc_html_e( '9,500 Sq Ft', 'nextoolify-real-estate' ); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property Card 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="estate-card">
                    <div class="estate-img-wrap">
                        <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80" alt="Symphony Chalet" class="estate-img">
                        <div class="estate-badge-group">
                            <span class="estate-badge badge-featured"><?php esc_html_e( 'Featured', 'nextoolify-real-estate' ); ?></span>
                            <span class="estate-badge badge-status"><?php esc_html_e( 'Sold', 'nextoolify-real-estate' ); ?></span>
                        </div>
                        <div class="estate-card-price">$18,200,000</div>
                    </div>
                    <div class="estate-card-content">
                        <span class="estate-card-location"><?php esc_html_e( 'Aspen, Colorado', 'nextoolify-real-estate' ); ?></span>
                        <h3 class="estate-card-title"><a href="#"><?php esc_html_e( 'Symphony Chalet', 'nextoolify-real-estate' ); ?></a></h3>
                        <p class="estate-card-desc"><?php esc_html_e( 'A gorgeous mountain refuge surrounded by whispering pines, offering exquisite customized ski-in ski-out modern timber luxury design.', 'nextoolify-real-estate' ); ?></p>
                        <div class="estate-amenities">
                            <span class="amenity-item"><i class="fa-solid fa-bed"></i> <?php esc_html_e( '7 Beds', 'nextoolify-real-estate' ); ?></span>
                            <span class="amenity-item"><i class="fa-solid fa-bath"></i> <?php esc_html_e( '9 Baths', 'nextoolify-real-estate' ); ?></span>
                            <span class="amenity-item"><i class="fa-solid fa-ruler-combined"></i> <?php esc_html_e( '14,800 Sq Ft', 'nextoolify-real-estate' ); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
