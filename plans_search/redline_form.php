<?php 
	include('include/head.php');
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

		$_SESSION['time_code'] = $time_code;

?>

<script src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/upload.js"></script> 

<script type="text/javascript">

			//////////////////////////////////////////////////////////////////////////////
			////////   TODO LO NECESARIO PARA EL MANEJO DE ARCHIVO EN EL PRIMER DIV   ///
			////////////////////////////////////////////////////////////////////////////

				/////////////////////////////////////////////////////////////
				////////   PARA SUBIR ARCHIVOS REDLINE DEL PRIMER DIV    ///
				///////////////////////////////////////////////////////////

							// SUBIR Y APLICAR AL PRIMER DIV DE IMAGENES
								function subirArchivoPrimero() {
			
									$("#archivoPrimero").upload('include/subir_archivo.php',
						            {
						               	nombre_archivo: $("#nombre_archivo").val(),
										code: $("#code").val(),
										type: $("#type").val()
										
									},
									
						            function(respuesta) {
						                //Subida finalizada.
						                $("#barra_de_progreso_primero").val(0);
						                if (respuesta === 0) {
						                    mostrarRespuestaPrimera('El archivo NO se ha podido subir.', false);
						                    $("#nombre_archivo, #archivo").val('');
						                } else {
											var type =  $("#type").val()

											alert("sdfdsf");
											
											$.get("include/select_temp.php", function (data) {
						               		 $(".temp").append(data);
						            		});
											
						                    mostrarRespuestaPrimera('Subido Correctamente.', true);
											mostrarArchivosPrimero();
											
											/*$.get("include/editor.php", function (data) {
												$(".editor_imagenes_content_first").append(data);
						            		});*/
											
											//$("body").css({ 'overflow': "hidden" });
											
											
						                }
						                
						            }, function(progreso, valor) {
						                //Barra de progreso.
						                $("#barra_de_progreso_primero").val(valor);
						            });

						        }

				////////////////////////////////////////////////////////////
				//////////   PARA ELIMINAR ARCHIVOS DEL PRIMER DIV  ///////
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

			    //////////////////////////////////////////////////////////////////////////
			    //       PARA MOSTRAR LOS NOMBRES DE LOS ARCHIVOS DEL PRIMER DIV       //
			    ////////////////////////////////////////////////////////////////////////  

			    	// MOSTRAR NOMBRE DE IMAGENES
				        function mostrarArchivosPrimero() {
							code = $("#code").val()
							type =  $("#type").val()
							
				            $.ajax({
				                url: 'include/mostrar_archivos.php',
				                type: 'POST',
								data: {type:type, code:code},
				                success: function(data) {
				                        
				                   $("#archivos_subidos_primero").append(data);
				                    
				                }
				            });
				        }

			    ////////////////////////////////////////////////////////////////////////////
			    //////////  PARA MOSTRAR LAS RESPUESTAS DE LAS ACCIONES DEL PRIMER DIV  ///
			    //////////////////////////////////////////////////////////////////////////

		            function mostrarRespuestaPrimera(mensaje, ok){
		                $("#respuesta_first").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
		                if(ok){
		                    $("#respuesta_first").addClass('alert-success');
		                }else{
		                    $("#respuesta_first").addClass('alert-danger');
		                }
		            }

		    //////////////////////////////////////////////////////////////////////////////
			////////  TODO LO NECESARIO PARA EL MANEJO DE ARCHIVO EN EL SEGUNDO DIV   ///
			////////////////////////////////////////////////////////////////////////////

				/////////////////////////////////////////////////////////////
				////////   PARA SUBIR ARCHIVOS REDLINE DEL SEGUNDO DIV    //
				///////////////////////////////////////////////////////////

								function subirArchivoSegundo() {
			
									$("#archivoSegundo").upload('include/subir_archivo.php',
						            {
						               	nombre_archivo: $("#nombre_archivo").val(),
										code: $("#code").val(),
										type: $("#type").val()
										
									},
									
						            function(respuesta) {
						                //Subida finalizada.
						                $("#barra_de_progreso_segundo").val(0);
						                if (respuesta === 0) {
						                    mostrarRespuestaSegundo('El archivo NO se ha podido subir.', false);
						                    $("#nombre_archivo, #archivo").val('');
						                } else {
											var type =  $("#type").val()
											
											$.get("include/select_temp.php", function (data) {
						               		 $(".temp").append(data);
						            		});
											
						                    mostrarRespuestaSegundo('Subido Correctamente.', true);
											mostrarArchivosSegundo();
											
											$.get("include/editor.php", function (data) {
												$(".editor_imagenes_content_second").append(data);
						            		});
											
											//$("body").css({ 'overflow': "hidden" });
											
											
						                }
						                
						            }, function(progreso, valor) {
						                //Barra de progreso.
						                $("#barra_de_progreso_segundo").val(valor);
						            });

						        }

				////////////////////////////////////////////////////////////
				//////////   PARA ELIMINAR ARCHIVOS DEL SEGUNDO DIV  //////
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

			    //////////////////////////////////////////////////////////////////////////
			    //       PARA MOSTRAR LOS NOMBRES DE LOS ARCHIVOS DEL SEGUNDO DIV      //
			    ////////////////////////////////////////////////////////////////////////  

			    	// MOSTRAR NOMBRE DE IMAGENES
				        function mostrarArchivosSegundo() {
							code = $("#code").val()
							type =  $("#type").val()
							
				            $.ajax({
				                url: 'include/mostrar_archivos.php',
				                type: 'POST',
								data: {type:type, code:code},
				                success: function(data) {
				                        
				                   $("#archivos_subidos_segundo").append(data);
				                    
				                }
				            });
				        }

			    /////////////////////////////////////////////////////////////////////////////
			    //////////  PARA MOSTRAR LAS RESPUESTAS DE LAS ACCIONES DEL SEGUNDO DIV  ///
			    //////////////////////////////////////////////////////////////////////////

		            function mostrarRespuestaSegundo(mensaje, ok){
		                $("#respuesta_second").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
		                if(ok){
		                    $("#respuesta_second").addClass('alert-success');
		                }else{
		                    $("#respuesta_second").addClass('alert-danger');
		                }
		            } 

		    //////////////////////////////////////////////////////////////////////////////
			////////  TODO LO NECESARIO PARA EL MANEJO DE ARCHIVO EN EL TERCERO DIV   ///
			////////////////////////////////////////////////////////////////////////////

				/////////////////////////////////////////////////////////////
				////////   PARA SUBIR ARCHIVOS REDLINE DEL TERCERO DIV    //
				///////////////////////////////////////////////////////////

								function subirArchivoTercero() {
			
									$("#archivoTercero").upload('include/subir_archivo.php',
						            {
						               	nombre_archivo: $("#nombre_archivo").val(),
										code: $("#code").val(),
										type: $("#type").val()
										
									},
									
						            function(respuesta) {
						                //Subida finalizada.
						                $("#barra_de_progreso_tercero").val(0);
						                if (respuesta === 0) {
						                    mostrarRespuestaTercero('El archivo NO se ha podido subir.', false);
						                    $("#nombre_archivo, #archivo").val('');
						                } else {
											var type =  $("#type").val()
											
											$.get("include/select_temp.php", function (data) {
						               		 $(".temp").append(data);
						            		});
											
						                    mostrarRespuestaTercero('Subido Correctamente.', true);
											mostrarArchivosTercero();
											
											$.get("include/editor.php", function (data) {
												$(".editor_imagenes_content_third").append(data);
						            		});
											
											//$("body").css({ 'overflow': "hidden" });
											
											
						                }
						                
						            }, function(progreso, valor) {
						                //Barra de progreso.
						                $("#barra_de_progreso_tercero").val(valor);
						            });

						        }

				////////////////////////////////////////////////////////////
				//////////   PARA ELIMINAR ARCHIVOS DEL TERCERO DIV  //////
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

			    //////////////////////////////////////////////////////////////////////////
			    //       PARA MOSTRAR LOS NOMBRES DE LOS ARCHIVOS DEL TERCERO DIV      //
			    ////////////////////////////////////////////////////////////////////////  

			    	// MOSTRAR NOMBRE DE IMAGENES
				        function mostrarRespuestaTercero() {
							code = $("#code").val()
							type =  $("#type").val()
							
				            $.ajax({
				                url: 'include/mostrar_archivos.php',
				                type: 'POST',
								data: {type:type, code:code},
				                success: function(data) {
				                        
				                   $("#archivos_subidos_tercero").append(data);
				                    
				                }
				            });
				        }

			    /////////////////////////////////////////////////////////////////////////////
			    //////////  PARA MOSTRAR LAS RESPUESTAS DE LAS ACCIONES DEL SEGUNDO DIV  ///
			    //////////////////////////////////////////////////////////////////////////

		            function mostrarArchivosTercero(mensaje, ok){
		                $("#respuesta_second").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
		                if(ok){
		                    $("#respuesta_second").addClass('alert-success');
		                }else{
		                    $("#respuesta_second").addClass('alert-danger');
		                }
		            }


    /////////////////////////////////////////////////////////////
    ///        LLAMADA DE LAS FUNCIONES SUBIRARCHIVOS()      ///
    ///////////////////////////////////////////////////////////
        $(document).ready(function() {
            //mostrarArchivos();
            $.get("include/editor.php", function (data) {
												$(".editor_imagenes_content_first").append(data);
						            		});
		        // BOTON SUBIR IMAGENES
		            $(".boton_subir").on('click', function() {
						var name = $(this).attr('name');
						//alert(name)

							if (name == "subir_first") {
		                		subirArchivoPrimero();
		                		
		                	}else if (name == "subir_second") {
		                		subirArchivoSegundo();

		                	}else if (name == "subir_third") {
		                		subirArchivoTercero();


		                	}


		            });



		        /////////////////////////////////////////////////////////////
			    ///      LLAMAR LAS FUNCIONES QUE ELIMINAN EL ARCHIVO    ///
			    ///////////////////////////////////////////////////////////

			        // CUANDO SE PRESIONA SE ELIMINA EL NOMBRE DEL ARCHIVO QUE SE ELIMINO
			            $("#archivos_subidos").on('click', '.eliminar_archivo', function() {

			                var archivo = $(this).parents('.row').eq(0).find('span').text();
			                archivo = $.trim(archivo);
			                eliminarArchivos(archivo);

			            });


        });

	/////////////////////////////////////////////////////////////
	////////   EXPORTA, GUARDA Y TRANSLADA LAS IMAGENES   //////
	///////////////////////////////////////////////////////////

	  var canvas;
	  var stage;
	  
		  function exportAndSaveCanvas()  {
			  
			  canvas = document.getElementById("canvas");

				// Get the canvas screenshot as PNG
				var screenshot = Canvas2Image.saveAsPNG(canvas, true);

				// This is a little trick to get the SRC attribute from the generated <img> screenshot
				canvas.parentNode.appendChild(screenshot);
				screenshot.id = "canvasimage";		
				type_plan = $("#type_plan").val();
				data = $('#canvasimage').attr('src');
				code = $("#code").val();
				
				
				//alert(type_plan);
				
				canvas.parentNode.removeChild(screenshot);


				// Send the screenshot to PHP to save it on the server
				var url = 'include/export.php';
				$.ajax({ 
				    type: "POST", 
				    url: url,
				    dataType: 'text',
				    data: {
				        base64data : data, codesend : code, type:type
				    },
					
					success: function(data) {
							$(".literally").remove();    
							$(".editor_imagenes").css({ 'display': "none" });
							$("body").css({ 'overflow': "auto" });
							//$(".temp").empty();
							 
						}
							
				});

			}


</script>

    
<body>
    <?php include("include/menu.php"); ?>

    <div class="container_title_request">
    
        <div class="center_title_request"> GULINC REQUEST JOB FORM </div>
    
    </div>	

    <div class="content_form">
        <!-- AQUI DEBE IR EL CONTENIDO DE LOS FORMULARIOS -->
        	<div class="container_form_redline">

            <div class="center_form" >

            	<!-- FIRST LINE -->

                	<div class="container_info_redline">
	                	<div class="container_service_number">
	                		<label for="txtServiceNumber">SERVICE #: </label>
	                		<input type="text" id="txtServiceNumber" class="inputRedline" />

	                	</div>

	                	<div class="container_date_requested">
	                		<label for="txtDateRequested">Date requested:</label>
	                		<input type="text" id="txtDateRequested" class="inputRedline" />

	                	</div>

     				</div>

     			<!-- SECOND LINE -->

                	<div class="container_info_redline">
	                	<div class="container_company_engineer">
	                		<label for="txtCompanyEngineer">Lightower Engineer:</label>
	                		<input type="text" id="txtCompanyEngineer" class="inputRedline" />

	                	</div>

	                	<div class="container_requested_by">
	                		<label for="txtRequestedBy">Requested by:</label>
	                		<input type="text" id="txtRequestedBy" class="inputRedline" />

	                	</div>
     				</div>

     			<!-- THRID LINE -->

                	<div class="container_job_details">
	                	
	                	<div class="container_job_info">
	                		<label for="txtJobLocation">Job Location: </label>
	                		<input type="text" id="txtJobLocation" class="inputRedline" />

	      				</div>

     				</div>

     			<!-- FORTH LINE -->

                	<div class="container_info_redline">
	                	<div class="container_type_request">
	                		<label for="txtTypeRequest">Type of request: </label>
	                		<input type="text" id="txtTypeRequest" class="inputRedline" />

	                	</div>


     				</div>

            </div>

        </div>

        <div class="bottom_container_form_redline">

            <div class="center_form">

            	<div class="container_title_type_street_detail">
            		UTILITY PLANS REQUEST FOR:	

            	</div>

            <!-- STREET DETAILS  -->
            	<div class="center_form">
        
                	<div class="container_working_streets">
                		<label for="txtWorkingStreets">Working Streets: </label>
                		<input type="text" id="txtWorkingStreets" class="inputRedline" />

      				</div>

      				<div class="container_from_street">
                		<label for="txtFromStreet"> FROM: </label>
                		<input type="text" id="txtFromStreet" class="inputRedline" />

      				</div>

      				<div class="container_to_street">
                		<label for="txtToStreet">TO: </label>
                		<input type="text" id="txtToStreet" class="inputRedline" />

      				</div>

      				<div class="container_textarea_descrip_notes">
      					<label for="txtDescripNotes"> Description / Note: </label>
      					<textarea id="txtDescripNotes"></textarea>

      				</div>

      				<div class="container_date_requested_completed" style="float: right;">
                		<label for="txtDateReCompleted">Request Completed:</label>
                		<input type="text" id="txtDateReCompleted" class="inputRedline" />

	                </div>
     	

            	</div>

            <!-- STREET PICTURES  -->

            	<!--  FIRST STREET PICTURES   -->
	            	<div class="center_form">
		            	<div class="container_first_road_picture_details">
		            		<div class="container_job_street_info">
		                		<label for="txtJobLocation">Job Location: </label>
		                		<input type="text" id="txtJobLocation" class="inputRedline" />

			      			</div>

				      			<div class="containerprueba">
	    
						    		<form action="javascript:void(0);" id="form_archivo">

							            <div class="div_file_inside" >

											<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside"> UPLOAD FILE (JPG OR PNG) </div> </div>
							               <input type="file" name="archivo" id="archivoPrimero" accept="image/x-png, image/gif, image/jpeg" />
							            </div>  
							               <input type="hidden" name="inside" id="code" value="<?php echo $time_code; ?>"/>
							               <input type="hidden" name="inside" id="type" value="redline_form"/>
							               <input type="submit" name="subir_first" class="boton_subir" value="Subir" class="btn btn-success" />
							               <progress id="barra_de_progreso_primero" value="0" max="100"></progress>

						            </form>

						            <div id="archivos_subidos_primero"></div>
									<div id="respuesta_first" class="alert"></div>

									<input type="button" class="copypaste_b" value="Copy Paste">	
					                
								</div>
			      		
			      			<div class="container_first_picture">
			      				<!--  DIVS PARA HABILITAR EL EDITOR  -->

								    <div class="temp"></div>  
								            
								        <div class="editor_street_pictures_first" style="overflow:auto">
								            <div class="cont-button-editor">
								                
								                <input type="button" value="Save current image" onClick="exportAndSaveCanvas()" style="padding: 22px;width: 15%;">

								            </div>
								            
								            <div class="editor_imagenes_content_first" style="width:100%; height:800px; margin:auto;">
								        
								                  <!-- AQUI CARGA EL EDITOR-->
								            
								             </div>
								        
								    </div>
		
				      		</div>

				      	</div>

		      	<!--  SECOND STREET PICTURE   -->
		      		<div class="container_second_road_picture_details">
	            		<div class="container_from_info">
	                		<label for="txtFromLocation">FROM:</label>
	                		<input type="text" id="txtFromLocation" class="inputRedline" />

		      			</div>
		      					<div class="containerprueba">
	    
						    		<form action="javascript:void(0);" id="form_archivo">

							            <div class="div_file_inside" >

											<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside"> UPLOAD FILE (JPG OR PNG) </div> </div>
							               <input type="file" name="archivo" id="archivoSegundo" accept="image/x-png, image/gif, image/jpeg" />

							            </div>  
							               <input type="hidden" name="inside" id="code" value="<?php echo $time_code; ?>"/>
							               <input type="hidden" name="inside" id="type" value="redline_form"/>
							               <input type="submit" name="subir_second" class="boton_subir" value="Subir" class="btn btn-success" />

							               <progress id="barra_de_progreso_segundo" value="0" max="100"></progress>

						            </form>

						            <div id="archivos_subidos_segundo"></div>
									<div id="respuesta_second" class="alert"></div>

									<input type="button" class="copypaste_b" value="Copy Paste">	
					                
								</div>

			      			<div class="container_second_picture">
			      				<!--  DIVS PARA HABILITAR EL EDITOR  -->

								    <div class="temp"></div>  
								            
								        <div class="editor_street_pictures_second" style="overflow:auto">
								            <div class="cont-button-editor">
								                
								                <input type="button" value="Save current image" onClick="exportAndSaveCanvas()" style="padding: 22px;width: 15%;">

								            </div>
								            
								            <div class="editor_imagenes_content_second" style="width:100%; height:800px; margin:auto;">
								        
								                  <!-- AQUI CARGA EL EDITOR-->
								            
								              </div>
								        
								    </div>
		
				      		</div>

				    </div>

			    <!-- THRID STREET PICTURE  -->
		      		<div class="container_thrid_road_picture_details">
	            		<div class="container_to_street_info">
	                		<label for="txtToLocation">TO: </label>
	                		<input type="text" id="txtToLocation" class="inputRedline" />

		      			</div>

		      				<div class="containerprueba">
	    
					    		<form action="javascript:void(0);" id="form_archivo">

						            <div class="div_file_inside">

										<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside"> UPLOAD FILE (JPG OR PNG) </div> </div>
						               <input type="file" name="archivo" id="archivoTercero" accept="image/x-png, image/gif, image/jpeg" />
						            </div>  
						               <input type="hidden" name="inside" id="code" value="<?php echo $time_code; ?>"/>
						               <input type="hidden" name="inside" id="type" value="redline_form"/>
						               <input type="submit" name="subir_third" class="boton_subir" value="Subir" class="btn btn-success" />
						               <progress id="barra_de_progreso_tercero" value="0" max="100"></progress>

					            </form>

					            <div id="archivos_subidos_tercero"></div>
								<div id="respuesta_third" class="alert"></div>

								<input type="button" class="copypaste_b" value="Copy Paste">	
					                
							</div>

		      			<div class="container_thrird_picture">
		      				<!--  DIVS PARA HABILITAR EL EDITOR  -->

							    <div class="temp"></div>  
							            
							        <div class="editor_street_pictures_third" style="overflow:auto">
							            <div class="cont-button-editor">
							                
							                <input type="button" value="Save current image" onClick="exportAndSaveCanvas()" style="padding: 22px;width: 15%;">

							            </div>
							            
							            <div class="editor_imagenes_content_third" style="width:100%; height:800px; margin:auto;">
							        
							                <!-- AQUI CARGA EL EDITOR-->
							            
							             </div>
							        
							    </div>
	
			      		</div>

			      	</div>

            	</div>

            </div>

        </div>
    </div>


</body>
</html>









