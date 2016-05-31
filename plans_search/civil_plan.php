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

<?php  
$id = $_POST['id']; 

		//BUSCANDO en tabla civil_plans
			//BUSCANDO civil_plans
				$cons_civil_plans ="SELECT * FROM request WHERE id_request='$id' AND tipo='civil_plans' AND usuario_id='".$_SESSION['id']."' ";
				$res_civil_plans= mysqli_query($conexion,$cons_civil_plans);
				$row_civil_plans= mysqli_fetch_array($res_civil_plans);

			// Data desde civil_plans
				$consulta_civil_plans ="SELECT * FROM civil_plans WHERE id_request='".$row_civil_plans["id"]."'";
				$resultado_civil_plans= mysqli_query($conexion,$consulta_civil_plans);
				$rows_civil_plans = mysqli_fetch_array($resultado_civil_plans);	

		//BUSCANDO en tabla permit_request_civil_plans
			//BUSCANDO permit_request_civil_plans
				$cons_permit_request ="SELECT * FROM request WHERE id_request='$id' AND tipo='permit_request_civil_plans' AND usuario_id='".$_SESSION['id']."' ";
				$res_permit_request= mysqli_query($conexion,$cons_permit_request);
				$row_permit_request= mysqli_fetch_array($res_permit_request);

			// Data desde permit_request_civil_plans
				$consulta_permit_request_plan ="SELECT * FROM permit_request_civil_plans WHERE id_request='".$row_permit_request["id"]."'";
				$resultado_permit_request_plan= mysqli_query($conexion,$consulta_permit_request_plan);
				$rows_permit_request_plan = mysqli_fetch_array($resultado_permit_request_plan);

		//BUSCANDO en tabla mwra_request_civil_plans
			//BUSCANDO mwra_request_civil_plans
				$cons_mwra_request ="SELECT * FROM request WHERE id_request='$id' AND tipo='mwra_request_civil_plans' AND usuario_id='".$_SESSION['id']."' ";
				$res_mwra_request= mysqli_query($conexion,$cons_mwra_request);
				$row_mwra_request= mysqli_fetch_array($res_mwra_request);

			// Data desde mwra_request_civil_plans
				$consulta_mwra_request_plans ="SELECT * FROM mwra_request_civil_plans WHERE id_request='".$row_mwra_request["id"]."'";
				$resultado_mwra_request_plans= mysqli_query($conexion,$consulta_mwra_request_plans);
				$rows_mwra_request_plans = mysqli_fetch_array($resultado_mwra_request_plans);

		//BUSCANDO en tabla railroad_request_civil_plans
			//BUSCANDO railroad_request_civil_plans
				$cons_railroad_request="SELECT * FROM request WHERE id_request='$id' AND tipo='railroad_request_civil_plans' AND usuario_id='".$_SESSION['id']."' ";
				$res_railroad_request= mysqli_query($conexion,$cons_railroad_request);
				$row_railroad_request= mysqli_fetch_array($res_railroad_request);

			// Data desde railroad_request_civil_plans
				$consulta_railroad_request_civil ="SELECT * FROM railroad_request_civil_plans WHERE id_request='".$row_railroad_request["id"]."'";
				$resultado_railroad_request_civil= mysqli_query($conexion,$consulta_railroad_request_civil);
				$rows_railroad_request_civil = mysqli_fetch_array($resultado_railroad_request_civil);

		//BUSCANDO en tabla highway_request_civil_plans
			//BUSCANDO highway_request_civil_plans
				$cons_highway_request="SELECT * FROM request WHERE id_request='$id' AND tipo='highway_request_civil_plans' AND usuario_id='".$_SESSION['id']."' ";
				$res_highway_request= mysqli_query($conexion,$cons_highway_request);
				$row_highway_request= mysqli_fetch_array($res_highway_request);

			// Data desde highway_request_civil_plans
				$consulta_highway_request_civil ="SELECT * FROM highway_request_civil_plans WHERE id_request='".$row_highway_request["id"]."'";
				$resultado_highway_request_civil= mysqli_query($conexion,$consulta_highway_request_civil);
				$rows_highway_request_civil = mysqli_fetch_array($resultado_highway_request_civil);


?>

<div class="content_form content_oculto"  id="content_civil_plan" >

			<div class="container_form" >

				<div class="center_form" >

					<div class="title_center_form" > CIVIL PLAN TASK</div>		
					
				</div>
				
			</div>
            
            
	<form id="civil_plan_form" name="civil_plan_form" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/data-file/civil.php" >
			<div class="container_form" >

			<!-- CIVIL PLAN -->
				<div class="center_form" >
					<div class="content_option_pole" style="padding-bottom:0px;" >		
						<div class="col_izq_option_civil" >			
                            
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > CIVIL PROPOSED PLANS & TMP </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_civil_proposed_tmp_civil" id="si_civil_proposed_tmp_civil" value="si" disabled="disabled" <?php if ($rows_civil_plans['proposed_plan_tmp_civil'] == 'si') { echo 'checked'; } ?> />
										<label for="si_civil_proposed_tmp_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_civil_proposed_tmp_civil" id="no_civil_proposed_tmp_civil" value="no" disabled="disabled" <?php if ($rows_civil_plans['proposed_plan_tmp_civil'] == 'no') { echo 'checked'; } ?> />
										<label for="no_civil_proposed_tmp_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > AS-BUILT CIVIL PLAN </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_as_built_civil" id="si_as_built_civil" value="si"disabled="disabled" <?php if ($rows_civil_plans['as_built_plan_civil'] == 'si') { echo 'checked'; } ?> />
										<label for="si_as_built_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_as_built_civil" id="no_as_built_civil" value="no" disabled="disabled" <?php if ($rows_civil_plans['as_built_plan_civil'] == 'no') { echo 'checked'; } ?> />
										<label for="no_as_built_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > TOTAL STATION </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_total_station_civil" id="si_total_station_civil" value="si" disabled="disabled" <?php if ($rows_civil_plans['total_station_civil'] == 'si') { echo 'checked'; } ?>/>
										<label for="si_total_station_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_total_station_civil" id="no_total_station_civil" value="no" disabled="disabled" <?php if ($rows_civil_plans['total_station_civil'] == 'no') { echo 'checked'; } ?>/>
										<label for="no_total_station_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > PRINT AB PLANS IN MYLAR PAPER </div>
								<div class="container_radio_option_pole"> 
									<div class="margin_radio_pole" >
										<input type="radio" name="si_print_milar_paper_civil" id="si_print_milar_paper_civil" value="si" disabled="disabled" <?php if ($rows_civil_plans['print_a_b_mylar_civil'] == 'no') { echo 'checked'; } ?>/>
										<label for="si_print_milar_paper_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_print_milar_paper_civil" id="no_print_milar_paper_civil" value="no" disabled="disabled" <?php if ($rows_civil_plans['print_a_b_mylar_civil'] == 'no') { echo 'checked'; } ?> />
										<label for="no_print_milar_paper_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > DELIVER MYLAR AB PLANS </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_deliver_mylar_plans_civil" id="si_deliver_mylar_plans_civil" value="si" disabled="disabled" <?php if ($rows_civil_plans['deliver_mylar_civil'] == 'si') { echo 'checked'; } ?> />
										<label for="si_deliver_mylar_plans_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_deliver_mylar_plans_civil" id="no_deliver_mylar_plans_civil" value="no" disabled="disabled" <?php if ($rows_civil_plans['deliver_mylar_civil'] == 'no') { echo 'checked'; } ?> />
										<label for="no_deliver_mylar_plans_civil">No</label>
									</div>
									
								</div>
								
							</div>
								
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_option_pole" style="margin-top:15px; font-weight:400 !important;" > PROPOSED CIVIL ROUTE LENGTH </div>
								
									<input type="text" name="proposed_route_length_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" disabled="disabled" value="<?php echo $rows_civil_plans['proposed_route_civil']; ?>" />
								
									
								</div>					
							</div>		
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_option_pole" style="margin-top:15px; font-weight:400 !important;" > FROM </div>
								
									<input type="text" name="from_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" disabled="disabled" value="<?php echo $rows_civil_plans['from_civil']; ?>"/>
								
									
								</div>					
							</div>		
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_option_pole" style="margin-top:15px;font-weight:400 !important;" > TO </div>
								
									<input type="text" name="to_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" disabled="disabled" value="<?php echo $rows_civil_plans['to_civil']; ?>" />
								
									
								</div>					
							</div>	
							
							<div class="separador_civil" ></div>
							
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
							
								<div class="container_div_select_under_pole" style="margin-left:10px;" >
								
									<textarea name="textarea_scope_proposed_civil" placeholder="SCOPE WORK" disabled="disabled"><?php echo $rows_civil_plans['scope_work_civil']; ?></textarea>
								</div>							
								
									
								</div>					
							</div>					
							
						</div>	

						<div class="col_izq_option_civil" >
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" style="font-weight:400 !important;" > PROPOSED TRENCH DETAIL INFORMATION </div>
						
								
							</div>
							
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility " style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_uno_civil" id="check_proposed_uno_civil" value="si" <?php if ($rows_civil_plans['check_uno_trench_detail_civil'] == 'si') { echo "checked";} ?> disabled="disabled" />

									<div class="text_div_check_utility" style="margin-left:5px;cursor:pointer;" > 
										<label for="check_proposed_uno_civil" style="cursor:pointer;" > 1-4" </label>

									</div>
								</div>	
								
								<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
									
									<?php 
										// BUSCA EL COMPANY DEL CIVIL UNO TRENCH
										$consulta_company_civil_uno_trench="SELECT * FROM company WHERE id='".$rows_civil_plans['company_uno_trench_detail_civil']."' ";
										$resultado_company_civil_uno_trench= mysqli_query($conexion,$consulta_company_civil_uno_trench);
										$fila_company_civil_uno_trench= mysqli_fetch_array($resultado_company_civil_uno_trench);

										?>	

										<select name="contact_manhole_electric" disabled="disabled">								
												<option value="<?php echo $fila_company_civil_uno_trench['id']; ?>"><?php echo $fila_company_civil_uno_trench['company']; ?></option>									
										</select>
								</div>	
																			
								
								
							</div>
							
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_dos_civil" id="check_proposed_dos_civil" value="si" <?php if ($rows_civil_plans['check_dos_trench_detail_civil'] == 'si') { echo "checked";} ?> disabled="disabled" />
									<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_dos_civil" style="cursor:pointer;" > 2-4"(1 City shadow) </label>  </div>
								</div>	
								
								<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
									<?php 
										// BUSCA EL COMPANY DEL CIVIL DOS TRENCH
										$consulta_company_civil_dos_trench="SELECT * FROM company WHERE id='".$rows_civil_plans['company_dos_trench_detail_civil']."' ";
										$resultado_company_civil_dos_trench= mysqli_query($conexion,$consulta_company_civil_dos_trench);
										$fila_company_civil_dos_trench= mysqli_fetch_array($resultado_company_civil_dos_trench);

										?>	

										<select name="contact_manhole_electric" disabled="disabled">								
												<option value="<?php echo $fila_company_civil_dos_trench['id']; ?>"><?php echo $fila_company_civil_dos_trench['company']; ?></option>									
										</select>
								</div>	
																			
								
								
							</div>
						
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_tres_civil" id="check_proposed_tres_civil" value="si" disabled="disabled" <?php if ($rows_civil_plans['check_tres_trench_detail_civil'] == 'si') { echo "checked";} ?> />
									<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_tres_civil" style="cursor:pointer;" > 1-2" </label>  </div>
								</div>	
								
								<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
									<?php 
										// BUSCA EL COMPANY DEL CIVIL TRES TRENCH
										$consulta_company_civil_tres_trench="SELECT * FROM company WHERE id='".$rows_civil_plans['company_tres_trench_detail_civil']."' ";
										$resultado_company_civil_tres_trench= mysqli_query($conexion,$consulta_company_civil_tres_trench);
										$fila_company_civil_tres_trench= mysqli_fetch_array($resultado_company_civil_tres_trench);

										?>	

										<select name="contact_manhole_electric" disabled="disabled">								
												<option value="<?php echo $fila_company_civil_tres_trench['id']; ?>"><?php echo $fila_company_civil_tres_trench['company']; ?></option>									
										</select>
								</div>																		
								
							</div>
						
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_cuatro_civil" id="check_proposed_cuatro_civil" value="si" disabled="disabled" <?php if ($rows_civil_plans['micro_trench_detail_civil'] == 'si') { echo "checked";} ?> />
									<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;"> <label for="check_proposed_cuatro_civil" style="cursor:pointer;" > MICRO TRENCH </label>  </div>
								</div>	

								<input type="text" name="text_micro_trench" class="input_highway_pole" style="margin-left:0px; width:101px !important;float:left !important;height:35px !important;" disabled="disabled" value="<?php echo $rows_civil_plans['text_micro_trench_detail_civil']; ?>" />

								<div class="select_proposed_civil" style="margin-left:0px;margin-right:0px;width:151px;" >
									<?php 
										// BUSCA EL COMPANY DEL CIVIL CUATRO TRENCH
										$consulta_company_civil_cuatro_trench="SELECT * FROM company WHERE id='".$rows_civil_plans['company_micro_trench_detail_civil']."' ";
										$resultado_company_civil_cuatro_trench= mysqli_query($conexion,$consulta_company_civil_cuatro_trench);
										$fila_company_civil_cuatro_trench= mysqli_fetch_array($resultado_company_civil_cuatro_trench);

										?>	

										<select name="contact_manhole_electric" disabled="disabled">								
												<option value="<?php echo $fila_company_civil_cuatro_trench['id']; ?>"><?php echo $fila_company_civil_cuatro_trench['company']; ?></option>									
										</select>
								</div>	
																			
								
								
							</div>
						
							<div class="separador_civil" style="margin-top:113px;" ></div>
							
							<div class="div_option_civil width_option_civil"  > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
							
								<div class="container_div_select_under_pole" style="margin-left:10px;" >
								
									<textarea name="textarea_scope_installation_civil" placeholder="INSTALLATION'S NOTES" disabled="disabled"><?php echo  $rows_civil_plans['installations_notes_civil']; ?></textarea>
								</div>							
								
									
								</div>					
							</div>					
															
							
						</div>	


						
					</div>						
			
					<div class="content_option_inside" >

			<!-- PERMIT REQUEST -->		
				<div class="title_content_option_inside" > 
					<div class="div_title_content_option_inside"  >
						PERMIT REQUEST
						
						<div class="div_option_radio_inside" >
							<input type="radio" name="si_permit_request_manhole" id="si_permit_request_manhole" value="si" class="radio_click" disabled="disabled" <?php  if(isset($row_permit_request)){ echo "checked"; } ?>  />
							<label for="si_permit_request_manhole"> Yes </label>
							
							<input type="radio" name="si_permit_request_manhole" id="no_permit_request_manhole" value="no" class="radio_click" disabled="disabled" <?php  if(!isset($row_permit_request)){ echo "checked"; } ?>  />
							<label for="no_permit_request_manhole"> No </label>
						</div>
												
					</div>
					
				</div>
						
						<div class="container_click_option_inside"  <?php  if(isset($row_permit_request)){ echo "style='height: auto;'"; }?> >
						
								<div class="container_option_under_pole"> 
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_telephone_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_permit_request_plan['task_request_permit_civil']; ?>" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_telephone_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_permit_request_plan['date_task_request_permit_civil']; ?>" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_telephone_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_permit_request_plan['expected_return_permit_civil']; ?>" />
																			
									</div>		
								
								</div>	
								
								<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px; width:95%;" >
								
									
									<div class="div_check_utility" >
										
										<input type="checkbox" name="muni_civil" id="muni_civil" value="si" disabled="disabled" <?php if ($rows_permit_request_plan['muni_permit_civil'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="muni_civil" > MUNI CIVIL </label>  </div>
									</div>														
									<div class="div_check_utility" >
										
										<input type="checkbox" name="dcr_civil" id="dcr_civil" value="si" disabled="disabled" <?php if ($rows_permit_request_plan['dcr_permit_civil'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="dcr_civil" > DCR </label>  </div>
									</div>													
									<div class="div_check_utility" >
										
										<input type="checkbox" name="nh_dot_civil" id="nh_dot_civil" value="si" disabled="disabled" <?php if ($rows_permit_request_plan['nh_permit_civil'] == 'si'){echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="nh_dot_civil" > NH DOT </label>  </div>
									</div>												
									<div class="div_check_utility" >
										
										<input type="checkbox" name="ct_dot" id="ct_dot" value="si" disabled="disabled" <?php if ($rows_permit_request_plan['ct_dot_permit_civil'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="ct_dot" > CT DOT </label>  </div>
									</div>										
									<div class="div_check_utility" >
										
										<input type="checkbox" name="highway_civil" id="highway_civil" value="si" disabled="disabled" <?php if ($rows_permit_request_plan['highway_permit_civil'] == 'si'){echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="highway_civil" > HIGHWAY </label>  </div>
									</div>									
									<div class="div_check_utility" >
										
										<input type="checkbox" name="mass_dot_civil" id="mass_dot_civil" value="si" disabled="disabled" <?php if ($rows_permit_request_plan['mass_dot_permit_civil'] == 'si'){ echo "checked"; }  ?> />
										<div class="text_div_check_utility" > <label for="mass_dot_civil" > MASS DOT </label>  </div>
									</div>								
													
								
								</div>
										
								<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px;margin-bottom:20px; width:95%;" >
								
									
													
									<div class="div_check_utility" >
										
										<input type="checkbox" name="me_dot_civil" id="me_dot_civil" value="si" disabled="disabled" <?php if ($rows_permit_request_plan['me_dot_permit_civil'] == 'si'){ echo "checked"; }  ?> />
										<div class="text_div_check_utility" > <label for="me_dot_civil" > ME DOT </label>  </div>
									</div>						
									<div class="div_check_utility" style="margin-left:15px;" >
										
										<input type="checkbox" name="ny_dot_civil" id="ny_dot_civil" value="si" disabled="disabled" <?php if ($rows_permit_request_plan['ny_dot_permit_civil'] == 'si'){ echo "checked"; }  ?> />
										<div class="text_div_check_utility" > <label for="ny_dot_civil" > NY DOT </label>  </div>
									</div>			
									<div class="div_check_utility" >
										
										<input type="checkbox" name="railroad_civil" id="railroad_civil" value="si" disabled="disabled" <?php if ($rows_permit_request_plan['railrod_permit_civil'] == 'si'){ echo "checked"; }  ?> />
										<div class="text_div_check_utility" > <label for="railroad_civil" > RAILROAD </label>  </div>
									</div>		
									<div class="div_check_utility" >
										
										<input type="checkbox" name="ri_dot_civil" id="ri_dot_civil" value="si" disabled="disabled" <?php if ($rows_permit_request_plan['ri_dot_permit_civil'] == 'si'){ echo "checked"; }  ?> />
										<div class="text_div_check_utility" > <label for="ri_dot_civil" > RI DOT </label>  </div>
									</div>		
									<div class="div_check_utility" >
										
										<input type="checkbox" name="vi_dot_civil" id="vi_dot_civil" value="si" disabled="disabled" <?php if ($rows_permit_request_plan['vi_dot_permit_civil'] == 'si'){ echo "checked"; }  ?> />
										<div class="text_div_check_utility" > <label for="vi_dot_civil" > VI DOT </label>  </div>
									</div>						
								
								</div>
													
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_permit_civil" placeholder="SCOPE WORK" disabled="disabled"><?php  echo $rows_permit_request_plan['scope_work_permit_civil'];?></textarea>
								</div>
								
							
							</div>	
							<div class="separador_civil"  ></div>
							<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px;margin-bottom:20px; width:95%;" >
							
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_div_select_under_pole" > ASSIGNED COMPANY: </div>
									<div class="select_under_pole" style="margin-left:14px;width:151px;" >
										<?php 
											// BUSCA EL COMPANY DEL PERMIT REQUEST
											$consulta_company_permit_assigned="SELECT * FROM company WHERE id='".$rows_permit_request_plan['assigned_company_permit_civil']."' ";
											$resultado_company_permit_assigned= mysqli_query($conexion,$consulta_company_permit_assigned);
											$fila_company_permit_assigned= mysqli_fetch_array($resultado_company_permit_assigned);

											?>	

											<select name="contact_manhole_electric" disabled="disabled">								
													<option value="<?php echo $fila_company_permit_assigned['id']; ?>"><?php echo $fila_company_permit_assigned['company']; ?></option>									
											</select>
									</div>					
																	
								</div>
																
								
							</div>
						
							
							
						</div>
									
				
					
				</div>
				
					<div class="content_option_inside" >

			<!-- MWRA CIVIL PLANS TASK NEEDED -->
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								MWRA CIVIL PLANS TASK NEEDED
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_mwra_plans_civil" id="si_mwra_plans_civil" value="si" class="radio_click" disabled="disabled" <?php  if(isset($row_mwra_request)){ echo "checked"; } ?> />
									<label for="si_mwra_plans_civil" > Yes </label>
									
									<input type="radio" name="si_mwra_plans_civil" id="no_mwra_plans_civil" value="no" class="radio_click" disabled="disabled" <?php  if(!isset($row_mwra_request)){ echo "checked"; } ?> />
									<label for="no_mwra_plans_civil" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" <?php  if(isset($row_mwra_request)){ echo "style='height: auto;'"; }?> >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_mwra_plans_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_mwra_request_plans['task_request_mwra_civil']; ?>" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_mwra_plans_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_mwra_request_plans['date_task_request_mwra_civil']; ?>" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_mwra_plans_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_mwra_request_plans['date_task_request_mwra_civil']; ?>"  />
										
										<div class="text_div_select_under_pole" style="margin-top:23px;" > PROPOSED LENGTH </div>
									
										<input type="text" name="proposed_length_mwra_plans_civil" class="input_highway_pole" style="margin-top:10px !important ;" disabled="disabled" value="<?php echo $rows_mwra_request_plans['proposed_length_mwra_civil']; ?>" />
		
										
									</div>
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
                                    
                                    <div class="div_option_civil width_option_civil" style="width:40% !important;" > 
								
								<div class="text_option_pole" style="margin:0;" >EXISTING UTILITY PROFILE </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="existing_utility_profile" id="existing_utility_file_civil" value="si" disabled="disabled" <?php  if($rows_mwra_request_plans['existing_profile_mwra_civil'] == 'si'){ echo "checked"; } ?> />
										<label for="existing_utility_file_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="existing_utility_profile" id="no_existing_utility_profile" value="no" disabled="disabled" <?php  if($rows_mwra_request_plans['existing_profile_mwra_civil'] == 'no'){ echo "checked"; } ?> />
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
										<input type="radio" name="engineering_stamped_civil" id="existing_utility_file_civil" value="si" disabled="disabled" <?php  if($rows_mwra_request_plans['engineering_stamped_civil'] == 'si'){ echo "checked"; } ?> />
										<label for="existing_utility_file_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="engineering_stamped_civil" id="engineering_stamped_civil" value="no" disabled="disabled" <?php  if($rows_mwra_request_plans['engineering_stamped_civil'] == 'si'){ echo "checked"; } ?> />
										<label for="no_engineering_stamped_civil">No</label>
									</div>
									
								</div>
									
									
									</div>						
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > FROM </div>
									
										<input type="text" name="from_mwra_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_mwra_request_plans['from_mwra_civil']; ?>" />
										
									</div>	
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > TO </div>
									
										<input type="text" name="to_mwra_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_mwra_request_plans['to_mwra_civil']; ?>" />
										
									</div>						
									
								
								</div>	</div>
								
											
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_mrwa_civil" placeholder="SCOPE WORK" disabled="disabled"><?php echo $rows_mwra_request_plans['scope_work_mwra_civil']; ?> </textarea>
								</div>
								
							
							</div>	
							
												
							
						</div>
											
				</div>
				
					<div class="content_option_inside" >

			<!-- RAILROAD CROSSING PLANS TASK NEEDED -->
						<div class="title_content_option_inside"> 
							<div class="div_title_content_option_inside"  >
								RAILROAD CROSSING PLANS TASK NEEDED
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_railroad_plans_civil" id="si_railroad_plans_civil" value="si" class="radio_click" disabled="disabled" <?php  if(isset($row_railroad_request)){ echo "checked"; } ?> />
									<label for="si_railroad_plans_civil" > Yes </label>
									
									<input type="radio" name="si_railroad_plans_civil" id="no_railroad_plans_civil" value="no" class="radio_click" disabled="disabled" <?php  if(!isset($row_railroad_request)){ echo "checked"; } ?> />
									<label for="no_railroad_plans_civil" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside"  <?php  if(isset($row_railroad_request)){ echo "style='height: auto;'"; }?>>
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_railroad_plans_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_railroad_request_civil['task_request_railroad_civil']; ?>"  />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_railroad_plans_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_railroad_request_civil['date_task_request_railroad_civil']; ?>" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_railroad_plans_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_railroad_request_civil['expected_return_railroad_civil']; ?>" />
									
										
									</div>
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
                                    
                                    <!---->
                                    	  <div class="div_option_civil width_option_civil" style="width:40% !important;" > 
								
								<div class="text_option_pole" style="margin:0;" >RAILROAD CROSSING PROPOSED PLANS</div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="railroad_plans_radio_civil" value="si" disabled="disabled" <?php  if($rows_railroad_request_civil['crossing_proposed_railroad_civil'] == 'si'){ echo "checked"; } ?> />
										<label for="railroad_plans_radio_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="railroad_plans_radio_civil" value="no" disabled="disabled" <?php  if($rows_railroad_request_civil['crossing_proposed_railroad_civil'] == 'no'){ echo "checked"; } ?> />
										<label for="no_railroad_plans_radio_civil">No</label>
									</div>
									
								</div>
									
									
									</div>
                                
									</div>	
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
                                    
                                    <div class="div_option_civil width_option_civil" style="width:40% !important;" > 
								
								<div class="text_option_pole" style="margin:0;" >ENGINEERING STAMPED PLANS NEEDED</div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="engineering_stamped_railroad_civil" value="si" <?php  if($rows_railroad_request_civil['engineering_stamped_railroad_civil'] == 'si'){ echo "checked"; } ?>/>
										<label for="engineering_stamped_railroad_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="engineering_stamped_railroad_civil" value="no" <?php  if($rows_railroad_request_civil['engineering_stamped_railroad_civil'] == 'no'){ echo "checked"; } ?>/>
										<label for="no_engineering_stamped_railroad_civil">No</label>
									</div>
									
								</div>
									
									
									</div>
									
										
										
									
									</div>						
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > FROM </div>
									
										<input type="text" name="from_railroad_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_railroad_request_civil['from_railroad_civil']; ?>"/>
										
									</div>	
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > TO </div>
									
										<input type="text" name="to_railroad_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_railroad_request_civil['to_railroad_civil']; ?>" />
										
									</div>						
									
								
								</div>	
								
											
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_railroad_civil" placeholder="SCOPE WORK" disabled="disabled"><?php echo $rows_railroad_request_civil['scope_work_railroad_civil'] ?></textarea>
								</div>
								
							
							</div>	
							
												
							
						</div>
										
					
				</div>

			<!-- HIGHWAY TRAFFIC MANAGEMENT PLANS TASK NEEDED -->
					<div class="content_option_inside" >		
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								HIGHWAY TRAFFIC MANAGEMENT PLANS TASK NEEDED
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_highway_traffic_civil" id="si_highway_traffic_civil" value="si" class="radio_click" class="radio_click" disabled="disabled" <?php  if(isset($row_highway_request)){ echo "checked"; } ?> />
									<label for="si_highway_traffic_civil" > Yes </label>
									
									<input type="radio" name="si_highway_traffic_civil" id="no_highway_traffic_civil" value="no" class="radio_click" class="radio_click" disabled="disabled" <?php  if(!isset($row_highway_request)){ echo "checked"; } ?> />
									<label for="no_highway_traffic_civil" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside"  <?php  if(isset($row_highway_request)){ echo "style='height: auto;'"; }?>>
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_highway_traffic_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_highway_request_civil['task_request_highway_civil']; ?>" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_highway_traffic_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_highway_request_civil['task_request_highway_civil']; ?>" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_highway_traffic_civil" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_highway_request_civil['expected_return_highway_civil']; ?>" />
									
										
									</div>
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
                                    
                                      <!---->
                                    	  <div class="div_option_civil width_option_civil" style="width:45% !important;" > 
								
								<div class="text_option_pole" style="margin:0;" >HIGHWAY TRAFFIC MANAGEMENT PROPOSED PLANS</div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="highway_plans_radio_civil" value="si" disabled="disabled" <?php  if($rows_highway_request_civil['traffic_proposed_highway_civil'] == 'si'){ echo "checked"; } ?> />
										<label for="highway_plans_radio_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="highway_plans_radio_civil" value="no" disabled="disabled" <?php  if($rows_highway_request_civil['traffic_proposed_highway_civil'] == 'no'){ echo "checked"; } ?>  />
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
										<input type="radio" name="engineering_stamped_highway" value="si" disabled="disabled" <?php  if($rows_highway_request_civil['engineering_stamped_highway'] == 'si'){ echo "checked"; } ?>  />
										<label for="engineering_stamped_highway" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="engineering_stamped_highway" value="no" disabled="disabled" <?php  if($rows_highway_request_civil['engineering_stamped_highway'] == 'no'){ echo "checked"; } ?>  />
										<label for="no_engineering_stamped_highway">No</label>
									</div>
									
								</div>
									
									
									</div>
                                    <!---->
										
									
									</div>						
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > FROM </div>
									
										<input type="text" name="from_highway_traffic_civil" class="input_highway_pole"  disabled="disabled" value="<?php echo $rows_highway_request_civil['from_highway_civil']; ?>" />
										
									</div>	
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > TO </div>
									
										<input type="text" name="to_highway_traffic_civil" class="input_highway_pole"  disabled="disabled" value="<?php echo $rows_highway_request_civil['to_highway_civil']; ?>"/>
										
									</div>						
									
								
								</div>	
								
											
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_highway_traffic_civil" placeholder="SCOPE WORK" disabled="disabled"><?php echo $rows_highway_request_civil['scope_work_highway_civil'];; ?></textarea>
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