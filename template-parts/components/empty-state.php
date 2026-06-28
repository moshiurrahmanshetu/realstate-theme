<?php
/**
 * Empty State Component
 *
 * Reusable empty state for no posts, no search results, etc.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display empty state
 *
 * @param string $type Empty state type (no-posts, no-search, no-results).
 * @param string $message Custom message.
 */
function nextoolify_empty_state( $type = 'no-posts', $message = '' ) {
    $icons = array(
        'no-posts'    => 'fa-file-alt',
        'no-search'   => 'fa-search',
        'no-results'  => 'fa-folder-open',
    );

    $titles = array(
        'no-posts'    => esc_html__( 'No Posts Found', 'nextoolify-real-estate' ),
        'no-search'   => esc_html__( 'Search', 'nextoolify-real-estate' ),
        'no-results'  => esc_html__( 'No Results Found', 'nextoolify-real-estate' ),
    );

    $default_messages = array(
        'no-posts'    => esc_html__( 'There are no posts to display at the moment.', 'nextoolify-real-estate' ),
        'no-search'   => esc_html__( 'Try searching for something else.', 'nextoolify-real-estate' ),
        'no-results'  => esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'nextoolify-real-estate' ),
    );

    $icon = isset( $icons[ $type ] ) ? $icons[ $type ] : 'fa-info-circle';
    $title = isset( $titles[ $type ] ) ? $titles[ $type ] : esc_html__( 'Nothing Found', 'nextoolify-real-estate' );
    $final_message = $message ?: ( isset( $default_messages[ $type ] ) ? $default_messages[ $type ] : '' );
    ?>
    <div class="empty-state">
        <div class="empty-state-icon">
            <i class="fa <?php echo esc_attr( $icon ); ?>" aria-hidden="true"></i>
        </div>
        <h3 class="empty-state-title"><?php echo esc_html( $title ); ?></h3>
        <?php if ( $final_message ) : ?>
            <p class="empty-state-message"><?php echo esc_html( $final_message ); ?></p>
        <?php endif; ?>

        <?php if ( 'no-search' === $type || 'no-results' === $type ) : ?>
            <div class="empty-state-action">
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>

        <div class="empty-state-cta">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                <?php esc_html_e( 'Back to Home', 'nextoolify-real-estate' ); ?>
            </a>
        </div>
    </div>
    <?php
}
