<?php include('include/head.php');
    $_SESSION['time_code']=$time_code;

        $confirmarContratista = strcasecmp("contratista",$_SESSION['full_name']);
        
            /// NO ACEPTAR CONTRATISTAS
               if($confirmarContratista >= -4){
                header("Location: index.php");

                } /**/

        /// INFORMACIÓN GENERAL SEARCH

            if(isset($_GET['id'])){
                // CARGA LA INFORMACIÓN GENERAL DE SEARCH
                    $consulta_search="SELECT STREET_NUMBER,CITY, STATE FROM GENERAL_INFORMATION WHERE TIME_CODE = '".$_GET['id']."' AND USUARIO_ID = '".$_SESSION['id']."' ";
                    $resultado_search= mysqli_query($conexion,$consulta_search);
                    $fila_search= mysqli_fetch_array($resultado_search);

            }


 ?>
 
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
    var CLIPBOARD = new CLIPBOARD_CLASS("canvas-paste", true);

    /**
     * image pasting into canvas
     * 
     * @param string canvas_id canvas id
     * @param boolean autoresize if canvas will be resized
     */
    function CLIPBOARD_CLASS(canvas_id, autoresize) {
        var _self = this;
        var canvas = document.getElementById(canvas_id);
        var ctx = document.getElementById(canvas_id).getContext("2d");
        var ctrl_pressed = false;
        var reading_dom = false;
        var text_top = 15;
        var pasteCatcher;
        var paste_mode;

        //handlers
        document.addEventListener('keydown', function (e) {
            _self.on_keyboard_action(e);
        }, false); //firefox fix
        document.addEventListener('keyup', function (e) {
            _self.on_keyboardup_action(e);
        }, false); //firefox fix
        document.addEventListener('paste', function (e) {
            _self.paste_auto(e);
        }, false); //official paste handler

        //constructor - prepare
        this.init = function () {
            //if using auto
            if (window.Clipboard)
                return true;

            pasteCatcher = document.createElement("div");
            pasteCatcher.setAttribute("id", "paste_ff");
            pasteCatcher.setAttribute("contenteditable", "");
            pasteCatcher.style.cssText = 'opacity:0;position:fixed;top:0px;left:0px;';
            pasteCatcher.style.marginLeft = "-20px";
            pasteCatcher.style.width = "10px";
            document.body.appendChild(pasteCatcher);
            document.getElementById('paste_ff').addEventListener('DOMSubtreeModified', function () {
                if (paste_mode == 'auto' || ctrl_pressed == false)
                    return true;
                //if paste handle failed - capture pasted object manually
                if (pasteCatcher.children.length == 1) {
                    if (pasteCatcher.firstElementChild.src != undefined) {
                        //image
                        _self.paste_createImage(pasteCatcher.firstElementChild.src);
                    }
                }
                //register cleanup after some time.
                setTimeout(function () {
                    pasteCatcher.innerHTML = '';
                }, 20);
            }, false);
        }();
        //default paste action
        this.paste_auto = function (e) {
            paste_mode = '';
            pasteCatcher.innerHTML = '';
            var plain_text_used = false;
            if (e.clipboardData) {
                var items = e.clipboardData.items;
                if (items) {
                    paste_mode = 'auto';
                    //access data directly
                    for (var i = 0; i < items.length; i++) {
                        if (items[i].type.indexOf("image") !== -1) {
                            //image
                            var blob = items[i].getAsFile();
                            var URLObj = window.URL || window.webkitURL;
                            var source = URLObj.createObjectURL(blob);
                            this.paste_createImage(source);
                        }
                    }
                    e.preventDefault();
                }
                else {
                    //wait for DOMSubtreeModified event
                    //https://bugzilla.mozilla.org/show_bug.cgi?id=891247
                }
            }
        };
        //on keyboard press - 
        this.on_keyboard_action = function (event) {
            k = event.keyCode;
            //ctrl
            if (k == 17 || event.metaKey || event.ctrlKey) {
                if (ctrl_pressed == false)
                    ctrl_pressed = true;
            }
            //c
            if (k == 86) {
                if (document.activeElement != undefined && document.activeElement.type == 'text') {
                    //let user paste into some input
                    return false;
                }

                if (ctrl_pressed == true && !window.Clipboard)
                    pasteCatcher.focus();
            }
        };
        //on kaybord release
        this.on_keyboardup_action = function (event) {
            k = event.keyCode;
            //ctrl
            if (k == 17 || event.metaKey || event.ctrlKey || event.key == 'Meta')
                ctrl_pressed = false;
        };
        //draw image
        this.paste_createImage = function (source) {
            var pastedImage = new Image();
            pastedImage.onload = function () {
                if(autoresize == true){
                    //resize canvas
                    canvas.width = pastedImage.width;
                    canvas.height = pastedImage.height;
                }
                else{
                    //clear canvas
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                }
                ctx.drawImage(pastedImage, 0, 0);
            };
            pastedImage.src = source;
        };
    }

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
    
<body>
	
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

          /*$.get("include/editor.php", function (data) {
                            $(".editor_imagenes_content_first").append(data);
                        }); */

  
  
  
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
    <input type="submit" value="COMPLETE REQUEST" id="submit_request" />
    <form id="form_request" name="form_request" method="post" enctype="multipart/form-data" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/data-file/g_info.php" >
    <div class="container_title_request">
    
        <div class="center_title_request"> 
		
			REQUEST / <span> KICK OFF SHEET </span>  
			<!--<input type="submit" value="COMPLETE REQUEST" id="submit_request" required />-->
            
            
			<div class="btn_new_request"> 
				<span> ADD NEW REQUEST </span> <div class="icon_fleca_request" ></div> 
			
				<!-- MENU DESPLEGABLE  -->
    				<ul class="desplegable_btn_request" >		
    					<li class="add_ventana" name="inside_plan" > INSIDE PLAN </li>
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
                                <select name="engineering">
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
                            <input type="text" name="customer_name" placeholder="ENTER NAME"/>

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > SOLOMON # </div>
                            <input type="text" name="solomon_number" placeholder="ENTER NUMBER"/>                    

                        </div>
                        <div class="div_input_request" >

                            <div class="title_div_input_request" > SERVICE # </div>
                            <input type="text" name="service_number" placeholder="ENTER NUMBER"/>                         

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > PRJ. ASSING # </div>
                            <input type="text" name="prj_assing_number" placeholder="ENTER NUMBER" />                      

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > KICK  OFF DATE </div>
                            <input type="text" name="kick_off_date" id="kick_off_date" placeholder="ENTER KICK  OFF DATE"/>                       

                        </div>
                        <div class="div_input_request" >
                            <div class="title_div_input_request" > BLDG#</div>
                            <input type="text" name="bldg_number" placeholder="ENTER NUMBER"/>                     

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > STREET # </div>
                            <input type="text" name="street_number" placeholder="ENTER STREET" value="<?php if(isset($fila_search)){ echo $fila_search['STREET_NUMBER'];} ?>" <?php if(isset($fila_search)){ echo "disabled";} ?> />                     

                        </div>
                        <div class="div_input_request margin_div_input_request " >
                            <div class="title_div_input_request" > MUNI / CITY </div>

                            <div class="div_select_request" >
                                <select name="city" <?php if(isset($fila_search)){ echo "disabled='disabled'";} ?> >     <?php  if (!isset($fila_search)) { echo "<option>Select</option>";} ?>

									<?php 
                                        if(!isset($fila_search)) {                                       
    										$consulta_engineering="SELECT * FROM city WHERE estado='1' ";
    										$resultado_engineering= mysqli_query($conexion,$consulta_engineering);
    										while($fila_engineering= mysqli_fetch_array($resultado_engineering)){
									?>		
						
										<option value="<?php echo $fila_engineering['city']; ?>"><?php echo $fila_engineering['city']; ?></option>
                                      
									<?php } }else{ ?>
                                        <option value="<?php echo $fila_search['CITY']; ?>"><?php echo $fila_search['CITY']; ?></option>

                                    <?php  }?>										
                                </select>
                            </div>                    

                        </div>
                        <div class="div_input_request" >
                            <div class="title_div_input_request" > STATE </div>

                            <div class="div_select_request" >
                                <select name="state" <?php if(isset($fila_search)){ echo "disabled='disabled'";} ?>>
									   <?php  if (!isset($fila_search)) { echo "<option>Select</option>";} ?>
                                    <?php 
                                        if(!isset($fila_search)) {   

    										$consulta_engineering="SELECT * FROM state WHERE estado='1' ";
    										$resultado_engineering= mysqli_query($conexion,$consulta_engineering);
    										while($fila_engineering= mysqli_fetch_array($resultado_engineering)){
									?>	
            							
										<option value="<?php echo $fila_engineering['state']; ?>"><?php echo $fila_engineering['state']; ?></option>
									<?php } }else{ ?>
                                        <option value="<?php echo $fila_search['STATE']; ?>"><?php echo $fila_search['STATE']; ?></option>

                                    <?php  }?>  								
									
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
                    <input type="text" name="date_request_sent" id="date_request_sent" placeholder="KICK OFF DATE" />                       

                </div> 
                <div class="div_input_request margin_div_input_request " >
                    <div class="title_div_input_request" > LT  EXP. JOB COMPLETION </div>
                    <input type="text" name="lt_exp_job_completion" placeholder="LT  EXP. JOB COMPLETION"/>                       

                </div> 
                <div class="div_input_request margin_div_input_request " >
                    <div class="title_div_input_request" > LT FIBER ENG. </div>
                    <input type="text" name="lt_fiber_eng" placeholder=" LT FIBER ENG." />                       

                </div> 
                <div class="div_input_request  " >
                    <div class="title_div_input_request" > LT PROJECT </div>
                    <input type="text" name="lt_project" placeholder=" LT PROJECT" />                       

                </div> 

            </div>

        </div>
    
        <div class="container_form">

            <div class="center_form" >
                      <div class="title_div_input_request" > SCOPE WORK </div>
                <input name="contratista_id" type="hidden" value="1">
                      <textarea name="scope_work" placeholder="SCOPE WORK" ></textarea>
            </div>
             <input type="hidden" name="code_plan" id="code" value="<?php echo $_SESSION['time_code']; ?>"/>

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

        
    <!--    ESTE ES LIGHTBOX -->  <!-- AQUI CARGA EL EDITOR  -->
        <div class="fondo_list_job">
            <div class="fancy_list_job" style="width: 961px;">
              
                <!-- <div class="temp"></div>  
                                            
                    <div class="editor_street_pictures_first" style="overflow:auto">
                        <div class="cont-button-editor">
                            
                            <input type="button" value="Save current image" onClick="exportAndSaveCanvas()" style="padding: 22px;width: 15%;">

                        </div>
                        
                        <div class="editor_imagenes_content_first" style="width:100%; height:800px; margin:auto;">
                                
                              
                        
                        </div>
                    
                    </div> 

                </div>    -->

            </div>

        </div>
        

        	<div class="exito_insert" >
        		
        		<div class="div_exito_insert" >
                <div class="hola"></div>
        			<!--<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/default.gif" class="loader_request" />-->
        			<div class="text_exito_insert" >
                    	<div class="insidemsj"></div>
                    </div>
        			
        		</div>
        	</div>
    
	
    
    
    
	<?php echo $_SESSION['time_code']?>
    
    
    
    
</body>
</html>









