<?php include('include/head.php');
	$_SESSION['time_code']=$time_code;
	$idsearch = $_GET['id'];
	
	if(isset($_GET['id'])){
		// CARGA LA INFORMACIÓN GENERAL DE SEARCH
			$consulta_search="SELECT * FROM general_information WHERE time_code='$idsearch' AND usuario_id='".$_SESSION['id']."' ";
			$resultado_search= mysqli_query($conexion,$consulta_search);
			$fila_search= mysqli_fetch_array($resultado_search);

	}



 ?>
<script src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/upload.js"></script> 
 
<!--MUESTRA EL EDITOR DE IMAGENES-->
	<div id="copypaste">
		<div class="container-copypaste">
	    	<div id="header-copypaste"><strong>Paste Image Here</strong></div>
	        	<div id="content-canvas">
	            	<canvas id="canvas-paste"></canvas>
	            </div>
	    </div>
	</div>

<script>
	///////////////////////////////////////////////////////////////////////
	// ESTE CODIGO ES PARA MOSTRAR LAS VENTANAS DE LOS PLANES
	//////////////////////////////////////////////////////////////////////

	function LlamarAjax(name_ventana, id){
		//alert(name_ventana);
		
				$("#ventana_"+name_ventana).fadeIn(0);
				$.ajax({
	                type: 'POST',
	                url: "http://"+hostname+ruta+"plans_search/"+name_ventana+".php",
	                data: {id:id},
	                success: function(data) {    
						$("#carga_ventana_load").append(data);
						$(".content_form").fadeOut(0);
						$("#content_"+name_ventana).fadeIn(0);
						$(".div_title_ventana ").removeClass("ventana_activa");
						$("#ventana_"+name_ventana).addClass("ventana_activa");
						
						$("#ventana_"+name_ventana).css({"display":"block"});
	                }
	            }) 
				
	}		


	<?php 

	/*// CARGO INSIDE PLAN
	$consulta_ventanas="SELECT * FROM request WHERE tipo='inside_plan' AND id_request='$idsearch' AND usuario_id='".$_SESSION['id']."' ";
	$resultado_ventanas= mysqli_query($conexion,$consulta_ventanas);
	$fila_ventanas = mysqli_fetch_array($resultado_ventanas);

	if(isset($fila_ventanas)){
		
		$tipo = "inside_plan";
		$id = $fila_ventanas['id'];
		
		echo 'LlamarAjax("$tipo","$idsearch" );';
			
		} 
	*/
/*
	// Para cargar inside plan
	$cons_inside="SELECT * FROM request WHERE tipo='inside_plan' AND id_request='$idsearch' AND usuario_id='".$_SESSION['id']."' ";
	$res_inside= mysqli_query($conexion,$cons_inside);
	$row_inside = mysqli_fetch_array($res_inside);


	$cons_buil="SELECT * FROM request WHERE tipo='building_site_survey' AND id_request='$idsearch' AND usuario_id='".$_SESSION['id']."' ";
	$res_buil= mysqli_query($conexion,$cons_buil);
	$row_buil = mysqli_fetch_array($res_buil);

	if(isset($row_inside) == true or isset($row_buil) == true){

		echo "LlamarAjax(".'"inside_plan"'.","."'".$idsearch."'"." );";
	}

	*/	

		// Funciones para llamar ventanas
			function llamarVentana($tipo_ventana,$idsearch) {
				switch ($tipo_ventana) {
					case "inside_plan":
						echo "LlamarAjax(".'"inside_plan"'.","."'".$idsearch."'"." );";
						break;
					case "pole_plan":
						echo "LlamarAjax(".'"pole_plan"'.","."'".$idsearch."'"." );";
						break;
					case "manhole_prop":
						echo "LlamarAjax(".'"manhole_prop"'.","."'".$idsearch."'"." );";
						break;
					case "civil_plan":
						echo "LlamarAjax(".'"civil_plan"'.","."'".$idsearch."'"." );";
						break; 
					case "utility_ab_record":
						echo "LlamarAjax(".'"utility_ab_record"'.","."'".$idsearch."'"." );";
						break;
					default:
					break;

				}

			}
		// Contadores para cada ventana
			$nVentanasInside = 0;	
			$nVentanasPole = 0;	
			$nVentanasManhole = 0;	
			$nVentanasCivil = 0;	
			$nVentanasABpole = 0;	
		// Encontrar la primera ventana a mostrar
			$cons_inside="SELECT * FROM request WHERE id_request='$idsearch' AND usuario_id='".$_SESSION['id']."' ";
			$res_inside= mysqli_query($conexion,$cons_inside);
			$row_inside = mysqli_fetch_array($res_inside);

				while ($fila = mysqli_fetch_array($res_inside)) {
					if ($fila['tipo'] == 'inside_plan' or 
						$fila['tipo'] == 'building_site_survey') {
							if ($nVentanaInside == 0) {
								llamarVentana('inside_plan',$idsearch);
							}
						$nVentanaInside++;

					}else if ($fila['tipo'] == 'proposed_pole_plan_task' or
					$fila['tipo'] == 'as_built_pole_plan_task'or
					$fila['tipo'] == 'outside_utility_pole_plan'or
					$fila['tipo'] == 'highway_traffic_pole_plan' or
					$fila['tipo'] == 'railroad_crossing_pole_plan') {
						if ($nVentanasPole == 0) {
							llamarVentana('pole_plan',$idsearch);

						}
					
						$nVentanasPole++;

					}else if ($fila['tipo'] == 'breakout_manhole' or
					$fila['tipo'] == 'electric_proposed_manhole_plan' or
					$fila['tipo'] == 'telephone_proposed_manhole_plan' or
					$fila['tipo'] == 'private_proposed_manhole_plan' or
					$fila['tipo'] == 'outsite_utility_manhole_plan' or
					$fila['tipo'] == 'underground_outsite_manhole_plan'or
					$fila['tipo'] == 'aerial_outsite_manhole_plan') {
						if ($nVentanasManhole == 0) {
								llamarVentana('manhole_prop',$idsearch);

						}
						$nVentanasManhole++;

					}else if ($fila['tipo'] == 'highway_request_civil_plans' or
					$fila['tipo'] == 'permit_request_civil_plans' or
					$fila['tipo'] == 'civil_plans' or
					$fila['tipo'] == 'mwra_request_civil_plans' or
					$fila['tipo'] == 'railroad_request_civil_plans') {
						if ($nVentanasCivil == 0) {
								llamarVentana('civil_plan',$idsearch);

						}
						$nVentanasCivil++;

					}else if ($fila['tipo'] == 'electric_request_utility_plans' or 
						$fila['tipo'] == 'telephone_request_utility_plans' or 
						$fila['tipo'] == 'private_request_utility_plans' or 
						$fila['tipo'] == 'all_request_utility_plans' or 
						$fila['tipo'] == 'find_request_utility_plans') {
						if ($nVentanasABpole== 0) {
								llamarVentana('utility_ab_record',$idsearch);

						}
						$nVentanasABpole++;

					}

				}

				/**/
			
	?>


</script>


  <div class="temp"></div>  
  			
    	<div class="editor_imagenes" style="overflow:auto">
        	<div class="cont-button-editor">
            	
            	<input type="button" value="Export and Upload Screenshot" onClick="exportAndSaveCanvas()" >
            </div>
        	<div class="editor_imagenes_content" style="width:100%; height:800px; margin:auto;">
		
		<!-- AQUI CARGA EL EDITOR-->
			
		</div>
	</div>
    
<body onLoad="">
	
    <?php include("include/menu.php"); ?>
    

<script>
$(document).ready(function() {
    $("#submit_request").click(function() {
        $.post($("#form_request").attr("action"), $("#form_request").serialize(),
          function(data) {
			$(".exito_insert").fadeIn(200);
            $(".hola").append(data);
            
			
          });
		 
      });
	  
  });
  

  
  var canvas;
  var stage;
  
  function exportAndSaveCanvas()  {
	  
	  canvas = document.getElementById("canvas");

		// Get the canvas screenshot as PNG
		var screenshot = Canvas2Image.saveAsPNG(canvas, true);

		// This is a little trick to get the SRC attribute from the generated <img> screenshot
		canvas.parentNode.appendChild(screenshot);
		screenshot.id = "canvasimage";		
		type_plan = $("#type_plan").val();
		data = $('#canvasimage').attr('src');
		code = $("#code").val();
		
		
		//alert(type_plan);
		
		canvas.parentNode.removeChild(screenshot);


		// Send the screenshot to PHP to save it on the server
		var url = 'include/export.php';
		$.ajax({ 
		    type: "POST", 
		    url: url,
		    dataType: 'text',
		    data: {
		        base64data : data, codesend : code, type:type
		    },
			
			success: function(data) {
					$(".literally").remove();    
					$(".editor_imagenes").css({ 'display': "none" });
					$("body").css({ 'overflow': "auto" });
					//$(".temp").empty();
					 
				}
			
			
		});



	}

</script>


	<!--<form id="form_request" name="form_request" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/procesa_form.php" >--> 
    <form id="form_request" name="form_request" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/data-file/g_info.php" >
    <div class="container_title_request">
    
        <div class="center_title_request"> 
		
			REQUEST / <span> KICK OFF SHEET </span>  
			<!--<input type="submit" value="COMPLETE REQUEST" id="submit_request" required />-->
            
            
			<div class="btn_new_request"> 
				<span> ADD NEW REQUEST </span> <div class="icon_fleca_request" ></div> 
			
				<!-- MENU DESPLEGABLE  -->
				
					<ul class="desplegable_btn_request" >
						<li class="add_ventana" name="inside_plan"> <a href="request.php?id=<?php echo $idsearch; ?>"> INSIDE PLAN</a> </li>
						<li class="add_ventana" name="pole_plan"> <a href="request.php?id=<?php echo $idsearch; ?>"> POLE PLAN</a> </li>
						<li class="add_ventana" name="utility_ab_record"> <a href="request.php?id=<?php $idsearch; ?>"> UTILITY AB RECORD</a> </li>
						<li class="add_ventana" name="manhole_prop"> <a href="request.php?id=<?php echo $idsearch; ?>"> MANHOLE PROP</a>  </li>
						<li class="add_ventana" name="civil_plan"><a href="request.php?id=<?php echo $idsearch; ?>"> CIVIL PLAN </a> </li>
	                 
					
					
					</ul>
				
				<!-- FIN MENU DESPLEGABLE  -->
			
			</div>

			
		</div>
    
    </div>
    <div class="container_title_ventana">
    
        <div class="center_title_request"> 
			
			<div class="div_title_ventana ventana_activa" name="content_general_information" id="ventana_general_information" >GENERAL INFORMATION</div>
			<div class="div_title_ventana " name="content_inside_plan" id="ventana_inside_plan" >
				INSIDE
				<div class="cerrar_ventana" ></div>
			</div>
			
            <div class="div_title_ventana " name="content_pole_plan" id="ventana_pole_plan"  >
				POLE PLAN
				<div class="cerrar_ventana" ></div>
			</div>
            
            <div class="div_title_ventana " name="content_as_built_pole" id="ventana_as_built_pole" > 
				AS-BUILT POLE
				<div class="cerrar_ventana" ></div>
			</div>
			<div class="div_title_ventana " name="content_utility_ab_record" id="ventana_utility_ab_record" >
				UTILITY AB RECORD 
				<div class="cerrar_ventana" ></div>
			</div>
			<div class="div_title_ventana " name="content_manhole_prop" id="ventana_manhole_prop" > 
				MANHOLE PROP  
				<div class="cerrar_ventana" ></div>
			</div>
			<div class="div_title_ventana " name="content_civil_plan" id="ventana_civil_plan" > 
				CIVIL PLAN   
				<div class="cerrar_ventana" ></div>
			</div>
            
			
		</div>
    
    </div>
    

		<div class="content_form" id="content_general_information" >
        <div class="container_form" >

            <div class="center_form" >

                <div class="title_center_form" > JOB GENERAL INFORMATION </div>

                <div class="div_form_request" >

                  

                        <div class="div_input_request" >

                            <div class="title_div_input_request" > LT ENGINEERING </div>

                            <div class="div_select_request" >
                                <select name="engineering" disabled>		
                                <?php 
										$consulta_engineering="SELECT * FROM engineering WHERE id='".$fila_search['engineering_id']."' ";
										$resultado_engineering= mysqli_query($conexion,$consulta_engineering);
										$fila_engineering= mysqli_fetch_array($resultado_engineering);
									?>								
										<option><?php echo $fila_engineering['engineering']; ?></option>
									
                                </select>
                            </div>

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > CUSTOMER NAME </div>
                            <input type="text" name="customer_name" disabled  value="<?php echo $fila_search['customer_name']; ?>"/>

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > SOLOMON # </div>
                            <input type="text" name="solomon_number" value="<?php echo $fila_search['solomon_number']; ?>" disabled />                    

                        </div>
                        <div class="div_input_request" >

                            <div class="title_div_input_request" > SERVICE # </div>
                            <input type="text" name="service_number" value="<?php echo $fila_search['service_number']; ?>" disabled />                         

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > PRJ. ASSING # </div>
                            <input type="text" name="prj_assing_number" value="<?php echo $fila_search['prj_assing_number']; ?>" disabled />                      

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > KICK  OFF DATE </div>
                            <input type="text" name="kick_off_date"  value="<?php echo $fila_search['kick_off_date']; ?>" disabled />                       

                        </div>
                        <div class="div_input_request" >
                            <div class="title_div_input_request" > BLDG#</div>
                            <input type="text" name="bldg_number" value="<?php echo $fila_search['bldg_number']; ?>" disabled />                     

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > STREET # </div>
                            <input type="text" name="street_number" value="<?php echo $fila_search['street_number']; ?>" disabled />                     

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > MUNI / CITY </div>

                            <div class="div_select_request" >
                                <select name="city" disabled>
									<option><?php echo $fila_search['city']; ?></option>										
                                </select>
                            </div>                    

                        </div>
                        <div class="div_input_request" >
                            <div class="title_div_input_request" > STATE </div>

                            <div class="div_select_request" >
                                <select name="state" disabled >
										<option><?php echo $fila_search['state']; ?></option>								
									</select>
                            </div>                      

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > DOC # </div>
                            <input type="text" name="doc_number" value="<?php echo $fila_search['doc_number']; ?>" disabled />                       

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > PO # </div> 
                            <input type="text" name="po_number" value="<?php echo $fila_search['po_number']; ?>" disabled />                       

                        </div>









                </div>

            </div>

        </div>
    
        <div class="container_form">

            <div class="center_form" >
                    
                        <div class="div_input_request  " >
                            <div class="title_div_input_request" > DATE REQUEST SENT </div>
                            <input type="text" name="date_request_sent" placeholder="EMPTY" value="<?php echo $fila_search['date_request_sent']; ?>" disabled />                       

                        </div> 
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > LT  EXP. JOB COMPLETION </div>
                            <input type="text" name="lt_exp_job_completion" placeholder="EMPTY" value="<?php echo $fila_search['lt_exp_job_completion']; ?>" disabled />                       

                        </div> 
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > LT FIBER ENG. </div>
                            <input type="text" name="lt_fiber_eng" placeholder="EMPTY" value="<?php echo $fila_search['lt_fiber_eng']; ?>" disabled />                       

                        </div> 
                        <div class="div_input_request  " >
                            <div class="title_div_input_request" > LT PROJECT </div>
                            <input type="text" name="lt_project" placeholder=" EMPTY" value="<?php echo $fila_search['lt_project']; ?>" disabled />                       

                        </div> 
            </div>

        </div>
    
        <div class="container_form">

            <div class="center_form" >
                      <div class="title_div_input_request" > SCOPE WORK </div>
  
                      <textarea name="scope_work" placeholder="EMPTY" disabled ><?php echo $fila_search['scope_work']; ?>
                      </textarea>
            </div>

        </div>
	</div>
		 </form>
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









