<?php 

    $consulta_information="SELECT * FROM general_information WHERE id='$id_information' ";
    $resultado_information= mysqli_query($conexion,$consulta_information);
    $fila_information= mysqli_fetch_array($resultado_information);

        // BUSCAMOS LA INFORMACION DEL PROPERTY MANAGER
            $consulta_property_manager = "SELECT * FROM property_managers WHERE id_request='$id_request'";
            $resultado_property_manager = mysqli_query($conexion,$consulta_property_manager);
            $fila_property_manager = mysqli_fetch_array($resultado_property_manager);

                //var_dump($fila_property_manager);


?>

<script type="text/javascript">

	/////////////////////////////////////////////////////////////
	//////////PARA SUBIR ARCHIVOS GENERAL E INSIDE /////////////
	///////////////////////////////////////////////////////////
 
		function subirArchivos() {
           /* var nombreArchivo = $("#nombre_archivo").val();
            var code = $("#code").val();
            var type = $("#type").val();

                $.ajax({
                    type: "POST",
                    url: "include/subir_archivo.php",
                    data: {nombre_archivo:nombreArchivo,code:code,type:type<?php if(isset($_GET['id_information'])){echo ",id_information: $id_information";} ?>},
                    success: function(data){
                        $(".temp").append(data);

                    }

                });*/

            $("#archivo").upload('include/subir_archivo.php',
            {
                nombre_archivo: $("#nombre_archivo").val(),
                code: $("#code").val(),
                type: $("#type").val()<?php if(isset($_GET['id_information'])){echo ",\nid_information: $id_information";} ?>

            },
            
            function(respuesta) {       
                //Subida finalizada.
                $("#barra_de_progreso").val(0);
                        window.stop();
                    if (respuesta === 0) {
                        mostrarRespuesta('El archivo NO se ha podido subir.', false);
                        $("#nombre_archivo, #archivo").val('');
                    } else {
                            var type =  $("#type").val()                
                            console.log("Comienza el select temp");
                            console.log("prueba.php");
            
                        $.get("include/select_temp.php", function (data) {
                                alert(data);
                            
                            $(".temp").append(data);
                         
                        });
                        
                        
                        $(".editor_imagenes").fadeIn(200);
                        
                            mostrarRespuesta('Subido Correctamente.', true);
                            mostrarArchivos();
        
                        $.get("include/editor.php", function (data) {
                            $(".editor_imagenes_content").append(data);
                        });
                        
                        $("body").css({ 'overflow': "hidden" });
                        
                        window.stop();
                        
                        
                    }
                        
                }, function(progreso, valor) {
                    //Barra de progreso.
                    $("#barra_de_progreso").val(valor);

                });/**/

        }

    /////////////////////////////////////////////////////////////
    //////////        PARA ELIMINAR ARCHIVOS       /////////////
    ///////////////////////////////////////////////////////////
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

    /////////////////////////////////////////////////////////////
    //////////   PARA MOSTRAR LOS NOMBRES DE LOS ARCHIVOS    ///
    ///////////////////////////////////////////////////////////

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

    /////////////////////////////////////////////////////////////
    //////////   PARA MOSTRAR LOS NOMBRES DE LOS ARCHIVOS    ///
    ///////////////////////////////////////////////////////////
        function mostrarRespuesta(mensaje, ok){
            $("#respuesta").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
            if(ok){
                $("#respuesta").addClass('alert-success');
            }else{
                $("#respuesta").addClass('alert-danger');
            }
        }

    /////////////////////////////////////////////////////////////
    ///      LLAMADA DE LA PRIMERA FUNCION SUBIRARCHIVO()    ///
    ///////////////////////////////////////////////////////////

            $(document).ready(function() {
                mostrarArchivos();
                $("#boton_subir").on('click', function() {
					var name = $(this).attr('name');
					//alert(name)
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

     
<!-- SERVICE INFO TYPE  -->
    <div class="div_form_request" >
        <div class="container_cpe_service_info">

            <div class="header-info" style="border: 0; margin-top: -0.5%;">

                <strong style="margin-left: 2%;"> Job info </strong>

            </div>

        <!-- FIRST LINE -->
            <div class="container_service_info_type">
                <div class="name">
                    Service/ WO: 

                </div>

                <input type="text" placeholder="ENTER SERVICE WO" style="width: 20%;height: 39px;position: relative;bottom: 15px;margin-left: 2px;float: left;border: 2px solid #000;" value="<?php echo $fila_information['service_number']; ?>" disabled  />

                <div class="container_cpe_orange_box container_type_service"> 

                    <span> Type of Service </span>

                        <input type="radio" name="type_service" /> <span>LIT</span> 
                        &nbsp;
                        <input type="radio" name="type_service" /> <span>DARK</span>  

                </div>

        <!-- SECOND LINE -->
            <div class="container_cpe_box container_region_fiber_spec"> 

                    <div class="container_cpe_input_text_inside">
                        <div class="name">
                            Region:

                        </div>

                        <input type="text" placeholder="ENTER REGION" style="<?php echo $estiloCSS; ?>"/>

                        <div class="name">
                            Fiber Design Engineer:

                        </div>

                        <input type="text" placeholder="ENTER FIBER DESIGN" style="<?php echo $estiloCSS; ?>" />

                    </div>

                    <div class="container_cpe_input_text_inside">
                        <div class="name">
                            Project Manager:

                        </div>

                        <input type="text"  placeholder="ENTER PROJECT MANAGER" style="<?php echo $estiloCSS; ?>"/>

                        <div class="name txtConstructionEngiBI" style="">
                            Construction Engineer:

                        </div>

                        <input type="text" placeholder="ENTER CONSTRUCTION ENGINEER" style="<?php echo $estiloCSS; ?>"/>
                            
                        </div>

                    </div>

            </div>

        </div>

    </div>

<!-- BUILDING INFO  -->
    <div class="div_form_request" style="margin-top: 10px;">
        <div class="container_cpe_box container_building_info">

            <div class="header-info" style="border: 0;">
                <strong style="margin-left: 2%;"> Building info </strong>

            </div>

        <!-- FIRST LINE -->
            <div class="container_service_info_type">
                <div class="container_info_building" style="width: 19%; margin-left: 20px;position: relative;bottom: 2px;">
                    <div class="name">
                        Building Number

                    </div>

                    <input type="text" style="width: 74%;height: 16px;float: left;margin-top: -4px;text-align: right;padding: 11px;font-size: 18px;border: 2px solid #000;" value="<?php echo $fila_information['bldg_number']; ?>" disabled />

                </div>

                <div class="container_info_building1">
                    <div class="name">
                        Latitude

                    </div>

                    <input type="text" style="<?php echo $estiloCSSBuilding; ?>" placeholder="ENTER LATITUDE" />

                </div>

                <div class="container_info_building2">
                    <div class="name">
                        Longitude

                    </div>

                    <input type="text" style="<?php echo $estiloCSSBuilding; ?>" placeholder="ENTER LONGITUDE" />

                </div>

                <div class="container_info_building">
                    <div class="btn_new_request">
                        <span class="add_ventana_cpe"> Update GPS </span> 

                    </div>


                </div>

            </div>

        <!-- SECOND LINE -->
            <div class="container_service_info_type1">
                <div class="name">
                    Street Name

                </div>

                <input type="text"  style="width: 100%;height: 33px;position: relative;margin: 15px 0 16px 0;padding: 7px;bottom: 10px;border: 2px solid #000;" value="<?php echo $fila_information['street_number']; ?>" disabled />

                <input type="text" style="width: 100%;height: 33px;position: relative;padding: 7px;margin-top: -21px;border: 2px solid #000;" disabled />

            </div>

         <!-- THIRD LINE -->
            <div class="container_service_info_type2">
                <div class="name">
                    Municipality

                </div>

                  <input type="text" style="width: 83%;height: 33px;position: relative;margin: 16px 22px 0 1px;padding: 5px;bottom: 23px;float: left;border: 2px solid #000;"  />

                <div class="container_state_building_info1">
                    <span> STATE </span>

                    <input type="text" style="width: 64%;height:41px;position: relative;top: 4px; padding-left: 11px;border: 2px solid #000;" value="<?php echo strtoupper(substr($fila_information['state'],0,2)) ;?>" disabled />

                </div>
    
            </div>

        <!-- THIRD LINE -->
            <div class="container_service_info_type3">

                <div class="container_cpe_box_multi_tenant"> 

                    <span> Multi-Tenant Building </span>

                        <input type="radio" name="if_multi_tenant" /> <span>YES</span> 
                        &nbsp;
                        <input type="radio" name="if_multi_tenant" /> <span>NO</span>  

                </div>

                <div class="container_cpe_orange_box_rent"> 

                    <span> RENT </span>

                        <input type="radio" name="if_rent" /> <span>YES</span> 
                        &nbsp;
                        <input type="radio" name="if_rent" /> <span>NO</span>  

                </div>

                 <div class="container_cpe_orange_box_floor_plans"> 

                    <span> Floor Plans </span>

                        <input type="radio" name="type_floor" /> <span>YES</span> 
                        &nbsp;
                        <input type="radio" name="type_floor" /> <span>NO</span>  

                </div>

                <div class="container_state_building_info">

                    <span> Total flrs. </span>

                     <input type="number" value="7" style="" maxlength="2" />

                </div>
        

            </div>

        </div>

    </div>

<!-- WORKING HOURS / PICTURE OF BUILDING  -->
    <div class="div_form_request" >
        <div class="container_cpe_box_working_hours_building_picture">
           <div class="container_data_working_hours">
                <div class="header-info" style="border: 0; margin-top: 0;">

                    <span> Working Hours </span>

                    <span> Picture of Building </span>

                </div>

                <div class="container_hours_inbuilding">

                    <div class="container_time_info_building">
                       <span>in Building:</span>
                        <br />
                       <span>Daytime</span>

                    </div>

                    <div class="container_time_info_building2"> 

                        <span> Start Time: </span>

                           <input type="text" style="width: 20%;font-size: 22px;float: left;height: 32px;" />

                            <span class="time_dotte_span">:</span>

                            <input type="text" style="width: 20%;font-size: 22px;height: 32px;" />

                        <sup class="time_meridian">AM</sup>

                    </div>

                    <div class="container_time_info_building3"> 

                         <span style="display: block;"> End Time: </span>

                           <input type="text" style="width: 20%;font-size: 22px; float: left;height: 32px;" />

                            <span class="time_dotte_span">:</span>

                            <input type="text" style="width: 20%;font-size: 22px;height: 32px;" />

                        <sup class="time_meridian">PM</sup>
                       
                        
                    </div>

                </div>

                <div class="container_project_management_days">

                    <div class="container_project_management">
                        <strong>Property Management</strong>

                        <div class="container_cpe_orange_box"> 

                            <span> Riser Management Company </span>

                                <input type="radio" name="if_riser_management" /> <span>YES</span> 
                                &nbsp;
                                <input type="radio" name="if_riser_management" /> <span>NO</span>  

                        </div>

                        <div class="container_project_lit_orange_box"> 

                            <span> Filter/LIT Equipment Required</span>

                                <input type="radio" name="if_filter_LIT" /> <span>YES</span> 
                                &nbsp;
                                <input type="radio" name="if_filter_LIT" /> <span>NO</span>  

                        </div>

                    </div>

                    <div class="container_work_weeks">
                        <span> Work Access during week: </span>

                            <!-- MON - WED -->
                                <div class="container_days_one">
                                    <input id="mon_day" name="mon_day" type="checkbox" />
                                    <label for="mon_day">Mon</label>

                                    <input id="tue_day" name="sun_day" type="checkbox" />
                                    <label for="tue_day">Tue</label>
                                    
                                    <input id="Wed_day" name="Wed_day" type="checkbox" />
                                    <label for="Wed_day">Wed</label>

                                </div>

                            <!-- THUR - SAT -->
                                <div class="container_days_two">
                                    <input id="thur_day" name="thur_day" type="checkbox" />
                                    <label for="thur_day">Thur</label>

                                    <input id="fri_day" name="fri_day" type="checkbox" />
                                    <label class="fri_day" for="fri_day">Fri</label>
                                    
                                    <input id="sat_day" name="sat_day" type="checkbox" />
                                    <label for="sat_day">Sat</label>

                                </div>

                            <!-- SUN -->
                                <div class="container_days_three">
                                    <label for="sun_day">SUN</label>
                                    <input id="sun_day" name="sun_day" type="checkbox" />

                                </div>

                    </div>

                </div>

           </div>

           <div id="dvBuildingPicture">
			
				<div class="containerprueba">

						<form action="javascript:void(0);" id="form_archivo">
							<div class="div_file_inside" >
								<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside"> UPLOAD FILE (JPG OR PNG) </div> </div>
							   <input type="file" name="archivo" id="archivo" />
					
							</div>  
							   <input type="hidden" name="inside" id="code" value="<?php echo $time_code; ?>" />
							   <input type="hidden" name="inside" id="type" value="building_picture"/>
							   <input type="button" id="boton_subir" value="Subir" class="btn btn-success" />
							   <progress id="barra_de_progreso" value="0" max="100"></progress>
						</form>
						
					<div id="archivos_subidos"></div>
					<div id="respuesta" class="alert"></div>
				
				</div>
           

           </div>

       </div>

    </div>

<!-- PROPERTY MANAGEMENT INFO -->
    <div class="div_form_request">
    
        <div class="container_cpe_box_property_management_data">

            <div class="header-info" style="border: 0; margin-top: -0.5%;">

                <strong style="margin-left: 2%;"> Property Management Info </strong>

            </div>

                <div class="container_property_data_inputs">

                    <?php 

                        // BUSCAMOS EL NOMBRE DE LA COMPAÑIA
                            $consulta_company_name = "SELECT user_name FROM usuarios WHERE id='".$fila_property_manager['company']."'";
                            $resultado_company_name = mysqli_query($conexion,$consulta_company_name);
                            $fila_company_name = mysqli_fetch_array($resultado_company_name);/**/

                                //var_dump($fila_company_name);



                    ?>

                    <div class="name" style="width: 32%;">
                        Property Management Company Name

                    </div>

                    <input type="text" style="width: 94%;height: 33px;position: relative;margin: 12px 0 20px 9px;padding: 7px;bottom: 10px;border: 2px solid #000;" value="<?php echo strtoupper($fila_company_name['user_name']); ?>" disabled="disabled" />


                </div>

                <div class="container_property_data_inputs">

                    <div class="name" style="width: 39%;">
                        Property Management Company Contact Name

                    </div>

                    <input type="text" style="width: 94%;height: 33px;position: relative;margin: 12px 0 20px 9px;padding: 7px;bottom: 10px;border: 2px solid #000;" value="<?php echo strtoupper($fila_property_manager['contact_name']); ?>" disabled="disabled" />


                </div>   

                <div class="container_property_data_inputs_email">

                    <div class="name" style="width: 24%;">
                        Property Management Email

                    </div>

                      <input type="text" style="width: 94%;height: 33px;position: relative;margin: 15px 0 0 0;padding: 7px;bottom: 10px;border: 2px solid #000;" value="<?php echo strtoupper($fila_property_manager['contact_email']); ?>" disabled="disabled" />


                </div>

                    <div class="name" style="width: 50%;">
                           Business Card


                    </div>

            <div class="container_propery_management_contacts">
      
                <div class="container_first_property_number">

                    <div class="name">
                        Property Management Office Phone

                    </div>

                        <div class="container_contact_number" style="width: 56%;height: 81px;position: relative;left: 10px;">

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">(</span> 

                             <input type="text" style="width: 8%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px;" value="<?php echo substr($fila_property_manager['contact_office_phone'],0,3); ?>" disabled="disabled" />

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">)</span>

                             <input type="text" style="width: 8%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px;" value="<?php echo substr($fila_property_manager['contact_office_phone'],3,-6); ?>" disabled="disabled" />

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">-</span>

                             <input type="text" style="width: 10%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px 9px 6px 6px;" value="<?php echo substr($fila_property_manager['contact_office_phone'],6,-2); ?>" disabled="disabled" />

                        </div>

                </div>  

                <div class="container_second_property_number">

                    <div class="name" style="width: 263px;margin: 0 auto;margin-right: 20%;">
                        Property Management Cell Phone

                    </div>

                        <div class="container_contact_number" style="width: 56%;height: 81px;position: relative;left: 10px;">

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">(</span> 

                             <input type="text" style="width: 8%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px;" value="<?php echo substr($fila_property_manager['contact_cell_number'],0,3); ?>" disabled="disabled" />

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">)</span>

                             <input type="text" style="width: 8%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px;" value="<?php echo substr($fila_property_manager['contact_cell_number'],3,-5); ?>" disabled="disabled" />

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">-</span>

                             <input type="text" style="width: 10%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px 9px 6px 6px;" value="<?php echo substr($fila_property_manager['contact_cell_number'],6,-1); ?>" disabled="disabled" />

                        </div>

                 </div>  

            </div>


        </div>

    </div>