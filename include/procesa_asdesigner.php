<?php 
    include("../confi/conf.inc.php");
	
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	$fecha= date('U');
	
	$consulta="UPDATE request SET designerid='".$_POST['designerid']."' WHERE id='".$_POST['id_request']."'";
	$result = mysqli_query($conexion,$consulta);
	
	if(mysqli_affected_rows($conexion)){
		//echo "<div id='cotizado' class='ejecuta_cotizacion' ></div>";
		header("LOCATION: ../job.php");
	}else{
		echo "<div id='no_cotizado' class='ejecuta_cotizacion' ></div>";

		mysqli_close($conexion);

	}
?>