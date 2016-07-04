<?php
include("confi/conf.inc.php");
$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	$id_request = $_POST['id_request'];
	$type = $_POST['type'];
	$tap =$_POST['tap_n'];
	
//$directorio_escaneado = scandir('redline_subida');
// SELECCIONAR LA IMAGEN DEL FONDO
	$consulta_imagen = "SELECT * FROM redline_file WHERE id_request='".$id_request."' AND type='".$type."' AND tap='".$tap."' order by id DESC" ;
	$resultado_imagen= mysqli_query($conexion,$consulta_imagen);
	$row = mysqli_fetch_array($resultado_imagen);
	
	echo "url(redline_subida/".$row['file']." ) no-repeat";
	
/*$archivos = array();
foreach ($row as $item) {
    if ($item != '.' and $item != '..') {
        $archivos[] = $item;
    }
}
echo json_encode($archivos);*/
?>
