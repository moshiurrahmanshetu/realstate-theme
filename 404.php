<?php
/**
 * 404 Template
 *
 * Template for displaying 404 Not Found pages.
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
        $container_class = nextoolify_get_container_class( 'content' );
        ?>
        <div class="<?php echo esc_attr( $container_class ); ?>">
            <?php
            // Empty state component for 404
            nextoolify_empty_state( 'no-posts', esc_html__( 'Oops! That page can not be found.', 'nextoolify-real-estate' ) );
            ?>

            <?php
            // Latest Posts
            $recent_posts = wp_get_recent_posts( array(
                'numberposts' => 3,
                'post_status' => 'publish',
            ) );

            if ( ! empty( $recent_posts ) ) :
                ?>
                <div class="latest-posts-section mt-5">
                    <h2><?php esc_html_e( 'Latest Posts', 'nextoolify-real-estate' ); ?></h2>
                    <div class="row">
                        <?php
                        foreach ( $recent_posts as $post ) :
                            ?>
                            <div class="col-md-4">
                                <?php
                                // Temporarily set up global post for the component
                                global $post;
                                setup_postdata( $post );
                                nextoolify_post_card( $post['ID'], 'grid' );
                                wp_reset_postdata();
                                ?>
                            </div>
                            <?php
                        endforeach;
                        ?>
                    </div>
                </div>
                <?php
            endif;
            ?>
        </div><!-- .container -->
    </main><!-- #main -->

<?php
get_footer();
