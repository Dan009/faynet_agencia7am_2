<?php 
    include("../confi/conf.inc.php");
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
?>	

<script type="text/javascript">
	/////////////////////////////////////////////////////////////
	//////////PARA SUBIR ARCHIVOS GENERAL E INSIDE /////////////
	///////////////////////////////////////////////////////////
 			function subirArchivosPole() {
				$("#archivo_ab").upload('include/subir_archivo.php',
                {
                   	nombre_archivo: $("#nombre_archivo_ab").val(),
					code: $("#code").val(),
					type: $("#type_ab").val()
					
				},
				
                function(respuesta) {
                    //Subida finalizada.
                    $("#barra_de_progreso_ab").val(0);
                    if (respuesta === 0) {
                        mostrarRespuestaPole('El archivo NO se ha podido subir.', false);
                        $("#nombre_archivo_ab, #archivo_ab").val('');
                    } else {
						var type =  $("#type_ab").val()
						
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
                    $("#barra_de_progreso_ab").val(valor);
                });
            }
			//Eliminar archivo
            function eliminarArchivosPole() {
				var id = $(".eliminar_archivo_ab").attr('id')  
	
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
				type =  $("#type_ab").val()
				
				
                $.ajax({
                    url: 'include/mostrar_archivos.php',
                    type: 'POST',
					data: {type:type, code:code},
                    success: function(data) {
                            
                            $("#archivos_subidos_ab").append(data);
                        
                    }
                });
            }
            function mostrarRespuestaPole(mensaje, ok){
                $("#respuesta_ab").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                if(ok){
                    $("#respuesta_ab").addClass('alert-success');
                }else{
                    $("#respuesta_ab").addClass('alert-danger');
                }
            }
            $(document).ready(function() {
                mostrarArchivosPole();
                $("#boton_subir_ab").on('click', function() {
                    subirArchivosPole();
					var name = $(this).attr('name');
                });
                $("#archivos_subidos_ab").on('click', '.eliminar_archivo_ab', function() {
                    var archivo = $(this).parents('.row').eq(0).find('span').text();
                    archivo = $.trim(archivo);
                    eliminarArchivosPole(archivo);
                });
            });
        </script>
<script>

$(document).ready(function() {
    $("#submit_request").click(function() {
        
		  $.post($("#ab_record_form").attr("action"), $("#ab_record_form").serialize(),
          function(data) {
            $(".hola").append(data);
            
			
          });
      });
  });

</script>	
<?php 

$id = $_POST['id']; 

		//BUSCANDO en tabla electric_request_utility_plans
			//BUSCANDO electric_request_utility_plans
				$cons_electric_request ="SELECT * FROM request WHERE id_request='$id' AND tipo='electric_request_utility_plans' AND usuario_id='".$_SESSION['id']."' ";
				$res_electric_request= mysqli_query($conexion,$cons_electric_request);
				$row_electric_request= mysqli_fetch_array($res_electric_request);

			// Data desde electric_request_utility_plans
				$consulta_electric_request_plan ="SELECT * FROM electric_request_utility_plans WHERE id_request='".$row_electric_request["id"]."'";
				$resultado_electric_request_plan= mysqli_query($conexion,$consulta_electric_request_plan);
				$rows_electric_request_plan = mysqli_fetch_array($resultado_electric_request_plan);	

		//BUSCANDO en tabla telephone_request_utility_plans
			//BUSCANDO telephone_request_utility_plans
				$consc_telephone_request ="SELECT * FROM request WHERE id_request='$id' AND tipo='telephone_request_utility_plans' AND usuario_id='".$_SESSION['id']."' ";
				$res_telephone_request= mysqli_query($conexion,$consc_telephone_request);
				$row_telephone_request= mysqli_fetch_array($res_telephone_request);

			// Data desde telephone_request_utility_plans
				$consulta_telephone_request_plan ="SELECT * FROM telephone_request_utility_plans WHERE id_request='".$row_telephone_request["id"]."'";
				$resultado_telephone_request_plan= mysqli_query($conexion,$consulta_telephone_request_plan);
				$rows_telephone_request_plan = mysqli_fetch_array($resultado_telephone_request_plan);

		//BUSCANDO en tabla private_request_utility_plans
			//BUSCANDO private_request_utility_plans
				$consc_private_requestt ="SELECT * FROM request WHERE id_request='$id' AND tipo='private_request_utility_plans' AND usuario_id='".$_SESSION['id']."' ";
				$res_private_request= mysqli_query($conexion,$consc_private_requestt);
				$row_private_request= mysqli_fetch_array($res_private_request);

			// Data desde private_request_utility_plans
				$consulta_private_request_plan ="SELECT * FROM private_request_utility_plans WHERE id_request='".$row_telephone_request["id"]."'";
				$resultado_private_request_plan= mysqli_query($conexion,$consulta_private_request_plan);
				$rows_private_request_plan = mysqli_fetch_array($resultado_private_request_plan);

		//BUSCANDO en tabla all_request_utility_plans
			//BUSCANDO all_request_utility_plans
				$consc_all_request ="SELECT * FROM request WHERE id_request='$id' AND tipo='all_request_utility_plans' AND usuario_id='".$_SESSION['id']."' ";
				$res_all_request= mysqli_query($conexion,$consc_all_request);
				$row_all_request= mysqli_fetch_array($res_all_request);

			// Data desde all_request_utility_plans
				$consulta_all_request_plan ="SELECT * FROM all_request_utility_plans WHERE id_request='".$row_all_request["id"]."'";
				$resultado_all_request_plan= mysqli_query($conexion,$consulta_all_request_plan);
				$rows_all_request_plan = mysqli_fetch_array($resultado_all_request_plan);	

		//BUSCANDO en tabla find_request_utility_plans
			//BUSCANDO find_request_utility_plans
				$consc_find_request ="SELECT * FROM request WHERE id_request='$id' AND tipo='find_request_utility_plans' AND usuario_id='".$_SESSION['id']."' ";
				$res_find_request= mysqli_query($conexion,$consc_find_request);
				$row_find_request= mysqli_fetch_array($res_find_request);

			// Data desde find_request_utility_plans
				$consulta_find_request_plan ="SELECT * FROM find_request_utility_plans WHERE id_request='".$row_find_request["id"]."'";
				$resultado_find_requestt_plan= mysqli_query($conexion,$consulta_find_request_plan);
				$rows_find_request_plan = mysqli_fetch_array($resultado_find_requestt_plan);	


 ?>
<div class="content_form content_oculto"  id="content_utility_ab_record" >

			<div class="container_form" >

				<div class="center_form" >

					<div class="title_center_form" > UTILITY RECORD PLANS REQUEST </div>		
					
				
					
				</div>
				
			</div>
			
            <form id="ab_record_form" name="ab_record" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/data-file/ab_record.php" >
			<div class="container_form" >

				<div class="center_form" >

				<!-- ELECTRIC PLAN REQUEST  -->
					<div class="content_option_inside" >				
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								ELECTRIC PLAN REQUEST
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_electric_plan_utility" id="electric_plan_utility" value="si" class="radio_click" disabled="disabled" <?php  if(isset($row_electric_request)){ echo "checked"; } ?> />
									<label for="si_electric_plan_utility" > Yes </label>
									
									<input type="radio" name="si_electric_plan_utility" id="no_electric_plan_utility" value="no" class="radio_click" disabled="disabled" <?php  if(!isset($row_electric_request)){ echo "checked"; } ?> />
									<label for="no_electric_plan_utility" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" <?php  if(isset($row_electric_request)){ echo "style='height: auto;'"; }?> >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_utility" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_electric_request_plan['task_request_number_utility']; ?>" />
		
										<div class="text_div_select_under_pole" > Note: Minimun of 6 working days  </div>
									
										
									</div>
									
								
								</div>	
								
					
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > Utility Company: </div>
									<div class="select_under_pole">
										<?php 
											// BUSCA EL COMPANY DEL ELECTRIC PLAN REQUEST
											$consulta_company_electric_request_utility="SELECT * FROM company WHERE id='".$rows_electric_request_plan['company_utility']."' ";
											$resultado_company_electric_request_utility= mysqli_query($conexion,$consulta_company_electric_request_utility);
											$fila_company_electric_request_utility= mysqli_fetch_array($resultado_company_electric_request_utility);
										
											?>	

										<select name="contact_manhole_electric" disabled="disabled">								
												<option value="<?php echo $fila_company_electric_request_utility['id']; ?>"><?php echo $fila_company_electric_request_utility['company']; ?></option>									
										</select>

									</div>	
									
									<div class="text_div_select_under_pole" > Path Length </div>
								
									<input type="text" name="path_length_utility" class="input_path_utility" disabled="disabled" value="<?php echo $rows_electric_request_plan['path_length_utility']; ?>"/>		

									<div class="div_check_utility" style="margin-top:10px;margin-left:20px;margin-right:0px;" >
										
										<input type="checkbox" name="check_attached_map_electric_utility" id="check_attached_map_electric_utility" value="si" disabled="disabled" <?php if ($rows_electric_request_plan['see_attached_map_utility'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="check_attached_map_electric_utility" > See attached map </label>  </div>
									</div>											
																	
								</div>

							</div>	
							
							<div class="container_option_under_pole" style="padding:0px;" > 						
								<div class="container_div_select_under_pole" >		

									<input type="text" placeholder="FROM" name="form_utility" class="input_from_utility"  disabled="disabled" value="<?php echo $rows_electric_request_plan['from_electric_utility']; ?>" />
									<input type="text" placeholder="TO" name="to_utility" class="input_from_utility" disabled="disabled" value="<?php echo $rows_electric_request_plan['to_electric_utility']; ?>" />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_utility" placeholder="SCOPE WORK" disabled="disabled"><?php echo $rows_electric_request_plan['scope_word_electric_utility']; ?></textarea>
								</div>
								
							
							</div>							
							
						</div>
						
					</div>
							
				<!-- TELEPHONE PLAN REQUEST  -->		
					<div class="content_option_inside" >	
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								TELEPHONE PLAN REQUEST
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_telephone_plan_utility" id="si_telephone_plan_utility" value="si" class="radio_click"  disabled="disabled" <?php  if(isset($row_telephone_request)){ echo "checked"; } ?> />
									<label for="si_telephone_plan_utility" > Yes </label>
									
									<input type="radio" name="si_telephone_plan_utility" id="no_telephone_plan_utility" value="no" class="radio_click" disabled="disabled" <?php  if(!isset($row_telephone_request)){ echo "checked"; } ?> />
									<label for="no_telephone_plan_utility" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" <?php  if(isset($row_telephone_request)){ echo "style='height: auto;'"; }?>>
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_telephone_utility" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_telephone_request_plan['task_request_number_telephone']; ?>"/>
									
									
										
										<div class="text_div_select_under_pole" > Note: Minumun of 6 working days  </div>
									
										
									</div>
									
								
								</div>	
								
					
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > Utility Company: </div>
									<div class="select_under_pole">
										<?php 
											// BUSCA EL COMPANY DEL TELEPHONE PLAN
											$consulta_company_request_telephone="SELECT * FROM company WHERE id='".$rows_telephone_request_plan['company_utility_telephone']."' ";
											$resultado_company_request_telephone= mysqli_query($conexion,$consulta_company_request_telephone);
											$fila_company_request_telephone= mysqli_fetch_array($resultado_company_request_telephone);
										
											?>	

										<select name="contact_manhole_electric" disabled="disabled">								
												<option value="<?php echo $fila_company_request_telephone['id']; ?>"><?php echo $fila_company_request_telephone['company']; ?></option>									
										</select>

									</div>	
									
									<div class="text_div_select_under_pole" > Path Length </div>
								
									<input type="text" name="path_length_telephone_utility" class="input_path_utility" disabled="disabled" value="<?php echo $rows_telephone_request_plan['path_length_utility_telephone']; ?>" />	
									
									<div class="div_check_utility" style="margin-top:10px;margin-left:20px;margin-right:0px;" >
										
										<input type="checkbox" name="check_attached_map_telephone_utility" id="check_attached_map_telephone_utility" value="si" disabled="disabled" <?php if ($rows_telephone_request_plan['see_attached_map_telephone'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="check_attached_map_telephone_utility" > See attached map </label>  </div>
									</div>											

								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_telephone_utility" class="input_from_utility" disabled="disabled" value="<?php echo $rows_telephone_request_plan['from_utility_telephone']; ?>" />
									<input type="text" placeholder="TO" name="to_telephone_utility" class="input_from_utility" disabled="disabled" value="<?php echo $rows_telephone_request_plan['to_utility_telephone']; ?>" />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_telephone_utility" placeholder="SCOPE WORK" disabled="disabled"><?php echo $rows_telephone_request_plan['scope_work_telephone'] ?></textarea>
								</div>
								
							
							</div>							
							
						</div>
						
					</div>
							
				<!-- PRIVATE P. PLAN REQUEST  -->			
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								PRIVATE P. PLAN REQUEST
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_private_plan_utility" id="si_private_plan_utility" value="si" class="radio_click" disabled="disabled" <?php  if(isset($row_private_request)){ echo "checked"; } ?> />
									<label for="si_private_plan_utility" > Yes </label>
									
									<input type="radio" name="si_private_plan_utility" id="no_private_plan_utility" value="no" class="radio_click" disabled="disabled" <?php  if(!isset($row_private_request)){ echo "checked"; } ?> />
									<label for="no_private_plan_utility" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" <?php  if(isset($row_private_request)){ echo "style='height: auto;'"; }?>>
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_private_plan_utility" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_private_request_plan['task_request_number_private']; ?>" />
									
									
										
										<div class="text_div_select_under_pole" > Note: Minumun of 6 working days  </div>
									
										
									</div>
									
								
								</div>	
								
					
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > Utility Company: </div>
									<div class="select_under_pole">
										<?php 
											// BUSCA EL COMPANY DEL PRIVATE P. PLAN
											$consulta_company_request_private_plan="SELECT * FROM company WHERE id='".$rows_private_request_plan['company_utility_private']."' ";
											$resultado_company_request_private_plan= mysqli_query($conexion,$consulta_company_request_private_plan);
											$fila_company_request_private_plan= mysqli_fetch_array($resultado_company_request_private_plan);
										
											?>	

										<select name="contact_manhole_electric" disabled="disabled">								
												<option value="<?php echo $fila_company_request_private_plan['id']; ?>"><?php echo $fila_company_request_private_plan['company']; ?></option>									
										</select>
									</div>	
									
									<div class="text_div_select_under_pole" > Path Length </div>
								
									<input type="text" name="path_length_private_plan_utility" class="input_path_utility" disabled="disabled" value="<?php echo $rows_private_request_plan['path_length_private']; ?>" />							
								
									<div class="div_check_utility" style="margin-top:10px;margin-left:20px;margin-right:0px;" >
										
										<input type="checkbox" name="check_attached_map_private_utility" id="check_attached_map_private_utility" value="si" disabled="disabled" <?php if ($rows_private_request_plan['see_attached_map_private'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="check_attached_map_private_utility" > See attached map </label>  </div>
									</div>											
																
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_private_plan_utility" class="input_from_utility" disabled value="<?php echo $rows_private_request_plan['from_utility_private']; ?>" />
									<input type="text" placeholder="TO" name="to_private_plan_utility" class="input_from_utility" disabled value="<?php echo $rows_private_request_plan['to_utility_private']; ?>"/>
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_private_plan_utility" placeholder="SCOPE WORK" disabled="disabled"><?php echo $rows_private_request_plan['scope_work_private']?></textarea>
								</div>
								
							
							</div>							
							
						</div>
						
					</div>
											
				<!-- ALL UTILITY PLAN REQUEST  -->			
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								ALL UTILITY PLAN REQUEST
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_all_plan_utility" id="si_all_plan_utility" value="si" class="radio_click" disabled="disabled" <?php  if(isset($row_all_request)){ echo "checked"; } ?> />
									<label for="si_all_plan_utility" > Yes </label>
									
									<input type="radio" name="si_all_plan_utility" id="no_all_plan_utility" value="no" class="radio_click" disabled="disabled" <?php  if(!isset($row_all_request)){ echo "checked"; } ?> />
									<label for="no_all_plan_utility" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" <?php  if(isset($row_all_request)){ echo "style='height: auto;'"; }?>>
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_all_plan_utility" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_all_request_plan['task_request_number_all_utility']; ?>" />
									
									
										
										<div class="text_div_select_under_pole" > Note: Minumun of 6 working days  </div>
									
										
									</div>
									
								
								</div>	
								
					
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > Utility Company: </div>
									<div class="select_under_pole">
										<?php 
											// BUSCA EL COMPANY DEL ALL UTILITY
											$consulta_company_request_all_utility="SELECT * FROM company WHERE id='".$rows_all_request_plan['company_all_utility']."' ";
											$resultado_company_request_all_utility= mysqli_query($conexion,$consulta_company_request_all_utility);
											$fila_company_request_all_utility= mysqli_fetch_array($resultado_company_request_all_utility);
										
											?>	

										<select name="contact_manhole_electric" disabled="disabled">								
												<option value="<?php echo $fila_company_request_all_utility['id']; ?>"><?php echo $fila_company_request_all_utility['company']; ?></option>									
										</select>
									</div>	
									
									<div class="text_div_select_under_pole" > Path Length </div>
								
									<input type="text" name="path_length_all_plan_utility" class="input_path_utility" disabled="disabled" value="<?php echo $rows_all_request_plan['path_lenth_all_utility']; ?>" />		
									
									<div class="div_check_utility" style="margin-top:10px;margin-left:20px;margin-right:0px;" >
										
										<input type="checkbox" name="check_attached_map_all_utility" id="check_attached_map_all_utility" value="si" disabled="disabled" <?php if ($rows_all_request_plan['see_attached_map_all_utility'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="check_attached_map_all_utility" > See attached map </label>  </div>
									</div>											
								
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_all_plan_utility" class="input_from_utility" disabled="disabled" value="<?php echo $rows_all_request_plan['from_all_utility']; ?>" />
									<input type="text" placeholder="TO" name="to_all_plan_utility" class="input_from_utility" disabled="disabled" value="<?php echo $rows_all_request_plan['to_all_utility']; ?>" />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_all_plan_utility" placeholder="SCOPE WORK" disabled="disabled"><?php echo $rows_all_request_plan['scope_work_all_utility']; ?></textarea>
								</div>
								
							
							</div>							
							
						</div>
						
					</div>
										
				<!-- FIND A POSSIBLE PATH REQUEST  -->				
					<div class="content_option_inside" >					
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								FIND A POSSIBLE PATH REQUEST
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_find_plan_utility" id="si_find_plan_utility" value="si" class="radio_click" disabled="disabled" <?php  if(isset($row_find_request)){ echo "checked"; } ?>/>
									<label for="si_find_plan_utility" > Yes </label>
									
									<input type="radio" name="si_find_plan_utility" id="no_find_plan_utility" value="no" class="radio_click" disabled="disabled" <?php  if(!isset($row_find_request)){ echo "checked"; } ?> />
									<label for="no_find_plan_utility" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" <?php  if(isset($row_find_request)){ echo "style='height: auto;'"; }?>>
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_find_plan_utility" class="input_highway_pole" disabled="disabled" value="<?php echo $rows_find_request_plan['task_request_number_find_utility']; ?>" />
									
									
										
										<div class="text_div_select_under_pole" > Note: Minumun of 6 working days  </div>
									
										
									</div>
									
								
								</div>	
								
					
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
								
									
									<div class="text_div_select_under_pole" > Path Length </div>
								
									<input type="text" name="path_length_find_plan_utility" class="input_path_utility" disabled="disabled" value="<?php echo $rows_find_request_plan['path_lenth_find_utility']; ?>" />							
								
								</div>
								
								<div class="container_div_select_under_pole" style="margin-top:20px;" >
								
								
									
									<div class="div_check_utility" >
										
										<input type="checkbox" name="check_find_aerial_path" id="check_find_aerial_path" value="si" disabled="disabled" <?php if ($rows_find_request_plan['find_aerial_utility'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="check_find_aerial_path" > Find aerial path </label>  </div>
									</div>														
									<div class="div_check_utility" >
										
										<input type="checkbox" name="check_find_underground_path" id="check_find_underground_path" value="si" disabled="disabled" <?php if ($rows_find_request_plan['find_underground_utility'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="check_find_underground_path" > Find underground path </label>  </div>
									</div>													
									<div class="div_check_utility" >
										
										<input type="checkbox" name="check_elec_path" id="check_elec_path" value="si" disabled="disabled" <?php if ($rows_find_request_plan['elec_find_utility'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="check_elec_path" > Elec </label>  </div>
									</div>												
									<div class="div_check_utility" >
										
										<input type="checkbox" name="check_tel_path" id="check_tel_path" value="si" disabled="disabled" <?php if ($rows_find_request_plan['tel_find_utility'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="check_tel_path" > Tel </label>  </div>
									</div>										
									<div class="div_check_utility" >
										
										<input type="checkbox" name="check_private_path" id="check_private_path" value="si" disabled="disabled" <?php if ($rows_find_request_plan['private_find_utility'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="check_private_path" > Private </label>  </div>
									</div>									
									<div class="div_check_utility" >
										
										<input type="checkbox" name="check_attached_path" id="check_attached_path" value="si" disabled="disabled" <?php if ($rows_find_request_plan['see_attached_redline_map_utility'] == 'si') {echo "checked";}  ?> />
										<div class="text_div_check_utility" > <label for="check_attached_path" > See attached redline map </label>  </div>
									</div>						
								
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" > 
								
									<input type="text" placeholder="FROM" name="form_find_plan_utility" class="input_from_utility" disabled="disabled" value="<?php echo $rows_find_request_plan['from_find_utility']; ?>" />
									<input type="text" placeholder="TO" name="to_find_plan_utility" class="input_from_utility" disabled="disabled" value="<?php echo $rows_find_request_plan['to_find_utility']; ?>" />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_find_plan_utility" placeholder="SCOPE WORK" disabled="disabled"><?php echo $rows_find_request_plan['scope_work_find_utility']; ?></textarea>
                                    <input type="hidden" name="code_plan" id="code" value="<?php echo $_SESSION['time_code']; ?>"/>
                                	<input type="hidden" name="type_plan" value="ab_record"/>
								</div>
								
							
							</div>							
							
						</div>
						
					</div>
                    </form>
                    <div class="containerprueba">
    
    		<form action="javascript:void(0);" id="form_archivo_ab" name="ab">
            <div class="div_file_inside" >
				<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside">UPLOAD FILE (JPG OR PNG)</div> </div>
               <input type="file" name="archivo" id="archivo_ab" />
            </div>  
               <input type="hidden" name="code" id="code" value="<?php echo $time_code_inside; ?>"/>
               <input type="hidden" name="type" id="type_ab" value="ab_record"/>
               <input type="submit" id="boton_subir_ab" value="Subir" name="ab_record" class="btn btn-success" />
               <progress id="barra_de_progreso_ab" value="0" max="100"></progress>
            </form>
            <div id="archivos_subidos_ab" style="border:#F00 solid 1px"></div>
			<div id="respuesta_ab" class="alert_ab"></div>
				
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