<?php
/**
 * Testimonials Section
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<!-- Testimonials Section (Swiper Integrated) -->
<section class="element-section light-bg">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-duration="1000">
                <div class="section-title-wrap">
                    <span class="section-subtitle"><?php esc_html_e( 'Client Perspectives', 'nextoolify-real-estate' ); ?></span>
                    <h2 class="section-title"><?php esc_html_e( 'A Legacy of', 'nextoolify-real-estate' ); ?> <span><?php esc_html_e( 'Trust', 'nextoolify-real-estate' ); ?></span></h2>
                    <p class="text-muted"><?php esc_html_e( 'Read genuine reflections from ultra-high-net-worth buyers and sellers who partnered with Aurelia.', 'nextoolify-real-estate' ); ?></p>
                    <div class="section-divider center"></div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
                <!-- Swiper Slider -->
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card-premium">
                                <div class="testimonial-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="testimonial-quote"><?php esc_html_e( '"The team at Aurelia demonstrated absolute discretion and tactical elegance when managing our estate acquisition in Aspen. They bypassed retail barriers to present off-market masterpieces, ensuring a flawless purchase structure."', 'nextoolify-real-estate' ); ?></p>
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=120&q=80" alt="<?php esc_attr_e( 'Sir Richard Vance', 'nextoolify-real-estate' ); ?>" class="testimonial-client-avatar">
                                <h5 class="testimonial-client-name"><?php esc_html_e( 'Sir Richard Vance', 'nextoolify-real-estate' ); ?></h5>
                                <p class="testimonial-client-role"><?php esc_html_e( 'Founder, Vance Capital Holdings', 'nextoolify-real-estate' ); ?></p>
                            </div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card-premium">
                                <div class="testimonial-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="testimonial-quote"><?php esc_html_e( '"As an international buyer, dealing with foreign legal guidelines is extremely stressful. Aurelia\'s in-house legal team coordinated everything beautifully, auditing titles and arranging helipad permits with absolute zero friction."', 'nextoolify-real-estate' ); ?></p>
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&q=80" alt="<?php esc_attr_e( 'Charlotte Dubois', 'nextoolify-real-estate' ); ?>" class="testimonial-client-avatar">
                                <h5 class="testimonial-client-name"><?php esc_html_e( 'Charlotte Dubois', 'nextoolify-real-estate' ); ?></h5>
                                <p class="testimonial-client-role"><?php esc_html_e( 'Creative Director, Maison de Mode', 'nextoolify-real-estate' ); ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination / Dots -->
                    <div class="swiper-pagination-custom text-center mt-5 position-relative"></div>
                </div>
            </div>
        </div>
    </div>
</section>
