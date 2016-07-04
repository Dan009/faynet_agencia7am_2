    
    var contador = 0;
 
        /////////////////////////////////////////////////////////////
        //////////            PRIMER PASO              /////////////
        ///////////////////////////////////////////////////////////

            /////////////////////////////////////////////////////////////
            //////////PARA SUBIR ARCHIVOS GENERAL E INSIDE /////////////
            ///////////////////////////////////////////////////////////
         
                function subirArchivosLGX(div_input_picture,information_id) {

                    $(".containerprueba").css("z-index","0");
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
                                mostrarRespuesta('El archivo NO se ha podido subir.', false);
                                $("#nombre_archivo, #archivoCPEPhotos").val('');

                            } else {
                                var select_temp_type = "select_image";
                 

                                    $.post("include/cpe_photos_manager.php",
                                        {
                                            type: type,
                                            tipo_ejecucion:select_temp_type,
                                            id_information: information_id

                                        } ,
                                        function (data) {
                                            $(".temp").append(data);

                                    });

                                // $.get("include/select_temp.php", function (data) {
                                //  $(".temp").append(data);
                                // });
                                
                                $(".editor_imagenes").fadeIn(200);
                                mostrarRespuesta('Subido Correctamente.', true);
                                mostrarArchivos();
                                
                                $.get("include/editor.php", function (data) {
                                    $(".editor_imagenes_content").append(data);
                                    
                                });


                                $("body").css({ 'overflow': "hidden" });
                                
                                //window.stop();
                            }
                                
                        }, function(progreso, valor) {
                            //Barra de progreso.
                            $("#barra_de_progreso").val(valor);

                        });/**/

                    $("#txtCurrentCPEPicture").val(type);

                }

            ///////////////////////////////////////////////////////////
            ///    LLAMADA DE LA PRIMERA FUNCION SUBIRARCHIVO()    ///
            /////////////////////////////////////////////////////////

                $(document).ready(function() {
                    var id_information = $("#id_information").val();
                    var id_request = $("#id_request").val();

                        $(document).on("change","#archivoCPELGXPhoto1,#archivoCPELGXPhoto2,#archivoCPELGXPhoto3",function(){
                            /*$("#dvPictureImage").fadeOut(0);
                            $("#dvCanvaImage").fadeOut(0);*/

                            subirArchivosLGX(this,id_information);
      
                                /*$.ajax({
                                    type: "POST",
                                    url: "include/cpe_photos_manager.php",
                                    data: { tipo_ejecucion: $("#tipo_ejecucion").val(),
                                    cantidad_ejecucion:contador<?php echo ",\nid_information: $id_information,"; ?>},
                                    success: function(data){
                                        console.log(data);
                                        //console.log($("#tipo_ejecucion").val());

                                    }

                                });*/

                        });

                            /////////////////////////////////////////////////////////////
                            ///    ESCUCHADOR DEL MOUSE PARA MOSTRAR EL MENSAJE      ///
                            ///////////////////////////////////////////////////////////

                                /*$(document).on("mouseenter","#archivoCPELGXPhoto1,#archivoCPELGXPhoto2,#archivoCPELGXPhoto3", function(){
                                    //$(".text_select_image").fadeIn(150);
                                    console.log($(this).attr("id"));

                                }).mouseleave(function(){
                                    //$(".text_select_image").fadeOut(150);
                                    console.log("Leaving soo soon");

                                });*/

                                    $(document).on("mouseenter","#archivoCPELGXPhoto2", function(){
                                        //$(".text_select_image").fadeIn(150);
                                        console.log($(this).attr("id"));

                                    }) 

                                    $(document).on("mouseleave","#archivoCPELGXPhoto2", function(){
                                        //$(".text_select_image").fadeIn(150);

                                    });/**/

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
                    function setRespectiveLGXDivPhoto(type,url){
                        console.log(type);

                            if (type == "cpe_first_picture") {
                                $("#dvPictureImageFirstLGX").css("background-image",url);

                            }else if(type == "cpe_second_picture"){
                                $("#dvPictureImageSecondLGX").css("background-image",url);
                                
                            }else if(type == "cpe_third_picture"){
                                $("#dvPictureImageThridLGX").css("background-image",url);

                            }

                    }

                        function setearFotoCPELGX(id_information,type){

                            var type_ejecucion = "select_picture";

                                //console.log(id_information,type);

                                $.ajax({ 
                                    type: "POST", 
                                    url: "include/cpe_photos_manager.php",
                                    data: { tipo_ejecucion:type_ejecucion,type: type,id_information: id_information },
                                    success: function(data) {

                                        var urlCodePicture = "url(archivos/temp/"+data.trim()+")";

                                            setRespectiveLGXDivPhoto(type,urlCodePicture);
                                      
                                    }

                                });/**/

                        }     

                            function fadeInRespectiveLGXDivPhoto(type){
                                if (type == "cpe_first_picture") {
                                        $("#dvPictureImageFirstLGX").fadeIn(100);

                                }else if(type == "cpe_second_picture"){
                                    $("#dvPictureImageSecondLGX").fadeIn(100);
                                    
                                }else if(type == "cpe_third_picture"){
                                    $("#dvPictureImageThridLGX").fadeIn(100);

                                }


                            }          

                /////////////////////////////////////////////////////////////////////
                ///    FUNCION QUE SETEA EL DIV CON EL CANVA QUE SE SELECCIONO   ///
                ///////////////////////////////////////////////////////////////////
                        function setRespectiveLGXDivCanva(type,url){

                            if (type == "cpe_first_picture") {
                                $("#dvCanvaImageFirstLGX").css("background-image",url);

                            }else if(type == "cpe_second_picture"){
                                $("#dvCanvaImageSecondLGX").css("background-image",url);
                                
                            }else if(type == "cpe_third_picture"){
                                $("#dvCanvaImageThridLGX").css("background-image",url);

                            }


                        }

                            function setearCanvasCPELGX(type){
                                var type_ejecucion = "select_canva";
                                
                                        //console.log(type);

                                    $.ajax({ 
                                        type: "POST", 
                                        url: "include/cpe_photos_manager.php",
                                        data: { tipo_ejecucion:type_ejecucion,type: type,id_information: id_information },
                                        success: function(data) {

                                            var urlCodePicture = "url(archivos/temp/"+data.trim()+")";

                                                setRespectiveLGXDivCanva(type,urlCodePicture);
                      
                                                 
                                        }


                                    });

                            }

                                function fadeInRespectiveLGXDivCanva(type){
                                    if (type == "cpe_first_picture") {
                                        $("#dvCanvaImageFirstLGX").fadeIn(100);

                                    }else if(type == "cpe_second_picture"){
                                        $("#dvCanvaImageSecondLGX").fadeIn(100);
                                        
                                    }else if(type == "cpe_third_picture"){
                                        $("#dvCanvaImageThridLGX").fadeIn(100);

                                    }


                                }     
                      
            /////////////////////////////////////////////////////////////////////
            ///        FUNCION QUE DA LOS TOQUES FINALES AL CPE LGX          ///
            ///////////////////////////////////////////////////////////////////

                /*function (){


                }*/
