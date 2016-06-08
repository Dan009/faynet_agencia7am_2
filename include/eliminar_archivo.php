<?php
include("../confi/conf.inc.php");

if(isset($_POST['id']))
{
 $id = $_POST['id']; 
 //Seleccionando los nombres de los archivos a Eliminar
 $consulta_imagen="SELECT * FROM temp WHERE id='".$id."'";
 $resultado_imagen= mysqli_query($conexion,$consulta_imagen);
 $fila_imagen = mysqli_fetch_array($resultado_imagen);	
 
		$archivo = $fila_imagen['file'];
		$canvas = $fila_imagen['canvas'];
		
		if (isset($fila_imagen['file'])) {
			unlink("../archivos/temp/$archivo");
			unlink("../archivos/temp/$canvas");
			//DELETE DESDE LA BASE DE DATOS
 			$delete ="DELETE FROM temp WHERE id='".$id."'";
 			$query = mysqli_query($conexion,$delete);	
			
			echo 1;
		} else {
			echo 0;
		}
	}
?>
