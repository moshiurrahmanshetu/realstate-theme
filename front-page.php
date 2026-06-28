<?php
/**
 * Front Page Template
 *
 * Template for displaying the front page with Gutenberg block support.
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
        while ( have_posts() ) :
            the_post();

            // Display the content created in the Block Editor
            the_content();

            // If comments are open or there are comments, load comments template
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->

<?php
get_footer();
