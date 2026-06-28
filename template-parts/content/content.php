<?php
/**
 * Template part for displaying posts
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
    <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
            <?php the_post_thumbnail( 'medium-large', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
        </a>
    </div>
    <?php endif; ?>

    <div class="post-content">
        <header class="entry-header">
            <?php
            if ( is_singular() ) :
                the_title( '<h2 class="entry-title">', '</h2>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            if ( 'post' === get_post_type() ) :
                ?>
                <div class="entry-meta">
                    <?php
                    nextoolify_real_estate_posted_on();
                    nextoolify_real_estate_posted_by();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_excerpt();

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nextoolify-real-estate' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php nextoolify_real_estate_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
