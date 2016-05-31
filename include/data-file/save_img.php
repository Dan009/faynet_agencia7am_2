<?php 
	include("../../confi/conf.inc.php");

	//Para insertar varios archivos usar el ID del request y asignarlo a las imagenes 

		//MOVIENDO EL ARCHIVO TEMPORAL

	 $consulta_imagen="SELECT * FROM temp WHERE code='".$code."' AND type='".$type."' ";
	 $resultado_imagen= mysqli_query($conexion,$consulta_imagen);	
	 //$fila_imagen= mysqli_fetch_array($resultado_imagen);
	 
	while($fila_imagen= mysqli_fetch_array($resultado_imagen)){
	 
		if(isset($fila_imagen['file'])){
			 $tempfile = "../../archivos/temp/".$fila_imagen['file'];
			 $tofolder = "../../archivos/attach/".$fila_imagen['file'];
			 copy($tempfile, $tofolder);
			 unlink($tempfile);

			$consulta_uploaded="INSERT INTO uploaded_file (file, type, canvas, estado, code) VALUES('".$fila_imagen['file']."', '".$fila_imagen['type']."', '".$fila_imagen['canvas']."', '1', '".$code."' )";
			$resultado_uploaded= mysqli_query($conexion,$consulta_uploaded);
			$last_id_file = mysqli_insert_id($conexion);


			$tempfile = "../../archivos/temp/".$fila_imagen['canvas'];
			$tofolder = "../../archivos/canvas/".$fila_imagen['canvas'];
			copy($tempfile, $tofolder);
			unlink($tempfile); 

			 $delete ="DELETE FROM temp WHERE code='".$code."' AND type='".$type."'";
				 $query = mysqli_query($conexion,$delete);
			}
	}

?>