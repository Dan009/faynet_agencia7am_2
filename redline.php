<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Editor</title>

	<script src="js/jquery.js"></script>
	<script src="js/upload.js"></script>
	<script src="http://code.createjs.com/easeljs-0.5.0.min.js"></script> 
	<!--<script src="http://code.jquery.com/jquery-1.8.2.js"></script>-->
  	<script src="js/libs/export_canvas/base64.js" type="text/javascript"></script>
	<script src="js/libs/export_canvas/canvas2image.js" type="text/javascript"></script>

<style>

	body{
		margin:0;
		padding:0;
		font-family:Arial, Helvetica, sans-serif;
	}

#content-editor{
	width:100%;
	height:800px;
	/*position:relative;*/
	top:0;
	/*border:1px solid #CCC;*/
	
	}
#content-tap{
	width:100%;
	height:35px;
	}
	
.left-contet-editor{
	width:1400px;
	height:90.5%;
	/*border-right:1px solid #ccc;*/
	float:left;
	}
	
.right-contet-editor{
	width:19.9%;
	height:90.5%;
	float:left;
	border-right:1px solid #ccc;
	
	}
.bottom{
	width:15%;
	height:100%;
	background:#CCC;
	float:left;
	margin-right:1px;
	}
.leyenda{
	width:97%;
	height:18px;
	border-bottom:1px solid #ccc;
	font-size:11px;
	padding-top:1px;
	padding-left:3%;
	}
	
	.leyenda strong{
		font-size:15px;}
	
#canvas{
	/*background:url(archivos/attach/file-1458247314.jpg) no-repeat;*/
	border:1px solid #ccc;
	border-bottom:0;
	border-right:0;
	background:none;
	
	}
.literally{
	background:none !important;
	border:1px solid #ccc;
	height:700px !important;
	}
	
.literally .lc-picker, .literally.toolbar-at-top .lc-options{
	border:none !important;
	background:#fff !important;
	}
	#canvasdos{
		z-index:1;
		}
	.footer-editor{
		width:98.5%;
		float:left;
		height:106px;
		border:1px solid #ccc;
		padding-left:1.5%;
		padding-top:7px;
		}
		
		
		.footer-editor strong{
			font-size:12px;}
		
		.col-1{
			width:160px;
			float:left;
			}
			.col-1 div{
				margin-bottom:2px;}
		
		.content-canvas{
		width: 1336px;
    	overflow: hidden;
    	height: 667px;
    	margin-left: 63px;
		position:relative;
		}
		
		#content-1{
		width: 1336px;
    	overflow: hidden;
    	/*height: 854px;*/
		}
		
		.content-subir-img{
			color:#FFF;
			background:#333;
			float:left;
			padding:5px;
			}
			
			#uploaded-file{
				width: 1336px;
				height: 667px;
				position:relative;
				left:0;
				top:0;}
				
				.vercanvas{
					display:none;
					}
					
					.esperar{
						position:fixed;
						width:100%;
						height:100%;
						background:rgba(0,0,0, 0.8);
						color:#fff;
						font-size:18px;
						z-index:111;
						top:0;
						display:none;
						
						
						}
						
						.precarga{
							
							width:50%;
							height:200px;
							margin:auto;
							margin-top:16%;
							text-align:center;
							background: url(images/espere.gif) 50% 50% no-repeat , #fff;}
							
</style>
<link href="css/literallycanvas.css" rel="stylesheet">
<!-- dependency: React.js -->
<script src="js/react-with-addons.js"></script>

<!-- Literally Canvas -->
<script src="js/literallycanvas.js"></script>

<script type="text/javascript"> 
  
  //svar id_canvas = "bg1";

			function dtap(valor){
				alert(valor);
				//crear_form();
				}
				
			function cargar_form(suma_tap){
				
				$("<form/>",{ action: "javascript:void(0);", id: "f"+suma_tap}).appendTo("#content-tap");
				$("#f"+suma_tap).append('<div class="row"><div class="col-lg-2"><input type="file" name="archivo" id="archivo'+suma_tap+'" accept="image/x-png, image/jpeg"/><input  type="hidden" name="id_request" id="id_request'+suma_tap+'" value="<?php echo $_GET['id']; ?>"><input  type="hidden" name="type" id="type" value="<?php echo $_GET['type']; ?>"></div></div><div class="row"><div class="col-lg-2"><input type="submit"  value="Subir" id="'+suma_tap+'" class="btn btn-success" /><input type="submit"  value="paste" id="'+suma_tap+'" class="btn btn-success" /></div><div class="col-lg-4"><progress id="barra_de_progreso" value="0" max="100"></progress></div></div>');
					
			}
					
			
			function newtap(tap) {
				
				var suma_tap = parseInt(tap) + 1;
				var menos_tap = suma_tap - 1;
				
				//Añade la pestaña
				$("#content-tap").append("<a href='#' class='tap-open' onclick='dtap("+suma_tap+"); return false;'><div id="+suma_tap+" >Soy el tap "+suma_tap+"</div></a><div class='paste content-"+suma_tap+"' name='"+suma_tap+"'></div>");
				
				
				$(".content-"+suma_tap).load("redline-html.php", {suma_tap:suma_tap});
				cargar_form(suma_tap);
				$("#newtap").removeClass(tap);
				$("#newtap").addClass(""+suma_tap);
				$("#content-"+menos_tap).css('display','none');
				//alert("content-"+menos_tap);
				var id_canvas = "bg"+suma_tap;
				//var jairo = backgroundCanvas.id = id_canvas;;
				//alert(id_canvas);
				llamar_editor(id_canvas);
				mostrarBg(id_canvas, suma_tap);
				
				
			}
				
			function subirArchivos(form, id_canvas) {
				var tap_n = form;
				console.log("Tap Donde sube"+tap_n);
                $("#archivo"+form).upload('redline_subida.php',
                { 
                    nombre_archivo: $("#nombre_archivo"+form).val(),
					id_request: $("#id_request"+form).val(),
					type: $("#type").val(),
					tap_n: tap_n
                },
				
                function(respuesta) {
                    //Subida finalizada.
                    $("#barra_de_progreso").val(0);
                    //if (respuesta = "Hola Jairo") {
                       // mostrarRespuesta(respuesta, true, id_canvas);
                        //$("#nombre_archivo, #archivo").val('');
                    //} else {
                        //mostrarRespuesta('El archivo NO se ha podido subir.', false);
                    //}
                   
				   
                }, function(progreso, valor) {
                    //Barra de progreso.
                    $("#barra_de_progreso"+form).val(valor);
                });
            }
           /* function eliminarArchivos(archivo) {
                $.ajax({
                    url: 'eliminar_archivo.php',
                    type: 'POST',
                    timeout: 10000,
                    data: {archivo: archivo},
                    error: function() {
                        mostrarRespuesta('Error al intentar eliminar el archivo.', false);
                    },
                    success: function(respuesta) {
                        if (respuesta == 1) {
                            mostrarRespuesta('El archivo ha sido eliminado.', true);
                        } else {
                            mostrarRespuesta('Error al intentar eliminar el archivo.', false);                            
                        }
                        mostrarArchivos();
                    }
                });
            }*/
			
            function mostrarArchivos() {
                $.ajax({
                    url: 'redline_mostrar.php',
                    dataType: 'JSON',
                    success: function(respuesta) {
                        if (respuesta) {
                            var html = '';
                            for (var i = 0; i < respuesta.length; i++) {
                                if (respuesta[i] != undefined) {
                                    html += '<div class="row"> <span class="col-lg-2"> ' + respuesta[i] + ' </span> <div class="col-lg-2"> <a class="eliminar_archivo btn btn-danger" href="javascript:void(0);"> Eliminar </a> </div> </div> <hr />';
                                }
                            }
                            $("#archivos_subidos").html(html);
                        }
                    }
                });
            }
			
			
			function mostrarBg(id_canvas, tap_n) {
				var type = "<?php echo $_GET['type']; ?>";
				var id_request = <?php echo $_GET['id']; ?>;
				var tap_n = tap_n;
				
				setTimeout(function(){
				//alert(id_canvas);
                $.ajax({
                    url: 'redline_mostrar.php',
                    type: 'POST',
                    //timeout: 10000,
                    data: {type: type, id_request: id_request, tap_n : tap_n},
                    success: function(respuesta) {
						$("#"+id_canvas).css('background', respuesta);
					   
                    }
                });},500);
            }

            function mostrarRespuesta(mensaje, ok, id_canvas){
				//alert("Soy el Canvas " + id_canvas)
				//alert("Soy el Mensaje " + mensaje)
				
				
                $("#respuesta").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                if(ok){
                    $("#"+id_canvas).css('background', mensaje);
					//alert("#"+id_canvas);
					
                }else{
                    $("#respuesta").addClass('alert-danger');
                }
				
            }

            $(document).ready(function() {
                
				var pestana;
				newtap(0);	//alert(id_canvas);
				//mostrarBg();
				
                $("body").on('click','.btn', function() {
					var form = $(this).attr("id");
					var id_canvas = "bg"+form;
					subirArchivos(form);
					mostrarBg(id_canvas, form);
					//mostrarBg();
			});
				
				
                $("#archivos_subidos").on('click', '.eliminar_archivo', function() {
                    var archivo = $(this).parents('.row').eq(0).find('span').text();
                    archivo = $.trim(archivo);
                    eliminarArchivos(archivo);
                });
				
				
				$("#newtap").on('click', function() {
                    var tap = $("#newtap").attr("class");
                    newtap(tap);
					//disparo();
					var tap = $("#newtap").attr("class");
                });

			//cerrar taps
			$(".tap-open").on('click', function() {
				alert('tap open');
                });
				
				
				
				$("body").on('mouseenter','.paste', function() {
				tap = $(this).attr('name');
				$('.pestana').attr('id', tap);
				//$(".content-"+pestana).css("border", "red 2px solid");
				//alert(pestana);
                });
				
		
           			var CLIPBOARD = new CLIPBOARD_CLASS("canvas-paste", true);
		   
		   
		    });
			
        </script>
        

</head>

<body onload="init()">

<div class="esperar">
  <div class="precarga"></div>
</div>

<div  style="position: relative; z-index:99; height:50px;" >
	<div class="1" id="newtap"> AGREGAR TAPS </div>	 
</div>

<div id="content-tap">
</div>
<div class="pestana"></div>


<canvas id="canvas-paste" style="display:none;"></canvas>

    <!--Fin Div editor-->
   <div class="container">      
   <!--<div id="respuesta" class="alert"></div>-->
            <!--<form action="javascript:void(0);">
                <div class="row">
                    
                    <div class="col-lg-2">
                        <input type="file" name="archivo" id="archivo" accept="image/x-png, image/jpeg"/>
                        <input  type="hidden" name="id_request" id="id_request" value="<?php echo $_GET['id']; ?>">
                     	<input  type="hidden" name="type" id="type" value="<?php echo $_GET['type']; ?>">
                    </div>                    
                </div>
                <hr />
                <div class="row">
                    <div class="col-lg-2">
                        <input type="submit" id="boton_subir" value="Subir" class="btn btn-success" />
                    </div>
                    <div class="col-lg-4">
                        <progress id="barra_de_progreso" value="0" max="100"></progress>
                    </div>
                </div>
            </form>-->
            <!--<div id="archivos_subidos"></div>-->
</div>
 
<script>
 
canvas_paste = document.getElementById("canvas-paste");
//canvas = document.getElementById("canvas-paste");
	/**
     * Export and display the canvas as PNG in a new wind	ow
     */
	
	function exportAndView() {

		
		var screenshot = canvas_pasteCanvas2Image.saveAsPNG(canvas_paste, true);
		var pestana = $('.pestana').attr('id');
		var  tap_n = pestana;
		
		$(".vercanvas").html(screenshot);
		$("img").addClass('img');
		var id_request = "<?php echo $_GET['id']; ?>"
		var type = $("#type").val();
		
		data = $('.img').attr('src');
		alert("ID:"+id_request+" type:"+type+"tap: "+tap_n)
		//canvas.parentNode.removeChild(screenshot);

		// Send the screenshot to PHP to save it on the server
		var url = 'redline_subida/export.php';
		$.ajax({ 
		    type: "POST", 
		    url: url,
		    dataType: 'text',
		    data: {
		        base64data : data, id_request : id_request, type : type, tap_n : tap_n
		    }
		});
		//$(".vercanvas").remove();
		//alerta();

	}

	
 
    


    /**
     * image pasting into canvas
     * 
     * @param string canvas_id canvas id
     * @param boolean autoresize if canvas will be resized
     */
	 
    function CLIPBOARD_CLASS(canvas_id, autoresize) {
		//alert("Esta es la pestana: "+pestana);
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
            pasteCatcher.style.marginLeft = "40px";
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
			
			//Abre la funcion que exporta la imagen pegada

			setTimeout(function(){ $(".esperar").css('display', 'block'); exportAndView();},1000);
			setTimeout(function(){ var pestana = $('.pestana').attr('id'); var id_canvas = "bg"+pestana; mostrarBg(id_canvas, pestana); $(".esperar").css('display', 'none');},2000);
			
			//alert('ol'); 
			
			
        };
		
		//guardar_paste();
    }


		
</script>



<div class="vercanvas"></div>
<div id="taps"></div>
 
</body>
</html>