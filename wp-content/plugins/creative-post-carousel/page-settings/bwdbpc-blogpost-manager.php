<?php
namespace bwdbpcblogpost_nacespace\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdbpc_blogpost_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdbpc_blogpost_register_document_controls' ] );
	}

	public function bwdbpc_blogpost_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'Blog Post Carousel', 'bwdbpc-blogpost-td' ) );
	}

	public function bwdbpc_blogpost_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdbpc_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwdbpc-blogpost-td' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdbpc_text',
			[
				'label' => esc_html__( 'Title', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwdbpc-blogpost-td' ),
			]
		);

		$document->end_controls_section();
	}
}
