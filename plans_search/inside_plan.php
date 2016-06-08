<?php 
    include("../confi/conf.inc.php");
	//$time_code_inside=$_SESSION['time_code'];
	//$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
?>

<script type="text/javascript">
		/////////////////////////////////////////////////////////////
		//////////PARA SUBIR ARCHIVOS GENERAL E INSIDE /////////////
		///////////////////////////////////////////////////////////
 
		function subirArchivos() {
				$("#archivo").upload('include/subir_archivo.php',
                {
                   	nombre_archivo: $("#nombre_archivo").val(),
					code: $("#code").val(),
					type: $("#type").val()
					
				},
				
                function(respuesta) {
                    //Subida finalizada.
                    $("#barra_de_progreso").val(0);
                    if (respuesta === 0) {
                        mostrarRespuesta('El archivo NO se ha podido subir.', false);
                        $("#nombre_archivo, #archivo").val('');
                    } else {
						var type =  $("#type").val()
						
						$.get("include/select_temp.php", function (data) {
                   		 $(".temp").append(data);
                		});
						
						$(".editor_imagenes").fadeIn(200);
                        mostrarRespuesta('Subido Correctamente.', true);
						mostrarArchivos();
						
						$.get("include/editor.php", function (data) {
							$(".editor_imagenes_content").append(data);
                		});
						
						$("body").css({ 'overflow': "hidden" });
						
						
                    }
                    
                }, function(progreso, valor) {
                    //Barra de progreso.
                    $("#barra_de_progreso").val(valor);
                });
            }
			//Eliminar archivo
            function eliminarArchivos() {
				var id = $(".eliminar_archivo").attr('id')
				alert(id);  
	
                $.ajax({
                    url: 'include/eliminar_archivo.php',
                    type: 'POST',
                    timeout: 10000,
                    data: {id: id},
                    error: function() {
                        mostrarRespuesta('Error al intentar eliminar el archivo.', false);
                    },
                    success: function(respuesta) {
                        if (respuesta == 1) {
                            mostrarRespuesta('El archivo ha sido eliminado.', true);
							
                        } else {
							 
                            mostrarRespuesta('Error al intentar eliminar el archivo.', false);  
							                       
                        }
						
                    }
                });
            }
            function mostrarArchivos() {
				code = $("#code").val()
				type =  $("#type").val()
				
                $.ajax({
                    url: 'include/mostrar_archivos.php',
                    type: 'POST',
					data: {type:type, code:code},
                    success: function(data) {
                            
                            $("#archivos_subidos").append(data);
                        
                    }
                });
            }
            function mostrarRespuesta(mensaje, ok){
                $("#respuesta").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                if(ok){
                    $("#respuesta").addClass('alert-success');
                }else{
                    $("#respuesta").addClass('alert-danger');
                }
            }
            $(document).ready(function() {
                mostrarArchivos();
                $("#boton_subir").on('click', function() {
					var name = $(this).attr('name');
					alert(name)
                    subirArchivos();
                });
                $("#archivos_subidos").on('click', '.eliminar_archivo', function() {
                    var archivo = $(this).parents('.row').eq(0).find('span').text();
                    archivo = $.trim(archivo);
                    eliminarArchivos(archivo);
                });
            });
 </script>
     
      
  <script>
$(document).ready(function() {
    $("#submit_request").click(function() {
        
		  $.post($("#inside_plan_form").attr("action"), $("#inside_plan_form").serialize(),
          function(data) {
            $(".hola").append(data);
            
			
          });
      });
  });

</script>
<?php 

//$tipo = $_POST['tipo']; 
$id = $_POST['id']; 
echo $id;

//BUSCANDO BUILDING SITE SURVEY
$cons_buil="SELECT * FROM request WHERE id_request='$id' AND tipo='building_site_survey' AND usuario_id='".$_SESSION['id']."' ";

$res_buil= mysqli_query($conexion,$cons_buil);
$row_buil = mysqli_fetch_array($res_buil);

//BUILDING SITE SURVEY
$consulta_info="SELECT * FROM building_site_survey WHERE id_request='".$row_buil["id"]."'";
$resultado_info= mysqli_query($conexion,$consulta_info);
$fila_info = mysqli_fetch_array($resultado_info);

if(isset($fila_info)){
	echo 'building_site_survey';
	echo $fila_info['id'];
}
	

//BUSCANDO INSIDE PLAN
$consulta_id_inside="SELECT * FROM request WHERE id_request='$id' AND tipo='inside_plan' AND usuario_id='".$_SESSION['id']."' ";
$resultado_id_inside= mysqli_query($conexion,$consulta_id_inside);
$fila_id_inside = mysqli_fetch_array($resultado_id_inside);


//INSIDE PLAN 
$consulta_inside="SELECT * FROM inside_plans WHERE id_request='".$fila_id_inside["id"]."'";
$resultado_inside= mysqli_query($conexion,$consulta_inside);
$fila_inside = mysqli_fetch_array($resultado_inside);



if(isset($fila_inside)){
	echo 'inside';
	}



?>


	<!-- ESTE CODIGO PARA EL CONTENIDO DE INSIDE PLAN  -->
		<form id="inside_plan_form" name="inside_plan_form" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/data-file/isp.php" >
		<div class="content_form content_oculto"  id="content_inside_plan" >
		
			<div class="container_form" >

				<div class="center_form" >

					<div class="title_center_form" > INSIDE PLAN REQUEST </div>		
					
				
					
				</div>
				
			</div>
			<div class="container_form" >

				<div class="center_form" >

					<div class="div_label_existing" > 
                    
						
						<label for="existing" > EXISTING BUILDING </label>
						<input type="radio" name="new_building" id="existing" value="no" />
					</div>	

					<div class="div_label_existing" > 
					
						<label for="new" > NEW BUILDING </label>
						<input type="radio" name="new_building" id="new" value="si" />						
					</div>		
					
				
					
				</div>
				
			</div>
			
		  <div class="container_form" >

				<div class="center_form">
			    <!-- BUILDING SITE SURVEY  -->

					<div class="content_option_inside" >
						
						<div class="title_content_option_inside  " > 

							<div class="div_title_content_option_inside"  >
								BUILDING SITE SURVEY 

								<div class="div_option_radio_inside" >
									<input type="radio" name="si_survey" id="si_survey" value="si" disabled="disabled" class="radio_click" <?php if(isset($fila_info)){ echo "checked"; }?> />
									<label for="si_survey" > Yes </label>
									
									<input type="radio" name="si_survey" id="no_survey" value="no" disabled="disabled" class="radio_click" disabled="disabled" <?php if(!isset($fila_info)){ echo "checked"; }?>/>
									<label for="no_survey" > No </label>
								</div>
							
							</div>
						</div>
						
						<div class="container_click_option_inside" <?php if(isset($fila_info)){ echo 'style="height:auto"'; }?> >
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> SITE SURVEY </div>
								<input type="checkbox" name="active_survey" disabled="disabled" <?php if($fila_info['site_survey_company'] > 0){ echo 'checked' ;}?> />
							</div>
							<div class="container_click_check_inside" <?php if($fila_info['site_survey_company'] > 0){ echo 'style="height:auto"' ;}?>>
							<div class="div_select_survey">
										<?php 
										// BUSCA EL NOMBRE DE LA COMPANIA
										$consulta_company="SELECT * FROM company WHERE id='".$fila_info['site_survey_company']."' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										$fila_company= mysqli_fetch_array($resultado_company);
									
										?>	
                                
								<select name="company_survey" disabled="disabled">
									<option><?php echo $fila_company['company']; ?></option>
								</select>
							
							</div>
							<div class="div_select_survey">
								
                                <?php 	
								// BUSCA EL NOMBRE DEL CONTACTO
								$consulta_contact="SELECT * FROM contact WHERE id='".$fila_info['site_survey_contact']."' ";
								$resultado_contact= mysqli_query($conexion,$consulta_contact);
								$fila_contact= mysqli_fetch_array($resultado_contact);
								?>
                                	
								<select name="contact_survey" disabled="disabled" >
									<option><?php echo $fila_contact['contact']; ?></option>
								</select>
							
							</div>
							</div>
							
						</div>
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> ISP ENG. PLANS </div>
								<input type="checkbox" name="active_isp_eng_plans" class="click_check" disabled="disabled" <?php if($fila_info['isp_eng_plans_company'] > 0){ echo 'checked';}?>  />
							</div>
							<div class="container_click_check_inside" <?php if($fila_info['isp_eng_plans_company'] > 0){ echo 'style="height:auto"' ;}?>>
							<div class="div_select_survey">
								
								<select name="company_isp_eng_plans_site_survey" disabled="disabled">
									<?php 
										$consulta_company="SELECT * FROM company WHERE id='".$fila_info['isp_eng_plans_company']."' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										$fila_company= mysqli_fetch_array($resultado_company);
									?>										
										<option><?php echo $fila_company['company']; ?></option>									
								</select>
							
							</div>
						
							
							</div>
						</div>
						</div>
					</div>

				<!-- SP ENG. PLANS ONLY(NO SURVEY) -->	
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside " > 
							<div class="div_title_content_option_inside" >
								SP ENG. PLANS ONLY(NO SURVEY)
							
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_sp_eng_plans" id="si_sp_eng_plans" value="si" disabled="disabled" <?php if(isset($fila_inside['assigned_company_eng_isp_plans_no_survey'])){ echo "checked"; } ?> />
									<label for="si_sp_eng_plans" disabled="disabled"> Yes </label>
									
									<input type="radio" name="si_sp_eng_plans" disabled="disabled" id="no_sp_eng_plans" value="no" <?php if(!isset($fila_inside['assigned_company_eng_isp_plans_no_survey'])){ echo "checked"; } ?> />
									<label for="no_sp_eng_plans" disabled="disabled"> No </label>
								</div>
							
							</div>
						</div>
						<div class="container_click_option_inside" <?php if(isset($fila_inside['assigned_company_eng_isp_plans_no_survey'])){ echo 'style="height:auto"'; } ?>>
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> ENG. ISP PLANS </div>
								<input type="checkbox" name="active_eng_isp_plans" disabled="disabled" class="click_check" <?php if(isset($fila_inside['assigned_company_eng_isp_plans_no_survey'])){ echo "checked"; } ?>/>
							</div>
							<div class="container_click_check_inside" <?php if(isset($fila_inside['assigned_company_eng_isp_plans_no_survey'])){ echo 'style="height:auto"'; } ?>>
							<div class="div_select_survey">
								
								<select name="company_eng_isp_plans_no_survey" disabled="disabled" >
									<?php 
										$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_eng_isp_plans_no_survey']."' ";
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
					
				<!-- ISP AS-BUILT ENTIRE BLDG -->

					<div class="content_option_inside" >
						<div class="title_content_option_inside " > 
							<div class="div_title_content_option_inside" >
								ISP AS-BUILT ENTIRE BLDG
							
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_isp_as_built" disabled="disabled" id="si_isp_as_built" value="si" <?php if($fila_inside['assigned_company_site_survey_isp_as_built'] > 0 or $fila_inside['assigned_company_eng_isp_plans_isp_as_built'] > 0){ echo "checked"; } ?>/>
									<label for="si_isp_as_built" > Yes </label>
									
									<input type="radio" name="si_isp_as_built" disabled="disabled" id="no_isp_as_built" value="no" <?php if($fila_inside['assigned_company_site_survey_isp_as_built'] <= 0 or $fila_inside['assigned_company_eng_isp_plans_isp_as_built'] <= 0){ echo "checked"; } ?> />
									<label for="no_isp_as_built" > No </label>
								</div>
							
							</div>
						</div>
						<div class="container_click_option_inside" <?php if(isset($fila_inside['assigned_company_site_survey_isp_as_built'])){ echo 'style="height:auto;"'; } ?>>
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> SITE SURVEY </div>
								<input type="checkbox" name="active_site_survey_as_built" disabled="disabled" class="click_check" <?php if(isset($fila_inside['assigned_company_site_survey_isp_as_built'])){ echo "checked"; } ?>/>
							</div>
							<div class="container_click_check_inside" <?php if(isset($fila_inside['assigned_company_site_survey_isp_as_built'])){ echo 'style="height:auto;"'; } ?>>
							<div class="div_select_survey">
								
								<select name="company_site_survey_isp_as_built" disabled="disabled">
									<?php 
										$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_eng_isp_plans_no_survey']."' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										$fila_company= mysqli_fetch_array($resultado_company);
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
																		
								</select>
							
							</div>
							<div class="div_select_survey">
								
								<select name="contact_site_survey_isp_as_built" disabled="disabled">
									<?php 
										$consulta_company="SELECT * FROM contact WHERE id='".$fila_inside['contact_site_survey_isp_as_built']."' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										$fila_company= mysqli_fetch_array($resultado_company);
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>										
								</select>
							
							</div>
							</div>
							
						</div>
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> ENG. ISP PLANS </div>
								<input type="checkbox" name="active_eng_isp_plans_as_built" class="click_check" disabled="disabled" <?php if($fila_inside['assigned_company_eng_isp_plans_isp_as_built'] > 0){ echo "checked"; } ?>/>
							</div>
							<div class="container_click_check_inside" <?php if(isset($fila_inside['assigned_company_eng_isp_plans_isp_as_built'])){ echo 'style="height:auto;"'; } ?>>
							<div class="div_select_survey">
								
								<select name="company_eng_isp_plans_isp_as_built" >
									<?php 
										$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_eng_isp_plans_isp_as_built']."' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										$fila_company= mysqli_fetch_array($resultado_company);
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
																			
								</select>
							
							</div>
							</div>
					
							
						</div>
						</div>
					</div>
					
				<!-- PASSIVE FILTER SURVEY -->
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside " > 
							<div class="div_title_content_option_inside" >
								PASSIVE FILTER SURVEY
							
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_passive_filter" id="si_passive_filter" value="si" disabled="disabled" <?php if($fila_inside['assigned_company_site_survey_passive_filter'] > 0 or $fila_inside['assigned_company_eng_isp_plans_passive_filter'] > 0){ echo "checked"; } ?>/>
									<label for="si_passive_filter" > Yes </label>
									
									<input type="radio" name="si_passive_filter" id="no_passive_filter" value="no" disabled="disabled" <?php if($fila_inside['assigned_company_site_survey_passive_filter'] <= 0 or $fila_inside['assigned_company_eng_isp_plans_passive_filter'] <= 0){ echo "checked"; } ?> />
									<label for="no_passive_filter" > No </label>
								</div>
							
							</div>
						</div>
						<div class="container_click_option_inside" <?php if(isset($fila_inside['assigned_company_site_survey_passive_filter'])){ echo 'style="height:auto;"'; } ?>>
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> SITE SURVEY </div>
								<input type="checkbox" name="active_site_survey_passive_filter" disabled="disabled" class="click_check" <?php if($fila_inside['assigned_company_site_survey_passive_filter'] > 0){ echo "checked"; } ?> />
							</div>
							<div class="container_click_check_inside" <?php if($fila_inside['assigned_company_site_survey_passive_filter'] > 0){ echo "style='height:auto;'"; } ?>>
							<div class="div_select_survey">
								
								<select name="company_site_survey_passive_filter_survey" disabled="disabled" >
									<?php 
										$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_site_survey_passive_filter']."' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										$fila_company= mysqli_fetch_array($resultado_company);
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
																	
								</select>
							
							</div>
							<div class="div_select_survey">
								
								<select name="contact_site_survey_passive_filter_survey" >
									<?php 
										$consulta_company="SELECT * FROM contact WHERE id='".$fila_inside['assigned_company_site_survey_passive_filter']."' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										$fila_company= mysqli_fetch_array($resultado_company)
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>
																	
								</select>
							
							</div>
							</div>
							
						</div>
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> ENG. ISP PLANS </div>
								<input type="checkbox" name="active_eng_isp_plans_passive_filter" disabled="disabled" class="click_check" <?php if($fila_inside['assigned_company_eng_isp_plans_passive_filter'] > 0){ echo "checked"; } ?>/>
							</div>
							<div class="container_click_check_inside" <?php if($fila_inside['assigned_company_eng_isp_plans_passive_filter'] > 0){ echo "style='height:auto;'"; } ?> >
							<div class="div_select_survey">
								
								<select name="company_eng_isp_plans_passive_filter_survey" >
									<?php 
										$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_eng_isp_plans_passive_filter']."' ";
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
				
				<!-- RESEARCH FLOOR -->
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside " > 
							<div class="div_title_content_option_inside" >
								RESEARCH FLOOR
							
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_research_floor" id="si_research_floor" disabled="disabled" value="si" <?php if($fila_inside['assigned_company_site_survey_research_floor'] > 0){ echo "checked"; } ?> />
									<label for="si_research_floor" > Yes </label>
									<input type="radio" name="si_research_floor" id="no_research_floor" disabled="disabled" value="no" <?php if($fila_inside['assigned_company_site_survey_research_floor'] <= 0){ echo "checked"; } ?> />
									<label for="no_research_floor" > No </label>
								</div>
							
							</div>
						</div>
						<div class="container_click_option_inside" <?php if($fila_inside['assigned_company_site_survey_research_floor'] > 0){ echo "style='height:auto;'"; } ?>>
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> SITE SURVEY </div>
								<input type="checkbox" name="active_site_survey_research_floor" disabled="disabled" class="click_check" <?php if($fila_inside['assigned_company_site_survey_research_floor'] > 0){ echo "checked"; } ?> />
							</div>
							<div class="container_click_check_inside" <?php if($fila_inside['assigned_company_site_survey_research_floor'] > 0){ echo "style='height:auto;'"; } ?>>
								<div class="container_input_research_floor" >
									<div class="text_container_input_research_floor" > Working floors </div>
									<input type="text" name="floor_research_floor" disabled="disabled" placeholder="Floor" value="<?php echo $fila_inside['floor_site_survey_research_floor'] ?>" />
								</div>
								<div class="div_select_survey">
									
									<select name="company_site_surve_research_floor" disabled="disabled" >
									<?php 
										$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_site_survey_research_floor']."' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										$fila_company= mysqli_fetch_array($resultado_company)
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
													
									</select>
								
								</div>
					
							</div>
							
							
							
						</div>
						</div>
					
					</div>
					
				<!-- COMPANY INFO -->	
					<div class="container_company" >
						
						<div class="div_container_company div_container_company_uno" >
							<div class="div_title_company" > <div> CABLE INSTALLATION CONTRACTOR'S CONTACT </div> </div>
							
							<div class="div_select_company" >
								<select name="company_cable_inside">
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
							<input type="text" name="contact_name_cable_inside" placeholder="CONTACT NAME" class="input_cable_inside" />
							<input type="text" name="contact_number_cable_inside" placeholder="CONTACT #" class="input_cable_inside" />
							<input type="text" name="contact_email_cable_inside" placeholder="CONTACT'S EMAIL" class="input_cable_inside" />
							
						</div>
						<div class="div_container_company div_container_company_dos" >
							<div class="div_title_company" > <div> TENANT'S CONTACT </div> </div>
							<div class="div_select_company" >
								<select name="company_tenant_inside">
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
							<input type="text" name="contact_name_tenant_inside" placeholder="CONTACT NAME" class="input_cable_inside" />
							<input type="text" name="contact_number_tenant_inside" placeholder="CONTACT #" class="input_cable_inside" />
							<input type="text" name="contact_email_tenant_inside" placeholder="CONTACT'S EMAIL" class="input_cable_inside" />							
						
						</div>
						<div class="div_container_company div_container_company_tres" >
							<div class="div_title_company" > <div> PROPERTY MANAGER'S CONTACT </div> </div>
							<div class="div_select_company" >
								<select name="company_property">
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
							<input type="text" name="contact_name_property" placeholder="CONTACT NAME" class="input_cable_inside" />
							<input type="text" name="contact_number_property" placeholder="CONTACT #" class="input_cable_inside" />
							<input type="text" name="contact_email_property" placeholder="CONTACT'S EMAIL" class="input_cable_inside" />										
							
						</div>
						
					</div>					
					
					
				  <textarea name="scope_work_inside_plans" placeholder="SCOPE WORK" ></textarea>
                  <input type="hidden"  id="type" name="type_plan" value="inside_plan"/>
                  <input type="hidden" name="code_plan" id="code" value="<?php echo $_SESSION['time_code']; ?>"/>
                   
            	</form>
            <div class="containerprueba">
    
    		<form action="javascript:void(0);" id="form_archivo">
            <div class="div_file_inside" >
				<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside"> UPLOAD FILE (JPG OR PNG) </div> </div>
               <input type="file" name="archivo" id="archivo" />
            </div>  
               <input type="hidden" name="inside" id="code" value="<?php echo $time_code_inside; ?>"/>
               <input type="hidden" name="inside" id="type" value="inside_plan"/>
               <input type="submit" id="boton_subir" value="Subir" class="btn btn-success" />
               <progress id="barra_de_progreso" value="0" max="100"></progress>
            </form>
            <div id="archivos_subidos"></div>
			<div id="respuesta" class="alert"></div>
				
                
			</div>
            <input type="button" class="copypaste_b" value="Copy Paste">
            
          
    </div>
    
    <script>
	
	$(".copypaste_b").click(function(){
		
		
		$("#copypaste").css({
			"display":"block"
		
		});
			});
	</script>
    
			<script>
				$(document).ready(function(){
				
				 $('input').iCheck({
					checkboxClass: 'icheckbox_square',
					radioClass: 'iradio_square',
					increaseArea: '20%' // optional
				  });
				
					///////////////////////////////////////////////////////////////////////
					// CLICK EN RADIO BUTTON INSIDE PLAN
					//////////////////////////////////////////////////////////////////////
					
					//$('input').iCheck('update');
					$('input ').on('ifClicked ', function(event) {
						if ($(this).attr("name")=="new_building" ) {
							
						} else {
							
							if ($(this).attr("value")=="si" ) {
								
								$(this).parents(".title_content_option_inside").siblings(".container_click_option_inside").css({
									"height":"auto"
								});
								
							}else{
								$(this).parents(".title_content_option_inside").siblings(".container_click_option_inside").css({
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
            
    
	<!-- FIN CODIGO PARA EL CONTENIDO DE INSIDE PLAN  -->
		
		
		

		
		
		
		
		
		
		
		
		
		
		