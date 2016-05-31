<?php 
	include('include/head.php');
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	
	if(!isset($_SESSION['admin'])){	
	
		if($_SESSION['estado']==3){	
			//MUESTRA LOS REQUEST PARA EL CONTRATISTA
			$consulta="SELECT * FROM request WHERE contratista_id='".$_SESSION['company']."' AND estado='1' AND estatus_job < '2' ";

		}else{
			//MUESTRA LOS REQUEST PARA EL CLIENTE	
			$consulta="SELECT * FROM request WHERE usuario_id='".$_SESSION['id']."' AND estado='1' AND estatus_job < '2'  ";	

		}
		
	}else{
		$consulta="SELECT * FROM request";		

	}

	$resultado= mysqli_query($conexion,$consulta);
	$rows= mysqli_num_rows($resultado);	


 ?>

<body>
    <?php include("include/menu.php"); ?>
	
    <div class="container_title_request">
    
        <div class="center_title_request"> 
			<?php 
				if(isset($_SESSION['id']) && $rows > 0 && !isset($_SESSION['admin']) ){ 
			
			?>
			Pending  <span>  Request </span>  
			<?php } ?>
			
			<?php 
				if(isset($_SESSION['admin'])){			
			?>
			Admin  <span> Login </span>  
			<?php } ?>
		</div>
    
    </div>	

	<div class="container_form">
		
		<div class="center_form">
		
			<?php 
				if(isset($_SESSION['id']) && $rows > 0 ){ 
			
			?>
			<div class="container_active_jobs">
				
				<div class="container_title_active_jobs"  >
				
					<div class="title_active_jobs" > <div> DATE  </div> </div>
					<div class="title_active_jobs" > <div> SERVICE # </div> </div>
					<div class="title_active_jobs" > <div>JOB LOCATION </div> </div>
					<div class="title_active_jobs" > <div><!-- STATUS  TYPE OF JOB REQUEST --> TYPE </div> </div>
					<div class="title_active_jobs" > <div>STATUS </div> </div>
					<div class="title_active_jobs" > <div>COMP. REQ. </div> </div>
					<div class="title_active_jobs" > <div> </div> </div>
					
					
					<!--
					<div class="title_active_jobs" > <div>LIGHTOWER ENGINEER </div> </div>
					<div class="title_active_jobs" > <div>GUL QUOTE </div> </div>
					<div class="title_active_jobs" > <div>LIGHTOWER'S DOC # </div> </div>
					<div class="title_active_jobs" > <div>LIGHTOWER'S PO # </div> </div>
					<div class="title_active_jobs" > <div>GUL INVOICE # </div> </div>
					<div class="title_active_jobs" > <div> COMMENTS </div> </div>
					-->
					
				</div>
				<!--  ESTO ES PARA DESPLEGAR EL CONTENIDO   -->
                
				<?php
					// while($fila= mysqli_fetch_array($resultado)){ 
					
					// 	$consulta_table="SELECT * FROM ".$fila['tipo']." WHERE id='".$fila['id_request']."' ";
					// 	$resultado_table= mysqli_query($conexion,$consulta_table);
					// 	$fila_table= mysqli_fetch_array($resultado_table);
						
					// 	$consulta_general="SELECT * FROM general_information WHERE time_code='".$fila_table['id_request']."'	";
					// 	$resultado_general= mysqli_query($conexion,$consulta_general);
					// 	$fila_general=mysqli_fetch_array($resultado_general);

						while($fila_principal= mysqli_fetch_array($resultado)){
							$consulta_general="SELECT * FROM general_information WHERE time_code='".$fila_principal['id_request']."'	";
							$resultado_general= mysqli_query($conexion,$consulta_general);
												
								while($fila_general= mysqli_fetch_array($resultado_general)){

				?>
				<div class="container_text_active_jobs" id="<?php echo $fila_principal['id']; ?>"  name="<?php if($_SESSION['estado'] ==3 ){ echo "ver_request";}else{echo "ver_cotizacion"; } ?>"  >
				
						<div class="content_active_jobs" > <div> <?php echo $fila_general['date_request_sent']; ?> </div> </div>
					<div class="content_active_jobs" > <div> <?php echo $fila_general['service_number']; ?> </div> </div>
					<div class="content_active_jobs"  > 
						<div>
							<?php
							//	echo $fila['street_number'];
								$consulta_city="SELECT * FROM city WHERE id='".$fila_general['city_id']."' ";
								$resultado_city= mysqli_query($conexion,$consulta_city);
								$fila_city=mysqli_fetch_array($resultado_city);
								//echo ", ".$fila_city['city'];
								
								$consulta_state="SELECT * FROM state WHERE id='".$fila_general['state_id']."' ";
								$resultado_state= mysqli_query($conexion,$consulta_state);
								$fila_state=mysqli_fetch_array($resultado_state);
								//echo ", ".$fila_city['state'];
								$text=$fila_general['street_number'].", ".$fila_city['city'].", ".$fila_state['state'];
								$tamano = strlen($fila_general['street_number'].", ".$fila_city['city'].", ".$fila_state['state']);
								if($tamano >=15){
									echo "<span title='$text'>".substr($text, 0, 15)."..."."</span>"; 
								}else{
									echo "<span title='$text'>".$text."</span>";
								} 
								
							?>
						</div> 
					</div>
					<div class="content_active_jobs" title="<?php echo $fila['name']; ?>" > 
						<div> 
							<?php 
								
								$text_name=$fila_principal['tipo'];
								$tamano_name = strlen($fila_principal['tipo']);
								if($tamano_name >=15){
									echo substr($text_name, 0, 15)."..."; 
								}else{
									echo $text_name;
								} 								
							?> 
						</div> 
					</div>
					<div class="content_active_jobs  <?php 
					$consulta_declinado = "SELECT * FROM request WHERE  id='".$fila_principal['id']."' AND id_request='".$fila_principal['id_request']."'  AND tipo='".$fila_principal['tipo']."' AND estatus_job='1' ";

					$resultado_declinado = mysqli_query($conexion,$consulta_declinado);
					$fila_resultado = mysqli_fetch_array($resultado_declinado);

						if (isset($fila_resultado)) {
							echo "declinado";

						}

				 ?>" > 
				 
					<div class="<?php 
							$consulta_declinado = "SELECT * FROM request WHERE  id='".$fila_principal['id']."' AND id_request='".$fila_principal['id_request']."'  AND tipo='".$fila_principal['tipo']."' AND estatus_job='1' ";

							$resultado_declinado = mysqli_query($conexion,$consulta_declinado);
							$fila_resultado = mysqli_fetch_array($resultado_declinado);

								if (isset($fila_resultado)) {
									echo "declinado";

								}

						 ?>">
							<?php 
								if($fila_principal['estatus_job']==0){
									$consulta_quoted = "SELECT id from cotizacion where id_request ='".$fila_principal['id']."'";
									$resultado_quoted = mysqli_query($conexion,$consulta_quoted);
								
										if (mysqli_fetch_array($resultado_quoted)) {
											echo "QUOTED";
										}else{
											echo "PENDING";									
										}
								}else if($fila_principal['estatus_job'] == 1){
										echo "DECLINED";	

								}
							
							?>
						</div>
					</div>
                    <?php 
					// COMPANY
						$consulta_company="SELECT * FROM company WHERE id='".$fila_general['company']."' ";
						$resultado_company= mysqli_query($conexion,$consulta_company);
						$fila_company= mysqli_fetch_array($resultado_company);
					
					?>
					<div class="content_active_jobs" > <div><?php echo $fila_company['nombre']; ?>  </div> </div>
					
					<div class="content_active_jobs" > 
							<ul class="ul_menu">
    						<li id="li_request" >MORE 
								<ul class="ul_desplegable" >
                                    <li class="open_detail_job" id="<?php echo $fila_principal['id_request'].".".$fila_principal['id']; ?>"  name="ver_request" title="<?php echo $fila_principal['tipo']; ?>">View Request</li>
                                    <?php if ($_SESSION['estado'] == 3 && $fila_principal['estatus_job'] >= 2) {  ?>
                                    	 <li class="open_designer" id="<?php echo $fila_general['id_request']; ?>"  name="<?php echo $fila['tipo']; ?>" >Designer</li> 
                                    	
                                    <?php  }?>
                        		 </ul>     				
						
					 	</ul>    
					
					</div>
					
				</div>
				<?php } } ?> <!-- AQUI -->
				
			</div>
			
			<?php } ?>
			
		</div>
		
	</div>
    
    <?php include("include/footer.php"); ?>
		

		<!--	ESTE ES LIGHTBOX -->
			<div class="fondo_list_job" >
				<div class="fancy_list_job" ></div>
			</div>
		    
		    <div class="exito_insert" >
				
				<div class="div_exito_insert" >
					<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/default.gif" class="loader_request" />
					<div class="text_exito_insert" > Successful  </div>
					
				</div>
				
			</div>	
            

	
	<div class="exito_insert" >
		
		<div class="div_exito_insert" >
			<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/default.gif" class="loader_request" />
			<div class="text_exito_insert" > Successful  </div>
			
		</div>
		
	</div>	
	

</body>
</html>









