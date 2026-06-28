<?php
/**
 * Footer Navigation Template Part
 *
 * Footer menu navigation.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if ( has_nav_menu( 'footer' ) ) :
    ?>
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
    <?php
endif;
