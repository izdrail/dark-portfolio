<?php
/**
 * Dark Portfolio Starter Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dark_portfolio
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */
if ( ! isset( $content_width ) ) {
	$content_width = 780;
}
// Custom post for services
require get_template_directory() . '/inc/services.php';


function dark_portfolio_setup() {


	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Add theme support for post thumbnails (featured images).
	add_theme_support( 'post-thumbnails' );


	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	) );

}

add_action( 'after_setup_theme', 'dark_portfolio_setup' );

// Add theme support for menus
function dark_portfolio_menu() {
	register_nav_menus( array(
		'primary'   => esc_html__( 'Main Menu', 'dark_portfolio_basic' ),
		'secondary' => esc_html__( 'Footer Menu', 'dark_portfolio_basic' ),
		'social'    => esc_html__( 'Social Media', 'dark_portfolio_basic' ),
	) );
}

add_action( 'init', 'dark_portfolio_menu' );


/**
 * Set up and register widget area
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles
 */
function dark_portfolio_setup_scripts() {

	if ( ! is_admin() ) {

		wp_enqueue_style( 'style', get_stylesheet_uri() );

	}

	wp_enqueue_style( 'blm_googleFonts', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic%7CRoboto:400,700%7CDroid+Serif&display=swap' );

	wp_enqueue_script( 'dark_portfolio_javascript', get_template_directory_uri() . '/js/app.js', array(), '20200801', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'dark_portfolio_setup_scripts' );

// Custom post navigation and post meta for theme.
require get_template_directory() . '/inc/template-tags.php';


/*
 * Remove Prefixes from archive title
 */

add_filter( 'get_the_archive_title', function ( $title ) {

	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_tax() ) {
		$tax = get_taxonomy( get_queried_object()->taxonomy );
		/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
		$title = sprintf( __( '%2$s' ), $tax->labels->singular_name, single_term_title( '', false ) );
	} elseif ( is_year() ) {
		$title = sprintf( __( '%s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
	} elseif ( is_month() ) {
		$title = sprintf( __( '%s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
	}

	return $title;

} );


// function custom_theme_assets() {
//     wp_dequeue_style( 'wp-block-library' );
// }
//
// add_action( 'wp_enqueue_scripts', 'custom_theme_assets', 100 );
/**
 * Create Logo Setting and Upload Control
 */
function your_theme_new_customizer_settings( $wp_customize ) {
// add a setting for the site logo
	$wp_customize->add_setting( 'your_theme_logo' );
	// Add a control to upload the logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
			array(
				'label'    => 'Upload Logo',
				'section'  => 'title_tagline',
				'settings' => 'your_theme_logo',
			)
		)
	);

	$wp_customize->add_setting( 'phone_number' );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'phone_number',
			array(
				'label'    => __( 'Contact phone number', 'dark_portfolio' ),
				'section'  => 'title_tagline',
				'settings' => 'phone_number',
				'type'     => 'text',
			)
		)
	);

}

add_action( 'customize_register', 'your_theme_new_customizer_settings' );

add_post_type_support( 'page', 'excerpt' );



function custom_redirects() {
    $redirect_rules = array(
        array('old'=>'/javascript-development-company','new'=>'/services/javascript-development-company'),
        array('old'=>'/golang-development-company','new'=>'/services/golang-development-company'), // page
        array('old'=>'/laravel-development-company','new'=>'/services/laravel-development-company'), // page
        array('old'=>'/codeigntier-development-company','new'=>'/services/codeigntier-development-company'), // page
        array('old'=>'/symfony-development-company','new'=>'/services/symfony-development-company'), // page
        array('old'=>'/drupal-development-company','new'=>'/services/drupal-development-company'), // page
        array('old'=>'/magento-development-company','new'=>'/services/magento-development-company'), // page
        array('old'=>'/reactjs-development-company','new'=>'/services/reactjs-development-company'), // page
        array('old'=>'/vuejs-development-company','new'=>'/services/vuejs-development-company'), // page
        array('old'=>'/python-development-company','new'=>'/services/python-development-company'), // page
        array('old'=>'/angularjs-development-company','new'=>'/services/angularjs-development-company'), // page
    );
    foreach( $redirect_rules as $rule ) :
        if( urldecode($_SERVER['REQUEST_URI']) == $rule['old'] ) :
            wp_redirect( home_url( $rule['new'] ), 301 );
            exit();
        endif;
    endforeach;
}

add_action('template_redirect', 'custom_redirects');
