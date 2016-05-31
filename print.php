<?php include('include/head.php'); ?>

<?php 
	$consulta="SELECT * FROM general_information WHERE id='".mysqli_real_escape_string($conexion,htmlspecialchars($_GET['id']))."' ";
	$resultado= mysqli_query($conexion,$consulta);
	$fila= mysqli_fetch_array($resultado);
?>


<body>
    <?php // include("include/menu.php"); ?>
	
<div class="container-general-info">
	<!--<div><h1>GULINC REQUEST JOB FORM</h1></div>-->
  <div class="campos-container">
  	<div class="header-info"><strong>GENERAL INFO</strong></div>
   	<div class="name"><strong>LT ENGINEERING</strong></div>
   	<div class="description">
	
		<?php 
			$consulta="SELECT * FROM engineering WHERE id='".$fila['engineering_id']."' ";
			$resultado= mysqli_query($conexion,$consulta);
			$fila_engineering= mysqli_fetch_array($resultado);
			echo $fila_engineering['engineering'];
		?>
		
	</div>
	
    <div class="name"><strong>SOLOMON #</strong></div>
    <div class="description"> <?php echo $fila['solomon_number']; ?> </div>
	
    <div class="name"><strong>Service #</strong></div>
   	<div class="description"> <?php echo $fila['service_number']; ?>  </div>
	
    <div class="name"><strong>customer name: </strong></div>
    <div class="description"> <?php echo $fila['customer_name']; ?>  </div>
	
    <div class="name"><strong>PRJ. ASSING #</strong></div>
    <div class="description"> <?php echo $fila['prj_assing_number']; ?>  </div>
	
    <div class="name"><strong>KICK OFF DATE</strong></div>
   	<div class="description"> <?php echo $fila['kick_off_date']; ?>  </div>
	
    <div class="name"><strong>bldg#</strong></div>
   	<div class="description"> <?php echo $fila['bldg_number']; ?> </div>
	
    <div class="name"><strong>street</strong></div>
   	<div class="description"> <?php echo $fila['street_number']; ?>   </div>

	
    <div class="name"><strong>muni</strong></div>
   	<div class="description">
		<?php 
			$consulta="SELECT * FROM city WHERE id='".$fila['city_id']."' ";
			$resultado= mysqli_query($conexion,$consulta);
			$fila_city= mysqli_fetch_array($resultado);
			echo $fila_city['city'];
		?>	

	</div>
	
    <div class="name"><strong>state</strong></div>
   	<div class="description">
		<?php 
			$consulta="SELECT * FROM state WHERE id='".$fila['city_id']."' ";
			$resultado= mysqli_query($conexion,$consulta);
			$fila_state= mysqli_fetch_array($resultado);
			echo $fila_state['state'];
		?>		
	</div>
	
    <div class="name"><strong>date request sent</strong></div>
   	<div class="description"> <?php echo $fila['date_request_sent']; ?>   </div>

	
    <div class="name"><strong>DOC#</strong></div>
   	<div class="description"> <?php echo $fila['doc_number']; ?>   </div>
	
    <div class="name"><strong>po#</strong></div>
   	<div class="description"> <?php echo $fila['po_number']; ?>   </div>
	
    <div class="name"><strong>LT EXP. JOB COMPLETION</strong></div>
   	<div class="description"> <?php echo $fila['lt_exp_job_completion']; ?>   </div>
	
     <div class="name"><strong>LT FIBER ENG.</strong></div>
   	<div class="description"> <?php echo $fila['lt_fiber_eng']; ?>   </div>
	
     <div class="name"><strong>LT PROJECT manager</strong></div>
   	<div class="description"> <?php echo $fila['lt_project']; ?>   </div>

	
	<div class="name"><strong>Scope Work</strong></div>
   	<div class="description" style="height:75px; border:1px solid #000; margin-top:10px;"> <?php echo $fila['scope_work']; ?> </div>
	
  </div>
</div>

<?php 

	///// INSIDE PLAN		
	$consulta="SELECT * FROM inside_plans WHERE general_information_id='".mysqli_real_escape_string($conexion,htmlspecialchars($_GET['id']))."' ";
	$resultado= mysqli_query($conexion,$consulta);
	$rows_inside= mysqli_num_rows($resultado);
	$fila_inside= mysqli_fetch_array($resultado);
	if($rows_inside > 0){
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
						$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['assigned_company_site_survey_building']."' ";
						$resultado= mysqli_query($conexion,$consulta);
						$fila_company_inside= mysqli_fetch_array($resultado);
						echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
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
						$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['assigned_company_isp_eng_plans_building']."' ";
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
	
	<script type="text/javascript">
	
		window.print(); 
	
	</script>
	
</body>