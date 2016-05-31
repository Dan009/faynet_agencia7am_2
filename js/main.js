$(document).ready(function(){

	///////////////////////////////////////////////////////////////////////
	// ESTE CODIGO ES PARA MOSTRAR UNA VENTANA NUEVA
	//////////////////////////////////////////////////////////////////////
   
		$(".add_ventana").click(function(){
			
			//alert($(this).attr("name") );
			var name_ventana= $(this).attr("name");
			var id_tipo = $(this).attr("dir");
			
			$("#ventana_"+name_ventana).fadeIn(0);
			
		//	$(".div_title_ventana").removeClass("ventana_activa");
		//	$("#ventana_"+name_ventana).addClass("ventana_activa");
			
		//	if(name_ventana=="inside_plan"){
				
				$.ajax({
	                type: 'POST',
	                url: "http://"+hostname+ruta+"plans/"+name_ventana+".php",
	                data: {id_tipo:id_tipo},
	                success: function(data) {    
						$("#carga_ventana_load").append(data);
						$(".content_form").fadeOut(0);
						$("#content_"+name_ventana).fadeIn(0);
						$(".div_title_ventana ").removeClass("ventana_activa");
						$("#ventana_"+name_ventana).addClass("ventana_activa");
	                }
	            }) 
		//	}
			
			
			
		});
	
	
	///////////////////////////////////////////////////////////////////////
	// ESTE CODIGO ES PARA MOSTRAR UNA VENTANA NUEVA DENTRO DEL PLAN
	//////////////////////////////////////////////////////////////////////
	   
		$(".add_plan").click(function(){
			
			//alert($(this).attr("name") );
			var name_ventana= $(this).attr("name");
			//var type= $(this).attr("type");
			var title= $(this).attr("title");
			$("#ventana_"+name_ventana).fadeIn(0);
			
		//	$(".div_title_ventana").removeClass("ventana_activa");
		//	$("#ventana_"+name_ventana).addClass("ventana_activa");
			
		//	if(name_ventana=="inside_plan"){
				
				
				$.ajax({
	                type: 'POST',
	                url: "http://"+hostname+ruta+"plans/"+title+".php",
	                data: "",
	                success: function(data) {   
					
						$("#container_form_"+name_ventana).append(data);
						$(".div_title_ventana").removeClass("ventana_activa");
						$("#ventana_"+name_ventana).addClass("ventana_activa");
						$("."+title).removeAttr("name");
	                }
	            }) 
		//	}
			
			
			
		});
		
		///////////////////////////////////////////////////////////////////////
		//  ESTE CODIGO ES PARA MOSTRAR UNA VENTANA NUEVA DE LAS OTRAS    ////
		/////////////////////////////////////////////////////////////////////
		

			$(".div_title_ventana").click(function(e){
				
				var id_content=$(this).attr("name");

				console.log(id_content);


					if (id_content == "content_customer_contact") {

						$.ajax({
							type: 'POST',
							url: "http://"+hostname+ruta+"include/cpe-forms/customer_contact_form.php",
							success: function(data) {    

								//$(".center_form_custormer_contact").append(data);
								
								
								$(".content_form").fadeOut(0);

								$("#"+id_content).fadeIn(100);
								
								$("#ventana_customer_contact").addClass("ventana_activa");
					
								
							}
							
						});

					}else if(id_content == "ventana_lgx_info") {
						$(".content_form").fadeOut(0);

							console.log("#"+id_content);


						$("#"+id_content).fadeIn(100);
								
					
						
					}else if(id_content == "content_lit_equip_info") {
						$(".content_form").fadeOut(0);

							console.log("#"+id_content);


						$("#"+id_content).fadeIn(100);
								
					
						
					}

				$(".content_form").fadeOut(0);			
				$("#"+id_content).fadeIn(100);
				
				$(".div_title_ventana").removeClass("ventana_activa");
				$(this).addClass("ventana_activa");

				
				
				
			});
	
	//////////////////////////////////////////////////////////////////////
	/////////////////       CERRAR VENTANA        ////////////////////////
	//////////////////////////////////////////////////////////////////////
	
		$(".cerrar_ventana").click(function(e){
			e.stopPropagation();
			var nombre_ventana = $(this).parents(".div_title_ventana").attr("name");
			$(this).parents(".div_title_ventana").fadeOut(0);
			
			$("#"+nombre_ventana).remove();
			
			$("#content_general_information").fadeIn(0);
			
			
		});
		
	
	
	//////////////////////////////////////////////////////////////////////
	///////////////// FIN CERRAR VENTANA   ////////////////////////
	//////////////////////////////////////////////////////////////////////
	
	///////////////////////////////////////////////////////////////////////
	// ESTE CODIGO ES PARA MARCAR EN EL MENU EN QUE PAGINA TE ENCUENTRAS
	//////////////////////////////////////////////////////////////////////
		var pathname = window.location.pathname;
		//alert(pathname);
		
		if(pathname=="/faynet/" || pathname=="/faynet/index.php" ){
			
			$("#li_home").css({
				"border-bottom":"5px solid rgb(144,207,76)"
			
			});
			
		}
		if(pathname=="/faynet/request.php"  ){
			
			$("#li_request").css({
				"border-bottom":"5px solid rgb(144,207,76)"
			
			});
			
		}
		if(pathname=="/faynet/report.php"  ){
			
			$("#li_report").css({
				"border-bottom":"5px solid rgb(144,207,76)"
			
			});
			
		}
	
	
	///////////////////////////////////////////////////////////////////////
	// LOGIN
	//////////////////////////////////////////////////////////////////////
	   
		$("#form_login").submit(function(){
			
			$.ajax({
				type: 'POST',
				url: $(this).attr("action"),
				data: $(this).serialize(),
				success: function(data) {    
					$("body").append(data);
					
					if($(".login_resultado").attr("id")=="logueado" ){
						$(".error_mensaje").fadeOut(50);
						//location.reload();
						window.location = "index.php";
					}else{
						
						$(".error_mensaje").fadeIn(100);
						$(".login_resultado").remove();
					}
					
				}

			});	
			
			return false;
		});
		$(".logout").click(function(){
			
			$.ajax({
				type: 'POST',
				url: "http://"+hostname+ruta+"include/logout.php",
				data: "",
				success: function(data) {    
					location.reload();
				}
			})  	
			
			return false;
		});
		
   
   
	///////////////////////////////////////////////////////////////////////
	// AGREGANDO GENERAL INFORMATION Y DEMAS VENTANAS
	//////////////////////////////////////////////////////////////////////
   
   
		$(document).on('submit','#form_request',function(){
			//$(".exito_insert").fadeIn(200);
		    var formData = new FormData(this);  
		    // alert("estoy haciendo submit");
			$.ajax({
				type: 'POST',
				url: $(this).attr("action"),
				data: $(this).serialize(),
				mimeType:"multipart/form-data",
				contentType: false,
				cache: false,
				processData:false,				
				success: function(data) {  
				
					//$(".hola").append(data);
					
					
				}
			})  
			
			
		  // return false;
		}); 
		
		
		
		$(".exito_insert").click(function(){
			
			location.reload();
			
		});
	
	
	
	
	
	/////////////////////////////
	////////////////////////////
	
	
	
	///////////////////////////////////////////////////////////////////////
	// CLICK EN RADIO BUTTON INSIDE PLAN
	//////////////////////////////////////////////////////////////////////
   	
		$("#form_request").on("click", ".radio_click", null, function(){
			
			//alert("dasds");
			
		});
		
		
		////// CENTER EXITO INSERT INFORMATION
		
	       $(".div_exito_insert").css({
	            top: ($(".exito_insert").height() - $(".div_exito_insert").outerHeight())/2,
	            left: ($(".exito_insert").width() - $(".div_exito_insert").outerWidth())/2,
	        });	
			

		$(window).resize(function(){ 

	       $(".div_exito_insert").css({
	            top: ($(".exito_insert").height() - $(".div_exito_insert").outerHeight())/2,
	            left: ($(".exito_insert").width() - $(".div_exito_insert").outerWidth())/2,
	        });
			
	       $(".fancy_list_job").css({
	          //  top: ($(".fondo_list_job").height() - $(".fancy_list_job").outerHeight())/2,
	            left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,
	        });
		
			
		});
		
	
	///////////////////////////////////////////////////////////////////////
	// ABRIR CUADRO EN LA LISTA DE TRABAJOS
	//////////////////////////////////////////////////////////////////////	

	
		$(".open_detail_job").click(function(){
			
			if($(this).attr("id") ){
				var arrayStringsIDS = $(this).attr("id").split(".");

				var name=$(this).attr("name");
				var tipo=$(this).attr("title");
				var id_request= arrayStringsIDS[0];
				var id_tipo= arrayStringsIDS[1];
				var siDiseñador = arrayStringsIDS[2]?arrayStringsIDS[2]:"vacio";
				
				//alert("http://"+hostname+ruta+"include/"+name+".php");
				
				$.ajax({
					type: 'POST',
					url: "http://"+hostname+ruta+"include/"+name+".php",
					data:{id_request:id_request, tipo:tipo,id_tipo:id_tipo,siDiseñador:siDiseñador},
					success: function(data) {    
						$("body").css({ "overflow":"hidden" });
						$(".fondo_list_job").fadeIn(100);
						$(".fancy_list_job").append(data);

							$(".fancy_list_job").css("width","900px");
						
						$(".fancy_list_job").css({
							left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,
							
						});
												
					}
				});
							
			}
			
		});
		
		$(".fancy_list_job").css({
			//top: ($(".fondo_list_job").height() - $(".fancy_list_job").outerHeight())/2,
			left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,
		});
		
		$(".fondo_list_job").click(function(){		
			$(this).fadeOut(100);
			$(".fancy_list_job").html("");	
			$("body").css({ "overflow":"auto" });
		});
		
		$(".fancy_list_job").click(function(e){		
			e.stopPropagation();		
		});
		
		
	    $(document).keyup(function(event){
	        if(event.which==27)
	        {
				$(".fondo_list_job").fadeOut(100);
				$(".fancy_list_job").html("");
				$("body").css({ "overflow":"auto" });
	        }
	    });	
	
	
	
	
	///////////////////////////////////////////////////////////////////////
	// ABRIR ASIGNAR DESIGNER
	//////////////////////////////////////////////////////////////////////	
	
		$(".open_designer").click(function(){
			
			if($(this).attr("id") ){
				var name=$(this).attr("name");
				var id_request=$(this).attr("id");
				
				//alert("http://"+hostname+ruta+"include/"+name+".php");
				
				$.ajax({
					type: 'POST',
					url: "http://"+hostname+ruta+"include/"+name+".php",
					data:{id_request:id_request},
					success: function(data) {   
						$("body").css({ "overflow":"hidden" });
						$(".fondo_list_job").fadeIn(100);
						$(".fancy_list_job").append(data);
						
						$(".fancy_list_job").css({
							left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,
						});
												
					}
				})
							
			}
					
		});
		
		$(".fancy_list_job").css({
			//top: ($(".fondo_list_job").height() - $(".fancy_list_job").outerHeight())/2,
			left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,
		});
		
		$(".fondo_list_job").click(function(){		
			$(this).fadeOut(100);
			$(".fancy_list_job").html("");	
			$("body").css({ "overflow":"auto" });
		});
		
		$(".fancy_list_job").click(function(e){		
			e.stopPropagation();		
		});
		
		
	    $(document).keyup(function(event){
	        if(event.which==27)
	        {
				$(".fondo_list_job").fadeOut(100);
				$(".fancy_list_job").html("");
				$("body").css({ "overflow":"auto" });
	        }
	    });	
		
	
	
///////////////////////////////////////////////////////////////////////////////////////////////////	   
///////////////////////   ABRIR DIV COPY PASTE   ////////////////////////////////////	   
///////////////////////////////////////////////////////////////////////////////////////////////////	



///////////////////////////////////////////////////////////////////////////////////////////////////	   
///////////////////////    ABRIR UNA VENTANA APARTE PARA PODER AGREGAR EL DISEÑADOR /////////////// 
//////////////////////////////////////////////////////////////////////////////////////////////////

	$(".open_add_designer").click(function(){

			// AGREGAR LOS ESTILOS PARA PONER LA PAGINA HEURISTICA
				$(".fancy_list_job").css("width"," 474px");

		$.ajax({
			type: 'POST',
			url: "http://"+hostname+ruta+"include/add_designer.php", 
			success: function(data) {   

				$("body").css({ "overflow":"hidden" });
				$(".fondo_list_job").fadeIn(100);
				$(".fancy_list_job").append(data);
				
				$(".fancy_list_job").css({
					left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,
				});

				// AGREGAR LOS ESTILOS PARA PONER LA PAGINA HEURISTICA
						$(".header-overview").css("margin-left","2%");
						$("#form_designer").css("margin-left","4%");
										
			}
		}); 
		

	});

///////////////////////////////////////////////////////////////////////////////////////////////////	   
///////////////////////    ABRIR UNA VENTANA APARTE PARA PODER AGREGAR EL CONTRATISTA /////////////  
//////////////////////////////////////////////////////////////////////////////////////////////////

	$(".open_add_contractor").click(function(){

		var tipo = "CONTRACTOR";
			// AGREGAR LOS ESTILOS PARA PONER LA PAGINA HEURISTICA
				$(".fancy_list_job").css("width"," 474px");

			$.ajax({
				type: 'POST',
				url: "http://"+hostname+ruta+"include/add_big_one.php",
				data:{tipo:tipo}, 
				success: function(data) {   
					$("body").css({ "overflow":"hidden" });
					$(".fondo_list_job").fadeIn(100);
					$(".fancy_list_job").append(data);
					
					$(".fancy_list_job").css({
						left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,
					});

					// AGREGAR LOS ESTILOS PARA PONER LA PAGINA HEURISTICA
						$(".header-overview").css("margin-left","2%");
						$("#form_designer").css("margin-left","4%");
											
				}
			}); 
		

	});

///////////////////////////////////////////////////////////////////////////////////////////////////	   
///////////////////////    ABRIR UNA VENTANA APARTE PARA PODER AGREGAR LA EMPRESA ///////////////  
//////////////////////////////////////////////////////////////////////////////////////////////////

	$(".open_add_company").click(function(){

		var tipo = "COMPANY";

			$.ajax({
				type: 'POST',
				url: "http://"+hostname+ruta+"include/add_big_one.php",
				data:{tipo:tipo}, 
				success: function(data) {   
					// AGREGAR LOS ESTILOS PARA PONER LA PAGINA HEURISTICA
						$(".fancy_list_job").css("width"," 474px");

					$("body").css({ "overflow":"hidden" });
					$(".fondo_list_job").fadeIn(100);
					$(".fancy_list_job").append(data);
					
					$(".fancy_list_job").css({
						left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,
					});


					// AGREGAR LOS ESTILOS PARA PONER LA PAGINA HEURISTICA
						$(".header-overview").css("margin-left","2%");
						$("#form_designer").css("margin-left","4%");

				}
			}); 

	});

///////////////////////////////////////////////////////////////////////////////////////////////////	   
///////////////////////    ABRIR UNA VENTANA APARTE PARA PODER REVISAR EL PROGRESO ///////////////  
//////////////////////////////////////////////////////////////////////////////////////////////////

	$(".open_job_progress").click(function(){

		var id = $(this).attr("id");

			$.ajax({
				type: 'POST',
				url: "http://"+hostname+ruta+"include/view_progress.php",
				data:{id_designer:id},
				success: function(data) {   
					// AGREGAR LOS ESTILOS PARA PONER LA PAGINA HEURISTICA
						$(".fancy_list_job").css("width","750px");

					$("body").css({ "overflow":"hidden" });
					$(".fondo_list_job").fadeIn(100);
					$(".fancy_list_job").append(data);
					
					$(".fancy_list_job").css({
						left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,
					});


				}
			}); 

	});

   
///////////////////////////////////////////////////////////////////////////////////////////////////	   
///////////////////////   FORMULARIO DE COTIZACION Y FACTURA   ////////////////////////////////////	   
///////////////////////////////////////////////////////////////////////////////////////////////////	   
	   
	$(document).on('submit','#form_cotizacion',function(){
		$(".exito_insert").fadeIn(200);
	   var formData = new FormData(this);  
	  // alert("estoy haciendo submit");
		$.ajax({
			type: 'POST',
			url: $(this).attr("action"),
			data: formData,
			mimeType:"multipart/form-data",
			contentType: false,
			cache: false,
			processData:false,				
			success: function(data) {    
				$("body").append(data);
				if($(".ejecuta_cotizacion").attr("id")=="cotizado"){
					$(".loader_request").fadeOut(0);
					$(".text_exito_insert").fadeIn(100);
					
					$(".ejecuta_cotizacion").remove();
					
				}
				
			}
		});  
		
	   return false;

	}); 
	   
	   
	   
	   
});









