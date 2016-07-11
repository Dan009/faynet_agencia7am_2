    
    var contador = 0;
 
        /////////////////////////////////////////////////////////////
        //////////            PRIMER PASO              /////////////
        ///////////////////////////////////////////////////////////

            /////////////////////////////////////////////////////////////
            //////////PARA SUBIR ARCHIVOS GENERAL E INSIDE /////////////
            ///////////////////////////////////////////////////////////
         
                function subirArchivoPanel(div_input_picture,information_id) {

                    var type = $(div_input_picture).parent().parent().find("#type").val();
                        contador++;

                            /*var nombreArchivo = $("#nombre_archivo").val();
                            var code = $("#code").val();
                            var type = $("#type").val();

                                $.ajax({
                                    type: "POST",
                                    url: "include/subir_archivo.php",
                                    data: {nombre_archivo:nombreArchivo,code:code,type:type<?php if(isset($_GET['id_information'])){echo ",id_information: $id_information";} ?>},
                                    success: function(data){
                                        $(".temp").append(data);

                                    }

                                });*/
            
                    $(div_input_picture).upload('include/cpe_photos_manager.php',
                    {
                        type: type,
                        tipo_ejecucion: "subir_archivo",
                        cantidad_ejecucion:contador,
                        id_information: information_id

                    },
                    
                    function(respuesta) {
                        //Subida finalizada.

                            if (respuesta === 0) {
                                var idDivPanel = "#"+$(this).attr("id");

                                        console.log(idDivPanel);

                                    mostrarRespuesta('El archivo NO se ha podido subir.', false);
                                    $("#nombre_archivo,"+idDivPanel+"").val('');

                            } else {
                                var select_temp_type = "select_image";
                 

                                    $.post("include/cpe_photos_manager.php",
                                        {
                                            type: type,
                                            tipo_ejecucion:select_temp_type,
                                            id_information: information_id

                                        } ,
                                        function (data) {
                                            $(".temp_panel").append(data);

                                    });

                                // $.get("include/select_temp.php", function (data) {
                                //  $(".temp").append(data);
                                // });
                                $(".hideme").css("left","3000000000000%");

                                $(".editor_imagenes_panel").fadeIn(200);
                                mostrarRespuesta('Subido Correctamente.', true);
                                mostrarArchivos();
                                
                                $.get("include/editor.php", function (data) {
                                    $(".editor_imagenes_content_panel").append(data);
									
                                });


                                $("body").css({ 'overflow': "hidden" });
                                
                                //window.stop();
                            }
                                
                        });/**/

                        console.log(type);
                        
                    $("#txtCurrentPanelPhoto").val(type);

                }

            ///////////////////////////////////////////////////////////
            ///    LLAMADA DE LA PRIMERA FUNCION SUBIRARCHIVO()    ///
            /////////////////////////////////////////////////////////

                $(document).ready(function() {
                    var id_information = $("#id_information").val();
                    var id_request = $("#id_request").val();    

                        $(document).on("change",
                            "#archivoCPEPanelPhoto,#archivoCPEPanelPhoto2,#archivoCPEPanelPhoto3,#archivoCPERoom",
                            function(){
                            /*$("#dvPictureImage").fadeOut(0);
                            $("#dvCanvaImage").fadeOut(0);*/

                                $(this).parent().parent().css("z-index","-999999");

                                var panelDivs = ["archivoCPEPanelPhoto",
                                "archivoCPEPanelPhoto2",
                                "archivoCPEPanelPhoto3",
                                "archivoCPERoom"];

                                    $("#archivoCPEPanelPhoto,#archivoCPEPanelPhoto2,#archivoCPEPanelPhoto3,#archivoCPERoom")
                                    .css("left","-30000%");

                                        /*for (var i = 0; i < Things.length; i++) {
                                            Things[i]
                                        }*/

                                subirArchivoPanel(this,id_information);
      
                                /*

                                    $.ajax({
                                        type: "POST",
                                        url: "include/cpe_photos_manager.php",
                                        data: { tipo_ejecucion: $("#tipo_ejecucion").val(),
                                        cantidad_ejecucion:contador<?php echo ",\nid_information: $id_information,"; ?>},
                                        success: function(data){
                                            console.log(data);
                                            //console.log($("#tipo_ejecucion").val());

                                        }

                                    });

                                */

                        });

                            /////////////////////////////////////////////////////////////
                            ///    ESCUCHADOR DEL MOUSE PARA MOSTRAR EL MENSAJE      ///
                            ///////////////////////////////////////////////////////////

                                /******   NO USAR CHAINING JQUERY  *******/ 

                                    // PRIMER DIV LGX 

                                        /**/ $(document).on("mouseenter","#archivoCPELGXPhoto1", function(){

                                                //console.log($(this).parent().children(".text_select_image_lgx").text());

                                                $(this).parent().children(".text_select_image_lgx").fadeIn(150);
												
                                                

                                            });

                                            $(document).on("mouseleave","#archivoCPELGXPhoto1", function(){
                                                 $(this).parent().children(".text_select_image_lgx").fadeOut(150);
												 
												 

                                            });

                                    // SEGUNDO DIV LGX

                                        $(document).on("mouseenter","#archivoCPELGXPhoto2", function(){

                                            //console.log($(this).parent().children(".text_select_image_lgx").text());

                                                $(this).parent().children(".text_select_image_lgx").fadeIn(150);
                                            

                                        });

                                        $(document).on("mouseleave","#archivoCPELGXPhoto2", function(){
                                           $(this).parent().children(".text_select_image_lgx").fadeOut(150);

                                        });

                                    // TERCER DIV LGX
                                        $(document).on("mouseenter","#archivoCPELGXPhoto3", function(){

                                            //console.log($(this).parent().children(".text_select_image_lgx").text());

                                                $(this).parent().children(".text_select_image_lgx").fadeIn(150);
                                            

                                        });

                                        $(document).on("mouseleave","#archivoCPELGXPhoto3", function(){
                                            $(this).parent().children(".text_select_image_lgx").fadeOut(150);

                                        });

                });

        /////////////////////////////////////////////////////////////
        //////////            SEGUNDO PASO              ////////////
        ///////////////////////////////////////////////////////////

            /////////////////////////////////////////////////////////////////////
            ///        FUNCION QUE BUSCA LAS FOTOS QUE SE SELECCIONARON      ///
            ///////////////////////////////////////////////////////////////////

                /////////////////////////////////////////////////////////////////////
                ///    FUNCION QUE SETEA EL DIV CON LA FOTO QUE SE SELECCIONO    ///
                ///////////////////////////////////////////////////////////////////

                    function fadeInRespectiveLGXDivPhotoPanel(type){
                       
                        if (type == "cpe_panel_1") {
                            $(".dvPictureImageFirstPanel").fadeIn(100);

                        }else if(type == "cpe_panel_2"){
                            $(".dvPictureImageSecondPanel").fadeIn(100);
                            
                        }else if(type == "cpe_panel_3"){
                            $(".dvPictureImageThridPanel").fadeIn(100);

                        }else if(type == "cpe_room"){
                            $(".dvPictureImageCPERoomPanel").fadeIn(100);

                        }

                    }  

                        function setRespectiveLGXDivPhotoPanel(type,url){
                            if (type == "cpe_panel_1") {
                                $(".dvPictureImageFirstPanel").css("background-image",url);
                                    fadeInRespectiveLGXDivPhotoPanel(type);

                            }else if(type == "cpe_panel_2"){
                                $(".dvPictureImageSecondPanel").css("background-image",url);
    							     fadeInRespectiveLGXDivPhotoPanel(type);

                            }else if(type == "cpe_panel_3"){
                                $(".dvPictureImageThridPanel").css("background-image",url);
                                    fadeInRespectiveLGXDivPhotoPanel(type);

                            }else if(type == "cpe_room"){
                                $(".dvPictureImageCPERoomPanel").css("background-image",url);
                                    fadeInRespectiveLGXDivPhotoPanel(type);

                            }
    								

                        }

                            function setPanelPhoto(id_information,type){

                                var type_ejecucion = "select_picture";

                                    //console.log(id_information,type);

                                    $.ajax({ 
                                        type: "POST", 
                                        url: "include/cpe_photos_manager.php",
                                        data: { tipo_ejecucion:type_ejecucion,type: type,id_information: id_information },
                                        success: function(data) {

                                            var urlCodePicture = "url(archivos/temp/"+data.trim()+")";

                                                setRespectiveLGXDivPhotoPanel(type,urlCodePicture);
                                          
                                        }

                                    });/**/

                            }     

                /////////////////////////////////////////////////////////////////////
                ///    FUNCION QUE SETEA EL DIV CON EL CANVA QUE SE SELECCIONO   ///
                ///////////////////////////////////////////////////////////////////
                    function fadeInRespectiveLGXDivCanvaPanel(type){

                        console.log(type);

                            if (type == "cpe_panel_1") {
                                $(".dvCanvaImageFirstPanel").fadeIn(100);

                            }else if(type == "cpe_panel_2"){
                                $(".dvCanvaImageSecondPanel").fadeIn(100);
                                
                            }else if(type == "cpe_panel_3"){
                                $(".dvCanvaImageThridPanel").fadeIn(100);

                            }else if(type == "cpe_room"){
                                $(".dvCanvaImageCPERoomPanel").fadeIn(100);

                            }
        
                    }

                        function setRespectiveLGXDivCanvaPanel(type,url){
                                console.log(type,url);

                            if (type == "cpe_panel_1") {
                                $(".dvCanvaImageFirstPanel").css("background-image",url);
                                    fadeInRespectiveLGXDivCanvaPanel(type);

                            }else if(type == "cpe_panel_2"){
                                $(".dvCanvaImageSecondPanel").css("background-image",url);
                                    fadeInRespectiveLGXDivCanvaPanel(type);

                            }else if(type == "cpe_panel_3"){
                                $(".dvCanvaImageThridPanel").css("background-image",url);
                                    fadeInRespectiveLGXDivCanvaPanel(type);

                            }else if(type == "cpe_room"){
                                $(".dvCanvaImageCPERoomPanel").css("background-image",url);
                                    fadeInRespectiveLGXDivCanvaPanel(type);

                            }


                        }

                            function setCanvasPanel(type,id_info){
                                var type_ejecucion = "select_canva";
                                
                                        console.log(type,id_info);

                                    $.ajax({ 
                                        type: "POST", 
                                        url: "include/cpe_photos_manager.php",
                                        data: { tipo_ejecucion:type_ejecucion,type: type,id_information: id_info },
                                        success: function(data) {

                                            var urlCodePicture = "url(archivos/temp/"+data.trim()+")";

                                                setRespectiveLGXDivCanvaPanel(type,urlCodePicture);
                      
                                                 
                                        }


                                    });

                            }

                              

