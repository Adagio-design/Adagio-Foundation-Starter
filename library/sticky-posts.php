<?php
/**
 * Change the class for sticky posts to .wp-sticky to avoid conflicts with Foundation's Sticky plugin
 *
 * @package Adagio-Foundation-Starter
 */

if ( ! function_exists( 'adagio_foundation_starter_sticky_posts' ) ) :
function adagio_foundation_starter_sticky_posts( $classes ) {
	$classes = array_diff($classes, array('sticky'));
	$classes[] = 'wp-sticky';
	return $classes;
}
add_filter('post_class','adagio_foundation_starter_sticky_posts');

endif;
