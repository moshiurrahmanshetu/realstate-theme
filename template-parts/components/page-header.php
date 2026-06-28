<?php
/**
 * Page Header Component
 *
 * Reusable page header with title and optional featured image.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$show_featured_image = apply_filters( 'nextoolify_show_page_header_image', true );
$background_image = '';

if ( $show_featured_image && has_post_thumbnail() && ! is_singular( 'post' ) ) {
    $background_image = get_the_post_thumbnail_url( null, 'full' );
}

$header_classes = array( 'page-header' );
if ( $background_image ) {
    $header_classes[] = 'has-background';
}
?>

<header class="<?php echo esc_attr( implode( ' ', $header_classes ) ); ?>" role="banner">
    <?php if ( $background_image ) : ?>
        <div class="page-header-bg" style="background-image: url('<?php echo esc_url( $background_image ); ?>');" role="img" aria-label="<?php esc_attr_e( 'Page header background', 'nextoolify-real-estate' ); ?>"></div>
        <div class="page-header-overlay"></div>
    <?php endif; ?>

    <div class="container">
        <div class="page-header-content">
            <?php
            // Page Title
            if ( is_singular() ) {
                the_title( '<h1 class="page-title">', '</h1>' );
            } elseif ( is_archive() ) {
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="page-description">', '</div>' );
            } elseif ( is_search() ) {
                printf( '<h1 class="page-title">%s</h1>', sprintf( esc_html__( 'Search Results for: %s', 'nextoolify-real-estate' ), '<span>' . get_search_query() . '</span>' ) );
            } elseif ( is_404() ) {
                echo '<h1 class="page-title">' . esc_html__( 'Page Not Found', 'nextoolify-real-estate' ) . '</h1>';
            } else {
                the_title( '<h1 class="page-title">', '</h1>' );
            }
            ?>
        </div>
    </div>
</header>
