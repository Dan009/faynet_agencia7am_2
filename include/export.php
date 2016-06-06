<?php
	include("../confi/conf.inc.php");
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	/**
	 * More info about this script on: 
	 * http://stackoverflow.com/questions/11511511/how-to-save-a-png-image-server-side-from-a-base64-data-string
	 */

	$data = $_REQUEST['base64data']; 
	echo $data;
	$img = "canvas-".time().$_SESSION['id'].".png";
	$url = "../archivos/temp/".$img;

	$image = explode('base64,',$data); 
	file_put_contents($url, base64_decode($image[1]));
	
	$code = $_POST['codesend'];
	$type = $_POST['type'];
	
	$consulta_id="SELECT * FROM temp WHERE code='".$code."' AND type='".$type."' ORDER BY id DESC ";
 	$resultado_id= mysqli_query($conexion,$consulta_id);	
 	$fila_id= mysqli_fetch_array($resultado_id);

	$id = $fila_id['id'];
	
	$sql = "UPDATE temp SET canvas='$img' WHERE id='$id'";
   	$result = mysqli_query($conexion,$sql);


	
?>