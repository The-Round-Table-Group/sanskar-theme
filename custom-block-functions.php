<?php
// This functions file is for all custom blocks added via ACF
// Reference: https://advancedcustomfields.com/resources/acf_register_block_type/

if ( function_exists('acf_register_block_type') ) :
	include 'custom-block-callback.php'; // pass-off to let Timber render the blocks

	// inline button block
	$button_block = [
		'name' => 'button-block',
		'title' => __( 'Button Block', 'skv' ),
		'description' => __( 'Creates an inline button with text/background colors of your choice. Limited to theme colors for consistency.', 'skv' ),
		'render_callback' => 'custom_block_callback',
		'category' => 'skv-blocks',
		'align' => 'wide',
		'icon' => 'button',
		'mode' => 'auto',
		'supports' => [ 'mode' => true ],
		'keywords' => [ 'skv', 'block', 'button', 'a', 'href', 'link', 'url' ]
	];
	acf_register_block_type( $button_block );

    // $ = [
	// 	'name' => '',
	// 	'title' => __( '', 'skv' ),
	// 	'description' => __( '', 'skv' ),
	// 	'render_callback' => 'custom_block_callback',
	// 	'category' => 'skv-blocks',
	// 	'align' => 'wide',
	// 	'icon' => 'insert',
	// 	'mode' => 'auto',
	// 	'supports' => [ 'mode' => true ],
	// 	'keywords' => [ 'skv', 'block' ]
	// ];
	// acf_register_block_type( $ );
endif;
