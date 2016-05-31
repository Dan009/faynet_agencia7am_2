<?php 
	include('include/head.php');
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	
	$search = $_GET['search'];
	$fila_search = $_GET['campo'];
	
	if(isset($_GET['search'])){
	//BUSCA EN INFORMACIÓN GENERAL LOS TRABAJOS	
		//$consulta="SELECT * FROM general_information WHERE $fila_search LIKE '%$search%' ";
						
		//$resultado= mysqli_query($conexion,$consulta);	
		//$fila= mysqli_fetch_array($resultado);

	}
	
	
?>

<body>
    <?php include("include/menu.php"); ?>

	
    <div class="container_title_request" style="height: 138px;">
    
        <div class="center_title_request"> 
			
			Searching  <span>  Jobs </span>  
	<div style="float:right;">

	    <form> 

		   <!--  <input type="text" name="search" placeholder="Find job" id="search_text">
		    <select name="campo">
			  <option value="city">city</option>
			  <option value="state">state</option>
			  <option value="street_number">street</option>
			</select> -->

				<select name="campoRequestN">
					<option value="">Please select a request #</option>
						<?php  /*BUSCA TODOS LOS REQUEST #*/
							$consulta_number_requests = "SELECT id FROM request;";
							$resultado_number_requests = mysqli_query($conexion,$consulta_number_requests);	

							while ($fila_number_request = mysqli_fetch_array($resultado_number_requests)) {
							
						?>
							<option name="<?php echo "requestN".$fila_number_request['id']; ?>" value="<?php echo $fila_number_request['id']; ?>"><?php echo $fila_number_request['id']; ?></option>

						<?php }  ?>
				</select>		

				<select name="campoServiceN">
					<option value="">Please select a service #</option>
						<?php  /* BUSCA TODOS LOS SERVICE # */
							$consulta_number_service = "SELECT service_number FROM general_information;";
							$resultado_number_service = mysqli_query($conexion,$consulta_number_service);	

							while ($fila_number_service = mysqli_fetch_array($resultado_number_service)) {
								
						?>
							<option name="<?php echo "serviceN".$fila_number_service['service_number']; ?>" value="<?php echo $fila_number_service['service_number']; ?>"><?php echo $fila_number_service['service_number']; ?></option>

					<?php }  ?>
				</select>

				<select name="campoState">
				  <option value="">state</option>
				  	<!-- ESTO DEBE SER AUTOGENERADO -->
				</select>

				<select name="campoCity" disabled="disabled">
					<option value="">Se generara dependiendo del campo state</option>
					<!-- ESTO DEBE SER AUTOGENERADO -->
				</select>

				<select name="campoStreet" disabled="disabled">
					<option value="">Se generara dependiendo del campo street</option>
					<!-- ESTO DEBE SER AUTOGENERADO -->
				</select>

				<select name="campoBuildingN ">
					<option value="">Please select a building #</option>
					<!-- ESTO DEBE SER AUTOGENERADO -->
				</select>

				KEYWORD <input type="text" placeholder="Add a keyword to your search"></input>

				<a href="" class="div_buttom" style="text-decoration: none; padding:11px 22px 11px 23px;">SEARCH</a>
	    </form>
    </div>
		</div>
    
    </div>	

	<div class="container_form">
		
		<div class="center_form">
		
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
				
				 
				// BUSCO LOS REQUEST QUE ESTAN EN LA INFORMACION GENERAL ASIGNADA
				//if(isset($fila["time_code"])){
				while($fila= mysqli_fetch_array($resultado)){
				$consulta_request="SELECT * FROM request WHERE id_request='".$fila['time_code']."'";
				$resultado_request= mysqli_query($conexion,$consulta_request);	
				while($fila_request= mysqli_fetch_array($resultado_request)){
				//$consulta_request="SELECT * FROM request WHERE id_request='".$fila['time_code']."'";
				//}
				//$resultado_request= mysqli_query($conexion,$consulta_request);
				//$fila_request=mysqli_fetch_array($resultado_request);
				//$fila_request= mysqli_fetch_array($resultado_request)
					
					
						
				?>
				<div class="container_text_active_jobs open_detail_job" id="<?php echo $fila['id']; ?>"  name="<?php if($_SESSION['estado'] ==3 ){ echo "ver_request";}else{echo "ver_cotizacion"; } ?>"  >
				
					<div class="content_active_jobs"> <div> <?php echo $fila['time_code']; ?> </div> </div>
					<div class="content_active_jobs"> <div> <?php echo $fila['service_number']; ?> </div> </div>
					<div class="content_active_jobs"> 
						<div>
                        <?php echo $fila['street_number']; ?>
						<?php 
						
						
						?>
						</div> 
					</div>
					<div class="content_active_jobs" title="<?php echo $fila_request['tipo']; ?>" > 
						<div> 
							<?php 
								
								$text_name=$fila_request['tipo'];
								$tamano_name = strlen($fila_request['tipo']);
								if($tamano_name >=15){
									echo substr($text_name, 0, 15)."..."; 
								}else{
									echo $text_name;
								} 								
							?> 
						</div> 
					</div>
					<div class="content_active_jobs" > 
						<div>
							<?php 
								if($fila['estatus_job']==0){
									echo "PENDING";									
								}
							
							?>
						</div>
					</div>
                    <?php 
					// COMPANY
					$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_general['company']."' ";
					$resultado_company= mysqli_query($conexion,$consulta_company);
					$fila_company= mysqli_fetch_array($resultado_company);
					
					?>
					<div class="content_active_jobs" > <div><?php echo $fila_company['nombre']; ?>  </div> </div>
					
					<div class="content_active_jobs" > 
						<div>
						<!--    -->
							<div class="view_detail_job"> <a href="request_search.php?id=<?php echo $fila_request['id_request'] ?>">View </a></div> 
						
						</div> 
					
					</div>
					<!--
					<div class="content_active_jobs" > <div>LIGHTOWER ENGINEER </div> </div>
					<div class="content_active_jobs" > <div>GUL QUOTE </div> </div>
					<div class="content_active_jobs" > <div> <?php echo $fila['doc_number']; ?> </div> </div>
					<div class="content_active_jobs" > <div><?php echo $fila['po_number']; ?> </div> </div>
					<div class="content_active_jobs" > <div>GUL INVOICE # </div> </div>
					<div class="content_active_jobs" > <div> <?php echo $fila['scope_work']; ?>  </div> </div>
					-->
					
				</div>
				<?php }} ?>
				
			</div>
			
			
			
		</div>
		
	</div>
    
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
		</div>	
	
<script>
$( "#search_text" ).keyup(function() {
  //alert( "Handler for .keyup() called." );
});
</script>
</body>
</html>









