<?php 
    include("../confi/conf.inc.php");
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	
?>	
<div id="content_as_built_pole" >

<div class="title_content_option_pole open_asbuilt" > 
							<div class="div_title_content_option_pole"  >
								AS-BUILT POLE PLAN TASK
							<div class="div_option_radio_inside" >
									<input type="radio" name="as_built_pole" id="as_built_pole" value="si"  />
									<label for="as_built_pole" > Yes </label>
									
									<input type="radio" name="as_built_pole" id="no_built_pole" value="no" class="radio_click" checked />
									<label for="as_built_pole" > No </label>
								</div>
							</div>
						</div>
                        
					<div class="open_content_asbuilt">
					<div class="div_option_pole" > 
							
							<div class="text_option_pole" > AS-BUILT LICENSED POLE PLANS NEEDED </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="as_built_licensed_pole" id="si_as_built_licensed_pole" value="si" />
									<label for="si_as_built_licensed_pole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="as_built_licensed_pole" id="no_as_built_licensed_pole" value="no" checked/>
									<label for="no_as_built_licensed_pole">No</label>
								</div>
								
							</div>
							
						</div>
							
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > GIS AS-BUILT FILE NEED </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="gis_as_built_file_pole" id="si_gis_as_built_file_pole" value="si" />
									<label for="si_gis_as_built_file_pole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="gis_as_built_file_pole" id="no_gis_as_built_file_pole" value="no" checked />
									<label for="no_gis_as_built_file_pole">No</label>
								</div>
								
							</div>
							
						</div>
												
						
						
						
					</div>
						<div class="content_option_pole" >
						
					
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > <label for="check_as_built_licensed_pole" > AS-BUILT LICENSED POLE PLANS NEEDED </label> </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >									
									<input type="checkbox" name="check_as_built_licensed_pole" id="check_as_built_licensed_pole" value="si" />						
								</div>
																
							</div>
							
						</div>
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > <label for="check_as_built_file_pole" > GIS AS-BUILT FILE NEED </label> </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >									
									<input type="checkbox" name="check_as_built_file_pole" id="check_as_built_file_pole" value="si" />						
								</div>
																
							</div>
							
						</div>
					
						
						<div class="container_div_select_under_pole" style="margin-top: 10px;" >
						
							<div class="text_option_pole"> 
								<input type="text" name="from_aerial_route_pole" class="input_from_aerial_route_pole" placeholder="From" />
								<input type="text" name="to_aerial_route_pole" class="input_from_aerial_route_pole" placeholder="To" />
							</div>
							<div class="input_aerial_route_pole"> 
								<div class="text_input_aerial_route_pole"> PROPOSED AERIAL ROUTE LENGTH  </div>
								<input type="text" name="length_aerial_route_pole" class="input_from_aerial_route_pole" placeholder="FT" />
								
							</div>
						
						</div>
														
						<div class="container_option_under_pole" style="margin-top: 10px;" > 
							<div class="container_div_select_under_pole"  >
							
								<textarea placeholder="SCOPE WORK" name="scope_work_proposed_pole_railroad_dos" ></textarea>
								
							
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