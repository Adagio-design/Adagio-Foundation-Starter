<?php
/**
 * Register widget areas
 *
 * @package Adagio-Foundation-Starter
 */

if ( ! function_exists( 'adagio_foundation_starter_sidebar_widgets' ) ) :
function adagio_foundation_starter_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'adagio-foundation-starter' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'adagio-foundation-starter' ),
	  'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
	  'after_widget' => '</div></article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'adagio-foundation-starter' ),
	  'description' => __( 'Drag widgets to this footer container', 'adagio-foundation-starter' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'adagio_foundation_starter_sidebar_widgets' );
endif;
?>
