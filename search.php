<?php 
	include('include/head.php');
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	
		// $search = $_GET['search'];
		// $fila_search = $_GET['campo'];
		
		// if(isset($_GET['search'])){
		// 	//BUSCA EN INFORMACIÓN GENERAL LOS TRABAJOS	
		// 		$consulta="SELECT * FROM general_information WHERE $fila_search LIKE '%$search%' ";
								
		// 		$resultado= mysqli_query($conexion,$consulta);	

		// 		var_dump($consulta);

		// 		//$fila= mysqli_fetch_array($resultado);

		// }

	//COMIENZA SEARCH AVANZADO
	    $filtros = array(
            "service_number", 
            "solomon_number",
            "state",
            "city",
            "street_number",
            "bldg_number"
        );

        $consulta = "";
 
        foreach ($filtros as $filtro) {
            if(isset($_GET[$filtro]) && !empty($_GET[$filtro])){
                $consulta .= $filtro." WHERE LIKE '%".$_GET[$filtro]."%' AND ";

            }
        }

        if($consulta != ""){
            $consulta = substr($consulta,0,(strlen($consulta)-4));

        }

	    	if ($_GET){

		      	 //COMIENZA PAGINACION
		      		 include("include/pagination.php");

		      	//$sql = "SELECT * FROM general_information $consulta";
				$resultado= mysqli_query($conexion,$sql);	
	

				//var_dump($sql);	      	

			}


	$contador_vueltas = 0;


?>

<body>
    <?php include("include/menu.php"); ?>

	
    <div class="container_title_request" style="height: 206px;">
    
	    <div class="center_title_request"> 
				
				Searching  <span>  Jobs </span>  

			<div style="float:right;">

			    <form method="GET" action="" style="margin-top: 3%;"> 

				  <!--  <input type="text" name="search" placeholder="Find job" id="search_text">
				    <select name="campo">
					  <option value="city">city</option>
					  <option value="state">state</option>
					  <option value="street_number">street</option>
					</select> -->	

					<!-- SEARCH AVANZADO-->
						<label for="id">ID REQUEST</label> <input type="number" id="id" name="id" placeholder="ID REQUEST" />	

						<label for="service_number">SERVICE #</label> <input type="number" id="service_number" name="service_number" placeholder="SERVICE #" />	



						<label for="solomon_number">SOLOMON #</label> <input type="number" id="solomon_number" name="solomon_number" placeholder="SOLOMON #" />	


						<!-- STATE SELECT -->
							<label for="state">STATE</label>
							
							<select name="state" id="state">
								<option></option>
								<?php 
									$consulta_states = "SELECT * FROM state";
									$resultado_states = mysqli_query($conexion,$consulta_states);
																		
										if (isset($resultado_states)) {
											while ($fila_states = mysqli_fetch_array($resultado_states)) {
												
										
								 ?>
							  		<option id="stateOption" class="<?php echo $fila_states['city_id']; ?>" value="<?php echo $fila_states['state']; ?>"><?php echo $fila_states['state']; ?></option>


							  	<?php  } /*Termina el while*/ } /*Termina el if*/ ?>
							</select>

						<!-- CITY SELECT -->
							<label for="state">CITY</label>
							<select name="city" id="city" disabled>
								
							</select>
						
						<!-- STREET SELECT -->
							<label for="street_number">STREET</label>
							<select name="street_number" id="street_number" disabled>

							</select>

						<label for="bldg_number">BUILDING #</label> <input type="number" id="bldg_number" name="bldg_number" placeholder="BUILDING #" />		

						<label for="keyword">STREET KEYWORD</label> <input id="keyword" type="text" placeholder="Add a keyword to your search"></input>



						<input type="submit" class="div_buttom" style="margin: 7px 9px; font-size: 16px;"  value="BUSCAR" /> 

					<!-- FIN DEL SEARCH AVANZADO-->

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

						/*$consulta_request="SELECT * FROM request WHERE id_request='".$fila['time_code']."'";

						$resultado_request= mysqli_query($conexion,$consulta_request);	

							while($fila_request= mysqli_fetch_array($resultado_request)){*/
							//$consulta_request="SELECT * FROM request WHERE id_request='".$fila['time_code']."'";
							//}
							//$resultado_request= mysqli_query($conexion,$consulta_request);
							//$fila_request=mysqli_fetch_array($resultado_request);
							//$fila_request= mysqli_fetch_array($resultado_request)
						
					
						
				?>
					<!-- open_detail_job -->
				<div class="container_text_active_jobs " id="<?php echo $fila['id']; ?>"  name="<?php if($_SESSION['estado'] ==3 ){ echo "ver_request";}else{echo "ver_cotizacion"; } ?>"  >
				
					<div class="content_active_jobs"> <div> <?php echo $fila['kick_off_date']; ?> </div> </div>
					<div class="content_active_jobs"> <div> <?php echo $fila['service_number']; ?> </div> </div>
					<div class="content_active_jobs"> 
						<div>
                        <?php echo $fila['street_number']; ?>
						<?php 
						
						
						?>
						</div> 
					</div>
					<div class="content_active_jobs" title="<?php echo $fila['tipo']; ?>" > 
						<div> 
							<?php 
								
								$text_name= $fila['tipo'];
								$tamano_name = strlen($fila['tipo']);
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
								if($fila['estatus_job'] == 0){
									echo "PENDING";									
								}else if($fila['estatus_job'] == 2){
									echo "APPROVED";

								}else{
									echo "PENDING";

								}
							
							?>
						</div>
					</div>
                    <?php 
					// COMPANY
					$consulta_company="SELECT * FROM usuarios WHERE id='".$fila['company']."' ";
					$resultado_company= mysqli_query($conexion,$consulta_company);
					$fila_company= mysqli_fetch_array($resultado_company);
					
					?>
					<div class="content_active_jobs" > <div> </div> </div>
					
					<div class="content_active_jobs" > 
						<div>
						<!--    -->
							<div class="view_detail_job"> <a href="request_search.php?id=<?php echo $fila['id_request'].",".$fila['id'] ?>">View </a></div> 
						
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


				<?php } /*}*/ ?>
				
			</div>

				<br />

			<nav id="nvPagination">
				<h2><?php echo $texto_cantidad; ?> <?php echo ($texto_cantidad > 0)?"PAGED":""; ?></h2>
				<div id="dvPagination"><?php echo $controlesPaginacion; ?></div>


			</nav>
			
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
	$(document).ready(function(){

		//LISTENER DE SELECT STATE
			$("#state").click(function(){

				if ($(this).val() != ""){
					var id=$("#stateOption").attr("class");
					var tipo = "state";

						$.ajax({
							type: "POST",
							url: "include/evalua_llenar_select_busquedaAvanzada.php",
							data: {id:id,tipo:tipo},
							cache: false,
							success: function(html){
								$("#city").prop("disabled",false);
								$("#city").html("<option></option>");
								$("#city").html(html);

							} 
						});

				}

			});

		//LISTENER DE SELECT CITY
			$("#city").click(function(){
				var id=$(this).val();
				var tipo = "city";

					$.ajax({
						type: "POST",
						url: "include/evalua_llenar_select_busquedaAvanzada.php",
						data: {tipo:tipo},
						cache: false,
						success: function(html){
							$("#street_number").prop("disabled",false);
							$("#street_number").html(html);

						} 
					});


			});

	});


</script>
</body>
</html>









