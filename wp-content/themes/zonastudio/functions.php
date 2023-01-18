<?php
/**
 * Zonastudio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Zonastudio
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

include get_template_directory() . '/acf-includes/ACF_Field_Unique_ID.php';
  ACF_Unique_ID_Field\ACF_Field_Unique_ID::init();

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function zonastudio_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Zonastudio, use a find and replace
		* to change 'zonastudio' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'zonastudio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/

	add_theme_support( 'post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			// 'menu-1' => esc_html__( 'Primary', 'zonastudio' ),
			'header-menu' => esc_html__( 'header-menu', 'zonastudio' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'zonastudio_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'zonastudio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zonastudio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zonastudio_content_width', 640 );
}
add_action( 'after_setup_theme', 'zonastudio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

// function zonastudio_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'zonastudio' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'zonastudio' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'zonastudio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function zonastudio_scripts() {
	// wp_enqueue_style( 'zonastudio-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'zonastudio-style', 'rtl', 'replace' );

	wp_enqueue_style('directinvest-critical', get_template_directory_uri() . '/static/css/header.min.css', array(), RAND);
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . "/src/js/jquery/jquery.min.js", array(), '3.5.1');
	wp_enqueue_script('directinvest-script', get_template_directory_uri() . '/static/js/common.min.js', array("jquery"), RAND, true);

	// wp_enqueue_script( 'zonastudio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zonastudio_scripts' );

define('RAND', mt_rand(100000, 999999));
/**
 * Enqueue footer scripts and styles.
 */
function directinvest_add_footer_styles()
{
	wp_enqueue_style('directinvest-style', get_template_directory_uri() . '/static/css/style.min.css', array(), RAND);	
}

add_action('get_footer', 'directinvest_add_footer_styles');

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

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Options Fields
if( function_exists('acf_add_options_page') ) {

	// development footer Links
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Data',
		'menu_title'	=> 'Stopka',
		// 'parent_slug'	=> 'theme-general-settings',
	));
}

// Register image size
add_image_size('page-first', 1920, 820, true);
add_image_size('about-us', 445, 600, true);
add_image_size('what-do-we-offer', 640, 430, true);
add_image_size('blok-informacyjny', 1920, 650, true);
add_image_size('quote-section', 1920, 520, true);
add_image_size('breadcrumbs', 1920, 400, true);
add_image_size('post-small', 350, 350, true);
add_image_size('post-full', 1110, 700, true);
add_image_size('tariff-plan', 112, 112, true);
add_image_size('included-program', 90, 90, true);
add_image_size('what-we-do', 70, 70, true);
add_image_size('contact-img', 120, 120, true);

// includes files
require get_template_directory() . '/inc/breadcrumbs.php';
require get_template_directory() . '/inc/loadmore.php';

// remove default css / svg
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

// remove default text editor pages
add_action('init', 'my_remove_editor_from_post_type');
function my_remove_editor_from_post_type() {
    remove_post_type_support( 'page', 'editor' );
    // remove_post_type_support( 'post', 'editor' );
}