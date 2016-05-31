<?php 
    include("../confi/conf.inc.php");
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
?>	

<script type="text/javascript">
/////////////////////////////////////////////////////////////
//////////PARA SUBIR ARCHIVOS GENERAL E INSIDE /////////////
///////////////////////////////////////////////////////////
 			function subirArchivosCivil() {
				$("#archivo_civil").upload('include/subir_archivo.php',
                {
                   	nombre_archivo: $("#nombre_archivo_civil").val(),
					code: $("#code").val(),
					type: $("#type_civil").val()
					
				},
				
                function(respuesta) {
                    //Subida finalizada.
                    $("#barra_de_progreso_civil").val(0);
                    if (respuesta === 0) {
                        mostrarRespuestaCivil('El archivo NO se ha podido subir.', false);
                        $("#nombre_archivo_civil, #archivo_civil").val('');
                    } else {
						var type =  $("#type_civil").val()
						
						$.get("include/select_temp.php", function (data) {
                   		 $(".temp").append(data);
                		});
						
						$(".editor_imagenes").fadeIn(200);
                        mostrarRespuestaCivil('Subido Correctamente.', true);
						mostrarArchivosCivil();
						
						$.get("include/editor.php", function (data) {
							$(".editor_imagenes_content").append(data);
                		});
						
						$("body").css({ 'overflow': "hidden" });
					}
                    
                }, function(progreso, valor) {
                    //Barra de progreso.
                    $("#barra_de_progreso_civil").val(valor);
                });
            }
			//Eliminar archivo
            function eliminarArchivosCivil() {
				var id = $(".eliminar_archivo_civil").attr('id')  
	
                $.ajax({
                    url: 'include/eliminar_archivo.php',
                    type: 'POST',
                    timeout: 10000,
                    data: {id: id},
                    error: function() {
                        mostrarRespuestaCivil('Error al intentar eliminar el archivo.', false);
                    },
                    success: function(respuesta) {
                        if (respuesta == 1) {
                            mostrarRespuestaCivil('El archivo ha sido eliminado.', true);
							
                        } else {
							 
                            mostrarRespuestaCivil('Error al intentar eliminar el archivo.', false);  
							                       
                        }
						
                    }
                });
            }
            function mostrarArchivosCivil() {
				code = $("#code").val()
				type =  $("#type_civil").val()
				
				
                $.ajax({
                    url: 'include/mostrar_archivos.php',
                    type: 'POST',
					data: {type:type, code:code},
                    success: function(data) {
                            
                            $("#archivos_subidos_civil").append(data);
                        
                    }
                });
            }
            function mostrarRespuestaCivil(mensaje, ok){
                $("#respuesta_civil").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                if(ok){
                    $("#respuesta_civil").addClass('alert-success');
                }else{
                    $("#respuesta_civil").addClass('alert-danger');
                }
            }
            $(document).ready(function() {
                mostrarArchivosCivil();
                $("#boton_subir_civil").on('click', function() {
                    subirArchivosCivil();
					var name = $(this).attr('name');
                });
                $("#archivos_subidos_civil").on('click', '.eliminar_archivo_civil', function() {
                    var archivo = $(this).parents('.row').eq(0).find('span').text();
                    archivo = $.trim(archivo);
                    eliminarArchivosCivil(archivo);
                });
            });
        </script>


 <script>

$(document).ready(function() {
    $("#submit_request").click(function() {
        
		  $.post($("#civil_plan_form").attr("action"), $("#civil_plan_form").serialize(),
          function(data) {
            $(".hola").append(data);
            
			
          });
      });
  });

</script>


<div class="content_form content_oculto"  id="content_civil_plan" >

			<div class="container_form" >

				<div class="center_form" >

					<div class="title_center_form" > CIVIL PLAN TASK</div>		
					
				
					
				</div>
				
			</div>
            
            
<form id="civil_plan_form" name="civil_plan_form" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/data-file/civil.php" >
			<div class="container_form" >

				<div class="center_form" >

					<div class="content_option_pole" style="padding-bottom:0px;" >
						
						<div class="col_izq_option_civil" >
							
                            
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > CIVIL PROPOSED PLANS & TMP </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_civil_proposed_tmp_civil" id="si_civil_proposed_tmp_civil" value="si" />
										<label for="si_civil_proposed_tmp_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_civil_proposed_tmp_civil" id="no_civil_proposed_tmp_civil" value="no" />
										<label for="no_civil_proposed_tmp_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > AS-BUILT CIVIL PLAN </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_as_built_civil" id="si_as_built_civil" value="si" />
										<label for="si_as_built_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_as_built_civil" id="no_as_built_civil" value="no" />
										<label for="no_as_built_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > TOTAL STATION </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_total_station_civil" id="si_total_station_civil" value="si" />
										<label for="si_total_station_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_total_station_civil" id="no_total_station_civil" value="no" />
										<label for="no_total_station_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > PRINT AB PLANS IN MYLAR PAPER </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_print_milar_paper_civil" id="si_print_milar_paper_civil" value="si" />
										<label for="si_print_milar_paper_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_print_milar_paper_civil" id="no_print_milar_paper_civil" value="no" />
										<label for="no_print_milar_paper_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > DELIVER MYLAR AB PLANS </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_deliver_mylar_plans_civil" id="si_deliver_mylar_plans_civil" value="si" />
										<label for="si_deliver_mylar_plans_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_deliver_mylar_plans_civil" id="no_deliver_mylar_plans_civil" value="no" />
										<label for="no_deliver_mylar_plans_civil">No</label>
									</div>
									
								</div>
								
							</div>
								
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_option_pole" style="margin-top:15px; font-weight:400 !important;" > PROPOSED CIVIL ROUTE LENGTH </div>
								
									<input type="text" name="proposed_route_length_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" />
								
									
								</div>					
							</div>		
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_option_pole" style="margin-top:15px; font-weight:400 !important;" > FROM </div>
								
									<input type="text" name="from_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" />
								
									
								</div>					
							</div>		
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_option_pole" style="margin-top:15px;font-weight:400 !important;" > TO </div>
								
									<input type="text" name="to_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" />
								
									
								</div>					
							</div>	
							
							<div class="separador_civil" ></div>
							
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
							
								<div class="container_div_select_under_pole" style="margin-left:10px;" >
								
									<textarea name="textarea_scope_proposed_civil" placeholder="SCOPE WORK" ></textarea>
								</div>							
								
									
								</div>					
							</div>					
													
					
							
							
							
						</div>	

						<div class="col_izq_option_civil" >
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" style="font-weight:400 !important;" > PROPOSED TRENCH DETAIL INFORMATION </div>
						
								
							</div>
							
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_uno_civil" id="check_proposed_uno_civil" value="si" />
									<div class="text_div_check_utility" style="margin-left:5px;cursor:pointer;" > <label for="check_proposed_uno_civil" style="cursor:pointer;" > 1-4" </label>  </div>
								</div>	
								
								<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
									<select name="company_proposed_uno_civil">
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
							
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_dos_civil" id="check_proposed_dos_civil" value="si" />
									<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_dos_civil" style="cursor:pointer;" > 2-4"(1 City shadow) </label>  </div>
								</div>	
								
								<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
									<select name="company_proposed_dos_civil">
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
						
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_tres_civil" id="check_proposed_tres_civil" value="si" />
									<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_tres_civil" style="cursor:pointer;" > 1-2" </label>  </div>
								</div>	
								
								<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
									<select name="company_proposed_tres_civil">
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
						
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_cuatro_civil" id="check_proposed_cuatro_civil" value="si" />
									<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_cuatro_civil" style="cursor:pointer;" > MICRO TRENCH </label>  </div>
								</div>	
								<input type="text" name="text_micro_trench" class="input_highway_pole" style="margin-left:0px; width:101px !important;float:left !important;height:35px !important;" />
								<div class="select_proposed_civil" style="margin-left:0px;margin-right:0px;width:151px;" >
									<select name="company_proposed_cuatro_civil">
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
						
							<div class="separador_civil" style="margin-top:113px;" ></div>
							
							<div class="div_option_civil width_option_civil"  > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
							
								<div class="container_div_select_under_pole" style="margin-left:10px;" >
								
									<textarea name="textarea_scope_installation_civil" placeholder="INSTALLATION'S NOTES" ></textarea>
								</div>							
								
									
								</div>					
							</div>					
															
							
						</div>	


						
					</div>						
			
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								PERMIT REQUEST
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_permit_request_manhole" id="si_permit_request_manhole" value="si" class="radio_click" />
									<label for="si_permit_request_manhole" > Yes </label>
									
									<input type="radio" name="si_permit_request_manhole" id="no_permit_request_manhole" value="no" class="radio_click" checked />
									<label for="no_permit_request_manhole" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_telephone_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_telephone_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_telephone_civil" class="input_highway_pole" />
									
									
										
									
										
									</div>
							
						
									
								
								</div>	
								
								<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px; width:95%;" >
								
									
									<div class="div_check_utility" >
										
										<input type="checkbox" name="muni_civil" id="muni_civil" value="si" />
										<div class="text_div_check_utility" > <label for="muni_civil" > MUNI CIVIL </label>  </div>
									</div>														
									<div class="div_check_utility" >
										
										<input type="checkbox" name="dcr_civil" id="dcr_civil" value="si" />
										<div class="text_div_check_utility" > <label for="dcr_civil" > DCR </label>  </div>
									</div>													
									<div class="div_check_utility" >
										
										<input type="checkbox" name="nh_dot_civil" id="nh_dot_civil" value="si" />
										<div class="text_div_check_utility" > <label for="nh_dot_civil" > NH DOT </label>  </div>
									</div>												
									<div class="div_check_utility" >
										
										<input type="checkbox" name="ct_dot" id="ct_dot" value="si" />
										<div class="text_div_check_utility" > <label for="ct_dot" > CT DOT </label>  </div>
									</div>										
									<div class="div_check_utility" >
										
										<input type="checkbox" name="highway_civil" id="highway_civil" value="si" />
										<div class="text_div_check_utility" > <label for="highway_civil" > HIGHWAY </label>  </div>
									</div>									
									<div class="div_check_utility" >
										
										<input type="checkbox" name="mass_dot_civil" id="mass_dot_civil" value="si" />
										<div class="text_div_check_utility" > <label for="mass_dot_civil" > MASS DOT </label>  </div>
									</div>								
													
								
								</div>
										
								<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px;margin-bottom:20px; width:95%;" >
								
									
													
									<div class="div_check_utility" >
										
										<input type="checkbox" name="me_dot_civil" id="me_dot_civil" value="si" />
										<div class="text_div_check_utility" > <label for="me_dot_civil" > ME DOT </label>  </div>
									</div>						
									<div class="div_check_utility" style="margin-left:15px;" >
										
										<input type="checkbox" name="ny_dot_civil" id="ny_dot_civil" value="si" />
										<div class="text_div_check_utility" > <label for="ny_dot_civil" > NY DOT </label>  </div>
									</div>			
									<div class="div_check_utility" >
										
										<input type="checkbox" name="railroad_civil" id="railroad_civil" value="si" />
										<div class="text_div_check_utility" > <label for="railroad_civil" > RAILROAD </label>  </div>
									</div>		
									<div class="div_check_utility" >
										
										<input type="checkbox" name="ri_dot_civil" id="ri_dot_civil" value="si" />
										<div class="text_div_check_utility" > <label for="ri_dot_civil" > RI DOT </label>  </div>
									</div>		
									<div class="div_check_utility" >
										
										<input type="checkbox" name="vi_dot_civil" id="vi_dot_civil" value="si" />
										<div class="text_div_check_utility" > <label for="vi_dot_civil" > VI DOT </label>  </div>
									</div>						
								
								</div>
													
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_permit_civil" placeholder="SCOPE WORK" ></textarea>
								</div>
								
							
							</div>	
							<div class="separador_civil"  ></div>
							<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px;margin-bottom:20px; width:95%;" >
							
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_div_select_under_pole" > ASSIGNED COMPANY: </div>
									<div class="select_under_pole" style="margin-left:14px;width:151px;" >
										<select name="assigned_company_civil_permit_request_civil">
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
								
								
								
							</div>
									

							
							
						</div>
									
				
					
				</div>
				
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								MWRA CIVIL PLANS TASK NEEDED
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_mwra_plans_civil" id="si_mwra_plans_civil" value="si" class="radio_click" />
									<label for="si_mwra_plans_civil" > Yes </label>
									
									<input type="radio" name="si_mwra_plans_civil" id="no_mwra_plans_civil" value="no" class="radio_click" checked />
									<label for="no_mwra_plans_civil" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_mwra_plans_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_mwra_plans_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_mwra_plans_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" style="margin-top:23px;" > PROPOSED LENGTH </div>
									
										<input type="text" name="proposed_length_mwra_plans_civil" class="input_highway_pole" style="margin-top:10px !important ;" />
									
									
										
									
										
									</div>
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
                                    
                                    <div class="div_option_civil width_option_civil" style="width:40% !important;" > 
								
								<div class="text_option_pole" style="margin:0;" >EXISTING UTILITY PROFILE </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="existing_utility_profile" id="existing_utility_file_civil" value="si" />
										<label for="existing_utility_file_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="existing_utility_profile" id="no_existing_utility_profile" value="no" />
										<label for="no_civil_proposed_tmp_civil">No</label>
									</div>
									
								</div>
								
							</div>
									
									
										
									
									</div>	
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
                                    
                                    <div class="div_option_civil width_option_civil" style="width:40% !important;" > 
								
								<div class="text_option_pole" style="margin:0;" >ENGINEERING STAMPED PLANS NEEDED</div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="engineering_stamped_civil" id="existing_utility_file_civil" value="si" />
										<label for="existing_utility_file_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="engineering_stamped_civil" id="engineering_stamped_civil" value="no" />
										<label for="no_engineering_stamped_civil">No</label>
									</div>
									
								</div>
									
									
									</div>						
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > FROM </div>
									
										<input type="text" name="from_mwra_civil" class="input_highway_pole" />
										
									</div>	
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > TO </div>
									
										<input type="text" name="to_mwra_civil" class="input_highway_pole" />
										
									</div>						
									
								
								</div>	</div>
								
											
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_mrwa_civil" placeholder="SCOPE WORK" ></textarea>
								</div>
								
							
							</div>	
							
												
							
						</div>
									
				
					
				</div>
				
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								RAILROAD CROSSING PLANS TASK NEEDED
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_railroad_plans_civil" id="si_railroad_plans_civil" value="si" class="radio_click" />
									<label for="si_railroad_plans_civil" > Yes </label>
									
									<input type="radio" name="si_railroad_plans_civil" id="no_railroad_plans_civil" value="no" class="radio_click" checked />
									<label for="no_railroad_plans_civil" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_railroad_plans_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_railroad_plans_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_railroad_plans_civil" class="input_highway_pole" />
									
										
									</div>
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
                                    
                                    <!---->
                                    	  <div class="div_option_civil width_option_civil" style="width:40% !important;" > 
								
								<div class="text_option_pole" style="margin:0;" >RAILROAD CROSSING PROPOSED PLANS</div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="railroad_plans_radio_civil" value="si" />
										<label for="railroad_plans_radio_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="railroad_plans_radio_civil" value="no" />
										<label for="no_railroad_plans_radio_civil">No</label>
									</div>
									
								</div>
									
									
									</div>
                                    <!---->
									</div>	
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
                                    
                                    <div class="div_option_civil width_option_civil" style="width:40% !important;" > 
								
								<div class="text_option_pole" style="margin:0;" >ENGINEERING STAMPED PLANS NEEDED</div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="engineering_stamped_railroad_civil" value="si" />
										<label for="engineering_stamped_railroad_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="engineering_stamped_railroad_civil" value="no" />
										<label for="no_engineering_stamped_railroad_civil">No</label>
									</div>
									
								</div>
									
									
									</div>
									
										
										
									
									</div>						
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > FROM </div>
									
										<input type="text" name="from_railroad_civil" class="input_highway_pole" />
										
									</div>	
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > TO </div>
									
										<input type="text" name="to_railroad_civil" class="input_highway_pole" />
										
									</div>						
									
								
								</div>	
								
											
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_railroad_civil" placeholder="SCOPE WORK" ></textarea>
								</div>
								
							
							</div>	
							
												
							
						</div>
									
				
					
				</div>
				
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								HIGHWAY TRAFFIC MANAGEMENT PLANS TASK NEEDED
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_highway_traffic_civil" id="si_highway_traffic_civil" value="si" class="radio_click" />
									<label for="si_highway_traffic_civil" > Yes </label>
									
									<input type="radio" name="si_highway_traffic_civil" id="no_highway_traffic_civil" value="no" class="radio_click" checked />
									<label for="no_highway_traffic_civil" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_highway_traffic_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_highway_traffic_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_highway_traffic_civil" class="input_highway_pole" />
									
										
									</div>
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
                                    
                                      <!---->
                                    	  <div class="div_option_civil width_option_civil" style="width:45% !important;" > 
								
								<div class="text_option_pole" style="margin:0;" >HIGHWAY TRAFFIC MANAGEMENT PROPOSED PLANS</div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="highway_plans_radio_civil" value="si" />
										<label for="highway_plans_radio_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="highway_plans_radio_civil" value="no" />
										<label for="no_highway_plans_radio_civil">No</label>
									</div>
									
								</div>
									
									
									</div>
                                    <!---->
                                    
									</div>	
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
                                    
                                    <!---->
                                    	  <div class="div_option_civil width_option_civil" style="width:45% !important;" > 
								
								<div class="text_option_pole" style="margin:0;" >ENGINEERING STAMPED PLANS NEEDED</div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="engineering_stamped_highway" value="si" />
										<label for="engineering_stamped_highway" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="engineering_stamped_highway" value="no" />
										<label for="no_engineering_stamped_highway">No</label>
									</div>
									
								</div>
									
									
									</div>
                                    <!---->
										
									
									</div>						
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > FROM </div>
									
										<input type="text" name="from_highway_traffic_civil" class="input_highway_pole" />
										
									</div>	
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > TO </div>
									
										<input type="text" name="to_highway_traffic_civil" class="input_highway_pole" />
										
									</div>						
									
								
								</div>	
								
											
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_highway_traffic_civil" placeholder="SCOPE WORK" ></textarea>
                                    <input type="hidden" name="code_plan" id="code" value="<?php echo $_SESSION['time_code']; ?>"/>
                                	<input type="hidden" name="type_plan" value="civil_plan"/>
								</div>
								
							
							</div>	
							
												
							
						</div>
										
															
							
				
					
				</div>
                </form>
						
					<div class="containerprueba">
    
    		<form action="javascript:void(0);" id="form_archivo_civil" name="civil">
            <div class="div_file_inside" >
				<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside">UPLOAD FILE (JPG OR PNG)</div> </div>
               <input type="file" name="archivo" id="archivo_civil" />
            </div>  
               <input type="hidden" name="code" id="code" value="<?php echo $time_code_inside; ?>"/>
               <input type="hidden" name="type" id="type_civil" value="civil_plan"/>
               <input type="submit" id="boton_subir_civil" value="Subir" name="civil" class="btn btn-success" />
               <progress id="barra_de_progreso_civil" value="0" max="100"></progress>
            </form>
            <div id="archivos_subidos_civil" style="border:#F00 solid 1px"></div>
			<div id="respuesta_civil" class="alert_civil"></div>
				
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
			
			
			

</div>