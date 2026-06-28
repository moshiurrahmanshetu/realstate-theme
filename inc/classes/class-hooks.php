<?php
/**
 * Hooks Class
 *
 * Centralizes custom actions and filters.
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Hooks Class
 *
 * @since 1.0.0
 */
class Nextoolify_Real_Estate_Hooks {

    /**
     * Hooks instance
     *
     * @since 1.0.0
     * @var Nextoolify_Real_Estate_Hooks
     */
    private static $instance = null;

    /**
     * Registered hooks
     *
     * @since 1.0.0
     * @var array
     */
    private $hooks = array();

    /**
     * Get instance
     *
     * @since 1.0.0
     * @return Nextoolify_Real_Estate_Hooks
     */
    public static function get_instance() {
        if ( null === self::$instance ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Constructor
     *
     * @since 1.0.0
     */
    private function __construct() {
        $this->register_default_hooks();
    }

    /**
     * Register default hooks
     *
     * @since 1.0.0
     * @return void
     */
    private function register_default_hooks() {
        // Header hooks
        $this->add_action( 'nextoolify_header_before', 'nextoolify_header_before', 10 );
        $this->add_action( 'nextoolify_header_top', 'nextoolify_header_top', 10 );
        $this->add_action( 'nextoolify_header_main', 'nextoolify_header_main', 10 );
        $this->add_action( 'nextoolify_header_bottom', 'nextoolify_header_bottom', 10 );
        $this->add_action( 'nextoolify_header_after', 'nextoolify_header_after', 10 );

        // Content hooks
        $this->add_action( 'nextoolify_content_before', 'nextoolify_content_before', 10 );
        $this->add_action( 'nextoolify_content_top', 'nextoolify_content_top', 10 );
        $this->add_action( 'nextoolify_content_main', 'nextoolify_content_main', 10 );
        $this->add_action( 'nextoolify_content_bottom', 'nextoolify_content_bottom', 10 );
        $this->add_action( 'nextoolify_content_after', 'nextoolify_content_after', 10 );

        // Footer hooks
        $this->add_action( 'nextoolify_footer_before', 'nextoolify_footer_before', 10 );
        $this->add_action( 'nextoolify_footer_top', 'nextoolify_footer_top', 10 );
        $this->add_action( 'nextoolify_footer_main', 'nextoolify_footer_main', 10 );
        $this->add_action( 'nextoolify_footer_bottom', 'nextoolify_footer_bottom', 10 );
        $this->add_action( 'nextoolify_footer_after', 'nextoolify_footer_after', 10 );

        // Sidebar hooks
        $this->add_action( 'nextoolify_sidebar_before', 'nextoolify_sidebar_before', 10 );
        $this->add_action( 'nextoolify_sidebar_after', 'nextoolify_sidebar_after', 10 );
    }

    /**
     * Add action
     *
     * @since 1.0.0
     * @param string $tag Action tag.
     * @param callable $callback Callback function.
     * @param int $priority Priority.
     * @param int $accepted_args Accepted arguments.
     * @return void
     */
    public function add_action( $tag, $callback, $priority = 10, $accepted_args = 1 ) {
        add_action( $tag, $callback, $priority, $accepted_args );
        $this->hooks['actions'][ $tag ][] = array(
            'callback'      => $callback,
            'priority'      => $priority,
            'accepted_args' => $accepted_args,
        );
    }

    /**
     * Add filter
     *
     * @since 1.0.0
     * @param string $tag Filter tag.
     * @param callable $callback Callback function.
     * @param int $priority Priority.
     * @param int $accepted_args Accepted arguments.
     * @return void
     */
    public function add_filter( $tag, $callback, $priority = 10, $accepted_args = 1 ) {
        add_filter( $tag, $callback, $priority, $accepted_args );
        $this->hooks['filters'][ $tag ][] = array(
            'callback'      => $callback,
            'priority'      => $priority,
            'accepted_args' => $accepted_args,
        );
    }

    /**
     * Do action
     *
     * @since 1.0.0
     * @param string $tag Action tag.
     * @param mixed ...$args Arguments.
     * @return void
     */
    public function do_action( $tag, ...$args ) {
        do_action( $tag, ...$args );
    }

    /**
     * Apply filters
     *
     * @since 1.0.0
     * @param string $tag Filter tag.
     * @param mixed $value Value to filter.
     * @param mixed ...$args Arguments.
     * @return mixed
     */
    public function apply_filters( $tag, $value, ...$args ) {
        return apply_filters( $tag, $value, ...$args );
    }

    /**
     * Get registered hooks
     *
     * @since 1.0.0
     * @param string $type Hook type (actions or filters).
     * @return array
     */
    public function get_hooks( $type = 'all' ) {
        if ( 'all' === $type ) {
            return $this->hooks;
        }

        return isset( $this->hooks[ $type ] ) ? $this->hooks[ $type ] : array();
    }

    /**
     * Prevent cloning
     *
     * @since 1.0.0
     * @return void
     */
    private function __clone() {}

    /**
     * Prevent unserialization
     *
     * @since 1.0.0
     * @return void
     */
    public function __wakeup() {
        throw new Exception( 'Cannot unserialize singleton' );
    }
}
