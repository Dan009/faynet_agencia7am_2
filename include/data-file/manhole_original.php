<?php 
	
	include("../../confi/conf.inc.php");
	$type = $_POST['type_plan']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
	$code = $_POST['code_plan']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
	
	///////////////////////////////////////////////////////////////////////////////////////
	/////////////////  ESTE CODIGO PARA INSERTAR MANHOLE PLAN   ///////////////////////
	///////////////////////////////////////////////////////////////////////////////////////	
	
	include("save_img.php");	
		
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
										
						
						
			if( $_POST['si_breakout_manhole'] =="si"){

		/////// AQUI SE HACE EL INSERT  PARA MANHOLE BREAKOUT
		
		if( $_POST['si_look_out_field_manhole'] =="si" or $_POST['si_preliminary_proposed_manhole'] =="si" or $_POST['si_butterfly_details_manhole'] =="si" or $_POST['si_butterfly_as_build_details_manhole'] =="si" or $_POST['si_final_butterfly_manhole'] =="si" or $_POST['si_gis_as_built_file_manhole'] =="si" or $_POST['si_outside_utility_manhole'] =="si" ){
		
		$consulta_manhole="INSERT INTO breakout_manhole (service_number,general_information_id,look_survey_manhole,final_butterfly_manhole,preliminary_proposed_manhole,gis_as_built_manhole,butterfly_proposed_manhole,outsite_utility_application_manhole,butterfly_as_built_manhole) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$si_look_out_field_manhole."','".$si_final_butterfly_manhole."','".$si_preliminary_proposed_manhole."','".$si_gis_as_built_file_manhole."','".$si_butterfly_details_manhole."','".$si_outside_utility_manhole."','".$si_butterfly_as_build_details_manhole."' )  ";
		
		$resultado_manhole=mysqli_query($conexion,$consulta_manhole) or die(mysqli_error($conexion));
		$last_id_manhole_plan=mysqli_insert_id($conexion);

		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_manhole_plan."','manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		echo "BREAKOUT APPLICATION TASK - OK"."<br/>";	
		}
			
			}
			
			if( $_POST['si_electric_proposed_manhole'] =="si" or $_POST['task_request_number_manhole'] !==""){
		
		//// ELECTRIC MANHOLE
		
		$consulta_electric_manhole="INSERT INTO electric_proposed_manhole_plan(service_number,general_information_id,task_request_number_electric_manhole,date_task_request_electric_manhole,expected_date_electric_manhole,mh_option_electric_manhole,company_electric_manhole,prop_fiber_electric_manhole,path_length_electric_manhole,from_electric_manhole,to_electric_manhole,scope_work_electric_manhole ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_manhole."','".$date_task_requested_manhole."','".$expected_return_date_manhole."','".$mh_option_manhole."','".$company_manhole."','".$prop_fiber_manhole."','".$path_length_manhole."','".$form_manhole."','".$to_manhole."','".$textarea_scope_manhole."' )  ";
		
		$resultado_electric_manhole=mysqli_query($conexion,$consulta_electric_manhole) or die(mysqli_error($conexion));
		$last_id_electric_proposed_manhole_plan=mysqli_insert_id($conexion);

		$consulta_request="INSERT INTO request (id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_electric_proposed_manhole_plan."','electric_proposed_manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		echo "ELECTRIC MANHOLE - OK"."<br/>";			
			
			}
			
			if( $_POST['si_telephone_proposed_manhole'] =="si" or $_POST['task_request_number_telephone_manhole'] !==""){
		
		//// TELEPHONE MANHOLE
		$consulta_telephone_manhole="INSERT INTO telephone_proposed_manhole_plan (service_number,general_information_id,task_request_number_telephone_manhole,date_task_request_telephone_manhole,expected_date_telephone_manhole,mh_option_telephone_manhole,company_telephone_manhole,prop_fiber_telephone_manhole,path_length_telephone_manhole,from_telephone_manhole,to_telephone_manhole,scope_work_telephone_manhole ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_telephone_manhole."','".$date_task_requested_telephone_manhole."','".$expected_return_date_telephone_manhole."','".$mh_option_telephone_manhole."','".$company_telephone_manhole."','".$prop_fiber_telephone_manhole."','".$path_length_telephone_manhole."','".$form_telephone_manhole."','".$to_telephone_manhole."','".$textarea_scope_telephone_manhole."' )  ";
		
		$resultado_telephone_manhole=mysqli_query($conexion,$consulta_telephone_manhole) or die(mysqli_error($conexion));
		$last_id_telephone_proposed_manhole_plan=mysqli_insert_id($conexion);
	
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_telephone_proposed_manhole_plan."','telephone_proposed_manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);		
		
		echo "TELEPHONE MANHOLE - OK"."<br/>";
		
			}
		
		
		//// PRIVATE MANHOLE
		if( $_POST['si_private_proposed_manhole'] =="si" or $_POST['task_request_number_private_manhole'] !==""){
			
		$consulta_private_manhole="INSERT INTO private_proposed_manhole_plan (service_number,general_information_id,task_request_number_private_manhole,date_task_request_private_manhole,expected_date_private_manhole,mh_option_private_manhole,company_private_manhole,prop_fiber_private_manhole,path_length_private_manhole,from_private_manhole,to_private_manhole,scope_work_private_manhole ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_private_manhole."','".$date_task_requested_private_manhole."','".$expected_return_date_private_manhole."','".$mh_option_private_manhole."','".$company_private_manhole."','".$prop_fiber_private_manhole."','".$path_length_private_manhole."','".$form_private_manhole."','".$to_private_manhole."','".$textarea_scope_private_manhole."' ) ";
		
		$resultado_private_manhole=mysqli_query($conexion,$consulta_private_manhole) or die(mysqli_error($conexion));
		$last_id_private_proposed_manhole_plan=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_private_proposed_manhole_plan."','private_proposed_manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);		
		
		echo "PRIVATE MANHOLE - OK"."<br/>";
		}
		
		
		//// OUTSIDE MANHOLE
		if( $_POST['si_outside_proposed_manhole'] =="si" and $_POST['task_request_number_outside_manhole'] !==""){
			
		$consulta_outside_manhole="INSERT INTO outsite_utility_manhole_plan (service_number,general_information_id,task_request_number_outsite_manhole,date_task_request_outsite_manhole,expected_date_outsite_manhole,company_outsite_manhole,contact_outsite_manhole,breakout_application_task_manhole ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_outside_manhole."','".$date_task_requested_outside_manhole."','".$expected_return_date_outside_manhole."','".$company_outside_manhole."','".$contact_outside_manhole."','".$si_breakout_manhole."' ) ";
		
		$resultado_outside_manhole=mysqli_query($conexion,$consulta_outside_manhole) or die(mysqli_error($conexion));
		$last_id_outsite_utility_manhole_plan=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_outsite_utility_manhole_plan."','outsite_utility_manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);			
		
		echo "OUTSIDE MANHOLE - OK"."<br/>";
		}
		
		
		//// UNDERGROUND OUTSIDE MANHOLE
		
		if( $_POST['si_outside_proposed_manhole'] =="si" and $_POST['task_request_number_outside_manhole'] !=="" and $_POST['si_underground_task_manhole']=="si"){
		$consulta_underground_outside_manhole="INSERT INTO underground_outsite_manhole_plan(service_number,general_information_id,company_underground_manhole,contact_underground_manhole,cust_cable_count_underground_manhole,cust_tie_loc_underground_manhole,scope_work_underground_manhole ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$company_underground_manhole."','".$contact_underground_manhole."','".$cust_cable_count_manhole."','".$cust_tie_loc_to_net_manhole."','".$textarea_scope_underground_manhole."' )";
		
		$resultado_underground_outside_manhole=mysqli_query($conexion,$consulta_underground_outside_manhole) or die(mysqli_error($conexion));
		$last_id_underground_outsite_manhole_plan=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_underground_outsite_manhole_plan."','underground_outsite_manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);		
		
		echo "UNDERGROUND OUTSIDE MANHOLE - OK"."<br/>";
		
		}
		

		//// AERIAL OUTSIDE MANHOLE
		if( $_POST['si_outside_proposed_manhole'] =="si" and $_POST['task_request_number_outside_manhole'] !=="" and $_POST['si_aerial_task_manhole']=="si"){
		$consulta_aerial_outside_manhole="INSERT INTO aerial_outsite_manhole_plan(service_number,general_information_id,company_aerial_manhole,contact_aerial_manhole,cust_cable_count_aerial_manhole,cust_tie_loc_aerial_manhole,scope_work_aerial_manhole ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$company_aerial_manhole."','".$contact_aerial_manhole."','".$cust_cable_count_aerial_manhole."','".$cust_tie_loc_to_net_aerial_manhole."','".$textarea_scope_aerial_manhole."'  )  ";
		
		$resultado_aerial_outside_manhole=mysqli_query($conexion,$consulta_aerial_outside_manhole) or die(mysqli_error($conexion));
		$last_id_aerial_outsite_manhole_plan=mysqli_insert_id($conexion);

		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_aerial_outsite_manhole_plan."','aerial_outsite_manhole_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);				
			
	echo "AERIAL OUTSIDE MANHOLE - OK"."<br/>";

	}
	
	
	


?>