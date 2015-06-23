<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package Adagio-Foundation-Starter
 */

if ( ! function_exists( 'adagio_foundation_starter_theme_support' ) ) :
function adagio_foundation_starter_theme_support() {
	// Add language support
	load_theme_textdomain( 'adagio-foundation-starter', get_template_directory() . '/languages' );

	// Add menu support
	add_theme_support( 'menus' );

	// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );

	// RSS thingy
	add_theme_support( 'automatic-feed-links' );

	// Add post formarts support: http://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

}

add_action( 'after_setup_theme', 'adagio_foundation_starter_theme_support' );
endif;
?>