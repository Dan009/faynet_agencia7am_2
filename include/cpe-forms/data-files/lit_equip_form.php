<?php 
	include("../../../confi/conf.inc.php");
	
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	$type = $_POST['form_type']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
	$code = $_POST['TxtId_information']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN	

		var_dump($_POST);


?>