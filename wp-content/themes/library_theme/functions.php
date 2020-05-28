<?php
/**
 * library functions and definitions
 *
 * @package library
 */
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.*/
	 
	function init_setup() {

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 30,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		register_nav_menu( 'top_menu', 'header-menu' );
	}
add_action( 'after_setup_theme', 'init_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
/**
 * Register widget area.
 **/
function init_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'init' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'init' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'init_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function init_scripts() {
	wp_enqueue_style( 'library-style', get_stylesheet_uri() );

	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', ( 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' ), false, null, true );
		wp_enqueue_script( 'jquery' );
	}
	wp_enqueue_script( 'library-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'init_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


?>
