<?php
/**
 * millidesign functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package millidesign
 */

if ( ! function_exists( 'millidesign_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function millidesign_setup() {

	// Load up our awesome theme options
	require_once ( get_stylesheet_directory() . '/theme-options.php' );
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on millidesign, use a find and replace
	 * to change 'millidesign' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'millidesign', get_template_directory() . '/languages' );

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
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'millidesign' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'millidesign_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'millidesign_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function millidesign_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'millidesign_content_width', 640 );
}
add_action( 'after_setup_theme', 'millidesign_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function millidesign_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'millidesign' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'millidesign' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'millidesign_widgets_init' );

/* logo_widget
*/

/**
 * Enqueue scripts and styles.
 */
function millidesign_scripts() {
	wp_enqueue_style( 'millidesign-style', get_stylesheet_uri() );

	wp_register_style( 'font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,900', $ver = false );
	wp_enqueue_style( 'font-roboto' );
	wp_register_style( 'font-osvald', 'https://fonts.googleapis.com/css?family=Oswald', $ver = false );
	wp_enqueue_style( 'font-osvald' );
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', $ver = false );
	wp_enqueue_style( 'font-awesome' );
	wp_register_style( 'fonts', get_template_directory_uri() . '/css/fonts.css', $ver = false );
	wp_enqueue_style( 'fonts' );
	wp_register_style( 'animate', get_template_directory_uri() . '/css/animate.css', $ver = false );
	wp_enqueue_style( 'animate' );
	wp_register_style( 'slick', get_template_directory_uri() . '/css/slick.css', $ver = false );
	wp_enqueue_style( 'slick' );
	wp_register_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.min.css', $ver = false );
	wp_enqueue_style( 'slicknav' );
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', $ver = false );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', $ver = false );
	wp_enqueue_style( 'magnific-popup' );
	wp_register_style( 'fancybox', get_template_directory_uri() . '/lib_fb/jquery.fancybox.css?ver=4.6.1 ' );
	wp_enqueue_style( 'fancybox' );
	wp_register_style( 'fancybox-buttons', get_template_directory_uri() . '/lib_fb/helpers/jquery.fancybox-buttons.css?ver=4.6.1 ');
	wp_enqueue_style( 'fancybox-buttons' );
	wp_register_style( 'fancybox-thumbs', get_template_directory_uri() . '/lib_fb/helpers/jquery.fancybox-thumbs.css?ver=4.6.1' );
	wp_enqueue_style( 'fancybox-thumbs' );
	wp_register_style( 'reset', get_template_directory_uri() . '/css/reset.css', $ver = false );
	wp_enqueue_style( 'reset' );
	wp_register_style( 'style-my', get_template_directory_uri() . '/css/style.css', $ver = false );
	wp_enqueue_style( 'style-my' );
	wp_register_style( 'media-my', get_template_directory_uri() . '/css/media.css', $ver = false );
	wp_enqueue_style( 'media-my' );
	wp_register_script( 'slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array ( 'jquery' ), $ver = false, true );
	wp_enqueue_script( 'slicknav' );
	wp_register_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array ( 'jquery' ), $ver = false, true );
	wp_enqueue_script( 'slick' );
	wp_register_script( 'mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel-3.0.6.pack.js', array ( 'jquery' ), $ver = false, true );
	wp_enqueue_script( 'mousewheel' );
	wp_register_script( 'fancybox', get_template_directory_uri() . '/lib_fb/jquery.fancybox.pack.js', array ( 'jquery' ), true );
	wp_enqueue_script( 'fancybox' );
	wp_register_script( 'fancybox-buttons', get_template_directory_uri() . '/lib_fb/helpers/jquery.fancybox-buttons.js', array ( 'jquery' ), true );
	wp_enqueue_script( 'fancybox-buttons' );
	wp_register_script( 'fancybox-media', get_template_directory_uri() . '/lib_fb/helpers/jquery.fancybox-media.js', array ( 'jquery' ), true );
	wp_enqueue_script( 'fancybox-media' );
	wp_register_script( 'fancybox-thumbs', get_template_directory_uri() . '/lib_fb/helpers/jquery.fancybox-thumbs.js', array ( 'jquery' ), true );
	wp_enqueue_script( 'fancybox-thumbs' );
	wp_register_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array ( 'jquery' ), $ver = false, true );
	wp_enqueue_script( 'magnific-popup' );
	wp_register_script( 'onePageNav', get_template_directory_uri() . '/js/onePageNav.js', array ( 'jquery' ), $ver = false, true );
	wp_enqueue_script( 'onePageNav' );
	wp_register_script( 'wow', get_template_directory_uri() . '/js/wow.js', array ( 'jquery' ), $ver = false, true );
	wp_enqueue_script( 'wow' );
	wp_register_script( 'script-my', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), $ver = false, true );
	wp_enqueue_script( 'script-my' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'millidesign_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wiwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_filter('the_content', 'wpautop');

show_admin_bar(false);
