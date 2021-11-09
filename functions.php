<?php
/**
 * Bild Test functions and definitions
 *
 * @package Bild_Test
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'bild_test_setup' ) ) :

	function bild_test_setup() {
	
		load_theme_textdomain( 'bild-test', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		//Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Registering nav menus
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'bild-test' ),
				'menu-2' => esc_html__( 'Top', 'bild-test' ),
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
				'bild_test_custom_background_args',
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
add_action( 'after_setup_theme', 'bild_test_setup' );



/**
 * Register widget area.
 */
function bild_test_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'ETG sidebar', 'bild-test' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bild-test' ),
			
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Anketa', 'bild-test' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'bild-test' ),
			'before_widget' => '<div id="widget-wrapper" class="widget-block">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'News', 'bild-test' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'bild-test' ),
			
		)
	);
}
add_action( 'widgets_init', 'bild_test_widgets_init' );


/* Enqueue scripts and styles.
/**************************************/
function bild_test_scripts() {

	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', array(), _S_VERSION );

	/*Styles*/
	wp_enqueue_style( 'bild-test-style', get_template_directory_uri() . '/sass/style.css', array(), _S_VERSION );
	wp_style_add_data( 'bild-test-style', 'rtl', 'replace' );

	
    /*Scripts*/
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'menu-js', get_template_directory_uri() . '/js/menu.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bild-test-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bild_test_scripts' );


/* Implement the Custom Header feature.
/**************************************/
require get_template_directory() . '/inc/custom-header.php';


/* Custom template tags for this theme.
/**************************************/
require get_template_directory() . '/inc/template-tags.php';


/* Functions which enhance the theme by hooking into WordPress.
/**************************************/
require get_template_directory() . '/inc/template-functions.php';


/* Customizer additions.
/**************************************/
require get_template_directory() . '/inc/customizer.php';


/* Loop
/**************************************/
function loopPosts($post_type, $posts_per_page) {


	$args = array(
		'post_type' => $post_type,
		'posts_per_page' =>$posts_per_page
	);

	$loop = new WP_Query($args);

	if($loop->have_posts()) :
		while($loop->have_posts()) :
			$loop->the_post();

				

			wp_reset_postdata();
		endwhile;
	endif;
}


add_filter( 'excerpt_more', '__return_empty_string', 21 );

function excerpt_more_link( $excerpt ) {
    $excerpt .= sprintf( 
            '... <a href="%s">%s</a>.',
            esc_url( get_permalink() ),
            __( '...More >' )
    );
    return $excerpt;
}
add_filter( 'the_excerpt', 'excerpt_more_link', 50 );

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length' );
