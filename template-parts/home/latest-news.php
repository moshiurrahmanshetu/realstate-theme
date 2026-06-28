<?php
/**
 * Latest News Section
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<!-- News & Blogs Section -->
<section class="element-section light-bg" id="news">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-duration="1000">
                <div class="section-title-wrap">
                    <span class="section-subtitle"><?php esc_html_e( 'Market Editorial', 'nextoolify-real-estate' ); ?></span>
                    <h2 class="section-title"><?php esc_html_e( 'The Aurelia', 'nextoolify-real-estate' ); ?> <span><?php esc_html_e( 'Gazette', 'nextoolify-real-estate' ); ?></span></h2>
                    <p class="text-muted"><?php esc_html_e( 'A curation of thought leadership, design movements, and investment reports from our private research desks.', 'nextoolify-real-estate' ); ?></p>
                    <div class="section-divider center"></div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <!-- Article 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="estate-card">
                    <div class="estate-img-wrap" style="height:220px;">
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80" alt="<?php esc_attr_e( 'Mediterranean Design Trends', 'nextoolify-real-estate' ); ?>" class="estate-img">
                        <span class="position-absolute top-3 start-3 badge bg-dark rounded-0 font-body text-uppercase py-2 px-3" style="font-size:10px; letter-spacing:1px; z-index:10; left:20px; top:20px;"><?php esc_html_e( 'Design trends', 'nextoolify-real-estate' ); ?></span>
                    </div>
                    <div class="estate-card-content p-4">
                        <span class="text-primary text-uppercase font-body small tracking-wider fw-bold"><?php esc_html_e( 'June 20, 2026', 'nextoolify-real-estate' ); ?></span>
                        <h3 class="h4 font-heading my-3" style="font-family: var(--font-heading);"><a href="#"><?php esc_html_e( 'Bespoke Stone Forms in Coastal Riviera', 'nextoolify-real-estate' ); ?></a></h3>
                        <p class="small text-muted mb-4"><?php esc_html_e( 'How organic stone architecture is replacing sleek concrete structures, restoring historic texture to Mediterranean mansions.', 'nextoolify-real-estate' ); ?></p>
                        <a href="#" class="text-dark text-uppercase font-body small fw-semibold tracking-wider"><?php esc_html_e( 'Read Editorial', 'nextoolify-real-estate' ); ?> <i class="fa-solid fa-arrow-right ms-2 text-primary"></i></a>
                    </div>
                </div>
            </div>
            <!-- Article 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="estate-card">
                    <div class="estate-img-wrap" style="height:220px;">
                        <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=800&q=80" alt="<?php esc_attr_e( 'Market Analysis', 'nextoolify-real-estate' ); ?>" class="estate-img">
                        <span class="position-absolute top-3 start-3 badge bg-dark rounded-0 font-body text-uppercase py-2 px-3" style="font-size:10px; letter-spacing:1px; z-index:10; left:20px; top:20px;"><?php esc_html_e( 'Market Analysis', 'nextoolify-real-estate' ); ?></span>
                    </div>
                    <div class="estate-card-content p-4">
                        <span class="text-primary text-uppercase font-body small tracking-wider fw-bold"><?php esc_html_e( 'June 15, 2026', 'nextoolify-real-estate' ); ?></span>
                        <h3 class="h4 font-heading my-3" style="font-family: var(--font-heading);"><a href="#"><?php esc_html_e( 'Hedge Assets: Off-Market Real Estate', 'nextoolify-real-estate' ); ?></a></h3>
                        <p class="small text-muted mb-4"><?php esc_html_e( 'Analyzing how unlisted luxury properties serve as powerful hedges during high-volatility financial periods.', 'nextoolify-real-estate' ); ?></p>
                        <a href="#" class="text-dark text-uppercase font-body small fw-semibold tracking-wider"><?php esc_html_e( 'Read Editorial', 'nextoolify-real-estate' ); ?> <i class="fa-solid fa-arrow-right ms-2 text-primary"></i></a>
                    </div>
                </div>
            </div>
            <!-- Article 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="estate-card">
                    <div class="estate-img-wrap" style="height:220px;">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=800&q=80" alt="<?php esc_attr_e( 'Wellness Architecture', 'nextoolify-real-estate' ); ?>" class="estate-img">
                        <span class="position-absolute top-3 start-3 badge bg-dark rounded-0 font-body text-uppercase py-2 px-3" style="font-size:10px; letter-spacing:1px; z-index:10; left:20px; top:20px;"><?php esc_html_e( 'Eco-Luxury', 'nextoolify-real-estate' ); ?></span>
                    </div>
                    <div class="estate-card-content p-4">
                        <span class="text-primary text-uppercase font-body small tracking-wider fw-bold"><?php esc_html_e( 'June 08, 2026', 'nextoolify-real-estate' ); ?></span>
                        <h3 class="h4 font-heading my-3" style="font-family: var(--font-heading);"><a href="#"><?php esc_html_e( 'Thermoregulation &amp; Wellness design', 'nextoolify-real-estate' ); ?></a></h3>
                        <p class="small text-muted mb-4"><?php esc_html_e( 'Inside the modern biophilic architectural masterpieces employing advanced underground geothermal climate regulation.', 'nextoolify-real-estate' ); ?></p>
                        <a href="#" class="text-dark text-uppercase font-body small fw-semibold tracking-wider"><?php esc_html_e( 'Read Editorial', 'nextoolify-real-estate' ); ?> <i class="fa-solid fa-arrow-right ms-2 text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
