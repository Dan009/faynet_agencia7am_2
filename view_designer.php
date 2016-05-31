<?php 
	include('include/head.php');
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	$consulta = "SELECT * FROM designer WHERE estado = '1'";
	$resultado = mysqli_query($conexion,$consulta);
	$rows = mysqli_num_rows($resultado);	

 ?>

<body>
    <?php include("include/menu.php"); ?>
	
    <div class="container_title_request">
    
        <div class="center_title_request"> 

			ACTIVE <span>  DESIGNERS </span>  

		</div>
    
    </div>	

	<div class="container_form">
		
		<div class="center_form">
		
			<?php  if(isset($_SESSION['id']) && $rows > 0 ){  ?>

			<div class="container_active_jobs">
				<div class="container_title_active_jobs"  >
					<div class="title_active_jobs" style="width: 81%; padding: 4px 0 3px 15px; text-align: left;  font-size: 15px;"> <div> FULL NAME </div> </div>
					<div class="title_active_jobs" > <div> </div> </div>

				</div>

				<!--  ESTO ES PARA DESPLEGAR EL CONTENIDO   -->
                
				<?php while($fila_designer= mysqli_fetch_array($resultado)){  ?>

					<div class="container_text_active_jobs" id="<?php echo $fila_principal['id']; ?>"  name="<?php if($_SESSION['estado'] ==3 ){ echo "ver_request";}else{echo "ver_cotizacion"; } ?>"  >
						<div class="content_active_jobs" style="width: 81%; padding: 4px 0 3px 15px; text-align: left;     font-size: 15px;"> <div> <?php echo $fila_designer['name_designer']." ".$fila_designer['lastname']; ?> </div> </div>

						<div class="content_active_jobs" > 
							<ul class="ul_menu">
	    						<li id="li_request" >MORE 
									<ul class="ul_desplegable" >
		                               <a href="job_search.php?id=<?php echo $fila_designer['designerid']; ?>"> 
		                                   <li class="open_request_assigned" id="<?php echo $fila_designer['designerid']; ?>"> Job Assigned </li>
		                                   
		                               </a>
		                        
	                        		</ul>     				
							
						 	</ul>    
						
						</div>

					</div>

				<?php }  ?> <!-- AQUI FIN DEL WHILE -->
				
			</div>
			
			<?php } ?>
			
		</div>
		
	</div> <!-- FIN DEL CONTAINER DE DISEÑADORES -->
    
  	  <?php include("include/footer.php"); ?>
		

		
<!--	ESTE ES LIGHTBOX -->
	<div class="fondo_list_job" >
		<div class="fancy_list_job" style="width: 961px;"></div>
	</div>
    
    <div class="exito_insert" >
		
		<div class="div_exito_insert" >
			<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/default.gif" class="loader_request" />
			<div class="text_exito_insert" > Successful  </div>
			
		</div>
		
	</div>	
         	

</body>
</html>








