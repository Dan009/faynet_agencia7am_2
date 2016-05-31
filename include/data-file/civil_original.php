<?php 
 
	include("../../confi/conf.inc.php");
	
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	$fecha=date('U');
	
	$type = $_POST['type_plan']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
	$code = $_POST['code_plan']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
	
	
	///////////////////////////////////////////////////////////////////////////////////////
	/////////////////  ESTE CODIGO PARA INSERTAR CIVIL PLAN   ///////////////////////
	///////////////////////////////////////////////////////////////////////////////////////		
		include("save_img.php");
	
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
		$existing_utility_file_civil= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['existing_utility_profile']));
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
		
		if($_POST['si_civil_proposed_tmp_civil'] =="si" or $_POST['si_as_built_civil']=="si" or $_POST['si_total_station_civil']=="si" or $_POST['si_print_milar_paper_civil']=="si" or $_POST['si_deliver_mylar_plans_civil']=="si" or $_POST['proposed_route_length_civil']){
			
		$consulta_civil="INSERT INTO civil_plans(service_number,general_information_id,proposed_plan_tmp_civil,as_built_plan_civil,total_station_civil,print_a_b_mylar_civil,deliver_mylar_civil,proposed_route_civil,from_civil,to_civil,scope_work_civil,check_uno_trench_detail_civil,company_uno_trench_detail_civil,check_dos_trench_detail_civil,company_dos_trench_detail_civil,check_tres_trench_detail_civil,company_tres_trench_detail_civil,micro_trench_detail_civil,text_micro_trench_detail_civil,company_micro_trench_detail_civil,installations_notes_civil) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$si_civil_proposed_tmp_civil."','".$si_as_built_civil."','".$si_total_station_civil."','".$si_print_milar_paper_civil."','".$si_deliver_mylar_plans_civil."','".$proposed_route_length_civil."','".$from_civil."','".$to_civil."','".$textarea_scope_proposed_civil."','".$check_proposed_uno_civil."','".$company_proposed_uno_civil."','".$check_proposed_dos_civil."','".$company_proposed_dos_civil."','".$check_proposed_tres_civil."','".$company_proposed_tres_civil."','".$check_proposed_cuatro_civil."','".$text_micro_trench."','".$company_proposed_cuatro_civil."','".$textarea_scope_installation_civil."')  ";
		
		$resultado_civil=mysqli_query($conexion,$consulta_civil) or die(mysqli_error($conexion));
		$last_id_civil_plans=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_civil_plans."','civil_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		echo "CIVIL PLAN - OK"."<br/>";			
		
		}
		
		////// PERMIT CIVIL
		
		if($_POST['si_permit_request_manhole'] =="si" and $_POST['task_request_number_telephone_civil']){
		
		$consulta_permit_civil="INSERT INTO permit_request_civil_plans(service_number,general_information_id,task_request_permit_civil,date_task_request_permit_civil,expected_return_permit_civil,muni_permit_civil,dcr_permit_civil,nh_dot_permit_civil,ct_dot_permit_civil,highway_permit_civil,mass_dot_permit_civil,me_dot_permit_civil,ny_dot_permit_civil,railroad_permit_civil,ri_dot_permit_civil,vi_dot_permit_civil,scope_work_permit_civil,assigned_company_permit_civil ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_telephone_civil."','".$date_task_requested_telephone_civil."','".$expected_return_date_telephone_civil."','".$muni_civil."','".$dcr_civil."','".$nh_dot_civil."','".$ct_dot."','".$highway_civil."','".$mass_dot_civil."','".$me_dot_civil."','".$ny_dot_civil."','".$railroad_civil."','".$ri_dot_civil."','".$vi_dot_civil."','".$textarea_scope_permit_civil."','".$assigned_company_civil_permit_request_civil."' )  ";
		
		$resultado_permit_civil=mysqli_query($conexion,$consulta_permit_civil) or die(mysqli_error($conexion));
		$last_id_permit_request_civil_plans=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_permit_request_civil_plans."','permit_request_civil_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);				
		
		}
		
		////// MWRA CIVIL
		if($_POST['si_mwra_plans_civil'] =="si" and $_POST['task_request_number_mwra_plans_civil']!==""){
		$consulta_mwra_civil="INSERT INTO mwra_request_civil_plans(service_number,general_information_id,task_request_mwra_civil,date_task_request_mwra_civil,expected_return_mwra_civil,proposed_length_mwra_civil,existing_profile_mwra_civil,from_mwra_civil,to_mwra_civil,scope_work_mwra_civil, engineering_stamped_civil) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_mwra_plans_civil."','".$date_task_requested_mwra_plans_civil."','".$expected_return_date_mwra_plans_civil."','".$proposed_length_mwra_plans_civil."','".$existing_utility_file_civil."','".$from_mwra_civil."','".$to_mwra_civil."','".$textarea_scope_mrwa_civil."','".$_POST['engineering_stamped_civil']."' ) ";
		
		$resultado_mwra_civil=mysqli_query($conexion,$consulta_mwra_civil) or die(mysqli_error($conexion));
		$last_id_mwra_request_civil_plans=mysqli_insert_id($conexion);
	
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_mwra_request_civil_plans."','mwra_request_civil_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);			
		
		echo "MWRA CIVIL PLAN - OK"."<br/>";	
		
		}
		
		////// RAILROAD CIVIL
		if($_POST['si_railroad_plans_civil'] =="si" and $_POST['task_request_number_railroad_plans_civil']!==""){
		
		$consulta_railroad_civil="INSERT INTO railroad_request_civil_plans(service_number,general_information_id,task_request_railroad_civil,date_task_request_railroad_civil,expected_return_railroad_civil,crossing_proposed_railroad_civil,from_railroad_civil,to_railroad_civil,scope_work_railroad_civil, engineering_stamped_railroad_civil) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_railroad_plans_civil."','".$date_task_requested_railroad_plans_civil."','".$expected_return_date_railroad_plans_civil."','".$railroad_plans_radio_civil."','".$from_railroad_civil."','".$to_railroad_civil."','".$textarea_scope_railroad_civil."','".$_POST['engineering_stamped_railroad_civil']."' ) ";
		
		$resultado_railroad_civil=mysqli_query($conexion,$consulta_railroad_civil) or die(mysqli_error($conexion));
		$last_id_railroad_request_civil_plans=mysqli_insert_id($conexion);

		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_railroad_request_civil_plans."','railroad_request_civil_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);			
		
		echo "RAILROAD CIVIL PLAN - OK"."<br/>";
		
		}
		
		
		////// HIGHWAY CIVIL
		
		if($_POST['si_highway_traffic_civil'] =="si" and $_POST['task_request_number_highway_traffic_civil']!==""){
		
		$consulta_highway_civil="INSERT INTO highway_request_civil_plans(service_number,general_information_id,task_request_highway_civil,date_task_request_highway_civil,expected_return_highway_civil,traffic_proposed_highway_civil,from_highway_civil,to_highway_civil,scope_work_highway_civil, engineering_stamped_highway ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_highway_traffic_civil."','".$date_task_requested_highway_traffic_civil."','".$expected_return_date_highway_traffic_civil."','".$highway_plans_radio_civil."','".$from_highway_traffic_civil."','".$to_highway_traffic_civil."','".$textarea_scope_highway_traffic_civil."', '".$_POST['engineering_stamped_highway']."') ";
		
		$resultado_highway_civil=mysqli_query($conexion,$consulta_highway_civil) or die(mysqli_error($conexion));
		$last_id_highway_request_civil_plans=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_highway_request_civil_plans."','highway_request_civil_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);				
		
		echo "HIGHWAY CIVIL PLAN - OK"."<br/>";
		
	
		}
	
	
?>