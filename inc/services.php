<?php
/*
* Creating a function to create our CPT
*/

function service_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'dark_portfolio' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'dark_portfolio' ),
		'menu_name'           => __( 'Services', 'dark_portfolio' ),
		'parent_item_colon'   => __( 'Parent Service', 'dark_portfolio' ),
		'all_items'           => __( 'All Services', 'dark_portfolio' ),
		'view_item'           => __( 'View Services', 'dark_portfolio' ),
		'add_new_item'        => __( 'Add New Service', 'dark_portfolio' ),
		'add_new'             => __( 'Add New', 'dark_portfolio' ),
		'edit_item'           => __( 'Edit Service', 'dark_portfolio' ),
		'update_item'         => __( 'Update Service', 'dark_portfolio' ),
		'search_items'        => __( 'Search Service', 'dark_portfolio' ),
		'not_found'           => __( 'Not Found', 'dark_portfolio' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'dark_portfolio' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'services', 'dark_portfolio' ),
		'description'         => __( 'Services for portfolio', 'dark_portfolio' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array( 'services','category' ),

		'rewrite' => [
			'slug' => '/services',
			'with_front' => false
		],
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,

	);

	// Registering your Custom Post Type
	register_post_type( 'services', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'service_post_type', 0 );
