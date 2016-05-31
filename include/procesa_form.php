<?php 
 
	include("../confi/conf.inc.php");
	
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	$fecha=date('U');
	
	
	
	///////////////////////////////////////////////////////////////////////////////////////
	//////////////  ESTE CODIGO PARA INSERTAR GENERAL INFORMATION  ////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	/*
	echo $_POST['engineering'];
	echo $_POST['customer_name'];
	echo $_POST['solomon_number'];
	echo $_POST['service_number'];
	echo $_POST['prj_assing_number'];
	echo $_POST['kick_off_date'];
	echo $_POST['bldg_number'];
	echo $_POST['street_number'];
	echo $_POST['city'];
	echo $_POST['state'];
	echo $_POST['doc_number'];
	echo $_POST['po_number'];
	echo $_POST['date_request_sent'];
	echo $_POST['lt_exp_job_completion'];
	echo $_POST['lt_fiber_eng'];
	echo $_POST['lt_project'];
	*/
		
	//echo "<br/>"; 
	
if(isset($_POST['isp']) or isset($_POST['utility']) or isset($_POST['pole'])){
$consulta_general_information="INSERT INTO general_information (engineering_id,customer_name,solomon_number,service_number,prj_assing_number,kick_off_date,bldg_number,street_number,city_id,state_id,doc_number,po_number,date_request_sent,lt_exp_job_completion,lt_fiber_eng,lt_project,scope_work,estatus,usuario_id) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['engineering']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['customer_name']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['solomon_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['prj_assing_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['kick_off_date']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['bldg_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['street_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['city']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['state']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['doc_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['po_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_request_sent']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['lt_exp_job_completion']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['lt_fiber_eng']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['lt_project']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['scope_work']))."','0','".$_SESSION['id']."'  )  ";
	
	$resultado_general_information=mysqli_query($conexion,$consulta_general_information);
	
	$last_id=mysqli_insert_id($conexion);
	
}
	
	///////////////////////////////////////////////////////////////////////////////////////
	///////////////////  ESTE CODIGO PARA INSERTAR INSIDE PLAN  ///////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////	
	
	
	if( isset($_POST['company_survey']) || isset($_POST['contact_survey']) || isset($_POST['company_isp_eng_plans_site_survey']) || isset($_POST['company_eng_isp_plans_no_survey']) || isset($_POST['company_site_survey_isp_as_built']) || isset($_POST['contact_site_survey_isp_as_built']) || isset($_POST['company_eng_isp_plans_isp_as_built']) || isset($_POST['company_site_survey_passive_filter_survey']) || isset($_POST['contact_site_survey_passive_filter_survey']) || isset($_POST['company_eng_isp_plans_passive_filter_survey']) || isset($_POST['company_site_surve_research_floor']) || isset($_POST['scope_work_inside_plans'])){
		

		 if(isset($_POST['company_survey'])){
		 $company_survey= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_survey']));			
				}
		 
		 if(isset($_POST['contact_survey'])){
		 $contact_survey= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_survey']));
		 		}
		
	     if(isset($_POST['company_isp_eng_plans_site_survey'])){	
		 $company_isp_eng_plans_site_survey= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_isp_eng_plans_site_survey']));
		 }
		 
		 $company_eng_isp_plans_no_survey= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_eng_isp_plans_no_survey']));
		
		 $company_site_survey_isp_as_built= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_site_survey_isp_as_built']));
		
		 $contact_site_survey_isp_as_built= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_site_survey_isp_as_built']));
		
		 $company_eng_isp_plans_isp_as_built= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_eng_isp_plans_isp_as_built']));
		
		 $company_site_survey_passive_filter_survey= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_site_survey_passive_filter_survey']));
		
		 $contact_site_survey_passive_filter_survey= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_site_survey_passive_filter_survey']));
		
		 $company_eng_isp_plans_passive_filter_survey= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_eng_isp_plans_passive_filter_survey']));
		
		 $floor_research_floor= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['floor_research_floor']));
		 $company_site_surve_research_floor= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_site_surve_research_floor']));
		
		 $scope_work_inside_plans= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['scope_work_inside_plans']));
		
		 $company_cable_inside= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_cable_inside']));
		
		 $contact_name_cable_inside= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_name_cable_inside']));
		
		 $contact_number_cable_inside= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_number_cable_inside']));
		
		 $contact_email_cable_inside= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_email_cable_inside']));
		
		 $company_tenant_inside= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_tenant_inside']));
		
		 $contact_name_tenant_inside= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_name_tenant_inside']));
		
		 $contact_number_tenant_inside= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_number_tenant_inside']));
		
		 $contact_email_tenant_inside= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_email_tenant_inside']));
		
		 $company_property_inside= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_property_inside']));
		
		 $contact_name_property_inside= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_name_property_inside']));
		
		 $contact_number_property_inside= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_number_property_inside']));
		 $contact_email_property_inside= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_email_property_inside']));
		 $new_building= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['new_building']));

		
		if(isset($_POST['si_sp_eng_plans']) =="si" || isset($_POST['si_isp_as_built']) =="si" || isset($_POST['si_passive_filter']) =="si" || isset($_POST['si_research_floor']) =="si" || isset($_POST['si_survey']) =="si"){
		
				//validando para subir
				if(isset($_POST['active_survey'])  || isset($_POST['active_isp_eng_plans']) || isset($_POST['active_eng_isp_plans'])  || isset($_POST['active_site_survey_as_built']) || isset($_POST['active_eng_isp_plans_as_built']) || isset($_POST['active_site_survey_as_built']) || isset($_POST['active_eng_isp_plans_as_built']) || isset($_POST['active_site_survey_passive_filter']) || isset($_POST['active_eng_isp_plans_passive_filter']) || isset($_POST['active_site_survey_research_floor']) ){
		
			
			
			//subir el archivo
			$ruta_attach = '../archivos/attach/'.basename($_FILES['attach_file_inside']['name']);
			$info_attach = pathinfo($ruta_attach);
			$tipo_attach = $info_attach['extension'];
			
			$fileAttach="attach_".$fecha.".".$tipo_attach;  
			$uploaddir_temp_attach="../archivos/attach/";
			$upload_temp_attach = $uploaddir_temp_attach."attach_".$fecha.".".$tipo_attach;     

			/*
			$tamano= getimagesize(rtrim($_FILES['attach_file_inside']['tmp_name']));
			$ancho = $tamano[0];              
			$alto = $tamano[1];  
			*/
			move_uploaded_file($_FILES['attach_file_inside']['tmp_name'], $upload_temp_attach); 
			
			$consulta_file="INSERT INTO uploaded_file(estado,file) VALUES('1','".$fileAttach."') ";
		    $resultado_file= mysqli_query($conexion,$consulta_file);
			$last_id_file=mysqli_insert_id($conexion);
	
			
			
				}
					
		}
			
			
			
			if(isset($_POST['si_sp_eng_plans']) =="si" || isset($_POST['si_isp_as_built']) =="si" || isset($_POST['si_passive_filter']) =="si" || isset($_POST['si_research_floor']) =="si"){
			
		//Inserta el inside plan	
		$consulta_inside_plan="INSERT INTO inside_plans (service_number,	assigned_company_eng_isp_plans_no_survey,assigned_company_site_survey_isp_as_built,contact_site_survey_isp_as_built,	assigned_company_eng_isp_plans_isp_as_built,assigned_company_site_survey_passive_filter,contact_site_survey_passive_filter,assigned_company_eng_isp_plans_passive_filter,floor_site_survey_research_floor,assigned_company_site_survey_research_floor,scope_work_inside_plans,new_building,general_information_id, file_id) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$company_eng_isp_plans_no_survey."','".$company_site_survey_isp_as_built."','".$contact_site_survey_isp_as_built."','".$company_eng_isp_plans_isp_as_built."','".$company_site_survey_passive_filter_survey."','".$contact_site_survey_passive_filter_survey."','".$company_eng_isp_plans_passive_filter_survey."','".$floor_research_floor."','".$company_site_surve_research_floor."','".$scope_work_inside_plans."','".$new_building."','".$last_id."','".$last_id_file."' ) ";	
			
		
		$resultado_inside_plan= mysqli_query($conexion,$consulta_inside_plan);
		$last_id_inside_plan=mysqli_insert_id($conexion);
	
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$last_id_inside_plan."','inside_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);
		
		$type="inside_plans";
		include('contractor_code.php');
	
		
		}
			
			
			///ESTE CODIGO INSERTA EL BUILDING SITE SURVEY
			if(isset($_POST['si_survey']) =="si") {
		
				if(isset($_POST['active_survey'])) {
					
					if(isset($_POST['company_survey'])) {
							
						$consulta_site_survey = "INSERT INTO building_site_survey (general_information_id,site_survey_company, site_survey_contact, file_id) VALUES('".$last_id."', '".$company_survey."','".$contact_survey."', '".$last_id_file."')";	
						
						$resultado_site_survey= mysqli_query($conexion,$consulta_site_survey);
						$last_id_site_survey=mysqli_insert_id($conexion);
						
						//insertando el request
						$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$last_id_site_survey."','building_site_survey','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."')";
					$resultado_request= mysqli_query($conexion,$consulta_request);
						
						$type="building_site_survey";
						include('contractor_code.php');
						}  
					
					}
						
						
						if(isset($_POST['active_isp_eng_plans'])=="si") {
							if(isset($_POST['company_isp_eng_plans_site_survey'])) {
						$consulta_site_survey = "INSERT INTO building_site_survey (general_information_id,isp_eng_plans_company, file_id) VALUES('".$last_id."', '".$company_isp_eng_plans_site_survey."', '".$last_id_file."')";	
						
						$resultado_site_survey= mysqli_query($conexion,$consulta_site_survey);
						$last_id_site_survey=mysqli_insert_id($conexion);
						
						$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$last_id_site_survey."','building_site_survey','".$fecha."','1','".$_POST['company_isp_eng_plans_site_survey']."','".$_SESSION['id']."') ";
					$resultado_request= mysqli_query($conexion,$consulta_request);
					
					//insertar archivo
					//$consulta_file="INSERT INTO uploaded_file (request_id,type,file,estado) VALUES('".$last_id."','building_site_survey','".$fecha."','1','".$_POST['company_isp_eng_plans_site_survey']."','".$_SESSION['id']."') ";
					//$resultado_request= mysqli_query($conexion,$consulta_request);
						
						$type="building_site_survey";	
						include('contractor_code.php');
						}
							
							
			}
		}
	}
	
	
	
	
	///////////////////////////////////////////////////////////////////////////////////////
	///////////////////  ESTE CODIGO PARA INSERTAR POLE PLAN  /////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////		
	
			
		
		$construction_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['construction_pole']));
		$gsp_field_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['gsp_field_pole']));
		$license_proposed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['license_proposed_pole']));
		$measure_height_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['measure_height_pole']));
		$license_forms_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['license_forms_pole']));
		$as_built_licensed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['as_built_licensed_pole']));
		$gis_as_built_file_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['gis_as_built_file_pole']));
		$company_outside_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_outside_pole']));
		$contact_outside_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_outside_pole']));
		$underground_application= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['underground_application']));
		$company_application_needed= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_application_needed']));
		$contact_application_needed= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_application_needed']));
		$cust_cable_count= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['cust_cable_count']));
		$cust_loc_net= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['cust_loc_net']));
		$textarea_under_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_under_pole']));
		$task_engineering_plans_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['highway_engineering_plans_pole']));
		$engineering_plans_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['engineering_plans_pole_railroad']));
		$task_request_number_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_pole']));
		$date_task_requested_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_pole']));
		$expected_return_date_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_pole']));
		$proposed_tmp_length_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['proposed_tmp_length_pole']));
		$highway_proposed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['highway_proposed_pole']));
		$from_proposed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['from_proposed_pole']));
		$to_proposed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_proposed_pole']));
		$scope_work_proposed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['scope_work_proposed_pole']));
		$task_request_number_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_pole_railroad']));
		$date_task_requested_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_pole_railroad']));
		$expected_return_date_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_pole_railroad']));
		$highway_proposed_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['highway_proposed_pole_railroad']));
		$from_proposed_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['from_proposed_pole_railroad']));
		$to_proposed_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_proposed_pole_railroad']));
		$scope_work_proposed_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['scope_work_proposed_pole_railroad']));
		$company_cable_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_cable_pole']));
		$contact_name_cable_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_name_cable_pole']));
		$contact_number_cable_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_number_cable_pole']));
		$contact_email_cable_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_email_cable_pole']));
		$check_as_built_licensed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_as_built_licensed_pole']));
		$check_as_built_file_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_as_built_file_pole']));
		$from_aerial_route_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['from_aerial_route_pole']));
		$to_aerial_route_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_aerial_route_pole']));
		$length_aerial_route_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['length_aerial_route_pole']));
		$scope_work_proposed_pole_railroad_dos= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['scope_work_proposed_pole_railroad_dos']));
		
		
		if($_FILES['redline_file_pole']['name']!="") {
		
			$ruta_attach_pole = '../archivos/red_line_page_pole/'.basename($_FILES['redline_file_pole']['name']);
			$info_attach_pole = pathinfo($ruta_attach_pole);
			$tipo_attach_pole = $info_attach_pole['extension'];
			
			$fileAttach_pole="red_line_page_pole_".$fecha.".".$tipo_attach_pole;  
			$uploaddir_temp_attach_pole="../archivos/red_line_page_pole/";
			$upload_temp_attach_pole = $uploaddir_temp_attach_pole."red_line_page_pole_".$fecha.".".$tipo_attach_pole;     

			/*
			$tamano= getimagesize(rtrim($_FILES['attach_file_inside']['tmp_name']));
			$ancho = $tamano[0];              
			$alto = $tamano[1];  
			*/
			
			
			move_uploaded_file($_FILES['redline_file_pole']['tmp_name'], $upload_temp_attach_pole);   
			
			$consulta_file_pole="INSERT INTO uploaded_file(estado,file) VALUES('1','".$fileAttach_pole."') ";
		    $resultado_file_pole= mysqli_query($conexion,$consulta_file_pole);
			$last_id_file_pole=mysqli_insert_id($conexion);		
	}
					
				
		if(isset($_POST['pole_plan_task']) =="si"){	
			
		// PROPOSED POLE PLAN
		 $consulta_proposed_pole_plan="INSERT INTO proposed_pole_plan_task(service_number,general_information_id,construction_proposed_plans,gps_field_survey_pole,license_proposed_pole,measure_height_attached,license_forms_needed, file_id) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$_POST['construction_pole']."','".$_POST['gsp_field_pole']."','".$_POST['license_proposed_pole']."','".$_POST['measure_height_pole']."','".$_POST['license_forms_pole']."','".$last_id_file_pole."' )";		
		
		$resultado_proposed_pole= mysqli_query($conexion,$consulta_proposed_pole_plan) or die(mysqli_error($conexion));
		$last_id_proposed_pole_plan_task=mysqli_insert_id($conexion);
	
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$last_id_proposed_pole_plan_task."','proposed_pole_plan_task','".$fecha."','1','2','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		$type="proposed_pole_plan_task";
		include('contractor_code.php');
		
		}
			
		if(isset($_POST['as_built_pole'])=="si"){	
			
		// AS-BUILT POLE PLAN
		 $consulta_as_built_pole_plan="INSERT INTO as_built_pole_plan_task (service_number,general_information_id,as_built_licensed_pole_plans,gis_as_built_file_need, file_id) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$as_built_licensed_pole."','".$gis_as_built_file_pole."', '".$last_id_file_pole."')";		
		
		$resultado_as_built_pole_plan= mysqli_query($conexion,$consulta_as_built_pole_plan) or die(mysqli_error($conexion));
		$last_id_as_built_pole_plan_task=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$last_id_as_built_pole_plan_task."','as_built_pole_plan_task','".$fecha."','1','2','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		//$type="as_built_pole_plan_task";
		//include('contractor_code.php');
			}
			
		// OUTSIDE UTILITY POLE PLAN	
		
		if(isset($_POST['si_outside_utility_task'])=="si"){
		
		$consulta_outsite_utility_pole_plan_task="INSERT INTO outsite_utility_pole_plan_task(service_number,general_information_id,outsite_utility_company,outsite_utility_contact,outsite_underground_application,	outsite_application_company,outsite_applicacion_contact,outsite_cust_cable,outsite_cust_tie_net,outsite_text_here,outsite_aerial_application, file_id) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$company_outside_pole."','".$contact_outside_pole."','".$underground_application."','".$company_application_needed."','".$contact_application_needed."','".$cust_cable_count."','".$cust_loc_net."','".$textarea_under_pole."','".$_POST['aerial_application']."', '".$last_id_file_pole."')";		
		
		$resultado_outsite_utility_pole_plan_task= mysqli_query($conexion,$consulta_outsite_utility_pole_plan_task) or die(mysqli_error($conexion));
		$last_id_outsite_utility_pole_plan_task=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$last_id_outsite_utility_pole_plan_task."','outsite_utility_pole_plan_task','".$fecha."','1','".$company_outside_pole."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		$type="outsite_utility_pole_plan_task";
		include('contractor_code.php');		
		}
		
		if(isset($_POST['si_hightway_traffic_pole'])=="si"){
		
		// highway_traffic  POLE PLAN
		 $consulta_highway_traffic_pole_plan="INSERT INTO highway_traffic_pole_plan(service_number,general_information_id,other_highway_task_request_number,other_highway_date_task,other_highway_expected_date,other_highway_proposed_tmp,other_highway_traffic,other_highway_engineering_plans_pole,other_highway_from,other_highway_to,other_highway_scope, file_id) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_pole."','".$date_task_requested_pole."','".$expected_return_date_pole."','".$proposed_tmp_length_pole."','".$highway_proposed_pole."','".$task_engineering_plans_pole."','".$from_proposed_pole."','".$to_proposed_pole."','".$scope_work_proposed_pole."', '".$last_id_file_pole."')  ";		
		
		$resultado_highway_traffic_pole_plan= mysqli_query($conexion,$consulta_highway_traffic_pole_plan) or die(mysqli_error($conexion));
		$last_id_highway_traffic_pole_plan=mysqli_insert_id($conexion);

		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$last_id_highway_traffic_pole_plan."','highway_traffic_pole_plan','".$fecha."','1','2','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		$type="highway_traffic_pole_plan";
		include('contractor_code.php');		
		}
		
		
		if(isset($_POST['si_railroad_pole'])=="si"){
		 //railroad_crossing_pole_plans
		 $consulta_railroad_crossing_pole_plans="INSERT INTO railroad_crossing_pole_plans(service_number,general_information_id,other_railroad_task_request_number,other_railroad_date_task,other_railroad_expected_date,other_railroad_crossing_proposed,other_railroad_from,other_railroad_to,other_railroad_scope, engineering_plans_pole_railroad, file_id) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_pole_railroad."','".$date_task_requested_pole_railroad."','".$expected_return_date_pole_railroad."','".$highway_proposed_pole_railroad."','".$from_proposed_pole_railroad."','".$to_proposed_pole_railroad."','".$scope_work_proposed_pole_railroad."','".$engineering_plans_pole_railroad."', '".$last_id_file_pole."' )  ";		
		
		$resultado_railroad_crossing_pole_plans= mysqli_query($conexion,$consulta_railroad_crossing_pole_plans) or die(mysqli_error($conexion));
		$last_id_railroad_crossing_pole_plans=mysqli_insert_id($conexion);	
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$last_id_railroad_crossing_pole_plans."','railroad_crossing_pole_plans','".$fecha."','1','2','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		$type="railroad_crossing_pole_plans";
		include('contractor_code.php');				
		
		}
	
	
	
		///////////////////////////////////////////////////////////////////////////////////////
		/////////////////  ESTE CODIGO PARA INSERTAR UTILITY AB RECORD  ///////////////////////
		///////////////////////////////////////////////////////////////////////////////////////	
		
			
	
	

		$task_request_number_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_utility']));
		$company_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_utility']));
		$path_length_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['path_length_utility']));
		$check_attached_map_electric_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_attached_map_electric_utility']));
		$form_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['form_utility']));
		$to_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_utility']));
		$textarea_scope_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_utility']));
		$task_request_number_telephone_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_telephone_utility']));
		$company_telephone_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_telephone_utility']));
		$path_length_telephone_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['path_length_telephone_utility']));
		$check_attached_map_telephone_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_attached_map_telephone_utility']));
		$form_telephone_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['form_telephone_utility']));
		$to_telephone_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_telephone_utility']));
		$textarea_scope_telephone_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_telephone_utility']));
		$task_request_number_private_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_private_plan_utility']));
		$company_private_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_private_plan_utility']));
		$path_length_private_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['path_length_private_plan_utility']));
		$check_attached_map_private_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_attached_map_private_utility']));
		$form_private_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['form_private_plan_utility']));
		$to_private_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_private_plan_utility']));
		$textarea_scope_private_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_private_plan_utility']));
		$task_request_number_all_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_all_plan_utility']));
		$company_all_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_all_plan_utility']));
		$path_length_all_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['path_length_all_plan_utility']));
		$check_attached_map_all_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_attached_map_all_utility']));
		$form_all_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['form_all_plan_utility']));
		$to_all_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_all_plan_utility']));
		$textarea_scope_all_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_all_plan_utility']));
		$task_request_number_find_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_find_plan_utility']));
		$path_length_find_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['path_length_find_plan_utility']));
		$check_find_aerial_path= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_find_aerial_path']));
		$check_find_underground_path= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_find_underground_path']));
		$check_elec_path= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_elec_path']));
		$check_tel_path= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_tel_path']));
		$check_private_path= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_private_path']));
		$check_attached_path= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_attached_path']));
		$form_find_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['form_find_plan_utility']));
		$to_find_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_find_plan_utility']));
		$textarea_scope_find_plan_utility= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_find_plan_utility']));

		
		///// FILE DE UTILITY
		if(isset($_FILES['redline_page_utility']['name'])){
		$ruta_attach_utility = '../archivos/red_line_page_utility/'.basename($_FILES['redline_page_utility']['name']);
		$info_attach_utility = pathinfo($ruta_attach_utility);
		$tipo_attach_utility = $info_attach_utility['extension'];
		
		$fileAttach_utility="red_line_page_utility_".$fecha.".".$tipo_attach_utility;  
		$uploaddir_temp_attach_utility="../archivos/red_line_page_utility/";
		$upload_temp_attach_utility = $uploaddir_temp_attach_utility."red_line_page_utility_".$fecha.".".$tipo_attach_utility;     

		move_uploaded_file($_FILES['redline_page_utility']['tmp_name'], $upload_temp_attach_utility);  
		
		$consulta_insert_file="INSERT INTO uploaded_file(general_information_id,file,estado,type)  VALUES('".$last_id."','".$fileAttach_utility."','1','page_utility_')  ";
		
		$resultado_insert_file= mysqli_query($conexion,$consulta_insert_file) or die(mysqli_error($conexion));
		$last_id_utility_plans=mysqli_insert_id($conexion); 
		}
					
		///// SEGUNDO FILE DE UTILITY		
		if(isset($_FILES['red_line_file_utility_']['name'])){	
			
		$ruta_attach_utility2 = '../archivos/red_line_file_utility/'.basename($_FILES['redline_file_utility']['name']);
		$info_attach_utility2 = pathinfo($ruta_attach_utility2);
		$tipo_attach_utility2 = $info_attach_utility2['extension'];
		
		$fileAttach_utility2="red_line_file_utility_".$fecha.".".$tipo_attach_utility2;  
		$uploaddir_temp_attach_utility2="../archivos/red_line_file_utility/";
		$upload_temp_attach_utility2 = $uploaddir_temp_attach_utility2."red_line_file_utility_".$fecha.".".$tipo_attach_utility2;     

		move_uploaded_file($_FILES['redline_file_utility']['tmp_name'], $upload_temp_attach_utility2);   
		
		$consulta_insert_file2="INSERT INTO uploaded_file(general_information_id,file,estado,type)  VALUES('".$last_id."','".$fileAttach_utility2."','1','file_utility')  ";
		
		$resultado_insert_file2= mysqli_query($conexion,$consulta_insert_file2) or die(mysqli_error($conexion));
		$last_id_utility_plans2=mysqli_insert_id($conexion);
		
		}

		// ELECTRIC PLAN REQUEST
		if( isset($_POST['electric_plan_utility']) || isset($_POST['task_request_number_utility'])  ){
		
		$consulta_electric_utility_plan="INSERT INTO electric_request_utility_plans(service_number,general_information_id,task_request_number_utility,company_utility,path_length_utility,see_attached_map_utility,from_electric_utility,to_electric_utility,scope_word_electric_utility ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_utility."','".$company_utility."','".$path_length_utility."','".$check_attached_map_electric_utility."','".$form_utility."','".$to_utility."','".$textarea_scope_utility."' )";
		
		$resultado_electric_utility_plan= mysqli_query($conexion,$consulta_electric_utility_plan) or die(mysqli_error($conexion));
		$last_id_electric_request_utility_plans=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_electric_request_utility_plans."','electric_request_utility_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);			
		
		
		// TELEPHONE PLAN REQUEST
		$consulta_telephone_utility_plan="INSERT INTO telephone_request_utility_plans(service_number,general_information_id,task_request_number_telephone,company_utility_telephone,path_length_utility_telephone,see_attached_map_telephone,from_utility_telephone,to_utility_telephone,scope_work_telephone) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_telephone_utility."','".$company_telephone_utility."','".$path_length_telephone_utility."','".$check_attached_map_telephone_utility."','".$form_telephone_utility."','".$to_telephone_utility."','".$textarea_scope_telephone_utility."' )  ";
		
		$resultado_telephone_utility_plan= mysqli_query($conexion,$consulta_telephone_utility_plan) or die(mysqli_error($conexion));
		$last_id_telephone_request_utility_plans=mysqli_insert_id($conexion);

		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_telephone_request_utility_plans."','telephone_request_utility_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);				
		
		
		// PRIVATE PLAN REQUEST
		$consulta_private_request_utility_plans="INSERT INTO private_request_utility_plans(service_number,general_information_id,task_request_number_private,company_utility_private,path_length_private,see_attached_map_private,from_utility_private,to_utility_private,scope_work_private ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_private_plan_utility."','".$company_private_plan_utility."','".$path_length_private_plan_utility."','".$check_attached_map_private_utility."','".$form_private_plan_utility."','".$to_private_plan_utility."','".$textarea_scope_private_plan_utility."' )   ";
		
		$resultado_private_request_utility_plans= mysqli_query($conexion,$consulta_private_request_utility_plans) or die(mysqli_error($conexion));
		$last_id_private_request_utility_plans=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_private_request_utility_plans."','private_request_utility_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);		
	

		// ALL PLAN REQUEST
		$consulta_all_request_utility_plans="INSERT INTO all_request_utility_plans(service_number,general_information_id,task_request_number_all_utility,company_all_utility,path_lenth_all_utility,see_attached_map_all_utility,from_all_utility,to_all_utility,scope_work_all_utility ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_all_plan_utility."','".$company_all_plan_utility."','".$path_length_all_plan_utility."','".$check_attached_map_all_utility."','".$form_all_plan_utility."','".$to_all_plan_utility."','".$textarea_scope_all_plan_utility."' )   ";
		
		$resultado_all_request_utility_plans= mysqli_query($conexion,$consulta_all_request_utility_plans) or die(mysqli_error($conexion));
		$last_id_all_request_utility_plans=mysqli_insert_id($conexion);
	
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_all_request_utility_plans."','all_request_utility_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);			
		
		// FIND PLAN REQUEST
		$consulta_find_request_utility_plans="INSERT INTO find_request_utility_plans(service_number,general_information_id,task_request_number_find_utility,path_lenth_find_utility,find_aerial_utility,find_underground_utility,elec_find_utility,tel_find_utility,private_find_utility,see_attached_redline_map_utility,from_find_utility,to_find_utility,scope_work_find_utility ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_find_plan_utility."','".$path_length_find_plan_utility."','".$check_find_aerial_path."','".$check_find_underground_path."','".$check_elec_path."','".$check_tel_path."','".$check_private_path."','".$check_attached_path."','".$form_find_plan_utility."','".$to_find_plan_utility."','".$textarea_scope_find_plan_utility."' )   ";
		
		$resultado_find_request_utility_plans= mysqli_query($conexion,$consulta_find_request_utility_plans) or die(mysqli_error($conexion));
		$last_id_find_request_utility_plans=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_find_request_utility_plans."','find_request_utility_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);				
		
		

	}
	
	
	
	///////////////////////////////////////////////////////////////////////////////////////
	/////////////////  ESTE CODIGO PARA INSERTAR MANHOLE PLAN   ///////////////////////
	///////////////////////////////////////////////////////////////////////////////////////		
		
	if( isset($_POST['si_electric_proposed_manhole']) || isset($_POST['task_request_number_manhole'])  ){

		///// UPLOAD FILE 1 MANHOLE
		$ruta_attach_manhole = '../archivos/red_line_page_manhole/'.basename($_FILES['redline_page_manhole']['name']);
		$info_attach_manhole = pathinfo($ruta_attach_manhole);
		$tipo_attach_manhole = $info_attach_manhole['extension'];
		
		$fileAttach_manhole="red_line_page_manhole_".$fecha.".".$tipo_attach_manhole;  
		$uploaddir_temp_attach_manhole="../archivos/red_line_page_manhole/";
		$upload_temp_attach_manhole = $uploaddir_temp_attach_manhole."red_line_page_manhole_".$fecha.".".$tipo_attach_manhole;     

		/*
		$tamano= getimagesize(rtrim($_FILES['attach_file_inside']['tmp_name']));
		$ancho = $tamano[0];              
		$alto = $tamano[1];  
		*/
		move_uploaded_file($_FILES['redline_page_manhole']['tmp_name'], $upload_temp_attach_manhole);   
					
					
		///// SEGUNDO FILE 2 MANHOLE	
				
		$ruta_attach_manhole2 = '../archivos/red_line_file_manhole/'.basename($_FILES['redline_file_manhole']['name']);
		$info_attach_manhole2 = pathinfo($ruta_attach_manhole2);
		$tipo_attach_manhole2 = $info_attach_manhole2['extension'];
		
		$fileAttach_manhole2="red_line_file_manhole_".$fecha.".".$tipo_attach_manhole2;  
		$uploaddir_temp_attach_manhole2="../archivos/red_line_file_manhole/";
		$upload_temp_attach_manhole2 = $uploaddir_temp_attach_manhole2."red_line_file_manhole_".$fecha.".".$tipo_attach_manhole2;     

		/*
		$tamano= getimagesize(rtrim($_FILES['attach_file_inside']['tmp_name']));
		$ancho = $tamano[0];              
		$alto = $tamano[1];  
		*/
		move_uploaded_file($_FILES['redline_file_manhole']['tmp_name'], $upload_temp_attach_manhole2);   
						

						
		
		
		$task_request_number_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_manhole']));
		$date_task_requested_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_manhole']));
		$expected_return_date_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_manhole']));
		$mh_option_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['mh_option_manhole']));
		$company_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_manhole']));
		$prop_fiber_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['prop_fiber_manhole']));
		$path_length_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['path_length_manhole']));
		$form_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['form_manhole']));
		$to_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_manhole']));
		$textarea_scope_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_manhole']));
		$task_request_number_telephone_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_telephone_manhole']));
		$date_task_requested_telephone_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_telephone_manhole']));
		$expected_return_date_telephone_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_telephone_manhole']));
		$mh_option_telephone_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['mh_option_telephone_manhole']));
		$company_telephone_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_telephone_manhole']));
		$prop_fiber_telephone_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['prop_fiber_telephone_manhole']));
		$path_length_telephone_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['path_length_telephone_manhole']));
		$form_telephone_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['form_telephone_manhole']));
		$to_telephone_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_telephone_manhole']));
		$textarea_scope_telephone_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_telephone_manhole']));
		$task_request_number_private_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_private_manhole']));
		$date_task_requested_private_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_private_manhole']));
		$expected_return_date_private_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_private_manhole']));
		$mh_option_private_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['mh_option_private_manhole']));
		$company_private_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_private_manhole']));
		$prop_fiber_private_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['prop_fiber_private_manhole']));
		$path_length_private_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['path_length_private_manhole']));
		$form_private_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['form_private_manhole']));
		$to_private_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_private_manhole']));
		$textarea_scope_private_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_private_manhole']));
		$task_request_number_outside_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_outside_manhole']));
		$date_task_requested_outside_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_outside_manhole']));
		$expected_return_date_outside_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_outside_manhole']));
		$company_outside_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_outside_manhole']));
		$contact_outside_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_outside_manhole']));
		$company_underground_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_underground_manhole']));
		$contact_underground_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_underground_manhole']));
		$cust_cable_count_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['cust_cable_count_manhole']));
		$cust_tie_loc_to_net_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['cust_tie_loc_to_net_manhole']));
		$textarea_scope_underground_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_underground_manhole']));
		$company_aerial_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_aerial_manhole']));
		$contact_aerial_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_aerial_manhole']));
		$cust_cable_count_aerial_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['cust_cable_count_aerial_manhole']));
		$cust_tie_loc_to_net_aerial_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['cust_tie_loc_to_net_aerial_manhole']));
		$textarea_scope_aerial_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_aerial_manhole']));
		$si_breakout_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_breakout_manhole']));
		$si_look_out_field_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_look_out_field_manhole']));
		$si_final_butterfly_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_final_butterfly_manhole']));
		$si_preliminary_proposed_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_preliminary_proposed_manhole']));
		$si_gis_as_built_file_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_gis_as_built_file_manhole']));
		$si_butterfly_details_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_butterfly_details_manhole']));
		$si_outside_utility_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_outside_utility_manhole']));
		$si_butterfly_as_build_details_manhole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_butterfly_as_build_details_manhole']));
										
						
						

		/////// AQUI SE HACE EL INSERT  PARA MANHOLE
		
		$consulta_manhole="INSERT INTO manhole_plan(service_number,general_information_id,look_survey_manhole,final_butterfly_manhole,preliminary_proposed_manhole,gis_as_built_manhole,butterfly_proposed_manhole,outsite_utility_application_manhole,butterfly_as_built_manhole,red_line_page_manhole,red_line_file_manhole) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$si_look_out_field_manhole."','".$si_final_butterfly_manhole."','".$si_preliminary_proposed_manhole."','".$si_gis_as_built_file_manhole."','".$si_butterfly_details_manhole."','".$si_outside_utility_manhole."','".$si_butterfly_as_build_details_manhole."','".$fileAttach_manhole."','".$fileAttach_manhole2."' )  ";
		
		$resultado_manhole=mysqli_query($conexion,$consulta_manhole) or die(mysqli_error($conexion));
		$last_id_manhole_plan=mysqli_insert_id($conexion);

		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_manhole_plan."','manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);			
		
		
		//// ELECTRIC MANHOLE
		
		$consulta_electric_manhole="INSERT INTO electric_proposed_manhole_plan(service_number,general_information_id,task_request_number_electric_manhole,date_task_request_electric_manhole,expected_date_electric_manhole,mh_option_electric_manhole,company_electric_manhole,prop_fiber_electric_manhole,path_length_electric_manhole,from_electric_manhole,to_electric_manhole,scope_work_electric_manhole ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_manhole."','".$date_task_requested_manhole."','".$expected_return_date_manhole."','".$mh_option_manhole."','".$company_manhole."','".$prop_fiber_manhole."','".$path_length_manhole."','".$form_manhole."','".$to_manhole."','".$textarea_scope_manhole."' )  ";
		
		$resultado_electric_manhole=mysqli_query($conexion,$consulta_electric_manhole) or die(mysqli_error($conexion));
		$last_id_electric_proposed_manhole_plan=mysqli_insert_id($conexion);

		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_electric_proposed_manhole_plan."','electric_proposed_manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);				
		
		
		//// TELEPHONE MANHOLE
		$consulta_telephone_manhole="INSERT INTO telephone_proposed_manhole_plan(service_number,general_information_id,task_request_number_telephone_manhole,date_task_request_telephone_manhole,expected_date_telephone_manhole,mh_option_telephone_manhole,company_telephone_manhole,prop_fiber_telephone_manhole,path_length_telephone_manhole,from_telephone_manhole,to_telephone_manhole,scope_work_telephone_manhole ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_telephone_manhole."','".$date_task_requested_telephone_manhole."','".$expected_return_date_telephone_manhole."','".$mh_option_telephone_manhole."','".$company_telephone_manhole."','".$prop_fiber_telephone_manhole."','".$path_length_telephone_manhole."','".$form_telephone_manhole."','".$to_telephone_manhole."','".$textarea_scope_telephone_manhole."' )  ";
		
		$resultado_telephone_manhole=mysqli_query($conexion,$consulta_telephone_manhole) or die(mysqli_error($conexion));
		$last_id_telephone_proposed_manhole_plan=mysqli_insert_id($conexion);
	
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_telephone_proposed_manhole_plan."','telephone_proposed_manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);		
		
		
		//// PRIVATE MANHOLE
		$consulta_private_manhole="INSERT INTO private_proposed_manhole_plan(service_number,general_information_id,task_request_number_private_manhole,date_task_request_private_manhole,expected_date_private_manhole,mh_option_private_manhole,company_private_manhole,prop_fiber_private_manhole,path_length_private_manhole,from_private_manhole,to_private_manhole,scope_work_private_manhole ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_private_manhole."','".$date_task_requested_private_manhole."','".$expected_return_date_private_manhole."','".$mh_option_private_manhole."','".$company_private_manhole."','".$prop_fiber_private_manhole."','".$path_length_private_manhole."','".$form_private_manhole."','".$to_private_manhole."','".$textarea_scope_private_manhole."' ) ";
		
		$resultado_private_manhole=mysqli_query($conexion,$consulta_private_manhole) or die(mysqli_error($conexion));
		$last_id_private_proposed_manhole_plan=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_private_proposed_manhole_plan."','private_proposed_manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);		
		
		
		//// OUTSIDE MANHOLE
		$consulta_outside_manhole="INSERT INTO outsite_utility_manhole_plan(service_number,general_information_id,task_request_number_outsite_manhole,date_task_request_outsite_manhole,expected_date_outsite_manhole,company_outsite_manhole,contact_outsite_manhole,breakout_application_task_manhole ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_outside_manhole."','".$date_task_requested_outside_manhole."','".$expected_return_date_outside_manhole."','".$company_outside_manhole."','".$contact_outside_manhole."','".$si_breakout_manhole."' ) ";
		
		$resultado_outside_manhole=mysqli_query($conexion,$consulta_outside_manhole) or die(mysqli_error($conexion));
		$last_id_outsite_utility_manhole_plan=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_outsite_utility_manhole_plan."','outsite_utility_manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);			

		//// UNDERGROUND OUTSIDE MANHOLE
		$consulta_underground_outside_manhole="INSERT INTO underground_outsite_manhole_plan(service_number,general_information_id,company_underground_manhole,contact_underground_manhole,cust_cable_count_underground_manhole,cust_tie_loc_underground_manhole,scope_work_underground_manhole ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$company_underground_manhole."','".$contact_underground_manhole."','".$cust_cable_count_manhole."','".$cust_tie_loc_to_net_manhole."','".$textarea_scope_underground_manhole."' ) ";
		
		$resultado_underground_outside_manhole=mysqli_query($conexion,$consulta_underground_outside_manhole) or die(mysqli_error($conexion));
		$last_id_underground_outsite_manhole_plan=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_underground_outsite_manhole_plan."','underground_outsite_manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);				
		

		//// AERIAL OUTSIDE MANHOLE
		$consulta_aerial_outside_manhole="INSERT INTO aerial_outsite_manhole_plan(service_number,general_information_id,company_aerial_manhole,contact_aerial_manhole,cust_cable_count_aerial_manhole,cust_tie_loc_aerial_manhole,scope_work_aerial_manhole ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$company_aerial_manhole."','".$contact_aerial_manhole."','".$cust_cable_count_aerial_manhole."','".$cust_tie_loc_to_net_aerial_manhole."','".$textarea_scope_aerial_manhole."'  )  ";
		
		$resultado_aerial_outside_manhole=mysqli_query($conexion,$consulta_aerial_outside_manhole) or die(mysqli_error($conexion));
		$last_id_aerial_outsite_manhole_plan=mysqli_insert_id($conexion);

		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_aerial_outsite_manhole_plan."','aerial_outsite_manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);				
			
	

	}
	
	
	///////////////////////////////////////////////////////////////////////////////////////
	/////////////////  ESTE CODIGO PARA INSERTAR CIVIL PLAN   ///////////////////////
	///////////////////////////////////////////////////////////////////////////////////////		
		
		
	if( isset($_POST['si_civil_proposed_tmp_civil']) || isset($_POST['si_as_built_civil'])  ){		
		
		
		///// UPLOAD FILE 1 CIVIL
		$ruta_attach_civil = '../archivos/red_line_page_civil/'.basename($_FILES['redline_page_civil']['name']);
		$info_attach_civil = pathinfo($ruta_attach_civil);
		$tipo_attach_civil = $info_attach_civil['extension'];
		
		$fileAttach_civil="red_line_page_civil_".$fecha.".".$tipo_attach_civil;  
		$uploaddir_temp_attach_civil="../archivos/red_line_page_civil/";
		$upload_temp_attach_civil = $uploaddir_temp_attach_civil."red_line_page_civil_".$fecha.".".$tipo_attach_civil;     

		/*
		$tamano= getimagesize(rtrim($_FILES['attach_file_inside']['tmp_name']));
		$ancho = $tamano[0];              
		$alto = $tamano[1];  
		*/
		move_uploaded_file($_FILES['redline_page_civil']['tmp_name'], $upload_temp_attach_civil);   
					
					
		///// SEGUNDO FILE 2 CIVIL	
				
		$ruta_attach_civil2 = '../archivos/red_line_file_civil/'.basename($_FILES['redline_file_civil']['name']);
		$info_attach_civil2 = pathinfo($ruta_attach_civil2);
		$tipo_attach_civil2 = $info_attach_civil2['extension'];
		
		$fileAttach_civil2="red_line_file_civil_".$fecha.".".$tipo_attach_civil2;  
		$uploaddir_temp_attach_civil2="../archivos/red_line_file_civil/";
		$upload_temp_attach_civil2 = $uploaddir_temp_attach_civil2."red_line_file_civil_".$fecha.".".$tipo_attach_civil2;     

		/*
		$tamano= getimagesize(rtrim($_FILES['attach_file_inside']['tmp_name']));
		$ancho = $tamano[0];              
		$alto = $tamano[1];  
		*/
		move_uploaded_file($_FILES['redline_file_civil']['tmp_name'], $upload_temp_attach_civil2);   
						
						
						
		
		$si_civil_proposed_tmp_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_civil_proposed_tmp_civil']));
		$si_as_built_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_as_built_civil']));
		$si_total_station_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_total_station_civil']));
		$si_print_milar_paper_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_print_milar_paper_civil']));
		$si_deliver_mylar_plans_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_deliver_mylar_plans_civil']));
		$proposed_route_length_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['proposed_route_length_civil']));
		$from_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['from_civil']));
		$to_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_civil']));
		$textarea_scope_proposed_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_proposed_civil']));
		
		$check_proposed_uno_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_proposed_uno_civil']));
		$company_proposed_uno_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_proposed_uno_civil']));
		$check_proposed_dos_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_proposed_dos_civil']));
		$company_proposed_dos_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_proposed_dos_civil']));
		$check_proposed_tres_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_proposed_tres_civil']));
		$company_proposed_tres_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_proposed_tres_civil']));
		$check_proposed_cuatro_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_proposed_cuatro_civil']));
		$text_micro_trench= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['text_micro_trench']));
		$company_proposed_cuatro_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_proposed_cuatro_civil']));
		$textarea_scope_installation_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_installation_civil']));
		$task_request_number_telephone_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_telephone_civil']));
		$date_task_requested_telephone_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_telephone_civil']));
		$expected_return_date_telephone_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_telephone_civil']));
		$muni_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['muni_civil']));
		$dcr_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['dcr_civil']));
		$nh_dot_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['nh_dot_civil']));
		$ct_dot= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['ct_dot']));
		$highway_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['highway_civil']));
		$mass_dot_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['mass_dot_civil']));
		$me_dot_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['me_dot_civil']));
		$ny_dot_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['ny_dot_civil']));
		$railroad_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['railroad_civil']));
		$ri_dot_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['ri_dot_civil']));
		$vi_dot_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['vi_dot_civil']));
		
		$textarea_scope_permit_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_permit_civil']));
		$assigned_company_civil_permit_request_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['assigned_company_civil_permit_request_civil']));
		$task_request_number_mwra_plans_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_mwra_plans_civil']));
		$date_task_requested_mwra_plans_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_mwra_plans_civil']));
		$expected_return_date_mwra_plans_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_mwra_plans_civil']));
		$proposed_length_mwra_plans_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['proposed_length_mwra_plans_civil']));
		$existing_utility_file_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['existing_utility_file_civil']));
		$from_mwra_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['from_mwra_civil']));
		$to_mwra_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_mwra_civil']));
		$textarea_scope_mrwa_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_mrwa_civil']));
		$task_request_number_railroad_plans_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_railroad_plans_civil']));
		$date_task_requested_railroad_plans_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_railroad_plans_civil']));
		$expected_return_date_railroad_plans_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_railroad_plans_civil']));
		$railroad_plans_radio_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['railroad_plans_radio_civil']));
		$from_railroad_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['from_railroad_civil']));
		$to_railroad_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_railroad_civil']));
		$textarea_scope_railroad_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_railroad_civil']));
		$task_request_number_highway_traffic_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_highway_traffic_civil']));
		$date_task_requested_highway_traffic_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_highway_traffic_civil']));
		$expected_return_date_highway_traffic_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_highway_traffic_civil']));
		$highway_plans_radio_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['highway_plans_radio_civil']));
		$from_highway_traffic_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['from_highway_traffic_civil']));
		$to_highway_traffic_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_highway_traffic_civil']));
		$textarea_scope_highway_traffic_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_highway_traffic_civil']));

		
		
		
		
		
		
		
		
		////// AQUI INSERT DEL CIVIL PLAN
		
		$consulta_civil="INSERT INTO civil_plans(service_number,general_information_id,proposed_plan_tmp_civil,as_built_plan_civil,total_station_civil,print_a_b_mylar_civil,deliver_mylar_civil,proposed_route_civil,from_civil,to_civil,scope_work_civil,check_uno_trench_detail_civil,company_uno_trench_detail_civil,check_dos_trench_detail_civil,company_dos_trench_detail_civil,check_tres_trench_detail_civil,company_tres_trench_detail_civil,micro_trench_detail_civil,text_micro_trench_detail_civil,company_micro_trench_detail_civil,installations_notes_civil,red_line_file_civil ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$si_civil_proposed_tmp_civil."','".$si_as_built_civil."','".$si_total_station_civil."','".$si_print_milar_paper_civil."','".$si_deliver_mylar_plans_civil."','".$proposed_route_length_civil."','".$from_civil."','".$to_civil."','".$textarea_scope_proposed_civil."','".$check_proposed_uno_civil."','".$company_proposed_uno_civil."','".$check_proposed_dos_civil."','".$company_proposed_dos_civil."','".$check_proposed_tres_civil."','".$company_proposed_tres_civil."','".$check_proposed_cuatro_civil."','".$text_micro_trench."','".$company_proposed_cuatro_civil."','".$textarea_scope_installation_civil."','".$fileAttach_civil."','".$fileAttach_civil2."'   )  ";
		
		$resultado_civil=mysqli_query($conexion,$consulta_civil) or die(mysqli_error($conexion));
		$last_id_civil_plans=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_civil_plans."','civil_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);				
		
		
		////// PERMIT CIVIL
		
		$consulta_permit_civil="INSERT INTO permit_request_civil_plans(service_number,general_information_id,task_request_permit_civil,date_task_request_permit_civil,expected_return_permit_civil,muni_permit_civil,dcr_permit_civil,nh_dot_permit_civil,ct_dot_permit_civil,highway_permit_civil,mass_dot_permit_civil,me_dot_permit_civil,ny_dot_permit_civil,railroad_permit_civil,ri_dot_permit_civil,vi_dot_permit_civil,scope_work_permit_civil,assigned_company_permit_civil ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_telephone_civil."','".$date_task_requested_telephone_civil."','".$expected_return_date_telephone_civil."','".$muni_civil."','".$dcr_civil."','".$nh_dot_civil."','".$ct_dot."','".$highway_civil."','".$mass_dot_civil."','".$me_dot_civil."','".$ny_dot_civil."','".$railroad_civil."','".$ri_dot_civil."','".$vi_dot_civil."','".$textarea_scope_permit_civil."','".$assigned_company_civil_permit_request_civil."' )  ";
		
		$resultado_permit_civil=mysqli_query($conexion,$consulta_permit_civil) or die(mysqli_error($conexion));
		$last_id_permit_request_civil_plans=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_permit_request_civil_plans."','permit_request_civil_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);				
		
		////// MWRA CIVIL
		
		$consulta_mwra_civil="INSERT INTO mwra_request_civil_plans(service_number,general_information_id,task_request_mwra_civil,date_task_request_mwra_civil,expected_return_mwra_civil,proposed_length_mwra_civil,existing_profile_mwra_civil,from_mwra_civil,to_mwra_civil,scope_work_mwra_civil ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_mwra_plans_civil."','".$date_task_requested_mwra_plans_civil."','".$expected_return_date_mwra_plans_civil."','".$proposed_length_mwra_plans_civil."','".$existing_utility_file_civil."','".$from_mwra_civil."','".$to_mwra_civil."','".$textarea_scope_mrwa_civil."' ) ";
		
		$resultado_mwra_civil=mysqli_query($conexion,$consulta_mwra_civil) or die(mysqli_error($conexion));
		$last_id_mwra_request_civil_plans=mysqli_insert_id($conexion);
	
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_mwra_request_civil_plans."','mwra_request_civil_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);			
		
		
		////// RAILROAD CIVIL
		
		$consulta_railroad_civil="INSERT INTO railroad_request_civil_plans(service_number,general_information_id,task_request_railroad_civil,date_task_request_railroad_civil,expected_return_railroad_civil,crossing_proposed_railroad_civil,from_railroad_civil,to_railroad_civil,scope_work_railroad_civil ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_railroad_plans_civil."','".$date_task_requested_railroad_plans_civil."','".$expected_return_date_railroad_plans_civil."','".$railroad_plans_radio_civil."','".$from_railroad_civil."','".$to_railroad_civil."','".$textarea_scope_railroad_civil."' ) ";
		
		$resultado_railroad_civil=mysqli_query($conexion,$consulta_railroad_civil) or die(mysqli_error($conexion));
		$last_id_railroad_request_civil_plans=mysqli_insert_id($conexion);

		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_railroad_request_civil_plans."','railroad_request_civil_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);			
		
		
		////// HIGHWAY CIVIL
		
		$consulta_highway_civil="INSERT INTO highway_request_civil_plans(service_number,general_information_id,task_request_highway_civil,date_task_request_highway_civil,expected_return_highway_civil,traffic_proposed_highway_civil,from_highway_civil,to_highway_civil,scope_work_highway_civil ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_highway_traffic_civil."','".$date_task_requested_highway_traffic_civil."','".$expected_return_date_highway_traffic_civil."','".$highway_plans_radio_civil."','".$from_highway_traffic_civil."','".$to_highway_traffic_civil."','".$textarea_scope_highway_traffic_civil."' ) ";
		
		$resultado_highway_civil=mysqli_query($conexion,$consulta_highway_civil) or die(mysqli_error($conexion));
		$last_id_highway_request_civil_plans=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_highway_request_civil_plans."','highway_request_civil_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);				
		
	
	}
	
	
	
///////////////////////////////////////////////////////////////////////////////////////////
/// AQUI SE COMPRUEBA QUE FUNCIONO Y LUEGO SE CIERRA LA CONEXION	
	
if(mysqli_affected_rows($conexion)){
    echo "<div class='ejecuta_insert' id='ejecuto' name='".$last_id."' ></div>";
}else{
   
}
mysqli_close($conexion);	
	
	
?>