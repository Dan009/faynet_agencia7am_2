<?php 
	include("../../confi/conf.inc.php");
	
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	$type = $_POST['form_type']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
	$code = $_POST['code_building_picture']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN	
		
			// VERIFICAR QUE ALGUNOS CAMPOS ESTEN LLENOS

				if (isset($_POST['txtRegion']) || isset($_POST['txtProyectManager']) || isset($_POST['txtContructionEngi']) ||
				isset($_POST['txtLatitude']) || isset($_POST['txtLongitude']) || isset($_POST['txtMunicipa']) || isset($_POST['totalFloor']) || isset($_POST['txtFirstAMTime']) || isset($_POST['txtSecondAMTime']) || isset($_POST['txtFirstPMTime']) ||isset($_POST['txtSecondPMTime']) || isset($_POST['txtDayWorking']) || isset($_POST['code_building_picture']) || isset($_POST['form_type']) || isset($_POST['TxtId_information']) || isset($_POST['TxtId_request'])) {

						/// INPUT VALUES
							$building_work_info = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtRegion']));
							$building_proyect_manager = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtProyectManager']));
							$building_latitute = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtLatitude']));
							$building_longitude = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtLongitude']));
							$building_Municipa = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtMunicipa']));
							$total_floors = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['totalFloor']));

								// AM TIME
									$firstAmTime = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtFirstAMTime']));
									$secondAmTime = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtSecondAMTime']));

								// PM TIME
									$firstPmTime = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtFirstPMTime']));
									$secondPmTime = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtSecondPMTime']));

							$working_days = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtDayWorking']));

							$building_picture_code = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['code_building_picture']));

							$building_picture_code = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['code_building_picture']));
							$id_information = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['TxtId_information']));
							$id_request = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['TxtId_request']));

						/// RADIO VALUES

								if ($_POST['type_service'] == 'no') {
									$service_type = "DARK";

								}else{
									$service_type = "LIGHT";

								}
									
									$multi_tenant_value = $_POST['if_multi_tenant'];
									$rent_value = $_POST['if_rent'];
									$floor_plan_value = $_POST['if_floor_plans'];
									$rise_management_value = $_POST['if_riser_management'];
									$filter_lit_value = $_POST['if_filter_LIT'];


						/// INSERTANDO LOS DATOS EN LA TABLA DE CPE_BUILDING

							$AMfullTime = $firstAmTime.":".$secondAmTime;
							$PMfullTime = $firstPmTime.":".$secondPmTime;

								var_dump($AMfullTime);
								
								$consulta_cpe_building = "INSERT INTO cpe_building_info (region,project_manager,latitude, longitude, municipality, multi_tenant_req, rent_required, floor_plan_req, total_floors, start_time_am, end_time_pm, riser_management_company_req, filter_lit_equip_req, working_days_week, building_photo_code, id_information, id_request,service_type) VALUES ('$building_work_info', '$building_proyect_manager', '$building_latitute', '$building_longitude', '$building_Municipa', '$total_floors', '$AMfullTime', '$PMfullTime', '$rise_management_value', '$filter_lit_value', '$working_days', '$building_picture_code', '$id_information', '$id_request','$service_type')";

								var_dump($_POST);
								var_dump($consulta_cpe_building);

									echo "BUILDING FORM Ok ! <br>";

						//INCLUIR CODIGO QUE GUARDA LAS IMAGENES
							//include("save_img.php");

				}

if(mysqli_affected_rows($conexion)){

   
}else{
   echo "BUILDING FORM Error<br>";

}

mysqli_close($conexion);	

?>