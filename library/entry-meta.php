<?php
/**
 * Entry meta information for posts
 *
 * @package Adagio-Foundation-Starter
 */

if ( ! function_exists( 'adagio_foundation_starter_entry_meta' ) ) :
	function adagio_foundation_starter_entry_meta() {
		echo '<time class="updated" datetime="'. get_the_time( 'c' ) .'">'. sprintf( __( 'Posted on %s at %s.', 'adagio-foundation-starter' ), get_the_date(), get_the_time() ) .'</time>';
		echo '<p class="byline author">'. __( 'Written by', 'adagio-foundation-starter' ) .' <a href="'. get_author_posts_url( get_the_author_meta( 'ID' ) ) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
	}
endif;
