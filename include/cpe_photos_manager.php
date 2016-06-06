<?php 
include("../confi/conf.inc.php");
$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	//echo $code = $_POST['code'];
	//echo $type = $_POST['type'];

	// REALIZAR EL CODIGO QUE ESTA EN SUBIR_ARCHIVO.PHP
		if ($_POST['tipo_ejecucion'] == "subir_archivo" && $_POST['cantidad_ejecucion'] <= 1) {
				
			if (isset($_FILES['archivo'])) {
				$archivo = $_FILES['archivo'];
			    $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
				$time = time();
			    $nombre = "file-"."$time.$extension";
				$code = $_POST['code'];
				$type = $_POST['type'];
				$id_information = $_POST['id_information'];
				
				$consulta_temp="INSERT INTO temp(file, type, code, original_name) VALUES('".$nombre."', '".$type."', '".$id_information."', '".$archivo['name']."')";
				$resultado_temp= mysqli_query($conexion,$consulta_temp);
				
				    if (move_uploaded_file($archivo['tmp_name'], "../archivos/temp/$nombre")) {
				     
						
				    } else {
				        echo 1;

				    }
				

			}

	// REALIZAR EL CODIGO QUE ESTA SELECT_TEMP.PHP
		}else if($_POST['tipo_ejecucion'] == "select_image"){

			$consulta_imagen="SELECT file,type FROM temp WHERE code='".$_POST['id_information']."' AND type='".$_POST['type']."' ORDER BY id DESC LIMIT 1";
			$resultado_imagen= mysqli_query($conexion,$consulta_imagen);	
			$fila_imagen= mysqli_fetch_array($resultado_imagen);

		  	$imagen_file = $fila_imagen['file'];
		  	$type_plan = $fila_imagen['type'];
		  	$file = "../archivos/temp/".$imagen_file;  /// Dirección de la imagen
		 
		  	$imagen = getimagesize($file);  //Sacamos la información
		  	$ancho = $imagen[0];            //Ancho
		  	$alto = $imagen[1];             //Alto
	 
	  		//echo "Archivo:".$fila_imagen['file']."<br>";	
	  		//echo "Codigo: ".$_SESSION['time_code']."<br>";
	  		//echo "Ancho: $ancho<br>";
	  		//echo "Alto: $alto";
	  
			  echo "<style>

				.color-well-color{
						display:none}
				
				.literally{
				height:$alto"."px !important;
				width:$ancho"."px !important;}
				
				#canvas{
					background:url(archivos/temp/$imagen_file) no-repeat;
					}

			  </style>";

			//		if(isset($fila_imagen['type'])){
			//			echo '<input type="hidden" name="type_plan" id="type_plan'.'" value="'.$type_plan.'"/>';
						
			//		} 
			  
	// BUSCAR LA IMAGEN QUE SE SOLICITA
		}else if($_POST['tipo_ejecucion'] == "select_picture"){

			$consulta_imagen="SELECT file FROM temp WHERE code='".$_POST['id_information']."' AND type='".$_POST['type']."' ORDER BY id DESC LIMIT 1";
			$resultado_imagen= mysqli_query($conexion,$consulta_imagen);	
			$fila_imagen= mysqli_fetch_array($resultado_imagen);

				echo $fila_imagen['file'];

	// BUSCAR LA IMAGEN QUE SE SOLICITA
		}else if($_POST['tipo_ejecucion'] == "select_canva"){

			$consulta_imagen="SELECT canvas FROM temp WHERE code='".$_POST['id_information']."' AND type='".$_POST['type']."' ORDER BY id DESC LIMIT 1";

			$resultado_imagen= mysqli_query($conexion,$consulta_imagen);	
			$fila_imagen= mysqli_fetch_array($resultado_imagen);

				echo $fila_imagen['canvas'];

		} /**/



 ?>
