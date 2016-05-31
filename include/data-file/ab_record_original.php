<?php 
		
		include("../../confi/conf.inc.php");
		///////////////////////////////////////////////////////////////////////////////////////
		/////////////////  ESTE CODIGO PARA INSERTAR UTILITY AB RECORD  ///////////////////////
		///////////////////////////////////////////////////////////////////////////////////////	
		
			
		$type = $_POST['type_plan']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
		$code = $_POST['code_plan']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN

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

		
		//INCLUIR CODIGO QUE GUARDA LAS IMAGENES
		include("save_img.php");
		

		// ELECTRIC PLAN REQUEST
		if( $_POST['si_electric_plan_utility']=="si" and $_POST['task_request_number_utility']!==""){
		
		$consulta_electric_utility_plan="INSERT INTO electric_request_utility_plans(service_number,general_information_id,task_request_number_utility,company_utility,path_length_utility,see_attached_map_utility,from_electric_utility,to_electric_utility,scope_word_electric_utility ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_utility."','".$company_utility."','".$path_length_utility."','".$check_attached_map_electric_utility."','".$form_utility."','".$to_utility."','".$textarea_scope_utility."' )";
		
		$resultado_electric_utility_plan= mysqli_query($conexion,$consulta_electric_utility_plan) or die(mysqli_error($conexion));
		$last_id_electric_request_utility_plans=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_electric_request_utility_plans."','electric_request_utility_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		echo "ELECTRIC PLAN REQUEST<br>";
		
		}
		
		
		// TELEPHONE PLAN REQUEST
		if( $_POST['si_telephone_plan_utility']=="si" and $_POST['task_request_number_telephone_utility']!==""){
		$consulta_telephone_utility_plan="INSERT INTO telephone_request_utility_plans(service_number,general_information_id,task_request_number_telephone,company_utility_telephone,path_length_utility_telephone,see_attached_map_telephone,from_utility_telephone,to_utility_telephone,scope_work_telephone) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_telephone_utility."','".$company_telephone_utility."','".$path_length_telephone_utility."','".$check_attached_map_telephone_utility."','".$form_telephone_utility."','".$to_telephone_utility."','".$textarea_scope_telephone_utility."' )  ";
		
		$resultado_telephone_utility_plan= mysqli_query($conexion,$consulta_telephone_utility_plan) or die(mysqli_error($conexion));
		$last_id_telephone_request_utility_plans=mysqli_insert_id($conexion);

		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_telephone_request_utility_plans."','telephone_request_utility_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		echo "TELEPHONE PLAN REQUEST<br>";			
		}
		
		if( $_POST['si_private_plan_utility']=="si" and $_POST['task_request_number_private_plan_utility']!==""){
		
		// PRIVATE P. PLAN REQUEST
		$consulta_private_request_utility_plans="INSERT INTO private_request_utility_plans(service_number,general_information_id,task_request_number_private,company_utility_private,path_length_private,see_attached_map_private,from_utility_private,to_utility_private,scope_work_private ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_private_plan_utility."','".$company_private_plan_utility."','".$path_length_private_plan_utility."','".$check_attached_map_private_utility."','".$form_private_plan_utility."','".$to_private_plan_utility."','".$textarea_scope_private_plan_utility."' )   ";
		
		$resultado_private_request_utility_plans= mysqli_query($conexion,$consulta_private_request_utility_plans) or die(mysqli_error($conexion));
		$last_id_private_request_utility_plans=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_private_request_utility_plans."','private_request_utility_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		echo "PRIVATE P. PLAN REQUEST<br>";		
		}

		// ALL PLAN REQUEST
		if( $_POST['si_all_plan_utility']=="si" and $_POST['task_request_number_all_plan_utility']!==""){
		$consulta_all_request_utility_plans="INSERT INTO all_request_utility_plans(service_number,general_information_id,task_request_number_all_utility,company_all_utility,path_lenth_all_utility,see_attached_map_all_utility,from_all_utility,to_all_utility,scope_work_all_utility ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_all_plan_utility."','".$company_all_plan_utility."','".$path_length_all_plan_utility."','".$check_attached_map_all_utility."','".$form_all_plan_utility."','".$to_all_plan_utility."','".$textarea_scope_all_plan_utility."' )   ";
		
		$resultado_all_request_utility_plans= mysqli_query($conexion,$consulta_all_request_utility_plans) or die(mysqli_error($conexion));
		$last_id_all_request_utility_plans=mysqli_insert_id($conexion);
	
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_all_request_utility_plans."','all_request_utility_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);	
		
		echo "ALL UTILITY PLAN REQUEST<br>";
		
		}
		
		// FIND PLAN REQUEST
		if( $_POST['si_find_plan_utility']=="si" and $_POST['task_request_number_find_plan_utility']!==""){
		$consulta_find_request_utility_plans="INSERT INTO find_request_utility_plans(service_number,general_information_id,task_request_number_find_utility,path_lenth_find_utility,find_aerial_utility,find_underground_utility,elec_find_utility,tel_find_utility,private_find_utility,see_attached_redline_map_utility,from_find_utility,to_find_utility,scope_work_find_utility ) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$code."','".$task_request_number_find_plan_utility."','".$path_length_find_plan_utility."','".$check_find_aerial_path."','".$check_find_underground_path."','".$check_elec_path."','".$check_tel_path."','".$check_private_path."','".$check_attached_path."','".$form_find_plan_utility."','".$to_find_plan_utility."','".$textarea_scope_find_plan_utility."' )   ";
		
		$resultado_find_request_utility_plans= mysqli_query($conexion,$consulta_find_request_utility_plans) or die(mysqli_error($conexion));
		$last_id_find_request_utility_plans=mysqli_insert_id($conexion);
		
		$consulta_request="INSERT INTO request(id_request,tipo,fecha,estado,contratista_id, usuario_id) VALUES('".$last_id_find_request_utility_plans."','find_request_utility_plans','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
		$resultado_request= mysqli_query($conexion,$consulta_request);		
		
		echo "FIND PLAN REQUEST<br>";		
		
		}

    
    ?>