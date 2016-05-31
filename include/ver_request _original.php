<?php

    include("../confi/conf.inc.php");
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);


 //echo $_POST['id_request']; 

	$consulta="SELECT * FROM request WHERE id_request='".$_POST['id_request']."' AND estado='1' ";	
	$resultado= mysqli_query($conexion,$consulta);
	$fila= mysqli_fetch_array($resultado);
	
	
	$consulta_table="SELECT * FROM ".$fila['tipo']." WHERE id='".$fila['id']."' ";
	$resultado_table= mysqli_query($conexion,$consulta_table);
	$fila_table= mysqli_fetch_array($resultado_table);
	
	$consulta_general="SELECT * FROM general_information WHERE time_code='".$fila['id_request']."' ";
	$resultado_general= mysqli_query($conexion,$consulta_general);
	$fila_general=mysqli_fetch_array($resultado_general);	
 

?>





<div id="type_plan"> <?php echo $fila['name']; ?> </div>
<div class="container-general-info">
	<!--<div><h1>GULINC REQUEST JOB FORM</h1></div>-->
  <div class="campos-container">
  	<div class="header-info" style="border-top:none;"><strong>GENERAL INFO</strong></div>
    
        <div class="name"><strong>LT ENGINEERING</strong></div>
        <div class="description">
			<?php
				$consulta_engineering="SELECT * FROM engineering WHERE id='".$fila_general['engineering_id']."' ";
				$resultado_engineering= mysqli_query($conexion,$consulta_engineering);
				$fila_engineering=mysqli_fetch_array($resultado_engineering);
				echo $fila_engineering['engineering'];
			?>
		
		</div>
        <div class="name"><strong>SOLOMON #</strong></div>
        <div class="description"> <?php echo $fila_general['solomon_number']; ?> </div>
		
        <div class="name"><strong>Service #</strong></div>
        <div class="description"> <?php echo $fila_general['service_number']; ?> </div>
		
        <div class="name"><strong>customer name: </strong></div>
        <div class="description"> <?php echo $fila_general['customer_name']; ?> </div>
		
        <div class="name"><strong>PRJ. ASSING #</strong></div>
        <div class="description"> <?php echo $fila_general['prj_assing_number']; ?>  </div>
		
        <div class="name"><strong>KICK OFF DATE</strong></div>
        <div class="description"> <?php echo $fila_general['kick_off_date']; ?> </div>
		
        <div class="name"><strong>BLDG#</strong></div>
        <div class="description"> <?php echo $fila_general['bldg_number']; ?> </div>
		
        <div class="name"><strong>street</strong></div>
        <div class="description"> <?php echo $fila_general['street_number']; ?>  </div>
		
        <div class="name"><strong>muni</strong></div>
        <div class="description">
			<?php 
				$consulta="SELECT * FROM city WHERE id='".$fila_general['city_id']."' ";
				$resultado= mysqli_query($conexion,$consulta);
				$fila_city= mysqli_fetch_array($resultado);
				echo $fila_city['city'];
			?>			
		
		</div>
		
        <div class="name"><strong>state</strong></div>
        <div class="description">

			<?php 
				$consulta="SELECT * FROM state WHERE id='".$fila_general['city_id']."' ";
				$resultado= mysqli_query($conexion,$consulta);
				$fila_state= mysqli_fetch_array($resultado);
				echo $fila_state['state'];
			?>			
		
		</div>
		
        <div class="name"><strong>date request sent</strong></div>
        <div class="description"> <?php echo $fila_general['date_request_sent']; ?>  </div>
		
        <div class="name"><strong>DOC#</strong></div>
        <div class="description"> <?php echo $fila_general['doc_number']; ?>  </div>
		
        <div class="name"><strong>po#</strong></div>
        <div class="description"> <?php echo $fila_general['po_number']; ?> </div>
		
        <div class="name"><strong>LT EXP. JOB COMPLETION</strong></div>
        <div class="description"> <?php echo $fila_general['lt_exp_job_completion']; ?> </div>
		
        <div class="name"><strong>LT FIBER ENG.</strong></div>
        <div class="description"> <?php echo $fila_general['lt_fiber_eng']; ?> </div>
		
        <div class="name"><strong>LT PROJECT manager</strong></div>
        <div class="description"> <?php echo $fila_general['lt_project']; ?>  </div>
		
        <div class="name"><strong>Scope Work</strong></div>
        <div class="description" style="height:75px; border:1px solid #000; margin-top:10px;"> <?php echo $fila_general['scope_work']; ?> </div>
    
  </div>
</div>

<?php if($fila['tipo'] == "inside_plan" ){ 

	///// INSIDE PLAN		
	echo $consulta="SELECT * FROM inside_plans WHERE id_request='".mysqli_real_escape_string($conexion,htmlspecialchars($fila['id']))."' ";
	$resultado= mysqli_query($conexion,$consulta);
	$rows_inside= mysqli_num_rows($resultado);
	$fila_inside= mysqli_fetch_array($resultado);
	
?>





<div class="container-isp">
  <div class="header-info"><strong>INSIDE PLAN REQUEST</strong></div>
  <div style="float:left; width:100%;">
        <div class="name"><strong> <?php if($fila_inside['new_building']=="si"){ ?> NEW BUILDING. <?php }else{ ?> EXISTING BUILDING. <?php } ?> </strong></div>
        <div class="description" style="border:none;">YES</div>
    </div>
   
  <?php if($fila_inside['assigned_company_site_survey_building']!=0 || $fila_inside['assigned_company_isp_eng_plans_building']!=0  ){ ?> 
  <div class="sub-name" style="font-size:13px;"><strong>BUILDING SITE SURVEY</strong></div>
  
  <div class="conjunto">
	  <div style="overflow:hidden; border-top:1px solid #000; padding-left:5px;">
			<?php if($fila_inside['assigned_company_site_survey_building']!=0 ){ ?>
				<div style="font-size:12px;"><strong>SITE SURVEY</strong></div>
				<div style="font-size:12px;">
				
					<strong>Assigned Company:</strong> 
					<?php 
						$consulta="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_site_survey_building']."' ";
						$resultado= mysqli_query($conexion,$consulta);
						$fila_company_inside= mysqli_fetch_array($resultado);
						echo $fila_company_inside['company'];
					?>
					
					<strong>Contact:</strong>
					<?php 
						$consulta="SELECT * FROM contact WHERE contratista_id='".$fila_inside['assigned_company_site_survey_building']."' ";
						$resultado= mysqli_query($conexion,$consulta);
						$fila_contact_inside= mysqli_fetch_array($resultado);
						echo $fila_contact_inside['contact'];
					?>					
					
				</div>
			<?php } ?><br/>
			<?php if($fila_inside['assigned_company_isp_eng_plans_building']!=0 ){ ?>
				<div style="font-size:12px;"><strong>ISP ENG. PLANS</strong></div>
				<div style="font-size:12px;">
				
					<strong>Assigned Company:</strong>
					<?php 
						$consulta="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_isp_eng_plans_building']."' ";
						$resultado= mysqli_query($conexion,$consulta);
						$fila_company_inside= mysqli_fetch_array($resultado);
						echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
					?>					
					
				
					
				</div>
				
				
			<?php } ?>
	  </div>
  </div>
  
  <div style="width:100%; float:left; border-top:1px solid #000;"></div>
  <?php } ?>
  
 <?php if($fila_inside['assigned_company_eng_isp_plans_no_survey']!=0  ){ ?>  
<div class="sub-name" style="font-size:13px;"><strong>SP ENG. PLANS ONLY (NO SURVEY)</strong></div>
  <div class="conjunto">
  <div style="overflow:hidden; padding-left:5px;">
  	<div style="font-size:12px;"><strong>ENG. ISP PLANS</strong></div>
    <div style="font-size:12px;">
		<strong>Assigned Company:</strong>  
		<?php 
			$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['assigned_company_eng_isp_plans_no_survey']."' ";
			$resultado= mysqli_query($conexion,$consulta);
			$fila_company_inside= mysqli_fetch_array($resultado);
			echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
		?>	
		
	</div>
  </div>
  </div>
  
<?php } ?>
  
  

 
  
  
  
  
  
  <div style="width:100%; float:left; border-top:1px solid #000;"></div>
  
   
  <?php if($fila_inside['assigned_company_site_survey_isp_as_built']!=0 || $fila_inside['assigned_company_eng_isp_plans_isp_as_built']!=0  ){ ?> 
  <div class="sub-name" style="font-size:13px;"><strong>ISP AS-BUILT ENTIRE BLDG</strong></div>
  
  <div class="conjunto">
	  <div style="overflow:hidden;padding-left:5px;">
			<?php if($fila_inside['assigned_company_site_survey_isp_as_built']!=0 ){ ?>
				<div style="font-size:12px;"><strong>SITE SURVEY</strong></div>
				<div style="font-size:12px;">
				
					<strong>Assigned Company:</strong> 
					<?php 
						$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['assigned_company_site_survey_isp_as_built']."' ";
						$resultado= mysqli_query($conexion,$consulta);
						$fila_company_inside= mysqli_fetch_array($resultado);
						echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
					?>
					
					<strong>Contact:</strong>
					<?php 
						$consulta="SELECT * FROM contact WHERE contratista_id='".$fila_inside['assigned_company_site_survey_isp_as_built']."' ";
						$resultado= mysqli_query($conexion,$consulta);
						$fila_contact_inside= mysqli_fetch_array($resultado);
						echo $fila_contact_inside['contact'];
					?>					
					
				</div>
			<?php } ?><br/>
			<?php if($fila_inside['assigned_company_eng_isp_plans_isp_as_built']!=0 ){ ?>
				<div style="font-size:12px;"><strong> ENG. ISP PLANS </strong></div>
				<div style="font-size:12px;">
				
					<strong>Assigned Company:</strong>
					<?php 
						$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['assigned_company_eng_isp_plans_isp_as_built']."' ";
						$resultado= mysqli_query($conexion,$consulta);
						$fila_company_inside= mysqli_fetch_array($resultado);
						echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
					?>					
					
				
					
				</div>
				
				
			<?php } ?>
	  </div>
  </div>
  
  <div style="width:100%; float:left; border-top:1px solid #000;"></div>
  <?php } ?>
     
  
  

  
   
  <?php if($fila_inside['assigned_company_site_survey_passive_filter']!=0 || $fila_inside['assigned_company_eng_isp_plans_passive_filter']!=0  ){ ?> 
  <div class="sub-name" style="font-size:13px;"><strong>PASSIVE FILTER SURVEY</strong></div>
  
  <div class="conjunto">
	  <div style="overflow:hidden;padding-left:5px;">
			<?php if($fila_inside['assigned_company_site_survey_passive_filter']!=0 ){ ?>
				<div style="font-size:12px;"><strong>SITE SURVEY</strong></div>
				<div style="font-size:12px;">
				
					<strong>Assigned Company:</strong> 
					<?php 
						$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['assigned_company_site_survey_passive_filter']."' ";
						$resultado= mysqli_query($conexion,$consulta);
						$fila_company_inside= mysqli_fetch_array($resultado);
						echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
					?>
					
					<strong>Contact:</strong>
					<?php 
						$consulta="SELECT * FROM contact WHERE contratista_id='".$fila_inside['assigned_company_site_survey_passive_filter']."' ";
						$resultado= mysqli_query($conexion,$consulta);
						$fila_contact_inside= mysqli_fetch_array($resultado);
						echo $fila_contact_inside['contact'];
					?>					
					
				</div>
			<?php } ?><br/>
			<?php if($fila_inside['assigned_company_eng_isp_plans_passive_filter']!=0 ){ ?>
				<div style="font-size:12px;"><strong> ENG. ISP PLANS </strong></div>
				<div style="font-size:12px;">
				
					<strong>Assigned Company:</strong>
					<?php 
						$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['assigned_company_eng_isp_plans_passive_filter']."' ";
						$resultado= mysqli_query($conexion,$consulta);
						$fila_company_inside= mysqli_fetch_array($resultado);
						echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
					?>					
					
				
					
				</div>
				
				
			<?php } ?>
	  </div>
  </div>
  
  <div style="width:100%; float:left; border-top:1px solid #000;"></div>
  <?php } ?>
     
   
  <?php if($fila_inside['floor_site_survey_research_floor']!="" || $fila_inside['assigned_company_site_survey_research_floor']!=0  ){ ?> 
  <div class="sub-name" style="font-size:13px;"><strong> RESEARCH FLOOR </strong></div>
  
  <div class="conjunto">
	  <div style="overflow:hidden;padding-left:5px;">
			<?php if($fila_inside['assigned_company_site_survey_research_floor']!=0 ){ ?>
				<div style="font-size:12px;"><strong>SITE SURVEY</strong></div>
				<div style="font-size:12px;">
				
					<strong>Assigned Company:</strong> 
					<?php 
						$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['assigned_company_site_survey_research_floor']."' ";
						$resultado= mysqli_query($conexion,$consulta);
						$fila_company_inside= mysqli_fetch_array($resultado);
						echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
					?>
					
							
					
				</div>
			<?php } ?>
	  </div>
  </div>
  
  <div style="width:100%; float:left; border-top:1px solid #000;"></div>
  <?php } ?>
     
  
  
  <div style="float:left; width:100%; padding-top:10px;"><strong>CABLE INSTALLATION CONTRACTOR'S CONTACT</strong></div>

  
  <div class="name"><strong>company name</strong></div>
   	<div class="description">
	<?php 
		$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['company_name_cable']."' ";
		$resultado= mysqli_query($conexion,$consulta);
		$fila_company_inside= mysqli_fetch_array($resultado);
		echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
	?> 	
	
	</div>
	
    <div class="name"><strong>Contact name</strong></div>
   	<div class="description"> <?php echo $fila_inside['contact_name_cable']; ?> </div>
	
    <div class="name"><strong>contact</strong></div>
   	<div class="description"> <?php echo $fila_inside['contact_number_cable']; ?>  </div>
	
    <div class="name"><strong>contact email</strong></div>
   	<div class="description"> <?php echo $fila_inside['contact_email_cable']; ?>  </div>
    
 
  <div style="float:left; width:100%; padding-top:10px;"><strong> TENANT'S CONTACT </strong></div>

  
  <div class="name"><strong>company name</strong></div>
   	<div class="description">
	<?php 
		$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['company_name_tenant']."' ";
		$resultado= mysqli_query($conexion,$consulta);
		$fila_company_inside= mysqli_fetch_array($resultado);
		echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
	?> 	
	
	</div>
	
    <div class="name"><strong>Contact name</strong></div>
   	<div class="description"> <?php echo $fila_inside['contact_name_tenant']; ?> </div>
	
    <div class="name"><strong>contact</strong></div>
   	<div class="description"> <?php echo $fila_inside['contact_number_tenant']; ?>  </div>
	
    <div class="name"><strong>contact email</strong></div>
   	<div class="description"> <?php echo $fila_inside['contact_email_tenant']; ?>  </div>
    
    

  <div style="float:left; width:100%; padding-top:10px;"><strong> PROPERTY MANAGER'S CONTACT </strong></div>

  
  <div class="name"><strong>company name</strong></div>
   	<div class="description">
	<?php 
		$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['company_name_property']."' ";
		$resultado= mysqli_query($conexion,$consulta);
		$fila_company_inside= mysqli_fetch_array($resultado);
		echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
	?> 	
	
	</div>
	
    <div class="name"><strong>Contact name</strong></div>
   	<div class="description"> <?php echo $fila_inside['contact_name_property']; ?> </div>
	
    <div class="name"><strong>contact</strong></div>
   	<div class="description"> <?php echo $fila_inside['contact_number_property']; ?>  </div>
	
    <div class="name"><strong>contact email</strong></div>
   	<div class="description"> <?php echo $fila_inside['contact_email_property']; ?>  </div>

	<div class="name"><strong>Scope Work</strong></div>
   	<div class="description" style="height:75px; border:1px solid #000; margin-top:10px;"> <?php echo $fila_inside['scope_work_inside_plans']; ?> </div>
    
</div>







<?php } ?>





<?php if($fila['tipo'] == "pole_plans" ){ 

	
?>

<div class="container-general-info">
	<div class="container-isp" >

					<div class="content_option_modal" >
						
					
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > <label for="check_as_built_licensed_pole" > AS-BUILT LICENSED POLE PLANS NEEDED </label> </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >									
									<input type="checkbox" name="check_as_built_licensed_pole" id="check_as_built_licensed_pole" value="si" <?php if($fila_table['as_built_licensed_pole']=="si" ){echo "checked"; } ?> />						
								</div>
																
							</div>
							
						</div>
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > <label for="check_as_built_file_pole" > GIS AS-BUILT FILE NEED </label> </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >									
									<input type="checkbox" name="check_as_built_file_pole" id="check_as_built_file_pole" value="si" <?php if($fila_table['gis_as_built_file']=="si" ){echo "checked"; } ?> />						
								</div>
																
							</div>
							
						</div>
					
					
						<div class="container_div_select_under_pole" style="margin-top: 10px;" >
						
							<div class="text_option_pole"> 
								<input type="text" name="from_aerial_route_pole" class="input_from_aerial_route_pole" placeholder="From" <?php if($fila_table['as_built_from_pole']!="" ){  ?> value="<?php echo $fila_table['as_built_from_pole']; ?>" <?php } ?> />
								<input type="text" name="to_aerial_route_pole" class="input_from_aerial_route_pole" placeholder="To" <?php if($fila_table['as_built_to_pole']!="" ){  ?> value="<?php echo $fila_table['as_built_to_pole']; ?>" <?php } ?> />
							</div>
								
							<div class="input_aerial_route_pole"> 
								<div class="text_input_aerial_route_pole"> PROPOSED AERIAL ROUTE LENGTH  </div>
								<input type="text" name="length_aerial_route_pole" class="input_from_aerial_route_pole" placeholder="FT" <?php if($fila_table['proposed_aerial_pole']!="" ){  ?> value="<?php echo $fila_table['proposed_aerial_pole']; ?>" <?php } ?> />
								
							</div>
						
						</div>
														
						<div class="container_option_under_pole" style="margin-top: 10px;" > 
							<div class="container_div_select_under_pole"  >
							
								<textarea placeholder="SCOPE WORK" name="scope_work_proposed_pole_railroad_dos " ><?php if($fila_table['scope_work_pole']!="" ){ echo $fila_table['scope_work_pole'];  } ?></textarea>
								
							
							</div>							
						</div>												
						
						
						
						
					</div>
					
					
						<div class="container_company" style="margin-bottom:10px;" >
							
							<div class="div_container_company div_container_company_uno" >
								<div class="div_title_company" style="font-size:11px;" > <div> CABLE INSTALLATION CONTRACTOR'S CONTACT </div> </div>
								
								<div class="div_select_company" >
									<select name="company_cable_pole">
										
										<?php 
											$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['cable_company_name']."' AND estado='3' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
										<?php } ?>										
									</select>
								</div>
								<input type="text" name="contact_name_cable_pole" placeholder="CONTACT NAME" class="input_cable_modal"   <?php if($fila_table['cable_contact_name']!="" ){  ?> value="<?php echo $fila_table['cable_contact_name']; ?>" <?php } ?>   />
								<input type="text" name="contact_number_cable_pole" placeholder="CONTACT #" class="input_cable_modal" <?php if($fila_table['cable_contact_number']!="" ){  ?> value="<?php echo $fila_table['cable_contact_number']; ?>"  <?php } ?> />
								<input type="text" name="contact_email_cable_pole" placeholder="CONTACT'S EMAIL" class="input_cable_modal" <?php if($fila_table['cable_contact_email']!="" ){  ?> value="<?php echo $fila_table['cable_contact_email']; ?>"  <?php } ?> />
								
							</div>
					
						
							
						</div>						
					
										
						
	
	
	</div>
					
</div>
					


<?php } ?>





<?php if($fila['tipo'] == "proposed_pole_plan_task" ){ 

	
?>

<div class="container-general-info">
	<div class="container-isp" >
	<div class="content_option_modal" >
		
		<div class="title_content_option_pole" > 
			<div class="div_title_content_option_pole"  >
				PROPOSED POLE PLAN TASK
			
			</div>
		</div>
		
		<div class="div_option_pole" > 
			
			<div class="text_option_pole" > CONSTRUCTION PROPOSED POLE PLANS NEEDED </div>
			<div class="container_radio_option_pole">
				<div class="margin_radio_pole" >
					<input type="radio" name="si_construction_pole" id="si_construction_pole" value="si"  <?php if($fila_table['construction_proposed_plans']=="si" ){echo "checked"; } ?> />
					<label for="si_construction_pole" > Yes</label>
				</div>
				
				<div class="margin_radio_pole">
					<input type="radio" name="si_construction_pole" id="no_construction_pole" value="no" <?php if($fila_table['construction_proposed_plans']=="no" ){echo "checked"; } ?> />
					<label for="no_construction_pole">No</label>
				</div>
				
			</div>
			
		</div>
		
		<div class="div_option_pole" > 
			
			<div class="text_option_pole" > GPS FIELD SURVEY POLE NEEDED </div>
			<div class="container_radio_option_pole">
				<div class="margin_radio_pole" >
					<input type="radio" name="gsp_field_pole" id="si_gsp_field_pole" value="si"  <?php if($fila_table['gps_field_survey_pole']=="si" ){echo "checked"; } ?> />
					<label for="si_gsp_field_pole" > Yes</label>
				</div>
				
				<div class="margin_radio_pole">
					<input type="radio" name="gsp_field_pole" id="no_gsp_field_pole" value="no" <?php if($fila_table['gps_field_survey_pole']=="no" ){echo "checked"; } ?> />
					<label for="no_gsp_field_pole">No</label>
				</div>
				
			</div>
			
		</div>
		
		<div class="div_option_pole" > 
			
			<div class="text_option_pole" > LICENSE PROPOSED POLE PLANS NEEDED </div>
			<div class="container_radio_option_pole">
				<div class="margin_radio_pole" >
					<input type="radio" name="license_proposed_pole" id="si_license_proposed_pole" value="si" <?php if($fila_table['license_proposed_pole']=="si" ){echo "checked"; } ?> />
					<label for="si_license_proposed_pole" > Yes</label>
				</div>
				
				<div class="margin_radio_pole">
					<input type="radio" name="license_proposed_pole" id="no_license_proposed_pole" value="no" <?php if($fila_table['license_proposed_pole']=="no" ){echo "checked"; } ?> />
					<label for="no_license_proposed_pole">No</label>
				</div>
				
			</div>
			
		</div>
		
		<div class="div_option_pole" > 
			
			<div class="text_option_pole" > MEASURE HEIGHT OF ATTACHED CABLES NEED </div>
			<div class="container_radio_option_pole">
				<div class="margin_radio_pole" >
					<input type="radio" name="measure_height_pole" id="si_measure_height_pole" value="si"  <?php if($fila_table['measure_height_attached']=="si" ){echo "checked"; } ?> />
					<label for="si_measure_height_pole" > Yes</label>
				</div>
				
				<div class="margin_radio_pole">
					<input type="radio" name="measure_height_pole" id="no_measure_height_pole" value="no"  <?php if($fila_table['measure_height_attached']=="no" ){echo "checked"; } ?> />
					<label for="no_measure_height_pole">No</label>
				</div>
				
			</div>
			
		</div>
		
		<div class="div_option_pole" > 
			
			<div class="text_option_pole" > LICENSE FORMS NEEDED </div>
			<div class="container_radio_option_pole">
				<div class="margin_radio_pole" >
					<input type="radio" name="license_forms_pole" id="si_license_forms_pole" value="si" <?php if($fila_table['license_forms_needed']=="si" ){echo "checked"; } ?> />
					<label for="si_license_forms_pole" > Yes</label>
				</div>
				
				<div class="margin_radio_pole">
					<input type="radio" name="license_forms_pole" id="no_license_forms_pole" value="no" <?php if($fila_table['license_forms_needed']=="no" ){echo "checked"; } ?> />
					<label for="no_license_forms_pole">No</label>
				</div>
				
			</div>
			
		</div>
		
		
		
	</div>
	</div>
					
</div>
					


<?php } ?>


<?php if($fila['tipo'] == "as_built_pole_plan_task" ){ 

	
?>

<div class="container-general-info">
	<div class="container-isp" >
	<div class="content_option_modal" >

						<div class="title_content_option_pole" > 
							<div class="div_title_content_option_pole"  >
								AS-BUILT POLE PLAN TASK
							
							</div>
						</div>	
	
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > AS-BUILT LICENSED POLE PLANS NEEDED </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="as_built_licensed_pole" id="si_as_built_licensed_pole" value="si" <?php if($fila_table['as_built_licensed_pole_plans']=="si" ){echo "checked"; } ?> />
									<label for="si_as_built_licensed_pole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="as_built_licensed_pole" id="no_as_built_licensed_pole" value="no" <?php if($fila_table['as_built_licensed_pole_plans']=="no" ){echo "checked"; } ?> />
									<label for="no_as_built_licensed_pole">No</label>
								</div>
								
							</div>
							
						</div>
							
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > GIS AS-BUILT FILE NEED </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="gis_as_built_file_pole" id="si_gis_as_built_file_pole" value="si" <?php if($fila_table['gis_as_built_file_need']=="si" ){echo "checked"; } ?> />
									<label for="si_gis_as_built_file_pole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="gis_as_built_file_pole" id="no_gis_as_built_file_pole" value="no" <?php if($fila_table['gis_as_built_file_need']=="no" ){echo "checked"; } ?> />
									<label for="no_gis_as_built_file_pole">No</label>
								</div>
								
							</div>
							
						</div>
												
						
						
						
					</div>
						
	
	
	</div>
	
	
	</div>
					
</div>
					


<?php } ?>


<?php if($fila['tipo'] == "outsite_utility_pole_plan_task" ){ 

	
?>

<div class="container-general-info">
	<div class="container-isp" >
	<div class="content_option_modal" >

			
						
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								OUTSIDE UTILITY APPLICATION TASK
					
														
							
							</div>
							
						</div>
						
						
							<div class="container_option_survey" >
							
								<div class="div_select_survey">
									
									<select name="company_outside_pole" >
										
										<?php 
											$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['outsite_utility_company']."' AND estado='3' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
										<?php } ?>										
									</select>
								
								</div>
								<div class="div_select_survey">
									
									<select name="contact_outside_pole" >
										
										<?php 
											$consulta_company="SELECT * FROM contact WHERE id='".$fila_table['outsite_utility_contact']."' AND estado='1' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>
										<?php } ?>										
									</select>
								
								</div>	


				
							</div>
							
							<div class="container_option_under_pole" > 
							
								<div class="div_option_under_pole" >
								
									<label for="underground_application" > UNDERGROUND APPLICATION  </label>
									<input type="radio" name="underground_application" id="underground_application" value="underground" <?php if($fila_table['outsite_underground_application'] =="underground" ){  ?> checked<?php } ?> />
									
									
									
								</div>
								<div class="div_option_under_pole" >
								
																
									<label for="aerial_application" > AERIAL APPLICATION  </label>
									<input type="radio" name="underground_application" id="aerial_application" value="aerial" <?php if($fila_table['outsite_underground_application'] =="aerial" ){  ?> checked<?php } ?>  />
									
								</div>
							
							</div>	
							
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > Application Needed For: </div>
									<div class="select_under_pole">
										<select name="company_application_needed">
											
										<?php 
											 $consulta_company="SELECT * FROM usuarios WHERE  id='".$fila_table['outsite_utility_company']."' AND estado='3' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
										<?php } ?>												
										</select>
									</div>	
									<div class="select_under_pole">
										<select name="contact_application_needed">
										
										<?php 
											$consulta_company="SELECT * FROM contact WHERE id='".$fila_table['outsite_utility_contact']."' AND estado='1' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>
										<?php } ?>													
										</select>
									</div>
								
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > CUST. CABLE COUNT </div>
								
									<input type="text" name="cust_cable_count" class="input_under_pole" value="<?php echo $fila_table['outsite_cust_cable']; ?>" />
								
									<div class="text_div_select_under_pole" > CUST. TIE LOC TO NET </div>
								
									<input type="text" name="cust_loc_net" class="input_under_pole" value="<?php echo $fila_table['outsite_cust_tie_net']; ?>" />
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_under_pole" placeholder="Text Here" ><?php echo $fila_table['outsite_text_here']; ?></textarea>
								</div>
								
							
							</div>							
							
					
					</div>
											
						

						
	
	
	</div>
	
	
	</div>
					
</div>
					


<?php } ?>




<?php if($fila['tipo'] == "highway_traffic_pole_plan" ){ 

	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					HIGHWAY TRAFFIC PLANS NEEDED
				</div>				
			</div>		
		
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_pole" class="input_highway_pole" value="<?php echo $fila_table['other_highway_task_request_number']; ?>" />
									
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED  </div>
									
										<input type="text" name="date_task_requested_pole" class="input_highway_pole" value="<?php echo $fila_table['other_highway_date_task']; ?>" />
										
									
									</div>
									<div class="container_div_select_under_pole" style="margin-top:10px;" >
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE  </div>
									
										<input type="text" name="expected_return_date_pole" class="input_highway_pole" value="<?php echo $fila_table['other_highway_expected_date']; ?>" />
									</div>
									
								
								</div>	
								
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > PROPOSED TMP LENGTH </div>
									
										<input type="text" name="proposed_tmp_length_pole" class="input_highway_pole" value="<?php echo $fila_table['other_highway_proposed_tmp']; ?>"  />
									
									
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="highway_proposed_pole" id="highway_proposed_pole" value="highway" <?php if( $fila_table['other_highway_traffic']=="highway" ){ ?> checked <?php } ?> />
										<label for="highway_proposed_pole"> Highway Traffic  Management proposed plans </label>
										
									
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="highway_proposed_pole" id="engineering_plans_pole" value="engineering" <?php if( $fila_table['other_highway_traffic']=="engineering" ){ ?> checked <?php } ?> />
										<label for="engineering_plans_pole"> Engineering Stamped Plans needed </label>
										
									
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="text" name="from_proposed_pole" class="input_highway_pole" placeholder="From" value="<?php echo $fila_table['other_highway_from']; ?>" />
										<input type="text" name="to_proposed_pole" class="input_highway_pole" placeholder="To" value="<?php echo $fila_table['other_highway_to']; ?>" />
										
									
									</div>
									
								
								</div>	
							
								<div class="container_option_under_pole" style="" > 
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<textarea placeholder="SCOPE WORK" name="scope_work_proposed_pole" ><?php echo $fila_table['other_highway_scope']; ?></textarea>
										
									
									</div>							
								</div>		
		
		
	
		</div>
	</div>
</div>	

<?php } ?>




<?php if($fila['tipo'] == "railroad_crossing_pole_plans" ){ 

	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					RAILROAD CROSSING PLANS NEEDED
				</div>				
			</div>		
		
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_pole_railroad" class="input_highway_pole" value="<?php echo $fila_table['other_railroad_task_request_number']; ?>" />
									
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED  </div>
									
										<input type="text" name="date_task_requested_pole_railroad" class="input_highway_pole" value="<?php echo $fila_table['other_railroad_date_task']; ?>" />
										
							
									</div>
									
								
								</div>	
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE  </div>									
										<input type="text" name="expected_return_date_pole_railroad" class="input_highway_pole" value="<?php echo $fila_table['other_railroad_expected_date']; ?>" />
										
									</div>								
								</div>	
								
								<div class="container_option_under_pole" > 
								
								
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
<input type="radio" name="highway_proposed_pole_railroad" id="highway_proposed_pole_railroad" value="highway" <?php if($fila_table['other_railroad_crossing_proposed']=="highway" ){ ?> checked <?php } ?> />
										<label for="highway_proposed_pole_railroad"> Railroad crossing proposed plans </label>
										
									
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="highway_proposed_pole_railroad" id="engineering_plans_pole_railroad" value="engineering" <?php if($fila_table['other_railroad_crossing_proposed']=="engineering" ){ ?> checked <?php } ?> />
										<label for="engineering_plans_pole_railroad"> Engineering Stamped Plans  </label>
										
									
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="text" name="from_proposed_pole_railroad" class="input_highway_pole" placeholder="From" value="<?php echo $fila_table['other_railroad_from']; ?>" />
										<input type="text" name="to_proposed_pole_railroad" class="input_highway_pole" placeholder="To"  value="<?php echo $fila_table['other_railroad_to']; ?>" />
										
									
									</div>
									
								
								</div>	
							
								<div class="container_option_under_pole" > 
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<textarea placeholder="SCOPE WORK" name="scope_work_proposed_pole_railroad" ><?php echo $fila_table['other_railroad_scope']; ?></textarea>
										
									
									</div>							
								</div>
								
		
		
	
		</div>
	</div>
</div>	

<?php } ?>


<?php if($fila['tipo'] == "electric_request_utility_plans" ){ 

	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					ELECTRIC PLAN REQUEST
				</div>				
			</div>		
		
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_utility" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_utility']; ?>"  />
								
										
									</div>
									
								
								</div>	
								
					
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > Utility Company: </div>
									<div class="select_under_pole">
										<select name="company_utility">
											
										<?php 
											$consulta_company="SELECT * FROM company WHERE id='".$fila_table['company_utility']."' AND estado='1' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
										<?php } ?>												
										</select>
									</div>	
									
									<div class="text_div_select_under_pole" > Path Length </div>
								
									<input type="text" name="path_length_utility" class="input_path_utility" value="<?php echo $fila_table['path_length_utility']; ?>" />		
									<!--
									<div class="div_check_utility" style="margin-top:10px;margin-left:20px;margin-right:0px;" >
										
<input type="checkbox" name="check_attached_map_electric_utility" id="check_attached_map_electric_utility" value="si" <?php if($fila_table['see_attached_map_utility'] =="si" ){ echo "checked"; } ?> />
										<div class="text_div_check_utility" > <label for="check_attached_map_electric_utility" > See attached map </label>  </div>
									</div>											
									-->	
									
								
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_utility" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_electric_utility']; ?>"  />
									<input type="text" placeholder="TO" name="to_utility" class="input_from_utility" value="<?php echo $fila_table['to_electric_utility']; ?>" />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_utility" placeholder="SCOPE WORK" ><?php echo $fila_table['scope_word_electric_utility']; ?></textarea>
								</div>
								
							
							</div>	
		
	
		</div>
	</div>
</div>	

<?php } ?>



<?php if($fila['tipo'] == "telephone_request_utility_plans" ){ 

	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					TELEPHONE PLAN REQUEST
				</div>				
			</div>		
		
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_telephone_utility" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_telephone'];  ?>" />
										
									</div>
									
								
								</div>	
								
					
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > Utility Company: </div>
									<div class="select_under_pole">
										<select name="company_telephone_utility">
											
										<?php 
											$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_utility_telephone']."' AND  estado='3' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
										<?php } ?>												
										</select>
									</div>	
									
									<div class="text_div_select_under_pole" > Path Length </div>
								
									<input type="text" name="path_length_telephone_utility" class="input_path_utility" value="<?php echo $fila_table['path_length_utility_telephone']; ?>" />	
									
																
										
									
								
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_telephone_utility" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_utility_telephone']; ?>"  />
									<input type="text" placeholder="TO" name="to_telephone_utility" class="input_from_utility" value="<?php echo $fila_table['to_utility_telephone']; ?>"  />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_telephone_utility" placeholder="SCOPE WORK" ><?php echo $fila_table['scope_work_telephone']; ?></textarea>
								</div>
								
							
							</div>							
								
	
		</div>
	</div>
</div>	

<?php } ?>



<?php if($fila['tipo'] == "private_request_utility_plans" ){ 

	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					PRIVATE P. PLAN REQUEST
				</div>				
			</div>	
			
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_private_plan_utility" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_private']; ?>" />
									
										
									</div>
									
								
								</div>	
								
					
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > Utility Company: </div>
									<div class="select_under_pole">
										<select name="company_private_plan_utility">
											
										<?php 
											$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_utility_private']."' AND estado='3' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
										<?php } ?>												
										</select>
									</div>	
									
									<div class="text_div_select_under_pole" > Path Length </div>
								
									<input type="text" name="path_length_private_plan_utility" class="input_path_utility" value="<?php echo $fila_table['path_length_private']; ?>" />							
								
																	
																
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_private_plan_utility" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_utility_private']; ?>"  />
									<input type="text" placeholder="TO" name="to_private_plan_utility" class="input_from_utility" value="<?php echo $fila_table['to_utility_private']; ?>"  />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_private_plan_utility" placeholder="SCOPE WORK" ><?php echo $fila_table['scope_work_private']; ?></textarea>
								</div>
								
							
							</div>				
			
			

	
		</div>
	</div>
</div>	

<?php } ?>


<?php if($fila['tipo'] == "all_request_utility_plans" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					ALL UTILITY PLAN REQUEST
				</div>				
			</div>	
			
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_all_plan_utility" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_all_utility']; ?>" />
									
										
									</div>
									
								
								</div>	
								
					
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > Utility Company: </div>
									<div class="select_under_pole">
										<select name="company_all_plan_utility">
										
										<?php 
											$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_all_utility']."' AND estado='3' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
										<?php } ?>												
										</select>
									</div>	
									
									<div class="text_div_select_under_pole" > Path Length </div>
								
									<input type="text" name="path_length_all_plan_utility" class="input_path_utility" value="<?php echo $fila_table['path_lenth_all_utility']; ?>" />		
									
								
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_all_plan_utility" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_all_utility']; ?>"  />
									<input type="text" placeholder="TO" name="to_all_plan_utility" class="input_from_utility" value="<?php echo $fila_table['to_all_utility']; ?>"  />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_all_plan_utility" placeholder="SCOPE WORK" ><?php echo $fila_table['scope_work_all_utility']; ?></textarea>
								</div>
								
							
							</div>				
			

	
		</div>
	</div>
</div>	

<?php } ?>

<?php if($fila['tipo'] == "find_request_utility_plans" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					FIND A POSSIBLE PATH REQUEST
				</div>				
			</div>	
			
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_find_plan_utility" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_find_utility']; ?>" />
																
									</div>
									
								
								</div>	
								
					
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
								
									
									<div class="text_div_select_under_pole" > Path Length </div>
								
									<input type="text" name="path_length_find_plan_utility" class="input_path_utility" value="<?php echo $fila_table['path_lenth_find_utility']; ?>" />							
								
								</div>
								
								<div class="container_div_select_under_pole" style="margin-top:20px;" >
								
								
									
									<div class="div_check_utility" >
										
										<input type="checkbox" name="check_find_aerial_path" id="check_find_aerial_path" value="si" <?php if( $fila_table['find_aerial_utility']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="check_find_aerial_path" > Find aerial path </label>  </div>
									</div>														
									<div class="div_check_utility" >
										
										<input type="checkbox" name="check_find_underground_path" id="check_find_underground_path" value="si" <?php if( $fila_table['find_underground_utility']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="check_find_underground_path" > Find underground path </label>  </div>
									</div>													
									<div class="div_check_utility" >
										
										<input type="checkbox" name="check_elec_path" id="check_elec_path" value="si" <?php if( $fila_table['elec_find_utility']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="check_elec_path" > Elec </label>  </div>
									</div>												
									<div class="div_check_utility" >
										
										<input type="checkbox" name="check_tel_path" id="check_tel_path" value="si" <?php if( $fila_table['tel_find_utility']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="check_tel_path" > Tel </label>  </div>
									</div>										
									<div class="div_check_utility" >
										
										<input type="checkbox" name="check_private_path" id="check_private_path" value="si"  <?php if( $fila_table['private_find_utility']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="check_private_path" > Private </label>  </div>
									</div>									
									<div class="div_check_utility" >
										
										<input type="checkbox" name="check_attached_path" id="check_attached_path" value="si"  <?php if( $fila_table['see_attached_redline_map_utility']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="check_attached_path" > See attached redline map </label>  </div>
									</div>						
								
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_find_plan_utility" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_find_utility']; ?>"  />
									<input type="text" placeholder="TO" name="to_find_plan_utility" class="input_from_utility" value="<?php echo $fila_table['to_find_utility']; ?>"  />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_find_plan_utility" placeholder="SCOPE WORK" ><?php echo $fila_table['scope_work_find_utility']; ?></textarea>
								</div>
								
							
							</div>							
							
	
		</div>
	</div>
</div>	

<?php } ?>






<?php if($fila['tipo'] == "manhole_plan" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					MANHOLE PROP
				</div>				
			</div>	

							<div class="content_option_pole" >
								
								
								<div class="div_option_pole" > 
									
									<div class="text_option_pole" > MANHOLE LOOK OUT/FIELD SURVEY </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_look_out_field_manhole" id="si_look_out_field_manhole" value="si" <?php if(  $fila_table['look_survey_manhole']=="si" ){  ?> checked <?php } ?> />
											<label for="si_look_out_field_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_look_out_field_manhole" id="no_look_out_field_manhole" value="no" <?php if(  $fila_table['look_survey_manhole']=="no" ){  ?> checked <?php } ?>  />
											<label for="no_look_out_field_manhole">No</label>
										</div>
										
									</div>
									
								</div>
								
								<div class="div_option_pole" > 
									
									<div class="text_option_pole" > FINAL MANHOLE & BUTTERFLY  AS-BUILT PLANS </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_final_butterfly_manhole" id="si_final_butterfly_manhole" value="si" <?php if(  $fila_table['final_butterfly_manhole']=="si" ){  ?> checked <?php } ?> />
											<label for="si_final_butterfly_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_final_butterfly_manhole" id="no_final_butterfly_manhole" value="no" <?php if(  $fila_table['final_butterfly_manhole']=="no" ){  ?> checked <?php } ?> />
											<label for="no_final_butterfly_manhole">No</label>
										</div>
										
									</div>
									
								</div>
								
								<div class="div_option_pole" > 
									
									<div class="text_option_pole" > PRELIMINARY/PROPOSED MANHOLE PLANS </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_preliminary_proposed_manhole" id="si_preliminary_proposed_manhole" value="si" <?php if(  $fila_table['preliminary_proposed_manhole']=="si" ){  ?> checked <?php } ?>  />
											<label for="si_preliminary_proposed_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_preliminary_proposed_manhole" id="no_preliminary_proposed_manhole" value="no" <?php if(  $fila_table['preliminary_proposed_manhole']=="no" ){  ?> checked <?php } ?> />
											<label for="no_preliminary_proposed_manhole">No</label>
										</div>
										
									</div>
									
								</div>
								
								<div class="div_option_pole" > 
									
									<div class="text_option_pole" > GIS AS-BUILT FILE TASK </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_gis_as_built_file_manhole" id="si_gis_as_built_file_manhole" value="si" <?php if(  $fila_table['gis_as_built_manhole']=="si" ){  ?> checked <?php } ?> />
											<label for="si_gis_as_built_file_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_gis_as_built_file_manhole" id="no_gis_as_built_file_manhole" value="no" <?php if(  $fila_table['gis_as_built_manhole']=="no" ){  ?> checked <?php } ?> />
											<label for="no_gis_as_built_file_manhole">No</label>
										</div>
										
									</div>
									
								</div>
								
								<div class="div_option_pole" > 
									
									<div class="text_option_pole" > MANHOLE BUTTERFLY PROPOSED DETAILS </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_butterfly_details_manhole" id="si_butterfly_details_manhole" value="si" <?php if(  $fila_table['butterfly_proposed_manhole']=="si" ){  ?> checked <?php } ?> />
											<label for="si_butterfly_details_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_butterfly_details_manhole" id="no_butterfly_details_manhole" value="no" <?php if(  $fila_table['butterfly_proposed_manhole']=="no" ){  ?> checked <?php } ?> />
											<label for="no_butterfly_details_manhole">No</label>
										</div>
										
									</div>
									
								</div>
								
								<div class="div_option_pole" > 
									
									<div class="text_option_pole" > OUTSIDE UTILITY APPLICATION </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_outside_utility_manhole" id="si_outside_utility_manhole" value="si" <?php if(  $fila_table['outsite_utility_application_manhole']=="si" ){  ?> checked <?php } ?> />
											<label for="si_outside_utility_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_outside_utility_manhole" id="no_outside_utility_manhole" value="no" <?php if(  $fila_table['outsite_utility_application_manhole']=="no" ){  ?> checked <?php } ?> />
											<label for="no_outside_utility_manhole">No</label>
										</div>
										
									</div>
									
								</div>
								
								<div class="div_option_pole" > 
									
									<div class="text_option_pole" > MANHOLE BUTTERFLY AS-BUILT DETAILS </div>
									<div class="container_radio_option_pole">
										<div class="margin_radio_pole" >
											<input type="radio" name="si_butterfly_as_build_details_manhole" id="si_butterfly_as_build_details_manhole" value="si" <?php if(  $fila_table['butterfly_as_built_manhole']=="si" ){  ?> checked <?php } ?> />
											<label for="si_butterfly_as_build_details_manhole" > Yes</label>
										</div>
										
										<div class="margin_radio_pole">
											<input type="radio" name="si_butterfly_as_build_details_manhole" id="no_butterfly_as_build_details_manhol" value="no" <?php if(  $fila_table['butterfly_as_built_manhole']=="no" ){  ?> checked <?php } ?> />
											<label for="no_butterfly_as_build_details_manhol">No</label>
										</div>
										
									</div>
									
								</div>
								
								
								
							</div>			
			
			
			
	
		</div>
	</div>
</div>	

<?php } ?>




<?php if($fila['tipo'] == "electric_proposed_manhole_plan" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					ELECTRIC PROPOSED MANHOLE PLANS
				</div>				
			</div>	

								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_manhole" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_electric_manhole']; ?>" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_manhole" class="input_highway_pole" value="<?php echo $fila_table['expected_date_electric_manhole']; ?>" />
										
								
									</div>
									<div class="container_div_select_under_pole" style="margin-top:5px;"  >								
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_manhole" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_electric_manhole']; ?>" />
									
									
										
									</div>
									
									
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > MH OPTION </div>
									
										<input type="text" name="mh_option_manhole" class="input_highway_pole" style="margin-left:33px;" value="<?php echo $fila_table['mh_option_electric_manhole']; ?>" />
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > Utility Company: </div>
										<div class="select_under_pole" style="margin-left:14px;width:151px;" >
											<select name="company_manhole">
												
											<?php 
												$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_electric_manhole']."' AND estado='3' ";
												$resultado_company= mysqli_query($conexion,$consulta_company);
												while($fila_company= mysqli_fetch_array($resultado_company)){
											?>										
												<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
											<?php } ?>												
											</select>
										</div>	
																			
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PROP. FIBER </div>
									
										<input type="text" name="prop_fiber_manhole" class="input_highway_pole" style="margin-left:25px;" value="<?php echo $fila_table['prop_fiber_electric_manhole']; ?>" />
									
										
									</div>
										
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PATH LENGTH </div>
									
										<input type="text" name="path_length_manhole" class="input_highway_pole" style="margin-left:17px;" value="<?php echo $fila_table['path_length_electric_manhole']; ?>" />
									
										
									</div>
																		
									
									
								
								</div>	
								
					
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_manhole" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_electric_manhole']; ?>"   />
									<input type="text" placeholder="TO" name="to_manhole" class="input_from_utility" value="<?php echo $fila_table['to_electric_manhole']; ?>" />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_manhole" placeholder="SCOPE WORK" ><?php echo $fila_table['scope_work_electric_manhole']; ?></textarea>
								</div>
								
							
							</div>							
										
			

	
		</div>
	</div>
</div>	

<?php } ?>



<?php if($fila['tipo'] == "telephone_proposed_manhole_plan" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					TELEPHONE PROPOSED MANHOLE PLANS
				</div>				
			</div>	

								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_telephone_manhole" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_telephone_manhole']; ?>" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_telephone_manhole" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_telephone_manhole']; ?>" />
																	
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_telephone_manhole" class="input_highway_pole" value="<?php echo $fila_table['expected_date_telephone_manhole']; ?>" />
																			
									</div>
									
									
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > MH OPTION </div>
									
										<input type="text" name="mh_option_telephone_manhole" class="input_highway_pole" style="margin-left:33px;" value="<?php echo $fila_table['mh_option_telephone_manhole']; ?>" />
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > Utility Company: </div>
										<div class="select_under_pole" style="margin-left:14px;width:151px;" >
											<select name="company_telephone_manhole">
											<?php 
												$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_telephone_manhole']."' AND estado='3' ";
												$resultado_company= mysqli_query($conexion,$consulta_company);
												while($fila_company= mysqli_fetch_array($resultado_company)){
											?>										
												<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
											<?php } ?>												
											</select>
										</div>	
																			
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PROP. FIBER </div>
									
										<input type="text" name="prop_fiber_telephone_manhole" class="input_highway_pole" style="margin-left:25px;" value="<?php echo $fila_table['prop_fiber_telephone_manhole']; ?>" />
									
										
									</div>
										
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PATH LENGTH </div>
									
										<input type="text" name="path_length_telephone_manhole" class="input_highway_pole" style="margin-left:17px;" value="<?php echo $fila_table['path_length_telephone_manhole']; ?>"  />
									
										
									</div>
																		
									
									
								
								</div>	
								
					
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_telephone_manhole" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_telephone_manhole']; ?>"  />
									<input type="text" placeholder="TO" name="to_telephone_manhole" class="input_from_utility" value="<?php echo $fila_table['to_telephone_manhole']; ?>" />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_telephone_manhole" placeholder="SCOPE WORK" ><?php echo $fila_table['scope_work_telephone_manhole']; ?></textarea>
								</div>
								
							
							</div>							
										
			
			

	
		</div>
	</div>
</div>	

<?php } ?>


<?php if($fila['tipo'] == "private_proposed_manhole_plan" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					PRIVATE PROPOSED MANHOLE PLANS
				</div>				
			</div>	

								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_private_manhole" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_private_manhole']; ?>" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_private_manhole" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_private_manhole']; ?>" />
										
										
									</div>
									<div class="container_div_select_under_pole" >							
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_private_manhole" class="input_highway_pole" value="<?php echo $fila_table['expected_date_private_manhole']; ?>" />
									
										
									</div>
									
									
									
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > MH OPTION </div>
									
										<input type="text" name="mh_option_private_manhole" class="input_highway_pole" style="margin-left:33px;" value="<?php echo $fila_table['mh_option_private_manhole']; ?>" />
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > Utility Company: </div>
										<div class="select_under_pole" style="margin-left:14px;width:151px;" >
											<select name="company_private_manhole">
											<?php 
												$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_private_manhole']."' AND estado='3' ";
												$resultado_company= mysqli_query($conexion,$consulta_company);
												while($fila_company= mysqli_fetch_array($resultado_company)){
											?>										
												<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
											<?php } ?>												
											</select>
										</div>	
																			
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PROP. FIBER </div>
									
										<input type="text" name="prop_fiber_private_manhole" class="input_highway_pole" style="margin-left:25px;" value="<?php echo $fila_table['prop_fiber_private_manhole']; ?>" />
									
										
									</div>
										
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PATH LENGTH </div>
									
										<input type="text" name="path_length_private_manhole" class="input_highway_pole" style="margin-left:17px;" value="<?php echo $fila_table['path_length_private_manhole']; ?>" />
									
										
									</div>
																		
									
									
								
								</div>	
								
					
							<div class="container_option_under_pole" style="padding:0px;" > 
							
								<div class="container_div_select_under_pole" >
								
									<input type="text" placeholder="FROM" name="form_private_manhole" class="input_from_utility"  style="width:46.5% !important;" value="<?php echo $fila_table['from_private_manhole']; ?>"  />
									<input type="text" placeholder="TO" name="to_private_manhole" class="input_from_utility" value="<?php echo $fila_table['to_private_manhole']; ?>" />
									
								</div>
								
							
							</div>	
							
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_private_manhole" placeholder="SCOPE WORK" ><?php echo $fila_table['scope_work_private_manhole']; ?></textarea>
								</div>
								
							
							</div>							
										
			
			

		</div>
	</div>
</div>	

<?php } ?>





<?php if($fila['tipo'] == "outsite_utility_manhole_plan" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					OUTSIDE UTILITY APPLICATION
				</div>				
			</div>	

								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_outside_manhole" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_outsite_manhole']; ?>" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_outside_manhole" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_outsite_manhole']; ?>" />
												
									</div>
									<div class="container_div_select_under_pole" style="margin-top:5px;" >

										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_outside_manhole" class="input_highway_pole" value="<?php echo $fila_table['expected_date_outsite_manhole']; ?>" />
									
																			
									</div>
									
									
									
									
									
									<div class="container_div_select_under_pole" >
									
								<div class="div_select_survey">
									
									<select name="company_outside_manhole" >
										<?php 
											$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_outsite_manhole']."' AND estado='3' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
										<?php } ?>										
									</select>
								
								</div>
								<div class="div_select_survey">
									
									<select name="contact_outside_manhole" >
										<?php 
											$consulta_company="SELECT * FROM contact WHERE id='".$fila_table['contact_outsite_manhole']."' AND estado='1' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>
										<?php } ?>										
									</select>
								
								</div>										
									
									
										
									
										
									</div>
								
									
																		
									
									
								
								</div>
								
								
							<div class="container_div_click_manhole">
								<div class="title_content_option_inside " > 
									<div class="div_title_content_option_inside"  >
										BREAKOUT APPLICATION TASK
										
										<div class="div_option_radio_inside" >
											<input type="radio" name="si_breakout_manhole" id="si_breakout_manhole" value="si" class="radio_click" <?php if( $fila_table['breakout_application_task_manhole']=="si" ){ ?> checked <?php } ?> />
											<label for="si_breakout_manhole" > Yes </label>
											
											<input type="radio" name="si_breakout_manhole" id="no_breakout_manhole" value="no" class="radio_click" <?php if( $fila_table['breakout_application_task_manhole']=="no" ){ ?> checked <?php } ?> />
											<label for="no_breakout_manhole" > No </label>
										</div>
																
									
									</div>
									
								</div>
							</div>
																
								
			

		</div>
	</div>
</div>	

<?php } ?>


<?php if($fila['tipo'] == "underground_outsite_manhole_plan" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					UNDERGROUND APPLICATION TASK
				</div>				
			</div>	

										<div class="container_option_under_pole" > 
										
											<div class="container_div_select_under_pole" >
											
												<div class="text_div_select_under_pole" > License Application Needed: </div>
												<div class="div_select_survey" style="margin-top:0px;" >
													
													<select name="company_underground_manhole" >
														<?php 
															$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_underground_manhole']."' AND estado='3' ";
															$resultado_company= mysqli_query($conexion,$consulta_company);
															while($fila_company= mysqli_fetch_array($resultado_company)){
														?>										
															<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
														<?php } ?>										
													</select>
												
												</div>
												<div class="div_select_survey" style="margin-top:0px;" >
													
													<select name="contact_underground_manhole" >
														<?php 
															$consulta_company="SELECT * FROM contact WHERE id='".$fila_table['contact_underground_manhole']."' AND estado='1' ";
															$resultado_company= mysqli_query($conexion,$consulta_company);
															while($fila_company= mysqli_fetch_array($resultado_company)){
														?>										
															<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>
														<?php } ?>										
													</select>
												
												</div>																							
												
											
												
											</div>
										
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" style="margin-top:18px; " > CUST. CABLE COUNT </div>
											
												<input type="text" name="cust_cable_count_manhole" class="cust_cable_count_manhole" style="margin-left:26px; width:200px !important; height:37px !important; " value="<?php echo $fila_table['cust_cable_count_underground_manhole']; ?>" />
											
												
											</div>
										
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" style="margin-top:18px; " > CUST. TIE LOC TO NET </div>
											
												<input type="text" name="cust_tie_loc_to_net_manhole" class="cust_tie_loc_to_net_manhole" style="margin-left:18px; width:200px !important; height:37px !important; " value="<?php echo $fila_table['cust_tie_loc_underground_manhole']; ?>" />
												
											</div>
												
											
											<div class="container_div_select_under_pole" style="margin-top:10px;" >
											
												<textarea name="textarea_scope_underground_manhole" placeholder="SCOPE WORK" style="border:1px solid rgb(240,240,240) !important; width: 94% !important; min-width: 94% !important;  max-width: 94% !important; " ><?php echo $fila_table['scope_work_underground_manhole']; ?></textarea>
											</div>
													
											
										
										</div>


		</div>
	</div>
</div>	

<?php } ?>


<?php if($fila['tipo'] == "aerial_outsite_manhole_plan" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					AERIAL APPLICATION TASK
				</div>				
			</div>	

										<div class="container_option_under_pole" > 
										
											<div class="container_div_select_under_pole" >
											
												<div class="text_div_select_under_pole" > License Application Needed: </div>
												<div class="div_select_survey" style="margin-top:0px;" >
													
													<select name="company_aerial_manhole" >
														<?php 
															$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_aerial_manhole']."' AND estado='3' ";
															$resultado_company= mysqli_query($conexion,$consulta_company);
															while($fila_company= mysqli_fetch_array($resultado_company)){
														?>										
															<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
														<?php } ?>										
													</select>
												
												</div>
												<div class="div_select_survey" style="margin-top:0px;" >
													
													<select name="contact_aerial_manhole" >
														<?php 
															$consulta_company="SELECT * FROM contact WHERE id='".$fila_table['contact_aerial_manhole']."' AND estado='1' ";
															$resultado_company= mysqli_query($conexion,$consulta_company);
															while($fila_company= mysqli_fetch_array($resultado_company)){
														?>										
															<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>
														<?php } ?>										
													</select>
												
												</div>																							
												
											
												
											</div>
										
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" style="margin-top:18px; " > CUST. CABLE COUNT </div>
											
												<input type="text" name="cust_cable_count_aerial_manhole" class="cust_cable_count_manhole" style="margin-left:26px; width:200px !important; height:37px !important; " value="<?php echo $fila_table['cust_cable_count_aerial_manhole']; ?>" />
											
												
											</div>
										
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" style="margin-top:18px; " > CUST. TIE LOC TO NET </div>
											
												<input type="text" name="cust_tie_loc_to_net_aerial_manhole" class="cust_tie_loc_to_net_manhole" style="margin-left:18px; width:200px !important; height:37px !important; " value="<?php echo $fila_table['cust_tie_loc_aerial_manhole']; ?>" />
												
											</div>
												
											
											<div class="container_div_select_under_pole" style="margin-top:10px;" >
											
												<textarea name="textarea_scope_aerial_manhole" placeholder="SCOPE WORK" style="border:1px solid rgb(240,240,240) !important; width: 94% !important; min-width: 94% !important;  max-width: 94% !important; " ><?php echo $fila_table['scope_work_aerial_manhole']; ?></textarea>
											</div>
												
											
											
										
										</div>
			
		</div>
	</div>
</div>	

<?php } ?>


<?php if($fila['tipo'] == "civil_plans" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					CIVIL PLAN
				</div>				
			</div>	

					<div class="content_option_pole" style="padding-bottom:0px;" >
						
						<div class="col_izq_option_civil" >
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > CIVIL PROPOSED PLANS & TMP </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_civil_proposed_tmp_civil" id="si_civil_proposed_tmp_civil" value="si" <?php if( $fila_table['proposed_plan_tmp_civil']=="si" ){ ?> checked <?php } ?> />
										<label for="si_civil_proposed_tmp_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_civil_proposed_tmp_civil" id="no_civil_proposed_tmp_civil" value="no" <?php if( $fila_table['proposed_plan_tmp_civil']=="no" ){ ?> checked <?php } ?> />
										<label for="no_civil_proposed_tmp_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > AS-BUILT CIVIL PLAN </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_as_built_civil" id="si_as_built_civil" value="si" <?php if( $fila_table['as_built_plan_civil']=="si" ){ ?> checked <?php } ?>  />
										<label for="si_as_built_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_as_built_civil" id="no_as_built_civil" value="no" <?php if( $fila_table['as_built_plan_civil']=="no" ){ ?> checked <?php } ?> />
										<label for="no_as_built_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > TOTAL STATION </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_total_station_civil" id="si_total_station_civil" value="si" <?php if( $fila_table['total_station_civil']=="si" ){ ?> checked <?php } ?> />
										<label for="si_total_station_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_total_station_civil" id="no_total_station_civil" value="no" <?php if( $fila_table['total_station_civil']=="no" ){ ?> checked <?php } ?> />
										<label for="no_total_station_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > PRINT AB PLANS IN MYLAR PAPER </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_print_milar_paper_civil" id="si_print_milar_paper_civil" value="si" <?php if( $fila_table['print_a_b_mylar_civil']=="si" ){ ?> checked <?php } ?> />
										<label for="si_print_milar_paper_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_print_milar_paper_civil" id="no_print_milar_paper_civil" value="no" <?php if( $fila_table['print_a_b_mylar_civil']=="no" ){ ?> checked <?php } ?> />
										<label for="no_print_milar_paper_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > DELIVER MYLAR AB PLANS </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_deliver_mylar_plans_civil" id="si_deliver_mylar_plans_civil" value="si" <?php if( $fila_table['deliver_mylar_civil']=="si" ){ ?> checked <?php } ?> />
										<label for="si_deliver_mylar_plans_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_deliver_mylar_plans_civil" id="no_deliver_mylar_plans_civil" value="no" <?php if( $fila_table['deliver_mylar_civil']=="no" ){ ?> checked <?php } ?> />
										<label for="no_deliver_mylar_plans_civil">No</label>
									</div>
									
								</div>
								
							</div>
								
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_option_pole" style="margin-top:15px; font-weight:400 !important;" > PROPOSED CIVIL ROUTE LENGTH </div>
								
									<input type="text" name="proposed_route_length_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" value="<?php echo $fila_table['proposed_route_civil']; ?>" />
								
									
								</div>					
							</div>		
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_option_pole" style="margin-top:15px; font-weight:400 !important;" > FROM </div>
								
									<input type="text" name="from_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" value="<?php echo $fila_table['from_civil']; ?>" />
								
									
								</div>					
							</div>		
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_option_pole" style="margin-top:15px;font-weight:400 !important;" > TO </div>
								
									<input type="text" name="to_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" value="<?php echo $fila_table['to_civil']; ?>" />
								
									
								</div>					
							</div>	
							
							<div class="separador_civil" ></div>
							
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
							
								<div class="container_div_select_under_pole" style="margin-left:10px;" >
								
									<textarea name="textarea_scope_proposed_civil" placeholder="SCOPE WORK" > <?php echo $fila_table['scope_work_civil']; ?></textarea>
								</div>							
								
									
								</div>					
							</div>					
													
					
							
							
							
						</div>	

						<div class="col_izq_option_civil" >
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" style="font-weight:400 !important;" > PROPOSED TRENCH DETAIL INFORMATION </div>
						
								
							</div>
							
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_uno_civil" id="check_proposed_uno_civil" value="si" <?php if( $fila_table['check_uno_trench_detail_civil']=="si" ){ ?> checked <?php } ?> />
									<div class="text_div_check_utility" style="margin-left:5px;cursor:pointer;" > <label for="check_proposed_uno_civil" style="cursor:pointer;" > 1-4" </label>  </div>
								</div>	
								
								<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
									<select name="company_proposed_uno_civil">
									<?php 
										$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_uno_trench_detail_civil']."' AND estado='3' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										while($fila_company= mysqli_fetch_array($resultado_company)){
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
									<?php } ?>												
									</select>
								</div>	
																			
								
								
							</div>
							
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_dos_civil" id="check_proposed_dos_civil" value="si" <?php if( $fila_table['check_dos_trench_detail_civil']=="si" ){ ?> checked <?php } ?> />
									<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_dos_civil" style="cursor:pointer;" > 2-4"(1 City shadow) </label>  </div>
								</div>	
								
								<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
									<select name="company_proposed_dos_civil">
									<?php 
										$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_dos_trench_detail_civil']."' AND estado='3' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										while($fila_company= mysqli_fetch_array($resultado_company)){
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
									<?php } ?>												
									</select>
								</div>	
																			
								
								
							</div>
						
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_tres_civil" id="check_proposed_tres_civil" value="si" <?php if( $fila_table['check_tres_trench_detail_civil']=="si" ){ ?> checked <?php } ?> />
									<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_tres_civil" style="cursor:pointer;" > 1-2" </label>  </div>
								</div>	
								
								<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
									<select name="company_proposed_tres_civil">
									<?php 
										$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_tres_trench_detail_civil']."' AND estado='3' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										while($fila_company= mysqli_fetch_array($resultado_company)){
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
									<?php } ?>												
									</select>
								</div>	
																			
								
								
							</div>
						
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_cuatro_civil" id="check_proposed_cuatro_civil" value="si" <?php if( $fila_table['micro_trench_detail_civil']=="si" ){ ?> checked <?php } ?> />
									<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_cuatro_civil" style="cursor:pointer;" > MICRO TRENCH </label>  </div>
								</div>	

								<div class="select_proposed_civil" style="margin-left:0px;margin-right:0px;width:151px;" >
									<select name="company_proposed_cuatro_civil">
									<?php 
										$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_micro_trench_detail_civil']."' AND estado='3' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										while($fila_company= mysqli_fetch_array($resultado_company)){
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
									<?php } ?>												
									</select>
								</div>	
								<input type="text" name="text_micro_trench" class="input_highway_pole" style="margin-left:0px; width:101px !important;float:left !important;height:35px !important;margin-top:5px !important;" value="<?php echo $fila_table['text_micro_trench_detail_civil']; ?>" />																			
								
								
							</div>
						
							<div class="separador_civil" style="margin-top:113px;" ></div>
							
							<div class="div_option_civil width_option_civil"  > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
							
								<div class="container_div_select_under_pole" style="margin-left:10px;" >
								
									<textarea name="textarea_scope_installation_civil" placeholder="INSTALLATION'S NOTES" ><?php echo $fila_table['installations_notes_civil']; ?></textarea>
								</div>							
								
									
								</div>					
							</div>					
															
							
						</div>	


						
					</div>						
						
			
			
			
			

		</div>
	</div>
</div>	

<?php } ?>


<?php if($fila['tipo'] == "permit_request_civil_plans" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					PERMIT REQUEST
				</div>				
			</div>	

								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_telephone_civil" class="input_highway_pole" value="<?php echo $fila_table['task_request_permit_civil']; ?>" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_telephone_civil" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_permit_civil']; ?>" />
																				
									</div>
									
									<div class="container_div_select_under_pole" >
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_telephone_civil" class="input_highway_pole" value="<?php echo $fila_table['expected_return_permit_civil']; ?>" />
									
										
									</div>
							
						
									
								
								</div>	
								
								<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px; width:95%;" >
								
									
									<div class="div_check_utility" >
										
										<input type="checkbox" name="muni_civil" id="muni_civil" value="si" <?php if( $fila_table['muni_permit_civil']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="muni_civil"  > MUNI CIVIL </label>  </div>
									</div>														
									<div class="div_check_utility" >
										
										<input type="checkbox" name="dcr_civil" id="dcr_civil" value="si"  <?php if( $fila_table['dcr_permit_civil']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="dcr_civil" > DCR </label>  </div>
									</div>													
									<div class="div_check_utility" >
										
										<input type="checkbox" name="nh_dot_civil" id="nh_dot_civil" value="si"  <?php if( $fila_table['nh_dot_permit_civil']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="nh_dot_civil" > NH DOT </label>  </div>
									</div>												
									<div class="div_check_utility" >
										
										<input type="checkbox" name="ct_dot" id="ct_dot" value="si" <?php if( $fila_table['ct_dot_permit_civil']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="ct_dot" > CT DOT </label>  </div>
									</div>										
									<div class="div_check_utility" >
										
										<input type="checkbox" name="highway_civil" id="highway_civil" value="si" <?php if( $fila_table['highway_permit_civil']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="highway_civil" > HIGHWAY </label>  </div>
									</div>									
									<div class="div_check_utility" >
										
										<input type="checkbox" name="mass_dot_civil" id="mass_dot_civil" value="si" <?php if( $fila_table['mass_dot_permit_civil']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="mass_dot_civil" > MASS DOT </label>  </div>
									</div>								
													
								
								</div>
										
								<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px;margin-bottom:20px; width:95%;" >
								
									
													
									<div class="div_check_utility" >
										
										<input type="checkbox" name="me_dot_civil" id="me_dot_civil" value="si" <?php if( $fila_table['me_dot_permit_civil']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="me_dot_civil" > ME DOT </label>  </div>
									</div>						
									<div class="div_check_utility" style="margin-left:15px;" >
										
										<input type="checkbox" name="ny_dot_civil" id="ny_dot_civil" value="si"  <?php if( $fila_table['ny_dot_permit_civil']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="ny_dot_civil" > NY DOT </label>  </div>
									</div>			
									<div class="div_check_utility" >
										
										<input type="checkbox" name="railroad_civil" id="railroad_civil" value="si"  <?php if( $fila_table['railroad_permit_civil']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="railroad_civil" > RAILROAD </label>  </div>
									</div>		
									<div class="div_check_utility" >
										
										<input type="checkbox" name="ri_dot_civil" id="ri_dot_civil" value="si"  <?php if( $fila_table['ri_dot_permit_civil']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="ri_dot_civil" > RI DOT </label>  </div>
									</div>		
									<div class="div_check_utility" >
										
										<input type="checkbox" name="vi_dot_civil" id="vi_dot_civil" value="si"  <?php if( $fila_table['vi_dot_permit_civil']=="si" ){ ?> checked <?php } ?> />
										<div class="text_div_check_utility" > <label for="vi_dot_civil" > VI DOT </label>  </div>
									</div>						
								
								</div>
													
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_permit_civil" placeholder="SCOPE WORK" ><?php echo $fila_table['scope_work_permit_civil']; ?></textarea>
								</div>
								
							
							</div>	
							<div class="separador_civil"  ></div>
							<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px;margin-bottom:20px; width:95%;" >
							
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_div_select_under_pole" > ASSIGNED COMPANY: </div>
									<div class="select_under_pole" style="margin-left:14px;width:151px;" >
										<select name="assigned_company_civil_permit_request_civil">
										<?php 
											$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['assigned_company_permit_civil']."' AND estado='3' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
										<?php } ?>												
										</select>
									</div>					
																	
								</div>
								
								
								
							</div>
									

							
							
			
			
			

		</div>
	</div>
</div>	

<?php } ?>


<?php if($fila['tipo'] == "mwra_request_civil_plans" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					MWRA CIVIL PLANS TASK NEEDED
				</div>				
			</div>	

								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_mwra_plans_civil" class="input_highway_pole" value="<?php echo $fila_table['task_request_mwra_civil']; ?>" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_mwra_plans_civil" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_mwra_civil']; ?>" />
										
									
									</div>
									<div class="container_div_select_under_pole" >
										
										<div class="text_div_select_under_pole" style="margin-top:23px;" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_mwra_plans_civil" class="input_highway_pole" style="margin-top:10px !important ;" value="<?php echo $fila_table['expected_return_mwra_civil']; ?>"   />
										
										<div class="text_div_select_under_pole" style="margin-top:23px;" > PROPOSED LENGTH </div>
									
										<input type="text" name="proposed_length_mwra_plans_civil" class="input_highway_pole" style="margin-top:10px !important ;" value="<?php echo $fila_table['proposed_length_mwra_civil']; ?>" />
									
									
									</div>
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="existing_utility_file_civil" id="existing_utility_file_civil" value="highway" <?php if( $fila_table['existing_profile_mwra_civil']=="highway" ){ ?> checked <?php } ?>  />
										<label for="existing_utility_file_civil">EXISTING UTILITY PROFILE </label>
										
									
									</div>	
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="existing_utility_file_civil" id="engineering_stamped_civil" value="engineering" <?php if( $fila_table['existing_profile_mwra_civil']=="engineering" ){ ?> checked <?php } ?> />
										<label for="engineering_stamped_civil"> ENGINEERING STAMPED PLANS NEEDED </label>
										
									
									</div>						
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > FROM </div>
									
										<input type="text" name="from_mwra_civil" class="input_highway_pole" value="<?php echo $fila_table['from_mwra_civil']; ?>" />
										
									</div>	
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > TO </div>
									
										<input type="text" name="to_mwra_civil" class="input_highway_pole"  value="<?php echo $fila_table['to_mwra_civil']; ?>" />
										
									</div>						
									
								
								</div>	
								
											
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_mrwa_civil" placeholder="SCOPE WORK" ><?php echo $fila_table['scope_work_mwra_civil']; ?></textarea>
								</div>
								
							
							</div>	
							
								
			

		</div>
	</div>
</div>	

<?php } ?>


<?php if($fila['tipo'] == "railroad_request_civil_plans" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					RAILROAD CROSSING PLANS TASK NEEDED
				</div>				
			</div>	

								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_railroad_plans_civil" class="input_highway_pole" value="<?php echo $fila_table['task_request_railroad_civil']; ?>" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_railroad_plans_civil" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_railroad_civil']; ?>"  />

									
									</div>
									<div class="container_div_select_under_pole" >
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_railroad_plans_civil" class="input_highway_pole" value="<?php echo $fila_table['expected_return_railroad_civil']; ?>"  />
									
										
									</div>
							
							
							
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="railroad_plans_radio_civil" id="railroad_plans_radio_civil" value="highway" <?php if( $fila_table['crossing_proposed_railroad_civil']=="highway" ){ ?> checked <?php } ?> />
										<label for="railroad_plans_radio_civil">RAILROAD CROSSING PROPOSED PLANS </label>
										
									
									</div>	
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="railroad_plans_radio_civil" id="engineering_stamped_railroad_civil" value="engineering"  <?php if( $fila_table['crossing_proposed_railroad_civil']=="engineering" ){ ?> checked <?php } ?> />
										<label for="engineering_stamped_railroad_civil"> ENGINEERING STAMPED PLANS NEEDED </label>
										
									
									</div>						
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > FROM </div>
									
										<input type="text" name="from_railroad_civil" class="input_highway_pole" value="<?php echo $fila_table['from_railroad_civil']; ?>" />
										
									</div>	
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > TO </div>
									
										<input type="text" name="to_railroad_civil" class="input_highway_pole" value="<?php echo $fila_table['to_railroad_civil']; ?>"  />
										
									</div>						
									
								
								</div>	
								
											
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_railroad_civil" placeholder="SCOPE WORK" ><?php echo $fila_table['scope_work_railroad_civil']; ?></textarea>
								</div>
								
							
							</div>	
							

			

		</div>
	</div>
</div>	

<?php } ?>



<?php if($fila['tipo'] == "highway_request_civil_plans" ){ 
	
?>

<div class="container-general-info">
	<div class="container-isp" >
		<div class="content_option_modal" >

			<div class="title_content_option_inside" > 
				<div class="div_title_content_option_inside"  >
					HIGHWAY TRAFFIC MANAGEMENT PLANS TASK NEEDED
				</div>				
			</div>	

								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_highway_traffic_civil" class="input_highway_pole" value="<?php echo $fila_table['task_request_highway_civil']; ?>" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_highway_traffic_civil" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_highway_civil']; ?>" />
																			
									</div>
									<div class="container_div_select_under_pole" style="margin-top:10px;" >										
										<div class="text_div_select_under_pole"  > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_highway_traffic_civil" class="input_highway_pole" value="<?php echo $fila_table['expected_return_highway_civil']; ?>" />									
										
									</div>
									
									
									
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="highway_plans_radio_civil" id="highway_plans_radio_civil" value="highway" <?php if( $fila_table['traffic_proposed_highway_civil']=="highway" ){ ?> checked <?php } ?> />
										<label for="highway_plans_radio_civil">HIGHWAY TRAFFIC MANAGEMENT PROPOSED PLANS </label>
										
									
									</div>	
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="highway_plans_radio_civil" id="engineering_stamped_highway_traffic_civil" value="engineering" <?php if( $fila_table['traffic_proposed_highway_civil']=="engineering" ){ ?> checked <?php } ?> />
										<label for="engineering_stamped_highway_traffic_civil"> ENGINEERING STAMPED PLANS NEEDED </label>
										
									
									</div>						
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > FROM </div>
									
										<input type="text" name="from_highway_traffic_civil" class="input_highway_pole" value="<?php echo $fila_table['from_highway_civil']; ?>" />
										
									</div>	
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > TO </div>
									
										<input type="text" name="to_highway_traffic_civil" class="input_highway_pole" value="<?php echo $fila_table['to_highway_civil']; ?>" />
										
									</div>						
									
								
								</div>	
								
											
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_highway_traffic_civil" placeholder="SCOPE WORK" ><?php echo $fila_table['scope_work_highway_civil']; ?></textarea>
								</div>
								
							
							</div>	
							
										

		</div>
	</div>
</div>	

<?php } ?>





<div class="div_line">
	<form name="form_cotizacion" id="form_cotizacion" method="POST" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/procesa_cotizacion.php" enctype="multipart/form-data"	>
		<div class="container_archive_inside div_file_inside vertical_div" >

		<div class="container_archive_inside div_file_inside"><strong>ENGINERING PLAN QUOTE</strong><br /><br />
			<input type="text" name="text_plan_quote" placeholder="5000" /> </div>
				<div class="div_file_inside" ><br /><br />
					<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside">  PDF QUOTE </div> </div>
					<input type="file" name="file_plan_quote" />
				</div>
			</div>
			<div class="container_archive_inside div_file_inside vertical_div" >
		<div class="container_archive_inside div_file_inside"><strong>ENGINERING PLAN INVOICE</strong><br /><br />
		<input type="text" name="text_plan_invoice" placeholder="TOTAL QUOTE" /> </div>
			<div class="div_file_inside" ><br /><br />
				<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside">  PDF INVOICE </div> </div>
				<input type="file" name="file_plan_invoice" />
			</div>
		</div><br /><br />
			<input type="hidden" name="id_request" value="<?php echo $fila['id']; ?>" />
			<div class="container_archive_inside div_file_inside"><input class="div_file_inside div_buttom" type="submit" name="send" value="SAVE" /></div>
	</form>
		
</div>
    <br />
</div>

<script>
$(document).ready(function(){
	 $('input').iCheck({
		checkboxClass: 'icheckbox_square',
		radioClass: 'iradio_square',
		increaseArea: '20%' // optional
	  });
});
</script>