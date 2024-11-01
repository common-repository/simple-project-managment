<div class="wrap" style="background-color: #fff;padding: 20px;">
	
		<table class="form-table albdesign_projects_reports_page reports_overview">
			
			<tr valign="top">
				
				<td style="text-align:center">					
					<p class="diagram_title"><?php  echo __('Completed Projects','simple-project-managment'); ?></p>
					<div class="albdesign_projects_diagram projects_progress"><strong></strong></div>	

					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('Total Projects','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Project_Helpers::get_all(); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>					

					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('Completed Projects','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Project_Helpers::get_by_status('completed'); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>	
				
					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('Lead Projects','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Project_Helpers::get_by_status('lead'); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>
					
					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('Ongoing Projects','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Project_Helpers::get_by_status('ongoing'); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>	

					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('On-hold Projects','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Project_Helpers::get_by_status('onhold'); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>		

					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('Awaiting Feedback','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Project_Helpers::get_by_status('awaiting_feedback'); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>			
					
					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('Status not set','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Project_Helpers::get_by_status('not_set'); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>
					
					
				</td>
				
				<td style="text-align:center">		
				
					<p class="diagram_title"><?php  echo __('Completed Tasks','simple-project-managment'); ?></p>		
					<div class="albdesign_projects_diagram tasks_progress"><strong></strong> </div>	

					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('Total Tasks','simple-project-managment'); ?></p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Tasks_Helpers::get_all(); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>
					
					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('Completed tasks','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Tasks_Helpers::get_by_status('completed'); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>	

					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('Ongoing Tasks','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Tasks_Helpers::get_by_status('ongoing'); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>			

					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('On-hold Projects','simple-project-managment'); ?>  </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Tasks_Helpers::get_by_status('onhold'); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>		

					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('Tasks not started','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Tasks_Helpers::get_by_status('not_started'); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>					
					
				</td>	
				
				<td style="text-align:center">

					<p class="diagram_title"> <?php  echo __('Paid Invoices','simple-project-managment'); ?> </p>		
					<div class="albdesign_projects_diagram invoices_progress"><strong></strong></div>
					
				
					<div class="breakdown_container">
						<div class="paid_title"> <p> <?php  echo __('Income','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Invoice_Helpers::get_invoices_amount_by_status('paid'); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>
					
					<div class="breakdown_container">
						<div class="unpaid_title"> <p><?php  echo __('Pending','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Invoice_Helpers::get_invoices_amount_by_status('unpaid'); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>					

					
					<div class="breakdown_container">
						<div class="breakdown_title"> <p> <?php  echo __('Total Invoices','simple-project-managment'); ?> </p></div>
						<div class="breakdown_value"> <p> <?php echo Albdesign_Projects_Invoice_Helpers::get_all(); ?> </p> </div>
						<div class="albdesign_clear"></div>
					</div>
					
					<div class="breakdown_container">
						<div class="breakdown_title"> <?php  echo __('Paid Invoices','simple-project-managment'); ?> </div>
						<div class="breakdown_value"><?php echo Albdesign_Projects_Invoice_Helpers::get_by_status('paid'); ?></div>
						<div class="albdesign_clear"></div>						
					</div>		

					<div class="breakdown_container">
						<div class="breakdown_title"> <?php  echo __('Unpaid Invoices','simple-project-managment'); ?> </div>
						<div class="breakdown_value"><?php echo Albdesign_Projects_Invoice_Helpers::get_by_status('unpaid'); ?></div>
						<div class="albdesign_clear"></div>						
					</div>		

					<div class="breakdown_container">
						<div class="breakdown_title"> <?php  echo __('Overdue Invoices','simple-project-managment'); ?> </div>
						<div class="breakdown_value"><?php echo Albdesign_Projects_Invoice_Helpers::get_by_status('overdue'); ?></div>
						<div class="albdesign_clear"></div>						
					</div>		

					<div class="breakdown_container">
						<div class="breakdown_title"> <?php  echo __('Cancelled Invoices','simple-project-managment'); ?> </div>
						<div class="breakdown_value"><?php echo Albdesign_Projects_Invoice_Helpers::get_by_status('cancelled'); ?></div>
						<div class="albdesign_clear"></div>						
					</div>						

				</td>					
			</tr>			

			
			
		</table>
		
	
</div>

<script>
	jQuery(document).ready(function(){
	
		
		//Projects % report
		jQuery('.albdesign_projects_reports_page .projects_progress').circleProgress({
			<?php if(Albdesign_Projects_Project_Helpers::get_all() > 0) { ?>
				value: <?php echo (Albdesign_Projects_Project_Helpers::get_by_status('completed') / Albdesign_Projects_Project_Helpers::get_all()); ?>,
			<?php } else { ?>
				value: 0,
			<?php } ?>
			size: 200,
			thickness:30,
			startAngle: -1.57,
			fill: {
			  gradient: ['#3aeabb', '#3aeabb']
			}}
			).on('circle-animation-progress', function(event, progress, stepValue) {
				jQuery(this).find('strong').html(parseInt(100 * stepValue) + '<i>%</i>');
			});
		
		
		//Tasks % report
		jQuery('.albdesign_projects_reports_page .tasks_progress').circleProgress({
			<?php if(Albdesign_Projects_Tasks_Helpers::get_all() > 0) { ?>
				value: <?php echo (Albdesign_Projects_Tasks_Helpers::get_completed() / Albdesign_Projects_Tasks_Helpers::get_all()); ?>,
			<?php }else{ ?>
				value: 0,
			<?php } ?>
			size: 200,
			thickness:30,
			startAngle: -1.57,
			fill: {
			  gradient: ['#3aeabb', '#3aeabb']
			}}
			).on('circle-animation-progress', function(event, progress, stepValue) {
				jQuery(this).find('strong').html(parseInt(100 * stepValue) + '<i>%</i>');
			});			
		
		
		
		//Invoices % report
		jQuery('.albdesign_projects_reports_page .invoices_progress').circleProgress({
			value: <?php echo Albdesign_Projects_Invoice_Helpers::get_paid_invoices_percent(); ?>,
			size: 200,
			thickness:30,
			startAngle: -1.57,
			fill: {
			  gradient: ['#3aeabb', '#3aeabb']
			}}
			).on('circle-animation-progress', function(event, progress, stepValue) {
				jQuery(this).find('strong').html(parseInt(100 * stepValue) + '<i>%</i>');
			});	
		
						
	});
</script>