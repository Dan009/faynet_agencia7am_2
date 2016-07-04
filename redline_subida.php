<?php
/*if (isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
	$time = time();
    $nombre = "{$_POST['nombre_archivo']}_$time.$extension";
    if (move_uploaded_file($archivo['tmp_name'], "redline_subida/$nombre")) {
        echo "url(redline_subida/".$nombre." ) no-repeat";
    } else {
        echo 0;
    }
}*/
?>

<?php
include("confi/conf.inc.php");
$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	//echo $code = $_POST['code'];
	//echo $type = $_POST['type'];
	

if (isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
	$time = time();
    $nombre = "file-"."$time.$extension";
	$id_request = $_POST['id_request'];
	$type = $_POST['type'];
	$tap = $_POST['tap_n'];
	
	// SELECCIONAR LA IMAGEN DEL FONDO
	$consulta_imagen = "SELECT * FROM redline_file WHERE id_request='".$id_request."' AND type='".$type."' AND tap='".$tap."' order by id DESC" ;
	$resultado_imagen= mysqli_query($conexion,$consulta_imagen);
	$row = mysqli_fetch_array($resultado_imagen);
	
	if($row == ""){
	
	$consulta_temp="INSERT INTO redline_file( id_request,file, type, tap) VALUES('".$id_request."', '".$nombre."', '".$type."', '".$tap."')";
	$resultado_temp= mysqli_query($conexion,$consulta_temp);
	//echo $last_id_temp=mysqli_insert_id($conexion);
	
	/*// SELECCIONAR LA IMAGEN DEL FONDO
	$consulta_imagen = "SELECT * FROM redline_file WHERE id_request='".$id_request."' AND type='".$type."' AND tap='".$tap."'";
	$resultado_temp= mysqli_query($conexion,$consulta_temp);
	$row = mysqli_fetch_array($resultado_temp);*/
	//echo "url(redline_subida/".$nombre." ) no-repeat";
	
	
    if (move_uploaded_file($archivo['tmp_name'], "redline_subida/$nombre")) {
     
		
    } 
	
	}
	
	else{
		$update = "UPDATE redline_file SET file='".$nombre."' WHERE id_request='".$id_request."' AND tap='".$tap."'";
		$result= mysqli_query($conexion,$update);
		 move_uploaded_file($archivo['tmp_name'], "redline_subida/$nombre");
		 unlink("redline_subida/".$row['file']);
		 
		}
	
}



?>