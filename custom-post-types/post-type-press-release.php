<?php

$labels = [
	'name'               => __( 'Press Releases', 'skv' ),
	'singular_name'      => __( 'Press Release', 'skv' ),
	'add_new'            => _x( 'Add Press Release', 'skv', ),
	'add_new_item'       => __( 'Add Press Release', 'skv' ),
	'edit_item'          => __( 'Edit Press Release', 'skv' ),
	'new_item'           => __( 'New Press Release', 'skv' ),
	'view_item'          => __( 'View Press Release', 'skv' ),
	'search_items'       => __( 'Search Press Releases', 'skv' ),
	'not_found'          => __( 'No Press Releases found.', 'skv' ),
	'not_found_in_trash' => __( 'No Press Releases found in Trash.', 'skv' ),
	'parent_item_colon'  => __( 'Parent Press Release:', 'skv' ),
	'menu_name'          => __( 'Press Releases', 'skv' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-megaphone',
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
register_post_type( 'press-release', $args );
