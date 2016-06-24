$(document).ready(function(){

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


	///////////////////////////////////////////////////////////////////////
	// ESTE CODIGO ES PARA MOSTRAR UNA VENTANA NUEVA
	//////////////////////////////////////////////////////////////////////
   
		$(".add_ventana").click(function(){
			
			//alert($(this).attr("name") );
			var name_ventana= $(this).attr("name");
			$("#ventana_"+name_ventana).fadeIn(0);
			
					//	$(".div_title_ventana").removeClass("ventana_activa");
					//	$("#ventana_"+name_ventana).addClass("ventana_activa");
						
					//	if(name_ventana=="inside_plan"){
							
				
				$.ajax({
	                type: 'POST',
	                url: "http://"+hostname+ruta+"plans/"+name_ventana+".php",
	                data: "",
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

	///////////////////////////////////////////////////////////////////////////////////////////////////////////
	// IDENTIFICAR EL NOMBRE SI EL USUARIO ESTA EN CPE FORM Y INSERTAR EL DOCUMENTO PHP CORRESPONDIENTE
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
		function insertarCPEform(name_ventana){

			var id_information = $("#id_information").val();
			var id_request = $("#id_request").val();

				if (name_ventana == "content_building_info") {

					$.ajax({
		                type: 'POST',
		                url: "http://"+hostname+ruta+"include/cpe-forms/content_building_info.php",
		                data:{id_information:id_information,id_request:id_request},
		                success: function(data) {    
		                	//console.log(id_information+" "+id_request);

							//$("#carga_ventana_load").append(data);
							//$("#content_building_info .container_form .center_form").html(data);
							$(".center_form").html(data);
							//$(".content_form").fadeOut(0);
							$("#content_"+name_ventana).fadeIn(0);

		                }

		            }); 

			    }else if (name_ventana == "content_customer_contact"){

			    	$.ajax({
		                type: 'POST',
		                url: "http://"+hostname+ruta+"include/cpe-forms/customer_contact_form.php",
		                data:{id_information:id_information,id_request:id_request},
		                success: function(data) {    
							/*$("#content_customer_contact .container_form_custormer_contact"+
							 ".center_form_custormer_contact").html(data);*/

							 $(".center_form_custormer_contact").html(data);
							//$(".content_form").fadeOut(0);
							$("#content_"+name_ventana).fadeIn(0);


		                }

		            }); 


			    }else if (name_ventana == "ventana_lgx_info"){

			    	$.ajax({
		                type: 'POST',
		                url: "http://"+hostname+ruta+"include/cpe-forms/lgx_info_form.php",
		                data:{id_information:id_information,id_request:id_request},
		                success: function(data) {    
		                	//console.log(id_information+" "+id_request);

							//$("#carga_ventana_load").append(data);
							$(".center_form_lgx_info").html(data);
							//$(".content_form").fadeOut(0);
							$("#content_"+name_ventana).fadeIn(0);

		                }

		            }); 


			    }else if (name_ventana == "ventana_lit_equip_info"){

			    	$.ajax({
		                type: 'POST',
		                url: "http://"+hostname+ruta+"include/cpe-forms/lit_equip_info_form.php",
		                data:{id_information:id_information,id_request:id_request},
		                success: function(data) {    
		                	//console.log(id_information+" "+id_request);

							//$("#carga_ventana_load").append(data);
							$(".center_lit_equip_info").html(data);
							//$(".content_form").fadeOut(0);
							$("#content_"+name_ventana).fadeIn(0);

		                }

		            }); 


			    }

		}

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
	            }); 

					//	}
			
			
		});
		
		

		$(".div_title_ventana").click(function(){
			
			var id_content=$(this).attr("name");


				insertarCPEform(id_content);

			$(".content_form").fadeOut(0);			
			$("#"+id_content).fadeIn(100);
			
			$(".div_title_ventana ").removeClass("ventana_activa");
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
					location.reload();
					
				}else{
					
					$(".error_mensaje").fadeIn(100);
					$(".login_resultado").remove();
				}
				
			}
		}) 	
		
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
	
	
	
///////////////////////////////////////////////////////////////////////////////////////////////////	   
///////////////////////   ABRIR DIV COPY PASTE   ////////////////////////////////////	   
///////////////////////////////////////////////////////////////////////////////////////////////////	




///////////////////////////////////////////////////////////////////////////////////////////////////	   
///////////////////////    ABRIR UNA VENTANA APARTE PARA PODER AGREGAR EL DISEÑADOR ///////////////  
//////////////////////////////////////////////////////////////////////////////////////////////////
	
	//// VENTANA DESIGNER

		$(".open_add_designer").click(function(){

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
											
				}
			}); 
			

		});

	//// VENTANA CONTRACTOR
		$(".open_add_contractor").click(function(){

			$.ajax({
				type: 'POST',
				url: "http://"+hostname+ruta+"include/add_big_one.php",
				data: {tipo:"CONTRACTOR" }, 
				success: function(data) {   
					$("body").css({ "overflow":"hidden" });
					$(".fondo_list_job").fadeIn(100);
					$(".fancy_list_job").append(data);
					
					$(".fancy_list_job").css({
						left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,
					});
											
				}
			}); 
			

		});

	//// VENTANA COMPANY
		$(".open_add_company").click(function(){

			$.ajax({
				type: 'POST',
				url: "http://"+hostname+ruta+"include/add_big_one.php",
				data: {tipo:"COMPANY"}, 
				success: function(data) {   
					$("body").css({ "overflow":"hidden" });
					$(".fondo_list_job").fadeIn(100);
					$(".fancy_list_job").append(data);
					
					$(".fancy_list_job").css({
						left: ($(".fondo_list_job").width() - $(".fancy_list_job").outerWidth())/2,
					});
											
				}
			}); 
			

		});

	//// VENTANA INGENIERO 
		$(".open_add_engineer").click(function(){

			$.ajax({
				type: 'POST',
				url: "http://"+hostname+ruta+"include/add_engineer.php",
				data: {tipo:"engineer" }, 
				success: function(data) {   
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
		})  
		
	   return false;
	}); 
	   
	   
	   
	   
});









