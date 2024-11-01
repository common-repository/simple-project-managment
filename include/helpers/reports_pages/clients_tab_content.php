<div class="wrap" style="background-color: #fff;padding: 20px;">
	<h1><?php echo __('Clients Tab','simple-project-managment') ?></h1>

		<table class="form-table albdesign_projects_reports_page">

			<tr valign="top">
				<td class="albdesign_projects_report_projects_tab_form">
					<form method="post" >

						<div>
							<div class="albdesign_input">
								<div class="albdesign_input_header"><?php echo __('Client','simple-project-managment') ?></div>
								<?php Albdesign_Projects_Clients_Helpers::get_all_as_dropdown() ;?>
							</div>
							
							<div class="albdesign_input">
								<div class="albdesign_input_header"><?php echo __('Name','simple-project-managment') ?></div>							
								<?php echo Albdesign_Projects_Clients_Helpers::create_input('first_name'); ?>
							</div>	
							
							<div class="albdesign_input">
								<div class="albdesign_input_header"><?php echo __('Surname','simple-project-managment') ?></div>	
								<?php echo Albdesign_Projects_Clients_Helpers::create_input('last_name'); ?>				

							</div>								
							
							<div class="albdesign_input">
								<div class="albdesign_input_header"><?php echo __('Email','simple-project-managment') ?></div>							
								<?php echo Albdesign_Projects_Clients_Helpers::create_input('email'); ?>	
							</div>
							
							<div class="albdesign_input">
								<div class="albdesign_input_header"><?php echo __('Phone','simple-project-managment') ?></div>
									<?php echo Albdesign_Projects_Clients_Helpers::create_input('phone'); ?>
							</div>		
							
							<div class="albdesign_input">
								<div class="albdesign_input_header"><?php echo __('Mobile','simple-project-managment') ?></div>
									<?php echo Albdesign_Projects_Clients_Helpers::create_input('mobile'); ?>
							</div>
					
							<div class="albdesign_input">
								<div class="albdesign_input_header">Skype</div>
									<?php echo Albdesign_Projects_Clients_Helpers::create_input('skype'); ?>
							</div>									
							
							<div class="albdesign_input">
								<div class="albdesign_input_header">&nbsp;</div>							
								<input type="submit" class="button button-primary button-large" name="<?php echo Albdesign_Projects_Reports_Page::get_slug();?>"  value="<?php echo __('Search Clients','simple-project-managment') ?>">
							</div>
							
							<div class="albdesign_clear"></div>
						</div>
						
					</form>
				</td>
			</tr>
		</table>
		
		
		<table>
			<tr>
				<td>
					<?php echo Albdesign_Projects_Clients_Helpers::get_results_for_report(); ?>
				</td>
			</tr>
		</table>
		
</div>

