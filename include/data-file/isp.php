<?php 
 
	include("../../confi/conf.inc.php");
	
	//$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	$fecha=date('U');
	
	///////////////////////////////////////////////////////////////////////////////////////
	///////////////////  ESTE CODIGO PARA INSERTAR INSIDE PLAN  ///////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////	
	
	$type = $_POST['type_plan']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
	$code = $_POST['code_plan']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
			
	
	
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
			 $new_building= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['new_building']));
			 
			 //CONTRACTOR CABLE VALUE
				 $company_cable= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_cable']));
				 $contact_name_cable= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_name_cable']));
				 $contact_number_cable= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_number_cable']));
				 $contact_email_cable= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_email_cable']));
			 
			 //CONTRACTOR TENANT VALUE
				 $company_tenant= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_tenant']));
				 $contact_name_tenant= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_name_tenant']));
				 $contact_number_tenant= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_number_tenant']));
				 $contact_email_tenant= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_email_tenant']));
			 
			 //CONTRACTOR PROPERTY VALUE
				 $company_property= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['company_property']));
				 $contact_name_property= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_name_property']));
				 $contact_number_property= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_number_property']));
				 $contact_email_property= mysqli_real_escape_string($conexion,htmlspecialchars($_POST['contact_email_property']));
			 

			
			if(isset($_POST['si_sp_eng_plans']) =="si" || isset($_POST['si_isp_as_built']) =="si" || isset($_POST['si_passive_filter']) =="si" || isset($_POST['si_research_floor']) =="si" || isset($_POST['si_survey']) =="si"){
			
				 //validando para subir
					if(isset($_POST['active_survey'])  || isset($_POST['active_isp_eng_plans']) || isset($_POST['active_eng_isp_plans'])  || isset($_POST['active_site_survey_as_built']) || isset($_POST['active_eng_isp_plans_as_built']) || isset($_POST['active_site_survey_as_built']) || isset($_POST['active_eng_isp_plans_as_built']) || isset($_POST['active_site_survey_passive_filter']) || isset($_POST['active_eng_isp_plans_passive_filter']) || isset($_POST['active_site_survey_research_floor']) ){
				
				
							//INCLUIR CODIGO QUE GUARDA LAS IMAGENES
								include("save_img.php");
				
				
					}
						
			}
			
			
			
		if($_POST['si_sp_eng_plans'] =="si" or $_POST['si_isp_as_built'] =="si" or $_POST['si_passive_filter'] =="si" or $_POST['si_research_floor'] =="si"){
			
			// INSERTANDO EN REQUEST
			$consulta_request="INSERT INTO request (id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$_SESSION['time_code']."','inside_plan','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."') ";
			$resultado_request= mysqli_query($conexion,$consulta_request);
			
			$last_id_request=mysqli_insert_id($conexion);
			
			//Inserta el inside plan
			
				
			$consulta_inside_plan="INSERT INTO inside_plans (service_number,assigned_company_eng_isp_plans_no_survey,assigned_company_site_survey_isp_as_built,contact_site_survey_isp_as_built,assigned_company_eng_isp_plans_isp_as_built,assigned_company_site_survey_passive_filter,contact_site_survey_passive_filter,assigned_company_eng_isp_plans_passive_filter,floor_site_survey_research_floor,assigned_company_site_survey_research_floor,scope_work_inside_plans,new_building,id_request) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".$company_eng_isp_plans_no_survey."','".$company_site_survey_isp_as_built."','".$contact_site_survey_isp_as_built."','".$company_eng_isp_plans_isp_as_built."','".$company_site_survey_passive_filter_survey."','".$contact_site_survey_passive_filter_survey."','".$company_eng_isp_plans_passive_filter_survey."','".$floor_research_floor."','".$company_site_surve_research_floor."','".$scope_work_inside_plans."','".$new_building."','".$last_id_request."') ";	
		
			$resultado_inside_plan= mysqli_query($conexion,$consulta_inside_plan);
			
			$type="inside_plan";
			$last_id = $last_id_request;
			include('../contractor_code.php');
			
			echo "ISP Ok <br>";

		}
			
			
			//ESTE CODIGO INSERTA EL BUILDING SITE SURVEY
			if(isset($_POST['si_survey']) =="si") {

					if(isset($_POST['active_survey'])) {
						
						if(isset($_POST['company_survey'])) {
							
							//Insertando el Request
							$consulta_request = "INSERT INTO request (id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$_SESSION['time_code']."','building_site_survey','".$fecha."','1','".$_POST['company_survey']."','".$_SESSION['id']."')";
							$resultado_request = mysqli_query($conexion,$consulta_request);
							$last_id_request = mysqli_insert_id($conexion);
							
							$consulta_site_survey = "INSERT INTO building_site_survey (id_request,site_survey_company,site_survey_contact) VALUES('".$last_id_request."','".$company_survey."','".$contact_survey."')";	
							$resultado_site_survey= mysqli_query($conexion,$consulta_site_survey);
							
							$type="building_site_survey";
							$last_id = $last_id_request;
							include('../contractor_code.php');
							
							echo "BUILDING SITE SURVEY Ok <br>";

						}  

						
					}	
					
						
						if(isset($_POST['active_isp_eng_plans'])) {
							if(isset($_POST['company_isp_eng_plans_site_survey'])) {
								
								$consulta_request="INSERT INTO request (id_request,tipo,fecha,estado, contratista_id, usuario_id) VALUES('".$_SESSION['time_code']."','building_site_survey','".$fecha."','1','".$_POST['company_isp_eng_plans_site_survey']."','".$_SESSION['id']."') ";
								$resultado_request= mysqli_query($conexion,$consulta_request);
								//$last_id=mysqli_insert_id($conexion);
								
								$consulta_site_survey = "UPDATE building_site_survey SET isp_eng_plans_company ='".$company_isp_eng_plans_site_survey."' WHERE id_request='".$last_id."'";	
								
								$resultado_site_survey= mysqli_query($conexion,$consulta_site_survey);
								
							//insertar archivo
							//$consulta_file="INSERT INTO uploaded_file (request_id,type,file,estado) VALUES('".$last_id."','building_site_survey','".$fecha."','1','".$_POST['company_isp_eng_plans_site_survey']."','".$_SESSION['id']."') ";
							//$resultado_request= mysqli_query($conexion,$consulta_request);
								
								$type="building_site_survey";	
								$last_id = mysqli_insert_id($conexion);
								include('../contractor_code.php');


						}
							
							
					}

		}
		
	}
	
	
	
	
	
	
	
///////////////////////////////////////////////////////////////////////////////////////////
/// AQUI SE COMPRUEBA QUE FUNCIONO Y LUEGO SE CIERRA LA CONEXION	
	
if(mysqli_affected_rows($conexion)){
   
}else{
   echo "ISP Error<br>";
}
mysqli_close($conexion);	
	
	
?>