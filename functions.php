<?php
/**
 * Apps Flyer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Apps_Flyer
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function apps_flyer_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
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
add_action( 'after_setup_theme', 'apps_flyer_setup' );

/**
 * Enqueue scripts and styles.
 */
function apps_flyer_scripts() {

    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/dist/css/style.css', array(), _S_VERSION);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/dist/js/app.bundle.js', array(), _S_VERSION, true);
	
}

add_action( 'wp_enqueue_scripts', 'apps_flyer_scripts' );