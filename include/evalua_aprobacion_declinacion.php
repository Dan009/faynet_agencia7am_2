<?php 
    include("../confi/conf.inc.php");
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	$fecha= date('U');


	if ($_POST['tipo'] == "APPROVE") {

		// MODIFICA EL ESTADO DEL REQUEST A APROBADO
			$update_request_query = "UPDATE request SET estatus_job = '2' WHERE id='".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_request']))."' ";
			
			$resultado_update_request = mysqli_query($conexion, $update_request_query) or die(mysqli_error($conexion));
			/* */

			
		// MODIFICA Y INSERTA LOS PO Y DOC NUMBERS EN LA TABLA GENERAL INFORMATION
			$update_general_query = "UPDATE general_information SET doc_number = '".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['PONum']))."', po_number = '".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['DOCNum']))."' WHERE id = '".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_general_information']))."' ";

				$resultado_update_general = mysqli_query($conexion, $update_general_query) or die(mysqli_error($conexion));/* 	*/

		
		// SUBIR Y INSERTAR LOS DATOS DEL PO DOCUMENT
			 if($_FILES['POPDF']['error'] != 4 ){
			 
					$ruta_attach = '../archivos/po_documents/'.basename($_FILES['POPDF']['name']);
					$info_attach = pathinfo($ruta_attach);
					$tipo_attach = $info_attach['extension'];
		
					$fileAttach="po_doc_".$fecha.".".$tipo_attach;  
					$uploaddir_temp_attach="../archivos/po_documents/";
					$upload_temp_attach = $uploaddir_temp_attach."po_doc_".$fecha.".".$tipo_attach;  

					$update_plan_podoc_pdf = "UPDATE general_information SET po_doc_title = '".$fileAttach."' WHERE id ="."'".$_POST['id_general_information']."'";

					 $resultado_update_plan_podoc_pdf = mysqli_query($conexion,$update_plan_podoc_pdf);

							if (isset($resultado_update_plan_podoc_pdf)) {
								move_uploaded_file($_FILES['POPDF']['tmp_name'], $upload_temp_attach);

							}  /* */		
				
				}


		// MODIFICA Y INSERTA EL COMENTARIO EN SU TABLA
				$hora = date("Y/m/d");

			$insert_comentario_query = "INSERT INTO comentarios (comentario,date,tipo,id_request,usuario_id) VALUES ('".$_POST['comentario']."','".$hora."','".$_POST['tipo']."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_request']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_SESSION['id']))."') ";

			$resultado_comentario_general = mysqli_query($conexion, $insert_comentario_query) or die(mysqli_error($conexion));	

				if (isset($resultado_update_request) && isset($resultado_update_general) && isset($resultado_comentario_general)) {
					echo "<div id='cotizado' class='ejecuta_cotizacion' ></div>";

				}else{
					echo "Problems updating the database";
					echo "<a href='javascript:history.back()'>Go back </a>";

				}/**/

	}else if ($_POST['tipo'] == "DECLINE"){
		// MODIFICA EL ESTADO DEL REQUEST A DECLINADO
			$update_request_declinado = "UPDATE request SET estatus_job = '1' WHERE id='".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_request']))."' ";

			$resultado_update_declinado = mysqli_query($conexion, $update_request_declinado) or die(mysqli_error($conexion));

				$hora = date("Y/m/d");

				$insert_comentario_query = "INSERT INTO comentarios (comentario,date,tipo,id_request,usuario_id) VALUES ('".$_POST['comentario']."','".$hora."','".$_POST['tipo']."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_request']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_SESSION['id']))."') ";

				$resultado_comentario_general = mysqli_query($conexion, $insert_comentario_query) or die(mysqli_error($conexion));	

			
					if (isset($resultado_update_declinado)) {
						echo "<div id='cotizado' class='ejecuta_cotizacion' ></div>";

					}else{
						echo "Problemas evaluando la solicitud";
						echo "<a href='javascript:history.back()'>Go back </a>";

					}


	}


	mysqli_close($conexion);

 ?>