<?php
/**
 * Padma functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Padma
 */

if ( ! defined( 'GOGOGO_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'GOGOGO_VERSION', '0.0.1' );
}

if ( ! function_exists( 'gogogo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gogogo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on padma, use a find and replace
		 * to change 'padma' to the name of your theme in all the template files.
		 */
		//load_theme_textdomain( 'padma', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' )
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

		add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
		function add_extra_item_to_nav_menu( $items, $args ) {
			/*
			if (is_user_logged_in() && $args->menu == 303) {
				$items .= '<li><a href="'. get_permalink( get_option('woocommerce_myaccount_page_id') ) .'">My Account</a></li>';
			}
			elseif (!is_user_logged_in() && $args->menu == 303) {
				$items .= '<li><a href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '">Sign in  /  Register</a></li>';
			}
			*/
			//$items .= '<li>my test</iu>';

			$items = preg_replace('/(<li.+class=")(.*?)(">)/m', '$1nav-item$3', $items);
			$items = preg_replace('/(\d+"|\/")(>.+<\/a>)/m', '$1 class="nav-link"$2', $items);
			$items = preg_replace('/(aria-current="page")(>.+<\/a>)/m', '$1 class="nav-link active"$2', $items);
			
			return $items;
		}

	}
endif;
add_action( 'after_setup_theme', 'gogogo_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gogogo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'padma' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'padma' ),
			'before_widget' => '<div id="%1$s" class="p-4 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="fst-italic">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'gogogo_widgets_init' );


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
require get_template_directory() . '/inc/custom-style.php';

/**
 * Load padma Header.
 */
require get_template_directory() . '/inc/header/header-1.php';

/**
 * Load padma Footer.
 */
require get_template_directory() . '/inc/footer/footer-1.php';


/** Welcome Page * */
require get_template_directory() . '/welcome/welcome.php';