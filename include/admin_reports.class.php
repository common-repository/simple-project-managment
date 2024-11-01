<?php
class Albdesign_Projects_Reports_Page{

	//Under which name to save the array of options
	static private $slug = 'albdesign_project_reports_page_slug';

	
	static function get_slug(){
		return self::$slug;
	}
	
	
	/*
	* Admin Reports tabs
	*/
	static function admin_tabs($current=NULL){
	
		$my_plugin_tabs = array(
			'albdesign-project-Reports&tab=overview' => __('Overview','simple-project-managment'),
			'albdesign-project-Reports&tab=projects' => __('Projects','simple-project-managment'),
			'albdesign-project-Reports&tab=clients' => __('Clients','simple-project-managment'),
			'albdesign-project-Reports&tab=invoices' => __('Invoices','simple-project-managment'),

		);

	
		if(is_null($current)){
			if(isset($_GET['tab'])){
				$current = $_GET['tab'];
			}else{
				$current ='overview';
			}
		}
		
		
		$header_tabs = '';
		$header_tabs .= '<h2 class="nav-tab-wrapper">';
		
		foreach($my_plugin_tabs as $location => $tabname){
			
			
			$class = ($current == self::get_tab_slug_from_tab_url($location)) ? ' nav-tab-active' :  ''; 
			
			
			
			$header_tabs .= '<a class="nav-tab'.$class.'" href="?post_type=albdesign_project&page='.$location.'">'.$tabname.'</a>';
		}
		
		$header_tabs .= '</h2>';
		
		switch($current){
			
			case 'overview' :
				$include_tab_content = 'overview_tab_content.php';
				break;
			
			case 'projects' :
				$include_tab_content = 'projects_tab_content.php';
				break;
				
			case 'clients' :
				$include_tab_content = 'clients_tab_content.php';
				break;	
				
			case 'invoices' :
				$include_tab_content = 'invoices_tab_content.php';
				break;		
			
			default :
				$include_tab_content = 'overview_tab_content.php';
				
		}
				
		echo  $header_tabs;
		
		require_once('helpers/reports_pages/'.$include_tab_content);

	}	
	
	
	/*
	* Get tab slug from URL
	* So the translation doesnt interfer with active tab 
	*/
	
	public static function get_tab_slug_from_tab_url($url){
		
		preg_match('/albdesign-project-Reports&tab=(.*)/',$url,$matched_string);
		return($matched_string[1]);
		
		
	}
	
	/*
	* Show report specific page 
	*/

	static function show_tab($which ='overview'){
		return self::admin_tabs($which);
	}
	
} //end class
