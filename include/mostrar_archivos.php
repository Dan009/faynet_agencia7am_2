<?php
include("../confi/conf.inc.php");

$type = $_POST['type']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
$code = $_POST['code']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN

	 $consulta_imagen="SELECT * FROM temp WHERE type='".$type."' AND code='".$code."'  ORDER BY id DESC ";
	 $resultado_imagen= mysqli_query($conexion,$consulta_imagen);	
	 $fila_imagen= mysqli_fetch_array($resultado_imagen);
	 
		$id = $fila_imagen['id'];

			if(isset($fila_imagen['id'])){

				 echo "<div class='row'>".$fila_imagen['original_name']." <a href='javascript:void(0);' class='eliminar_archivo' id='$id'>Eliminar</a></div>";
				 //echo "<div>".$code."</div>";

			}
 


?>
