<?php


	$labels = array(
		'name'                => _x( 'Task', 'Post Type General Name', 'simple-project-managment' ),
		'singular_name'       => _x( 'Task', 'Post Type Singular Name', 'albdesign_project' ),
		'menu_name'           => __( 'Tasks', 'simple-project-managment' ),
		'parent_item_colon'   => __( 'Parent Task :', 'simple-project-managment' ),
		'all_items'           => __( 'Tasks', 'simple-project-managment' ),
		'view_item'           => __( 'View Task', 'simple-project-managment' ),
		'add_new_item'        => __( 'Add Task', 'simple-project-managment' ),
		'add_new'             => __( 'Add Task', 'simple-project-managment' ),
		'edit_item'           => __( 'Edit Task', 'simple-project-managment' ),
		'update_item'         => __( 'Update Task', 'simple-project-managment' ),
		'search_items'        => __( 'Search Task', 'simple-project-managment' ),
		'not_found'           => __( 'No Task found', 'simple-project-managment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'simple-project-managment' ),
	);

	$args = array(
		'label'               => __( 'albdesign_Task', 'simple-project-managment' ),
		'description'         => __('Tasks', 'simple-project-managment' ),
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
	register_post_type( 'albdesign_task', $args );
