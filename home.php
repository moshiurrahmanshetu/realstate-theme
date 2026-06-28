<?php
/**
 * Blog Index Template
 *
 * Template for displaying the blog posts index.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header();

$blog_layout = nextoolify_get_blog_layout();
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
                            if ( have_posts() ) :
                                // Blog Header
                                $archive_title = '';
                                $archive_subtitle = '';

                                if ( is_home() && ! is_front_page() ) {
                                    $archive_title = get_the_title( get_option( 'page_for_posts' ) );
                                }

                                if ( ! empty( $archive_title ) ) :
                                    ?>
                                    <header class="page-header">
                                        <h1 class="page-title"><?php echo esc_html( $archive_title ); ?></h1>
                                    </header>
                                    <?php
                                endif;

                                // Blog Layout Classes
                                $post_classes = array();
                                if ( 'grid' === $blog_layout ) {
                                    $post_classes[] = 'col-md-6';
                                }

                                // Start the loop
                                echo '<div class="blog-posts ' . esc_attr( 'grid' === $blog_layout ? 'row' : '' ) . '">';

                                while ( have_posts() ) :
                                    the_post();

                                    $post_class = implode( ' ', array_map( 'sanitize_html_class', $post_classes ) );
                                    ?>
                                    <article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>
                                        <?php
                                        // Load content template part
                                        get_template_part( 'template-parts/content/content', get_post_format() );
                                        ?>
                                    </article><!-- #post-<?php the_ID(); ?> -->
                                    <?php
                                endwhile;

                                echo '</div><!-- .blog-posts -->';

                                // Pagination
                                the_posts_pagination( array(
                                    'prev_text' => '<span class="screen-reader-text">' . esc_html__( 'Previous page', 'nextoolify-real-estate' ) . '</span>',
                                    'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next page', 'nextoolify-real-estate' ) . '</span>',
                                ) );

                            else :
                                // No posts found
                                get_template_part( 'template-parts/content/content', 'none' );
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
