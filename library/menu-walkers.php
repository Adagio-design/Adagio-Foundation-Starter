<?php
/**
 * Customize the output of menus for Foundation top bar
 *
 * @package Adagio-Foundation-Starter
 */

 // Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker

 if ( ! class_exists( 'Adagio_Foundation_Starter_Top_Bar_Walker' ) ) :
 class Adagio_Foundation_Starter_Top_Bar_Walker extends Walker_Nav_Menu {

 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 			$indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
 	}
 }


 if ( ! class_exists( 'Adagio_Foundation_Starter_Mobile_Walker' ) ) :
 class Adagio_Foundation_Starter_Mobile_Walker extends Walker_Nav_Menu {
 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 			$indent = str_repeat("\t", $depth);
 			$output .= "\n$indent<ul class=\"vertical nested menu\">\n";
 	}
 }
 endif;

endif;
