<?php
/**
 * Post Card Grid Component
 *
 * Grid layout for post cards.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display post card grid
 *
 * @param array $args Query arguments.
 * @param int $columns Number of columns.
 */
function nextoolify_post_card_grid( $args = array(), $columns = 3 ) {
    $defaults = array(
        'post_type'      => 'post',
        'posts_per_page' => 6,
        'post_status'    => 'publish',
    );

    $args = wp_parse_args( $args, $defaults );
    $query = new WP_Query( $args );

    if ( ! $query->have_posts() ) {
        return;
    }

    $col_class = 'col-lg-' . ( 12 / $columns ) . ' col-md-6 col-sm-12';
    ?>
    <div class="row post-card-grid">
        <?php
        while ( $query->have_posts() ) :
            $query->the_post();
            ?>
            <div class="<?php echo esc_attr( $col_class ); ?>">
                <?php nextoolify_post_card( get_the_ID(), 'grid' ); ?>
            </div>
        <?php endwhile; ?>
    </div>
    <?php

    wp_reset_postdata();
}
