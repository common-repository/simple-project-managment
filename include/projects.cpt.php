<?php


	$labels = array(
		'name'                => _x( 'Project', 'Post Type General Name', 'simple-project-managment' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'simple-project-managment' ),
		'menu_name'           => __( 'Projects', 'simple-project-managment' ),
		'parent_item_colon'   => __( 'Parent Project :', 'simple-project-managment' ),
		'all_items'           => __( 'Projects', 'simple-project-managment' ),
		'view_item'           => __( 'View Project', 'simple-project-managment' ),
		'add_new_item'        => __( 'Add Project', 'simple-project-managment' ),
		'add_new'             => __( 'Add Project', 'simple-project-managment' ),
		'edit_item'           => __( 'Edit Project', 'simple-project-managment' ),
		'update_item'         => __( 'Update Project', 'simple-project-managment' ),
		'search_items'        => __( 'Search Project', 'simple-project-managment' ),
		'not_found'           => __( 'No Project found', 'simple-project-managment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'simple-project-managment' ),
	);

	$args = array(
		'label'               => __( 'albdesign_Project', 'simple-project-managment' ),
		'description'         => __('Projects', 'simple-project-managment' ),
		'labels'              => $labels,
		'supports'            => array(),
		'taxonomies'          => array( 'project_taxonomy' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 75,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'page',
		
	);
	register_post_type( 'albdesign_project', $args );