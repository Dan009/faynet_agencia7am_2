<?php 
       include("../../confi/conf.inc.php");

        $conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

    ///ESTILO PARA LOS INPUTS QUE DEBE DESAPARECER
        $estiloCSSTextLGXFloor = "width: 40%;height: 33px;position: relative;margin: 8px 0 0 15px;padding: 7px;bottom: 10px;border: 1px solid #000;";


    $id_information = $_POST['id_information'];
    $id_request = $_POST['id_request'];

?>
    
    <form id="form_cpe_lgx_form" name="form_request" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/cpe-forms/data-files/cpe_lgx_info_form.php">

        <input type="hidden" name="TxtIfFile" value="no" id="TxtFileUploaded" />
        <input type="hidden" name="TxtId_information" value="<?php echo $id_information ?>" id="id_information" />
        <input type="hidden" name="TxtId_request" value="<?php echo $id_request ?>" id="id_request" />
        <input type="hidden" value="" id="txtCurrentCPEPicture" />

        <!-- LGX INFO -->
        <div class="div_form_request" >
            <input type="text" style="border: 2px solid rgb(253, 140, 64); margin: 1px 0 4px 37%;width: 22%;" placeholder="Add to netcracker" />

            <div class="container_cpe_box" style="height: 1088px; margin: 0 auto; width: 100%;">

                <!-- LTX BUTTON -->
                    <div class="container_lgx_button" style="margin: 21px 21px 0 0;height: 62px;">
                        <div class="name" style="width: 11%;float: none;"> LGX Lists </div>
                        <div class="name" style="margin-left: 6px;width: 23%;"> BASEMENT - NEXTEL ROOM </div>

                        <div class="btn_new_request" style="position: relative;bottom: 17px;"> 

                            <span class="add_ventana_cpe"> NEW LGX INFO </span> 

                        </div>


                    </div>

                <!-- LTX FLOOR -->
                    <div class="container_lgx_floor_details" style="width: 98%;float: right;margin-left: 5px;height: 85px;">

                        <div class="name" style="width: 11%;margin-right: 20%;">
                            LGX FLOOR #

                        </div>

                        <input type="text" placeholder="ENTER LGX FLOOR # ..." style="width: 70%;height: 33px;position: relative;margin: 12px 0 -7px 17px;padding: 7px;bottom: 10px;border: 1px solid #000;" name="txtLGXFloor" />

                        <div class="container_cpe_black_box" style="width: 24%;height: 84px;float: right;position: relative;bottom: 36px;margin-right: 7px;">

                            <div class="name" style="width: 40%;margin-right: 20%;">
                                LGX ROOM #

                            </div>

                            <input type="text" style=" width: 48%;margin-left: 10px; height: 20px;padding: 10px;font-size: 22px;" name="txtLGXRoom" />

                            <div class="container_checkbox_na" style="width: 37%;float: right;position: relative;top: 12px;">

                                <div class="name" style="width: 32%;margin-right: 1%;">
                                    N/A

                                </div>


                                <input type="checkbox" style="top: 10px;" value="none" name="chkNone" />

                                
                            </div>

                        </div>


                    </div>

                <!-- LTX TERMS -->
                    <div class="container_lgx_terms" style="width: 98%;float: right;margin-left: 5px;height: 147px;">

                        <div class="container_first_lgx_term">
                            <div class="name" style="width: 14%;margin-right: 42%;">
                                  LGX Term Panel

                            </div>

                            <input type="text"  style="width: 40%;height: 33px;position: relative;margin: 8px 0 0 15px;padding: 7px;bottom: 10px;border: 1px solid #000;" placeholder="Wall Mount" name="txtWallMount1" />

                            <input type="text" style="width: 28%;height: 33px;position: relative;margin: -21px 0 0 46px;padding: 7px;bottom: 10px;;border: 1px solid #000;" name="txtWallMount2"/>

                        </div>    

                        <div class="container_second_lgx_term">
                            <div class="name" style="width: 159px;margin-right: 42%;">
                                  LGX Term Panel Size

                            </div>

                            <input type="text"  style="width: 40%;height: 33px;position: relative;margin: 8px 0 0 15px;padding: 7px;bottom: 10px;border: 1px solid #000;"  name="txtLGXTermSize1" />

                            <input type="text" style="width: 28%;height: 33px;position: relative;margin: -21px 0 0 46px;padding: 7px;bottom: 10px;;border: 1px solid #000;" name="txtLGXTermSize2" />

                        </div>

                    </div>   

                    <div class="container_room_info" style="width: 98%;float: right;margin: 28px 0 0 5px;height: 89px;">

                            <div class="name" style="width: 21%; float: left;">
                                Room Name of LGX Panel

                            </div>

                            <div class="name" style="width: 35%; float: right; margin-right: 89px;">
                               Panel Owned By

                            </div>

                          <input type="text" style="width: 72%;height: 33px;margin: -1px 0 0 13px;padding: 7px;float: left;border: 1px solid #000;" name="txtRoomNameLGX" />  

                          <input type="text" style="width: 19%;height: 33px;margin: -2px 0 0 8px;padding: 7px;float: left;border: 1px solid #000;" placeholder="[INSERT OWNER NAME]" name="TxtOwnedPanel" /> 


                    </div>

                    <div class="container_room_spec">

                        <div class="container_cpe_black_box">
                            <div class="name" style="width: 40%;margin-right: 10%;">
                                Dark Fiber Hand - Off Panel To Customer (CPE)

                            </div> 

                                <div class="container_radio_darkfiber" style="position:relative; top: 3px;">
                                    <input type="radio" name="if_dark_fiber" value="yes" /> <span>YES</span> 
                                        &nbsp;
                                        &nbsp;
                                        &nbsp;
                                    <input type="radio" name="if_dark_fiber" value="no" checked="checked"/> <span>NO</span>

                                </div>

                        </div>

                        <div class="container_cpe_black_box">
                            <div class="name" style="width: 9%;margin-right: 41%;">
                               RACK SIZE

                            </div> 

                               <div class="container_rank_sizes" style="position: relative;bottom: 8px;">

                                    <input type="radio" name="if_rack_size" value="19" /> <span >19</span> 
                                         &nbsp;
                                         &nbsp;

                                    <input type="radio" name="if_rack_size" value="23" /> <span>23</span>
                                        &nbsp;
                                        &nbsp;

                                    <input type="radio" name="if_rack_size" value="other" checked="checked" /> <span>Other</span>
                                    <input type="text" style="width: 4%;height: 27px;font-size: 28px;position: relative;top: 5px;" name="txtOtherRackSize" />

                                </div> 

                        </div>
                            
                            <!-- style="width: 94%;float: left;margin: 0 0 10px 24px;" -->

                        <div class="container_cpe_black_box" >
                           <div class="name" style="width: 11%;margin-right: 39%;">
                               ROOM TYPE

                            </div> 

                                <div class="container_radio_roomTypes" style="position:relative; top:3px;">

                                    <input type="radio" name="if_room_type" value="private" /> <span>Private</span> 
                                         &nbsp;
                                         &nbsp;
                                         &nbsp;

                                    <input type="radio" name="if_room_type" value="common" checked="checked" /> <span>Common</span>

                                </div>
                        </div>

                    </div>

                <!-- LTX CABLE SPECS -->
                    <div class="container_cable_specs" style="float: left;width: 100%;">

                        <!-- FIRST LINE -->
                            <div class="container_fusion_clabe_data" style="width: 100%;height: 53px;">
                      
                                <div class="container_fusion_radio" style="width: 46%;float: left;margin: 14px 0 10px 14px;">
                                    <div class="name" style="margin-right: 16%;">
                                       Fusion Splice Only

                                    </div> 

                                        <div class="container_fusion_splice" style="position:relative; top: 3px;width: 94%;">
                                            <input type="radio" name="if_splice" value="yes" /> <span>YES</span> 
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                            <input type="radio" name="if_splice" value="no" checked="checked" /> <span>NO</span>

                                        </div>

                                </div>

                                <div class="container_fibers_terminated" style="width: 44%;float: left;">
                                    <div class="name" style="width: 49%;margin-right: 2%;position: relative;top: 13px;">
                                       No. of fibers terminated

                                    </div> 

                                    <input  type="text" style="text-align: right; width: 7%; height: 13px;padding: 11px;font-size: 20px;"  name="txtFiberTerminated" />
                                        
                                </div>

                            </div>   

                        <!-- SECOND LINE -->
                            <div class="container_bulkheads_connector_type">
                      
                                <div class="container_bulkhead_total">
                                    <div class="name" >
                                      Total # of Bulkheads

                                    </div> 
                                        
                                    <input  type="text" style="text-align: right;width: 7%;height: 13px;padding: 11px;font-size: 20px;"  name="txtTotalBulkHeads" />

                                </div>

                                <div class="container_connector_type">
                                    <div class="name">
                                      Connector Type

                                    </div> 

                                    <input  type="text" style="text-align: right;width: 21px;height: 14px;padding: 13px;font-size: 20px;position: relative;top: -6px;letter-spacing: -1px;text-transform: uppercase;"  name="txtConnectorType1" id="txtConnectorType1" />

                                        <span style="padding: 0 10px 0 10px;font-size: 25px;">/</span>

                                    <input  type="text" style="text-align: right;width: 21px;height: 14px;padding: 13px;font-size: 20px;position: relative;top: -6px;letter-spacing: -1px;text-transform: uppercase;" name="txtConnectorType2" id="txtConnectorType2" />
                                        

                                </div>

                            </div>
                       
                    </div>

                <!-- PANEL DRAWINGS -->
                    <div class="container_panel_photos">
                        <div class="container_center_panels">

                            <!-- LGX PHOTO N 1 -->
                                <div class="container_panel">
                                    <div class="container_cpe_black_box" style="width: 244px;padding: 15px;margin: 0 auto auto 1px;">
                                        Panel Location
                                    </div>

                                    <div class="container_panel_photo1 container_cpe_black_box">
                                        <div class="containerprueba" style="float: left;position: relative;z-index: 999999;">

                                            <form action="javascript:void(0);" id="form_archivo">

                                                <div class="div_file_inside">

                                                   <input type="file" name="archivo" id="archivoCPELGXPhoto1" accept="image/x-png, image/gif, image/jpeg" />
                                                   
                                                   <span class="text_select_image_lgx"> Click here to upload and draw an image </span>

                                                </div>  

                                                   <input type="hidden" name="code_picture" id="code" value="<?php echo $time_code; ?>" />
                                                   <input type="hidden" name="form_type" id="type" value="cpe_first_picture"/>
                                                   <input type="hidden" id="tipo_ejecucion" value="subir_archivo"/>
                        
                                            </form>
                                            
                                            <div id="archivos_subidos"></div>
                                                 <!--    <div id="respuesta" class="alert"></div> -->
                        
                                        </div>
                                        
                                        <div id="dvPictureImageFirstLGX"></div>
                                        <div id="dvCanvaImageFirstLGX"></div>


                                    </div>

                                      <div id="btnPanelButton1">Insert by Copy Paste</div>

                                </div>
                            
                            <!-- LGX PHOTO N 2  --> 
                                <div class="container_panel">
                                    <div class="container_cpe_black_box" style="width: 244px;padding: 15px;margin: 0 auto auto 1px;">
                                        Panel Location
                                    </div>

                                    <div class="container_panel_photo2 container_cpe_black_box">
                                        
                                         <div class="containerprueba" style="float: left;position: relative;z-index: 999999;">

                                            <form action="javascript:void(0);" id="form_archivo">

                                                <div class="div_file_inside">

                                                   <input type="file" name="archivo" id="archivoCPELGXPhoto2" accept="image/x-png, image/gif, image/jpeg" />
                                                   
                                                   <span class="text_select_image"> Click here to upload and draw an image </span>

                                                </div>  

                                                   <input type="hidden" name="code_picture" id="code" value="<?php echo $time_code; ?>" />
                                                   <input type="hidden" name="form_type" id="type" value="cpe_second_picture"/>
                                                   <input type="hidden" id="tipo_ejecucion" value="subir_archivo"/>
                        
                                            </form>
                                            
                                            <div id="archivos_subidos"></div>
                                                 <!--    <div id="respuesta" class="alert"></div> -->
                        
                                        </div>
                                        
                                        <div id="dvPictureImageSecondLGX"></div>
                                        <div id="dvCanvaImageSecondLGX"></div>


                                    </div>

                                       <div id="btnPanelButton2">Insert by Copy Paste</div>

                                </div>
                            
                            <!-- LGX PHOTO N 3 -->
                                <div class="container_panel">
                                    <div class="container_cpe_black_box" style="width: 246px;padding: 15px;margin: 0 auto auto 0px;">
                                        Panel Location
                                    </div>

                                    <div class="container_panel_photo3 container_cpe_black_box">
                                        <div class="containerprueba" style="float: left;position: relative;z-index: 999999;">

                                            <form action="javascript:void(0);" id="form_archivo">

                                                <div class="div_file_inside">

                                                   <input type="file" name="archivo" id="archivoCPELGXPhoto3" accept="image/x-png, image/gif, image/jpeg" />
                                                   
                                                   <span class="text_select_image"> Click here to upload and draw an image </span>

                                                </div>  

                                                   <input type="hidden" name="code_picture" id="code" value="<?php echo $time_code; ?>" />
                                                   <input type="hidden" name="form_type" id="type" value="cpe_third_picture"/>
                                                   <input type="hidden" id="tipo_ejecucion" value="subir_archivo"/>
                        
                                            </form>
                                            
                                            <div id="archivos_subidos"></div>
                                                 <!--    <div id="respuesta" class="alert"></div> -->
                        
                                        </div>
                                        
                                        <div id="dvPictureImageThridLGX"></div>
                                        <div id="dvCanvaImageThridLGX"></div>


                                    </div>

                                        <div id="btnPanelButton3">Insert by Copy Paste</div>

                                </div>
                            
                        </div>

                    </div>
                    
            </div>

        </div>      

    </form>        


<script type="text/javascript">
    
    $('input').iCheck({
        checkboxClass: 'icheckbox_square',
        radioClass: 'iradio_square',
        increaseArea: '20%' // optional
    });


</script>
