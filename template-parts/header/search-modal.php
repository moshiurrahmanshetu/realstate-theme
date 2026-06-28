<?php
/**
 * Search Modal Template Part
 *
 * Search modal dialog.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div class="modal fade" id="search-modal" tabindex="-1" aria-hidden="true" aria-labelledby="search-modal-label">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="search-modal-label"><?php esc_html_e( 'Search', 'nextoolify-real-estate' ); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php esc_attr_e( 'Close', 'nextoolify-real-estate' ); ?>"></button>
            </div>
            <div class="modal-body">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>
