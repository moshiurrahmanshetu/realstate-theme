<?php
/**
 * Section Title Component
 *
 * Reusable section title with optional subtitle and alignment.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display section title
 *
 * @param string $title Section title.
 * @param string $subtitle Section subtitle.
 * @param string $alignment Text alignment (left, center, right).
 * @param string $tag HTML tag for title (h2, h3, h4).
 */
function nextoolify_section_title( $title, $subtitle = '', $alignment = 'left', $tag = 'h2' ) {
    $alignment_class = 'text-' . sanitize_html_class( $alignment );
    ?>
    <div class="section-title-wrapper <?php echo esc_attr( $alignment_class ); ?>">
        <<?php echo esc_html( $tag ); ?> class="section-title"><?php echo esc_html( $title ); ?></<?php echo esc_html( $tag ); ?>>
        <?php if ( $subtitle ) : ?>
            <p class="section-subtitle"><?php echo esc_html( $subtitle ); ?></p>
        <?php endif; ?>
    </div>
    <?php
}
