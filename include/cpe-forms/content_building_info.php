<?php 
    include("../../confi/conf.inc.php");
    //include("../head.php");

        $conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

            $id_information = "";
            $id_request = "";
                              
                // REVISAR SI EXISTE POST Y SI NO EXISTE GET

                    if (!empty($_GET) && empty($_POST)) {
                        $id_information = $_GET['id_information'];
                        $id_request = $_GET['id_request'];
                                   
                            $fila_information = buscarInfomation($id_information,$conexion);
                            $fila_property_manager = buscarManager($id_request,$conexion);
               
                    }else{
                
                        $id_information = $_POST['id_information'];
                        $id_request = $_POST['id_request'];

                            $fila_information = buscarInfomation($id_information,$conexion);
                            $fila_property_manager = buscarManager($id_request,$conexion);

                    }

                        ///// FUNCIONES PARA BUSCAR LOS DATOS
                            function buscarInfomation($idInfo,$conexion){                   

                                // BUSCAMOS LA INFORMACION GENERAL 
                                    $consulta_information="SELECT * FROM general_information WHERE id='$idInfo' ";
                                    $resultado_information= mysqli_query($conexion,$consulta_information);
                                    $fila_information = mysqli_fetch_array($resultado_information);

                                            //var_dump($fila_information);

                                        return $fila_information;

                            } 

                            function buscarManager($idRequest,$conexion){
                                     
                                // BUSCAMOS LA INFORMACION DEL PROPERTY MANAGER
                                    $consulta_property_manager = "SELECT * FROM property_managers WHERE id_request='$idRequest'";
                                    $resultado_property_manager = mysqli_query($conexion,$consulta_property_manager);
                                    $fila_property_manager = mysqli_fetch_array($resultado_property_manager);

                                    //var_dump($consulta_property_manager);

                                        return $fila_property_manager;

                            } 

                // ESTILOS DE TEXTO QUE DEBEN DESAPARECER Y SETEARSE DE MANERA ARCHIVO CSS

                    $estiloCSS = "width: 26%;height: 33px;padding-left: 13px; position: relative;bottom: 9px;float:left;border: 1px solid #000;";

                    $estiloCSSBuilding = "width: 90%;height: 33px;padding-left: 13px; position: relative;bottom: 9px;border: 1px solid #000;"; 

                // SANEAR LOS ACRONIMOS  

                    function revisarAcronimo($state){

                        $stateGoodAcro = "";

                            if (strcasecmp($state, "NEW YORK") == 0) {
                               
                                $stateGoodAcro = "NY";

                            }


                        return $stateGoodAcro;

                    }


?>

<script type="text/javascript">
    var contador = 0;

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
    
                $(".containerprueba").css("z-index","0");
                contador++;

            $("#archivoCPEPhotos").upload('include/cpe_photos_manager.php',
            {
                type: $("#type").val(),
                tipo_ejecucion: $("#tipo_ejecucion").val(),
                cantidad_ejecucion:contador<?php echo ",\nid_information: $id_information"; ?>

            },
            
            function(respuesta) {
                //Subida finalizada.
                $("#barra_de_progreso").val(0);

                    if (respuesta === 0) {
                        mostrarRespuesta('El archivo NO se ha podido subir.', false);
                        $("#nombre_archivo, #archivoCPEPhotos").val('');

                    } else {
                        var type =  $("#type").val();
                        var select_temp_type = "select_image";


                        
                            $.post("include/cpe_photos_manager.php",
                                {
                                    type: $("#type").val(),
                                    tipo_ejecucion:select_temp_type<?php echo ",\nid_information: $id_information"; ?>

                                } ,
                                function (data) {
                                    $(".temp").append(data);

                            });

                        // $.get("include/select_temp.php", function (data) {
                        //  $(".temp").append(data);
                        // });
                        
                        $(".editor_imagenes").fadeIn(200);
                        mostrarRespuesta('Subido Correctamente.', true);
                        mostrarArchivos();
                        
                        $.get("include/editor.php", function (data) {
                            $(".editor_imagenes_content").append(data);
                            
                        });


                        $("body").css({ 'overflow': "hidden" });
                        
                        //window.stop();
                    }
                        
                }, function(progreso, valor) {
                    //Barra de progreso.
                    $("#barra_de_progreso").val(valor);

                });


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
    //////////  PARA MOSTRAR LAS RESPUESTAS DE LAS ACCIONES  ///
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

            $("#archivoCPEPhotos").change(function (){
                //subirArchivos();

                    $.ajax({
                        type: "POST",
                        url: "include/cpe_photos_manager.php",
                        type: $("#type").val(),
                        tipo_ejecucion: $("#tipo_ejecucion").val(),
                        cantidad_ejecucion:contador<?php echo ",\nid_information: $id_information,"; ?>
                        success: function(data){
                            console.log(data);
                            //console.log($("#tipo_ejecucion").val());

                        }

                    });

            });

            $("#archivos_subidos").on('click', '.eliminar_archivo', function() {
                var archivo = $(this).parents('.row').eq(0).find('span').text();
                archivo = $.trim(archivo);
                eliminarArchivos(archivo);

            });

                /////////////////////////////////////////////////////////////
                ///    ESCUCHADOR DEL MOUSE PARA MOSTRAR EL MENSAJE      ///
                ///////////////////////////////////////////////////////////

                    $("#archivoCPEPhotos").mouseenter(function(){
                        $(".text_select_image").fadeIn(150);

                    }).mouseleave(function(){
                        $(".text_select_image").fadeOut(150);

                    });

        });

    /////////////////////////////////////////////////////////////////////
    ///    FUNCION QUE SETEA EL DIV CON LA FOTO QUE SE SELECCIONO    ///
    ///////////////////////////////////////////////////////////////////
        function setearFotoCPE(){
            var type_ejecucion = "select_picture";

                $.ajax({ 
                    type: "POST", 
                    url: "include/cpe_photos_manager.php",
                    data: {tipo_ejecucion:type_ejecucion,type: $("#type").val()<?php echo ",\nid_information: $id_information"; ?>},
                    success: function(data) {

                         var urlCodePicture = "url(archivos/temp/"+data.trim()+")";

                        $("#dvPictureImage").css("background-image",urlCodePicture);
                      

                    }

                });

        }

    /////////////////////////////////////////////////////////////////////
    ///    FUNCION QUE SETEA EL DIV CON EL CANVA QUE SE SELECCIONO   ///
    ///////////////////////////////////////////////////////////////////

        function setearCanvasCPE(){
            var type_ejecucion = "select_canva";

                $.ajax({ 
                    type: "POST", 
                    url: "include/cpe_photos_manager.php",
                    data: {tipo_ejecucion:type_ejecucion,type: $("#type").val()<?php echo ",\nid_information: $id_information"; ?>},
                    success: function(data) {
                        $("#dvCanvaImage").css("background-image","url(archivos/temp/"+data.trim()+"");
  
                             
                    }


                });

        }
          
    ////////////////////////////////////////////////////////////
    ///     FUNCION QUE SETEA LOS DIVS CON LAS IMAGENES     ///
    //////////////////////////////////////////////////////////

      var canvas;

      function exportAndSaveCanvas()  {
            setearFotoCPE();
    
          canvas = document.getElementById("canvas");

            // Get the canvas screenshot as PNG
                var screenshot = Canvas2Image.saveAsPNG(canvas, true);

            // This is a little trick to get the SRC attribute from the generated <img> screenshot
                canvas.parentNode.appendChild(screenshot);
                screenshot.id = "canvasimage";      
                type_plan = $("#type").val();
                data = $('#canvasimage').attr('src');
                code = <?php echo $id_information; ?>;
            
            
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

                            setearCanvasCPE();
                            $("#dvPictureImage").fadeIn(100);
                            $("#dvCanvaImage").fadeIn(100);
                            $(".containerprueba").css("z-index","999999999999999");
                            $(".text_select_image").css({
                                zIndex:"-999999",
                     
                            });

                                $(".text_select_image").html("CLICK HERE TO CHANGE THE CURRENT IMAGE");
                                $(".literally").remove();    
                                $(".editor_imagenes").css({ 'display': "none" });
                                $("body").css({ 'overflow': "auto" });
                            
                                 
                        }
 
                        
                    });


       }


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

                <input type="text" placeholder="ENTER SERVICE WO" style="width: 20%;height: 39px;position: relative;bottom: 15px;margin-left: 2px;float: left;border: 1px solid #000;" value="<?php echo $fila_information['service_number']; ?>" disabled  />

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

                        <input type="text"  style="<?php echo $estiloCSS; ?>" value="<?php echo $fila_information['lt_fiber_eng'] ?>"  disabled="disabled"/>

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

                    <input type="text" style="width: 74%;height: 16px;float: left;margin-top: -4px;text-align: right;padding: 11px;font-size: 18px;border: 1px solid #000;" value="<?php echo $fila_information['bldg_number']; ?>" disabled />

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

                <input type="text"  style="width: 100%;height: 33px;position: relative;margin: 15px 0 16px 0;padding: 7px;bottom: 10px;border: 1px solid #000;" value="<?php echo $fila_information['street_number']; ?>" disabled />

                <input type="text" style="width: 100%;height: 33px;position: relative;padding: 7px;margin-top: -21px;border: 1px solid #000;" disabled />

            </div>

         <!-- THIRD LINE -->
            <div class="container_service_info_type2">
                <div class="name">
                    Municipality

                </div>

                  <input type="text" style="width: 84%;height: 33px;position: relative;margin: 16px 22px 0 1px;padding: 5px;bottom: 23px;float: left;border: 1px solid #000;"  />

                <div class="container_state_building_info1">
                    <span> STATE </span>

                    <input type="text" style="width: 64%;height:41px;position: relative;top: 4px; padding-left: 11px;border: 1px solid #000;" value="<?php echo revisarAcronimo($fila_information['state']);?>" disabled />

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

                           <input type="text" id="txtFirstAMTime" name="txtFirstAMTime" style="width: 20%;font-size: 22px;float: left;height: 32px;" />

                            <span class="time_dotte_span">:</span>

                            <input type="text" id="txtSecondAMTime" name="txtSecondAMTime" style="width: 20%;font-size: 22px;height: 32px;" />

                        <sup class="time_meridian">AM</sup>

                    </div>

                    <div class="container_time_info_building3"> 

                         <span style="display: block;"> End Time: </span>

                           <input type="text"  id="txtFirstPMTime" name="txtFirstPMTime" style="width: 20%;font-size: 22px; float: left;height: 32px;" />

                            <span class="time_dotte_span">:</span>

                            <input type="text"  id="txtSecondPMTime" name="txtSecondPMTime" style="width: 20%;font-size: 22px;height: 32px;" />

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

                        <input id="txtDayWorking" name="txtDayWorking" type="hidden" />

                    </div>

                </div>

           </div>

           <div id="dvBuildingPicture">
			
				<div class="containerprueba" style="float: left;position: relative;z-index: 999999;">

						<form action="javascript:void(0);" id="form_archivo" >

							<div class="div_file_inside">

							   <input type="file" name="archivo" id="archivoCPEPhotos" accept="image/x-png, image/gif, image/jpeg" />
					           
                               <span class="text_select_image"> Click here to upload and draw an image </span>

							</div>  

							   <input type="hidden" name="inside" id="code" value="<?php echo $time_code; ?>" />
                               <input type="hidden" name="inside" id="type" value="building_picture"/>
							   <input type="hidden" name="inside" id="tipo_ejecucion" value="subir_archivo"/>
	
						</form>
						
					<div id="archivos_subidos"></div>
				<!-- 	<div id="respuesta" class="alert"></div> -->
				
				</div>
                
                <div id="dvPictureImage"></div>
                <div id="dvCanvaImage"></div>

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

                    <input type="text" style="width: 94%;height: 33px;position: relative;margin: 12px 0 20px 9px;padding: 7px;bottom: 10px;border: 1px solid #000;" value="<?php echo strtoupper($fila_company_name['user_name']); ?>" disabled="disabled" />


                </div>

                <div class="container_property_data_inputs">

                    <div class="name" style="width: 39%;">
                        Property Management Company Contact Name

                    </div>

                    <input type="text" style="width: 94%;height: 33px;position: relative;margin: 12px 0 20px 9px;padding: 7px;bottom: 10px;border: 1px solid #000;" value="<?php echo strtoupper($fila_property_manager['contact_name']); ?>" disabled="disabled" />


                </div>   

                <div class="container_property_data_inputs_email">

                    <div class="name" style="width: 24%;">
                        Property Management Email

                    </div>

                      <input type="text" style="width: 94%;height: 33px;position: relative;margin: 15px 0 0 0;padding: 7px;bottom: 10px;border: 1px solid #000;" value="<?php echo strtoupper($fila_property_manager['contact_email']); ?>" disabled="disabled" />


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

    <input type="hidden" value="" name="working_days" />

<script type="text/javascript">

    var workingDays = [];   

            //// ORDENAR DIAS Y SETEAR EN INPUT

            //// SETEAR EN INPUT ESCONDIDO LOS DIAS QUE SE TRABAJARA
                function setearDiasTrabajo(array){

                    var workDays = "";

                        for (var i = 0; i < array.length; i++) {

                            if(array[i] != undefined && array[i] != ""){
                                workDays += array[i]+",";

                            }
                            
                        }

                        var workDays2 = workDays.slice(0,-1);

                    //console.log(workDays2);

                    $("#txtDayWorking").val(workDays2);

                }


            //// FUNCION PARA ELIMINAR EL DIA
                function quitarDiaLista(array,nombreElemento){
                        var index = array.indexOf(nombreElemento);

                            if (index > -1) {
                                array.splice(index, 1);
                            }

                    return array;
                }

            //// FUNCIONES PARA AGREGAR Y ELIMINAR DIAS

                // AGREGAR DIAS
                    function agregarDia(dia){
                        switch(dia){
                            case "mon_day":
                                workingDays[0] = "monday";

                            break;

                            case "tue_day":
                                workingDays[1] = "tuesday";

                            break;

                            case "Wed_day":
                                workingDays[2] = "wednesday";

                            break;

                            case "thur_day":
                                workingDays[3] = "thursday";

                            break;

                            case "fri_day":
                                workingDays[4] = "friday";

                            break;

                            case "sat_day":
                                workingDays[5] = "saturday";

                            break;

                            case "sun_day":
                                workingDays[6] = "sunday";

                            break;

                            default:
                            break;

                        }

                        //console.log(workingDays);
                        setearDiasTrabajo(workingDays);

                    }/**/

                // QUITAR DIAS
                    function quitarDia(dia){
                        switch(dia){
                            case "mon_day":
                                workingDays = quitarDiaLista(workingDays,"monday");

                            break;

                            case "tue_day":
                                workingDays = quitarDiaLista(workingDays,"tuesday");

                            break;

                            case "Wed_day":
                                workingDays = quitarDiaLista(workingDays,"wednesday");

                            break;

                            case "thur_day":
                                workingDays = quitarDiaLista(workingDays, "thursday");

                            break;

                            case "fri_day":
                               workingDays =  quitarDiaLista(workingDays,"friday");

                            break;

                            case "sat_day":
                               workingDays = quitarDiaLista(workingDays,"saturday");

                            break;

                            case "sun_day":
                                workingDays = quitarDiaLista(workingDays,"sunday");

                            break;

                            default:
                            break;

                        }

                        //console.log(workingDays);
                        setearDiasTrabajo(workingDays);

                    }/**/

        $(document).ready(function(){

            
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square',
                    radioClass: 'iradio_square',
                    increaseArea: '20%' // optional
                })
                .on('ifChecked',function () {
                    var dayName = $(this).attr("id");
                        agregarDia(dayName);

                })
                .on('ifUnchecked',function () {
                   var dayName = $(this).attr("id");
                        quitarDia(dayName);

                });



        });


</script>