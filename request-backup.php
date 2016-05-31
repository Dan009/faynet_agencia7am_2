<?php include('include/head.php'); ?>
<body>
    <?php include("include/menu.php"); ?>
	
<script>
$(document).ready(function() {
    $("#submit_request").click(function() {
       /* $.post($("#form_request").attr("action"), $("#form_request").serialize(),
		
		  function(data) {
			$(".generalmsj").append(data);
          });
		
		  $.post($("#inside_plan_form").attr("action"), $("#inside_plan_form").serialize(),
          function(data) {
            $(".insidemsj").append(data);
          });*/
		  
      });
  });
</script>
	<!--<form id="form_request" name="form_request" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/procesa_form.php" >-->
    <div class="exito_insert" >
		<div class="div_exito_insert" >
       		<div class="insidemsj"></div>
    		<div class="generalmsj"></div>
        	<!--<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/default.gif" class="loader_request" />-->
			<div class="text_exito_insert" ></div>
		</div>
	</div>
    
    
    
    <form id="form_request" name="form_request" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>test.php" >
    <div class="container_title_request">
    
        <div class="center_title_request"> 
		
			REQUEST / <span> KICK OFF SHEET </span>  
			<!--<input type="submit" value="COMPLETE REQUEST" id="submit_request" required />-->
            <input type="submit" value="COMPLETE REQUEST" id="submit_request" required />
            
			
		
			
			<div class="btn_new_request"> 
				<span> ADD NEW REQUEST </span> <div class="icon_fleca_request" ></div> 
			
				<!-- MENU DESPLEGABLE  -->
				
				<ul class="desplegable_btn_request" >
				
					<li class="add_ventana"  name="inside_plan" > INSIDE PLAN </li>
					<li class="add_ventana" name="pole_plan" > POLE PLAN </li>
					<li class="add_ventana" name="utility_ab_record" > UTILITY AB RECORD </li>
					<li class="add_ventana" name="manhole_prop" > MANHOLE PROP  </li>
					<li class="add_ventana" name="civil_plan" > CIVIL PLAN  </li>
				
				
				</ul>
				
				<!-- FIN MENU DESPLEGABLE  -->
			
			</div>

			
		</div>
    
    </div>
    <div class="container_title_ventana">
    
        <div class="center_title_request"> 
			
			<div class="div_title_ventana ventana_activa" name="content_general_information" id="ventana_general_information" >GENERAL INFORMATION</div>
			<div class="div_title_ventana " name="content_inside_plan" id="ventana_inside_plan" >
				INSIDE PLAN
				<div class="cerrar_ventana" ></div>
			</div>
			<div class="div_title_ventana " name="content_pole_plan" id="ventana_pole_plan"  >
				POLE PLAN
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
                                <select name="engineering" required >
									<option>Select Engineering</option>
									<?php 
										$consulta_engineering="SELECT * FROM engineering WHERE estado='1' AND company='".$_SESSION['id']."' ";
										$resultado_engineering= mysqli_query($conexion,$consulta_engineering);
										while($fila_engineering= mysqli_fetch_array($resultado_engineering)){
									?>										
										<option value="<?php echo $fila_engineering['id']; ?>"><?php echo $fila_engineering['engineering']; ?></option>
									<?php } ?>
                                </select>
                            </div>

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > CUSTOMER NAME </div>
                            <input type="text" name="customer_name" placeholder="ENTER NAME" required />

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > SOLOMON # </div>
                            <input type="text" name="solomon_number" placeholder="ENTER NUMBER" required />                    

                        </div>
                        <div class="div_input_request" >

                            <div class="title_div_input_request" > SERVICE # </div>
                            <input type="text" name="service_number" placeholder="ENTER NUMBER" required />                         

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > PRJ. ASSING # </div>
                            <input type="text" name="prj_assing_number" placeholder="ENTER NUMBER" required />                      

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > KICK  OFF DATE </div>
                            <input type="text" name="kick_off_date" id="kick_off_date" placeholder="ENTER KICK  OFF DATE"  required />                       

                        </div>
                        <div class="div_input_request" >
                            <div class="title_div_input_request" > BLDG#</div>
                            <input type="text" name="bldg_number" placeholder="ENTER NUMBER" required />                     

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > STREET # </div>
                            <input type="text" name="street_number" placeholder="ENTER STREET" required />                     

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > MUNI / CITY </div>

                            <div class="div_select_request" >
                                <select name="city" required >
                                    <option>Select</option>
									<?php 
										$consulta_engineering="SELECT * FROM city WHERE estado='1' ";
										$resultado_engineering= mysqli_query($conexion,$consulta_engineering);
										while($fila_engineering= mysqli_fetch_array($resultado_engineering)){
									?>										
										<option value="<?php echo $fila_engineering['id']; ?>"><?php echo $fila_engineering['city']; ?></option>
									<?php } ?>										
                                </select>
                            </div>                    

                        </div>
                        <div class="div_input_request" >
                            <div class="title_div_input_request" > STATE </div>

                            <div class="div_select_request" >
                                <select name="state" required >
                                    <option>Select</option>
									<?php 
										$consulta_engineering="SELECT * FROM state WHERE estado='1' ";
										$resultado_engineering= mysqli_query($conexion,$consulta_engineering);
										while($fila_engineering= mysqli_fetch_array($resultado_engineering)){
									?>										
										<option value="<?php echo $fila_engineering['id']; ?>"><?php echo $fila_engineering['state']; ?></option>
									<?php } ?>									
									
                                </select>
                            </div>                      

                        </div>
                        <!--<div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > DOC # </div>
                            <input type="text" name="doc_number" disabled placeholder="ENTER NUMBER" />                       

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > PO # </div> 
                            <input type="text" name="po_number" disabled placeholder="ENTER NUMBER" />                       

                        </div>-->









                </div>

            </div>

        </div>
    
        <div class="container_form">

            <div class="center_form" >
                    
                        <div class="div_input_request  " >
                            <div class="title_div_input_request" > DATE REQUEST SENT </div>
                            <input type="text" name="date_request_sent" id="date_request_sent" placeholder="KICK OFF DATE" required />                       

                        </div> 
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > LT  EXP. JOB COMPLETION </div>
                            <input type="text" name="lt_exp_job_completion" placeholder="LT  EXP. JOB COMPLETION" required required/>                       

                        </div> 
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > LT FIBER ENG. </div>
                            <input type="text" name="lt_fiber_eng" placeholder=" LT FIBER ENG." required />                       

                        </div> 
                        <div class="div_input_request  " >
                            <div class="title_div_input_request" > LT PROJECT </div>
                            <input type="text" name="lt_project" placeholder=" LT PROJECT" required />                       

                        </div> 
            </div>

        </div>
    
        <div class="container_form">

            <div class="center_form" >
                      <div class="title_div_input_request" > SCOPE WORK </div>
                <input name="contratista_id" type="hidden" value="1">
                      <textarea name="scope_work" placeholder="SCOPE WORK" ></textarea>
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

	
	
	
	
</body>
</html>









