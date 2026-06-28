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

                                    // Post Meta
                                    if ( 'post' === get_post_type() ) :
                                        ?>
                                        <div class="entry-meta">
                                            <?php
                                            // Posted on
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

                                            printf(
                                                '<span class="posted-on"><a href="%1$s" rel="bookmark">%2$s</a></span>',
                                                esc_url( get_permalink() ),
                                                $time_string
                                            );

                                            // Posted by
                                            printf(
                                                '<span class="byline"><span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span></span>',
                                                esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                                                esc_html( get_the_author() )
                                            );
                                            ?>
                                        </div><!-- .entry-meta -->
                                        <?php
                                    endif;
                                    ?>
                                </header><!-- .entry-header -->

                                <!-- Featured Image -->
                                <?php
                                if ( has_post_thumbnail() ) :
                                    ?>
                                    <div class="post-thumbnail">
                                        <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
                                    </div>
                                    <?php
                                endif;
                                ?>

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

                                <!-- Post Footer -->
                                <footer class="entry-footer">
                                    <?php
                                    // Post Tags
                                    if ( has_tag() ) :
                                        ?>
                                        <div class="entry-tags">
                                            <?php the_tags( '<span class="tags-label">' . esc_html__( 'Tags:', 'nextoolify-real-estate' ). '</span> ', ', ', '' ); ?>
                                        </div>
                                        <?php
                                    endif;
                                    ?>
                                </footer><!-- .entry-footer -->

                                <!-- Author Box -->
                                <?php
                                if ( get_the_author_meta( 'description' ) ) :
                                    ?>
                                    <div class="author-box">
                                        <div class="author-avatar">
                                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
                                        </div>
                                        <div class="author-info">
                                            <h3 class="author-name"><?php printf( esc_html__( 'About %s', 'nextoolify-real-estate' ), get_the_author() ); ?></h3>
                                            <p class="author-bio"><?php the_author_meta( 'description' ); ?></p>
                                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="author-link">
                                                <?php printf( esc_html__( 'View all posts by %s', 'nextoolify-real-estate' ), get_the_author() ); ?>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                endif;
                                ?>

                                <!-- Post Navigation -->
                                <?php
                                the_post_navigation( array(
                                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'nextoolify-real-estate' ) . '</span> <span class="nav-title">%title</span>',
                                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'nextoolify-real-estate' ) . '</span> <span class="nav-title">%title</span>',
                                ) );
                                ?>

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
