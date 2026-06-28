<?php
/**
 * Back to Top Template Part
 *
 * Back to top button.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if ( class_exists( 'Nextoolify_Real_Estate_Customizer' ) && Nextoolify_Real_Estate_Customizer::is_back_to_top_enabled() ) :
    ?>
    <button id="back-to-top" class="back-to-top" aria-label="<?php esc_attr_e( 'Back to Top', 'nextoolify-real-estate' ); ?>">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
        <span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'nextoolify-real-estate' ); ?></span>
    </button>
    <?php
endif;
