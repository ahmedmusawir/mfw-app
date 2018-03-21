<?php
/**
 * Moose Framework 2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Moose_Framework_2
 */

if ( ! function_exists( 'moose_framework_2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function moose_framework_2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Moose Framework 2, use a find and replace
		 * to change 'moose-framework-2' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'moose-framework-2', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'moose-framework-2' ),
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
		add_theme_support( 'custom-background', apply_filters( 'moose_framework_2_custom_background_args', array(
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
add_action( 'after_setup_theme', 'moose_framework_2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function moose_framework_2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'moose_framework_2_content_width', 640 );
}
add_action( 'after_setup_theme', 'moose_framework_2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function moose_framework_2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'moose-framework-2' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'moose-framework-2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 1', 'moose-framework-2' ),
		'id'            => 'footer-sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'moose-framework-2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 2', 'moose-framework-2' ),
		'id'            => 'footer-sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'moose-framework-2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 3', 'moose-framework-2' ),
		'id'            => 'footer-sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'moose-framework-2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'moose_framework_2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function moose_framework_2_scripts() {
	//MOOSE FRAMEWORK 2.0 STYLES UNIFIED & MINIFIED
	wp_enqueue_style( 'moose-framework-2-main-style', get_template_directory_uri() . '/css/main.min.css', '', 4.0 );
	// wp_enqueue_style( 'moose-framework-2-pg-ordering', get_template_directory_uri() . '/inc/simple-page-ordering/assets/css/simple-page-ordering.css', '', 4.0 );

	//MOOSE FRAMEWORK 2.0 STYLE.CSS - USED FOR POST PRODUCTION UPDATES ONLY
	wp_enqueue_style( 'moose-framework-2-style', get_stylesheet_uri(), '', 1.0 );

   // Hack to stop wordpress from loading jQuery in the head of the page
   wp_deregister_script( 'jquery' );	

	//MOOSE FRAMEWORK 2.0 JAVASCRIPTS UNIFIED AND MINIFIED
	wp_enqueue_script( 'moose-framework-2-main', get_template_directory_uri() . '/js/main.min.js', array(), '20151215', true );
	wp_enqueue_script( 'moose-framework-2-vue-js', 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js', array(), '20151215', false );
	wp_enqueue_script( 'moose-framework-2-jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '20151215', false );
	wp_enqueue_script( 'moose-framework-2-wpapp-home-js', get_template_directory_uri() . '/js/wpapp-home.js', array(), '20151215', true );



	/**
	 *
	 * Localizing Variables for REST API
	 *
	 */

	wp_localize_script( 'moose-framework-2-wpapp-home-js', 'wp_rest_api', [

		'base_url' => rest_url( '/wp/v2/' ),
		'site_name' => get_bloginfo( 'name' ),

	]);	
	



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'moose_framework_2_scripts' );






/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

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
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/*======================================
=            MOOSE INCLUDES            =
======================================*/

/**
 * Bootstrap 4 Nav Walker 
 */
require get_template_directory() . '/_mfw-functions/bootstrap-navwalker/bootstrap-navwalker.php';

/*=====  End of MOOSE INCLUDES  ======*/


// MOOSE FRAMEWORK FUNCTIONS ON MAIN THEME
require get_template_directory() . '/_mfw-functions/helper-functions.php';
require get_template_directory() . '/_mfw-functions/admin-functions.php';
require get_template_directory() . '/_mfw-functions/test-functions.php';

// ACF USAGE WITHOUT A PLUGIN 
require get_template_directory() . '/_mfw-functions/acf-functions.php';

// WP AUTO PLUGIN & THEME UPDATES
require get_template_directory() . '/_mfw-functions/wp-auto-update.php';

// REMOVE WP VERSIONS 
require get_template_directory() . '/_mfw-functions/remove-wp-version-number.php';

// LOGIN REDIRECT FOR CUSTOM LOGIN PAGE 
require get_template_directory() . '/_mfw-functions/login-redirect.php';

/**
 * LOCALIZING PLUGINS AS FEATURES
 */
require get_template_directory() . '/inc/feature-includes.php';




// TOTAL LOCK DOWN
// add_action('init','custom_login');

// function custom_login(){
//  global $pagenow;
//  if( 'wp-login.php' == $pagenow && $_GET['action']!="logout") {
//   wp_redirect('http://wpapp.local/');
//   exit();
//  }

// }

//MENU CHOICE ACCORING TO LOGGED IN OR OUT USER

function my_wp_nav_menu_args( $args = '' ) {
 
if( is_user_logged_in() ) { 
    $args['menu'] = 'logged-in';
} else { 
    $args['menu'] = 'logged-out';
} 
    return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );


//REDIRECTION BY LOGGED IN USER ROLE 

add_action( 'admin_init', 'redirectAuthorToFrontend', 10 );

function redirectAuthorToFrontend () {

	$ourCurrentUser = wp_get_current_user();

	if ( count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'author' ) {

		wp_redirect( site_url('/'));
		exit;	
	}
}

//REMOVE ADMIN BAR FOR LOGGED IN AUTHOR

add_action( 'wp_loaded', 'noAuthAdminBar', 10 );

function noAuthAdminBar () {

	$ourCurrentUser = wp_get_current_user();

	if ( count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'author' ) {

		show_admin_bar( false );
	}
}












































