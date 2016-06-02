<?php
include("../confi/conf.inc.php");
$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	//echo $code = $_POST['code'];
	//echo $type = $_POST['type'];
	

if (isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
	$time = time();
    $nombre = "file-"."$time.$extension";
	$code = $_POST['code'];
	$type = $_POST['type'];
	
	$consulta_temp="INSERT INTO temp(file, type, code, original_name) VALUES('".$nombre."', '".$type."', '".$code."', '".$archivo['name']."')";
	$resultado_temp= mysqli_query($conexion,$consulta_temp);
	//echo $last_id_temp=mysqli_insert_id($conexion);
	
    if (move_uploaded_file($archivo['tmp_name'], "../archivos/temp/$nombre")) {
     
		
    } else {
        echo 1;
    }
}

?>
