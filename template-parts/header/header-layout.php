<?php
/**
 * Header Layout Template Part
 *
 * Main header layout wrapper.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$header_layout = nextoolify_get_header_layout();
$is_sticky = class_exists( 'Nextoolify_Real_Estate_Customizer' ) ? Nextoolify_Real_Estate_Customizer::is_sticky_header_enabled() : true;
$is_transparent = class_exists( 'Nextoolify_Real_Estate_Customizer' ) ? Nextoolify_Real_Estate_Customizer::get_option( 'nextoolify_transparent_header', false ) : false;

$header_classes = array( 'site-header' );
if ( $is_sticky ) {
    $header_classes[] = 'sticky-header';
}
if ( $is_transparent && is_front_page() ) {
    $header_classes[] = 'transparent-header';
}
$header_classes[] = 'header-' . sanitize_html_class( $header_layout );
?>

<header id="masthead" class="<?php echo esc_attr( implode( ' ', $header_classes ) ); ?>" role="banner">
    <?php
    // Top Bar
    get_template_part( 'template-parts/header/topbar' );

    // Main Header
    $container_class = nextoolify_get_container_class( 'header' );
    ?>
    <div class="<?php echo esc_attr( $container_class ); ?>">
        <div class="header-inner">
            <div class="row align-items-center">
                <?php
                // Branding
                get_template_part( 'template-parts/header/branding' );

                // Navigation
                get_template_part( 'template-parts/header/navigation' );

                // Header Actions
                get_template_part( 'template-parts/header/header-actions' );
                ?>
            </div>
        </div>
    </div>
</header><!-- #masthead -->

<?php
// Search Modal
get_template_part( 'template-parts/header/search-modal' );

// Mobile Navigation
get_template_part( 'template-parts/header/mobile-navigation' );
