<?php
/**
 * Archive Template
 *
 * Template for displaying archive pages (category, tag, author, date).
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header();

$sidebar_position = nextoolify_get_sidebar_position();
$blog_layout = nextoolify_get_blog_layout();
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
                            if ( have_posts() ) :
                                // Archive Header using component
                                get_template_part( 'template-parts/components/archive-header' );

                                // Blog Layout
                                if ( 'grid' === $blog_layout ) :
                                    $columns = 2;
                                    ?>
                                    <div class="row">
                                        <?php
                                        while ( have_posts() ) :
                                            the_post();
                                            ?>
                                            <div class="col-md-6">
                                                <?php nextoolify_post_card( get_the_ID(), 'grid' ); ?>
                                            </div>
                                            <?php
                                        endwhile;
                                        ?>
                                    </div>
                                    <?php
                                else :
                                    while ( have_posts() ) :
                                        the_post();
                                        nextoolify_post_card( get_the_ID(), 'list' );
                                    endwhile;
                                endif;

                                // Pagination using component
                                nextoolify_pagination();

                            else :
                                // No posts found using component
                                nextoolify_empty_state( 'no-posts' );
                            endif;
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
