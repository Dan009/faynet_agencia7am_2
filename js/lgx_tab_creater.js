$(document).ready(function(){
	/*var tab_number = $("#current_tab_lgx").val();
	var last_tab_created = tab_number;*/


		$(".btn_new_request").on('click',function() {
			//console.log("Voy a llamar a "+tab_number);

			//$(".div_title_ventana ").removeClass("ventana_activa");

				last_tab_created++;
				
					var name_new_tab = "ventana_lgx_info_"+last_tab_created;

						//alert(last_tab_created);
				
						//Inserta el div de manera ascendente despues del primero
							$("div[title=ventana_lgx_info_"+tab_number+"]").after(
								$("<div />",
								{

									text: "LGX INFO "+last_tab_created,
									prop: {
										class:"div_title_ventana ventana_activa",
										style: "display: block;",
										title: name_new_tab
									},
									name: name_new_tab

								}

							));

			//console.log("Ultimo tab creado "+tab_number);
					
					//tab_number++;
					$("#current_tab_lgx").val(last_tab_created);

						console.log(tab_number);
						console.log(last_tab_created);

						//$("#txtLGXNumber").val(tab_number);

							addNewFormLGX(tab_number);
						

		});/**/
		
		
		
		
});

function addNewFormLGX(tab_number){
		
		var id_information = $("#id_information").val();
		var id_request = $("#id_request").val();

				//console.log(id_information,id_request,tab_number);

			// AGREGA LA NUEVA VENTANA AL DIV CENTRALIZADO
				$.ajax({
	                type: 'POST',
	                url: "http://"+hostname+ruta+"include/cpe-forms/lgx_info_form.php",
	                data:{id_information:id_information,id_request:id_request,tab_number:tab_number},
	                success: function(data) {    
						
						$(".center_form_lgx_info").append(data);
							
							var new_form_name = "form_cpe_lgx"+tab_number;

						    	console.log(new_form_name);
						    	console.log(tab_number);

							    	/**/

							    	$("form[name="+new_form_name+"]").append(
							    		$("<input />",
										{
											prop: {
												type:"hidden",
												value: tab_number
											},
											name: "txtLGXNumber",
											id: "txtLGXNumber"
										}

									));
					

					}

				});/**/

	   

}
