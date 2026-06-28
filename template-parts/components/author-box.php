<?php
/**
 * Author Box Component
 *
 * Reusable author box with avatar, description, and social links.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display author box
 *
 * @param int $post_id Post ID.
 */
function nextoolify_author_box( $post_id = null ) {
    if ( null === $post_id ) {
        $post_id = get_the_ID();
    }

    $author_id = get_post_field( 'post_author', $post_id );
    $description = get_the_author_meta( 'description', $author_id );

    if ( empty( $description ) ) {
        return;
    }
    ?>
    <div class="author-box">
        <div class="author-avatar">
            <a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>" aria-label="<?php printf( esc_attr__( 'View all posts by %s', 'nextoolify-real-estate' ), get_the_author_meta( 'display_name', $author_id ) ); ?>">
                <?php echo get_avatar( $author_id, 80, '', '', array( 'class' => 'img-fluid' ) ); ?>
            </a>
        </div>
        <div class="author-info">
            <h3 class="author-name">
                <?php printf( esc_html__( 'About %s', 'nextoolify-real-estate' ), get_the_author_meta( 'display_name', $author_id ) ); ?>
            </h3>
            <p class="author-bio"><?php echo wp_kses_post( $description ); ?></p>
            <a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>" class="author-link btn btn-primary btn-sm">
                <?php printf( esc_html__( 'View all posts by %s', 'nextoolify-real-estate' ), get_the_author_meta( 'display_name', $author_id ) ); ?>
            </a>
        </div>
    </div>
    <?php
}
