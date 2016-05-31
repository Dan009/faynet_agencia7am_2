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
	

	 $consulta_general_information="INSERT INTO general_information (engineering_id,customer_name,solomon_number,service_number,prj_assing_number,kick_off_date,bldg_number,street_number,city_id,state_id,doc_number,po_number,date_request_sent,lt_exp_job_completion,lt_fiber_eng,lt_project,scope_work,estatus,usuario_id) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['engineering']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['customer_name']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['solomon_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['prj_assing_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['kick_off_date']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['bldg_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['street_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['city']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['state']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['doc_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['po_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_request_sent']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['lt_exp_job_completion']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['lt_fiber_eng']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['lt_project']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['scope_work']))."','0','".$_SESSION['id']."'  )  ";
	
	$resultado_general_information=mysqli_query($conexion,$consulta_general_information);
	
	$last_id=mysqli_insert_id($conexion);
	
	///////////////////////////////////////////////////////////////////////////////////////
	///////////////////  ESTE CODIGO PARA INSERTAR INSIDE PLAN  ///////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////	
	
		

	
	
	
	


	
	if( isset($_POST['company_survey']) || isset($_POST['contact_survey']) || isset($_POST['company_isp_eng_plans_site_survey']) || isset($_POST['company_eng_isp_plans_no_survey']) || isset($_POST['company_site_survey_isp_as_built']) || isset($_POST['contact_site_survey_isp_as_built']) || isset($_POST['company_eng_isp_plans_isp_as_built']) || isset($_POST['company_site_survey_passive_filter_survey']) || isset($_POST['contact_site_survey_passive_filter_survey']) || isset($_POST['company_eng_isp_plans_passive_filter_survey']) || isset($_POST['company_site_surve_research_floor']) || isset($_POST['scope_work_inside_plans']) || isset($_POST['company_cable_inside']) || isset($_POST['contact_name_cable_inside']) || isset($_POST['contact_number_cable_inside']) || isset($_POST['contact_email_cable_inside']) || isset($_POST['company_tenant_inside']) || isset($_POST['contact_name_tenant_inside']) || isset($_POST['contact_number_tenant_inside']) || isset($_POST['contact_email_tenant_inside']) || isset($_POST['company_property_inside']) || isset($_POST['contact_name_property_inside']) || isset($_POST['contact_number_property_inside']) || isset($_POST['contact_email_property_inside'])   ){
		


		 $company_survey= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_survey']));
		 $contact_survey= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_survey']));
		 $company_isp_eng_plans_site_survey= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_isp_eng_plans_site_survey']));
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

			//echo "<br/> yo soy un file : ".$_FILES['attach_file_inside']['name'];
			
			
			
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
			
			
			
			
		$consulta_inside_plan="INSERT INTO inside_plans (service_number,assigned_company_site_survey_building,contact_site_survey_building,assigned_company_isp_eng_plans_building,	assigned_company_eng_isp_plans_no_survey,assigned_company_site_survey_isp_as_built,contact_site_survey_isp_as_built,	assigned_company_eng_isp_plans_isp_as_built,assigned_company_site_survey_passive_filter,contact_site_survey_passive_filter,assigned_company_eng_isp_plans_passive_filter,floor_site_survey_research_floor,assigned_company_site_survey_research_floor,scope_work_inside_plans,company_name_cable,contact_name_cable,contact_number_cable,contact_email_cable,company_name_tenant,contact_name_tenant,contact_number_tenant,contact_email_tenant,company_name_property,contact_name_property,contact_number_property,contact_email_property,attach_existin_file,new_building,general_information_id ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$company_survey."','".$contact_survey."','".$company_isp_eng_plans_site_survey."','".$company_eng_isp_plans_no_survey."','".$company_site_survey_isp_as_built."','".$contact_site_survey_isp_as_built."','".$company_eng_isp_plans_isp_as_built."','".$company_site_survey_passive_filter_survey."','".$contact_site_survey_passive_filter_survey."','".$company_eng_isp_plans_passive_filter_survey."','".$floor_research_floor."','".$company_site_surve_research_floor."','".$scope_work_inside_plans."','".$company_cable_inside."','".$contact_name_cable_inside."','".$contact_number_cable_inside."','".$contact_email_cable_inside."','".$company_tenant_inside."','".$contact_name_tenant_inside."','".$contact_number_tenant_inside."','".$contact_email_tenant_inside."','".$company_property_inside."','".$contact_name_property_inside."','".$contact_number_property_inside."','".$contact_email_property_inside."','".$fileAttach."','".$new_building."','".$last_id."' ) ";	
			
		
		$resultado_inside_plan= mysqli_query($conexion,$consulta_inside_plan);
		
	}
	
	
	
	
	///////////////////////////////////////////////////////////////////////////////////////
	///////////////////  ESTE CODIGO PARA INSERTAR POLE PLAN  /////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////		
	
	
	if( isset($_POST['si_construction_pole']) || isset($_POST['gsp_field_pole'])  ){
		
		if($_POST['si_construction_pole']!=""){
			$si_construction_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['si_construction_pole']));
		}else{
			$si_construction_pole="";
			
		}
		
		if($_POST['gsp_field_pole']!=""){		
			$gsp_field_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['gsp_field_pole']));
		}else{
			$gsp_field_pole="";
		}
		
		
		
		if($_POST['license_proposed_pole']!=""){	
			$license_proposed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['license_proposed_pole']));
		}else{
			$license_proposed_pole="";
		}
		
		if($_POST['measure_height_pole']!=""){
		
			$measure_height_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['measure_height_pole']));
		}else{
			$measure_height_pole="";
		}
		if($_POST['license_forms_pole']!=""){
			$license_forms_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['license_forms_pole']));
		}else{
			$license_forms_pole="";
		}
		
		if($_POST['as_built_licensed_pole']!=""){			
			$as_built_licensed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['as_built_licensed_pole']));
		}else{
			$as_built_licensed_pole="";
		}
		if($_POST['gis_as_built_file_pole']!=""){
			$gis_as_built_file_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['gis_as_built_file_pole']));
		}else{
			$gis_as_built_file_pole="";
		}
		if($_POST['company_outside_pole']!=""){
			$company_outside_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_outside_pole']));
		}else{
			$company_outside_pole="";
		}
		if($_POST['contact_outside_pole']!=""){
			$contact_outside_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_outside_pole']));
		}else{
			$contact_outside_pole="";
		}
		if($_POST['underground_application']!=""){
			$underground_application= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['underground_application']));
		}else{
			$underground_application="";
		}
		if($_POST['company_application_needed']!=""){
			$company_application_needed= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_application_needed']));
		}else{
			$company_application_needed="";
		}
		if($_POST['contact_application_needed']!=""){
			$contact_application_needed= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_application_needed']));
		}else{
			$contact_application_needed="";
		}
		
		if($_POST['cust_cable_count']!=""){
			$cust_cable_count= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['cust_cable_count']));
		}else{
			$cust_cable_count="";
		}
		
		if($_POST['cust_loc_net']!=""){
			$cust_loc_net= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['cust_loc_net']));
		}else{
			$cust_loc_net="";
		}
		if($_POST['textarea_under_pole']!=""){
			$textarea_under_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_under_pole']));
		}else{
			$textarea_under_pole="";
		}
		if($_POST['task_request_number_pole']!=""){
			$task_request_number_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_pole']));
		}else{
			$task_request_number_pole="";
		}
		if($_POST['date_task_requested_pole']!=""){
			$date_task_requested_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_pole']));
		}else{
			$date_task_requested_pole="";
		}
		if($_POST['expected_return_date_pole']!=""){
			$expected_return_date_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_pole']));
		}else{
			$expected_return_date_pole="";
		}
		if($_POST['proposed_tmp_length_pole']!=""){
			$proposed_tmp_length_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['proposed_tmp_length_pole']));
		}else{
			$proposed_tmp_length_pole="";
		}
		
		if($_POST['highway_proposed_pole']!=""){
			$highway_proposed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['highway_proposed_pole']));
		}else{
			$highway_proposed_pole="";
		}
		
		if($_POST['from_proposed_pole']!=""){
			$from_proposed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['from_proposed_pole']));
		}else{
			$from_proposed_pole="";
		}
		if($_POST['to_proposed_pole']!=""){
			$to_proposed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_proposed_pole']));
		}else{
			$to_proposed_pole="";
		}
		if($_POST['scope_work_proposed_pole']!=""){
			$scope_work_proposed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['scope_work_proposed_pole']));
		}else{
			$scope_work_proposed_pole="";
		}
		if($_POST['task_request_number_pole_railroad']!=""){
			$task_request_number_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_pole_railroad']));
		}else{
			$task_request_number_pole_railroad="";
		}
		if($_POST['date_task_requested_pole_railroad']!=""){
			$date_task_requested_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_pole_railroad']));
		}else{
			$date_task_requested_pole_railroad="";
		}
		if($_POST['expected_return_date_pole_railroad']!=""){
			$expected_return_date_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_pole_railroad']));
		}else{
			$expected_return_date_pole_railroad="";
		}
		if($_POST['highway_proposed_pole_railroad']!=""){
			$highway_proposed_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['highway_proposed_pole_railroad']));
		}else{
			$highway_proposed_pole_railroad="";
		}
		if($_POST['from_proposed_pole_railroad']!=""){
			$from_proposed_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['from_proposed_pole_railroad']));
		}else{
			$from_proposed_pole_railroad="";
		}
		if($_POST['to_proposed_pole_railroad']!=""){
			$to_proposed_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_proposed_pole_railroad']));
		}else{
			$to_proposed_pole_railroad="";
		}
		if($_POST['scope_work_proposed_pole_railroad']!=""){
			$scope_work_proposed_pole_railroad= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['scope_work_proposed_pole_railroad']));
		}else{
			$scope_work_proposed_pole_railroad="";
		}
		if($_POST['company_cable_pole']!=""){
			$company_cable_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_cable_pole']));
		}else{
			$company_cable_pole="";
		}
		if($_POST['contact_name_cable_pole']!=""){
			$contact_name_cable_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_name_cable_pole']));
		}else{
			$contact_name_cable_pole="";
		}
		if($_POST['contact_number_cable_pole']!=""){
			$contact_number_cable_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_number_cable_pole']));
		}else{
			$contact_number_cable_pole="";
		}
		if($_POST['contact_email_cable_pole']!=""){
			$contact_email_cable_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_email_cable_pole']));
		}else{
			$contact_email_cable_pole="";
		}
		if($_POST['check_as_built_licensed_pole']!=""){
			$check_as_built_licensed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_as_built_licensed_pole']));
		}else{
			$check_as_built_licensed_pole="";
		}
		
		if($_POST['check_as_built_file_pole']!=""){
			$check_as_built_file_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_as_built_file_pole']));
		}else{
			$check_as_built_file_pole="";
		}
		if($_POST['from_aerial_route_pole']!=""){
			$from_aerial_route_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['from_aerial_route_pole']));
		}else{
			$from_aerial_route_pole="";
		}
		if($_POST['to_aerial_route_pole']!=""){
			$to_aerial_route_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_aerial_route_pole']));
		}else{
			$to_aerial_route_pole="";
		}
		if($_POST['length_aerial_route_pole']!=""){
			$length_aerial_route_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['length_aerial_route_pole']));
		}else{
			$length_aerial_route_pole="";
		}
		if($_POST['scope_work_proposed_pole_railroad_dos']!=""){
			$scope_work_proposed_pole_railroad_dos= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['scope_work_proposed_pole_railroad_dos']));
		}else{
			$scope_work_proposed_pole_railroad_dos="";
		}
		
		
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
					
			
		
		 $consulta_pole_plan="INSERT INTO pole_plans (service_number,general_information_id,construction_proposed_plans,gps_field_survey_pole,license_proposed_pole,measure_height_attached,license_forms_needed,as_built_licensed_pole_plans,gis_as_built_file_need,outsite_utility_company,outsite_utility_contact,outsite_underground_application,outsite_application_company,outsite_applicacion_contact,outsite_cust_cable,outsite_cust_tie_net,outsite_text_here,other_highway_task_request_number,other_highway_date_task,other_highway_expected_date,other_highway_proposed_tmp,other_highway_traffic,other_highway_from,other_highway_to,other_highway_scope,other_railroad_task_request_number,other_railroad_date_task,other_railroad_expected_date,other_railroad_crossing_proposed,other_railroad_from,other_railroad_to,other_railroad_scope,cable_company_name, cable_contact_name,cable_contact_number,cable_contact_email,as_built_licensed_pole,gis_as_built_file,as_built_from_pole,as_built_to_pole,proposed_aerial_pole,scope_work_pole,upload_red_line_page_pole  ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$si_construction_pole."','".$gsp_field_pole."','".$license_proposed_pole."','".$measure_height_pole."','".$license_forms_pole."','".$as_built_licensed_pole."','".$gis_as_built_file_pole."','".$company_outside_pole."','".$contact_outside_pole."','".$underground_application."','".$company_application_needed."','".$contact_application_needed."','".$cust_cable_count."','".$cust_loc_net."','".$textarea_under_pole."','".$task_request_number_pole."','".$date_task_requested_pole."','".$expected_return_date_pole."','".$proposed_tmp_length_pole."','".$highway_proposed_pole."','".$from_proposed_pole."','".$to_proposed_pole."','".$scope_work_proposed_pole."','".$task_request_number_pole_railroad."','".$date_task_requested_pole_railroad."','".$expected_return_date_pole_railroad."','".$highway_proposed_pole_railroad."','".$from_proposed_pole_railroad."','".$to_proposed_pole_railroad."','".$scope_work_proposed_pole_railroad."','".$company_cable_pole."','".$contact_name_cable_pole."','".$contact_number_cable_pole."','".$contact_email_cable_pole."','".$check_as_built_licensed_pole."','".$check_as_built_file_pole."','".$from_aerial_route_pole."','".$to_aerial_route_pole."','".$length_aerial_route_pole."','".$scope_work_proposed_pole_railroad_dos."','".$fileAttach_pole."') ";
		
		
		$resultado_pole= mysqli_query($conexion,$consulta_pole_plan) or die(mysqli_error($conexion));
		
		
	}
	
	
	///////////////////////////////////////////////////////////////////////////////////////
	/////////////////  ESTE CODIGO PARA INSERTAR UTILITY AB RECORD  ///////////////////////
	///////////////////////////////////////////////////////////////////////////////////////		
	
	if( isset($_POST['si_electric_plan_utility']) || isset($_POST['task_request_number_utility'])  ){

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


		
		$ruta_attach_utility = '../archivos/red_line_page_utility/'.basename($_FILES['redline_page_utility']['name']);
		$info_attach_utility = pathinfo($ruta_attach_utility);
		$tipo_attach_utility = $info_attach_utility['extension'];
		
		$fileAttach_utility="red_line_page_utility_".$fecha.".".$tipo_attach_utility;  
		$uploaddir_temp_attach_utility="../archivos/red_line_page_utility/";
		$upload_temp_attach_utility = $uploaddir_temp_attach_utility."red_line_page_utility_".$fecha.".".$tipo_attach_utility;     

		/*
		$tamano= getimagesize(rtrim($_FILES['attach_file_inside']['tmp_name']));
		$ancho = $tamano[0];              
		$alto = $tamano[1];  
		*/
		move_uploaded_file($_FILES['redline_page_utility']['tmp_name'], $upload_temp_attach_utility);   
					
					
		///// SEGUNDO FILE DE UTILITY		
				
		$ruta_attach_utility2 = '../archivos/red_line_file_utility/'.basename($_FILES['redline_file_utility']['name']);
		$info_attach_utility2 = pathinfo($ruta_attach_utility2);
		$tipo_attach_utility2 = $info_attach_utility2['extension'];
		
		$fileAttach_utility2="red_line_file_utility_".$fecha.".".$tipo_attach_utility2;  
		$uploaddir_temp_attach_utility2="../archivos/red_line_file_utility/";
		$upload_temp_attach_utility2 = $uploaddir_temp_attach_utility2."red_line_file_utility_".$fecha.".".$tipo_attach_utility2;     

		/*
		$tamano= getimagesize(rtrim($_FILES['attach_file_inside']['tmp_name']));
		$ancho = $tamano[0];              
		$alto = $tamano[1];  
		*/
		move_uploaded_file($_FILES['redline_file_utility']['tmp_name'], $upload_temp_attach_utility2);   
							
		
		$consulta_utility_plan="INSERT INTO utility_plans(service_number,general_information_id,task_request_number_utility,company_utility,path_length_utility,see_attached_map_utility,from_electric_utility,to_electric_utility,scope_word_electric_utility,task_request_number_telephone,company_utility_telephone,path_length_utility_telephone,see_attached_map_telephone,from_utility_telephone,to_utility_telephone,scope_work_telephone,task_request_number_private,company_utility_private,path_length_private,see_attached_map_private,from_utility_private,to_utility_private,scope_work_private,task_request_number_all_utility,company_all_utility,path_lenth_all_utility,see_attached_map_all_utility,from_all_utility,to_all_utility,scope_work_all_utility,task_request_number_find_utility,path_lenth_find_utility,find_aerial_utility,find_underground_utility,elec_find_utility,tel_find_utility,private_find_utility,see_attached_redline_map_utility,from_find_utility,to_find_utility,scope_work_find_utility,redline_page_utility,redline_file_utility ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_utility."','".$company_utility."','".$path_length_utility."','".$check_attached_map_electric_utility."','".$form_utility."','".$to_utility."','".$textarea_scope_utility."','".$task_request_number_telephone_utility."','".$company_telephone_utility."','".$path_length_telephone_utility."','".$check_attached_map_telephone_utility."','".$form_telephone_utility."','".$to_telephone_utility."','".$textarea_scope_telephone_utility."','".$task_request_number_private_plan_utility."','".$company_private_plan_utility."','".$path_length_private_plan_utility."','".$check_attached_map_private_utility."','".$form_private_plan_utility."','".$to_private_plan_utility."','".$textarea_scope_private_plan_utility."','".$task_request_number_all_plan_utility."','".$company_all_plan_utility."','".$path_length_all_plan_utility."','".$check_attached_map_all_utility."','".$form_all_plan_utility."','".$to_all_plan_utility."','".$textarea_scope_all_plan_utility."','".$task_request_number_find_plan_utility."','".$path_length_find_plan_utility."','".$check_find_aerial_path."','".$check_find_underground_path."','".$check_elec_path."','".$check_tel_path."','".$check_private_path."','".$check_attached_path."','".$form_find_plan_utility."','".$to_find_plan_utility."','".$textarea_scope_find_plan_utility."','".$fileAttach_utility."','".$fileAttach_utility2."' )  ";
		
		$resultado_utility_plan= mysqli_query($conexion,$consulta_utility_plan) or die(mysqli_error($conexion));


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
		
		$consulta_manhole="INSERT INTO manhole_plan(service_number,general_information_id,task_request_number_electric_manhole,date_task_request_electric_manhole,expected_date_electric_manhole,mh_option_electric_manhole,company_electric_manhole,prop_fiber_electric_manhole,path_length_electric_manhole,from_electric_manhole,to_electric_manhole,scope_work_electric_manhole,task_request_number_telephone_manhole,date_task_request_telephone_manhole,expected_date_telephone_manhole,mh_option_telephone_manhole,company_telephone_manhole,prop_fiber_telephone_manhole,path_length_telephone_manhole,from_telephone_manhole,to_telephone_manhole,scope_work_telephone_manhole,task_request_number_private_manhole,date_task_request_private_manhole,expected_date_private_manhole,mh_option_private_manhole,company_private_manhole,prop_fiber_private_manhole,path_length_private_manhole,from_private_manhole,to_private_manhole,scope_work_private_manhole,task_request_number_outsite_manhole,date_task_request_outsite_manhole,expected_date_outsite_manhole,company_outsite_manhole,contact_outsite_manhole,company_underground_manhole,contact_underground_manhole,cust_cable_count_underground_manhole,cust_tie_loc_underground_manhole,scope_work_underground_manhole,company_aerial_manhole,contact_aerial_manhole,cust_cable_count_aerial_manhole,cust_tie_loc_aerial_manhole,scope_work_aerial_manhole,breakout_application_task_manhole,look_survey_manhole,final_butterfly_manhole,preliminary_proposed_manhole,gis_as_built_manhole,butterfly_proposed_manhole,outsite_utility_application_manhole,butterfly_as_built_manhole,red_line_page_manhole,red_line_file_manhole) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$task_request_number_manhole."','".$date_task_requested_manhole."','".$expected_return_date_manhole."','".$mh_option_manhole."','".$company_manhole."','".$prop_fiber_manhole."','".$path_length_manhole."','".$form_manhole."','".$to_manhole."','".$textarea_scope_manhole."','".$task_request_number_telephone_manhole."','".$date_task_requested_telephone_manhole."','".$expected_return_date_telephone_manhole."','".$mh_option_telephone_manhole."','".$company_telephone_manhole."','".$prop_fiber_telephone_manhole."','".$path_length_telephone_manhole."','".$form_telephone_manhole."','".$to_telephone_manhole."','".$textarea_scope_telephone_manhole."','".$task_request_number_private_manhole."','".$date_task_requested_private_manhole."','".$expected_return_date_private_manhole."','".$mh_option_private_manhole."','".$company_private_manhole."','".$prop_fiber_private_manhole."','".$path_length_private_manhole."','".$form_private_manhole."','".$to_private_manhole."','".$textarea_scope_private_manhole."','".$task_request_number_outside_manhole."','".$date_task_requested_outside_manhole."','".$expected_return_date_outside_manhole."','".$company_outside_manhole."','".$contact_outside_manhole."','".$company_underground_manhole."','".$contact_underground_manhole."','".$cust_cable_count_manhole."','".$cust_tie_loc_to_net_manhole."','".$textarea_scope_underground_manhole."','".$company_aerial_manhole."','".$contact_aerial_manhole."','".$cust_cable_count_aerial_manhole."','".$cust_tie_loc_to_net_aerial_manhole."','".$textarea_scope_aerial_manhole."','".$si_breakout_manhole."','".$si_look_out_field_manhole."','".$si_final_butterfly_manhole."','".$si_preliminary_proposed_manhole."','".$si_gis_as_built_file_manhole."','".$si_butterfly_details_manhole."','".$si_outside_utility_manhole."','".$si_butterfly_as_build_details_manhole."','".$fileAttach_manhole."','".$fileAttach_manhole2."' )  ";
		
		$resultado_manhole=mysqli_query($conexion,$consulta_manhole) or die(mysqli_error($conexion));
		
		

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
		
		if(isset($_POST['check_proposed_uno_civil']) ) {
		
			$check_proposed_uno_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_proposed_uno_civil']));
		}else{
			$check_proposed_uno_civil="";
			
		}
		
		$company_proposed_uno_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_proposed_uno_civil']));
		
		if(isset($_POST['check_proposed_dos_civil']) ) {
		
			$check_proposed_dos_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_proposed_dos_civil']));
		}else{
			$check_proposed_dos_civil="";
			
		}
		
		$company_proposed_dos_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_proposed_dos_civil']));
		
		if(isset($_POST['check_proposed_tres_civil']) ) {
		
			$check_proposed_tres_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_proposed_tres_civil']));
		}else{
			
			$check_proposed_tres_civil="";
		}
		$company_proposed_tres_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_proposed_tres_civil']));
		
		if(isset($_POST['check_proposed_cuatro_civil']) ) {
			$check_proposed_cuatro_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_proposed_cuatro_civil']));
		}else{
			$check_proposed_cuatro_civil="";
			
		}
		
		$text_micro_trench= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['text_micro_trench']));
		$company_proposed_cuatro_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_proposed_cuatro_civil']));
		$textarea_scope_installation_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['textarea_scope_installation_civil']));
		$task_request_number_telephone_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['task_request_number_telephone_civil']));
		$date_task_requested_telephone_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_task_requested_telephone_civil']));
		$expected_return_date_telephone_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['expected_return_date_telephone_civil']));
		
		if(isset($_POST['muni_civil']) ) {
			$muni_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['muni_civil']));
		}else{
			$muni_civil="";
		}
		if(isset($_POST['dcr_civil']) ) {
			$dcr_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['dcr_civil']));
		}else{
			$dcr_civil="";
			
		}
		if(isset($_POST['nh_dot_civil']) ) {
			$nh_dot_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['nh_dot_civil']));
		}else{
			$nh_dot_civil="";
			
		}
		if(isset($_POST['ct_dot']) ) {
			$ct_dot= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['ct_dot']));
		}else{
			
			$ct_dot="";
		}
		if(isset($_POST['highway_civil']) ) {
			$highway_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['highway_civil']));
		}else{
			$highway_civil="";
			
		}
		if(isset($_POST['mass_dot_civil']) ) {
			$mass_dot_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['mass_dot_civil']));
		}else{
			$mass_dot_civil="";
			
		}
		if(isset($_POST['me_dot_civil']) ) {
			$me_dot_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['me_dot_civil']));
		}else{
			$me_dot_civil="";
			
		}
		if(isset($_POST['ny_dot_civil']) ) {
			$ny_dot_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['ny_dot_civil']));
		}else{
			$ny_dot_civil="";
			
		}
		if(isset($_POST['railroad_civil']) ) {
			$railroad_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['railroad_civil']));
		}else{
			$railroad_civil="";
			
		}
		if(isset($_POST['ri_dot_civil']) ) {
			$ri_dot_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['ri_dot_civil']));
		}else{
			$ri_dot_civil="";
		}
		if(isset($_POST['vi_dot_civil']) ) {
			$vi_dot_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['vi_dot_civil']));
		}else{
			$vi_dot_civil="";
			
		}
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
		
		$consulta_civil="INSERT INTO civil_plans(service_number,general_information_id,proposed_plan_tmp_civil,as_built_plan_civil,total_station_civil,print_a_b_mylar_civil,deliver_mylar_civil,proposed_route_civil,from_civil,to_civil,scope_work_civil,check_uno_trench_detail_civil,company_uno_trench_detail_civil,check_dos_trench_detail_civil,company_dos_trench_detail_civil,check_tres_trench_detail_civil,company_tres_trench_detail_civil,micro_trench_detail_civil,text_micro_trench_detail_civil,company_micro_trench_detail_civil,installations_notes_civil,task_request_permit_civil,date_task_request_permit_civil,expected_return_permit_civil,muni_permit_civil,dcr_permit_civil,nh_dot_permit_civil,ct_dot_permit_civil,highway_permit_civil,mass_dot_permit_civil,me_dot_permit_civil,ny_dot_permit_civil,railroad_permit_civil,ri_dot_permit_civil,vi_dot_permit_civil,scope_work_permit_civil,assigned_company_permit_civil,task_request_mwra_civil,date_task_request_mwra_civil,expected_return_mwra_civil,proposed_length_mwra_civil,existing_profile_mwra_civil,from_mwra_civil,to_mwra_civil,scope_work_mwra_civil,task_request_railroad_civil,date_task_request_railroad_civil,expected_return_railroad_civil,crossing_proposed_railroad_civil,from_railroad_civil,to_railroad_civil,scope_work_railroad_civil,task_request_highway_civil,date_task_request_highway_civil,expected_return_highway_civil,traffic_proposed_highway_civil,from_highway_civil,to_highway_civil,scope_work_highway_civil,red_line_page_civil,red_line_file_civil ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id."','".$si_civil_proposed_tmp_civil."','".$si_as_built_civil."','".$si_total_station_civil."','".$si_print_milar_paper_civil."','".$si_deliver_mylar_plans_civil."','".$proposed_route_length_civil."','".$from_civil."','".$to_civil."','".$textarea_scope_proposed_civil."','".$check_proposed_uno_civil."','".$company_proposed_uno_civil."','".$check_proposed_dos_civil."','".$company_proposed_dos_civil."','".$check_proposed_tres_civil."','".$company_proposed_tres_civil."','".$check_proposed_cuatro_civil."','".$text_micro_trench."','".$company_proposed_cuatro_civil."','".$textarea_scope_installation_civil."','".$task_request_number_telephone_civil."','".$date_task_requested_telephone_civil."','".$expected_return_date_telephone_civil."','".$muni_civil."','".$dcr_civil."','".$nh_dot_civil."','".$ct_dot."','".$highway_civil."','".$mass_dot_civil."','".$me_dot_civil."','".$ny_dot_civil."','".$railroad_civil."','".$ri_dot_civil."','".$vi_dot_civil."','".$textarea_scope_permit_civil."','".$assigned_company_civil_permit_request_civil."','".$task_request_number_mwra_plans_civil."','".$date_task_requested_mwra_plans_civil."','".$expected_return_date_mwra_plans_civil."','".$proposed_length_mwra_plans_civil."','".$existing_utility_file_civil."','".$from_mwra_civil."','".$to_mwra_civil."','".$textarea_scope_mrwa_civil."','".$task_request_number_railroad_plans_civil."','".$date_task_requested_railroad_plans_civil."','".$expected_return_date_railroad_plans_civil."','".$railroad_plans_radio_civil."','".$from_railroad_civil."','".$to_railroad_civil."','".$textarea_scope_railroad_civil."','".$task_request_number_highway_traffic_civil."','".$date_task_requested_highway_traffic_civil."','".$expected_return_date_highway_traffic_civil."','".$highway_plans_radio_civil."','".$from_highway_traffic_civil."','".$to_highway_traffic_civil."','".$textarea_scope_highway_traffic_civil."','".$fileAttach_civil."','".$fileAttach_civil2."'   )  ";
		
		$resultado_civil=mysqli_query($conexion,$consulta_civil) or die(mysqli_error($conexion));
	
	

		
	
	
	
	
	
	}
	
	
	
///////////////////////////////////////////////////////////////////////////////////////////
/// AQUI SE COMPRUEBA QUE FUNCIONO Y LUEGO SE CIERRA LA CONEXION	
	
if(mysqli_affected_rows($conexion)){
    echo "<div class='ejecuta_insert' id='ejecuto' name='".$last_id."' ></div>";
}else{
   
}
mysqli_close($conexion);	
	
	
?>