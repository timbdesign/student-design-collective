<?php
/**
 * Student Design Collective functions and definitions
 *
 * @package Student Design Collective
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'student_design_collective_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function student_design_collective_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Student Design Collective, use a find and replace
	 * to change 'student-design-collective' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'student-design-collective', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'student-design-collective' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'student_design_collective_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // student_design_collective_setup
add_action( 'after_setup_theme', 'student_design_collective_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function student_design_collective_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'student-design-collective' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'student_design_collective_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function student_design_collective_scripts() {
	wp_enqueue_style( 'student-design-collective-style', get_stylesheet_uri() );

	wp_enqueue_script( 'student-design-collective-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'student-design-collective-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'student_design_collective_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return ' <a class="moretag" href="'. get_permalink($post->ID) . '">READ MORE</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

/**

// CREATE UNIX TIME STAMP FROM DATE PICKER
function datepicker_to_unix( $date ){
	$dateparts = explode('_', $date);
	$unixtimestamp = strtotime(date('y.m.D', strtotime($dateparts[1].'/'.$dateparts[2].'/'.$dateparts[0])));
	return $unixtimestamp;
	}


add_action( 'save_post', 'unixtimestamp', 100, 2);
**/

function mytheme_init() {
	add_filter('comment_form_defaults','mytheme_comments_form_defaults');
}
add_action('after_setup_theme','mytheme_init');

function mytheme_comments_form_defaults($default) {
	unset($default['comment_notes_after']);
	return $default;
}
