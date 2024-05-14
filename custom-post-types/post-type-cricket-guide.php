<?php

$labels = [
	'name'               => __( 'Cricket Guides', 'skv' ),
	'singular_name'      => __( 'Cricket Guide', 'skv' ),
	'add_new'            => _x( 'Add Cricket Guide', 'skv', ),
	'add_new_item'       => __( 'Add Cricket Guide', 'skv' ),
	'edit_item'          => __( 'Edit Cricket Guide', 'skv' ),
	'new_item'           => __( 'New Cricket Guide', 'skv' ),
	'view_item'          => __( 'View Cricket Guide', 'skv' ),
	'search_items'       => __( 'Search Cricket Guides', 'skv' ),
	'not_found'          => __( 'No Cricket Guides found.', 'skv' ),
	'not_found_in_trash' => __( 'No Cricket Guides found in Trash.', 'skv' ),
	'parent_item_colon'  => __( 'Parent Cricket Guide:', 'skv' ),
	'menu_name'          => __( 'Cricket Guides', 'skv' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'cricket-guide-tax' ],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-book-alt',
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
register_post_type( 'cricket-guide', $args );

$tax_labels = [
	'name' 				=> _x( 'Guide Types', 'skv' ),
	'singular_name' 	=> _x( 'Guide Type', 'skv' ),
	'search_items' 		=> __( 'Search Guide Types', 'skv' ),
	'all_items' 		=> __( 'All Guide Types', 'skv' ),
	'edit_item' 		=> __( 'Edit Guide Type', 'skv' ),
	'update_item' 		=> __( 'Update Guide Type', 'skv' ),
	'add_new_item' 		=> __( 'Add Guide Type', 'skv' ),
	'new_item_name' 	=> __( 'Create Guide Type', 'skv' ),
	'menu_name' 		=> __( 'Guide Types', 'skv' ),
	'parent_item'		=> __( 'Parent Guide Type:', 'skv' ),
];

$tax_args = [
	'hierarchical' 	    => true,
	'labels' 	    	=> $tax_labels,
    'public'            => false,
	'show_ui' 	    	=> true,
	'show_admin_column' => true,
	'has_archive'		=> false,
	'query_var'	    	=> true,
	'show_in_rest'		=> true,
	'rewrite'			=> true,
];
register_taxonomy( 'cricket-guide-tax', 'cricket-guide', $tax_args );
