<?php
/**
 * About Company Section
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<!-- About Company Section -->
<section class="element-section light-bg" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="position-relative pe-lg-4">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="<?php esc_attr_e( 'Luxury Foyer', 'nextoolify-real-estate' ); ?>" class="img-fluid border mb-4" style="box-shadow: 0 30px 60px rgba(0,0,0,0.08);">
                    <div class="position-absolute bottom-0 end-0 bg-white p-4 border d-none d-sm-block" style="transform: translate(20px, 20px);">
                        <h5 style="font-family: var(--font-heading); font-size: 20px; color: var(--primary-color);"><?php esc_html_e( 'Authentic Integrity', 'nextoolify-real-estate' ); ?></h5>
                        <p class="m-0 small text-muted"><?php esc_html_e( 'A legacy built since 1998.', 'nextoolify-real-estate' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-duration="1000">
                <div class="section-title-wrap mb-4">
                    <span class="section-subtitle"><?php esc_html_e( 'Our Legacy &amp; Ethos', 'nextoolify-real-estate' ); ?></span>
                    <h2 class="section-title"><?php esc_html_e( 'Aurelia Luxury', 'nextoolify-real-estate' ); ?> <span><?php esc_html_e( 'Group', 'nextoolify-real-estate' ); ?></span></h2>
                    <div class="section-divider"></div>
                </div>
                <p class="lead mb-4" style="font-size: 18px; color: var(--dark-color);"><?php esc_html_e( 'We guide elite clientele toward exceptional properties that serve as both private sanctuaries and sound investment vehicles.', 'nextoolify-real-estate' ); ?></p>
                <p class="mb-4"><?php esc_html_e( 'Founded on the principles of extreme confidentiality, pristine transparency, and world-class localized intelligence, Aurelia has established itself as the trusted advisor to business leaders, global creators, and discerning families worldwide.', 'nextoolify-real-estate' ); ?></p>
                <p class="mb-4"><?php esc_html_e( 'Every property in our portfolio undergoes rigorous architectural, environmental, and financial audits, ensuring that your future haven exceeds even the loftiest expectations.', 'nextoolify-real-estate' ); ?></p>
                <div class="d-flex align-items-center gap-4 mt-5">
                    <a href="#contact" class="btn btn-luxury btn-luxury-primary"><?php esc_html_e( 'Meet Our Advisors', 'nextoolify-real-estate' ); ?></a>
                    <div style="border-left: 1px solid var(--border-color); padding-left: 20px;">
                        <h6 style="font-family: var(--font-heading); margin: 0; font-style: italic;"><?php esc_html_e( 'Alistair Sterling', 'nextoolify-real-estate' ); ?></h6>
                        <p class="m-0 small text-muted"><?php esc_html_e( 'Founding Partner &amp; Chief Executive', 'nextoolify-real-estate' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
