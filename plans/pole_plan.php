<?php 
    include("../confi/conf.inc.php");
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	
?>	
<script type="text/javascript">
/////////////////////////////////////////////////////////////
//////////PARA SUBIR ARCHIVOS GENERAL E INSIDE /////////////
///////////////////////////////////////////////////////////
 			function subirArchivosPole() {
				$("#archivo_pole").upload('include/subir_archivo.php',
                {
                   	nombre_archivo: $("#nombre_archivo_pole").val(),
					code: $("#code").val(),
					type: $("#type_pole").val()
					
				},
				
                function(respuesta) {
                    //Subida finalizada.
                    $("#barra_de_progreso_pole").val(0);
                    if (respuesta === 0) {
                        mostrarRespuestaPole('El archivo NO se ha podido subir.', false);
                        $("#nombre_archivo_pole, #archivo_pole").val('');
                    } else {
						var type =  $("#type_pole").val()
						
						$.get("include/select_temp.php", function (data) {
                   		 $(".temp").append(data);
                		});
						
						$(".editor_imagenes").fadeIn(200);
                        mostrarRespuestaPole('Subido Correctamente.', true);
						mostrarArchivosPole();
						
						$.get("include/editor.php", function (data) {
							$(".editor_imagenes_content").append(data);
                		});
						
						$("body").css({ 'overflow': "hidden" });
					}
                    
                }, function(progreso, valor) {
                    //Barra de progreso.
                    $("#barra_de_progreso_pole").val(valor);
                });
            }
			//Eliminar archivo
            function eliminarArchivosPole() {
				var id = $(".eliminar_archivo_pole").attr('id')  
	
                $.ajax({
                    url: 'include/eliminar_archivo.php',
                    type: 'POST',
                    timeout: 10000,
                    data: {id: id},
                    error: function() {
                        mostrarRespuestaPole('Error al intentar eliminar el archivo.', false);
                    },
                    success: function(respuesta) {
                        if (respuesta == 1) {
                            mostrarRespuestaPole('El archivo ha sido eliminado.', true);
							
                        } else {
							 
                            mostrarRespuestaPole('Error al intentar eliminar el archivo.', false);  
							                       
                        }
						
                    }
                });
            }
            function mostrarArchivosPole() {
				code = $("#code").val()
				type =  $("#type_pole").val()
				
				
                $.ajax({
                    url: 'include/mostrar_archivos.php',
                    type: 'POST',
					data: {type:type, code:code},
                    success: function(data) {
                            
                            $("#archivos_subidos_pole").append(data);
                        
                    }
                });
            }
            function mostrarRespuestaPole(mensaje, ok){
                $("#respuesta_pole").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                if(ok){
                    $("#respuesta_pole").addClass('alert-success');
                }else{
                    $("#respuesta_pole").addClass('alert-danger');
                }
            }
            $(document).ready(function() {
                mostrarArchivosPole();
                $("#boton_subir_pole").on('click', function() {
                    subirArchivosPole();
					var name = $(this).attr('name');
                });
                $("#archivos_subidos_pole").on('click', '.eliminar_archivo_pole', function() {
                    var archivo = $(this).parents('.row').eq(0).find('span').text();
                    archivo = $.trim(archivo);
                    eliminarArchivosPole(archivo);
                });
            });
        </script>

   <script>

$(document).ready(function() {
    $("#submit_request").click(function() {
        
		  $.post($("#pole_plan_form").attr("action"), $("#pole_plan_form").serialize(),
          function(data) {
            $(".hola").append(data);
            
			
          });
      });
  });

</script>	



<div class="content_form content_oculto"  id="content_pole_plan" >

			<div class="container_form" >

				<div class="center_form" >

					<div class="title_center_form" > POLE PLAN REQUEST</div>		
	
				</div>
				
			</div>
<form id="pole_plan_form" name="pole_plan_form" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/data-file/pole.php" >
			<div class="container_form">

				<div class="center_form">
                
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
						
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside jairo" > 
							<div class="div_title_content_option_inside"  >
								OUTSIDE UTILITY APPLICATION TASK
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_outside_utility_task" id="si_outside_utility_task" value="si" class="radio_click" />
									<label for="si_outside_utility_task" > Yes </label>
									
									<input type="radio" name="si_outside_utility_task" id="no_outside_utility_task" value="no" class="radio_click" checked />
									<label for="no_outside_utility_task" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside jairo2" >
							<div class="container_option_survey" >
							
								<div class="div_select_survey">
									
									<select name="company_outside_pole" >
										<option> Assigned company </option>
										<?php 
											$consulta_company="SELECT * FROM usuarios WHERE estado='3' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
										<?php } ?>										
									</select>
								
								</div>
								<div class="div_select_survey">
									
									<select name="contact_outside_pole" >
										<option> Contact</option>
										<?php 
											$consulta_company="SELECT * FROM contact WHERE estado='1' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>
										<?php } ?>										
									</select>
								
								</div>	


				
							</div>
							
							<div class="container_option_under_pole" > 
							
								<div class="div_option_under_pole" >
                               
                               		<div class="text_option_pole" style="">UNDERGROUND APPLICATION </div>
									
                                    
                                    <div class="container_radio_option_pole" style="margin-right:10px; margin-left:10px;">
                                    <label for="nounderground_application" style="margin-right:6px;"> No </label>
                                    <input type="radio" name="underground_application" id="underground_application" value="no" checked />
                                    
                                    </div>
                                    
                                    <div class="container_radio_option_pole" style="margin-right:10px; margin-left:60px;">
									<input type="radio" name="underground_application" id="underground_application" value="si" />
                                    <label for="yesunderground_application" style="margin-right:6px;" > yes </label>
                                     </div>
                                    
									
									
									
								</div>
								<div class="div_option_under_pole" >
                                    
                                    
                                    <div class="text_option_pole" style="">AERIAL APPLICATION</div>
                                    <div class="container_radio_option_pole" style="margin-right:10px; margin-left:10px;">
                                    <label for="noaerial_application" style="margin-right:6px;"> No </label>
                                    <input type="radio" name="aerial_application" id="underground_application" value="no" checked />
                                    
                                    </div>
                                    
                                    <div class="container_radio_option_pole" style="margin-right:10px; margin-left:60px;">
									<input type="radio" name="aerial_application" id="siaerial_application" value="si" />
                                    <label for="yesunderground_application" style="margin-right:6px;" > yes </label>
                                     </div>
                                    
									
								</div>
							
							</div>	
							
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > Application Needed For: </div>
									<div class="select_under_pole">
										<select name="company_application_needed">
											<option value="" > Select </option>
										<?php 
											$consulta_company="SELECT * FROM company WHERE estado='1' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
										<?php } ?>												
										</select>
									</div>	
									<div class="select_under_pole">
										<select name="contact_application_needed">
											<option value="" > Select </option>
										<?php 
											$consulta_company="SELECT * FROM contact WHERE estado='1' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>
										<?php } ?>													
										</select>
									</div>
								
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > CUST. CABLE COUNT </div>
								
									<input type="text" name="cust_cable_count" class="input_under_pole" />
								
									<div class="text_div_select_under_pole" > CUST. TIE LOC TO NET </div>
								
									<input type="text" name="cust_loc_net" class="input_under_pole" />
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_under_pole" placeholder="Text Here" ></textarea>
								</div>
								
							
							</div>							
							
						</div>
						
					</div>
									
					
					<div class="content_option_inside" >
						
						<div class="title_content_option_pole" > 
							<div class="div_title_content_option_pole"  >
								OTHER REQUEST TASK
							
							</div>
							
						</div>
						<div class="div_option_other_pole"  > 
							
							<div class="text_option_pole" style="margin-bottom: 10px;" > HIGHWAY TRAFFIC PLANS NEEDED </div>
							<div class="container_radio_option_pole" style="float:left;margin-left:50px;" >
								<div class="margin_radio_pole" >
									<input type="radio" name="si_hightway_traffic_pole" id="si_hightway_traffic_pole" value="si" />
									<label for="si_hightway_traffic_pole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="si_hightway_traffic_pole" id="no_hightway_traffic_pole" value="no" checked />
									<label for="no_hightway_traffic_pole">No</label>
								</div>
								
							</div>
							
							<div class="container_click_other_pole" >
							
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_pole" class="input_highway_pole" />
									
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED  </div>
									
										<input type="text" name="date_task_requested_pole" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE  </div>
									
										<input type="text" name="expected_return_date_pole" class="input_highway_pole" />
									</div>
									
								
								</div>	
								
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > PROPOSED TMP LENGTH </div>
									
										<input type="text" name="proposed_tmp_length_pole" class="input_highway_pole" />
									
									</div>

									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
										<label for="highway_proposed_pole"> Highway Traffic  Management proposed plans </label>
										<div class="container_radio_option_pole" style="float:left;margin-left:50px;" >
											<div class="margin_radio_pole" >
												<input type="radio" name="si_hightway_traffic_pole" id="si_hightway_traffic_pole" value="si" />
												<label for="si_hightway_traffic_pole" > Yes</label>
											</div>
											
											<div class="margin_radio_pole">
												<input type="radio" name="si_hightway_traffic_pole" id="no_hightway_traffic_pole" value="no" checked />
												<label for="no_hightway_traffic_pole">No</label>
											</div>
								
										</div>
									
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
										<label for="engineering_plans_polee"> Engineering Stamped Plans needed </label>
											<div class="container_radio_option_pole" style="float:left;margin-left:50px;" >
												<div class="margin_radio_pole" >
												<input type="radio" name="si_hightway_traffic_pole" id="si_hightway_traffic_pole" value="si" />
												<label for="si_hightway_traffic_pole" > Yes</label>
												</div>
								
											<div class="margin_radio_pole">
												<input type="radio" name="si_hightway_traffic_pole" id="no_hightway_traffic_pole" value="no" checked />
												<label for="no_hightway_traffic_pole">No</label>
											</div>
								
											</div>
										
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="text" name="from_proposed_pole" class="input_highway_pole" placeholder="From" />
										<input type="text" name="to_proposed_pole" class="input_highway_pole" placeholder="To" />
										
									
									</div>
									
								
								</div>	
							
								<div class="container_option_under_pole" style="" > 
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<textarea placeholder="SCOPE WORK" name="scope_work_proposed_pole" ></textarea>
										
									
									</div>							
								</div>
							
							</div>
							
							
						</div>
						
						<div class="div_option_other_pole" style="margin-bottom:10px;" > 
							
							<div class="text_option_pole" style="margin-bottom: 10px;" > RAILROAD CROSSING PLANS NEEDED </div>
							<div class="container_radio_option_pole" style="float:left;margin-left:37px;">
								<div class="margin_radio_pole" >
									<input type="radio" name="si_railroad_pole" id="si_railroad_pole" value="si" />
									<label for="si_railroad_pole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="si_railroad_pole" id="no_railroad_pole" value="no" checked />
									<label for="no_railroad_pole">No</label>
								</div>
								
							</div>
							
						
							<div class="container_click_other_pole" >
							
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_pole_railroad" class="input_highway_pole" />
									
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED  </div>
									
										<input type="text" name="date_task_requested_pole_railroad" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE  </div>
									
										<input type="text" name="expected_return_date_pole_railroad" class="input_highway_pole" />
									</div>
									
								
								</div>	
								
								<div class="container_option_under_pole" > 								
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
										<label for="highway_proposed_pole"> Highway Traffic  Management proposed plans </label>
										<div class="container_radio_option_pole" style="float:left;margin-left:50px;" >
											<div class="margin_radio_pole" >
												<input type="radio" name="si_hightway_traffic_pole" id="si_hightway_management_proposed" value="si" disabled="disabled" <?php  if ($row_highway_traffic_pole_plan['other_highway_traffic'] == 'si') { echo "checked";} ?> />
												<label for="si_hightway_management_proposed" > Yes</label>
											</div>
											
											<div class="margin_radio_pole">
												<input type="radio" name="si_hightway_traffic_pole" id="no_management_proposed" value="no"  disabled="disabled" <?php  if ($row_highway_traffic_pole_plan['other_highway_traffic'] == 'no') { echo "checked";} ?>/>
												<label for="no_management_proposed">No</label>
											</div>
								
										</div>
									
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
										<label for="engineering_plans_polee"> Engineering Stamped Plans needed </label>
											<div class="container_radio_option_pole" style="float:left;margin-left:50px;" >
												<div class="margin_radio_pole" >
												<input type="radio" name="si_hightway_traffic_pole" id="si_hightway_stamped_plans" value="si" disabled="disabled" <?php  if ($row_highway_traffic_pole_plan['other_highway_engineering_plans_pole'] == 'si') { echo "checked";} ?>/>
												<label for="si_hightway_stamped_plans" > Yes</label>
												</div>
								
											<div class="margin_radio_pole">
												<input type="radio" name="si_hightway_traffic_pole" id="no_hightway_stamped_plans" value="no" disabled="disabled" <?php  if ($row_highway_traffic_pole_plan['other_highway_engineering_plans_pole'] == 'no') { echo "checked";} ?> />
												<label for="no_hightway_stamped_plans">No</label>
											</div>
								
											</div>
										
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="text" name="from_proposed_pole_railroad" class="input_highway_pole" placeholder="From" />
										<input type="text" name="to_proposed_pole_railroad" class="input_highway_pole" placeholder="To" />
										
									
									</div>
									
								
								</div>	
							
								<div class="container_option_under_pole" > 
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<textarea placeholder="SCOPE WORK" name="scope_work_proposed_pole_railroad" ></textarea>
                                       
										
									
									</div>							
								</div>
							
							</div>
														
							
							
							
							
							
						</div>
						
						
					
					</div>
											
					<div class="container_company" style="margin-bottom:10px;" >
						
						<div class="div_container_company div_container_company_uno" >
							<div class="div_title_company" > <div> CABLE INSTALLATION CONTRACTOR'S CONTACT </div> </div>
							
							<div class="div_select_company" >
								<select name="company_cable">
									<option value="0"> COMPANY NAME </option>
									<?php 
										$consulta_company="SELECT * FROM usuarios WHERE estado='3' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										while($fila_company= mysqli_fetch_array($resultado_company)){
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
									<?php } ?>										
								</select>
							</div>
							<input type="text" name="contact_name_cable" placeholder="CONTACT NAME" class="input_cable_inside" />
							<input type="text" name="contact_number_cable" placeholder="CONTACT #" class="input_cable_inside" />
							<input type="text" name="contact_email_cable" placeholder="CONTACT'S EMAIL" class="input_cable_inside" />
							
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
                   				<input type="hidden" name="code_plan" id="code" value="<?php echo $_SESSION['time_code']; ?>"/>
                                <input type="hidden" name="type_plan" value="pole_plan"/>
							
							</div>							
						</div>												
						
						
						
						
					</div>
					
																
					
</form>

				<div class="containerprueba">
    
    		<form action="javascript:void(0);" id="form_archivo_pole" name="pole">
            <div class="div_file_inside" >
				<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside">UPLOAD FILE (JPG OR PNG)</div> </div>
               <input type="file" name="archivo" id="archivo_pole" />
            </div>  
               <input type="hidden" name="code" id="code" value="<?php echo $time_code_inside; ?>"/>
               <input type="hidden" name="type" id="type_pole" value="pole_plan"/>
               <input type="submit" id="boton_subir_pole" value="Subir" name="pole" class="btn btn-success" />
               <progress id="barra_de_progreso_pole" value="0" max="100"></progress>
            </form>
            <div id="archivos_subidos_pole" style="border:#F00 solid 1px"></div>
			<div id="respuesta_pole" class="alert_pole"></div>
				
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