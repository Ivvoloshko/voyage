<?php
/**
 * Voyage functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Voyage
 */

if ( ! function_exists( 'voyage_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function voyage_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Voyage, use a find and replace
		 * to change 'voyage' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'voyage', get_template_directory() . '/languages' );

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
			'header-menu' => esc_html__( 'Header Menu', 'voyage' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'voyage' ),
			'social-menu' => esc_html__( 'Social Menu', 'voyage' ),
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
		add_theme_support( 'custom-background', apply_filters( 'voyage_custom_background_args', array(
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
add_action( 'after_setup_theme', 'voyage_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function voyage_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'voyage_content_width', 640 );
}
add_action( 'after_setup_theme', 'voyage_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function voyage_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'voyage' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'voyage' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'voyage_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 function my_scripts_method(){
	if ( !is_admin() ) { 
		wp_enqueue_script( 'jquery' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function voyage_scripts() {
	wp_enqueue_style( 'voyage-style', get_stylesheet_uri() );
	wp_enqueue_style( 'voyage-main-style', get_template_directory_uri() . '/assets/css/main.css' );
	
	wp_enqueue_script( 'voyage-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
	// wp_enqueue_style( 'voyage-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

	
// default 	

	// wp_enqueue_script('voyage-bootstrap-js', get_template_directory_uri () . '/assets/js/bootstrap.min.js', array(),'1.0', true);
	// wp_enqueue_script( 'voyage-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	// wp_enqueue_script( 'voyage-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {wp_enqueue_script( 'comment-reply' );}
// default 	
}


function wph_add_google_fonts() {
    if ( !is_admin() ) {
        wp_register_style('google-lora', 'https://fonts.googleapis.com/css?family=Lora:400,700&display=swap&subset=cyrillic', array(), null, 'all');
        wp_register_style('google-source-sans-pro', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900&display=swap&subset=cyrillic', array(), null, 'all');
        wp_enqueue_style('google-lora');
        wp_enqueue_style('google-source-sans-pro');
    }
}
add_action('wp_enqueue_scripts', 'wph_add_google_fonts');

function font_awesome() {
	if (!is_admin()) {
	  wp_register_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
	  wp_enqueue_style('font-awesome');
	}
  }
  add_action('wp_enqueue_scripts', 'font_awesome');

add_action( 'wp_enqueue_scripts', 'voyage_scripts' );

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

// отключаем обновление тем
remove_action( 'load-update-core.php', 'wp_update_themes' );
add_filter( 'pre_site_transient_update_themes', '__return_null' );
 
// отключаем авто обновления
add_filter( 'auto_update_theme', '__return_false' ); 
 
// спрячем имеющиеся уведомления
add_action('admin_menu','hide_admin_notices');
function hide_admin_notices() {
	remove_action( 'admin_notices', 'update_nag', 3 );
}
// хлебные крошки
function wpcourses_breadcrumb( $sep = ' > ' ) {
	global $post;
	$out = '';
	$out .= '<div class="wpcourses-breadcrumbs">';
	$out .= '<a href="' . home_url( '/' ) . '">Главная</a>';
	$out .= '<span class="wpcourses-breadcrumbs-sep">' . $sep . '</span>';
	if ( is_single() ) {
		$terms = get_the_terms( $post, 'category' );
		if ( is_array( $terms ) && $terms !== array() ) {
			$out .= '<a href="' . get_term_link( $terms[0] ) . '">' . $terms[0]->name . '</a>';
			$out .= '<span class="wpcourses-breadcrumbs-sep">' . $sep . '</span>';
		}
	}
	if ( is_singular() ) {
		$out .= '<span class="wpcourses-breadcrumbs-last">' . get_the_title() . '</span>';
	}
	if ( is_search() ) {
		$out .= get_search_query();
	}
	$out .= '</div><!--.wpcourses-breadcrumbs-->';
	return $out;
}