<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

switch ( $column ) {
	
	case 'task_deadline':
		$end_date= get_post_meta($post_id,'albdesign_task_end_date_field_id',true);
		echo $end_date;
		break;

	case 'task_for_project' :
		$task_id= get_post_meta($post_id,'albdesign_task_for_project_field',true);
		$project_title = get_the_title($task_id);
		echo '<a href="'.get_edit_post_link($task_id).'">' . $project_title .' </a>';
		break;

	case 'task_status':
		$status = get_post_meta($post_id,'albdesign_task_status_task_field',true);
		$task_status ='';
		
		
		switch ($status){
		
		
			case 'task_status_not_started':
				$task_status =   __('Not Started','simple-project-managment');  
			break;			
				
			case 'task_status_onhold':
				$task_status =   __('On Hold','simple-project-managment');  
				break;			
				
			case 'task_status_cancelled':
				$task_status =   __('Cancelled','simple-project-managment');  
				break;

			
			case 'task_status_ongoing':
				$task_status =    __('Ongoing','simple-project-managment');  
				break;
			
			case 'task_status_finished':
				$task_status =  '<span style="color:rgb(47, 195, 15);">'.  __('Completed','simple-project-managment') .'</span>';
				break;

		}
		
		echo $task_status ;
		
		break;			
}