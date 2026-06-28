<?php
/**
 * Related Posts Component
 *
 * Reusable related posts based on categories.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display related posts
 *
 * @param int $post_id Post ID.
 * @param int $max_posts Maximum number of posts.
 */
function nextoolify_related_posts( $post_id = null, $max_posts = 3 ) {
    if ( null === $post_id ) {
        $post_id = get_the_ID();
    }

    $categories = get_the_category( $post_id );

    if ( empty( $categories ) ) {
        return;
    }

    $category_ids = array();
    foreach ( $categories as $category ) {
        $category_ids[] = $category->term_id;
    }

    $args = array(
        'category__in'        => $category_ids,
        'post__not_in'        => array( $post_id ),
        'posts_per_page'      => $max_posts,
        'ignore_sticky_posts' => 1,
        'post_status'         => 'publish',
    );

    $related_query = new WP_Query( $args );

    if ( ! $related_query->have_posts() ) {
        return;
    }
    ?>
    <div class="related-posts">
        <h3 class="related-posts-title"><?php esc_html_e( 'Related Posts', 'nextoolify-real-estate' ); ?></h3>
        <div class="row">
            <?php
            while ( $related_query->have_posts() ) :
                $related_query->the_post();
                ?>
                <div class="col-md-4 col-sm-6">
                    <?php nextoolify_post_card( get_the_ID(), 'grid' ); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php

    wp_reset_postdata();
}
