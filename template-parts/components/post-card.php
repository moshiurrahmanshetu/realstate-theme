<?php
/**
 * Post Card Component
 *
 * Reusable post card with featured image, categories, and meta.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display post card
 *
 * @param int $post_id Post ID.
 * @param string $layout Card layout (grid, list).
 */
function nextoolify_post_card( $post_id = null, $layout = 'grid' ) {
    if ( null === $post_id ) {
        $post_id = get_the_ID();
    }

    $post = get_post( $post_id );
    if ( ! $post ) {
        return;
    }

    $card_classes = array( 'post-card', 'card', 'card-blog' );
    if ( 'list' === $layout ) {
        $card_classes[] = 'card-list';
    }

    $has_thumbnail = has_post_thumbnail( $post_id );
    $categories = get_the_category( $post_id );
    $show_meta = apply_filters( 'nextoolify_show_post_meta', true, $post_id );
    ?>
    <article id="post-<?php echo esc_attr( $post_id ); ?>" <?php post_class( $card_classes ); ?>>
        <?php if ( $has_thumbnail ) : ?>
            <div class="card-img-wrapper">
                <a href="<?php the_permalink( $post_id ); ?>" aria-label="<?php printf( esc_attr__( 'Read more about %s', 'nextoolify-real-estate' ), get_the_title( $post_id ) ); ?>">
                    <?php
                    the_post_thumbnail( $post_id, 'large', array(
                        'class' => 'card-img',
                        'alt'   => get_post_meta( get_post_thumbnail_id( $post_id ), '_wp_attachment_image_alt', true ) ?: get_the_title( $post_id ),
                    ) );
                    ?>
                </a>
                <?php if ( $categories ) : ?>
                    <div class="card-categories">
                        <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>">
                            <?php echo esc_html( $categories[0]->name ); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="card-body">
            <?php
            the_title( sprintf( '<h3 class="card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink( $post_id ) ) ), '</a></h3>', $post_id );

            if ( $show_meta ) {
                ?>
                <div class="card-meta">
                    <?php
                    nextoolify_entry_meta( array(
                        'author' => false,
                        'date'   => true,
                        'comments' => false,
                    ), $post_id );
                    ?>
                </div>
                <?php
            }

            $excerpt = get_the_excerpt( $post_id );
            if ( $excerpt ) :
                ?>
                <div class="card-text">
                    <?php echo wp_kses_post( wp_trim_words( $excerpt, 20, '...' ) ); ?>
                </div>
                <?php
            endif;
            ?>

            <a href="<?php the_permalink( $post_id ); ?>" class="btn btn-primary btn-sm" aria-label="<?php printf( esc_attr__( 'Read more about %s', 'nextoolify-real-estate' ), get_the_title( $post_id ) ); ?>">
                <?php esc_html_e( 'Read More', 'nextoolify-real-estate' ); ?>
            </a>
        </div>
    </article>
    <?php
}
