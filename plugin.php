<?php
namespace SaaSPrimeEssentialApp;

use Elementor\Plugin as ElementorPlugin;
use SaaSPrimeEssentialApp\PageSettings\Page_Settings;


/**
 * Class Plugin
 *
 * Main Plugin class
 * @since 1.2.0
 */
class Plugin {

	/**
	 * Instance
	 *
	 * @since 1.2.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.2.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * widget_scripts
	 *
	 * Load required plugin core files.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function after_register_styles() {
		wp_register_style( 'saasprime-header-preset', SAASPRIME_ESSENTIAL_ASSETS_URL . 'css/header-preset.css' );
		wp_register_style( 'saasprime-landing-page', SAASPRIME_ESSENTIAL_ASSETS_URL . 'css/landing-page.css' , array(), '0.1.0', 'all');
		wp_register_style( 'saasprime-header-offcanvas', SAASPRIME_ESSENTIAL_ASSETS_URL . 'css/offcanvas.css' );

	}
	public function widget_scripts() {

		wp_register_script(
			'wdb-lottie-player',
			SAASPRIME_ESSENTIAL_ASSETS_URL. 'js/lottie-player.js',
			//'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js',
			[],
			false,
			true
		);
		wp_register_script(
			'wdb-lottie-interactivity',
			SAASPRIME_ESSENTIAL_ASSETS_URL. 'js/lottie-interactivity.min.js',
			//'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js',
			[],
			false,
			true
		);
		wp_register_script( 'wdb-lottie', SAASPRIME_ESSENTIAL_ASSETS_URL. 'js/widgets/lottie.js' , [ 'wdb-lottie-player','wdb-lottie-interactivity' ], false, true );
		wp_register_script( 'wdb-offcanvas-menu', SAASPRIME_ESSENTIAL_ASSETS_URL. '/js/widgets/offcanvas-menu.js' , [ 'jquery' ], false, true );
		wp_register_script( 'wdb-sticky-container', SAASPRIME_ESSENTIAL_ASSETS_URL. 'js/elementor.sticky-section.js' , [ 'jquery'  ], false, true );
		wp_register_script( 'meanmenu', plugins_url( '/assets/js/jquery.meanmenu.min.js', __FILE__ ), array( 'jquery' ), false , true );
		wp_register_script( 'saasprime-essential--global-core', plugins_url( '/assets/js/wdb--global-core.min.js', __FILE__ ), [ 'jquery' ], false, true );
		wp_register_script( 'wdb-landing-page', SAASPRIME_ESSENTIAL_ASSETS_URL. '/js/widgets/landing-page.js' , [ 'jquery' ], false, true );

		$data = [
			'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
			'_wpnonce' => wp_create_nonce( 'saasprime--addons-frontend' )
		];
		wp_localize_script( 'saasprime-essential--global-core', 'SAASPRIME_ADDONS_JS', $data );
		wp_enqueue_script( 'saasprime-essential--global-core' );

	}

	/**
	 * Editor scripts
	 *
	 * Enqueue plugin javascripts integrations for Elementor editor.
	 *
	 * @since 1.2.1
	 * @access public
	 */
	public function editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'editor_scripts_as_a_module' ], 10, 2 );

		wp_enqueue_script(
			'wdb--elementor--editor',
			plugins_url( '/assets/js/editor/editor.js', __FILE__ ),
			[
				'elementor-editor',
			],
			time(),
			true
		);
	}

	/**
	 * Force load editor script as a module
	 *
	 * @since 1.2.1
	 *
	 * @param string $tag
	 * @param string $handle
	 *
	 * @return string
	 */
	public function editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'wdb--elementor--editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.2.0
	 * @access public
	 *
	 * @param Widgets_Manager $widgets_manager Elementor widgets manager.
	 */
	public function register_widgets( $widgets_manager ) {

		//@todo need follow the convention to create widget file
		foreach ( self::get_widgets() as $slug => $data ) {

			// If upcoming don't register.
			if ( $data['is_upcoming'] ) {
				continue;
			}

			if ( $data['is_active'] ) {
				if ( is_dir( __DIR__ . '/widgets/' . $slug ) ) {
					require_once( __DIR__ . '/widgets/' . $slug . '/' . $slug . '.php' );
				} else {
					require_once( __DIR__ . '/widgets/' . $slug . '.php' );
				}


				$class = explode( '-', $slug );
				$class = array_map( 'ucfirst', $class );
				$class = implode( '_', $class );
				$class = 'SaaSPrimeEssentialApp\\Widgets\\' . $class;
				ElementorPlugin::instance()->widgets_manager->register( new $class() );
			}
		}

	}
	/**
	 * Get Widgets List.
	 *
	 * @return array
	 */
	public static function get_widgets() {

		return apply_filters( 'saasprime-essential/widgets', [
			'header-menu'              => [
				'label'       => __( 'SaaSPrime Navigation', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'header-preset'            => [
				'label'       => __( 'SaaSPrime Header', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'footer-menu'              => [
				'label'       => __( 'SaaSPrime Footer Navigation', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'banner-breadcrumb'        => [
				'label'       => __( 'SaaSPrime Banner Breadcrumb', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'blog-post-tags'           => [
				'label'       => __( 'SaaSPrime Post Tags', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'dropdown'                 => [
				'label'       => __( 'SaaSPrime Dropdown', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'wc-cart-count'            => [
				'label'       => __( 'SaaSPrime Cart Count', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'offcanvas-menu'           => [
				'label'       => __( 'SaaSPrime Offcanvas Menu', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'landing-page'             => [
				'label'       => __( 'SaaSPrime Landing', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'lottie'                   => [
				'label'       => __( 'SaaSPrime Lottie', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-button'            => [
				'label'       => __( 'SaaSPrime Button', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-testimonial'       => [
				'label'       => __( 'SaaSPrime Testimonial', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-testimonial-2'     => [
				'label'       => __( 'SaaSPrime Testimonial 2', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-video-testimonial' => [
				'label'       => __( 'SaaSPrime Video Testimonial', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-posts'             => [
				'label'       => __( 'SaaSPrime Posts', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-video-slider'      => [
				'label'       => __( 'SaaSPrime Video Slider', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-service'           => [
				'label'       => __( 'SaaSPrime Service', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-service-slider'           => [
				'label'       => __( 'SaaSPrime Service Slider', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-case-study-slider' => [
				'label'       => __( 'SaaSPrime Case Study Slider', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-tabs'              => [
				'label'       => __( 'SaaSPrime Tabs', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-gallery'           => [
				'label'       => __( 'SaaSPrime Gallery', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-video'             => [
				'label'       => __( 'SaaSPrime Video', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'wdb-line'                 => [
				'label'       => __( 'SaaSPrime Line', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-progressbar'                 => [
				'label'       => __( 'SaaSPrime Progressbar', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-side-header'                 => [
				'label'       => __( 'SaaSPrime Side Header', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
			'saasprime-toggle-select'                 => [
				'label'       => __( 'SaaSPrime Toggle Select', 'saasprime-essential' ),
				'is_active'   => true,
				'is_upcoming' => false,
				'demo_url'    => '',
				'doc_url'     => '',
				'youtube_url' => '',
			],
		] );
	}

	/**
	 * Add page settings controls
	 *
	 * Register new settings for a document page settings.
	 *
	 * @since 1.2.1
	 * @access private
	 */
	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/manager.php' );
		new Page_Settings();
	}

	function add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'weal-coder-addon',
			[
				'title' => esc_html__( 'SaaSPrime', 'saasprime-essential' ),
				'icon' => 'fa fa-plug',
			]
		);

		$elements_manager->add_category(
			'wdb-blog-single',
			[
				'title' => esc_html__( 'SaaSPrime Single', 'saasprime-essential' ),
				'icon' => 'fa fa-plug',
			]
		);

		$elements_manager->add_category(
			'wdb-blog-search',
			[
				'title' => esc_html__( 'SaaSPrime Blog Search', 'saasprime-essential' ),
				'icon' => 'fa fa-plug',
			]
		);

	}

	public function elementor_init() {
		// Its is now safe to include Widgets skins
		require_once( __DIR__ . '/skin//accordion.php' );
		require_once( __DIR__ . '/skin//accordion-two.php' );
		// Register skin
		add_action( 'elementor/widget/accordion/skins_init', function( $widget ) {
		   $widget->add_skin( new Skin\Accordion\Skin_Accordion($widget) );
		   $widget->add_skin( new Skin\Accordion\Skin_Accordion_Two($widget) );
		} );
	}

	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function __construct() {
		add_action( 'elementor/elements/categories_registered', [$this,'add_elementor_widget_categories'], 12 );
		// Register widget scripts
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'after_register_styles' ], 12 );


		// Register widgets
		add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'editor_scripts' ] );

		$this->add_page_settings_controls();
		add_action( 'elementor/init', [ $this, 'elementor_init' ], 0 );

	}

}

// Instantiate Plugin Class
Plugin::instance();
