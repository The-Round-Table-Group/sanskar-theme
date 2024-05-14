<?php

$labels = [
	'name'               => __( 'Events', 'skv' ),
	'singular_name'      => __( 'Event', 'skv' ),
	'add_new'            => _x( 'Add Event', 'skv', ),
	'add_new_item'       => __( 'Add Event', 'skv' ),
	'edit_item'          => __( 'Edit Event', 'skv' ),
	'new_item'           => __( 'New Event', 'skv' ),
	'view_item'          => __( 'View Event', 'skv' ),
	'search_items'       => __( 'Search Events', 'skv' ),
	'not_found'          => __( 'No Events found', 'skv' ),
	'not_found_in_trash' => __( 'No Events found in Trash', 'skv' ),
	'parent_item_colon'  => __( 'Parent Event:', 'skv' ),
	'menu_name'          => __( 'Events', 'skv' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'event-tax' ],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-location',
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
register_post_type( 'event', $args );

$tax_labels = [
	'name' 				=> _x( 'Event Types', 'skv' ),
	'singular_name' 	=> _x( 'Event Type', 'skv' ),
	'search_items' 		=> __( 'Search Event Types', 'skv' ),
	'all_items' 		=> __( 'All Event Types', 'skv' ),
	'edit_item' 		=> __( 'Edit Event Type', 'skv' ),
	'update_item' 		=> __( 'Update Event Type', 'skv' ),
	'add_new_item' 		=> __( 'Add Event Type', 'skv' ),
	'new_item_name' 	=> __( 'Create Event Type', 'skv' ),
	'menu_name' 		=> __( 'Event Types', 'skv' ),
	'parent_item'		=> __( 'Parent Event Type:', 'skv' ),
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
register_taxonomy( 'event-tax', 'event', $tax_args );
