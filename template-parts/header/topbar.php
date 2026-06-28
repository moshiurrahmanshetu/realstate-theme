<?php
/**
 * Top Bar Template Part
 *
 * Top bar with additional navigation or info.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if ( has_nav_menu( 'top-bar' ) ) :
    ?>
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
    <?php
endif;
