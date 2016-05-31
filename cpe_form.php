<?php include('include/head.php');
    $_SESSION['time_code']=$time_code;

    $estiloCSS = "width: 26%;height: 33px;padding-left: 13px; position: relative;bottom: 9px;float:left;border: 2px solid #000;";

    $estiloCSSBuilding = "width: 90%;height: 33px;padding-left: 13px; position: relative;bottom: 9px;border: 2px solid #000;"; 

        if (isset($_GET)) {
            $id_information = $_GET['id_information'];
            $id_request = $_GET['id_request'];

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

<form id="form_request" name="form_request" method="post" enctype="multipart/form-data" >

    <div class="container_title_request">
    
        <div class="center_title_request"> 
		
			WELCOME TO / <span> CPE FORM </span>  
			<!-- <input type="submit" value="COMPLETE REQUEST" id="submit_request" required /> -->
	
		</div>
    
    </div>
    <div class="container_cpe_title_ventana">
    
        <div class="center_title_request"> 
			
			<div class="div_title_ventana ventana_activa" name="content_building_info" id="ventana_building_info" style="display:block;">      BUILDING INFO

            </div>

			<div class="div_title_ventana" name="content_customer_contact" id="ventana_customer_contact" style="display:block;">
				    CUSTOMER CONTACT INFO

			</div>
			
            <div class="div_title_ventana" name="ventana_lgx_info" style="display:block;" style="display:block;">
				LGX INFO
            
			</div>
            
            <div class="div_title_ventana" name="ventana_lit_equip_info" id="content_lit_equip_info" style="display:block;" > 
				LIT EQUIP INFO

			</div>

		</div>
    
    </div>
    

		<div class="content_form" id="content_building_info" >
            <div class="container_form" >

                <div class="center_form" > 

                    <?php include("include/cpe-forms/content_building_info.php"); ?>

                </div>

            </div>

        </div>

        <!-- CUSTOMER CONTACT FORM -->
            <div class="content_form" id="content_customer_contact" style="display: none;">

                <div class="container_form_custormer_contact">

                    <div class="center_form_custormer_contact" >
                        <?php include("include/cpe-forms/customer_contact_form.php"); ?>

                    </div>

                </div>

            </div> 

        <!-- LGX INFO -->
            <div class="content_form" id="ventana_lgx_info" style="display: none;">

                <div class="container_form_lgx_info">

                    <div class="center_form_lgx_info" >
                        <?php include("include/cpe-forms/lgx_info_form.php"); ?>

                    </div>

                </div>

            </div> <!---->

        <!-- LIT EQUIP INFO -->
            <div class="content_form" id="ventana_lit_equip_info" style="display: none;">

                <div class="container_lit_equip_info">

                    <div class="center_lit_equip_info" >
                        <?php include("include/cpe-forms/lit_equip_info_form.php"); ?>

                    </div>

                </div>

            </div> <!---->

</form>
    
    <?php include("include/footer.php"); ?>

        
    <!--    ESTE ES LIGHTBOX -->
        <div class="fondo_list_job" >
            <div class="fancy_list_job" style="width: 961px;"></div>
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
    
    
</body>
</html>









