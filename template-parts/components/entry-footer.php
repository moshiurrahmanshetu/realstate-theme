<?php
/**
 * Entry Footer Component
 *
 * Reusable entry footer with tags and share buttons.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display entry footer
 *
 * @param int $post_id Post ID.
 */
function nextoolify_entry_footer( $post_id = null ) {
    if ( null === $post_id ) {
        $post_id = get_the_ID();
    }

    $show_tags = apply_filters( 'nextoolify_show_entry_tags', true, $post_id );
    $show_share = apply_filters( 'nextoolify_show_entry_share', false, $post_id );

    if ( ! $show_tags && ! $show_share ) {
        return;
    }
    ?>
    <footer class="entry-footer">
        <?php if ( $show_tags && has_tag( '', $post_id ) ) : ?>
            <div class="entry-tags">
                <?php
                the_tags( '<span class="tags-label">' . esc_html__( 'Tags:', 'nextoolify-real-estate' ) . '</span> ', ', ', '' );
                ?>
            </div>
        <?php endif; ?>

        <?php if ( $show_share ) : ?>
            <div class="entry-share">
                <?php do_action( 'nextoolify_entry_share_buttons', $post_id ); ?>
            </div>
        <?php endif; ?>
    </footer>
    <?php
}
