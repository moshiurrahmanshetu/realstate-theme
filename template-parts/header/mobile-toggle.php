<?php
/**
 * Mobile Toggle Template Part
 *
 * Mobile menu toggle button.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<button class="navbar-toggler mobile-menu-toggle" 
        type="button" 
        data-bs-toggle="offcanvas" 
        data-bs-target="#mobile-menu-offcanvas" 
        aria-controls="mobile-menu-offcanvas" 
        aria-label="<?php esc_attr_e( 'Toggle Mobile Menu', 'nextoolify-real-estate' ); ?>">
    <span class="hamburger"></span>
    <span class="hamburger"></span>
    <span class="hamburger"></span>
    <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'nextoolify-real-estate' ); ?></span>
</button>
