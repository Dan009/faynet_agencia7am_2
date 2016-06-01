<?php 
<<<<<<< HEAD
    
=======

>>>>>>> origin/master
// BUSCAMOS LA INFORMACION DEL PROPERTY MANAGER
    $consulta_property_tenant = "SELECT * FROM tenants_contact WHERE id_request='$id_request'";
    $resultado_property_tenant = mysqli_query($conexion,$consulta_property_tenant);
    $fila_property_tenant = mysqli_fetch_array($resultado_property_tenant);

       // var_dump($fila_property_tenant);


?>

<!-- COMPANY CUSTOMER CONTACT-->
    <div class="div_form_request" >

        <div class="container_cpe_box" style="height: 615px; margin: 0 auto; width: 100%;">

            <div class="header-info" style="border: 0; margin-top: -0.5%;">

                <strong style="margin-left: 2%;"> [COMPANY NAME] Customer Info </strong>

            </div>

                <div class="container_service_info_type" style="width: 98%;float: right;margin-left: 5px;height: 139px;">

                    <div class="name" style="width: 35%;">
                        [Company Initial] Customer Company Name

                    </div>

                    <input type="text" placeholder="ENTER CUSTOMER COMPANY NAME ..." style="width: 94%;height: 33px;position: relative;margin: 12px 0 -7px 9px;padding: 7px;bottom: 10px;border: 2px solid #000;" />

                    <input type="text" placeholder="ENTER CUSTOMER COMPANY NAME ..." style="width: 94%;height: 33px;position: relative;margin: 12px 0 20px 9px;padding: 7px;bottom: 10px;border: 2px solid #000;" />


                </div>

                <div class="container_service_info_type" style="width: 98%;float: right;margin-left: 5px;height: 147px;">

                    <div class="name" style="width: 27%;">
                          [Company Initial] Customer Email

                    </div>

                    <input type="text" placeholder="ENTER COMPANY CUSTOMER EMAIL ..." style="width: 94%;height: 33px;position: relative;margin: 12px 0 20px 9px;padding: 7px;bottom: 10px;border: 2px solid #000;" />

                    <input type="text" placeholder="ENTER COMPANY CUSTOMER EMAIL ..." style="width: 94%;height: 33px;position: relative;margin: -12px 0 20px 9px;padding: 7px;bottom: 10px;border: 2px solid #000;" />


                </div>   

                <div class="container_service_info_type" style="width: 98%;float: right;margin-left: 5px;height: 89px;">

                    <div class="name" style="width: 228px;">
                         [Company Initial] Contact Name

                    </div>

                      <input type="text" placeholder="ENTER PROPERTY MANAGEMENT EMAIL ..." style="width: 94%;height: 33px;position: relative;margin: 15px 0 0 8px;padding: 7px;bottom: 10px;border: 2px solid #000;" /> 


                </div>

                    <div class="name" style="width: 56%;float: left;">
                           Business Card


                    </div> 

                    <div class="name" style="width: 25%; float: left;">
                           Business Card


                    </div>

            <div class="container_propery_management_contacts" style="float: left;margin-top: 10px;">
      
                <div class="container_first_property_number">

                    <div class="name" style="width: 31%;margin: 0 auto;margin-right: 21%;">
                        [Company initials] Office Phone

                    </div>

                        <div class="container_contact_number" style="width: 56%;height: 81px;position: relative;left: 10px;">

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">(</span> 

                             <input type="text" style="width: 8%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px;" value="<?php /*echo substr($fila_property_manager['contact_office_phone'],0,3);*/ ?>" disabled="disabled" />

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">)</span>

                             <input type="text" style="width: 8%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px;" value="<?php /*echo substr($fila_property_manager['contact_office_phone'],3,-6);*/ ?>" disabled="disabled" />

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">-</span>

                             <input type="text" style="width: 10%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px 9px 6px 6px;" value="<?php /*echo substr($fila_property_manager['contact_office_phone'],6,-1); */?>" disabled="disabled" />

                        </div>

                 </div>  

                <div class="container_second_property_number">

                    <div class="name" style="width: 29%;margin: 0 auto; margin-right: 24%;">
                        [Company Initials] Cell Phone

                    </div>
 
                        <div class="container_contact_number" style="width: 56%;height: 81px;position: relative;left: 10px;">

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">(</span> 

                             <input type="text" style="width: 8%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px;" value="<?php /*echo substr($fila_property_manager['contact_office_phone'],0,3);*/ ?>" disabled="disabled" />

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">)</span>

                             <input type="text" style="width: 8%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px;" value="<?php /*echo substr($fila_property_manager['contact_office_phone'],3,-6);*/ ?>" disabled="disabled" />

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">-</span>

                             <input type="text" style="width: 10%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px 9px 6px 6px;" value="<?php /*echo substr($fila_property_manager['contact_office_phone'],6,-1); */?>" disabled="disabled" />

                        </div>

                 </div>  

            </div>


        </div>

    </div>                    

<!-- TENANT INFO -->

    <div class="div_form_request" >
        <div class="container_cpe_box" style="height: 654px; margin: 0 auto; width: 100%;">

            <div class="header-info" style="border: 0; margin-top: -0.5%;">

                <strong style="margin-left: 2%;"> Tenant Info </strong>

            </div>

            	<div class="container_cpe_orange_box" style="padding: 8px 20px 8px 12px;margin-left: 2%;position: relative;bottom: 5px;width: 51%;float: left;border: 2px solid rgb(0, 0, 0);"> 

                    <span style="margin-right: 72px;"> Same as [Company Name] Customer</span>

                        <input type="radio" name="type_service" /> <span>YES</span> 
                        &nbsp;
                        <input type="radio" name="type_service" /> <span>NO</span>  

                </div>

                <div class="container_service_info_type" style="width: 98%;float: right;margin-left: 5px;height: 139px;">

                    <div class="name" style="width: 19%;">
                        Tenant Company Name

                    </div>

                        <?php 

                            // BUSCAMOS EL NOMBRE DE LA COMPAÑIA
                                $consulta_company_name = "SELECT user_name FROM usuarios WHERE id='".$fila_property_tenant['company']."'";
                                $resultado_company_name = mysqli_query($conexion,$consulta_company_name);
                                $fila_company_name = mysqli_fetch_array($resultado_company_name);/**/

                                    //var_dump($fila_company_name);

                        ?>

                    <input type="text" style="width: 94%;height: 33px;position: relative;margin: 12px 0 -7px 9px;padding: 7px;bottom: 10px;border: 2px solid #000;" disabled="disabled" value="<?php echo strtoupper($fila_company_name['user_name']); ?>" />

                    <input type="text" style="width: 94%;height: 33px;position: relative;margin: 12px 0 20px 9px;padding: 7px;bottom: 10px;border: 2px solid #000;" disabled="disabled" />


                </div>

                <div class="container_service_info_type" style="width: 98%;float: right;margin-left: 5px;height: 147px;">

                    <div class="name" style="width: 12%;">
                          Tenant Email

                    </div>

                    <input type="text" style="width: 94%;height: 33px;position: relative;margin: 12px 0 20px 9px;padding: 7px;bottom: 10px;border: 2px solid #000;" value="<?php echo strtoupper($fila_property_tenant['contact_email']); ?>" disabled />

                    <input type="text" style="width: 94%;height: 33px;position: relative;margin: -12px 0 20px 9px;padding: 7px;bottom: 10px;border: 2px solid #000;" disabled="disabled" />


                </div>   

                <div class="container_service_info_type" style="width: 98%;float: right;margin-left: 5px;height: 89px;">

                    <div class="name" style="width: 18%;">
                         Tenant Contact Name

                    </div>

                      <input type="text" placeholder="ENTER PROPERTY MANAGEMENT EMAIL ..." style="width: 94%;height: 33px;position: relative;margin: 15px 0 0 8px;padding: 7px;bottom: 10px;border: 2px solid #000;" value="<?php echo strtoupper($fila_property_tenant['contact_name']); ?>" disabled /> 


                </div>

                    <div class="name" style="width: 56%;float: left;">
                           Business Card


                    </div> 

                    <div class="name" style="width: 25%; float: left;">
                           Business Card


                    </div>

            <div class="container_propery_management_contacts" style="float: left;margin-top: 10px;">
      
                <div class="container_first_property_number">

                    <div class="name" style="width: 21%;margin: 0 auto;margin-right: 34%;">
                        Tenant Office Phone

                    </div>

                        <div class="container_contact_number" style="width: 56%;height: 81px;position: relative;left: 10px;">

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">(</span> 

                             <input type="text" style="width: 8%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px;" value="<?php echo substr($fila_property_tenant['contact_office_number'],0,3); ?>" disabled="disabled" />

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">)</span>

                             <input type="text" style="width: 8%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px;" value="<?php echo substr($fila_property_tenant['contact_office_number'],3,-4); ?>" disabled="disabled" />

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">-</span>

<<<<<<< HEAD
                             <input type="text" style="width: 10%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px 9px 6px 6px;" value="<?php echo substr($fila_property_tenant['contact_office_number'],5,-1); ?>" disabled="disabled" />
=======
                             <input type="text" style="width: 10%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px 9px 6px 6px;" value="<?php echo substr($fila_property_tenant['contact_office_number'],6,-1); ?>" disabled="disabled" />
>>>>>>> origin/master

                        </div>

                 </div>  

                <div class="container_second_property_number">

                    <div class="name" style="width: 19%;margin: 0 auto;margin-right: 34%;">
                        Tenant Cell Phone

                    </div>

                        <div class="container_contact_number" style="width: 56%;height: 81px;position: relative;left: 10px;">

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">(</span> 

                             <input type="text" style="width: 8%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px;" value="<?php echo substr($fila_property_tenant['contact_cell_number'],0,3); ?>" disabled="disabled" />

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">)</span>

                             <input type="text" style="width: 8%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px;" value="<?php echo substr($fila_property_tenant['contact_cell_number'],3,-4); ?>" disabled="disabled" />

                             <span style="padding: 0 10px 0 10px;position: relative; top: 7px;font-size: 25px; width: 5%;">-</span>

<<<<<<< HEAD
                             <input type="text" style="width: 10%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px 9px 6px 6px;" value="<?php echo substr($fila_property_tenant['contact_cell_number'],5,-1); ?>" disabled="disabled" />
=======
                             <input type="text" style="width: 10%;height: 22px;font-size: 20px;position: relative;top: 5px;padding: 6px 9px 6px 6px;" value="<?php echo substr($fila_property_tenant['contact_cell_number'],6,-1); ?>" disabled="disabled" />
>>>>>>> origin/master

                        </div>

                 </div>  

            </div>


        </div>

    </div>