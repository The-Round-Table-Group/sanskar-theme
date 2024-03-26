<?php

$labels = [
	'name'               => __( 'News Posts', 'skv' ),
	'singular_name'      => __( 'News', 'skv' ),
	'add_new'            => _x( 'Add News Post', 'skv', ),
	'add_new_item'       => __( 'Add News Post', 'skv' ),
	'edit_item'          => __( 'Edit News Post', 'skv' ),
	'new_item'           => __( 'New News Post', 'skv' ),
	'view_item'          => __( 'View News Post', 'skv' ),
	'search_items'       => __( 'Search News Posts', 'skv' ),
	'not_found'          => __( 'No News Posts found', 'skv' ),
	'not_found_in_trash' => __( 'No News Posts found in Trash', 'skv' ),
	'parent_item_colon'  => __( 'Parent News Post:', 'skv' ),
	'menu_name'          => __( 'News Posts', 'skv' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'news-tax' ],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-edit',
	'show_in_nav_menus'   => false,
	'publicly_queryable'  => true,
	'exclude_from_search' => false,
	'has_archive'         => false,
	'query_var'           => true,
	'can_export'          => true,
	'rewrite'             => true,
	'capability_type'     => 'post',
	'supports'            => [ 'title', 'thumbnail', 'editor', 'author', 'excerpt' ],
];
register_post_type( 'news', $args );

$tax_labels = [
	'name' 				=> _x( 'News Types', 'skv' ),
	'singular_name' 	=> _x( 'News Type', 'skv' ),
	'search_items' 		=> __( 'Search News Types', 'skv' ),
	'all_items' 		=> __( 'All News Types', 'skv' ),
	'edit_item' 		=> __( 'Edit News Type', 'skv' ),
	'update_item' 		=> __( 'Update News Type', 'skv' ),
	'add_new_item' 		=> __( 'Add News Type', 'skv' ),
	'new_item_name' 	=> __( 'Create News Type', 'skv' ),
	'menu_name' 		=> __( 'News Types', 'skv' ),
	'parent_item'		=> __( 'Parent News Type:', 'skv' ),
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
register_taxonomy( 'news-tax', 'news', $tax_args );
