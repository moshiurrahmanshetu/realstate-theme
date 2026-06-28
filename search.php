<?php
/**
 * Search Results Template
 *
 * Template for displaying search results.
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
$search_query = get_search_query();
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
                                // Search Header
                                ?>
                                <header class="page-header">
                                    <h1 class="page-title">
                                        <?php
                                        printf(
                                            esc_html__( 'Search Results for: %s', 'nextoolify-real-estate' ),
                                            '<span>' . esc_html( $search_query ) . '</span>'
                                        );
                                        ?>
                                    </h1>
                                </header>

                                <?php
                                // Blog Layout
                                if ( 'grid' === $blog_layout ) :
                                    ?>
                                    <div class="row">
                                        <?php
                                        while ( have_posts() ) :
                                            the_post();
                                            ?>
                                            <div class="col-md-6">
                                                <?php nextoolify_search_card( get_the_ID(), $search_query ); ?>
                                            </div>
                                            <?php
                                        endwhile;
                                        ?>
                                    </div>
                                    <?php
                                else :
                                    while ( have_posts() ) :
                                        the_post();
                                        nextoolify_search_card( get_the_ID(), $search_query );
                                    endwhile;
                                endif;

                                // Pagination using component
                                nextoolify_pagination();

                            else :
                                // No results using component
                                nextoolify_empty_state( 'no-results' );
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
