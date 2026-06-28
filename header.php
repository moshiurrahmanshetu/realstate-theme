<?php
/**
 * The header for our theme
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nextoolify-real-estate' ); ?></a>

    <!-- Top Bar -->
    <?php if ( has_nav_menu( 'top-bar' ) ) : ?>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="top-bar-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Bar Menu', 'nextoolify-real-estate' ); ?>">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'top-bar',
                            'menu_class'     => 'top-bar-menu',
                            'depth'          => 1,
                            'fallback_cb'    => false,
                        ) );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Header -->
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="site-branding">
                        <?php
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else {
                            ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                            </a>
                            <?php
                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) {
                                ?>
                                <p class="site-description"><?php echo esc_html( $description ); ?></p>
                                <?php
                            }
                        }
                        ?>
                    </div><!-- .site-branding -->
                </div>

                <div class="col-lg-6 col-md-6 col-6">
                    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'nextoolify-real-estate' ); ?>">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Primary Menu', 'nextoolify-real-estate' ); ?>">
                            <span class="hamburger"></span>
                            <span class="hamburger"></span>
                            <span class="hamburger"></span>
                        </button>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'navbar-nav ms-auto',
                            'container'      => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'fallback_cb'    => 'nextoolify_real_estate_fallback_menu',
                        ) );
                        ?>
                    </nav><!-- #site-navigation -->
                </div>

                <div class="col-lg-3 col-md-3 d-none d-md-block">
                    <div class="header-actions">
                        <button class="search-toggle" aria-label="<?php esc_attr_e( 'Toggle Search', 'nextoolify-real-estate' ); ?>">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <!-- Search Modal -->
    <div id="search-modal" class="search-modal" aria-hidden="true">
        <div class="search-modal-content">
            <button class="search-modal-close" aria-label="<?php esc_attr_e( 'Close Search', 'nextoolify-real-estate' ); ?>">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="search-form-wrapper">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu" aria-hidden="true">
        <div class="mobile-menu-content">
            <button class="mobile-menu-close" aria-label="<?php esc_attr_e( 'Close Mobile Menu', 'nextoolify-real-estate' ); ?>">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <nav class="mobile-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Mobile Menu', 'nextoolify-real-estate' ); ?>">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'mobile-menu-list',
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>
        </div>
    </div>
