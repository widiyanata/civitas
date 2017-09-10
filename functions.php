<?php
/**
 * civitas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package civitas
 */

 /**
	* Include Kirki
 	*/
	include_once( dirname( __FILE__ ) . '/inc/kirki/kirki.php' );

	/**
	* Include Bootstrap navwalker
	*/
	include_once( dirname( __FILE__ ) . '/inc/wp_bootstrap_navwalker-old.php' );

	/**
	*	Include Custom Widget
	*/
	include_once( dirname( __FILE__ ) . '/inc/widget/widget-init.php' );

if ( ! function_exists( 'civitas_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function civitas_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on civitas, use a find and replace
		 * to change 'civitas' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'civitas', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'civitas' ),
			'primary' => esc_html__('Main Top Menu', 'civitas'),
			'top-menu' => esc_html__('Top Menu', 'civitas'),
			'menu-footer' => esc_html__('Footer Menu', 'civitas'),
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
		add_theme_support( 'custom-background', apply_filters( 'civitas_custom_background_args', array(
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
add_action( 'after_setup_theme', 'civitas_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function civitas_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'civitas_content_width', 640 );
}
add_action( 'after_setup_theme', 'civitas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function civitas_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'civitas' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'civitas' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Register new Widget : Footer 4 column

	// Column 1
		register_sidebar( array(
			'name'          => esc_html__( 'First Widget Footer', 'civitas' ),
			'id'            => 'widget_footer_first_column',
			'description'   => esc_html__( 'Add widgets here.', 'civitas' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		// Column 2
		register_sidebar( array(
			'name'          => esc_html__( 'Second Widget Footer', 'civitas' ),
			'id'            => 'widget_footer_second_column',
			'description'   => esc_html__( 'Add widgets here.', 'civitas' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		// Column 3
		register_sidebar( array(
			'name'          => esc_html__( 'Third Widget Footer', 'civitas' ),
			'id'            => 'widget_footer_third_column',
			'description'   => esc_html__( 'Add widgets here.', 'civitas' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		// Column 4
		register_sidebar( array(
			'name'          => esc_html__( 'Forth Widget Footer', 'civitas' ),
			'id'            => 'widget_footer_forth_column',
			'description'   => esc_html__( 'Add widgets here.', 'civitas' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
}
add_action( 'widgets_init', 'civitas_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function civitas_scripts() {
	wp_enqueue_style( 'civitas-style', get_stylesheet_uri() );

  // Add css style
  wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('core-style', get_template_directory_uri() . '/css/core.css');
  wp_enqueue_style('animate', get_template_directory_uri() . '/css/shortcode/shortcodes.css');
  wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom.css');



  // Add script to footer
  // wp_enqueue_script( 'civitas-jquery-script', "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", array(), '1.2', true );
  wp_enqueue_script( 'civitas-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
  wp_enqueue_script( 'civitas-plugins', get_template_directory_uri() . '/js/plugins.js', array(), '20151215', true );
  wp_enqueue_script( 'civitas-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
  wp_enqueue_script( 'civitas-bootsnav', get_template_directory_uri() . '/js/bootsnav.js', array(), '20151215', true );
  wp_enqueue_script( 'civitas-main-js', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
  wp_enqueue_script( 'civitas-modernizr-js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), '20151215', true );
	// wp_enqueue_script( 'civitas-masonry-js', "https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js", array(), '20151215', true );


  wp_enqueue_script( 'civitas-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'civitas-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'civitas_scripts' );

/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

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
