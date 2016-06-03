<?php 
include("../confi/conf.inc.php");
$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

		echo "dsfsdf";

	/*if (isset($_POST['id_information'])) {

	  $consulta_imagen="SELECT * FROM temp WHERE code='".$_POST['id_information']."' AND type='".$_POST['type']."' ORDER BY id DESC LIMIT 1,1";
	  $resultado_imagen= mysqli_query($conexion,$consulta_imagen);	
	  $fila_imagen= mysqli_fetch_array($resultado_imagen);

	  	var_dump($resultado_imagen);

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

				if(isset($fila_imagen['type'])){
					echo '<input type="hidden" name="type_plan" id="type_plan'.'" value="'.$type_plan.'"/>';
					
				} 
				
	}else{		

	  $consulta_imagen="SELECT * FROM temp WHERE code='".$_SESSION['time_code']."' ORDER BY id DESC ";
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

				if(isset($fila_imagen['type'])){
					echo '<input type="hidden" name="type_plan" id="type_plan'.'" value="'.$type_plan.'"/>';
					
				} 

	} /**/
	
?>