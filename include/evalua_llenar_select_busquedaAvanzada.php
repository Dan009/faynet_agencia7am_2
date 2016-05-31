<?php 
include('../confi/conf.inc.php');

	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	
	if ($_POST['tipo'] == "state") {
		$consulta_cities = "SELECT * FROM city WHERE id ='".$_POST['id']."'";
		$resultado_cities = mysqli_query($conexion,$consulta_cities);

			while ($fila_cities = mysqli_fetch_array($resultado_cities)){

				echo " <option>".$fila_cities['city']."</option>";

			}


	}else if ($_POST['tipo'] == "city"){
		
		$consulta_streets = "SELECT street_number FROM general_information";
		$resultado_streets = mysqli_query($conexion,$consulta_streets);
		$array_calles = array();

			// SE PASAN LOS NOMBRES DE LAS CALLES A OTRO ARRAY
				while ($fila_streets = mysqli_fetch_array($resultado_streets)) {			
					array_push($array_calles, $fila_streets['street_number']);

				}	

			var_dump($array_calles);

			// AQUI SE ELIMINAN LOS NOMBRES DE LAS CALLES REPETIDAS
				$array_sin_repeticion = array_values(array_unique($array_calles));

		var_dump($array_sin_repeticion);

			for ($i=0; $i <= sizeof($array_sin_repeticion); $i++) { 
				if (!empty($array_sin_repeticion[$i])) {
					echo "<option>".$array_sin_repeticion[$i]."</option>";

				}
				
			}


		//var_dump($array_sin_repeticion);
				


	}

 ?>

