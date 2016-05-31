<?php 
	include("../confi/conf.inc.php");

	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

		$consulta = "SELECT id, tipo, estatus_job from request WHERE designerid = '".$_POST['id_designer']."' AND estatus_job = '2'";

		$resultado = mysqli_connect($consulta);

		$rows = mysqli_num_rows($conexion,$resultado);

		$filas_request_assigned = mysqli_fetch_array($resultado);

		var_dump($resultado);

 ?>
<div class="container_form">
		
	<div class="center_form">
		
		<?php if ($rows > 0) { ?>

			<div class="container_active_jobs">
				
				<div class="container_title_active_jobs">
					<div class="title_active_jobs" > <div> REQUEST #  </div> </div>
					<div class="title_active_jobs" > <div> PLAN REQUESTED </div> </div>
					<div class="title_active_jobs" > <div> JOB STATUS </div> </div>
				
				</div>
				<!--  ESTO ES PARA DESPLEGAR EL CONTENIDO   
					<?php while ($fila_request_assigned) {   ?>
						<div class="container_text_active_jobs" >
				            <div class="content_active_jobs" > <div> sdfnaskdf </div> </div>
				            <div class="content_active_jobs" > <div> sdfnaskdf </div> </div>
				            <div class="content_active_jobs" > <div> sdfnaskdf </div> </div>
				            <div class="content_active_jobs" > <div> sdfnaskdf </div> </div>

				        </div>

					<?php } ?> AQUI TERMINA EL WHILE -->
			

			</div>

		<?php }else{ ?>
			<h2> No request have been assigned to this designer</h2>
		
		<?php } ?>
	</div>
		
</div>