<?php
/**
 * Sepulsa Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sepulsa_Blog
 */

if ( ! function_exists( 'splb_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function splb_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Sepulsa Blog, use a find and replace
		 * to change 'splb' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'splb', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'splb' ),
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
		add_theme_support( 'custom-background', apply_filters( 'splb_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'splb_setup' );

if ( ! function_exists( 'splb_add_image_size' ) ) :
	
	function splb_add_image_size() {
		// Mobile
		add_image_size( 'splb_thumb', 60, 60, true );
		add_image_size( 'splb_thumb@2x', 120, 120, true );
		add_image_size( 'splb_article_m', 767, 426, true );
		add_image_size( 'splb_article_s', 480, 267, true );
	}

	function splb_image($post_id) {
		$return['img'] 			= get_the_post_thumbnail_url($post_id, 'splb_thumb');
		$return['img2x'] 		= get_the_post_thumbnail_url($post_id, 'splb_thumb@2x');
		$return['thumbnail_id'] = get_post_thumbnail_id( $post_id );
		$return['alt'] 			= get_post_meta(get_post_thumbnail_id( $post_id ), '_wp_attachment_image_alt', true);

		return $return;
	} 

	function splb_image_article($post_id) {
		$return['img_l'] 		= get_the_post_thumbnail_url($post_id, 'full');
		$return['img_m'] 		= get_the_post_thumbnail_url($post_id, 'splb_article_m');
		$return['img_s'] 		= get_the_post_thumbnail_url($post_id, 'splb_article_s');
		$return['thumbnail_id'] = get_post_thumbnail_id( $post_id );
		$return['alt'] 			= get_post_meta(get_post_thumbnail_id( $post_id ), '_wp_attachment_image_alt', true);

		return $return;
	} 

endif;
add_action( 'after_setup_theme', 'splb_add_image_size' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function splb_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'splb_content_width', 640 );
}
add_action( 'after_setup_theme', 'splb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function splb_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'splb' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'splb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'splb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function splb_scripts() {
	
	?><script type="text/javascript"> var splb_template_directory_uri = "<?php echo get_template_directory_uri() ?>";</script><?php

	//wp_enqueue_style( 'alpt-font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap' );
	wp_enqueue_style( 'alpt-boostrap', get_template_directory_uri() . '/assets/vendor/bootstrap/bootstrap.min.css');
	wp_enqueue_style( 'alpt-slick', get_template_directory_uri() . '/assets/vendor/slick/slick.css');
	wp_enqueue_style( 'alpt-slick-theme', get_template_directory_uri() . '/assets/vendor/slick/slick-theme.css');
	wp_enqueue_style( 'splb-main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style( 'splb-style', get_stylesheet_uri() );

	wp_enqueue_script( 'alpay-jquery', get_template_directory_uri() . '/assets/vendor/jquery.min.js', array(), '1.0', false );
	wp_enqueue_script( 'alpay-lottie', get_template_directory_uri() . '/assets/vendor/lottie.min.js', array(), '1.0', false );
	wp_enqueue_script( 'alpay-jqueryui', get_template_directory_uri() . '/assets/vendor/jquery-ui.js', array(), '1.0', false );
	wp_enqueue_script( 'alpt-boostrap', get_template_directory_uri() . '/assets/vendor/bootstrap/bootstrap.min.js' );
	wp_enqueue_script( 'alpay-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
	wp_enqueue_script( 'alpay-img2svg', get_template_directory_uri() . '/assets/js/img2svg.js', array(), '1.0', true );
	wp_enqueue_script( 'alpay-slick', get_template_directory_uri() . '/assets/vendor/slick/slick.js', array(), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'splb_scripts' );

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
 * Customizer additions.
 */
require get_template_directory() . '/inc/class-comment.php';
function splb_remove_commentform($arg) {
    $arg['url'] = '';
    $arg['cookies'] = '';
    return $arg;
}
add_filter('comment_form_default_fields', 'splb_remove_commentform');

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// option setting
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );