<?php
/**
 * Plugin Name: Creative Post Carousel
 * Description: Creative Post Carousel plugin for Elementor with 25+ responsive and modern Blog Post designs.
 * Plugin URI:  https://bestwpdeveloper.com/blog-post
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: creative-post-carousel
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.7.3
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/bwdbpc-plugin-activition.php';

final class bwdbpc_blogpost{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'bwdbpc_init', array( $this, 'bwdbpc_loaded_textdomain' ) );
		// bwdbpc_init Plugin
		add_action( 'plugins_loaded', array( $this, 'bwdbpc_init' ) );
	}

	public function bwdbpc_loaded_textdomain() {
		load_plugin_textdomain( 'creative-post-carousel' );
	}

	public function bwdbpc_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', 'bwdbpc_addon_failed_load');
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdbpc_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdbpc_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'bwdbpc-blogpost-boots.php' );
	}

	public function bwdbpc_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'creative-post-carousel' ),
			'<strong>' . esc_html__( 'Creative Post Carousel', 'creative-post-carousel' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'creative-post-carousel' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'creative-post-carousel') . '</p></div>', $message );
	}

	public function bwdbpc_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'creative-post-carousel' ),
			'<strong>' . esc_html__( 'Creative Post Carousel', 'creative-post-carousel' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'creative-post-carousel' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'creative-post-carousel') . '</p></div>', $message );
	}
}

// Instantiate creative-post-carousel.
new bwdbpc_blogpost();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );