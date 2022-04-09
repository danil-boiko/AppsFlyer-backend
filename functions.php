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

//**==Theme support Settings==**//
function apps_flyer_setup() {
	add_theme_support( 'custom-logo' );
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
}

add_action( 'after_setup_theme', 'apps_flyer_setup' );
//**==Theme support Settings==**//


//**==Support of svg type download==**//
add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	} else {
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );
	}
	if( $dosvg ) {

		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}
//**==Support of svg type download==**//


//**==Enqueue scripts and styles==**//
function apps_flyer_scripts() {

    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/dist/css/style.css', array(), _S_VERSION);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/dist/js/app.bundle.js', array(), _S_VERSION, true);
	
}

add_action( 'wp_enqueue_scripts', 'apps_flyer_scripts' );
//**==Enqueue scripts and styles==**//
