<?php 
    include("../confi/conf.inc.php");
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	$fecha= date('U');

	if ($_POST['tipo'] == "APPROVE") {
		//MODIFICA EL ESTADO DEL REQUEST A APROBADO
			$update_request_query = "UPDATE request SET estatus_job = '2' WHERE id='".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_request']))."' ";
			
			$resultado_update_request = mysqli_query($conexion, $update_request_query) or die(mysqli_error($conexion));

			
		//MODIFICA Y INSERTA LOS PO Y DOC NUMBERS EN LA TABLA GENERAL INFORMATION
			$update_general_query = "UPDATE general_information SET doc_number = '".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['PONum']))."', po_number = '".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['DOCNum']))."' WHERE id = '".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_general_information']))."' ";

				$resultado_update_general = mysqli_query($conexion, $update_general_query) or die(mysqli_error($conexion));	

		//MODIFICA Y INSERTA EL COMENTARIO EN SU TABLA
				$hora = date("Y/m/d");

			$insert_comentario_query = "INSERT INTO comentarios (comentario,date,tipo,id_request,usuario_id) VALUES ('".$_POST['comentario']."','".$hora."','".$_POST['tipo']."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_request']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_SESSION['id']))."') ";

			$resultado_comentario_general = mysqli_query($conexion, $insert_comentario_query) or die(mysqli_error($conexion));	

				if (isset($resultado_update_request) && isset($resultado_update_general) && isset($resultado_comentario_general)) {
					echo "<div id='cotizado' class='ejecuta_cotizacion' ></div>";

				}else{
					echo "Problems updating the database";

				}

	}else if ($_POST['tipo'] == "DECLINE"){
		//MODIFICA EL ESTADO DEL REQUEST A DECLINADO
			$update_request_declinado = "UPDATE request SET estatus_job = '1' WHERE id='".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_request']))."' ";

			$resultado_update_declinado = mysqli_query($conexion, $update_request_declinado) or die(mysqli_error($conexion));

				$hora = date("Y/m/d");

				$insert_comentario_query = "INSERT INTO comentarios (comentario,date,tipo,id_request,usuario_id) VALUES ('".$_POST['comentario']."','".$hora."','".$_POST['tipo']."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_request']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_SESSION['id']))."') ";

				$resultado_comentario_general = mysqli_query($conexion, $insert_comentario_query) or die(mysqli_error($conexion));	

			
					if (isset($resultado_update_declinado)) {
						echo "<div id='cotizado' class='ejecuta_cotizacion' ></div>";

					}else{
						echo "Problemas evaluando la solicitud";

					}


	}


	mysqli_close($conexion);

 ?>