<?php 

// CONSULTA PARA SABER CUANTOS REGISTROS EXISTEN 
	$consulta_resultados = "SELECT COUNT(id) FROM request";
	$resultado_resultados_query = mysqli_query($conexion,$consulta_resultados);
	$filas = mysqli_fetch_row($resultado_resultados_query);

// CONSEGUIMOS EL TOTAL
	 $total_registros = $filas[0]; 

// CANTIDAD DE REGISTROS QUE DESEAMOS QUE SE MUESTREN
	$cantidad_mostrar = 10;
 
// CONSEGUIR LA CANTIDAD DE PAGINAS DE LA ULTIMA
	$ultima = ceil($total_registros/$cantidad_mostrar);

// ASEGURARNOS PARA QUE $ULTIMA NO SEA MENOR QUE 1
	if ($ultima < 1) {
		$ultima = 1;

	}

// ASIGNAR A LA VARIABLE $numero_paginas
	$numero_paginas = 1; 

// CONSEGUIR NUMERO DE PAGINAS DESDE LA BARRA DE DIR., SI ESTA PRESENTE, SINO SERA IGUAL A 1

	/**/ if (isset($_GET['page'])) {
		
		$numero_paginas = preg_replace('#[^0-9]#', '', $_GET['page']);

	} 

// ASEGURARNOS QUE EL NUMERO DE PAGINAS NO SEA DEBAJO DE 1, O MAS QUE $ULTIMA
	if ($numero_paginas < 1) {
		$numero_paginas = 1;

	}else if($numero_paginas > $ultima){
		$numero_paginas = $ultima;

	}

// ESTO ASIGNA EL RANGO DE REGISTROS A LA CONSULTA PARA EL NUMERO DE PAGINAS QUE SE PIDIERON
	 $limite = 'LIMIT ' . ($numero_paginas-1)*$cantidad_mostrar .','.$cantidad_mostrar; 

// ESTO CONSIGUE LA CANTIDAD DE RESULTADOS
	$sql = "SELECT general_information.kick_off_date,general_information.street_number,general_information.customer_name,general_information.time_code, general_information.company, general_information.service_number, REQUEST.id_request,REQUEST.tipo, REQUEST.estado, REQUEST.id, REQUEST.estatus_job FROM REQUEST INNER JOIN general_information ON REQUEST.id_request = general_information.time_code $consulta $limite"; 


// ESTO MUESTRA LAS CANTIDADES DE LAS PAGINAS
	$texto_cantidad = "Page <b>$numero_paginas</b> of <b>$ultima</b>"; 

//Controles de paginacion
	$controlesPaginacion = '';

// Para cancelar el boton
	if ($ultima != 1) {
		// DESAPARECER EL SIGUIENTE

		if ($numero_paginas > 1) {
			 	$previo = $numero_paginas - 1;
			 	$controlesPaginacion .= ' &nbsp;<a class="previuos" href="'.$_SERVER['PHP_SELF'].'?page='.$previo.'">Previous</a> &nbsp;&nbsp;';

			 		for ($i= $numero_paginas - 4; $i < $numero_paginas; $i++) { 
			 			if ($i > 0) {
			 				$controlesPaginacion .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a> ';


			 			}

			 		}

			 } 

		


			// GENERA LA PAGINA DONDE SE ENCUENTRA LA PERSONA
				$controlesPaginacion .= '<a class="active">'.$numero_paginas.'</a>  ';

			// HACER PARA QUE SE GENEREN LOS LINKS QUE SIGUEN
				for ($i = $numero_paginas + 1; $i <= $ultima; $i++) { 
					$controlesPaginacion .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a>  ';

			 			if ($i >= $numero_paginas + 4) {
			 				break;


			 			}

			 	}

			// CONTROLES PARA SIGUENTE

				if ($numero_paginas != $ultima) {
				 	$siguiente = $numero_paginas + 1;
				 	$controlesPaginacion .= ' &nbsp;&nbsp;<a class="next" href="'.$_SERVER['PHP_SELF'].'?page='.$siguiente.'">Next</a> ';

				 } 	/**/

	} 

?>