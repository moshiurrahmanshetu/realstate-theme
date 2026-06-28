<?php
/**
 * Single Post Template
 *
 * Template for displaying single blog posts.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header();

$sidebar_position = nextoolify_get_sidebar_position();
?>

    <main id="primary" class="site-main">
        <?php
        $container_class = nextoolify_get_container_class( 'content' );
        $wrapper_class = nextoolify_get_wrapper_class( 'main' );
        $layout_class = nextoolify_get_layout_class( $sidebar_position );
        ?>
        <div class="<?php echo esc_attr( $container_class ); ?>">
            <div class="<?php echo esc_attr( $wrapper_class . ' ' . $layout_class ); ?>">
                <div class="row">
                    <?php
                    // Content Area
                    $column_class = nextoolify_get_column_class( $sidebar_position, 'content' );
                    ?>
                    <div class="<?php echo esc_attr( $column_class ); ?>">
                        <div class="content-area">
                            <?php
                            while ( have_posts() ) :
                                the_post();

                                // Post Header
                                ?>
                                <header class="entry-header">
                                    <?php
                                    // Post Categories
                                    if ( has_category() ) :
                                        ?>
                                        <div class="entry-categories">
                                            <?php the_category( ', ' ); ?>
                                        </div>
                                        <?php
                                    endif;

                                    // Post Title
                                    the_title( '<h1 class="entry-title">', '</h1>' );

                                    // Post Meta using component
                                    nextoolify_entry_meta( array(
                                        'author'   => true,
                                        'date'     => true,
                                        'category' => false,
                                        'tags'     => false,
                                        'comments' => true,
                                    ) );
                                    ?>
                                </header><!-- .entry-header -->

                                <!-- Featured Image using component -->
                                <?php nextoolify_featured_image( get_the_ID(), 'large' ); ?>

                                <!-- Post Content -->
                                <div class="entry-content">
                                    <?php
                                    the_content();

                                    wp_link_pages( array(
                                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nextoolify-real-estate' ),
                                        'after'  => '</div>',
                                    ) );
                                    ?>
                                </div><!-- .entry-content -->

                                <!-- Post Footer using component -->
                                <?php nextoolify_entry_footer( get_the_ID() ); ?>

                                <!-- Author Box using component -->
                                <?php nextoolify_author_box( get_the_ID() ); ?>

                                <!-- Post Navigation using component -->
                                <?php nextoolify_post_navigation( get_the_ID() ); ?>

                                <!-- Related Posts using component -->
                                <?php nextoolify_related_posts( get_the_ID(), 3 ); ?>

                                <!-- Comments -->
                                <?php
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;

                            endwhile; // End of the loop.
                            ?>
                        </div><!-- .content-area -->
                    </div><!-- .content-column -->

                    <?php
                    // Sidebar
                    if ( nextoolify_has_sidebar() ) {
                        if ( 'left' === $sidebar_position ) {
                            get_template_part( 'template-parts/layout/sidebar-left' );
                        } else {
                            get_template_part( 'template-parts/layout/sidebar-right' );
                        }
                    }
                    ?>
                </div><!-- .row -->
            </div><!-- .main-wrapper -->
        </div><!-- .container -->
    </main><!-- #main -->

<?php
get_footer();
