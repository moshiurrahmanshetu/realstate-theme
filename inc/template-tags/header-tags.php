<?php
/**
 * Header template tags
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Fallback menu for when no menu is assigned
 *
 * @since 1.0.0
 */
function nextoolify_real_estate_fallback_menu() {
    ?>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link"><?php esc_html_e( 'Home', 'nextoolify-real-estate' ); ?></a>
        </li>
        <?php
        wp_page_menu( array(
            'menu_class' => 'navbar-nav',
            'before'    => '',
            'after'     => '',
            'link_before' => '<span class="nav-link">',
            'link_after'  => '</span>',
        ) );
        ?>
    </ul>
    <?php
}

/**
 * Check if sticky header is enabled
 *
 * @since 1.0.0
 * @return bool
 */
function nextoolify_real_estate_is_sticky_header() {
    $sticky_header = get_theme_mod( 'nextoolify_real_estate_sticky_header', true );
    return apply_filters( 'nextoolify_real_estate_is_sticky_header', $sticky_header );
}

/**
 * Get header layout class
 *
 * @since 1.0.0
 * @return string
 */
function nextoolify_real_estate_get_header_layout() {
    $layout = get_theme_mod( 'nextoolify_real_estate_header_layout', 'default' );
    return apply_filters( 'nextoolify_real_estate_header_layout', $layout );
}

/**
 * Display site branding
 *
 * @since 1.0.0
 */
function nextoolify_real_estate_site_branding() {
    if ( has_custom_logo() ) {
        the_custom_logo();
    } else {
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
        </a>
        <?php
        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) {
            ?>
            <p class="site-description"><?php echo esc_html( $description ); ?></p>
            <?php
        }
    }
}

/**
 * Prints HTML with meta information for the current post-date/time.
 *
 * @since 1.0.0
 */
function nextoolify_real_estate_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf(
        $time_string,
        esc_attr( get_the_date( DATE_W3C ) ),
        esc_html( get_the_date() ),
        esc_attr( get_the_modified_date( DATE_W3C ) ),
        esc_html( get_the_modified_date() )
    );

    $posted_on = sprintf(
        /* translators: %s: Post date. */
        esc_html_x( 'Posted on %s', 'post date', 'nextoolify-real-estate' ),
        '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
    );

    echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/**
 * Prints HTML with meta information for the current author.
 *
 * @since 1.0.0
 */
function nextoolify_real_estate_posted_by() {
    $byline = sprintf(
        /* translators: %s: Post author. */
        esc_html_x( 'by %s', 'post author', 'nextoolify-real-estate' ),
        '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
    );

    echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/**
 * Prints HTML with meta information for the categories, tags and comments.
 *
 * @since 1.0.0
 */
function nextoolify_real_estate_entry_footer() {
    // Hide category and tag text for pages.
    if ( 'post' === get_post_type() ) {
        /* translators: Used between list items, there is a space after the comma. */
        $categories_list = get_the_category_list( esc_html__( ', ', 'nextoolify-real-estate' ) );
        if ( $categories_list ) {
            /* translators: 1: List of categories. */
            printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'nextoolify-real-estate' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }

        /* translators: Used between list items, there is a space after the comma. */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'nextoolify-real-estate' ) );
        if ( $tags_list ) {
            /* translators: 1: List of tags. */
            printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'nextoolify-real-estate' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }

    if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
        echo '<span class="comments-link">';
        comments_popup_link(
            sprintf(
                wp_kses(
                    /* translators: %s: Post title. */
                    __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'nextoolify-real-estate' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            )
        );
        echo '</span>';
    }

    edit_post_link(
        sprintf(
            /* translators: %s: Post title. */
            esc_html__( 'Edit %s', 'nextoolify-real-estate' ),
            the_title_attribute( array( 'echo' => false ) )
        ),
        '<span class="edit-link">',
        '</span>'
    );
}
