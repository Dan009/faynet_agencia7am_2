<?php 
 
	include("../../confi/conf.inc.php");
	
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	$fecha=date('U');
	
	$type = $_POST['type_plan']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
	$code = $_POST['code_plan']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
	
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
		
		$check_as_built_licensed_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_as_built_licensed_pole']));
		$check_as_built_file_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['check_as_built_file_pole']));
		$from_aerial_route_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['from_aerial_route_pole']));
		$to_aerial_route_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['to_aerial_route_pole']));
		$length_aerial_route_pole= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['length_aerial_route_pole']));
		$scope_work_proposed_pole_railroad_dos= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['scope_work_proposed_pole_railroad_dos']));
		
		//CONTRACTOR CABLE VALUE
		
		 $company_cable= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_cable']));
		 $contact_name_cable= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_name_cable']));
		 $contact_number_cable= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_number_cable']));
		 $contact_email_cable= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_email_cable']));
		 
		 //CONTRACTOR TENANT VALUE
		
		/* $company_tenant= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_tenant_inside']));
		 $contact_name_tenant= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_name_tenant_inside']));
		 $contact_number_tenant= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_number_tenant_inside']));
		 $contact_email_tenant= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_email_tenant_inside']));*/
		 
		 //CONTRACTOR PROPERTY VALUE
		 
		/* $company_property= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_property_inside']));
		 $contact_name_property= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_name_property_inside']));
		 $contact_number_property= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_number_property_inside']));
		 $contact_email_property= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_email_property_inside']));*/
		
		include("save_img.php");
		
		if($_POST['pole_plan_task'] =="si"){	
			
		// PROPOSED POLE PLAN
		
		
		$consulta_request="INSERT INTO request (id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$_SESSION['time_code']."','proposed_pole_plan_task','".$fecha."','1','2','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		$last_id_request=mysqli_insert_id($conexion);
		
		 
		 $consulta_proposed_pole_plan="INSERT INTO proposed_pole_plan_task (service_number,id_request,construction_proposed_plans,gps_field_survey_pole,license_proposed_pole,measure_height_attached,license_forms_needed) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id_request."','".$_POST['construction_pole']."','".$_POST['gsp_field_pole']."','".$_POST['license_proposed_pole']."','".$_POST['measure_height_pole']."','".$_POST['license_forms_pole']."' )";		
		
		$resultado_proposed_pole= mysqli_query($conexion,$consulta_proposed_pole_plan) or die(mysqli_error($conexion));
		
		$type="proposed_pole_plan_task";
		$last_id = $last_id_request;
		include('../contractor_code.php');
		
		echo "PROPOSED POLE PLAN - OK"."<br/>";
		
		}
			
			
		if($_POST['as_built_pole']=="si"){	
			
		// AS-BUILT POLE PLAN
		$consulta_request="INSERT INTO request (id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$_SESSION['time_code']."','as_built_pole_plan_task','".$fecha."','1','2','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		$last_id_request=mysqli_insert_id($conexion);
		
		
		 $consulta_as_built_pole_plan="INSERT INTO as_built_pole_plan_task (service_number,id_request,as_built_licensed_pole_plans,gis_as_built_file_need) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$last_id_request."','".$as_built_licensed_pole."','".$gis_as_built_file_pole."')";		
		
		$resultado_as_built_pole_plan= mysqli_query($conexion,$consulta_as_built_pole_plan) or die(mysqli_error($conexion));
		
		$type="as_built_pole_plan_task";
		$last_id = $last_id_request;
		include('../contractor_code.php');
		
		echo "AS-BUILT POLE PLAN - OK"."<br/>";
			}
		
		// OUTSIDE UTILITY POLE PLAN	
		
		if($_POST['si_outside_utility_task']=="si"){
		
		$consulta_outsite_utility_pole_plan_task="INSERT INTO outsite_utility_pole_plan_task(service_number,general_information_id,outsite_utility_company,outsite_utility_contact,outsite_underground_application,	outsite_application_company,outsite_applicacion_contact,outsite_cust_cable,outsite_cust_tie_net,outsite_text_here,outsite_aerial_application, file_id) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$company_outside_pole."','".$contact_outside_pole."','".$underground_application."','".$company_application_needed."','".$contact_application_needed."','".$cust_cable_count."','".$cust_loc_net."','".$textarea_under_pole."','".$_POST['aerial_application']."', '".$last_id_file."')";		
		
		$resultado_outsite_utility_pole_plan_task= mysqli_query($conexion,$consulta_outsite_utility_pole_plan_task) or die(mysqli_error($conexion));
		$last_id_outsite_utility_pole_plan_task=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$last_id_outsite_utility_pole_plan_task."','outsite_utility_pole_plan_task','".$fecha."','1','".$company_outside_pole."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		$type="outsite_utility_pole_plan_task";
		include('../contractor_code.php');		
		
		echo "OUTSIDE UTILITY POLE PLAN - OK"."<br/>";
		}
		
		if($_POST['si_hightway_traffic_pole']=="si"){
		
		// highway_traffic  POLE PLAN
		 $consulta_highway_traffic_pole_plan="INSERT INTO highway_traffic_pole_plan(service_number,general_information_id,other_highway_task_request_number,other_highway_date_task,other_highway_expected_date,other_highway_proposed_tmp,other_highway_traffic,other_highway_engineering_plans_pole,other_highway_from,other_highway_to,other_highway_scope, file_id) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_pole."','".$date_task_requested_pole."','".$expected_return_date_pole."','".$proposed_tmp_length_pole."','".$highway_proposed_pole."','".$task_engineering_plans_pole."','".$from_proposed_pole."','".$to_proposed_pole."','".$scope_work_proposed_pole."', '".$last_id_file."')";		
		
		$resultado_highway_traffic_pole_plan= mysqli_query($conexion,$consulta_highway_traffic_pole_plan) or die(mysqli_error($conexion));
		$last_id_highway_traffic_pole_plan=mysqli_insert_id($conexion);

		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$last_id_highway_traffic_pole_plan."','highway_traffic_pole_plan','".$fecha."','1','2','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		$type="highway_traffic_pole_plan";
		include('../contractor_code.php');	
		echo "highway_traffic POLE PLAN - OK"."<br/>";	
		}
		
			
		if($_POST['si_railroad_pole']=="si"){
			
		 //railroad_crossing_pole_plans
		 $consulta_railroad_crossing_pole_plans="INSERT INTO railroad_crossing_pole_plans(service_number,general_information_id,other_railroad_task_request_number,other_railroad_date_task,other_railroad_expected_date,other_railroad_crossing_proposed,other_railroad_from,other_railroad_to,other_railroad_scope, engineering_plans_pole_railroad, file_id) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_pole_railroad."','".$date_task_requested_pole_railroad."','".$expected_return_date_pole_railroad."','".$highway_proposed_pole_railroad."','".$from_proposed_pole_railroad."','".$to_proposed_pole_railroad."','".$scope_work_proposed_pole_railroad."','".$engineering_plans_pole_railroad."', '".$last_id_file."' )  ";		
		
		$resultado_railroad_crossing_pole_plans= mysqli_query($conexion,$consulta_railroad_crossing_pole_plans) or die(mysqli_error($conexion));
		$last_id_railroad_crossing_pole_plans=mysqli_insert_id($conexion);	
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$last_id_railroad_crossing_pole_plans."','railroad_crossing_pole_plans','".$fecha."','1','2','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		$type="railroad_crossing_pole_plans";
		include('../contractor_code.php');	
		echo "railroad crossing POLE PLAN - OK"."<br/>";				
		
		}
		
	
	
?>