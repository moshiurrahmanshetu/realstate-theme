<?php
/**
 * Featured Image Component
 *
 * Reusable featured image with lazy loading and fallback.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display featured image
 *
 * @param int $post_id Post ID.
 * @param string $size Image size.
 * @param bool $lazy_load Enable lazy loading.
 */
function nextoolify_featured_image( $post_id = null, $size = 'large', $lazy_load = true ) {
    if ( null === $post_id ) {
        $post_id = get_the_ID();
    }

    if ( ! has_post_thumbnail( $post_id ) ) {
        return;
    }

    $attachment_id = get_post_thumbnail_id( $post_id );
    $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
    $alt = $alt ?: get_the_title( $post_id );

    $loading_attr = $lazy_load ? 'loading="lazy"' : '';
    ?>
    <div class="post-thumbnail">
        <a href="<?php the_permalink( $post_id ); ?>" aria-label="<?php printf( esc_attr__( 'View %s', 'nextoolify-real-estate' ), get_the_title( $post_id ) ); ?>">
            <?php
            the_post_thumbnail( $post_id, $size, array(
                'class'    => 'img-fluid',
                'alt'      => esc_attr( $alt ),
                'loading'  => $lazy_load ? 'lazy' : false,
            ) );
            ?>
        </a>
    </div>
    <?php
}
