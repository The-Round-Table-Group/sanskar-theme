<?php

$labels = [
	'name'               => __( 'Playlists', 'skv' ),
	'singular_name'      => __( 'Playlist', 'skv' ),
	'add_new'            => _x( 'Add Playlist', 'skv', ),
	'add_new_item'       => __( 'Add Playlist', 'skv' ),
	'edit_item'          => __( 'Edit Playlist', 'skv' ),
	'new_item'           => __( 'New Playlist', 'skv' ),
	'view_item'          => __( 'View Playlist', 'skv' ),
	'search_items'       => __( 'Search Playlists', 'skv' ),
	'not_found'          => __( 'No Playlists found.', 'skv' ),
	'not_found_in_trash' => __( 'No Playlists found in Trash.', 'skv' ),
	'parent_item_colon'  => __( 'Parent Playlist:', 'skv' ),
	'menu_name'          => __( 'Playlists', 'skv' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'playlist-tax' ],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-embed-audio',
	'show_in_nav_menus'   => false,
	'publicly_queryable'  => true,
	'exclude_from_search' => false,
	'has_archive'         => false,
	'query_var'           => true,
	'can_export'          => true,
	'rewrite'             => true,
	'capability_type'     => 'post',
	'supports'            => [ 'title', 'thumbnail', 'editor' ],
];
register_post_type( 'playlist', $args );

$tax_labels = [
	'name' 				=> _x( 'Playlist Tags', 'skv' ),
	'singular_name' 	=> _x( 'Playlist Tag', 'skv' ),
	'search_items' 		=> __( 'Search Playlist Tags', 'skv' ),
	'all_items' 		=> __( 'All Playlist Tags', 'skv' ),
	'edit_item' 		=> __( 'Edit Playlist Tag', 'skv' ),
	'update_item' 		=> __( 'Update Playlist Tag', 'skv' ),
	'add_new_item' 		=> __( 'Add Playlist Tag', 'skv' ),
	'new_item_name' 	=> __( 'Create Playlist Tag', 'skv' ),
	'menu_name' 		=> __( 'Playlist Tags', 'skv' ),
	'parent_item'		=> __( 'Parent Playlist Tag:', 'skv' ),
];

$tax_args = [
	'hierarchical' 	    => true,
	'labels' 	    	=> $tax_labels,
	'show_ui' 	    	=> true,
	'show_admin_column' => true,
	'has_archive'		=> false,
	'query_var'	    	=> true,
	'show_in_rest'		=> true,
	'rewrite'			=> true,
];
register_taxonomy( 'playlist-tax', 'playlist', $tax_args );
