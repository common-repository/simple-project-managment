<?php


	$labels = array(
		'name'                => _x( 'Client', 'Post Type General Name', 'simple-project-managment' ),
		'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'simple-project-managment' ),
		'menu_name'           => __( 'Clients', 'simple-project-managment' ),
		'parent_item_colon'   => __( 'Parent Client :', 'simple-project-managment' ),
		'all_items'           => __( 'Clients', 'simple-project-managment' ),
		'view_item'           => __( 'View Client', 'simple-project-managment' ),
		'add_new_item'        => __( 'Add Client', 'simple-project-managment' ),
		'add_new'             => __( 'Add Client', 'simple-project-managment' ),
		'edit_item'           => __( 'Edit Client', 'simple-project-managment' ),
		'update_item'         => __( 'Update Client', 'simple-project-managment' ),
		'search_items'        => __( 'Search Client', 'simple-project-managment' ),
		'not_found'           => __( 'No Client found', 'simple-project-managment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'simple-project-managment' ),
	);

	$args = array(
		'label'               => __( 'albdesign_Client', 'simple-project-managment' ),
		'description'         => __('Clients', 'simple-project-managment' ),
		'labels'              => $labels,
		'supports'            => array(),
		'taxonomies'          => array( 'project_taxonomy' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		
		'show_in_menu'        => 'edit.php?post_type=albdesign_project',
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 75,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'page',
		
	);
	register_post_type( 'albdesign_client', $args );
