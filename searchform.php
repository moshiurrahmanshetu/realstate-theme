<?php
/**
 * Search Form Template
 *
 * Accessible search form with Bootstrap 5 styling.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$search_query = get_search_query();
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Search for:', 'nextoolify-real-estate' ); ?>">
    <label for="search-form-input" class="screen-reader-text"><?php esc_html_e( 'Search for:', 'nextoolify-real-estate' ); ?></label>
    <div class="input-group">
        <input type="search" 
               id="search-form-input" 
               class="form-control" 
               placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'nextoolify-real-estate' ); ?>" 
               value="<?php echo esc_attr( $search_query ); ?>" 
               name="s"
               aria-label="<?php esc_attr_e( 'Search', 'nextoolify-real-estate' ); ?>">
        <button type="submit" class="btn btn-primary" aria-label="<?php esc_attr_e( 'Search', 'nextoolify-real-estate' ); ?>">
            <i class="fa fa-search" aria-hidden="true"></i>
            <span class="screen-reader-text"><?php esc_html_e( 'Search', 'nextoolify-real-estate' ); ?></span>
        </button>
    </div>
</form>
