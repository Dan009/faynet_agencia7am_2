<?php 
	include("../../confi/conf.inc.php");
	
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);


		var_dump($_POST);

		// VERIFICAR QUE ALGUNOS CAMPOS ESTEN LLENOS

			if (isset($_POST['txtRegion']) || isset($_POST['txtProyectManager']) || isset($_POST['txtContructionEngi']) ||
			isset($_POST['txtLatitude']) || isset($_POST['txtLongitude']) || isset($_POST['txtMunicipa']) || isset($_POST['totalFloor'])
			|| isset($_POST['txtFirstAMTime']) || isset($_POST['txtSecondAMTime']) || isset($_POST['txtFirstPMTime']) || isset($_POST['txtSecondPMTime']) || isset($_POST['txtDayWorking']) || isset($_POST['code_building_picture']) || isset($_POST['form_type']) || isset($_POST['TxtId_information']) || isset($_POST['TxtId_request'])) {
				
			}

if(mysqli_affected_rows($conexion)){

   
}else{
   echo "BUILDING FORM Error<br>";

}

mysqli_close($conexion);	

?>