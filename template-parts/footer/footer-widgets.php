<?php
/**
 * Footer Widgets Template Part
 *
 * Footer widget areas.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$footer_columns = class_exists( 'Nextoolify_Real_Estate_Customizer' ) ? Nextoolify_Real_Estate_Customizer::get_footer_columns() : 4;

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) :
    ?>
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <?php
                for ( $i = 1; $i <= $footer_columns; $i++ ) :
                    $sidebar_id = 'footer-' . $i;
                    if ( is_active_sidebar( $sidebar_id ) ) :
                        $col_class = 'col-lg-' . ( 12 / $footer_columns ) . ' col-md-6 col-sm-6';
                        ?>
                        <div class="<?php echo esc_attr( $col_class ); ?>">
                            <?php dynamic_sidebar( $sidebar_id ); ?>
                        </div>
                        <?php
                    endif;
                endfor;
                ?>
            </div>
        </div>
    </div>
    <?php
endif;
