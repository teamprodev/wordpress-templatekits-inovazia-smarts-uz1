<?php
namespace bwdbpcblogpost_nacespace\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdbpc_blogpost_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdbpc-blogpost-carousel', 'bwdbpc-blogpost-td' );
	}

	public function get_title() {
		return esc_html__( 'Creative Post Carousel', 'elementor' );
	}

	public function get_icon() {
		return ' eicon-posts-carousel bwdbpc-blogpost-icon';
	}

	public function get_categories() {
		return ['bwdbpc-blogpost-category'];
	}


	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'bwdbpc_content_section',
			[
				'label' => esc_html__( 'All Style Here', 'bwdbpc-blogpost-td' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdbpc_select_style_selection',
			[
				'label' => esc_html__( 'Select Style', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwdbpc-blogpost-td' ),
					'style2' => esc_html__( 'Style 2', 'bwdbpc-blogpost-td' ),
					'style3' => esc_html__( 'Style 3', 'bwdbpc-blogpost-td' ),
					'style4' => esc_html__( 'Style 4', 'bwdbpc-blogpost-td' ),
					'style5' => esc_html__( 'Style 5', 'bwdbpc-blogpost-td' ),
					'style6' => esc_html__( 'Style 6', 'bwdbpc-blogpost-td' ),
					'style7' => esc_html__( 'Style 7', 'bwdbpc-blogpost-td' ),
					'style8' => esc_html__( 'Style 8', 'bwdbpc-blogpost-td' ),
					'style9' => esc_html__( 'Style 9', 'bwdbpc-blogpost-td' ),
					'style10' => esc_html__( 'Style 10', 'bwdbpc-blogpost-td' ),
					'style11' => esc_html__( 'Style 11', 'bwdbpc-blogpost-td' ),
					'style12' => esc_html__( 'Style 12', 'bwdbpc-blogpost-td' ),
					'style13' => esc_html__( 'Style 13', 'bwdbpc-blogpost-td' ),
					'style14' => esc_html__( 'Style 14', 'bwdbpc-blogpost-td' ),
					'style15' => esc_html__( 'Style 15', 'bwdbpc-blogpost-td' ),
					'style16' => esc_html__( 'Style 16', 'bwdbpc-blogpost-td' ),
					'style17' => esc_html__( 'Style 17', 'bwdbpc-blogpost-td' ),
					'style18' => esc_html__( 'Style 18', 'bwdbpc-blogpost-td' ),
					'style19' => esc_html__( 'Style 19', 'bwdbpc-blogpost-td' ),
					'style20' => esc_html__( 'Style 20', 'bwdbpc-blogpost-td' ),
					'style21' => esc_html__( 'Style 21', 'bwdbpc-blogpost-td' ),
					'style22' => esc_html__( 'Style 22', 'bwdbpc-blogpost-td' ),
					'style23' => esc_html__( 'Style 23', 'bwdbpc-blogpost-td' ),
					'style24' => esc_html__( 'Style 24', 'bwdbpc-blogpost-td' ),
					'style25' => esc_html__( 'Style 25', 'bwdbpc-blogpost-td' ),
					'style26' => esc_html__( 'Style 26', 'bwdbpc-blogpost-td' ),
					'style27' => esc_html__( 'Style 27', 'bwdbpc-blogpost-td' ),
					'style28' => esc_html__( 'Style 28', 'bwdbpc-blogpost-td' ),
					'style29' => esc_html__( 'Style 29', 'bwdbpc-blogpost-td' ),
					'style30' => esc_html__( 'Style 30', 'bwdbpc-blogpost-td' ),
					'style31' => esc_html__( 'Style 31', 'bwdbpc-blogpost-td' ),
					'style32' => esc_html__( 'Style 32', 'bwdbpc-blogpost-td' ),
					'style33' => esc_html__( 'Style 33', 'bwdbpc-blogpost-td' ),
					'style34' => esc_html__( 'Style 34', 'bwdbpc-blogpost-td' ),
					'style35' => esc_html__( 'Style 35', 'bwdbpc-blogpost-td' ),
					'style36' => esc_html__( 'Style 36', 'bwdbpc-blogpost-td' ),
					'style37' => esc_html__( 'Style 37', 'bwdbpc-blogpost-td' ),
					'style38' => esc_html__( 'Style 38', 'bwdbpc-blogpost-td' ),
					'style39' => esc_html__( 'Style 39', 'bwdbpc-blogpost-td' ),
					'style40' => esc_html__( 'Style 40', 'bwdbpc-blogpost-td' ),
					'style41' => esc_html__( 'Style 41', 'bwdbpc-blogpost-td' ),
				],
			]
		);
		$this->add_control(
			'bwdbpc_the_blog_type',
			[
				'label' => esc_html__( 'Blog Type', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'post',
				'options' => [
					'post' => esc_html__( 'Post', 'bwdbpc-blogpost-td' ),
					'page' => esc_html__( 'Page', 'bwdbpc-blogpost-td' ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbpc_image_show_switcher',
			[
				'label' => esc_html__( 'Image', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
				'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdbpc_title_show_switcher',
			[
				'label' => esc_html__( 'Title', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
				'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdbpc_title_tags',
			[
				'label' => esc_html__( 'Title HTML Tag', 'bwdib-icon-box' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'div',
				'options' => [
					'div'  => esc_html__( 'Div', 'bwdib-icon-box' ),
					'h1' => esc_html__( 'H1', 'bwdib-icon-box' ),
					'h2' => esc_html__( 'H2', 'bwdib-icon-box' ),
					'h3' => esc_html__( 'H3', 'bwdib-icon-box' ),
					'h4' => esc_html__( 'H4', 'bwdib-icon-box' ),
					'h5' => esc_html__( 'H5', 'bwdib-icon-box' ),
					'h6' => esc_html__( 'H6', 'bwdib-icon-box' ),
					'p' => esc_html__( 'p', 'bwdib-icon-box' ),
				],
				'condition' => [
					'bwdbpc_title_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdbpc_description_show_switcher',
			[
				'label' => esc_html__( 'Description', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
				'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'bwdbpc_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'bwdbpc_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'bwdbpc-blogpost-td' ),
				'label_block' => true,
				'condition' => [
					'bwdbpc_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdbpc_taxo_icon',
			[
				'label' => esc_html__( 'All Taxo Icons', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'separator' => 'before',
				'default' => 'show',
				'options' => [
					'none' => esc_html__( 'None', 'bwdbpc-blogpost-td' ),
					'show' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
				],
			]
		);
		$this->add_control(
			'bwdbpc_date_show_switcher',
			[
				'label' => esc_html__( 'Publish Date', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
				'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
				'separator' => 'before',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdbpc_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', 'bwdbpc-blogpost-td' ),
				'placeholder' => esc_html__( 'j M y', 'bwdbpc-blogpost-td' ),
				'label_block' => true,
				'condition' => [
					'bwdbpc_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'bwdbpc_author_show_switcher',
			[
				'label' => esc_html__( 'Author', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
				'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdbpc_author_indicator',
			[
				'label' => esc_html__( 'Author Indicator', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'none' => esc_html__( 'None', 'bwdbpc-blogpost-td' ),
					'gravatar' => esc_html__( 'Gravatar', 'bwdbpc-blogpost-td' ),
					'icon' => esc_html__( 'Author Icon', 'bwdbpc-blogpost-td' ),
				],
				'condition' => [
					'bwdbpc_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpc_blog_gravader_height',
			[
				'label' => esc_html__( 'Gravader Size', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_author-img img' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bwdbpc_author_show_switcher' => 'yes',
					'bwdbpc_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'bwdbpc_author_icon',
			[
				'label' => esc_html__( 'Icon', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbpc_author_show_switcher' => 'yes',
					'bwdbpc_author_indicator' => 'icon',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpc_blog_author_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_author-img i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbpc_author_show_switcher' => 'yes',
					'bwdbpc_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'bwdbpc_comments_show_switcher',
			[
				'label' => esc_html__( 'Comment', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
				'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blogs_button',
			[
				'label' => esc_html__( 'Button', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbpc_button_show_switcher',
			[
				'label' => esc_html__( 'Button', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
				'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdbpc_button_types',
			[
				'label' => esc_html__( 'Button Type', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text_icon',
				'options' => [
					'text_icon' => esc_html__( 'Text Icon', 'bwdbpc-blogpost-td' ),
					'icon' => esc_html__( 'Icon', 'bwdbpc-blogpost-td' ),
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_title',
			[
				'label' => esc_html__( 'Title', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Read More', 'bwdbpc-blogpost-td'),
				'label_block' => true,
				'condition' => [
					'bwdbpc_button_show_switcher' => 'yes',
				],
				'condition' => [
					'bwdbpc_button_types' => 'text_icon',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpc_button_icon_align',
			[
				'label' => esc_html__( 'Icon Align', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'right',
				'options' => [
					'none' => [
						'title' => esc_html__( 'None', 'bwdbpc-blogpost-td' ),
						'icon' => 'eicon-disable-trash-o',
					],
					'left' => [
						'title' => esc_html__( 'Left', 'bwdbpc-blogpost-td' ),
						'icon' => 'eicon-h-align-left',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwdbpc-blogpost-td' ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'toggle' => true,
				'condition' => [
					'bwdbpc_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'bwdbpc_button_indicator_icon',
			[
				'label' => esc_html__( 'Icon', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-right',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbpc_button_types' => 'text_icon',
					'bwdbpc_button_icon_align' => ['left', 'right'],
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-caret-right',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbpc_button_types' => 'icon',
				],
			]
		);
		$this->add_control(
			'bwdbpc_button_open_switcher',
			[
				'label' => esc_html__( 'Open in new window', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwdbpc-blogpost-td' ),
				'label_off' => esc_html__( 'No', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdbpc_button_show_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		// For Author Filter
		$bwdbpc_array = get_users();
		foreach ($bwdbpc_array as $bwdbpc_author){
			$bwdbpc_id = $bwdbpc_author->ID;
			$bwdbpc_name = $bwdbpc_author->display_name;
			$bwdbpc_get_array[$bwdbpc_id] = $bwdbpc_name;
		}
		$this->add_control(
			'bwdbpc_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'options' => $bwdbpc_get_array,
			]
		);
		$this->add_control(
			'bwdbpc_the_all_date',
			[
				'label' => esc_html__( 'Date', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'All', 'bwdbpc-blogpost-td' ),
					'd' => esc_html__( 'Today', 'bwdbpc-blogpost-td' ),
					'm' => esc_html__( 'Current Month', 'bwdbpc-blogpost-td' ),
					'coustom' => esc_html__( 'Custom', 'bwdbpc-blogpost-td' ),
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'bwdbpc-blogpost-td' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwdbpc-blogpost-td' ),
				'label_block' => true,
				'condition' => [
					'bwdbpc_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_coustom_month',
			[
				'label' => esc_html__( 'Select Month', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'multiple' => true,
				'default' => '0',
				'options' => [
					'0' => esc_html__( 'All', 'bwdbpc-blogpost-td' ),
					'1' => esc_html__( 'Jan', 'bwdbpc-blogpost-td' ),
					'2' => esc_html__( 'Feb', 'bwdbpc-blogpost-td' ),
					'3' => esc_html__( 'Mar', 'bwdbpc-blogpost-td' ),
					'4' => esc_html__( 'Apr', 'bwdbpc-blogpost-td' ),
					'5' => esc_html__( 'May', 'bwdbpc-blogpost-td' ),
					'6' => esc_html__( 'Jun', 'bwdbpc-blogpost-td' ),
					'7' => esc_html__( 'Jul', 'bwdbpc-blogpost-td' ),
					'8' => esc_html__( 'Aug', 'bwdbpc-blogpost-td' ),
					'9' => esc_html__( 'Sep', 'bwdbpc-blogpost-td' ),
					'10' => esc_html__( 'Oct', 'bwdbpc-blogpost-td' ),
					'11' => esc_html__( 'Nov', 'bwdbpc-blogpost-td' ),
					'12' => esc_html__( 'Dec', 'bwdbpc-blogpost-td' ),
				],
				'condition' => [
					'bwdbpc_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwdbpc-blogpost-td' ),
				'placeholder' => esc_html__( '00', 'bwdbpc-blogpost-td' ),
				'condition' => [
					'bwdbpc_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbpc_the_order_by',
			[
				'label' => esc_html__( 'Order By', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all',
				'options' => [
					'all' => esc_html__( 'All', 'bwdbpc-blogpost-td' ),
					'author' => esc_html__( 'Author', 'bwdbpc-blogpost-td' ),
					'title' => esc_html__( 'Title', 'bwdbpc-blogpost-td' ),
					'id' => esc_html__( 'ID', 'bwdbpc-blogpost-td' ),
					'date' => esc_html__( 'Date', 'bwdbpc-blogpost-td' ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdbpc_blog_order',
			[
				'label' => esc_html__( 'Order', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC' => esc_html__( 'Descending', 'bwdbpc-blogpost-td' ),
					'ASC' => esc_html__( 'Ascending', 'bwdbpc-blogpost-td' ),
				],
			]
		);
		$this->add_control(
			'bwdbpc_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', 'bwdbpc-blogpost-td' ),
			]
		);
		$this->add_control(
			'bwdbpc_categories_show_switcher',
			[
				'label' => esc_html__( 'Category', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
				'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdbpc_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_multiple_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', 'bwdbpc-blogpost-td' ),
					'show_main_cat' => esc_html__( 'Show Main Category', 'bwdbpc-blogpost-td' ),
				],
				'condition' => [
					'bwdbpc_categories_show_switcher' => 'yes',
				],
			]
		);
		// For Category Filter
		$bwdbpc_idObj = get_category_by_slug('category-slug');
		$bwdbpc_order_options = array($bwdbpc_idObj => 'All Categories');
		$bwdbpc_categories = get_categories('orderby=name&hide_empty=0');
		foreach ($bwdbpc_categories as $category):
			$bwdbpc_catids = $category->slug;
			$bwdbpc_catname = $category->name;
			$bwdbpc_order_options[$bwdbpc_catids] = $bwdbpc_catname;
		endforeach;
		$this->add_control(
			'bwdbpc_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'default' => 0,
				'options' => $bwdbpc_order_options,
			]
		);
		$this->add_control(
			'bwdbpc_tags_show_switcher',
			[
				'label' => esc_html__( 'Tag', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
				'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		// For tag Filter
		$bwdbpc_idObj = get_tag('tags-slug');
		$bwdbpc_order_optionst = array($bwdbpc_idObj => 'All Tags');
		$bwdbpc_ta = get_tags('orderby=name&hide_empty=0');
		foreach ($bwdbpc_ta as $tag):
			$bwdbpc_tagids = $tag->slug;
			$bwdbpc_tagname = $tag->name;
			$bwdbpc_order_optionst[$bwdbpc_tagids] = $bwdbpc_tagname;
		endforeach;
		$this->add_control(
			'bwdbpc_the_tag_filter',
			[
				'label' => esc_html__( 'Filter Tags', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SELECT,
				'default' => $bwdbpc_idObj,
				'options' => $bwdbpc_order_optionst,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdbpc_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwdbpc-blogpost-td' ),
						'icon' => 'eicon-align-start-h',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdbpc-blogpost-td' ),
						'icon' => 'eicon-align-stretch-h',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwdbpc-blogpost-td' ),
						'icon' => 'eicon-align-end-h',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_bottom_part' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
			'bwdbpc_blog_taxo_gap',
			[
				'label' => esc_html__( 'Taxo Gap', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SLIDER,
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_meta' => 'gap: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdbp-btm-gap' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_title_style_section',
			[
				'label' => esc_html__( 'Title', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_title_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'bwdbpc_blog_title_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blogpost-td' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_title_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_title',
			]
		);
		$this->add_control(
			'bwdbpc_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blogpost-td' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_title',
			]
		);
		$this->add_control(
			'bwdbpc_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_blog_title_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
				'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_description_style_section',
			[
				'label' => esc_html__( 'Description', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_description_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdbpc_blog_description_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blogpost-td' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_description_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_desce',
			]
		);
		$this->add_control(
			'bwdbpc_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blogpost-td' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_desce',
			]
		);
		$this->add_control(
			'bwdbpc_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_blog_description_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
				'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_desce' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_desce' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_desce' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_options',
			[
				'label' => esc_html__( 'Button', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdbpc_blog_button_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blogpost-td' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_button_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_button, {{WRAPPER}} .bwdbpc_button a',
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_button, {{WRAPPER}} .bwdbpc_button a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_button' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_blog_button_border',
				'label' => esc_html__( 'Border', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc_blog_bttn .bwdbpc_button, {{WRAPPER}} .bwdbpc_blogPost_4 .bwdbpc_blog_meta',
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_button, {{WRAPPER}} .bwdbpc_blog_bttn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blogpost-td' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_button:hover, {{WRAPPER}} .bwdbpc_button:hover a',
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_button:hover, {{WRAPPER}} .bwdbpc_button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_button:hover, {{WRAPPER}} .bwdbpc_button::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc_blog_bttn .bwdbpc_button:hover, {{WRAPPER}} .bwdbpc_blogPost_4 .bwdbpc_blog_meta:hover',
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_button_bg_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_button:hover, {{WRAPPER}} .bwdbpc_blog_bttn:hover, {{WRAPPER}} .bwdbpc_button::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
				'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_button_icon_margin',
            [
                'label' => esc_html__('Margin', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_button_the_icon_margin',
            [
                'label' => esc_html__('Icon Margin', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
				'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_button .bwdbpc_icons_right, {{WRAPPER}} .bwdbpc_button .bwdbpc_icons_left' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdbpc_the_post_image_height_size',
			[
				'label' => esc_html__( 'Thumbnail Size', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd_blog_area .bwd_blog_img img, {{WRAPPER}} .bwdbpc_blog_image img' => 'height: {{SIZE}}{{UNIT}}% !important; width: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Overly', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_image_overly_b::before, {{WRAPPER}} .bwdbpc_image_overly_a::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_button_icon_overly_color',
			[
				'label' => esc_html__( 'Icon Overly', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_overlay_icon .bwdbpc_icons' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbpc_style_selection' => ['style5', 'style24'],
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_image img, {{WRAPPER}} .bwdbpc_blog_image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpc_blog_image_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc_blog_image img',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_author_style_section',
			[
				'label' => esc_html__( 'Author', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_author_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bwdbpc_blog_taxonomy_author_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_author_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blogpost-td' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_author_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_user a, {{WRAPPER}} .bwdbpc_blog_user, {{WRAPPER}} .bwdbpc_blog_user .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_author_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_author-img, {{WRAPPER}} .bwdbpc_blog_user a, {{WRAPPER}} .bwdbpc_blog_user, {{WRAPPER}} .bwdbpc_blog_user .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_user::after, {{WRAPPER}} .bwdbpc_blog_user::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_author_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_author_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_user' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_author_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blogpost-td' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_author_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_author_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_author_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_author_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_user:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_blog_author_padding',
            [
                'label' => esc_html__('Padding', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_user' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_author_margin',
            [
                'label' => esc_html__('Margin', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_user' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_date_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'bwdbpc_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blogpost-td' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_date, {{WRAPPER}} .bwdbpc_blog_date .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_date, {{WRAPPER}} .bwdbpc_blog_date .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_date::before, {{WRAPPER}} .bwdbpc_blogPost_17 .bwdbpc_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blogpost-td' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_date_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_date:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_comment_style_section',
			[
				'label' => esc_html__( 'Comment', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_comments_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'bwdbpc_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blogpost-td' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_comment, {{WRAPPER}} .bwdbpc_blog_comment a, {{WRAPPER}} .bwdbpc_blog_comment .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_comment, {{WRAPPER}} .bwdbpc_blog_comment a, {{WRAPPER}} .bwdbpc_blog_comment .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_comment, {{WRAPPER}} .bwdbpc_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blogpost-td' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_comment_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_comment_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_blog_comment_padding',
            [
                'label' => esc_html__('Padding', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_comment' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_comment_margin',
            [
                'label' => esc_html__('Margin', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_comment' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_tags_style_section',
			[
				'label' => esc_html__( 'Tags', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_tags_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'bwdbpc_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blogpost-td' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_tag, {{WRAPPER}} .bwdbpc_blog_tag a, {{WRAPPER}} .bwdbpc_blog_tag .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_tag, {{WRAPPER}} .bwdbpc_blog_tag a, {{WRAPPER}} .bwdbpc_blog_tag .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_tag, {{WRAPPER}} .bwdbpc_blog_tag::before, {{WRAPPER}} .bwdbpc_blog_tag::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blogpost-td' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_tags_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'bwdbpc_taxonomy_tags_padding',
            [
                'label' => esc_html__('Padding', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_tag_margin',
            [
                'label' => esc_html__('Margin', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_category_style_section',
			[
				'label' => esc_html__( 'Category', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_categories_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'bwdbpc_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blogpost-td' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_category li, {{WRAPPER}} .bwdbpc_category li a, {{WRAPPER}} .bwdbpc_category .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_category li, {{WRAPPER}} .bwdbpc_category li a, {{WRAPPER}} .bwdbpc_category .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_category::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_category li, {{WRAPPER}} .bwdbpc_category li::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_categories_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_category li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blogpost-td' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbpc_category li:hover, {{WRAPPER}} .bwdbpc_category:hover li a, {{WRAPPER}} .bwdbpc_category:hover .bwdbpc_icons',
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box .bwdbpc_category li:hover, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_category li a, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_category li .bwdbpc_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_category li::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbpc_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_blog_box .bwdbpc_category li:hover, {{WRAPPER}} .bwdbpc_blog_box .bwdbpc_category li:hover::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_taxonomy_categories_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_category li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbpc_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_category li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_cat_margin',
            [
                'label' => esc_html__('Margin', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_category li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		// Hover control start for box
		$this->start_controls_tabs(
			'bwdbpc_blog_box_style_post'
		);
		$this->start_controls_tab(
			'bwdbpc_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blogpost-td' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'bwdbpc_blog_box_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_n_bg_b:before, {{WRAPPER}} .bwdbpc_n_bg, {{WRAPPER}} .bwdbpc_box_style_cmn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbpc_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdbpc_g_bg_b:before, {{WRAPPER}} .bwdbpc_g_bg, {{WRAPPER}} .bwdbpc_box_style_cmn, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpc_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc_g_bg_b:before, {{WRAPPER}} .bwdbpc_box_sha, {{WRAPPER}} .bwdbpc_box_style_cmn',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_blog_box_border',
				'label' => esc_html__( 'Border', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box',
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_blog_box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_box_margin_cmn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbpc_blog_box_padding',
            [
                'label' => esc_html__('Box Padding', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_box_padding_cmn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbpc_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blogpost-td' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bwdbpc_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc_n_bg_b:hover:before, {{WRAPPER}} .bwdbpc_n_bg:hover, {{WRAPPER}} .bwdbpc_box_style_cmn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbpc_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdbpc_g_bg_b:hover:before, {{WRAPPER}} .bwdbpc_g_bg:hover, {{WRAPPER}} .bwdbpc_box_style_cmn:hover, {{WRAPPER}} .bwdbpc_blog_box:hover .bwdbpc_blog_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpc_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc_g_bg_b:hover:before, {{WRAPPER}} .bwdbpc_box_sha:hover, {{WRAPPER}} .bwdbpc_box_style_cmn:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_blog_box_border_hover',
				'label' => esc_html__( 'Border', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc_blog_box:hover',
			]
		);
		$this->add_responsive_control(
            'bwdbpc_blog_the_box_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'bwdbpc-blogpost-td'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbpc_box_radi:hover, {{WRAPPER}} .bwdbpc_box_style_cmn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbpc_blogpost_carousel',
			[
				'label' => esc_html__( 'Carousel Controls', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'bwdbpc-blogpost-custom-id',
			[
				'label' => esc_html__( 'Custom Id', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'post-id', 'bwdbpc-blogpost-td' ),
			]
		);

		//item-gap
		$this->add_control(
			'bwdbpc_slide_margin',
			[
				'label' => esc_html__( 'Item Gap', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 20,
			]
		);

		//popover-responsive-device
		$this->add_control(
			'bwdbpc_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Device', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdbpc-blogpost-td' ),
				'label_on' => esc_html__( 'Custom', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

			$this->add_control(
				'bwdbpc_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 3,
				]
			);
			$this->add_control(
				'bwdbpc_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 2,
				]
			);
			$this->add_control(
				'bwdbpc_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);

		$this->end_popover();


		//popover-autoplay
		$this->add_control(
			'bwdbpc_aupoplay_popover',
			[
				'label' => esc_html__( 'More Options', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdbpc-blogpost-td' ),
				'label_on' => esc_html__( 'Custom', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

				//infinite_loop_switcher
				$this->add_control(
					'bwdbpc_infinite_autoplay_switcher',
					[
						'label' => esc_html__( 'Autoplay', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
						'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdbpc_infinite_loop_switcher',
					[
						'label' => esc_html__( 'Infinite Loop', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
						'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdbpc_HoverPause_switcher',
					[
						'label' => esc_html__( 'Hover Pause', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
						'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdbpc_centermode_switcher',
					[
						'label' => esc_html__( 'Center Mode', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
						'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				$this->add_control(
					'bwdbpc_autoplay_timeout',
					[
						'label' => esc_html__( 'Autoplay TimeOut (ms)', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdbpc_autoplay_speed',
					[
						'label' => esc_html__( 'Autoplay Speeds (ms)', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdbpc_stace_padding',
					[
						'label' => esc_html__( 'Stage Padding (px)', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 0,
						'max' => 100000,
						'step' => 1,
						'default' => 8,
					]
				);

		$this->end_popover();


		//popover-//Arrow Navigation
		$this->add_control(
			'bwdbpc_arrow_popover',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdbpc-blogpost-td' ),
				'label_on' => esc_html__( 'Custom', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//Arrow Navigation switcher
			$this->add_control(
				'bwdbpc_nav_switcher',
				[
					'label' => esc_html__( 'Arrow Navigation ?', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
					'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//arrow type
			$this->add_control(
				'bwdbpc_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', 'bwdbpc-blogpost-td' ),
						'text'  => esc_html__( 'Text', 'bwdbpc-blogpost-td' ),
					],
					'condition' => [
						'bwdbpc_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'bwdbpc_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdbpc_nav_type' => 'icon',
						'bwdbpc_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'bwdbpc_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdbpc_nav_type' => 'icon',
						'bwdbpc_nav_switcher' => 'yes',
					],
				]
			);
			//prev text
			$this->add_control(
				'bwdbpc_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', 'bwdbpc-blogpost-td' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdbpc_nav_type' => 'text',
						'bwdbpc_nav_switcher' => 'yes',
					],
				]
			);
			//next text
			$this->add_control(
				'bwdbpc_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', 'bwdbpc-blogpost-td' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdbpc_nav_type' => 'text',
						'bwdbpc_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();



		//popover-//dots
		$this->add_control(
			'bwdbpc_dots_popover',
			[
				'label' => esc_html__( 'Navigation :: Dots', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdbpc-blogpost-td' ),
				'label_on' => esc_html__( 'Custom', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//dots switcher
			$this->add_control(
				'bwdbpc_dots_switcher',
				[
					'label' => esc_html__( 'Active Dots ?', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'bwdbpc-blogpost-td' ),
					'label_off' => esc_html__( 'Hide', 'bwdbpc-blogpost-td' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//dots type
			$this->add_control(
				'bwdbpc_dots_type',
				[
					'label' => esc_html__( 'Type', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'dots',
					'options' => [
						'dots'  => esc_html__( 'Dots', 'bwdbpc-blogpost-td' ),
						'numbers'  => esc_html__( 'Numbers', 'bwdbpc-blogpost-td' ),
					],
					'condition' => [
						'bwdbpc_dots_switcher' => 'yes',
					],
				]
			);

			//dots type
			$this->add_control(
				'bwdbpc_dots_type_style',
				[
					'label' => esc_html__( 'Dot Style', 'bwdbpc-blogpost-td' ),
					'type' => Controls_Manager::SELECT,
					'default' => '',
					'options' => [
						''  => esc_html__( 'Default', 'bwdbpc-blogpost-td' ),
						'bwdbpc_dots1'  => esc_html__( 'Style 1', 'bwdbpc-blogpost-td' ),
						'bwdbpc_dots2'  => esc_html__( 'Style 2', 'bwdbpc-blogpost-td' ),
						'bwdbpc_dots3'  => esc_html__( 'Style 3', 'bwdbpc-blogpost-td' ),
						'bwdbpc_dots4'  => esc_html__( 'Style 4', 'bwdbpc-blogpost-td' ),
						'bwdbpc_dots5'  => esc_html__( 'Style 5', 'bwdbpc-blogpost-td' ),
						'bwdbpc_dots6'  => esc_html__( 'Style 6', 'bwdbpc-blogpost-td' ),
						'bwdbpc_dots7'  => esc_html__( 'Style 7', 'bwdbpc-blogpost-td' ),
						'bwdbpc_dots8'  => esc_html__( 'Style 8', 'bwdbpc-blogpost-td' ),
						'bwdbpc_dots9'  => esc_html__( 'Style 9', 'bwdbpc-blogpost-td' ),
						'bwdbpc_dots10'  => esc_html__( 'Style 10', 'bwdbpc-blogpost-td' ),
					],
					'condition' => [
						'bwdbpc_dots_switcher' => 'yes',
						'bwdbpc_dots_type' => 'dots',
					],
				]
			);

		$this->end_popover();


		$this->end_controls_section();




		$this->start_controls_section(
			'bwdbpc_blogpost_carousel_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_nav_switcher' => 'yes'
				],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs',
            [
                'separator' => 'before',
            ]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blogpost-td' ),
			]
		);

			//arrow-color
			$this->add_control(
				'bwdbpc_arrow_color',
				[
					'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdbpc_arrow_background_color',
					'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdbpc_arrow_size',
				[
					'label' => esc_html__( 'Size', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next' => 'font-size: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdbpc_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdbpc_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev span, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next span',
					'condition' => [
						'bwdbpc_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdbpc_arrow_width',
				[
					'label' => esc_html__( 'Width', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'bwdbpc_arrow_height',
				[
					'label' => esc_html__( 'Height', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdbpc_arrow_border',
					'label' => esc_html__( 'Border', 'bwdbpc-blogpost-td' ),
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdbpc_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdbpc_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', 'bwdbpc-blogpost-td' ),
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ',
				]
			);

			//opacity
			$this->add_control(
				'bwdbpc_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', 'bwdbpc-blogpost-td'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdbpc_photostack_visibility',
				[
					'label'     => esc_html__('Visibility', 'bwdbpc-blogpost-td'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'bwdbpc-blogpost-td'),
						'hidden'  => esc_html__('Hidden', 'bwdbpc-blogpost-td'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdbpc_arrow_popover_style',
				[
					'label' => esc_html__( 'Position', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'bwdbpc-blogpost-td' ),
					'label_on' => esc_html__( 'Custom', 'bwdbpc-blogpost-td' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow
				$this->add_control(
					'bwdbpc_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdbpc_arrow_left_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdbpc_arrow_left_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'bwdbpc_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdbpc_arrow_Right_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdbpc_arrow_right_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blogpost-td' ),
			]
		);

			//arrow-color
			$this->add_control(
				'bwdbpc_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdbpc_arrow_background_color_hover',
					'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdbpc_arrow_size_hover',
				[
					'label' => esc_html__( 'Size', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdbpc_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover span, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover span',
					'condition' => [
						'bwdbpc_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdbpc_arrow_width_hover',
				[
					'label' => esc_html__( 'Width', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'bwdbpc_arrow_height_hover',
				[
					'label' => esc_html__( 'Height', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdbpc_arrow_border_hover',
					'label' => esc_html__( 'Border', 'bwdbpc-blogpost-td' ),
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdbpc_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdbpc_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', 'bwdbpc-blogpost-td' ),
					'selector' => '{{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-prev:hover, {{WRAPPER}} .bwdbpc-owl-nav button.bwdbpc-owl-next:hover',
				]
			);

			//opacity
			$this->add_control(
				'bwdbpc_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', 'bwdbpc-blogpost-td'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdbpc_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', 'bwdbpc-blogpost-td'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'bwdbpc-blogpost-td'),
						'hidden'  => esc_html__('Hidden', 'bwdbpc-blogpost-td'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-prev, {{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdbpc_arrow_popover_style_hover',
				[
					'label' => esc_html__( 'Position', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'bwdbpc-blogpost-td' ),
					'label_on' => esc_html__( 'Custom', 'bwdbpc-blogpost-td' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow-heading
				$this->add_control(
					'bwdbpc_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdbpc_arrow_left_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdbpc_arrow_left_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'bwdbpc_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdbpc_arrow_Right_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdbpc_arrow_right_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'bwdbpc-blogpost-td' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdbpc-owl.bwdbpc-owl-carousel:hover .bwdbpc-owl-nav button.bwdbpc-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();



		$this->end_controls_section();




		$this->start_controls_section(
			'bwdbpc_blogpost_carousel_dots_style',
			[
				'label' => esc_html__( 'Navigation :: Dots', 'bwdbpc-blogpost-td' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdbpc_dots_switcher' => 'yes'
				],
			]
		);

		//popover-//dots Navigation
		$this->add_control(
			'bwdbpc_dots_popover_style',
			[
				'label' => esc_html__( 'Position', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdbpc-blogpost-td' ),
				'label_on' => esc_html__( 'Custom', 'bwdbpc-blogpost-td' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//top
			$this->add_responsive_control(
				'bwdbpc_dots_Right_position_vertical',
				[
					'label' => esc_html__( 'Vertical', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-dots' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdbpc_dots_left_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', 'bwdbpc-blogpost-td' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdbpc-owl-dots' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//dots-gap
		$this->add_responsive_control(
			'bwdbpc_dots_gap_ertical',
			[
				'label' => esc_html__( 'Vertical Gap', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//dots-gap
		$this->add_responsive_control(
			'bwdbpc_dots_gap',
			[
				'label' => esc_html__( 'Dots Gap', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:not(:last-child) ' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdbpc_dots_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwdbpc-blogpost-td' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwdbpc-blogpost-td' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwdbpc-blogpost-td' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_dots',
            [
                'separator' => 'before',
            ]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_dots',
			[
				'label' => esc_html__( 'Normal', 'bwdbpc-blogpost-td' ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdbpc_dots_number_color',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbpc_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbpc_dots_background_color',
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_dots_number_typography',
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot span',
				'condition' => [
					'bwdbpc_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdbpc_dots_width',
			[
				'label' => esc_html__( 'Width', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot ' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdbpc_dots_height',
			[
				'label' => esc_html__( 'Height', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_dots_border',
				'label' => esc_html__( 'Border', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdbpc_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpc_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot',
			]
		);


		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_dots',
			[
				'label' => esc_html__( 'Active', 'bwdbpc-blogpost-td' ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdbpc_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbpc_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbpc_dots_background_color_active',
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_dots_number_typography_active',
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active span',
				'condition' => [
					'bwdbpc_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdbpc_dots_width_active',
			[
				'label' => esc_html__( 'Width', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdbpc_dots_height_active',
			[
				'label' => esc_html__( 'Height', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_dots_border_active',
				'label' => esc_html__( 'Border', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdbpc_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpc_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot.active',
			]
		);

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab_dots',
			[
				'label' => esc_html__( 'Hover', 'bwdbpc-blogpost-td' ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdbpc_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbpc_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbpc_dots_background_color_hover',
				'label' => esc_html__( 'Background', 'bwdbpc-blogpost-td' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbpc_dots_number_typography_hover',
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover span',
				'condition' => [
					'bwdbpc_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdbpc_dots_width_hover',
			[
				'label' => esc_html__( 'Width', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdbpc_dots_height_hover',
			[
				'label' => esc_html__( 'Height', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbpc_dots_border_hover',
				'label' => esc_html__( 'Border', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdbpc_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwdbpc-blogpost-td' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbpc_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', 'bwdbpc-blogpost-td' ),
				'selector' => '{{WRAPPER}} .bwdbpc-owl-dots .bwdbpc-owl-dot:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
	}


	protected function render(){
		$settings = $this->get_settings_for_display();
		// for-owl-carousel-start
		$bwdbpc_slide_margin = $settings['bwdbpc_slide_margin'];
		$bwdbpc_slide_mobile_view = $settings['bwdbpc_slide_mobile_view'];
		$bwdbpc_slide_tablet_view = $settings['bwdbpc_slide_tablet_view'];
		$bwdbpc_slide_desktop_view = $settings['bwdbpc_slide_desktop_view'];
		$bwdbpc_infinite_autoplay_switcher = $settings['bwdbpc_infinite_autoplay_switcher'];
		$bwdbpc_infinite_loop_switcher = $settings['bwdbpc_infinite_loop_switcher'];
		$bwdbpc_HoverPause_switcher = $settings['bwdbpc_HoverPause_switcher'];
		$bwdbpc_centermode_switcher = $settings['bwdbpc_centermode_switcher'];
		$bwdbpc_autoplay_timeout = $settings['bwdbpc_autoplay_timeout'];
		$bwdbpc_autoplay_speed = $settings['bwdbpc_autoplay_speed'];
		$bwdbpc_stace_padding = $settings['bwdbpc_stace_padding'];
		//nav--------------------------------------------------
		$bwdbpc_nav_switcher = $settings['bwdbpc_nav_switcher'];
		$bwdbpc_nav_type = $settings['bwdbpc_nav_type'];

		if( $bwdbpc_nav_switcher == 'yes' ) {
			if( $bwdbpc_nav_type == 'icon' ) {
				$prev = $settings['bwdbpc_nav_prev_arrow']['value'];
				$next = $settings['bwdbpc_nav_next_arrow']['value'];
			} else if( $bwdbpc_nav_type == 'text' ) {
				$prev = $settings['bwdbpc_nav_prev_text'];
				$next = $settings['bwdbpc_nav_next_text'];
			} 
		}
		$bwdbpc_dots_switcher = $settings['bwdbpc_dots_switcher'];
		$bwdbpc_dots_type = $settings['bwdbpc_dots_type'];
		// for-owl-carousel-end

		// For style to Ferdaus start
		$bwdbpc_title_tags = $settings['bwdbpc_title_tags'];
		$bwdbpc_post_per_page = $settings['bwdbpc_the_post_per_page'];
		$bwdbpc_post_description_words = $settings['bwdbpc_the_post_description_words'];
		$bwdbpc_blog_word_trim_indi = $settings['bwdbpc_blog_word_trim_indi'];
		$bwdbpc_blog_date_format = $settings['bwdbpc_blog_date_format'];

		$bwdbpc_author_indicator = $settings['bwdbpc_author_indicator'];
		$bwdbpc_button_icon_align = $settings['bwdbpc_button_icon_align'];
		// Button Icon only bwdbpc_blog_button_icon
		$bwdbpc_taxo_icon = $settings['bwdbpc_taxo_icon'];
		$bwdbpc_button_types = $settings['bwdbpc_button_types'];

		$bwdbpc_cont_alignment = $settings['bwdbpc_content_alignment'];
		if('left' === $bwdbpc_cont_alignment){
			$bwdbpc_cont_align = 'bwdbpc_taxo_align_left bwdbpc_taxo_align_left_j';
		} elseif('center' === $bwdbpc_cont_alignment){
			$bwdbpc_cont_align = 'bwdbpc_taxo_align_center bwdbpc_taxo_align_center_j';
		} elseif('right' === $bwdbpc_cont_alignment){
			$bwdbpc_cont_align = 'bwdbpc_taxo_align_right bwdbpc_taxo_align_right_j';
		} else{ $bwdbpc_cont_align = ' '; }

		$bwdbpc_image_swtcher = $settings['bwdbpc_image_show_switcher'];
		$bwdbpc_title_swtcher = $settings['bwdbpc_title_show_switcher'];
		$bwdbpc_description_swtcher = $settings['bwdbpc_description_show_switcher'];
		$bwdbpc_date_swtcher = $settings['bwdbpc_date_show_switcher'];
		$bwdbpc_author_swtcher = $settings['bwdbpc_author_show_switcher'];
		$bwdbpc_comments_swtcher = $settings['bwdbpc_comments_show_switcher'];
		$bwdbpc_categories_swtcher = $settings['bwdbpc_categories_show_switcher'];
		$bwdbpc_tags_swtcher = $settings['bwdbpc_tags_show_switcher'];
		$bwdbpc_tags_filter = $settings['bwdbpc_the_tag_filter'];
		$bwdbpc_cat_show_status = $settings['bwdbpc_the_cat_show_status'];

		$bwdbpc_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
		$bwdbpc_categorys_dataa = $settings['bwdbpc_the_cat_columnsdd'];
		$bwdbpc_the_blog_type = $settings['bwdbpc_the_blog_type'];
		$bwdbpc_blog_order = $settings['bwdbpc_blog_order'];
		$bwdbpc_author = $settings['bwdbpc_the_all_author'];
		$bwdbpc_order_by = $settings['bwdbpc_the_order_by'];
		
		$bwdbpc_the_all_date = $settings['bwdbpc_the_all_date'];
		$bwdbpc_text_str = ' ';
		if('d' === $bwdbpc_the_all_date){
			$bwdbpc_coustom_day = $bwdbpc_text_str;
			$bwdbpc_coustom_month = $bwdbpc_text_str;
			$bwdbpc_coustom_year = $bwdbpc_text_str;
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $bwdbpc_the_all_date){
			$bwdbpc_coustom_day = $bwdbpc_text_str;
			$bwdbpc_coustom_month = $bwdbpc_text_str;
			$bwdbpc_coustom_year = $bwdbpc_text_str;
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $bwdbpc_the_all_date){
			$bwdbpc_coustom_day = $bwdbpc_text_str;
			$bwdbpc_coustom_month = $bwdbpc_text_str;
			$bwdbpc_coustom_year = $bwdbpc_text_str;
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $bwdbpc_the_all_date){
			$bwdbpc_coustom_year = $settings['bwdbpc_blog_coustom_year'];
			$bwdbpc_coustom_month = $settings['bwdbpc_blog_coustom_month'];
			$bwdbpc_coustom_day = $settings['bwdbpc_blog_coustom_day'];
			$wdbp_time = $bwdbpc_text_str;
		} else{
			$bwdbpc_coustom_day = $bwdbpc_text_str;
			$bwdbpc_coustom_month = $bwdbpc_text_str;
			$bwdbpc_coustom_year = $bwdbpc_text_str;
			$wdbp_time = $bwdbpc_text_str;
		}
		
		$bwdbpc_args = array(
			'post_type'=> $bwdbpc_the_blog_type,
			'author__in' => $bwdbpc_author,
			'orderby'   => $bwdbpc_order_by,
			'order' => $bwdbpc_blog_order,
			'post_status' => 'publish',
			'tag' => $bwdbpc_tags_filter,
			'posts_per_page' => $bwdbpc_post_per_page,
			'category_name' => $bwdbpc_categorys_dataa,
			'paged' => $bwdbpc_paged,
			'date_query' => $wdbp_time,
			'year' => $bwdbpc_coustom_year,
			'monthnum' => $bwdbpc_coustom_month,
			'day' => $bwdbpc_coustom_day,
		);

		$bwdbpc_yes_value = 'yes';
		$bwdbpc_style_selection = $settings['bwdbpc_select_style_selection'];
		switch ($bwdbpc_style_selection) {
			case "$bwdbpc_style_selection":
				include( __DIR__ . '/templates/'.$bwdbpc_style_selection.'.php' );
				break;
		}
	}
	public function bwdbpc_post_thumbnail_here(){
		?>
		<a class="bwdbpc_imgnot" href="<?php the_permalink(); ?>" style="text-decoration:none;">
		<?php 
		if(has_post_thumbnail()){
			the_post_thumbnail('large'); 
			} else{ 
			echo '<h2 class="text-center ">' . esc_html__('No Thumbnail', 'bwdbpc-blogpost-td') . '</h2>';
			} 
			?>
		</a>
		<?php
	}
	public function bwdbpc_post_thumbnail_with_css(){
		$bwdbpc_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
		list($bwdbpc_thumbnail_url) = $bwdbpc_thumbnail;
		if(has_post_thumbnail()){
		?>
		<div class="bwdbpc_blog_image bwdbpc_image_overly_b bwdbpc_image_overly_a" style="background-image: url(<?php echo $bwdbpc_thumbnail_url; ?>);"><a class="blog_img-link" href="<?php echo get_permalink(); ?>"></a>
		<?php
		} else{
			echo '<div class="bwdbpc_text_no bwdbpc_blog_image bwdbpc_image_overly_b bwdbpc_image_overly_a text-center ">' . esc_html__('No Thumbnail', 'bwdbpc-blogpost-td'); ?><a class="blog_img-link" href="<?php echo get_permalink(); ?>"></a><?php
		}
	}
}
