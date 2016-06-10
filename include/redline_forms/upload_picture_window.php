<?php 
	//include("../head.php");

 ?>

<script type="text/javascript">

	var contadorVentanas = 1;

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
				
		                subirArchivoPrimero();
		              

		            });

		       


        }); 	

    ////////////////////////////////////////////////////////////
    ///////////           OTRAS FUNCIONES           ///////////
    //////////////////////////////////////////////////////////
    	$(document).on("click", ".div_readline_title_ventana",function(){
			console.log("fdgdfgfg");
			var id_content=$(this).attr("name");
			$(".container_readline_form").fadeOut(0);			
			$("#"+id_content).fadeIn(100);
			
			$(".div_readline_title_ventana").removeClass("ventana_activa");
			$(this).addClass("ventana_activa");
		
		
		});

    	$("#btnAddNewWindow").click(function(){
    		contadorVentanas++;
    		//alert(contadorVentanas);

    			$("#ventana_window_1").removeClass("ventana_activa");

    		$("<div/>",{
    			"class" : "div_readline_title_ventana ventana_activa",
    			name : "content_window_"+contadorVentanas,
    			id : "ventana_window_"+contadorVentanas,
    			style : "display:block;",
    			text : "Window N. "+contadorVentanas
    		}).appendTo(".container_redline_title .center_title_request");

    	});

 </script>

  	<div class="container_redline_title">
    
        <div class="center_title_request"> 
			<div class="div_readline_title_ventana ventana_activa" name="content_window_1" id="ventana_window_1" style="display:block;">Window N. 1</div>

			<div class="div_readline_title_ventana" name="content_window_2" id="ventana_window_2" style="display:block;">Window N. 2</div>

			<!-- <div class="div_readline_title_ventana" id="ventana_window_2" name="content_window_2" style="display:block;">Window N. 2</div> -->

		</div>
    
   	</div>

   	<div class="content_form">

        <div class="container_readline_form" id="content_window_1">

            <div class="center_form">
            	<div class="temp"></div>  
								            
			        <div class="editor_street_pictures_first" style="overflow:auto">
			            <div class="cont-button-editor">
			                
			                <input type="button" value="Save current image" onClick="exportAndSaveCanvas()" style="padding: 13px;width: 15%;">

			                <input type="button" id="btnAddNewWindow" value="Add new window" style="padding: 13px;width: 15%;float:right;">


			            </div>
			            
			            <div class="editor_imagenes_content_first" style="width:100%; height:800px; margin:auto;">
			 
			                  <!-- AQUI CARGA EL EDITOR-->
			            
			             </div>
			        
			    </div>

            </div>

        </div>

    </div>