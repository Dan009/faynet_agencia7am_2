<?php 
    include("../confi/conf.inc.php");
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	
?>	
<div id="content_proposed_pole" >


                
					<div class="title_content_option_pole open_pole" style="border: 1px solid rgb(240,240,240);"> 
							<div class="div_title_content_option_pole" >
								PROPOSED POLE PLAN TASK
                                <div class="div_option_radio_inside" >
									<input type="radio" name="pole_plan_task" id="si_pole_plan_task" value="si"  />
									<label for="si_pole_plan_task" > Yes </label>
									
									<input type="radio" name="pole_plan_task" id="no_pole_plan_task" value="no" class="radio_click" checked />
									<label for="no_pole_plan_task" > No </label>
								</div>
							
							</div>
						</div>
						
						
						<div class="container_click_check_pole container_open_pole">
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > CONSTRUCTION PROPOSED POLE PLANS NEEDED </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="construction_pole" id="construction_pole" value="si" />
									<label for="construction_pole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="construction_pole" id="construction_pole" value="no" checked />
									<label for="construction_pole">No</label>
								</div>
								
							</div>
							
						</div>
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > GPS FIELD SURVEY POLE NEEDED </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="gsp_field_pole" value="si" />
									<label for="gsp_field_pole" >Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="gsp_field_pole" value="no" checked />
									<label for="gsp_field_pole">No</label>
								</div>
								
							</div>
							
						</div>
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > LICENSE PROPOSED POLE PLANS NEEDED </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="license_proposed_pole" id="si_license_proposed_pole" value="si" />
									<label for="si_license_proposed_pole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="license_proposed_pole" id="no_license_proposed_pole" value="no" checked />
									<label for="no_license_proposed_pole">No</label>
								</div>
								
							</div>
							
						</div>
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > MEASURE HEIGHT OF ATTACHED CABLES NEED </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="measure_height_pole" id="si_measure_height_pole" value="si" />
									<label for="si_measure_height_pole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="measure_height_pole" id="no_measure_height_pole" value="no" checked />
									<label for="no_measure_height_pole">No</label>
								</div>
								
							</div>
							
						</div>
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > LICENSE FORMS NEEDED </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="license_forms_pole" id="si_license_forms_pole" value="si" />
									<label for="si_license_forms_pole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="license_forms_pole" id="no_license_forms_pole" value="no" checked />
									<label for="no_license_forms_pole">No</label>
								</div>
								
							</div>
							
						</div>
						
						
					</div>
                    
					
					
				</div>
				
			</div>
			<script>
				$(document).ready(function(){
				
				 $('input').iCheck({
					checkboxClass: 'icheckbox_square',
					radioClass: 'iradio_square',
					increaseArea: '20%' // optional
				  });
				  
				  
					//$('input').iCheck('update');
					$('input ').on('ifClicked ', function(event) {
						if ($(this).attr("name")=="new_building" ) {
							
						} else {
							
							if ($(this).attr("value")=="si" ) {
								
								$(this).parents(".open_pole").siblings(".container_open_pole").css({
									"height":"auto",
									"border":"1px solid rgb(240,240,240)",
									"height":"auto",
									"border-top":"none",
									"padding-bottom":"10px"
								});
								
								$(this).parents(".title_content_option_inside").siblings(".container_click_option_inside").css({
									"height":"auto"
								});
								
								$(this).parents(".container_radio_option_pole").siblings(".container_click_other_pole").css({
									"height":"auto"
								});
								
								$(this).parents(".open_asbuilt").siblings(".open_content_asbuilt").css({
									"height":"auto",
									"border":"1px solid rgb(240,240,240)",
									"padding-bottom":"10px",
									"border-top":"none"
								});
								
							}else{
								
								$(this).parents(".open_pole").siblings(".container_open_pole").css({
									"height":"0px",
									"border":"none",
									"padding-bottom":"0px"
									
								});
								
								$(this).parents(".title_content_option_inside").siblings(".container_click_option_inside").css({
									"height":"0px"
									
								});
								$(this).parents(".container_radio_option_pole").siblings(".container_click_other_pole").css({
									"height":"0px"
									
									
								});
								
								
								$(this).parents(".open_asbuilt").siblings(".open_content_asbuilt").css({
									"height":"0px",
									"border":"none",
									"padding-bottom":"0px"
									
								});
								
								
								
								
									
							}
							
							if($(this).attr("class")=="click_check" ){
								
								if( $(this).is(':checked') ){
									// aqui no esta en checked
									$(this).parents(".title_container_option_survey").siblings(".container_click_check_inside").css({
										"height":"0px"										
									})
																		
								}else{
									// aqui esta en checked
									$(this).parents(".title_container_option_survey").siblings(".container_click_check_inside").css({
										"height":"auto"										
									})									
									
								}
								
							}
							
							
							
							
							
						}
					});	
								  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				});
			</script>

</div>