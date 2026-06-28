<?php
/**
 * Header Actions Template Part
 *
 * Header action buttons (search, etc.).
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div class="col-lg-3 col-md-3 d-none d-md-block">
    <div class="header-actions">
        <button class="search-toggle" 
                type="button" 
                data-bs-toggle="modal" 
                data-bs-target="#search-modal" 
                aria-label="<?php esc_attr_e( 'Toggle Search', 'nextoolify-real-estate' ); ?>">
            <i class="fa fa-search" aria-hidden="true"></i>
            <span class="screen-reader-text"><?php esc_html_e( 'Search', 'nextoolify-real-estate' ); ?></span>
        </button>
    </div>
</div>
