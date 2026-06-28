<?php
/**
 * Template part for displaying posts
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Use the new post card component
nextoolify_post_card( get_the_ID(), is_singular() ? 'list' : 'grid' );
