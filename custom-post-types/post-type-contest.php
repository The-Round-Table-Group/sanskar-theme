<?php

$labels = [
	'name'               => __( 'Contests', 'skv' ),
	'singular_name'      => __( 'Contest', 'skv' ),
	'add_new'            => _x( 'Add Contest', 'skv', ),
	'add_new_item'       => __( 'Add Contest', 'skv' ),
	'edit_item'          => __( 'Edit Contest', 'skv' ),
	'new_item'           => __( 'New Contest', 'skv' ),
	'view_item'          => __( 'View Contest', 'skv' ),
	'search_items'       => __( 'Search Contests', 'skv' ),
	'not_found'          => __( 'No Contests found', 'skv' ),
	'not_found_in_trash' => __( 'No Contests found in Trash', 'skv' ),
	'parent_item_colon'  => __( 'Parent Contest:', 'skv' ),
	'menu_name'          => __( 'Contests', 'skv' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'contest-tax' ],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-tickets',
	'show_in_nav_menus'   => false,
	'publicly_queryable'  => true,
	'exclude_from_search' => false,
	'has_archive'         => false,
	'query_var'           => true,
	'can_export'          => true,
	'rewrite'             => true,
	'capability_type'     => 'post',
	'supports'            => [ 'title', 'thumbnail', 'editor', 'excerpt' ],
];
register_post_type( 'contest', $args );

$tax_labels = [
	'name' 				=> _x( 'Contest Types', 'skv' ),
	'singular_name' 	=> _x( 'Contest Type', 'skv' ),
	'search_items' 		=> __( 'Search Contest Types', 'skv' ),
	'all_items' 		=> __( 'All Contest Types', 'skv' ),
	'edit_item' 		=> __( 'Edit Contest Type', 'skv' ),
	'update_item' 		=> __( 'Update Contest Type', 'skv' ),
	'add_new_item' 		=> __( 'Add Contest Type', 'skv' ),
	'new_item_name' 	=> __( 'Create Contest Type', 'skv' ),
	'menu_name' 		=> __( 'Contest Types', 'skv' ),
	'parent_item'		=> __( 'Parent Contest Type:', 'skv' ),
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
register_taxonomy( 'contest-tax', 'contest', $tax_args );
