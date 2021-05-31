<?php
/**
 * astraLAB Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package astraLAB
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRALAB_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astralab-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRALAB_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



function astralab_stylesheets() {
    wp_enqueue_style( 'inter-font', get_stylesheet_directory_uri() . '/fonts/inter/font-style.css' );
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/fonts/fontawesome/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'astralab_stylesheets' );


// Disable Astra Google Fonts
// https://wphelp.blog/how-to-disable-google-fonts-in-the-astra-theme/
add_filter('astra_google_fonts_selected', function($fonts) {
    return [];
});