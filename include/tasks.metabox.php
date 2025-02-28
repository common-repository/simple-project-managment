<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
	
	
	
/* 
* configure TASKS metaboxes
*/

	$prefix_tasks = 'albdesign_task_';

	$config = array(
		'id'             =>		'task_meta_box',          // meta box id, unique per meta box
		'title'          => 	apply_filters('albwppm_task_cpt_task_infos_metabox_title',__('Task Infos','simple-project-managment')),          // meta box title
		'pages'          => 	array('albdesign_task'),      // post types, accept custom post types as well, default is array('post'); optional
		'context'        => 	'normal',            // where the meta box appear: normal (default), advanced, side; optional
		'priority'       => 	'high',            // order of meta box: high (default), low; optional
		'fields'         => 	array(),            // list of meta fields (can be added by field arrays)
		'local_images'   => 	false,          // Use local or hosted images (meta box images for add/remove)
		'use_with_theme' => 	false          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
	);


/*
* Initiate your meta box
*/
	$tasks_meta =  new AT_Meta_Box($config);

//TASK is for project
	$tasks_meta->addPosts($prefix_tasks.'for_project_field',array('post_type' => 'albdesign_project'),array(
																											'name'			=>	apply_filters('albwppm_task_cpt_task_infos_metabox_associate_with_project_label_title',__('Associate to project','simple-project-managment')),
																											'emptylabel'	=>	apply_filters('albwppm_task_cpt_task_infos_metabox_associate_with_project_no_project_option',__('No project selected','simple-project-managment'))
																									)
																);

//TASK Start Date , end date 
	$tasks_meta->addDate($prefix_tasks.'start_date_field_id',array(
																'name'	=> apply_filters('albwppm_task_cpt_task_infos_metabox_start_date_label',__('Start Date','simple-project-managment')),
																'group' => 'start'
																)
														);
														
	$tasks_meta->addDate($prefix_tasks.'end_date_field_id',array(
																'name'	=> apply_filters('albwppm_task_cpt_task_infos_metabox_end_date_label',__('End Date','simple-project-managment')),
																'group' => 'end'
																)
														);

//TASK Status .... Lead , Ongoing , Finished
	$tasks_meta->addSelect($prefix_tasks.'status_task_field',array(
																'task_status_not_started'	=>	apply_filters('albwppm_task_cpt_metabox_task_status_not_started_text',__('Not Started','simple-project-managment')),
																'task_status_ongoing'		=>	apply_filters('albwppm_task_cpt_metabox_task_status_ongoing_text',__('Ongoing','simple-project-managment')),
																'task_status_onhold'		=>	apply_filters('albwppm_task_cpt_metabox_task_status_on_hold_text',__('On Hold','simple-project-managment')),
																'task_status_finished'		=>	apply_filters('albwppm_task_cpt_metabox_task_status_completed_text',__('Completed','simple-project-managment')),
																'task_status_cancelled'		=>	apply_filters('albwppm_task_cpt_metabox_task_status_cancelled_text',__('Cancelled','simple-project-managment'))
															),
															array(
																'name'	=>	apply_filters('albwppm_task_cpt_metabox_task_status_label_text',__('Task Status','simple-project-managment')),
																'std'	=>	array('task_status_not_started')
															)
														);


//TASK files
	$task_files[] = $tasks_meta->addText($prefix_tasks.'task_file_description_id',array(
																						'name'	=> apply_filters('albwppm_task_cpt_metabox_task_single_file_description_label',__('File Description','simple-project-managment'))
																					),
																					true
																				);
	
	$task_files[] = $tasks_meta->addFile($prefix_tasks.'task_file_field_id',array(
																					'name'	=>	apply_filters('albwppm_task_cpt_metabox_task_add_task_file_label',__('Add task file','simple-project-managment'))
																				),
																				true
																			);
	
	$tasks_meta->addRepeaterBlock($prefix_tasks.'re_tasks_',array(
															'inline'   	=>	false, 
															'name'     	=>	apply_filters('albwppm_task_cpt_metabox_task_file_label',__('Task Files','simple-project-managment')),
															'fields'   	=>	$task_files, 
															'sortable'	=>	true
														  )
									);

//Finish Meta Box Declaration 
	$tasks_meta->Finish();