<!-- LIT EQUIP INFO -->
    <div class="div_form_request" >

        <div class="container_cpe_box" style="height: 1000px; margin: 0 auto; width: 100%;">

            <!-- RADIO IF POWER -->
                
                <div class="container_if_power_available" style="padding: 20px 20px 3px 0;margin-left: 2%;position: relative;bottom: 5px;width: 51%;float: left;"> 

                    <span style="margin-right: 13%;"> Power Available at time of survey ?</span>

                        <input type="radio" name="type_service" /> <span>YES</span> 
                            &nbsp;
                            &nbsp;
                        <input type="radio" name="type_service" /> <span>NO</span>  

                </div>

            <!-- LTX BUTTON -->
                <div class="container_comment_power" style="width: 98%;float: right;margin-left: 5px;margin-right: 10px;height: 218px;">

                    <div class="container_comment_with_button">
                        <div class="name" style="width: 22%;">
                            Comments for power info

                        </div>

                        <div id="btnPowerPreferences">
                            <span class="add_ventana_cpe"> Power Preferences </span> 


                        </div>
                    </div>

                    <textarea style="width: 93%;max-width: 96%;max-height: 34px;min-height: 148px;height: 182px;margin-left: 13px;resize: none;min-width: 16%;border: 1px solid #000;"></textarea>


                </div>

            <!-- CHECKBOX FAMILY -->

                <div class="container_checkbox_power_spec" style="width: 98%;float: right;margin-left: 8px;height: 367px;">

                    <div class="container_distance_feet">
                        <div class="name" style="width: 35%;float: left;position: relative;top: 9px;margin-right: 5%;">

                            Distance in feet from CPE Panel to outlet

                        </div>

                        <input type="text" style="text-align: right;width: 3%;padding: 15px;height: 3px;font-size: 23px;" />

                    </div>

                    <div class="container_power_type" style="margin-top: 11px;width: 55%;float: left;"> 

                      <div class="name" style=" width: 24%;float: left;margin-right: 38%;">

                           Type of power

                        </div>

                        <input type="radio" name="type_power" /> <span>AC</span> 
                            &nbsp;
                            &nbsp; 
                            &nbsp;
                            &nbsp;  
                            &nbsp;
                            &nbsp; 
                            &nbsp;
                            &nbsp;
                        <input type="radio" name="type_power" /> <span>DC</span>  

                    </div>

                    <div class="container_ac_voltage" style="margin-top: 9px;width: 83%;float: left;"> 

                      <div class="name" style="width: 4%;float: left;margin-right: 37%;">

                            AC

                       </div>

                        <input type="radio" name="type_voltage_ac" /> <span style="margin-right:28px;">120 VAC</span> 
                        <input type="radio" name="type_voltage_ac" /> <span>208 / 220 / 240 VAC</span>  

                    </div>

                    <div class="container_ac_amps" style="margin-top: 9px;width: 83%;float: left;"> 

                      <div class="name" style="width: 11%;float: left;margin-right: 228px;margin-left: -3px;">

                            AC / AMPS

                       </div>

                        <input type="radio" name="ac_ampers" /> <span style="margin-right: 67px;">15</span> 
                        <input type="radio" name="ac_ampers" /> <span style="margin-right: 11%;">20</span>   
                        <input type="radio" name="ac_ampers" /> <span>30</span>  

                    </div> 

                    <div class="container_ac_recepticles" style="margin-top: 6px;width: 83%;float: left;"> 

                      <div class="name" style="width: 26%;float: left;margin-right: 118px;margin-left: -5px;">

                            Type of AC receptacles

                       </div>

                        <input type="radio" name="type_receptacle" /> <span style="margin-right: 5%;">Twist</span> 
                        <input type="radio" name="type_receptacle" /> <span style="margin-right:-7%;">Non - Twist</span> 
                            &nbsp;
                            &nbsp; 
                            &nbsp;
                            &nbsp;   
                            &nbsp; 
                            &nbsp;
                            &nbsp;
                            &nbsp;  
                        <input type="radio" name="type_receptacle" /> <span>Strip</span>  

                    </div>  

                    <div class="container_rack_size_2" style="width: 83%;float: left;height: 48px;"> 

                      <div class="name" style="width: 12%;float: left;margin-right: 226px;margin-left: -9px;position: relative;top: 23%;">

                            RACK SIZE

                       </div>

                            <input type="radio" name="if_rack_size" /> <span style="margin-right: 27px;">19</span>
                            <input type="radio" name="if_rack_size" /> <span style="margin-right: 28px;">23</span>

                            <div class="container_other_rack_size">
                                <input type="radio" name="if_rack_size" /> <span style="margin: 0 3px;">Other</span>
                                <input type="text" style="width: 4%;height: 27px;font-size: 28px;position: relative;top: 5px;" /> 

                            </div>

                            <input type="radio" name="if_rack_size" /> <span>N / A</span>
        

                    </div>

                    <div class="container_wall_space" style="width: 83%;float: left;margin-top: 9px;"> 

                      <div class="name" style="width: 24%;float: left;margin-right: 139px;margin-left: -13px;position: relative;bottom: 5px;">

                            Wall Space Available

                       </div>

                            <input type="radio" name="if_wall_space_available" /> <span style="margin-right: 17px;">YES</span>
                            <input type="radio" name="if_wall_space_available" /> <span style="margin-right: 23px;">NO</span>

                            <input type="radio" name="if_wall_space_available" /> <span>N / A</span>
        

                    </div>

                    <div class="container_building_feed" style="width: 83%;float: left;margin-top: 21px;"> 

                        <div class="name" style="width: 28%;float: left;margin-right: 111px;margin-left: -13px;position: relative;bottom: 5px;">

                            BUILDING UPS ON OUR FEED

                        </div>

                        <input type="radio" name="if_building_up_feed" /> <span style="margin-right: 17px;">YES</span>
                        <input type="radio" name="if_building_up_feed" /> <span style="margin-right: 23px;">NO</span>

                    </div>

                    <div class="container_generator_feed" style="width: 83%;float: left;margin-top: 21px;"> 

                        <div class="name" style="width: 28%;float: left;margin-right: 122px;margin-left: -24px;position: relative;bottom: 5px;">

                            Generator on our feed

                        </div>

                        <input type="radio" name="if_generator_feed" /> <span style="margin-right: 17px;">YES</span>
                        <input type="radio" name="if_generator_feed" /> <span style="margin-right: 23px;">NO</span>

                    </div>



                </div>   

            <!-- POWER PANELS AND CPE ROOM ENTRANCE -->
                <div class="container_pictures">

                 <div class="container_panel_photos">

                    <div class="container_center_panels">

                    <!-- FIRST POWER PANEL  -->
                        <div class="container_panel">
                            <div class="container_cpe_black_box" style="width: 87%;padding: 15px;margin: 0 auto;">
                                Power/Panel Loc.
                            </div>

                            <div class="container_power_panel_photo1"></div>

                        </div>
                    
                     <!-- SECOND POWER PANEL  -->
                        <div class="container_panel">
                            <div class="container_cpe_black_box" style="width: 87%;padding: 15px;margin: 0 auto;">
                                Power/Panel Loc.
                            </div>

                            <div class="container_power_panel_photo2"></div>

                        </div>
                    
                    <!--  THRID CURRENT PANEL -->
                        <div class="container_panel">
                            <div class="container_cpe_black_box" style="width: 87%;padding: 15px;margin: 0 auto;">
                                Power/Panel Loc.
                            </div>

                            <div class="container_power_panel_photo3"></div>
            
                        </div>    

                    <!--  CPE ROOM PANEL -->
                        <div class="container_panel">
                            <div class="container_cpe_black_box" style="width: 87%;padding: 15px;margin: 0 auto;">
                                CPE ROOM ENTRANCE

                            </div>

                            <div class="container_cpe_room_panel_photo4"></div>
                            
                        </div>

                    </div>

                </div>


        </div>

    </div>                    
