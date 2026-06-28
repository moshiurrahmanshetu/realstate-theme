<?php
/**
 * Front Page Template
 *
 * Template for displaying the front page.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header();
?>

    <main id="primary" class="site-main">
        <?php
        // Load homepage sections
        get_template_part( 'template-parts/home/hero' );
        get_template_part( 'template-parts/home/search' );
        get_template_part( 'template-parts/home/featured-properties' );
        get_template_part( 'template-parts/home/about' );
        get_template_part( 'template-parts/home/why-choose-us' );
        get_template_part( 'template-parts/home/statistics' );
        get_template_part( 'template-parts/home/property-categories' );
        get_template_part( 'template-parts/home/latest-projects' );
        get_template_part( 'template-parts/home/amenities' );
        get_template_part( 'template-parts/home/video' );
        get_template_part( 'template-parts/home/gallery' );
        get_template_part( 'template-parts/home/testimonials' );
        get_template_part( 'template-parts/home/team' );
        get_template_part( 'template-parts/home/latest-news' );
        get_template_part( 'template-parts/home/cta' );
        get_template_part( 'template-parts/home/contact' );
        ?>
    </main><!-- #main -->

<?php
get_footer();
