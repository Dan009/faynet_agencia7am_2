<?php 
	include("../confi/conf.inc.php");
	$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	
	$fecha = date("U");

		if ($_POST['tipo_solicitud'] == "QUOTE" && $_POST['button_submit'] != "CHANGE") {
		
			$ruta_attach = '../archivos/cotizaciones/'.basename($_FILES['fileUploadInput']['name']);
			$info_attach = pathinfo($ruta_attach);
			$tipo_attach = $info_attach['extension'];

			$fileAttach="quote_".$fecha.".".$tipo_attach;  
			$uploaddir_temp_attach="../archivos/cotizaciones/";
			$upload_temp_attach = $uploaddir_temp_attach."quote_".$fecha.".".$tipo_attach;  


				$insertar_cotizacion = "INSERT INTO cotizacion (id_request,id_company,plan_quote,file_plan_quote,fecha,estado) VALUES ('".$_POST['id_request']."','".$_POST['id_company']."','".$_POST['inputQuoteValue']."','".$fileAttach."','".$fecha."','1');";

				$resultado_insertar_cotizacion = mysqli_query($conexion,$insertar_cotizacion);

					if (isset($resultado_insertar_cotizacion)) {
						move_uploaded_file($_FILES['fileUploadInput']['tmp_name'], $upload_temp_attach);  
						header("LOCATION: ../pending_request.php");

					}else{
						echo "Problems inserting the information <br />";
						echo "<a href='javascript:history.back()'>Go back </a>";

					}

		}else if ($_POST['tipo_solicitud'] == "INVOICE"){
			if ($_POST['button_submit'] == "CHANGE"){ /* MODIFICA EL INVOICE */

				$update_plan_invoice_value = "UPDATE factura SET plan_invoice = '".$_POST['inputQuoteValue']."' WHERE id_request = '".$_POST['id_request']."'";

				$resultado_update_plan_invoice_value = mysqli_query($conexion,$update_plan_invoice_value);

					if( $_FILES['fileUploadInput2']['error'] != 4 ){
						$ruta_attach = '../archivos/facturas/'.basename($_FILES['fileUploadInput2']['name']);
						$info_attach = pathinfo($ruta_attach);
						$tipo_attach = $info_attach['extension'];

						$fileAttach="invoice_".$fecha.".".$tipo_attach;  
						$uploaddir_temp_attach="../archivos/facturas/";
						$upload_temp_attach = $uploaddir_temp_attach."invoice_".$fecha.".".$tipo_attach;   

							$update_plan_invoice_pdf = "UPDATE factura SET file_plan_invoice = '".$fileAttach."' WHERE id_request = '".$_POST['id_request']."'";

							$resultado_update_plan_invoice_pdf = mysqli_query($conexion,$update_plan_invoice_pdf);

								if (isset($resultado_update_plan_invoice_pdf)) {
									move_uploaded_file($_FILES['fileUploadInput2']['tmp_name'], $upload_temp_attach);

								}   		
					
					}


						if (isset($resultado_update_plan_invoice_value)) {
							header("LOCATION: ../job.php");
							
						}else{
							echo "Problems updating the information <br />";
							echo "<a href='javascript:history.back()'>Go back </a>";

						}

			}else{ /* INSERTAR DE FORMA NORMAL */
		
				$ruta_attach = '../archivos/facturas/'.basename($_FILES['fileUploadInput']['name']);
				$info_attach = pathinfo($ruta_attach);
				$tipo_attach = $info_attach['extension'];

				$fileAttach="invoice_".$fecha.".".$tipo_attach;  
				$uploaddir_temp_attach="../archivos/facturas/";
				$upload_temp_attach = $uploaddir_temp_attach."invoice_".$fecha.".".$tipo_attach;  

					$insertar_factura = "INSERT INTO factura (id_request,id_company,plan_invoice,file_plan_invoice,fecha,estado) VALUES ('".$_POST['id_request']."','".$_POST['id_company']."','".$_POST['inputQuoteValue']."','".$fileAttach."','".$fecha."','1');";

					$resultado_insertar_factura = mysqli_query($conexion,$insertar_factura);

				
						if (isset($resultado_insertar_factura)) {
							move_uploaded_file($_FILES['fileUploadInput']['tmp_name'], $upload_temp_attach);  
							header("LOCATION: ../job.php");

						}else{
							echo "Problems inserting the information <br />";
							echo "<a href='javascript:history.back()'>Go back </a>";

						}

			}

		}else if ($_POST['button_submit'] == "CHANGE") {

			$update_plan_quote_value = "UPDATE cotizacion SET plan_quote = '".$_POST['inputQuoteValue']."' WHERE id_request = '".$_POST['id_request']."'";

			$resultado_update_plan_quote_value = mysqli_query($conexion,$update_plan_quote_value);

				if( $_FILES['fileUploadInput2']['error'] != 4 ){

					$ruta_attach = '../archivos/cotizaciones/'.basename($_FILES['fileUploadInput2']['name']);
					$info_attach = pathinfo($ruta_attach);
					$tipo_attach = $info_attach['extension'];
					
					$fileAttach="quote_".$fecha.".".$tipo_attach;  
					$uploaddir_temp_attach="../archivos/cotizaciones/";
					$upload_temp_attach = $uploaddir_temp_attach."quote_".$fecha.".".$tipo_attach;     

						$update_plan_quote_pdf = "UPDATE cotizacion SET file_plan_quote = '".$fileAttach."' WHERE id_request = '".$_POST['id_request']."'";

						$resultado_update_plan_quote_pdf = mysqli_query($conexion,$update_plan_quote_pdf);

							if (isset($resultado_update_plan_quote_pdf)) {
								move_uploaded_file($_FILES['fileUploadInput2']['tmp_name'], $upload_temp_attach);

							}   		
				
				}


					if (isset($resultado_update_plan_quote_value)) {
						header("LOCATION: ../pending_request.php");
						
					}else{
						echo "Problems updating the information <br />";
						echo "<a href='javascript:history.back()'>Go back </a>";

					}

		}	



 ?>