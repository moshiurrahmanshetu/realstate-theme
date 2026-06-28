<?php
/**
 * The template for displaying the footer
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

?>

    <!-- Footer Widgets -->
    <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Footer Bottom -->
    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="site-info">
                        <p class="copyright">
                            <?php
                            /* translators: %s: Site name */
                            printf( esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'nextoolify-real-estate' ), date_i18n( 'Y' ), get_bloginfo( 'name' ) );
                            ?>
                        </p>
                    </div><!-- .site-info -->
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <?php if ( has_nav_menu( 'footer' ) ) : ?>
                    <nav class="footer-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'nextoolify-real-estate' ); ?>">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer',
                            'menu_class'     => 'footer-menu',
                            'depth'          => 1,
                            'fallback_cb'    => false,
                        ) );
                        ?>
                    </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->

    <!-- Back to Top Button -->
    <button id="back-to-top" class="back-to-top" aria-label="<?php esc_attr_e( 'Back to Top', 'nextoolify-real-estate' ); ?>">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </button>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
