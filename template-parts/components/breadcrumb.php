<?php
/**
 * Breadcrumb Component
 *
 * Breadcrumb navigation framework for future plugin compatibility.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Allow breadcrumb plugins to override
if ( function_exists( 'bcn_display' ) ) {
    echo '<div class="breadcrumb-wrapper">';
    bcn_display();
    echo '</div>';
    return;
}

if ( function_exists( 'yoast_breadcrumb' ) ) {
    echo '<div class="breadcrumb-wrapper">';
    yoast_breadcrumb( '<div class="breadcrumb">', '</div>' );
    echo '</div>';
    return;
}

// Fallback breadcrumb framework
$breadcrumb_enabled = apply_filters( 'nextoolify_enable_breadcrumb', false );

if ( ! $breadcrumb_enabled ) {
    return;
}

$breadcrumbs = array();

// Home
$breadcrumbs[] = array(
    'title' => esc_html__( 'Home', 'nextoolify-real-estate' ),
    'url'   => home_url( '/' ),
);

// Add conditional breadcrumbs
if ( is_category() || is_tag() || is_tax() ) {
    $term = get_queried_object();
    $breadcrumbs[] = array(
        'title' => single_term_title( '', false ),
        'url'   => '',
    );
} elseif ( is_author() ) {
    $author = get_queried_object();
    $breadcrumbs[] = array(
        'title' => get_the_author_meta( 'display_name', $author->ID ),
        'url'   => '',
    );
} elseif ( is_date() ) {
    if ( is_year() ) {
        $breadcrumbs[] = array(
            'title' => get_the_date( _x( 'Y', 'yearly archives date format', 'nextoolify-real-estate' ) ),
            'url'   => '',
        );
    } elseif ( is_month() ) {
        $breadcrumbs[] = array(
            'title' => get_the_date( _x( 'F Y', 'monthly archives date format', 'nextoolify-real-estate' ) ),
            'url'   => '',
        );
    } elseif ( is_day() ) {
        $breadcrumbs[] = array(
            'title' => get_the_date(),
            'url'   => '',
        );
    }
} elseif ( is_singular() ) {
    $post_type = get_post_type();
    if ( 'post' === $post_type ) {
        $breadcrumbs[] = array(
            'title' => esc_html__( 'Blog', 'nextoolify-real-estate' ),
            'url'   => get_permalink( get_option( 'page_for_posts' ) ),
        );
    }
    $categories = get_the_category();
    if ( $categories ) {
        $breadcrumbs[] = array(
            'title' => $categories[0]->name,
            'url'   => get_category_link( $categories[0]->term_id ),
        );
    }
    $breadcrumbs[] = array(
        'title' => get_the_title(),
        'url'   => '',
    );
}

// Filter breadcrumbs
$breadcrumbs = apply_filters( 'nextoolify_breadcrumb_items', $breadcrumbs );

if ( empty( $breadcrumbs ) ) {
    return;
}
?>

<nav class="breadcrumb-wrapper" aria-label="<?php esc_attr_e( 'Breadcrumb', 'nextoolify-real-estate' ); ?>">
    <div class="container">
        <ol class="breadcrumb">
            <?php
            $count = count( $breadcrumbs );
            foreach ( $breadcrumbs as $index => $crumb ) :
                $is_last = ( $index === $count - 1 );
                ?>
                <li class="breadcrumb-item<?php echo $is_last ? ' active' : ''; ?>" aria-current="<?php echo $is_last ? 'page' : ''; ?>">
                    <?php if ( ! empty( $crumb['url'] ) && ! $is_last ) : ?>
                        <a href="<?php echo esc_url( $crumb['url'] ); ?>"><?php echo esc_html( $crumb['title'] ); ?></a>
                    <?php else : ?>
                        <?php echo esc_html( $crumb['title'] ); ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</nav>
