<?php
/**
 * Loading Placeholder Component
 *
 * Reusable skeleton UI for loading states.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Display loading placeholder
 *
 * @param string $type Placeholder type (card, post, image, text).
 */
function nextoolify_loading_placeholder( $type = 'card' ) {
    ?>
    <div class="loading-placeholder skeleton" aria-hidden="true">
        <?php
        switch ( $type ) {
            case 'card':
                ?>
                <div class="skeleton-image"></div>
                <div class="skeleton-title"></div>
                <div class="skeleton-text"></div>
                <div class="skeleton-text short"></div>
                <?php
                break;

            case 'post':
                ?>
                <div class="skeleton-image"></div>
                <div class="skeleton-meta"></div>
                <div class="skeleton-title"></div>
                <div class="skeleton-text"></div>
                <div class="skeleton-text"></div>
                <div class="skeleton-text short"></div>
                <?php
                break;

            case 'image':
                ?>
                <div class="skeleton-image"></div>
                <?php
                break;

            case 'text':
                ?>
                <div class="skeleton-title"></div>
                <div class="skeleton-text"></div>
                <div class="skeleton-text"></div>
                <div class="skeleton-text short"></div>
                <?php
                break;
        }
        ?>
    </div>
    <?php
}
