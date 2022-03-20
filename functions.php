<?php
/**
 * Miner Moments Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package miner-moments-theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'MINER_MOMENTS_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'miner-moments-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), MINER_MOMENTS_THEME_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

