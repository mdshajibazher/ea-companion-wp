<?php
namespace EasyAskCompanionClass;

use EasyAskCompanionClass\PageSettings\Page_Settings;

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
	public function frontend_scripts() {
        wp_enqueue_script('ea-owl',plugins_url('/assets/js/owl-carousel/owl-carousel.min.js',__FILE__),array('jquery'),'1.1');
        wp_enqueue_script('ea-custom',plugins_url('/assets/js/custom.js',__FILE__),array('jquery'),'1.2');

	}

    public function frontend_styles() {
        wp_enqueue_style('ea-owl',plugins_url('/assets/css/owl-carousel/owl-carousel.min.css',__FILE__),[],'1.1');
        wp_enqueue_style('ea-owl-theme',plugins_url('/assets/css/owl-carousel/owl-theme-default.css',__FILE__),[],'1.2');
        wp_enqueue_style('ea-custom',plugins_url('/assets/css/custom.css',__FILE__),[],'1.2');
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
		require_once( __DIR__ . '/widgets/easy-ask-carousel.php' );
		// Register Widgets
		$widgets_manager->register( new Widgets\EasyAskCarousel() );
	}

	/**
	 * Add page settings controls
	 *
	 * Register new settings for a document page settings.
	 *
	 * @since 1.2.1
	 * @access private
	 */


	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function __construct() {

		// Register widgets
		add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] );

		// Register frontend scripts
		add_action( 'elementor/frontend/after_enqueue_scripts', [ $this, 'frontend_scripts' ] );

        // Register frontend styles
        add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'frontend_styles' ] );

	}
}

// Instantiate Plugin Class
Plugin::instance();
