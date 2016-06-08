<?php 
	include('include/head.php');

	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

		$idsearch = $_GET['id'];
		
			if(isset($_GET['id'])){
				// CARGA LOS DATOS DEL DISEÑADOR
					$consulta_diseñador = "SELECT * FROM designer WHERE designerid = '".$_GET['id']."'";
					$resultado_diseñado = mysqli_query($conexion,$consulta_diseñador);
					$fila_diseñador = mysqli_fetch_array($resultado_diseñado);
							
				// CARGA LOS TRABAJOS DEL DISEÑADOR
					$consulta_trabajos = "SELECT id, id_request,FROM_UNIXTIME(fecha,'%d-%m-%Y') as fecha,tipo, estatus_job from request WHERE designerid = '".$_GET['id']."' AND estatus_job = '2'";
					$resultado_trabajos = mysqli_query($conexion,$consulta_trabajos);
					$cantidad_trabajos = mysqli_num_rows($resultado_trabajos);
					
			}

 ?>
 

    
<body onLoad="">
	
<?php include("include/menu.php"); ?>

    <div class="container_title_request">
    
        <div class="center_title_request"> 
		
		 <?php echo $fila_diseñador['name_designer']." ".$fila_diseñador['lastname']; ?> <span> / JOBS </span>  
			
		</div>
    
    </div>

    	<?php if ($cantidad_trabajos > 0) { ?>
		    <div class="container_form">
				
				<div class="center_form">

					<div class="container_active_jobs">
						<div class="container_title_active_jobs"  >
							<div class="title_active_jobs" style="width: 180px;"> <div> PROGRESS </div> </div>
							<div class="title_active_jobs" style="width: 180px;"> <div> DATE REQUEST CREATED </div> </div>
							<div class="title_active_jobs" style="width: 180px;"> <div> PLAN REQUESTED </div> </div>
							<div class="title_active_jobs" style="width: 180px;"> <div> STATUS</div> </div>
							<div class="title_active_jobs" style="width: 180px;"> <div> </div> </div>

						</div>

						<!--  ESTO ES PARA DESPLEGAR EL CONTENIDO   -->
		                
						<?php while($fila_trabajo= mysqli_fetch_array($resultado_trabajos)){  ?>

							<div class="container_text_active_jobs" id="<?php echo $fila_trabajo['id']; ?>"  >
								<div class="content_active_jobs" style="width: 180px; font-size: 12px;"> <div> 0 % </div></div>

								<div class="content_active_jobs" style="width: 180px; font-size: 12px;"> 
									<div> <?php echo $fila_trabajo['fecha']; ?> </div> 

								</div>	

								<div class="content_active_jobs" style="width: 180px; font-size: 12px;"> 
									<div> 
										<?php
												
											$text_name= $fila_trabajo['tipo'];
											$tamano_name = strlen($fila_trabajo['tipo']);

												if($tamano_name >= 15){
													echo substr($text_name, 0, 15)."..."; 

												}else{
													echo $text_name;

												} 	

										 ?> 
									 </div> 

								</div>

								<div class="content_active_jobs" style="width: 180px; font-size: 12px;"> 
									<div> 
										<?php 
											$estatusTrabajo = ($fila_trabajo['estatus_job'] == 2)?"WORK IN PROGRESS":"WAITING APPROVE";

											echo $estatusTrabajo; 

										?> 
									</div> 

								</div>

								<div class="content_active_jobs" style="width: 180px; font-size: 12px;"> 
									<ul class="ul_menu">
			    						<li id="li_request" >MORE 
											<ul class="ul_desplegable" >
				                                <li class="open_detail_job" id="<?php echo $fila_trabajo['id_request'].".".$fila_trabajo['id'].".diseñador"; ?>"  name="ver_request" title="<?php echo $fila_trabajo['tipo']; ?>">View Request</li>
				               
				                        
			                        		</ul>     				
									
								 	</ul>    
								
								</div>

							</div>

						<?php }  ?> <!-- AQUI FIN DEL WHILE -->
						
					</div>
					
				
					
				</div>
				
			</div>

    	<?php }else{    ?>

	    	<div class="container_form">
			
				<div class="center_form">
				
					<div class="container_active_jobs">

							<div class="container_text_active_jobs" id="" name="ver_request">
								<div class="content_active_jobs" style="width: 100%;font-size: 20px;text-align: center;"> 
									<div>THIS DESIGNER DOES NOT HAVE ANY JOBS ASSIGNED AT THE MOMENT</div>

								</div>


							</div>
						</div>
					
					</div>
				
				</div>
			
			</div>


    	<?php	} ?> <!-- FIN CONDICION MOSTRAR TRABAJOS -->
    
		<!--    AQUI CARGARAN TODAS LAS VENTANAS CON LOAD       -->
		
			<div id="carga_ventana_load" >
			
			</div>
		
		<!--     FIN CARGA VENTANAS CON LOAD       -->

		
        <div class="container_form">

            <div class="center_form" >  
        
   			    <!--        <input type="submit" value="COMPLETE REQUEST" id="submit_request" /> 	-->
            
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
    
    
</body>
</html>









