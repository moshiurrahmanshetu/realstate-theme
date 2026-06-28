<?php
/**
 * Search Card Component
 *
 * Reusable search result card with highlighted title.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display search result card
 *
 * @param int $post_id Post ID.
 * @param string $search_query Search query for highlighting.
 */
function nextoolify_search_card( $post_id = null, $search_query = '' ) {
    if ( null === $post_id ) {
        $post_id = get_the_ID();
    }

    $post = get_post( $post_id );
    if ( ! $post ) {
        return;
    }

    $title = get_the_title( $post_id );
    $excerpt = get_the_excerpt( $post_id );

    // Highlight search query in title
    if ( ! empty( $search_query ) ) {
        $title = preg_replace( '/(' . preg_quote( $search_query, '/' ) . ')/i', '<mark>$1</mark>', esc_html( $title ) );
    }
    ?>
    <article id="post-<?php echo esc_attr( $post_id ); ?>" <?php post_class( 'search-result-card card' ); ?>>
        <div class="card-body">
            <h3 class="card-title">
                <a href="<?php the_permalink( $post_id ); ?>">
                    <?php echo wp_kses_post( $title ); ?>
                </a>
            </h3>

            <?php if ( $excerpt ) : ?>
                <div class="card-text">
                    <?php echo wp_kses_post( wp_trim_words( $excerpt, 25, '...' ) ); ?>
                </div>
            <?php endif; ?>

            <a href="<?php the_permalink( $post_id ); ?>" class="btn btn-primary btn-sm">
                <?php esc_html_e( 'Read More', 'nextoolify-real-estate' ); ?>
            </a>
        </div>
    </article>
    <?php
}
