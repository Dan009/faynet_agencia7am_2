<?php 
	
    include("../confi/conf.inc.php");
	$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	
	$date = date('d-m-Y');

			//var_dump($_POST);

		if ($_POST['tipo'] == "disenador") {

			$insertar_diseñador = "INSERT INTO  designer (
									name_designer,
									password,
									estado,
									lastname,
									username,
									company,
									email,
									date_added
									)
									VALUES ('".$_POST['First_Name']."', '".md5($_POST["Password"])."', '1','".$_POST["Last_Name"]."','".$_POST["Username"]."','".$_POST['Company']."','".$_POST['Correo']."'  ,'".$date."')";

			$resultado_consulta = mysqli_query($conexion,$insertar_diseñador);

				if (isset($resultado_consulta)) {
					header("LOCATION: ../index.php");

				}/**/
		}else if ($_POST['tipo'] == "CONTRACTOR") {
			$insertar_contratista = "INSERT INTO usuarios (
									user_name,
									password,
									nombre,
									apellido,
									fecha,
									foto,
									email,
									estado,
									company
									)
									VALUES ('".$_POST['Username']."', '".md5($_POST["Password"])."','".$_POST["Company_Name"]."','contratista','".$date."','','".$_POST['Correo']."','3','')";

			$resultado_consulta = mysqli_query($conexion,$insertar_contratista);

				if (isset($resultado_consulta)) {
					header("LOCATION: ../index.php");

				}

		}else if ($_POST['tipo'] == "COMPANY") {
			$insertar_compania = "INSERT INTO  usuarios (
									user_name,
									password,
									nombre,
									apellido,
									fecha,
									foto,
									email,
									estado,
									company
									)
									VALUES ('".$_POST['Username']."', '".md5($_POST["Password"])."','".$_POST["Company_Name"]."','empresa','".$date."','','".$_POST['Correo']."','2','')";


			$resultado_consulta = mysqli_query($conexion,$insertar_compania);

						//var_dump($resultado_consulta);

			if (isset($resultado_consulta)) {
				header("LOCATION: ../index.php");

			}

		}else if ($_POST['tipo'] == "engineer") {
			$fecha = date('U');
			$full_name = $_POST['First_Name'].' '.$_POST['Last_Name'];

				$insertar_compania = "INSERT INTO engineering (
									engineering,
									fecha,
									estado,
									company
									)
									VALUES ('$full_name','$fecha','1','".$_POST['Company']."')";


				$resultado_consulta = mysqli_query($conexion,$insertar_compania);

							//var_dump($resultado_consulta);

					if (isset($resultado_consulta)) {
						header("LOCATION: ../index.php");

					}

		}

 ?>