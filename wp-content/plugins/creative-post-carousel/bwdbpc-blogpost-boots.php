<?php
namespace bwdbpcblogpost_nacespace;

use bwdbpcblogpost_nacespace\PageSettings\Page_Settings;
define( "bwdbpc_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "bwdbpc_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Classbwdbpcblogpost {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdbpc_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdbpc_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdbpc_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdbpc_blogpost_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdbpc-blogpost-widgets.php' );
	}

	public function bwdbpc_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register WidgetsF
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\bwdbpc_blogpost_widgets());
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/bwdbpc-blogpost-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdbpc_new_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwdbpc-blogpost-category',
			[
				'title' => esc_html__( 'Post Carousel', 'bwdbpc-blogpost-td' ),
				'icon' => 'eicon-person',
			]
		);
	}

	public function bwdbpc_all_assets_style_for_the_public(){

		wp_enqueue_script( 'blogpost-owl-interactive', plugin_dir_url( __FILE__ ) . 'assets/public/js/owl.carousel.min.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'blogpost-main-interactive', plugin_dir_url( __FILE__ ) . 'assets/public/js/main.js', array('jquery'), '1.0', true );

		$all_css_js_file = array(
		
			'blogpost-font-style' => array('bwdbpc_path_define'=>bwdbpc_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/all.min.css'),

			'blogpost-plugin-owl-style' => array('bwdbpc_path_define'=>bwdbpc_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/owl.carousel.min.css'),

			'blogpost-plugin-owltheme' => array('bwdbpc_path_define'=>bwdbpc_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/owl.theme.default.min.css'),

            'blogpost-plugin-main-style' => array('bwdbpc_path_define'=>bwdbpc_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/main.css'),

            'blogpost-plugin-responsive' => array('bwdbpc_path_define'=>bwdbpc_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/responsive.css'),

        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdbpc_path_define'], null, '1.3', 'all');
        }
	}

	public function bwdbpc_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'blogpost-admin-icon' => array('bwdbpc_path_admin_define'=>bwdbpc_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdbpc_path_admin_define'], null, '1.3', 'all');
        }
	}
	
	public function __construct() {

		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdbpc_all_assets_style_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdbpc_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdbpc_new_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdbpc_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdbpc_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
Classbwdbpcblogpost::instance();