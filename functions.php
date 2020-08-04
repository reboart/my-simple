<?php
/**
 * simple functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package simple
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'simple_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function simple_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on simple, use a find and replace
		 * to change 'simple' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'simple', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_filter('show_admin_bar', '__return_false');

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'simple' ),
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
				'simple_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'simple_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function simple_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'simple_content_width', 640 );
}
add_action( 'after_setup_theme', 'simple_content_width', 0 );
function id_pagination() {
    global $wp_query;
    $big = 999999999;
    $paged = paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
	'prev_next'          => true,
	'prev_text'          => __('Prev'),
	'next_text'          => __('Next'),
	'type'               => 'flex',
	'add_fragment'       => '',
	'before_page_number' => '',
	'after_page_number'  => '|',
        'total' => $wp_query->max_num_pages
    ));
// Replace style bawaan, sesuaikan dengan class  pada CSS Anda.
    $arr = array(
    "<ul class='page-numbers'>" => '<ul class="halaman">',
    '<li>' => '<li class="list-halaman">',
    "'" => '"'
    );
    echo strtr($paged, $arr);
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function simple_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'simple' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'simple' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'simple_widgets_init' );
// custom length the_excerpt
function custom_excerpt_length($length)
{
    return 15;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

/**
 * Enqueue scripts and styles.
 */
function simple_scripts()
{
  
    wp_enqueue_style(
        'simple-bootstrap',
        get_template_directory_uri() .'/assets/vendor/bootstrap/css/bootstrap.min.css'
    );
    wp_enqueue_style(
        'simple-aos',
        get_template_directory_uri() .'/assets/vendor/aos/aos.css'
    );
    wp_enqueue_style(
        'simple-boxicons',
        get_template_directory_uri() .'/assets/vendor/boxicons/css/boxicons.min.css'
    );
    wp_enqueue_style(
        'simple-icofont',
        get_template_directory_uri() .'/assets/vendor/icofont/icofont.min.css'
    );
    wp_enqueue_style(
        'simple-owl',
        get_template_directory_uri() .'/assets/vendor/owl.carousel/assets/owl.carousel.min.css'
    );
    wp_enqueue_style(
        'simple-venobox',
        get_template_directory_uri() .'/assets/vendor/venobox/venobox.css'
    );
    
    
 
    wp_enqueue_style('simple-style', get_stylesheet_uri());
    

    
  
    wp_enqueue_script(
        'simple-isoporope',
        get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js',
        array(), '', true
    );
    wp_enqueue_script(
        'simple-aos-js',
        get_template_directory_uri() . '/assets/vendor/aos/aos.js',
        array(), '', true
    );
    wp_enqueue_script( 'simple-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

 
add_action('wp_enqueue_scripts', 'simple_scripts');


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

