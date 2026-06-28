<?php
/**
 * Pagination Component
 *
 * Reusable pagination with Bootstrap styling.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display pagination
 *
 * @param WP_Query $query Custom query (optional).
 */
function nextoolify_pagination( $query = null ) {
    if ( null === $query ) {
        global $wp_query;
        $query = $wp_query;
    }

    $total = $query->max_num_pages;

    if ( $total <= 1 ) {
        return;
    }

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $base = isset( $base ) ? trailingslashit( $base ) : get_pagenum_link( 1 );

    $links = array();
    for ( $i = 1; $i <= $total; $i++ ) {
        $links[] = array(
            'page'  => $i,
            'url'   => esc_url( get_pagenum_link( $i ) ),
            'current' => $i === $paged,
        );
    }
    ?>
    <nav class="pagination-wrapper" aria-label="<?php esc_attr_e( 'Pagination', 'nextoolify-real-estate' ); ?>">
        <ul class="pagination">
            <?php
            foreach ( $links as $link ) :
                $class = $link['current'] ? 'page-numbers current' : 'page-numbers';
                ?>
                <li>
                    <?php if ( $link['current'] ) : ?>
                        <span class="<?php echo esc_attr( $class ); ?>" aria-current="page"><?php echo esc_html( $link['page'] ); ?></span>
                    <?php else : ?>
                        <a href="<?php echo esc_url( $link['url'] ); ?>" class="<?php echo esc_attr( $class ); ?>" aria-label="<?php printf( esc_attr__( 'Page %d', 'nextoolify-real-estate' ), $link['page'] ); ?>"><?php echo esc_html( $link['page'] ); ?></a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <?php
}
