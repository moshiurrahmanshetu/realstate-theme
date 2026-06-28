<?php
/**
 * Entry Meta Component
 *
 * Reusable entry meta with author, date, categories, tags, comments.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display entry meta
 *
 * @param array $options Meta options to display.
 * @param int $post_id Post ID.
 */
function nextoolify_entry_meta( $options = array(), $post_id = null ) {
    if ( null === $post_id ) {
        $post_id = get_the_ID();
    }

    $defaults = array(
        'author'   => true,
        'date'     => true,
        'category' => true,
        'tags'     => false,
        'comments' => true,
    );

    $options = wp_parse_args( $options, $defaults );
    $meta_items = array();

    // Author
    if ( $options['author'] ) {
        $author_id = get_post_field( 'post_author', $post_id );
        $meta_items[] = sprintf(
            '<span class="byline"><span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span></span>',
            esc_url( get_author_posts_url( $author_id ) ),
            esc_html( get_the_author_meta( 'display_name', $author_id ) )
        );
    }

    // Date
    if ( $options['date'] ) {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U', $post_id ) !== get_the_modified_time( 'U', $post_id ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr( get_the_date( DATE_W3C, $post_id ) ),
            esc_html( get_the_date( '', $post_id ) ),
            esc_attr( get_the_modified_date( DATE_W3C, $post_id ) ),
            esc_html( get_the_modified_date( '', $post_id ) )
        );

        $meta_items[] = sprintf(
            '<span class="posted-on"><a href="%1$s" rel="bookmark">%2$s</a></span>',
            esc_url( get_permalink( $post_id ) ),
            wp_kses_post( $time_string )
        );
    }

    // Categories
    if ( $options['category'] && has_category( '', $post_id ) ) {
        $categories_list = get_the_category_list( ', ', '', $post_id );
        if ( $categories_list ) {
            $meta_items[] = sprintf(
                '<span class="cat-links">%s</span>',
                wp_kses_post( $categories_list )
            );
        }
    }

    // Tags
    if ( $options['tags'] && has_tag( '', $post_id ) ) {
        $tags_list = get_the_tag_list( '', ', ', '', $post_id );
        if ( $tags_list ) {
            $meta_items[] = sprintf(
                '<span class="tags-links">%s</span>',
                wp_kses_post( $tags_list )
            );
        }
    }

    // Comments
    if ( $options['comments'] && ! post_password_required( $post_id ) && comments_open( $post_id ) ) {
        $comments_count = get_comments_number( $post_id );
        $meta_items[] = sprintf(
            '<span class="comments-link"><a href="%1$s">%2$s</a></span>',
            esc_url( get_comments_link( $post_id ) ),
            wp_kses_post(
                sprintf(
                    _n( '%s Comment', '%s Comments', $comments_count, 'nextoolify-real-estate' ),
                    number_format_i18n( $comments_count )
                )
            )
        );
    }

    if ( empty( $meta_items ) ) {
        return;
    }

    $separator = apply_filters( 'nextoolify_entry_meta_separator', ' / ' );
    ?>
    <div class="entry-meta">
        <?php echo implode( '<span class="meta-separator">' . esc_html( $separator ) . '</span>', $meta_items ); ?>
    </div>
    <?php
}
