<?php 
    include("../confi/conf.inc.php");
	//$time_code_inside=$_SESSION['time_code'];
	//$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
?>
	<script src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/upload.js"></script>
  
<script>

		    ///////////////////////////////////////////////////////////////////////
			// ABRIR LIGHTBOX REDLINE INSIDE PLAN 
			//////////////////////////////////////////////////////////////////////	
		
				$(".container_redline").click(function(){

					/*$("body").css({ "overflow":"hidden" });
					$(".fondo_list_job").fadeIn(100);
					//$(".fancy_list_job").append(data);
					
					$(".fancy_list_job").css({
						left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,

					});

					console.log("http://"+hostname+ruta+"include/redline_forms/upload_picture_window.php");*/

						$.ajax({
							type: 'POST',
							url: "http://"+hostname+ruta+"editor.php",
							success: function(data) {   
								$("body").css({ "overflow":"hidden" });
								$(".fondo_list_job").fadeIn(100);
								$(".fancy_list_job").append(data);
								
								$(".fancy_list_job").css({
									left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,

								});
														
							}

						});

						
				});


	
		$(".copypaste_b").click(function(){
			
			
			$("#copypaste").css({
				"display":"block"
			
			});

		});

	</script> 

<script type="text/javascript">

	/////////////////////////////////////////////////////////////
	////////    PARA SUBIR ARCHIVOS GENERAL E INSIDE   /////////
	///////////////////////////////////////////////////////////
 			
 			///  SUBIR FOTOS Y ABRIR EL EDITOR

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

		    ///  SUBIR CUALQUIER ARCHIVO

		    	function subirCualArchivo() {
					$("#archivoCualquiera").upload('include/subir_archivo_cualquiera.php',
		            {
		               	nombre_archivo: $("#nombre_archivo").val(),
						code: $("#code").val(),
						type: $("#type").val()
						
					},
					
		            function(respuesta) {
		                //Subida finalizada.
		                $("#barra_de_progreso_cual").val(0);
		                if (respuesta === 0) {
		                    mostrarRespuestaCual('El archivo NO se ha podido subir.', false);
		                    $("#archivoCualquiera").val('');
		                } else {
		                	mostrarRespuestaCual('Subido Correctamente.', true);
							mostrarArchivosCual();
							$("#archivoCualquiera").val('');
							
		                }
		                
		            }, function(progreso, valor) {
		                //Barra de progreso.
		                $("#barra_de_progreso_cual").val(valor);

		            });

		        }

	////////////////////////////////////////////////////////////
	//////////        PARA ELIMINAR ARCHIVOS       ////////////
	//////////////////////////////////////////////////////////
            function eliminarArchivos() {
				var id = $(".eliminar_archivo").attr('id')
				//alert(id);  
	
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

            ///  ELIMINAR CUALQUIER ARCHIVO
	            function eliminarArchivosCual() {
					var id = $(".eliminar_archivo").attr('id')
					//alert(id);  
		
	                $.ajax({
	                    url: 'include/eliminar_archivo.php',
	                    type: 'POST',
	                    timeout: 10000,
	                    data: {id: id},
	                    error: function() {
	                        mostrarArchivosCual('Error al intentar eliminar el archivo.', false);
	                    },
	                    success: function(respuesta) {
	                        if (respuesta == 1) {
	                            mostrarArchivosCual('El archivo ha sido eliminado.', true);
								
	                        } else {
								 
	                            mostrarArchivosCual('Error al intentar eliminar el archivo.', false);  
								                       
	                        }
							
	                    }

	                });

	            }

    /////////////////////////////////////////////////////////////
    //////////   PARA MOSTRAR LOS NOMBRES DE LOS ARCHIVOS    ///
    ///////////////////////////////////////////////////////////  

    	// MOSTRAR NOMBRE DE IMAGENES
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

	    // MOSTRAR NOMBRE DE OTROS ARCHIVOS
	        function mostrarArchivosCual() {
				code = $("#code").val()
				type =  $("#type").val()
				
	            $.ajax({
	                url: 'include/mostrar_archivos.php',
	                type: 'POST',
					data: {type:type, code:code},
	                success: function(data) {

	                   	$("#archivos_subidos_cualquiera").append(data);

 
	                }

	            });

	        }

    /////////////////////////////////////////////////////////////
    //////////  PARA MOSTRAR LAS RESPUESTAS DE LAS ACCIONES  ///
    ///////////////////////////////////////////////////////////

    		// MOSTRAR LAS RESPUESTAS DEL SERVIDOR SI ES IMAGENES 
	            function mostrarRespuesta(mensaje, ok){
	                $("#respuesta").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
	                if(ok){
	                    $("#respuesta").addClass('alert-success');
	                }else{
	                    $("#respuesta").addClass('alert-danger');
	                }
	            }

	        // MOSTRAR LAS RESPUESTAS DEL SERVIDOR SI ES CUALQUIER COSA
	            function mostrarRespuestaCual(mensaje, ok){
	                $("#respuestaCual").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
	                if(ok){
	                    $("#respuestaCual").addClass('alert-success');
	                }else{
	                    $("#respuestaCual").addClass('alert-danger');
	                }
	            }

    /////////////////////////////////////////////////////////////
    ///      LLAMADA DE LA PRIMERA FUNCION SUBIRARCHIVO()    ///
    ///////////////////////////////////////////////////////////
        $(document).ready(function() {
            mostrarArchivos();

            	// BOTON SUBIR CUALQUIER ARCHIVO
		            $("#boton_subir_cualquier").on('click', function() {
		            	///mostrarArchivosCual();
		                subirCualArchivo();

		            });

		            // CUANDO SE PRESIONA SE ELIMINA EL NOMBRE DEL ARCHIVO QUE SE ELIMINO
			            $("#archivos_subidos_cualquiera").on('click', '.eliminar_archivo', function() {
			 			    var archivo = $(this).parents('.row').eq(0).find('span').text();
			                archivo = $.trim(archivo);

			                	console.log($(this).parents('.row').eq(0).find('span').text());

			                eliminarArchivosCual(archivo);

			            });

		        // BOTON SUBIR IMAGENES
		            $("#boton_subir").on('click', function() {
						var name = $(this).attr('name');
						//alert(name)
		                subirArchivos();

		            });

		        // CUANDO SE PRESIONA SE ELIMINA EL NOMBRE DEL ARCHIVO QUE SE ELIMINO
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


	<!-- ESTE CODIGO PARA EL CONTENIDO DE INSIDE PLAN  -->
		<form id="inside_plan_form" name="inside_plan_form" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/data-file/isp.php" >
		<div class="content_form content_oculto"  id="content_inside_plan" >
		
			<div class="container_form">

				<div class="center_form" >

					<div class="title_center_form" > INSIDE PLAN REQUEST </div>		
					
				
					
				</div>
				
			</div>
			<div class="container_form">

				<div class="center_form">

					<div class="div_label_existing"> 
                  
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

					<div class="content_option_inside" >
						
						<div class="title_content_option_inside  " > 
							<div class="div_title_content_option_inside"  >
								BUILDING SITE SURVEY 
							
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_survey" id="si_survey" value="si" class="radio_click" />
									<label for="si_survey" > Yes </label>
									
									<input type="radio" name="si_survey" id="no_survey" value="no" class="radio_click" checked />
									<label for="no_survey" > No </label>
								</div>
							
							</div>
						</div>
						
						<div class="container_click_option_inside" >
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> SITE SURVEY </div>
								<input type="checkbox" name="active_survey" class="click_check" />
							</div>
							<div class="container_click_check_inside" >
							<div class="div_select_survey">
								
								<select name="company_survey" >
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
								
								<select name="contact_survey" >
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
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> ISP ENG. PLANS </div>
								<input type="checkbox" name="active_isp_eng_plans" class="click_check"  />
							</div>
							<div class="container_click_check_inside" >
							<div class="div_select_survey">
								
								<select name="company_isp_eng_plans_site_survey" >
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
						
							
							</div>
						</div>
						</div>
					</div>
					
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside " > 
							<div class="div_title_content_option_inside" >
								SP ENG. PLANS ONLY(NO SURVEY)
							
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_sp_eng_plans" id="si_sp_eng_plans" value="si" />
									<label for="si_sp_eng_plans" > Yes </label>
									
									<input type="radio" name="si_sp_eng_plans" id="no_sp_eng_plans" value="no" checked />
									<label for="no_sp_eng_plans" > No </label>
								</div>
							
							</div>
						</div>
						<div class="container_click_option_inside" >
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> ENG. ISP PLANS </div>
								<input type="checkbox" name="active_eng_isp_plans" class="click_check" />
							</div>
							<div class="container_click_check_inside" >
							<div class="div_select_survey">
								
								<select name="company_eng_isp_plans_no_survey" >
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
		
							</div>
							
						</div>
						</div>
					
					</div>
					
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside " > 
							<div class="div_title_content_option_inside" >
								ISP AS-BUILT ENTIRE BLDG
							
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_isp_as_built" id="si_isp_as_built" value="si" />
									<label for="si_isp_as_built" > Yes </label>
									
									<input type="radio" name="si_isp_as_built" id="no_isp_as_built" value="no" checked />
									<label for="no_isp_as_built" > No </label>
								</div>
							
							</div>
						</div>
						<div class="container_click_option_inside" >
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> SITE SURVEY </div>
								<input type="checkbox" name="active_site_survey_as_built" class="click_check" />
							</div>
							<div class="container_click_check_inside" >
							<div class="div_select_survey">
								
								<select name="company_site_survey_isp_as_built" >
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
								
								<select name="contact_site_survey_isp_as_built" >
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
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> ENG. ISP PLANS </div>
								<input type="checkbox" name="active_eng_isp_plans_as_built" class="click_check" />
							</div>
							<div class="container_click_check_inside" >
							<div class="div_select_survey">
								
								<select name="company_eng_isp_plans_isp_as_built" >
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
							</div>
					
							
						</div>
						</div>
					</div>
					
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside " > 
							<div class="div_title_content_option_inside" >
								PASSIVE FILTER SURVEY
							
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_passive_filter" id="si_passive_filter" value="si" />
									<label for="si_passive_filter" > Yes </label>
									
									<input type="radio" name="si_passive_filter" id="no_passive_filter" value="no" checked />
									<label for="no_passive_filter" > No </label>
								</div>
							
							</div>
						</div>
						<div class="container_click_option_inside" >
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> SITE SURVEY </div>
								<input type="checkbox" name="active_site_survey_passive_filter" class="click_check" />
							</div>
							<div class="container_click_check_inside" >
							<div class="div_select_survey">
								
								<select name="company_site_survey_passive_filter_survey" >
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
								
								<select name="contact_site_survey_passive_filter_survey" >
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
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> ENG. ISP PLANS </div>
								<input type="checkbox" name="active_eng_isp_plans_passive_filter" class="click_check" />
							</div>
							<div class="container_click_check_inside" >
							<div class="div_select_survey">
								
								<select name="company_eng_isp_plans_passive_filter_survey" >
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
							</div>
					
							
						</div>
						</div>
					</div>
					
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside " > 
							<div class="div_title_content_option_inside" >
								RESEARCH FLOOR
							
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_research_floor" id="si_research_floor" value="si" />
									<label for="si_research_floor" > Yes </label>
									
									<input type="radio" name="si_research_floor" id="no_research_floor" value="no" checked />
									<label for="no_research_floor" > No </label>
								</div>
							
							</div>
						</div>
						<div class="container_click_option_inside" >
						<div class="container_option_survey" >
							
							<div class="title_container_option_survey" >
								<div class="text_title_container_option_survey"> SITE SURVEY </div>
								<input type="checkbox" name="active_site_survey_research_floor" class="click_check" />
							</div>
							<div class="container_click_check_inside" >
								<div class="container_input_research_floor" >
									<div class="text_container_input_research_floor" > Working floors </div>
									<input type="text" name="floor_research_floor" placeholder="Floor" />
								</div>
								<div class="div_select_survey">
									
									<select name="company_site_surve_research_floor" >
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
					
							</div>
							
							
							
						</div>
						</div>
					
					</div>
					
					
					<div class="container_company" >
						
						<div class="div_container_company div_container_company_uno" >
							<div class="div_title_company" > <div> CABLE INSTALLATION CONTRACTOR'S CONTACT </div> </div>
							
							<div class="div_select_company" >
								<select name="company_cable">
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
								<select name="company_tenant">
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
					
					
				  <textarea class="scope_work_inside_plans" name="scope_work_inside_plans" placeholder="SCOPE WORK" ></textarea>
                  <input type="hidden"  id="type" name="type_plan" value="inside_plan"/>
                                 
            	</form>

            	<div class="container_redline" dir="inside_plan">
					<!-- <a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>redline_form.php" target="_blank"> -->
	    
		    			<div id="btnOpenRedline"> OPEN REDLINE </div>	

		    		<!-- </a> -->
	                
				</div>

          <!--   <div class="containerprueba">
    
	    		<form action="javascript:void(0);" id="form_archivo">
	            <div class="div_file_inside" >
					<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside"> UPLOAD FILE (JPG OR PNG) </div> </div>
	               <input type="file" name="archivo" id="archivo" accept="image/x-png, image/gif, image/jpeg" />
	            </div>  
	               <input type="hidden" name="inside" id="code" value="<?php echo $time_code_inside; ?>"/>
	               <input type="hidden" name="inside" id="type" value="inside_plan"/>
	               <input type="submit" id="boton_subir" value="Subir" class="btn btn-success" />
	               <progress id="barra_de_progreso" value="0" max="100"></progress>
	            </form>
	            <div id="archivos_subidos"></div>
				<div id="respuesta" class="alert"></div>

				<input type="button" class="copypaste_b" value="Copy Paste">	 
                
			</div> -->

			<div class="container_any_file">
    
	    		<form action="javascript:void(0);" id="form_archivo">
	            <div class="div_file_inside" >
					<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside"> UPLOAD OTHER FILES </div> </div>
	               <input type="file" name="archivo" id="archivoCualquiera" />
	            </div>  
	               <input type="hidden" name="inside" id="code" value="<?php echo $time_code_inside; ?>"/>
	               <input type="hidden" name="inside" id="type" value="inside_plan"/>
	               <input type="submit" id="boton_subir_cualquier" value="Subir" class="btn btn-success" />
	               <progress id="barra_de_progreso_cual" value="0" max="100"></progress>
	            </form>
	            <div id="archivos_subidos_cualquiera"></div> 
				<div id="respuestaCual" class="alert"></div>	
                
			</div>

			
				
           
            
          
    </div>
    
 
    
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
		
		
		

		
		  
		
		
		
		
		
		
		
		
		