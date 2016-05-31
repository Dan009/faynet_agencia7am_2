<?php 
    include("../confi/conf.inc.php");
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	
?>	

<div class="content_form"  id="content_pole_plan" >

			<div class="container_form">
<form id="pole_plan_form" name="pole_plan_form" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/data-file/pole.php">
				<div class="center_form">
                	<div id="container_form_pole_plan">
                    	<!-- AQUI CARGAN LOS COMPONENTES DEL POLE-->
                    </div>
                    
                    <div class="container_company" style="margin-bottom:10px;" >
						
						<div class="div_container_company div_container_company_uno" >
							<div class="div_title_company" > <div> CABLE INSTALLATION CONTRACTOR'S CONTACT </div> </div>
							
							<div class="div_select_company" >
								<select name="company_cable_pole">
									<option> COMPANY NAME </option>
									<?php 
										$consulta_company="SELECT * FROM usuarios WHERE estado='3' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										while($fila_company= mysqli_fetch_array($resultado_company)){
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
									<?php } ?>										
								</select>
							</div>
							<input type="text" name="contact_name_cable_pole" placeholder="CONTACT NAME" class="input_cable_inside" />
							<input type="text" name="contact_number_cable_pole" placeholder="CONTACT #" class="input_cable_inside" />
							<input type="text" name="contact_email_cable_pole" placeholder="CONTACT'S EMAIL" class="input_cable_inside" />
							
						</div>
				
					
						
					</div>	
					
                    <div class="div_file_inside" >
							<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside"> UPLOAD REDLINE PAGE </div> </div>
							<input type="file" name="redline_file_pole" />
                            <input type="hidden" name="pole" value="pole"/>
						</div>	
						
				</div>
				</form>
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