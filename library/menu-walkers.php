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
endif;

if ( ! class_exists( 'Adagio_Foundation_Starter_Mobile_Walker' ) ) :
	class Adagio_Foundation_Starter_Mobile_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"vertical nested menu\">\n";
		}
	}
endif;

if ( ! class_exists( 'Adagio_Foundation_Starter_Side_Nav_Walker' ) ) :
	class Adagio_Foundation_Starter_Side_Nav_Walker extends Walker_Nav_Menu {
		var $is_current = '';

		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			if ( $this->is_current ) {
				$output .= "\n$indent<ul class=\"vertical nested menu is-active\">\n";
			} else {
				$output .= "\n$indent<ul class=\"vertical nested menu\">\n";
			}
		}

		// From https://www.smashingmagazine.com/2015/10/customize-tree-like-data-structures-wordpress-walker-class/
		public function display_element( $element, &$children_elements, $max_depth, $depth = 0, $args, &$output ) {
		
			// If element is current or is an ancestor of the current element, set $this->is_current to true
			$this->is_current = ( $element->current || $element->current_item_ancestor ) ? true : false;

			// call parent method
			parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
		}
	}
endif;

if ( ! class_exists( 'Adagio_Foundation_Starter_Side_Walker_Page' ) ) :
	class Adagio_Foundation_Starter_Side_Walker_Page extends Walker_Page {
		var $is_current = '';

		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			if ( $this->is_current ) {
				$output .= "\n$indent<ul class=\"vertical nested menu is-active\">\n";
			} else {
				$output .= "\n$indent<ul class=\"vertical nested menu\">\n";
			}
		}

		public function start_el( &$output, $page, $depth = 0, $args = array(), $current_page = 0 ) {
			if ( ! empty( $current_page ) ) {
				$_current_page = get_post( $current_page );
				if ( $_current_page && in_array( $page->ID, $_current_page->ancestors ) ) {
					// $css_class[] = 'current_page_ancestor';
					$this->is_current = true;
				}
				if ( $page->ID == $current_page ) {
					// $css_class[] = 'current_page_item';
					$this->is_current = true;
				} elseif ( $_current_page && $page->ID == $_current_page->post_parent ) {
					// $css_class[] = 'current_page_parent';
				} else {
					$this->is_current = false;
				}
			} elseif ( $page->ID == get_option('page_for_posts') ) {
				// $css_class[] = 'current_page_parent';
			}

			// call parent method
			parent::start_el( $output, $page, $depth, $args, $current_page );
		}
	}
endif;
