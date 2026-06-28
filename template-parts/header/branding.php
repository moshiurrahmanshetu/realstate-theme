<?php
/**
 * Branding Template Part
 *
 * Site logo and title branding.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$logo_width = class_exists( 'Nextoolify_Real_Estate_Customizer' ) ? Nextoolify_Real_Estate_Customizer::get_option( 'nextoolify_logo_width', 400 ) : 400;
?>

<div class="site-branding col-lg-3 col-md-3 col-6">
    <?php
    if ( has_custom_logo() ) :
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );
        if ( $logo ) :
            $logo_url = $logo[0];
            ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="custom-logo-link">
                <img src="<?php echo esc_url( $logo_url ); ?>" 
                     alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
                     class="custom-logo" 
                     style="max-width: <?php echo esc_attr( $logo_width ); ?>px;">
            </a>
            <?php
        endif;
    else :
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
        </a>
        <?php
        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) :
            ?>
            <p class="site-description"><?php echo esc_html( $description ); ?></p>
            <?php
        endif;
    endif;
    ?>
</div><!-- .site-branding -->
