<?php
/**
 * Mobile Navigation Template Part
 *
 * Mobile offcanvas navigation menu.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div class="offcanvas offcanvas-start" tabindex="-1" id="mobile-menu-offcanvas" aria-labelledby="mobile-menu-label">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobile-menu-label">
            <?php bloginfo( 'name' ); ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="<?php esc_attr_e( 'Close', 'nextoolify-real-estate' ); ?>"></button>
    </div>
    <div class="offcanvas-body">
        <?php
        if ( has_nav_menu( 'primary' ) ) :
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'mobile-menu-list',
                'container'      => false,
                'fallback_cb'    => false,
            ) );
        else :
            ?>
            <ul class="mobile-menu-list">
                <li>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'nextoolify-real-estate' ); ?></a>
                </li>
                <?php
                wp_list_pages( array(
                    'title_li' => '',
                    'depth'    => 1,
                ) );
                ?>
            </ul>
            <?php
        endif;
        ?>
    </div>
</div>
