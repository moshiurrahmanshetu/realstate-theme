<?php
/**
 * Footer Social Template Part
 *
 * Social media links in footer.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if ( class_exists( 'Nextoolify_Real_Estate_Customizer' ) && Nextoolify_Real_Estate_Customizer::show_social_icons() ) :
    $social_links = Nextoolify_Real_Estate_Customizer::get_social_links();
    $social_icon_style = Nextoolify_Real_Estate_Customizer::get_option( 'nextoolify_social_icon_style', 'rounded' );
    
    $has_social = false;
    foreach ( $social_links as $url ) {
        if ( ! empty( $url ) ) {
            $has_social = true;
            break;
        }
    }

    if ( $has_social ) :
        ?>
        <div class="footer-social">
            <div class="social-icons <?php echo esc_attr( $social_icon_style ); ?>">
                <?php
                if ( ! empty( $social_links['facebook'] ) ) :
                    ?>
                    <a href="<?php echo esc_url( $social_links['facebook'] ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Facebook', 'nextoolify-real-estate' ); ?>">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <?php
                endif;

                if ( ! empty( $social_links['twitter'] ) ) :
                    ?>
                    <a href="<?php echo esc_url( $social_links['twitter'] ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Twitter', 'nextoolify-real-estate' ); ?>">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <?php
                endif;

                if ( ! empty( $social_links['instagram'] ) ) :
                    ?>
                    <a href="<?php echo esc_url( $social_links['instagram'] ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Instagram', 'nextoolify-real-estate' ); ?>">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <?php
                endif;

                if ( ! empty( $social_links['linkedin'] ) ) :
                    ?>
                    <a href="<?php echo esc_url( $social_links['linkedin'] ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'LinkedIn', 'nextoolify-real-estate' ); ?>">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <?php
                endif;

                if ( ! empty( $social_links['youtube'] ) ) :
                    ?>
                    <a href="<?php echo esc_url( $social_links['youtube'] ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'YouTube', 'nextoolify-real-estate' ); ?>">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                    <?php
                endif;

                if ( ! empty( $social_links['pinterest'] ) ) :
                    ?>
                    <a href="<?php echo esc_url( $social_links['pinterest'] ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Pinterest', 'nextoolify-real-estate' ); ?>">
                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                    </a>
                    <?php
                endif;

                if ( ! empty( $social_links['tiktok'] ) ) :
                    ?>
                    <a href="<?php echo esc_url( $social_links['tiktok'] ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'TikTok', 'nextoolify-real-estate' ); ?>">
                        <i class="fa fa-tiktok" aria-hidden="true"></i>
                    </a>
                    <?php
                endif;
                ?>
            </div>
        </div>
        <?php
    endif;
endif;
