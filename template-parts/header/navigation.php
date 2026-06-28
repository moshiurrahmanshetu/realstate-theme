<?php
/**
 * Navigation Template Part
 *
 * Primary navigation menu.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$nav_font_family = class_exists( 'Nextoolify_Real_Estate_Customizer' ) ? Nextoolify_Real_Estate_Customizer::get_option( 'nextoolify_nav_font_family', 'system' ) : 'system';
?>

<div class="col-lg-6 col-md-6 col-6">
    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'nextoolify-real-estate' ); ?>">
        <?php
        // Mobile Toggle
        get_template_part( 'template-parts/header/mobile-toggle' );
        ?>

        <!-- Desktop Navigation -->
        <?php
        if ( has_nav_menu( 'primary' ) ) :
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'navbar-nav ms-auto',
                'container'      => 'div',
                'container_class' => 'collapse navbar-collapse desktop-nav',
                'fallback_cb'    => false,
            ) );
        else :
            // Fallback menu
            ?>
            <div class="collapse navbar-collapse desktop-nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link"><?php esc_html_e( 'Home', 'nextoolify-real-estate' ); ?></a>
                    </li>
                    <?php
                    wp_list_pages( array(
                        'title_li' => '',
                        'depth'    => 1,
                        'walker'   => new Walker_Page(),
                    ) );
                    ?>
                </ul>
            </div>
            <?php
        endif;
        ?>
    </nav><!-- #site-navigation -->
</div>
