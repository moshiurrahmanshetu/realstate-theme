<?php
/**
 * Post Navigation Component
 *
 * Reusable post navigation with previous/next links.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display post navigation
 *
 * @param int $post_id Post ID.
 */
function nextoolify_post_navigation( $post_id = null ) {
    if ( null === $post_id ) {
        $post_id = get_the_ID();
    }

    $prev_post = get_previous_post();
    $next_post = get_next_post();

    if ( ! $prev_post && ! $next_post ) {
        return;
    }
    ?>
    <nav class="post-navigation" aria-label="<?php esc_attr_e( 'Post Navigation', 'nextoolify-real-estate' ); ?>">
        <?php if ( $prev_post ) : ?>
            <div class="nav-previous">
                <span class="nav-subtitle"><?php esc_html_e( 'Previous:', 'nextoolify-real-estate' ); ?></span>
                <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" rel="prev" class="nav-title">
                    <?php echo esc_html( $prev_post->post_title ); ?>
                </a>
            </div>
        <?php endif; ?>

        <?php if ( $next_post ) : ?>
            <div class="nav-next">
                <span class="nav-subtitle"><?php esc_html_e( 'Next:', 'nextoolify-real-estate' ); ?></span>
                <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" rel="next" class="nav-title">
                    <?php echo esc_html( $next_post->post_title ); ?>
                </a>
            </div>
        <?php endif; ?>
    </nav>
    <?php
}
