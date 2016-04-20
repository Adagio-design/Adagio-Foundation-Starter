<?php
/**
 * Custom post types.
 *
 * @package Adagio-Foundation-Starter
 */

// Register Custom Post Type
function afs_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Lokala grupper', 'Post Type General Name', 'adagio-foundation-starter' ),
		'singular_name'         => _x( 'Lokal grupp', 'Post Type Singular Name', 'adagio-foundation-starter' ),
		'menu_name'             => __( 'Lokala grupper', 'adagio-foundation-starter' ),
		'name_admin_bar'        => __( 'Lokala grupper', 'adagio-foundation-starter' ),
		'archives'              => __( 'Lokala grupper arkiv', 'adagio-foundation-starter' ),
		'parent_item_colon'     => __( 'Överliggande lokalgrupp:', 'adagio-foundation-starter' ),
		'all_items'             => __( 'Alla lokalgrupper', 'adagio-foundation-starter' ),
		'add_new_item'          => __( 'Lägg till ny lokalgrupp', 'adagio-foundation-starter' ),
		'add_new'               => __( 'Lägg till ny', 'adagio-foundation-starter' ),
		'new_item'              => __( 'Ny lokalgrupp', 'adagio-foundation-starter' ),
		'edit_item'             => __( 'Rediga lokalgrupp', 'adagio-foundation-starter' ),
		'update_item'           => __( 'Uppdatera lokalgrupp', 'adagio-foundation-starter' ),
		'view_item'             => __( 'Visa lokalgrupp', 'adagio-foundation-starter' ),
		'search_items'          => __( 'Sök lokalgrupp', 'adagio-foundation-starter' ),
		'not_found'             => __( 'Ingen hittad', 'adagio-foundation-starter' ),
		'not_found_in_trash'    => __( 'Ingen hittad i papperskorgen', 'adagio-foundation-starter' ),
		'featured_image'        => __( 'Utvald bild', 'adagio-foundation-starter' ),
		'set_featured_image'    => __( 'Ställ in utvald bild', 'adagio-foundation-starter' ),
		'remove_featured_image' => __( 'Ta bort utvald bild', 'adagio-foundation-starter' ),
		'use_featured_image'    => __( 'Använd som utvald bild', 'adagio-foundation-starter' ),
		'insert_into_item'      => __( 'Infoga i lokalgrupp', 'adagio-foundation-starter' ),
		'uploaded_to_this_item' => __( 'Ladda upp till denna lokalgrupp', 'adagio-foundation-starter' ),
		'items_list'            => __( 'Lokalgruppslista', 'adagio-foundation-starter' ),
		'items_list_navigation' => __( 'Navigering lokalgruppslista', 'adagio-foundation-starter' ),
		'filter_items_list'     => __( 'Filtrering lokalgruppslista', 'adagio-foundation-starter' ),
	);
	$rewrite = array(
		'slug'                  => 'lokalgrupp',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Lokal grupp', 'adagio-foundation-starter' ),
		'description'           => __( 'Organisation av lokala grupper', 'adagio-foundation-starter' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'posk_localgroup', $args );

}
// add_action( 'init', 'afs_custom_post_type', 0 );