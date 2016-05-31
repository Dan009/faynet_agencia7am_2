<?php 
    include("../confi/conf.inc.php");
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
?>	


<script type="text/javascript">
		/////////////////////////////////////////////////////////////
		//////////PARA SUBIR ARCHIVOS GENERAL E INSIDE /////////////
		///////////////////////////////////////////////////////////
 			function subirArchivosManhole() {
				$("#archivo_manhole").upload('include/subir_archivo.php',
                {
                   	nombre_archivo: $("#nombre_archivo_manhole").val(),
					code: $("#code").val(),
					type: $("#type_manhole").val()
					
				},
				
                function(respuesta) {
                    //Subida finalizada.
                    $("#barra_de_progreso_manhole").val(0);
                    if (respuesta === 0) {
                        mostrarRespuestaManhole('El archivo NO se ha podido subir.', false);
                        $("#nombre_archivo_manhole, #archivo_manhole").val('');
                    } else {
						var type =  $("#type_manhole").val()
						
						$.get("include/select_temp.php", function (data) {
                   		 $(".temp").append(data);
                		});
						
						$(".editor_imagenes").fadeIn(200);
                        mostrarRespuestaManhole('Subido Correctamente.', true);
						mostrarArchivosManhole();
						
						$.get("include/editor.php", function (data) {
							$(".editor_imagenes_content").append(data);
                		});
						
						$("body").css({ 'overflow': "hidden" });
					}
                    
                }, function(progreso, valor) {
                    //Barra de progreso.
                    $("#barra_de_progreso_manhole").val(valor);
                });
            }
			//Eliminar archivo
            function eliminarArchivosManhole() {
				var id = $(".eliminar_archivo_manhole").attr('id')  
	
                $.ajax({
                    url: 'include/eliminar_archivo.php',
                    type: 'POST',
                    timeout: 10000,
                    data: {id: id},
                    error: function() {
                        mostrarRespuestaManhole('Error al intentar eliminar el archivo.', false);
                    },
                    success: function(respuesta) {
                        if (respuesta == 1) {
                            mostrarRespuestaManhole('El archivo ha sido eliminado.', true);
							
                        } else {
							 
                            mostrarRespuestaManhole('Error al intentar eliminar el archivo.', false);  
							                       
                        }
						
                    }
                });
            }
            function mostrarArchivosManhole() {
				code = $("#code").val()
				type =  $("#type_manhole").val()
				
				
                $.ajax({
                    url: 'include/mostrar_archivos.php',
                    type: 'POST',
					data: {type:type, code:code},
                    success: function(data) {
                            
                            $("#archivos_subidos_manhole").append(data);
                        
                    }
                });
            }
            function mostrarRespuestaManhole(mensaje, ok){
                $("#respuesta_manhole").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                if(ok){
                    $("#respuesta_manhole").addClass('alert-success');
                }else{
                    $("#respuesta_manhole").addClass('alert-danger');
                }
            }
            $(document).ready(function() {
                mostrarArchivosManhole();
                $("#boton_subir_manhole").on('click', function() {
                    subirArchivosManhole();
					var name = $(this).attr('name');
                });
                $("#archivos_subidos_manhole").on('click', '.eliminar_archivo_manhole', function() {
                    var archivo = $(this).parents('.row').eq(0).find('span').text();
                    archivo = $.trim(archivo);
                    eliminarArchivosManhole(archivo);
                });
            });
        </script>
 <script>

$(document).ready(function() {
    $("#submit_request").click(function() {
        
		  $.post($("#manhole_plan_form").attr("action"), $("#manhole_plan_form").serialize(),
          function(data) {
            $(".hola").append(data);
            
			
          });
      });
  });

</script>	

<div class="content_form content_oculto"  id="content_manhole_prop" >


			<div class="container_form" >

				<div class="center_form" >

					<div class="title_center_form" > MANHOLE PLAN TASK NEEDED </div>		
					
				
					
				</div>
				
			</div>
            
            <form id="manhole_plan_form" name="manhole_plan_form" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/data-file/manhole.php" >
			
			<div class="container_form" >

				<div class="center_form" >

				
						
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								ELECTRIC PROPOSED MANHOLE PLANS
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_electric_proposed_manhole" id="si_electric_proposed_manhole" value="si" class="radio_click" />
									<label for="si_electric_proposed_manhole" > Yes </label>
									
									<input type="radio" name="si_electric_proposed_manhole" id="no_electric_proposed_manhole" value="no" class="radio_click" checked />
									<label for="no_electric_proposed_manhole" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_manhole" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_manhole" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_manhole" class="input_highway_pole" />
									
									
										
									
										
									</div>
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > MH OPTION </div>
									
										<input type="text" name="mh_option_manhole" class="input_highway_pole" style="margin-left:33px;" />
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > Utility Company: </div>
										<div class="select_under_pole" style="margin-left:14px;width:151px;" >
											<select name="company_manhole">
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
																			
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PROP. FIBER </div>
									
										<input type="text" name="prop_fiber_manhole" class="input_highway_pole" style="margin-left:25px;" />
									
										
									</div>
										
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PATH LENGTH </div>
									
										<input type="text" name="path_length_manhole" class="input_highway_pole" style="margin-left:17px;" />
									
										
									</div>
																		
									
									
								
								</div>	
								
					
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_manhole" class="input_from_utility"  />
									<input type="text" placeholder="TO" name="to_manhole" class="input_from_utility" />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_manhole" placeholder="SCOPE WORK" ></textarea>
								</div>
								
							
							</div>							
							
						</div>
						
					</div>
					
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								TELEPHONE PROPOSED MANHOLE PLANS
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_telephone_proposed_manhole" id="si_telephone_proposed_manhole" value="si" class="radio_click" />
									<label for="si_telephone_proposed_manhole" > Yes </label>
									
									<input type="radio" name="si_telephone_proposed_manhole" id="no_telephone_proposed_manhole" value="no" class="radio_click" checked />
									<label for="no_telephone_proposed_manhole" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_telephone_manhole" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_telephone_manhole" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_telephone_manhole" class="input_highway_pole" />
									
									
										
									
										
									</div>
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > MH OPTION </div>
									
										<input type="text" name="mh_option_telephone_manhole" class="input_highway_pole" style="margin-left:33px;" />
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > Utility Company: </div>
										<div class="select_under_pole" style="margin-left:14px;width:151px;" >
											<select name="company_telephone_manhole">
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
																			
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PROP. FIBER </div>
									
										<input type="text" name="prop_fiber_telephone_manhole" class="input_highway_pole" style="margin-left:25px;" />
									
										
									</div>
										
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PATH LENGTH </div>
									
										<input type="text" name="path_length_telephone_manhole" class="input_highway_pole" style="margin-left:17px;" />
									
										
									</div>
																		
									
									
								
								</div>	
								
					
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_telephone_manhole" class="input_from_utility"  />
									<input type="text" placeholder="TO" name="to_telephone_manhole" class="input_from_utility" />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_telephone_manhole" placeholder="SCOPE WORK" ></textarea>
								</div>
								
							
							</div>							
							
						</div>
						
					</div>
					
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								PRIVATE PROPOSED MANHOLE PLANS
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_private_proposed_manhole" id="si_private_proposed_manhole" value="si" class="radio_click" />
									<label for="si_private_proposed_manhole" > Yes </label>
									
									<input type="radio" name="si_private_proposed_manhole" id="no_private_proposed_manhole" value="no" class="radio_click" checked />
									<label for="no_private_proposed_manhole" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_private_manhole" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_private_manhole" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_private_manhole" class="input_highway_pole" />
									
									
										
									
										
									</div>
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > MH OPTION </div>
									
										<input type="text" name="mh_option_private_manhole" class="input_highway_pole" style="margin-left:33px;" />
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > Utility Company: </div>
										<div class="select_under_pole" style="margin-left:14px;width:151px;" >
											<select name="company_private_manhole">
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
																			
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PROP. FIBER </div>
									
										<input type="text" name="prop_fiber_private_manhole" class="input_highway_pole" style="margin-left:25px;" />
									
										
									</div>
										
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PATH LENGTH </div>
									
										<input type="text" name="path_length_private_manhole" class="input_highway_pole" style="margin-left:17px;" />
									
										
									</div>
																		
									
									
								
								</div>	
								
					
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_private_manhole" class="input_from_utility"  />
									<input type="text" placeholder="TO" name="to_private_manhole" class="input_from_utility" />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_private_manhole" placeholder="SCOPE WORK" ></textarea>
								</div>
								
							
							</div>							
							
						</div>
						
					</div>
					
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								OUTSIDE UTILITY APPLICATION
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_outside_proposed_manhole" id="si_outside_proposed_manhole" value="si" class="radio_click" />
									<label for="si_outside_proposed_manhole" > Yes </label>
									
									<input type="radio" name="si_outside_proposed_manhole" id="no_outside_proposed_manhole" value="no" class="radio_click" checked />
									<label for="no_outside_proposed_manhole" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_outside_manhole" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_outside_manhole" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_outside_manhole" class="input_highway_pole" />
									
									
										
									
										
									</div>
									
									<div class="container_div_select_under_pole" >
									
								<div class="div_select_survey">
									
									<select name="company_outside_manhole" >
										<option> Assigned company </option>
										<?php 
											$consulta_company="SELECT * FROM company WHERE estado='1' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
										<?php } ?>										
									</select>
								
								</div>
								<div class="div_select_survey">
									
									<select name="contact_outside_manhole" >
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
								
									
																		
									
									
								
								</div>
								
							<div class="container_div_click_manhole" >
								<div class="title_content_option_inside title_content_option_manhole " > 
									<div class="div_title_content_option_inside"  >
										UNDERGROUND APPLICATION TASK
										
										<div class="div_option_radio_inside" >
											<input type="radio" name="si_underground_task_manhole" id="si_underground_task_manhole" value="si" class="radio_click" />
											<label for="si_underground_task_manhole" > Yes </label>
											
											<input type="radio" name="si_underground_task_manhole" id="no_underground_task_manhole" value="no" class="radio_click" checked />
											<label for="no_underground_task_manhole" > No </label>
										</div>
																
									
									</div>
									
								</div>								
								
								
								<div class="container_click_option_inside" >
								
										<div class="container_option_under_pole" > 
										
											<div class="container_div_select_under_pole" >
											
												<div class="text_div_select_under_pole" > License Application Needed: </div>
												<div class="div_select_survey" style="margin-top:0px;" >
													
													<select name="company_underground_manhole" >
														<option> Select </option>
														<?php 
															$consulta_company="SELECT * FROM company WHERE estado='1' ";
															$resultado_company= mysqli_query($conexion,$consulta_company);
															while($fila_company= mysqli_fetch_array($resultado_company)){
														?>										
															<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
														<?php } ?>										
													</select>
												
												</div>
												<div class="div_select_survey" style="margin-top:0px;" >
													
													<select name="contact_underground_manhole" >
														<option> Select </option>
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
										
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" style="margin-top:18px; " > CUST. CABLE COUNT </div>
											
												<input type="text" name="cust_cable_count_manhole" class="cust_cable_count_manhole" style="margin-left:26px; width:200px !important; height:37px !important; " />
											
												
											</div>
										
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" style="margin-top:18px; " > CUST. TIE LOC TO NET </div>
											
												<input type="text" name="cust_tie_loc_to_net_manhole" class="cust_tie_loc_to_net_manhole" style="margin-left:18px; width:200px !important; height:37px !important; " />
												
											</div>
												
											
											<div class="container_div_select_under_pole" style="margin-top:10px;" >
											
												<textarea name="textarea_scope_underground_manhole" placeholder="SCOPE WORK" style="border:1px solid rgb(240,240,240) !important; width: 94% !important; min-width: 94% !important;  max-width: 94% !important; " ></textarea>
											</div>
												
											
															
																			
											
																				
											
											
										
										</div>

								</div>
							
							</div>							
									
							<div class="container_div_click_manhole" >
								<div class="title_content_option_inside title_content_option_manhole " > 
									<div class="div_title_content_option_inside"  >
										AERIAL APPLICATION TASK
										
										<div class="div_option_radio_inside" style="margin-left:95px;" >
											<input type="radio" name="si_aerial_task_manhole" id="si_aerial_task_manhole" value="si" class="radio_click" />
											<label for="si_aerial_task_manhole" > Yes </label>
											
											<input type="radio" name="si_aerial_task_manhole" id="no_aerial_task_manhole" value="no" class="radio_click" checked />
											<label for="no_aerial_task_manhole" > No </label>
										</div>
																
									
									</div>
									
								</div>								
								
								
								<div class="container_click_option_inside" >
								
										<div class="container_option_under_pole" > 
										
											<div class="container_div_select_under_pole" >
											
												<div class="text_div_select_under_pole" > License Application Needed: </div>
												<div class="div_select_survey" style="margin-top:0px;" >
													
													<select name="company_aerial_manhole" >
														<option> Select </option>
														<?php 
															$consulta_company="SELECT * FROM company WHERE estado='1' ";
															$resultado_company= mysqli_query($conexion,$consulta_company);
															while($fila_company= mysqli_fetch_array($resultado_company)){
														?>										
															<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
														<?php } ?>										
													</select>
												
												</div>
												<div class="div_select_survey" style="margin-top:0px;" >
													
													<select name="contact_aerial_manhole" >
														<option> Select </option>
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
										
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" style="margin-top:18px; " > CUST. CABLE COUNT </div>
											
												<input type="text" name="cust_cable_count_aerial_manhole" class="cust_cable_count_manhole" style="margin-left:26px; width:200px !important; height:37px !important; " />
											
												
											</div>
										
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" style="margin-top:18px; " > CUST. TIE LOC TO NET </div>
											
												<input type="text" name="cust_tie_loc_to_net_aerial_manhole" class="cust_tie_loc_to_net_manhole" style="margin-left:18px; width:200px !important; height:37px !important; " />
												
											</div>
												
											
											<div class="container_div_select_under_pole" style="margin-top:10px;" >
											
												<textarea name="textarea_scope_aerial_manhole" placeholder="SCOPE WORK" style="border:1px solid rgb(240,240,240) !important; width: 94% !important; min-width: 94% !important;  max-width: 94% !important; " ></textarea>
											</div>
												
											
															
																			
											
																				
											
											
										
										</div>

								</div>
							
							</div>	
                            
                            <!--inicio test-->
                            
                            <div class="container_div_click_manhole" >
								<div class="title_content_option_inside title_content_option_manhole " > 
									<div class="div_title_content_option_inside"  >
								  BREAKOUT APPLICATION TASK

										
										<div class="div_option_radio_inside" >
											<input type="radio" name="si_breakout_manhole" id="si_breakout_manhole" value="si" class="radio_click" />
											<label for="si_breakout_manhole" > Yes </label>
											
											<input type="radio" name="si_breakout_manhole" id="no_breakout_manhole" value="no" class="radio_click" checked />
											<label for="no_breakout_manhole" > No </label>
										</div>
																
									
									</div>
									
								</div>								
								
								
								<div class="container_click_option_inside" >
								
										<div class="div_option_pole" > 
									
									<div class="text_option_pole" > MANHOLE LOOK OUT/FIELD SURVEY </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_look_out_field_manhole" id="si_look_out_field_manhole" value="si" />
											<label for="si_look_out_field_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_look_out_field_manhole" id="no_look_out_field_manhole" value="no"  />
											<label for="no_look_out_field_manhole">No</label>
										</div>
										
									</div>
									
								</div>
								
								<div class="div_option_pole" > 
									
									<div class="text_option_pole" > FINAL MANHOLE & BUTTERFLY  AS-BUILT PLANS </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_final_butterfly_manhole" id="si_final_butterfly_manhole" value="si" />
											<label for="si_final_butterfly_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_final_butterfly_manhole" id="no_final_butterfly_manhole" value="no" />
											<label for="no_final_butterfly_manhole">No</label>
										</div>
										
									</div>
									
								</div>
								
								<div class="div_option_pole" > 
									
									<div class="text_option_pole" > PRELIMINARY/PROPOSED MANHOLE PLANS </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_preliminary_proposed_manhole" id="si_preliminary_proposed_manhole" value="si" />
											<label for="si_preliminary_proposed_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_preliminary_proposed_manhole" id="no_preliminary_proposed_manhole" value="no" />
											<label for="no_preliminary_proposed_manhole">No</label>
										</div>
										
									</div>
									
								</div>
								
								<div class="div_option_pole" > 
									
									<div class="text_option_pole" > GIS AS-BUILT FILE TASK </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_gis_as_built_file_manhole" id="si_gis_as_built_file_manhole" value="si" />
											<label for="si_gis_as_built_file_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_gis_as_built_file_manhole" id="no_gis_as_built_file_manhole" value="no" />
											<label for="no_gis_as_built_file_manhole">No</label>
										</div>
										
									</div>
									
								</div>
								
								<div class="div_option_pole" > 
									
									<div class="text_option_pole" > MANHOLE BUTTERFLY PROPOSED DETAILS </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_butterfly_details_manhole" id="si_butterfly_details_manhole" value="si" />
											<label for="si_butterfly_details_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_butterfly_details_manhole" id="no_butterfly_details_manhole" value="no" />
											<label for="no_butterfly_details_manhole">No</label>
										</div>
										
									</div>
									
								</div>
								
								<div class="div_option_pole" > 
									
									<div class="text_option_pole" > OUTSIDE UTILITY APPLICATION </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_outside_utility_manhole" id="si_outside_utility_manhole" value="si" />
											<label for="si_outside_utility_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_outside_utility_manhole" id="no_outside_utility_manhole" value="no" />
											<label for="no_outside_utility_manhole">No</label>
										</div>
										
									</div>
									
								</div>
								
								<div class="container_click_option_inside" > 
									
									<div class="text_option_pole" > MANHOLE BUTTERFLY AS-BUILT DETAILS </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_butterfly_as_build_details_manhole" id="si_butterfly_as_build_details_manhole" value="si" />
											<label for="si_butterfly_as_build_details_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_butterfly_as_build_details_manhole" id="no_butterfly_as_build_details_manhol" value="no" />
											<label for="no_butterfly_as_build_details_manhol">No</label>
                                            <input type="hidden" name="code_plan" id="code" value="<?php echo $_SESSION['time_code']; ?>"/>
                                            <input type="hidden" name="type_plan" value="manhole"/>
										</div>
										
									</div>
									
								</div>
								
								</form>
                                
                                
                                
                                
                                
                                
								
							</div>					
					
											
							
                            
                           	<!--Fin Test-->
                            
                            

						
					</div>
					
                    
                   
                    
                    
                    
										
			</div>	</div>			

<div class="containerprueba">
    
    		<form action="javascript:void(0);" id="form_archivo_manhole" name="manhole">
            <div class="div_file_inside" >
				<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside">UPLOAD FILE (JPG OR PNG)</div> </div>
               <input type="file" name="archivo" id="archivo_manhole" />
            </div>  
               <input type="hidden" name="code" id="code" value="<?php echo $time_code_inside; ?>"/>
               <input type="hidden" name="type" id="type_manhole" value="manhole"/>
               <input type="submit" id="boton_subir_manhole" value="Subir" name="manhole" class="btn btn-success" />
               <progress id="barra_de_progreso_manhole" value="0" max="100"></progress>
            </form>
            <div id="archivos_subidos_manhole" style="border:#F00 solid 1px"></div>
			<div id="respuesta_manhole" class="alert_manhole"></div>
				
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
								
								$(this).parents(".title_content_option_inside").siblings(".container_click_option_inside").css({
									"height":"auto"
								});
								
								
								$(this).parents(".container_radio_option_pole").siblings(".container_click_other_pole").css({
									"height":"auto"
								});
								
								
								
							}else{
								$(this).parents(".title_content_option_inside").siblings(".container_click_option_inside").css({
									"height":"0px"
									
								});
								
								
								$(this).parents(".container_radio_option_pole").siblings(".container_click_other_pole").css({
									"height":"0px"
									
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
