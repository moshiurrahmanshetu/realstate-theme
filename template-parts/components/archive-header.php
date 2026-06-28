<?php
/**
 * Archive Header Component
 *
 * Reusable archive header for category, tag, author, date.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$archive_title = '';
$archive_subtitle = '';
$archive_icon = '';

if ( is_category() ) {
    $archive_title = single_cat_title( '', false );
    $archive_subtitle = category_description();
    $archive_icon = 'fa-folder';
} elseif ( is_tag() ) {
    $archive_title = single_tag_title( '', false );
    $archive_subtitle = tag_description();
    $archive_icon = 'fa-tags';
} elseif ( is_author() ) {
    $author = get_queried_object();
    $archive_title = get_the_author_meta( 'display_name', $author->ID );
    $archive_subtitle = get_the_author_meta( 'description', $author->ID );
    $archive_icon = 'fa-user';
} elseif ( is_date() ) {
    if ( is_year() ) {
        $archive_title = get_the_date( _x( 'Y', 'yearly archives date format', 'nextoolify-real-estate' ) );
        $archive_icon = 'fa-calendar';
    } elseif ( is_month() ) {
        $archive_title = get_the_date( _x( 'F Y', 'monthly archives date format', 'nextoolify-real-estate' ) );
        $archive_icon = 'fa-calendar';
    } elseif ( is_day() ) {
        $archive_title = get_the_date();
        $archive_icon = 'fa-calendar';
    }
} elseif ( is_tax() ) {
    $archive_title = single_term_title( '', false );
    $archive_subtitle = term_description();
    $archive_icon = 'fa-folder';
}

if ( empty( $archive_title ) ) {
    return;
}
?>

<header class="archive-header">
    <div class="container">
        <div class="archive-header-content">
            <?php if ( $archive_icon ) : ?>
                <div class="archive-icon">
                    <i class="fa <?php echo esc_attr( $archive_icon ); ?>" aria-hidden="true"></i>
                </div>
            <?php endif; ?>

            <h1 class="archive-title"><?php echo esc_html( $archive_title ); ?></h1>

            <?php if ( $archive_subtitle ) : ?>
                <div class="archive-description"><?php echo wp_kses_post( $archive_subtitle ); ?></div>
            <?php endif; ?>
        </div>
    </div>
</header>
