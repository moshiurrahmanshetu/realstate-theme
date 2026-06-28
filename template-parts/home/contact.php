<?php
/**
 * Contact Information Section
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<!-- Contact Information Section -->
<section class="element-section" id="contact">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-duration="1000">
                <div class="section-title-wrap">
                    <span class="section-subtitle"><?php esc_html_e( 'Secure Correspondence', 'nextoolify-real-estate' ); ?></span>
                    <h2 class="section-title"><?php esc_html_e( 'Contact', 'nextoolify-real-estate' ); ?> <span><?php esc_html_e( 'Concierge', 'nextoolify-real-estate' ); ?></span></h2>
                    <p class="text-muted"><?php esc_html_e( 'Register for private site surveys or dispatch bespoke inquiries directly to our partnership cabinets.', 'nextoolify-real-estate' ); ?></p>
                    <div class="section-divider center"></div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <!-- Information Box Column -->
            <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                <div class="contact-infobox">
                    <h4 class="font-heading mb-4" style="font-family: var(--font-heading); font-size:24px;"><?php esc_html_e( 'Our Global Embassies', 'nextoolify-real-estate' ); ?></h4>
                    <p class="small text-muted mb-5"><?php esc_html_e( 'Visits are arranged by appointment only. All security clearances are verified 24h prior.', 'nextoolify-real-estate' ); ?></p>
                    
                    <!-- Embassy 1 -->
                    <div class="contact-infobox-item">
                        <div class="contact-infobox-icon"><i class="fa-solid fa-map-location-dot"></i></div>
                        <div class="contact-infobox-content">
                            <h5><?php esc_html_e( 'Manhattan Headquarters', 'nextoolify-real-estate' ); ?></h5>
                            <p><?php esc_html_e( '745 Fifth Avenue, Suite 1800, New York, NY 10151', 'nextoolify-real-estate' ); ?></p>
                        </div>
                    </div>
                    
                    <!-- Embassy 2 -->
                    <div class="contact-infobox-item">
                        <div class="contact-infobox-icon"><i class="fa-solid fa-phone-volume"></i></div>
                        <div class="contact-infobox-content">
                            <h5><?php esc_html_e( 'Private Brokerage Hotline', 'nextoolify-real-estate' ); ?></h5>
                            <p><a href="tel:18005558899"><?php esc_html_e( '+1 (800) 555-8899 (Global Toll-Free)', 'nextoolify-real-estate' ); ?></a></p>
                        </div>
                    </div>

                    <!-- Embassy 3 -->
                    <div class="contact-infobox-item">
                        <div class="contact-infobox-icon"><i class="fa-solid fa-envelope-open"></i></div>
                        <div class="contact-infobox-content">
                            <h5><?php esc_html_e( 'Digital Correspondence Office', 'nextoolify-real-estate' ); ?></h5>
                            <p><a href="mailto:concierge@aureliaestates.com">concierge@aureliaestates.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interactive Form Column -->
            <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1000">
                <div class="luxury-form-wrap">
                    <h4 class="luxury-form-title"><?php esc_html_e( 'Concierge Registration Form', 'nextoolify-real-estate' ); ?></h4>
                    <form id="contact-concierge-form">
                        <div class="form-group-luxury">
                            <label class="luxury-form-label" for="user_name"><?php esc_html_e( 'Full Name', 'nextoolify-real-estate' ); ?></label>
                            <input type="text" id="user_name" name="name" class="luxury-input" placeholder="<?php esc_attr_e( 'e.g. Sir Alistair Sterling', 'nextoolify-real-estate' ); ?>" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-luxury">
                                    <label class="luxury-form-label" for="user_email"><?php esc_html_e( 'Email Address', 'nextoolify-real-estate' ); ?></label>
                                    <input type="email" id="user_email" name="email" class="luxury-input" placeholder="<?php esc_attr_e( 'e.g. alistair@sterling.com', 'nextoolify-real-estate' ); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-luxury">
                                    <label class="luxury-form-label" for="user_phone"><?php esc_html_e( 'Phone Number', 'nextoolify-real-estate' ); ?></label>
                                    <input type="tel" id="user_phone" name="phone" class="luxury-input" placeholder="<?php esc_attr_e( 'e.g. +1 (555) 019-2834', 'nextoolify-real-estate' ); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-luxury">
                            <label class="luxury-form-label" for="user_msg"><?php esc_html_e( 'Bespoke Requests / Message', 'nextoolify-real-estate' ); ?></label>
                            <textarea id="user_msg" name="message" class="luxury-input" placeholder="<?php esc_attr_e( 'Describe your architectural preferences, location criteria, and ideal timeframe...', 'nextoolify-real-estate' ); ?>" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-luxury btn-luxury-dark w-100 mt-2" id="contact-submit">
                            <?php esc_html_e( 'Send Secure Request', 'nextoolify-real-estate' ); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
