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
            <div class="error-404 not-found">
                <div class="page-content">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can not be found.', 'nextoolify-real-estate' ); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-description">
                        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'nextoolify-real-estate' ); ?></p>
                    </div>

                    <div class="error-404-actions">
                        <?php get_search_form(); ?>

                        <div class="back-home">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                                <?php esc_html_e( 'Back to Home', 'nextoolify-real-estate' ); ?>
                            </a>
                        </div>
                    </div>

                    <?php
                    // Latest Posts
                    $recent_posts = wp_get_recent_posts( array(
                        'numberposts' => 3,
                        'post_status' => 'publish',
                    ) );

                    if ( ! empty( $recent_posts ) ) :
                        ?>
                        <div class="latest-posts-section">
                            <h2><?php esc_html_e( 'Latest Posts', 'nextoolify-real-estate' ); ?></h2>
                            <ul class="latest-posts-list">
                                <?php
                                foreach ( $recent_posts as $post ) :
                                    ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_permalink( $post['ID'] ) ); ?>">
                                            <?php echo esc_html( $post['post_title'] ); ?>
                                        </a>
                                    </li>
                                    <?php
                                endforeach;
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                        <?php
                    endif;
                    ?>
                </div><!-- .page-content -->
            </div><!-- .error-404 -->
        </div><!-- .container -->
    </main><!-- #main -->

<?php
get_footer();
