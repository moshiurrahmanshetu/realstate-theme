<?php
/**
 * Latest Projects Section
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<!-- Latest Projects Section -->
<section class="element-section light-bg" id="latest-projects">
    <div class="container">
        <div class="row align-items-end justify-content-between mb-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <span class="section-subtitle"><?php esc_html_e( 'Architectural Milestones', 'nextoolify-real-estate' ); ?></span>
                <h2 class="section-title mb-0"><?php esc_html_e( 'Upcoming Elite', 'nextoolify-real-estate' ); ?> <span><?php esc_html_e( 'Developments', 'nextoolify-real-estate' ); ?></span></h2>
                <div class="section-divider"></div>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="1000">
                <p class="text-muted small mb-3"><?php esc_html_e( 'Gain access to off-plan listings at investor price-tiers before official retail launch.', 'nextoolify-real-estate' ); ?></p>
                <a href="#contact" class="btn btn-luxury btn-luxury-outline py-2 px-4"><?php esc_html_e( 'Request Portfolio', 'nextoolify-real-estate' ); ?></a>
            </div>
        </div>

        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="position-relative overflow-hidden group-hover-zoom" style="height: 450px;">
                    <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?auto=format&fit=crop&w=1200&q=80" alt="<?php esc_attr_e( 'The Obsidian Estate', 'nextoolify-real-estate' ); ?>" class="w-100 h-100 object-fit-cover transition-smooth" style="transition: var(--transition-smooth);">
                    <div class="position-absolute top-0 left-0 w-100 h-100 bg-dark opacity-50"></div>
                    <div class="position-absolute bottom-0 left-0 right-0 p-5 z-2 text-white">
                        <span class="badge bg-primary rounded-0 mb-3 text-uppercase font-body" style="font-size:11px; letter-spacing:1px; padding:6px 12px;"><?php esc_html_e( 'Q4 2026 Deliverable', 'nextoolify-real-estate' ); ?></span>
                        <h3 class="h2 font-heading text-white mb-2" style="font-family: var(--font-heading);"><?php esc_html_e( 'The Obsidian Canopy', 'nextoolify-real-estate' ); ?></h3>
                        <p class="small text-light-50 mb-4" style="max-width: 450px;"><?php esc_html_e( 'A modern bioclimatic architecture marvel suspended over Malibu cliffside woodlands. Absolute organic integration.', 'nextoolify-real-estate' ); ?></p>
                        <a href="#contact" class="text-primary text-uppercase font-body fw-bold tracking-widest small d-inline-flex align-items-center gap-2"><?php esc_html_e( 'Inquire Privately', 'nextoolify-real-estate' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="position-relative overflow-hidden group-hover-zoom" style="height: 450px;">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1200&q=80" alt="<?php esc_attr_e( 'Ethereal Heights Penthouse', 'nextoolify-real-estate' ); ?>" class="w-100 h-100 object-fit-cover transition-smooth" style="transition: var(--transition-smooth);">
                    <div class="position-absolute top-0 left-0 w-100 h-100 bg-dark opacity-50"></div>
                    <div class="position-absolute bottom-0 left-0 right-0 p-5 z-2 text-white">
                        <span class="badge bg-primary rounded-0 mb-3 text-uppercase font-body" style="font-size:11px; letter-spacing:1px; padding:6px 12px;"><?php esc_html_e( 'Q2 2027 Deliverable', 'nextoolify-real-estate' ); ?></span>
                        <h3 class="h2 font-heading text-white mb-2" style="font-family: var(--font-heading);"><?php esc_html_e( 'Ethereal Heights', 'nextoolify-real-estate' ); ?></h3>
                        <p class="small text-light-50 mb-4" style="max-width: 450px;"><?php esc_html_e( 'A sleek glass pinnacle redefining skyline luxury in downtown Singapore with custom internal vertical yacht slipways.', 'nextoolify-real-estate' ); ?></p>
                        <a href="#contact" class="text-primary text-uppercase font-body fw-bold tracking-widest small d-inline-flex align-items-center gap-2"><?php esc_html_e( 'Inquire Privately', 'nextoolify-real-estate' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
