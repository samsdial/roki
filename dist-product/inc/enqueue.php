<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'slick-carousel' . 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

if ( function_exists('acf_add_options_page') ) {

    $page = acf_add_options_page(array(
        'page_title'    => __('Prefooter', 'WorkIn'),
        'menu_title'    => __('Prefooter', 'WorkIn'),
        'menu_slug'     => 'theme-work-in',
        'capability'    => 'manage_options',
        'redirect'  => false,
        'rewrite' => array( 'slug' => 'about' ),
	));
	$page = acf_add_options_page(array(
        'page_title'    => __('PopUp', 'Modal'),
        'menu_title'    => __('PopUp', 'Modal'),
        'menu_slug'     => 'theme-modal-in',
        'capability'    => 'manage_options',
        'redirect'  => false,
        'rewrite' => array( 'slug' => 'modal' ),
    ));

    $page = acf_add_options_page(array(
        'page_title'    => __('Configuración General', 'WebSite'),
        'menu_title'    => __('Información General website', 'WebSite'),
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'manage_options',
        'redirect'  => false
    ));
}
