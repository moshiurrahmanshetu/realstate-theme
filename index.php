<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
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
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <?php
                    if ( have_posts() ) :

                        if ( is_home() && ! is_front_page() ) :
                            ?>
                            <header class="page-header">
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
                            <?php
                        endif;

                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content/content', get_post_type() );

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content/content', 'none' );

                    endif;
                    ?>
                </div>

                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <div class="col-lg-4 col-md-12">
                    <?php get_sidebar(); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </main><!-- #main -->

<?php
get_footer();
