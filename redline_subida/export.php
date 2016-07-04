<?php
include("../confi/conf.inc.php");
$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	/**
	 * More info about this script on: 
	 * http://stackoverflow.com/questions/11511511/how-to-save-a-png-image-server-side-from-a-base64-data-string
	 */
	$time = time();
    $nombre = "copy".$time.".png";
	$id_request = $_POST['id_request'];
	$type = $_POST['type'];
	$tap = $_POST['tap_n'];
	
	// SELECCIONAR LA IMAGEN DEL FONDO
	$consulta_imagen = "SELECT * FROM redline_file WHERE id_request='".$id_request."' AND type='".$type."' AND tap='".$tap."' order by id DESC" ;
	$resultado_imagen= mysqli_query($conexion,$consulta_imagen);
	$row = mysqli_fetch_array($resultado_imagen);
	
	
	$data = $_REQUEST['base64data']; 
	echo $data;
	$image = explode('base64,',$data); 
	file_put_contents($nombre, base64_decode($image[1])); 
	
	if($row == ""){
		
	$consulta_temp="INSERT INTO redline_file( id_request,file, type, tap) VALUES('".$id_request."', '".$nombre."', '".$type."', '".$tap."')";
	$resultado_temp= mysqli_query($conexion,$consulta_temp);
	
	}
	else{
		$update = "UPDATE redline_file SET file='".$nombre."' WHERE id_request='".$id_request."' AND tap='".$tap."'";
		$result= mysqli_query($conexion,$update);
		 //move_uploaded_file($archivo['tmp_name'], "redline_subida/$nombre");
		unlink($row['file']);
		 
		}
		
		


	
?>