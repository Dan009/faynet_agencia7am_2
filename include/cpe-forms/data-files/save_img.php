<?php 
	include("../../confi/conf.inc.php");

	//Para insertar varios archivos usar el ID del request y asignarlo a las imagenes 

		//MOVIENDO EL ARCHIVO TEMPORAL

	 $consulta_imagen="SELECT * FROM temp WHERE code='".$code."' AND type='".$type."' ";
	 $resultado_imagen= mysqli_query($conexion,$consulta_imagen);	
	 //$fila_imagen= mysqli_fetch_array($resultado_imagen);
	 
	while($fila_imagen= mysqli_fetch_array($resultado_imagen)){
	 
		if(isset($fila_imagen['file'])){
			 $tempfile = "../../../archivos/temp/".$fila_imagen['file'];
			 $tofolder = "../../../archivos/attach/".$fila_imagen['file'];

			 copy($tempfile, $tofolder);
			 unlink($tempfile);

			 	$consulta_existe_registro = "SELECT file FROM temp WHERE code='$code' AND type='$type' ORDER BY id DESC LIMIT 1";

				$resultado_existe_registro = mysqli_query($conexion,$consulta_existe_registro);

				$fila_existe_registro = mysqli_fetch_array($resultado_existe_registro);

					if (empty($fila_existe_registro)) {
						
						$consulta_uploaded="INSERT INTO uploaded_file (file, type, canvas, estado, code) VALUES('".$fila_imagen['file']."', '".$fila_imagen['type']."', '".$fila_imagen['canvas']."', '1', '".$code."' )";
						$resultado_uploaded= mysqli_query($conexion,$consulta_uploaded);
						

					}else{
						$consulta_uploaded="UPDATE  uploaded_file SET file='".$fila_imagen['file']."',canvas='".$fila_imagen['canvas']."' WHERE code='".$_POST['id_information']."' AND type='".$_POST['type']."'";

						$resultado_uploaded= mysqli_query($conexion,$consulta_uploaded);

					}


			$tempfile = "../../../archivos/temp/".$fila_imagen['canvas'];
			$tofolder = "../../../archivos/canvas/".$fila_imagen['canvas'];

			copy($tempfile, $tofolder);
			unlink($tempfile); 

			 $delete ="DELETE FROM temp WHERE code='".$code."' AND type='".$type."'";
				 $query = mysqli_query($conexion,$delete);
			}
	}

?>