<?php
/**
 * Post Card List Component
 *
 * List layout for post cards.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display post card list
 *
 * @param array $args Query arguments.
 */
function nextoolify_post_card_list( $args = array() ) {
    $defaults = array(
        'post_type'      => 'post',
        'posts_per_page' => 5,
        'post_status'    => 'publish',
    );

    $args = wp_parse_args( $args, $defaults );
    $query = new WP_Query( $args );

    if ( ! $query->have_posts() ) {
        return;
    }
    ?>
    <div class="post-card-list">
        <?php
        while ( $query->have_posts() ) :
            $query->the_post();
            ?>
            <div class="post-card-list-item">
                <?php nextoolify_post_card( get_the_ID(), 'list' ); ?>
            </div>
        <?php endwhile; ?>
    </div>
    <?php

    wp_reset_postdata();
}
