<?php
/**
 * audio-active functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package audio-active
 */

if ( ! function_exists( 'audio_active_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function audio_active_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on audio-active, use a find and replace
	 * to change 'audio-active' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'audio-active', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'audio-active' ),
		'secondary' => esc_html__( 'Secondary Menu', 'audio-active' )
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'audio_active_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}
add_filter('the_excerpt', 'do_shortcode');
add_action( 'after_setup_theme', 'audio_active_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function audio_active_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'audio_active_content_width', 1200 );
}
add_action( 'after_setup_theme', 'audio_active_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function audio_active_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'audio-active' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'audio-active' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'audio_active_widgets_init' );

/**
 * Add custom image sizes
 */
add_action( 'after_setup_theme', 'custom_img_size_setup' );
function custom_img_size_setup() {
	add_image_size( 'carousel', 1200, 590, array( 'center', 'center' ) );
	add_image_size( 'banner', 1200, 350, array( 'center', 'center' ) );
	add_image_size( 'article', 770, 433, array( 'center', 'center' ) );
	add_image_size( 'our-work-home', 856, 482, array( 'center', 'center' ) );
	add_image_size( 'our-work-about', 370, 278, array( 'center', 'center' ) );
}

/**
 * Enqueue scripts and styles.
 */
function audio_active_scripts() {

	wp_enqueue_script( 'iscroll-js', get_template_directory_uri() . '/js/iScroll.js', array(), '5.1.3', true );

	wp_enqueue_script( 'drawer-js', get_template_directory_uri() . '/js/drawer.min.js', array(), '20160206', true );

	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');

	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.5', 'all' );

	wp_enqueue_style( 'drawer', get_template_directory_uri() . '/css/drawer.css', array() );

    wp_enqueue_style( 'audio-active-styles', get_template_directory_uri() . '/css/audio-active-styles.css', array() );

	wp_enqueue_script( 'audio-active-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.5', true );

	wp_enqueue_script( 'audio-active-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'hammer-js', get_template_directory_uri() . '/js/hammer.min.js', array(), '20160206', true );

	wp_enqueue_script( 'picturefill-js', get_template_directory_uri() . '/js/picturefill.min.js', array(), '20160206',
		true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_script( 'TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '1.19.0', true );
    wp_enqueue_script( 'AudioActive.js', get_template_directory_uri() . '/js/AudioActive.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'audio_active_scripts' );
if( !function_exists('ie_scripts')) {
	function ie_scripts(){
		echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
		echo '<!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->';
		echo '<!--[if lt IE 9]>';
		echo '<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
		echo '<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
		echo '<![endif]-->';
	}
	add_action('wp_head', 'ie_scripts');
} //end if

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
