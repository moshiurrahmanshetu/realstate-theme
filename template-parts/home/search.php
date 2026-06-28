<?php
/**
 * Property Search Section
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<!-- Property Search Section (Overlapping Search Engine) -->
<section class="search-overlap-section" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="luxury-form-wrap dark-bg">
            <form id="overlap-search-form">
                <div class="row g-4 align-items-end">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group-luxury m-0">
                            <label class="luxury-form-label" for="loc_search"><?php esc_html_e( 'Location or Neighborhood', 'nextoolify-real-estate' ); ?></label>
                            <input type="text" id="loc_search" class="luxury-input" placeholder="<?php esc_attr_e( 'e.g. Monaco, Beverly Hills', 'nextoolify-real-estate' ); ?>" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group-luxury m-0">
                            <label class="luxury-form-label" for="type_search"><?php esc_html_e( 'Property Category', 'nextoolify-real-estate' ); ?></label>
                            <select id="type_search" class="luxury-input luxury-select">
                                <option value="all"><?php esc_html_e( 'All Categories', 'nextoolify-real-estate' ); ?></option>
                                <option value="villa"><?php esc_html_e( 'Waterfront Villas', 'nextoolify-real-estate' ); ?></option>
                                <option value="penthouse"><?php esc_html_e( 'Penthouse Duplexes', 'nextoolify-real-estate' ); ?></option>
                                <option value="estate"><?php esc_html_e( 'Private Estates', 'nextoolify-real-estate' ); ?></option>
                                <option value="island"><?php esc_html_e( 'Private Islands', 'nextoolify-real-estate' ); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group-luxury m-0">
                            <label class="luxury-form-label" for="price_search"><?php esc_html_e( 'Desired Price Range', 'nextoolify-real-estate' ); ?></label>
                            <select id="price_search" class="luxury-input luxury-select">
                                <option value="any"><?php esc_html_e( 'Any Price Range', 'nextoolify-real-estate' ); ?></option>
                                <option value="5-10">$5M - $10M</option>
                                <option value="10-25">$10M - $25M</option>
                                <option value="25-50">$25M - $50M</option>
                                <option value="50">$50M+</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <button type="submit" class="btn btn-luxury btn-luxury-primary w-100 py-3 mt-md-3 mt-lg-0" id="search-submit-btn">
                            <i class="fa-solid fa-magnifying-glass me-2"></i><?php esc_html_e( 'Search Estates', 'nextoolify-real-estate' ); ?>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
