<!-- LIT EQUIP INFO -->
<?php 
   include("../../confi/conf.inc.php");

    $id_information = $_POST['id_information'];
    $id_request = $_POST['id_request'];


?>

<script type="text/javascript">

    ////////////////////////////////////////////////////////////
    ///     FUNCION QUE ENVIA LA INFORMACION AL SERVIDOR    ///
    //////////////////////////////////////////////////////////

        $(document).ready(function() {

            $("#submit_request").click(function() {

                var FormData = $("#form_cpe_lit_equip").serialize();

                   $.post($("#form_cpe_lit_equip").attr("action"), FormData,
                    function(data) {
                        $(".hola").append(data);

                        //window.stop();

                });/**/

                     
            });

          
        });/**/

    ////////////////////////////////////////////////////////////
    ///     FUNCION QUE SETEA LOS DIVS CON LAS IMAGENES     ///
    //////////////////////////////////////////////////////////
        var canvas;

            function exportAndSaveCanvasPanel2(){
                var code = <?php echo $id_information; ?>;
                var type_plan = $("#txtCurrentPanelPhoto").val();

                    setPanelPhoto(code,type_plan);

                        canvas = document.getElementById("canvas");

                            // Get the canvas screenshot as PNG
                                var screenshot = Canvas2Image.saveAsPNG(canvas, true);

                            // This is a little trick to get the SRC attribute from the generated <img> screenshot
                                canvas.parentNode.appendChild(screenshot);
                                screenshot.id = "canvasimage";      
                                data = $('#canvasimage').attr('src');                   
                
                    //alert(type_plan);
            
                    canvas.parentNode.removeChild(screenshot);

                    // Send the screenshot to PHP to save it on the server
                        var url = 'include/export.php';

                            $.ajax({ 
                                type: "POST", 
                                url: url,
                                dataType: 'text',
                                data: {
                                    base64data : data, codesend : code, type:type_plan
                                },
                                success: function(data) {
                                    setCanvasPanel(type_plan,code);

                                        $(".dvPictureImage").fadeIn(100);
                                        $(".dvCanvaImage").fadeIn(100);
                                        $(".containerprueba").css("z-index","999999999999999");
                                        $(".text_select_image").css({ zIndex:"-999999",});

                                            $("#archivoCPEPanelPhoto,#archivoCPEPanelPhoto2,#archivoCPEPanelPhoto3,#archivoCPERoom").css("left","0");

                                                //$("#TxtFileUploaded").val("yes");

                                            $(".text_select_image").html("CLICK HERE TO CHANGE THE CURRENT IMAGE");

                                            $(".literally").remove();    

                                            $(".editor_imagenes_panel").css({ 'display': "none" });

                                            $("body").css({ 'overflow': "auto" });
                                    
                                         
                                }
         
                                
                            });



            }/**/


</script>

<!--  DIVS PARA HABILITAR EL EDITOR  -->

    <div class="temp_panel"></div>  
            
    <div class="editor_imagenes_panel" style="overflow:auto;left: 1px;">
            <div class="cont-button-editor">
                
                <input type="button" value="Save current image" onClick="exportAndSaveCanvasPanel2()" style="padding: 22px;width: 15%;">

            </div>
            
            <div class="editor_imagenes_content_panel" style="width:100%; height:800px; margin:auto;">
        
                  <!-- AQUI CARGA EL EDITOR-->
            
              </div>
        
    </div>

<form id="form_cpe_lit_equip" name="form_request" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>/include/cpe-forms/data-files/lit_equip_form.php">
    <div class="div_form_request" >
        <input type="hidden" name="TxtId_information" value="<?php echo $id_information ?>" id="id_information" />
        <input type="hidden" name="TxtId_request" value="<?php echo $id_request ?>" id="id_request" />
        <input type="hidden" name="TxtPanelPhotoUpl" value="0" id="TxtPanelPhotoUpl" />
        <input type="hidden" name="TxtCPERoomPhotoUpl" value="no" id="TxtCPERoomPhotoUpl" />
        <input type="hidden" name="txtCurrentPanelPhoto" id="txtCurrentPanelPhoto" />
        <input type="hidden" name="code_picture" id="code" value="<?php echo $time_code; ?>" />

            <div class="container_cpe_box" style="height: 1000px; margin: 0 auto; width: 100%;">

                <!-- RADIO IF POWER -->
                    
                    <div class="container_if_power_available" style="padding: 20px 20px 3px 0;margin-left: 2%;position: relative;bottom: 5px;width: 51%;float: left;"> 

                        <span style="margin-right: 13%;"> Power Available at time of survey ?</span>

                            <input type="radio" name="if_power_available" value="yes" /> <span>YES</span> 
                                &nbsp;
                                &nbsp;
                            <input type="radio" name="if_power_available" value="no" checked="checked"/> <span>NO</span>  

                    </div>

                <!-- POWER PREFERENCES -->
                    <div class="container_comment_power" style="width: 98%;float: right;margin-left: 5px;margin-right: 10px;height: 218px;">

                        <div class="container_comment_with_button">
                            <div class="name" style="width: 22%;">
                                Comments for power info

                            </div>

                            <div id="btnPowerPreferences">
                                <span class="add_ventana_cpe"> Power Preferences </span> 

                            </div>

                        </div>

                        <textarea style="width: 93%;max-width: 96%;max-height: 34px;min-height: 148px;height: 182px;margin-left: 13px;resize: none;min-width: 16%;border: 1px solid #000;" name="txtPowerComments"></textarea>


                    </div>

                <!-- CHECKBOX FAMILY -->

                    <div class="container_checkbox_power_spec" style="width: 98%;float: right;margin-left: 8px;height: 367px;">

                        <div class="container_distance_feet">
                            <div class="name" style="width: 36%;float: left;position: relative;top: 9px;margin-right: 5%;">

                                Distance in feet from CPE Panel to outlet

                            </div>

                            <input type="text" style="text-align: right;width: 3%;padding: 15px;height: 3px;font-size: 23px;" name="txtPowerFeet" />

                        </div>

                        <div class="container_power_type" style="margin-top: 11px;width: 55%;float: left;"> 

                          <div class="name" style=" width: 24%;float: left;margin-right: 38%;">

                               Type of power

                            </div>

                            <input type="radio" name="type_power" value="AC" /> <span>AC</span> 
                                &nbsp;
                                &nbsp; 
                                &nbsp;
                                &nbsp;  
                                &nbsp;
                                &nbsp; 
                                &nbsp;
                                &nbsp;
                            <input type="radio" name="type_power" value="DC" checked="checked" /> <span>DC</span>  

                        </div>

                        <div class="container_ac_voltage" style="margin-top: 9px;width: 83%;float: left;"> 

                          <div class="name" style="width: 4%;float: left;margin-right: 37%;">

                                AC

                           </div>

                            <input type="radio" name="type_voltage_ac" value="120 VAC"/> <span style="margin-right:28px;">120 VAC</span> 
                            <input type="radio" name="type_voltage_ac" value="208/220/240 VAC" checked="checked" /> <span>208 / 220 / 240 VAC</span>  

                        </div>

                        <div class="container_ac_amps" style="margin-top: 9px;width: 83%;float: left;"> 

                          <div class="name" style="width: 11%;float: left;margin-right: 228px;margin-left: -3px;">

                                AC / AMPS

                           </div>

                            <input type="radio" name="ac_ampers" value="15" /> <span style="margin-right: 67px;">15</span> 
                            <input type="radio" name="ac_ampers" value="20" /> <span style="margin-right: 11%;">20</span>   
                            <input type="radio" name="ac_ampers" value="30" checked="checked" /> <span>30</span>  

                        </div> 

                        <div class="container_ac_recepticles" style="margin-top: 6px;width: 83%;float: left;"> 

                          <div class="name" style="width: 26%;float: left;margin-right: 118px;margin-left: -5px;">

                                Type of AC receptacles

                           </div>

                            <input type="radio" name="type_receptacle" value="twist" /> <span style="margin-right: 5%;">Twist</span> 
                            <input type="radio" name="type_receptacle" value="non-twist" checked="checked" /> <span style="margin-right:-7%;">Non - Twist</span> 
                                &nbsp;
                                &nbsp; 
                                &nbsp;
                                &nbsp;   
                                &nbsp; 
                                &nbsp;
                                &nbsp;
                                &nbsp;  
                            <input type="radio" name="type_receptacle" value="strip" /> <span>Strip</span>  

                        </div>  

                        <div class="container_rack_size_2" style="width: 83%;float: left;height: 48px;"> 

                          <div class="name" style="width: 12%;float: left;margin-right: 226px;margin-left: -9px;position: relative;top: 23%;">

                                RACK SIZE

                           </div>

                                <input type="radio" name="if_rack_size"  value="19" /> <span style="margin-right: 27px;">19</span>
                                <input type="radio" name="if_rack_size"  value="23" checked="checked" /> <span style="margin-right: 28px;">23</span>

                                <div class="container_other_rack_size">
                                    <input type="radio" name="if_rack_size" value="other" /> <span style="margin: 0 3px;">Other</span>
                                    <input type="text" style="width: 4%;height: 27px;font-size: 28px;position: relative;top: 5px;" /> 

                                </div>

                                <input type="radio" name="if_rack_size"  value="n/a" /> <span>N / A</span>
            

                        </div>

                        <div class="container_wall_space" style="width: 83%;float: left;margin-top: 9px;"> 

                          <div class="name" style="width: 24%;float: left;margin-right: 139px;margin-left: -13px;position: relative;bottom: 5px;">

                                Wall Space Available

                           </div>

                                <input type="radio" name="if_wall_space_available"  value="yes" /> <span style="margin-right: 17px;">YES</span>
                                <input type="radio" name="if_wall_space_available" value="no" checked="checked" /> <span style="margin-right: 23px;">NO</span>

                                <input type="radio" name="if_wall_space_available" value="n/a" /> <span>N / A</span>
            

                        </div>

                        <div class="container_building_feed" style="width: 83%;float: left;margin-top: 21px;"> 

                            <div class="name" style="width: 28%;float: left;margin-right: 111px;margin-left: -13px;position: relative;bottom: 5px;">

                                BUILDING UPS ON OUR FEED

                            </div>

                            <input type="radio" name="if_building_up_feed" value="yes" /> <span style="margin-right: 17px;">YES</span>
                            <input type="radio" name="if_building_up_feed" value="no" checked="checked" /> <span style="margin-right: 23px;">NO</span>

                        </div>

                        <div class="container_generator_feed" style="width: 83%;float: left;margin-top: 21px;"> 

                            <div class="name" style="width: 28%;float: left;margin-right: 122px;margin-left: -24px;position: relative;bottom: 5px;">

                                Generator on our feed

                            </div>

                            <input type="radio" name="if_generator_feed" value="yes" /> <span style="margin-right: 17px;">YES</span>
                            <input type="radio" name="if_generator_feed" value="no" checked="checked" /> <span style="margin-right: 23px;">NO</span>

                        </div>



                    </div>   

                <!-- POWER PANELS AND CPE ROOM ENTRANCE -->
                    <div class="container_pictures">

                     <div class="container_panel_photos">

                        <div class="container_center_panels">

                            <!-- FIRST POWER PANEL  -->
                                <div class="container_panel">
                                    <div class="container_cpe_black_box" style="width: 95%;padding: 7px;margin: 0 auto;">
                                        Power/Panel Loc.
                                    </div>

                                    <div class="container_power_panel_photo1 container_border_black_panel">
                                       <div class="containerprueba" style="float: left;position: relative;z-index: 999999;">

                                            <form action="javascript:void(0);" id="form_archivo">

                                                <div class="div_file_inside">

                                                   <input type="file" name="archivo" id="archivoCPEPanelPhoto" accept="image/x-png, image/gif, image/jpeg" />
                                                   
                                                   <span class="text_select_image_panel"> Click here to upload and draw an image</span>

                                                </div>  

                                                   <input type="hidden" name="code_picture" id="code" value="<?php echo $time_code; ?>" />
                                                   <input type="hidden" name="form_type" id="type" value="cpe_panel_1"/>
                                                   <input type="hidden" id="tipo_ejecucion" value="subir_archivo"/>
                        
                                            </form>
                                            
                                            <div id="archivos_subidos"></div>
                                                 <!--    <div id="respuesta" class="alert"></div> -->
                        
                                        </div>
                                        
                                        <div class="dvPictureImageFirstPanel"></div>
                                        <div class="dvCanvaImageFirstPanel"></div>



                                    </div>

                                </div>
                            
                            <!-- SECOND POWER PANEL  -->
                                <div class="container_panel">
                                    <div class="container_cpe_black_box" style="width: 95%;padding: 7px;margin: 0 auto;">
                                        Power/Panel Loc.
                                    </div>

                                    <div class="container_power_panel_photo2 container_border_black_panel">
                                       <div class="containerprueba" style="float: left;position: relative;z-index: 999999;">

                                            <form action="javascript:void(0);" id="form_archivo">

                                                <div class="div_file_inside">

                                                   <input type="file" name="archivo" id="archivoCPEPanelPhoto2" accept="image/x-png, image/gif, image/jpeg" />
                                                   
                                                   <span class="text_select_image_panel"> Click here to upload and draw an image</span>

                                                </div>  

                                                   <input type="hidden" name="code_picture" id="code" value="<?php echo $time_code; ?>" />
                                                   <input type="hidden" name="form_type" id="type" value="cpe_panel_2"/>
                                                   <input type="hidden" id="tipo_ejecucion" value="subir_archivo"/>
                        
                                            </form>
                                            
                                            <div id="archivos_subidos"></div>
                                                 <!--    <div id="respuesta" class="alert"></div> -->
                        
                                        </div>
                                        
                                        <div class="dvPictureImageSecondPanel"></div>
                                        <div class="dvCanvaImageSecondPanel"></div>


                                    </div>

                                </div>
                            
                            <!-- THRID CURRENT PANEL -->
                                <div class="container_panel">
                                    <div class="container_cpe_black_box" style="width: 95%;padding: 7px;margin: 0 auto;">
                                        Power/Panel Loc.
                                    </div>

                                    <div class="container_power_panel_photo3 container_border_black_panel">
                                        <div class="containerprueba" style="float: left;position: relative;z-index: 999999;">

                                            <form action="javascript:void(0);" id="form_archivo">

                                                <div class="div_file_inside">

                                                   <input type="file" name="archivo" id="archivoCPEPanelPhoto3" accept="image/x-png, image/gif, image/jpeg" />
                                                   
                                                   <span class="text_select_image_panel"> Click here to upload and draw an image</span>

                                                </div>  

                                                   <input type="hidden" name="code_picture" id="code" value="<?php echo $time_code; ?>" />
                                                   <input type="hidden" name="form_type" id="type" value="cpe_panel_3"/>
                                                   <input type="hidden" id="tipo_ejecucion" value="subir_archivo"/>
                        
                                            </form>
                                            
                                            <div id="archivos_subidos"></div>
                                                 <!--    <div id="respuesta" class="alert"></div> -->
                        
                                        </div>
                                        
                                        <div class="dvPictureImageThridPanel"></div>
                                        <div class="dvCanvaImageThridPanel"></div>

                                    </div>
                    
                                </div>    

                            <!-- CPE ROOM PANEL -->
                                <div class="container_panel">
                                    <div class="container_cpe_black_box" style="width: 95%;padding: 7px;margin: 0 auto;">
                                        CPE ROOM ENTRANCE

                                    </div>

                                    <div class="container_cpe_room_panel_photo4 container_border_black_panel">
                                        <div class="containerprueba" style="float: left;position: relative;z-index: 999999;">

                                            <form action="javascript:void(0);" id="form_archivo">

                                                <div class="div_file_inside">

                                                   <input type="file" name="archivo" id="archivoCPERoom" accept="image/x-png, image/gif, image/jpeg" />
                                                   
                                                   <span class="text_select_image_panel"> Click here to upload and draw an image </span>

                                                </div>  

                                                   <input type="hidden" name="code_picture" id="code" value="<?php echo $time_code; ?>" />
                                                   <input type="hidden" name="form_type" id="type" value="cpe_room"/>
                                                   <input type="hidden" id="tipo_ejecucion" value="subir_archivo"/>
                        
                                            </form>
                                            
                                            <div id="archivos_subidos"></div>
                                                 <!--    <div id="respuesta" class="alert"></div> -->
                        
                                        </div>
                                        
                                        <div class="dvPictureImageCPERoomPanel"></div>
                                        <div class="dvCanvaImageCPERoomPanel"></div>


                                    </div>
                                    
                                </div>

                        </div>

                    </div>


            </div>

    </div>   

</form>  

<script type="text/javascript">
    
        $(document).ready(function(){
            $('input').iCheck({
                    checkboxClass: 'icheckbox_square',
                    radioClass: 'iradio_square',
                    increaseArea: '20%' // optional
            });



        });


</script>               
