<?php include("include/head.php"); 
include("confi/conf.inc.php"); ?>
<body>
	
	
		<div id="preloader">
		  <div id="spinner_container">
			 <img id="spinner" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/loader.gif" alt="" />
		  </div>
		</div>
		
		<div class="inicio_movil" id="inicio"></div>
		
<!--		<div class="form_container" id="inicio">-->
	
<!--
			<div class="slideContainer">
				
					
					<div class="slide img_slide1" id="slide_seguridad" data-background="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/fondo1.jpg">
						
						<div class="text_slide">
							<div class="titulo_slide">Ajustes <span>Quiropr&aacute;ticos</span></div>
							<div class="txt_slide">
								Ajuste quiropr&aacute;ctico es el nombre utilizado para describir el procedimiento que sigue un doctor quiropr&aacute;ctico para corregir las subluxaciones vertebrales...
								<a href="#ancla_servicios"><span >Ver Servicios</span></a>
							</div>
						
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/slide_peq1.jpg"  class="img_text_slide" />
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/slide_peq2.jpg"  class="img_text_slide" />
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/slide_peq3.jpg"  class="img_text_slide" />
							
						</div>
					
					</div>
				
					<div class="slide img_slide2" id="slide_telefono" data-background="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/bg2.jpg">
						<div class="text_slide">
							<div class="titulo_slide">Subluxaci&oacute;n  <span>Vertebral</span></div>
							<div class="txt_slide">
								La subluxaci&oacute;n es una v&eacute;rtebra que no se encuentra en su posici&oacute;n normal de manera que afecta en la transmisi&oacute;n de los mensajes nerviosos... 
								<a href="#ancla_quiropractica"><span >Saber M&aacute;s</span></a>
							</div>
							
							
						</div>
					</div>
					
				
					
					<div class="slide img_slide3" id="slide_wireless" data-background="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/fondo1.jpg">
						<div class="text_slide">
							<div class="titulo_slide">Casos  <span>Frecuentes</span></div>
							<div class="txt_slide">
								La mayor&iacute;a de pacientes que acuden al quiropr&oacute;ctico suele ser por un problema concreto, sobre todo por problemas de dolores de espalda...
								<a href="#ancla_casos"><span >Ver Casos</span></a>
							</div>
							
							
						</div>
					</div>
					
												
			</div>
-->
            
<!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 104px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <!-- Loading Screen -->
        
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden;">
            
            <div>
            <img u="image" u="image" src=<?php echo $ruta_images."portada1.jpg";?> />
				<!--
                <div class="text_slide">
                    <div class="titulo_slide">Ajustes <span>Quiropr&aacute;ticos</span></div>
                    <div class="txt_slide">
                        Ajuste quiropr&aacute;ctico es el nombre utilizado para describir el procedimiento que sigue un doctor quiropr&aacute;ctico para corregir las subluxaciones vertebrales...
                        <a href="#ancla_servicios"><span >Ver Servicios</span></a>
                    </div>
						
                    <img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/slide_peq1.jpg"  class="img_text_slide" />
                    <img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/slide_peq2.jpg"  class="img_text_slide" />
                    <img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/slide_peq3.jpg"  class="img_text_slide" />
							
                </div>
				-->
                
                
            </div>
            
            <div>
            <img u="image" src=<?php echo $ruta_images."portada2.jpg";?>   ?> />
						<!--
						<div class="text_slide">
							<div class="titulo_slide">Subluxaci&oacute;n  <span>Vertebral</span></div>
							<div class="txt_slide">
								La subluxaci&oacute;n es una v&eacute;rtebra que no se encuentra en su posici&oacute;n normal de manera que afecta en la transmisi&oacute;n de los mensajes nerviosos... 
								<a href="#ancla_quiropractica"><span >Saber M&aacute;s</span></a>
							</div>
							
							
						</div>
						-->
                
                
            </div>
            
            <div>
           <img u="image" src=<?php echo $ruta_images."portada3.jpg";?> />
						<!--
						<div class="text_slide">
							<div class="titulo_slide">Casos  <span>Frecuentes</span></div>
							<div class="txt_slide">
								La mayor&iacute;a de pacientes que acuden al quiropr&oacute;ctico suele ser por un problema concreto, sobre todo por problemas de dolores de espalda...
								<a href="#ancla_casos"><span >Ver Casos</span></a>
							</div>
							
							
						</div>
						-->
                
            </div>
            <div>
            <img u="image" src=<?php echo $ruta_images."portada4.jpg";?> />
						<!--
						<div class="text_slide">
							<div class="titulo_slide">Casos  <span>Frecuentes</span></div>
							<div class="txt_slide">
								La mayor&iacute;a de pacientes que acuden al quiropr&oacute;ctico suele ser por un problema concreto, sobre todo por problemas de dolores de espalda...
								<a href="#ancla_casos"><span >Ver Casos</span></a>
							</div>
							
							
						</div>
						-->
                
            </div>
            
            
        </div>
        
	</div>    
                
            
			
<!--		</div>-->
		
		<!-- BOTONES DEL SLIDE -->
<!--
		<div class="container_botones">
			<div class="btn_green" id="btn_uno"></div>
			<div class="btn_green" id="btn_dos"></div>
			<div class="btn_green" id="btn_tres"></div> 
		
		</div>
-->
		
		<!-- REDES SOCIALES -->
		<div class="redes_sociales">
			<a href="https://www.twitter.com/@quiropracticoml" target="_blank"><div class="tw"><div class="icon_tw"></div></div></a>
			<a href="https://www.facebook.com/quiropracticoml" target="_blank"><div class="fb"><div class="icon_fb"></div></div></a>
		</div>
		
    

    
    
		
	<!-- SECCION NOSOTROS -->
	<div  id="nosotros">
		<div id="ancla_nosotros"></div>
	
		<div class="header_nosotros">
			<div class="div_header_nosotros">
				<div class="container_texto_nosotros">	
				<div class="titulo_header_nosotros">Centro Quiropr&aacute;ctico <br/> Mission life international</div>
				
				<div class="texto_header_nosotros">
					El resultado de este estilo de vida ser&aacute; un mundo en donde vivamos en armon&iacute;a, salud y prosperidad como Dios lo concibi&oacute; para nosotros.
					B&aacute;sicamente, en el Centro Quiropr&aacute;ctico Misi&oacute;n Life International ¡Estamos trabajando para ver los hospitales y las c&aacute;rceles vacíos y los consultorios quiropr&aacute;cticos llenos!..
					<span class="leer_mas_header_nosotros">Leer M&aacute;s</span>
				
				</div>
				</div>
			</div>
		</div>
		<div class="fancy fancy_header_nosotros">
			<div class="cerrar_fancy"></div>
			<p>El resultado de este estilo de vida ser&aacute; un mundo en donde vivamos en armon&iacute;a, salud y prosperidad como Dios lo concibi&oacute; para nosotros.</p>
			<p>B&aacute;sicamente, en el Centro Quiropr&aacute;ctico Misi&oacute;n Life International ¡Estamos trabajando para ver los hospitales y las c&aacute;rceles vacíos y los consultorios quiropr&aacute;cticos llenos!</p>
			
			<p>Nuestra misi&oacute;n es educar y proveer servicios quiropr&aacute;cticos de alta calidad de vida.</p>			
			
			<p>Nuestra visi&oacute;n es una en la que el pueblo de la Rep&uacute;blica Dominicana este cada d&iacute;a mas saludable y viviendo una vida mas plena, al recibir los beneficios del cuidado quiropr&aacute;ctico y que sea capaz de expresar su bienestar al 100%.</p>
		</div>
		<div class="container_doctores">
			<div class="div_doctores"> 
				
				<div class="centro_doctores">
					
					<div class="div_doctor">
						<div class="titulo_doctores">Nuestros <span>Doctores</span></div>					
						<div class="doctores ">
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/doctor1.jpg" class="doctor_nosotros" />
							<div class="nombre_doctor">Dr. Alejandro <span>Nalda</span></div>
							<div class="descripcion_doctor">
								Es americano, de origen cubano,  graduado en Life Chiropractic College 1996 Bilingual (both parents are Cuban)...<span class="doctor1">Leer M&aacute;s</span>
							</div>
							
						</div>
						<div class="doctores doctores2 ">
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/doctor2.jpg" class="doctor_nosotros" />
							<div class="nombre_doctor">Dr. Alexandre  <span>Pham</span></div>
							<div class="descripcion_doctor">
								Naci&oacute; en Montreal, Quebec - una de las ciudades m&aacute;s grandes de Canad&aacute;, así como una de las...<span class="doctor2">Leer M&aacute;s</span>
							</div>
						</div>
						<div class="doctores doctores2 ">
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/doctor3.jpg" class="doctor_nosotros" />
							<div class="nombre_doctor">Dr. Stephanie <span>Lafountant</span></div>
							<div class="descripcion_doctor">
								Naci&oacute; en Puerto Pr&iacute;ncipe, Hait&iacute;, el 12 de febrero de 1978 vivi&oacute; all&aacute; hasta la edad de 17 años. En 1995, viaj&oacute; a Estados Unidos de Am&eacute;rica...<span class="doctor3">Leer M&aacute;s</span>
							</div>
						</div>
						<div class="doctores  ">
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/doctor4.jpg" class="doctor_nosotros" />
							<div class="nombre_doctor">Dr. Albert <span>Revoltós</span></div>
							<div class="descripcion_doctor">
								Titulado superior universitario en Quiropráctica en el Barcelona College of Chiropractic (BCC)...<span class="doctor4">Leer M&aacute;s</span>
							</div>
						</div>
						
						<div class="doctores doctores2 ">
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/doctor5.jpg" class="doctor_nosotros" />
							<div class="nombre_doctor">Dr. Matthew <span>Sorell</span></div>
							<div class="descripcion_doctor">
								Nació en Kansas, Estados Unidos. Pertenece a una segunda generación de Quiroprácticos... <span class="doctor5">Leer M&aacute;s</span>
							</div>
						</div>						
						
						
						
					</div>
				</div>
			</div>
		</div>
	
		<div class="container_footer_nosotros">
			<div class="div_footer_nosotros">
				<div class="footer_nosotros">
				
					<div class="mision_nosotros">
						<div class="titulo_mision">Misi&oacute;n</div>
						<div class="text_mision">Nuestra misi&oacute;n es educar y proveer servicios quiropr&aacute;cticos de alta calidad.... <span class="leer_mas_mision">Leer M&aacute;s</span></div>
					</div>
					<div class="mision_nosotros left_mision">
						<div class="titulo_mision">Visi&oacute;n</div>
						<div class="text_mision">Nuestra visi&oacute;n es una en la que el pueblo de la Rep&uacute;blica Dominicana este cada d&iacute;a mas saludable .... <span class="leer_mas_mision">Leer M&aacute;s</span></div>
					</div>
					<div class="mision_nosotros left_mision">
						<div class="titulo_mision">Valores</div>
						<div class="text_mision">
							Conducta &eacute;tica, actuamos con profesionalidad, integridad, moral , lealtad y respeto por las personas.... <span class="leer_mas_mision">Leer M&aacute;s</span></div>
					</div>
					
				</div>
			</div>	
		</div>
        <?php
        $conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos) or die ('I cannot connect to the database because: ' . mysql_error());
		mysqli_set_charset($conexion, "utf8");
        $peticion31 ='SELECT * FROM `testimonios` WHERE `estado`=1';
		$resultado31 = mysqli_query($conexion, $peticion31);
		if($fila31 = mysqli_fetch_array($resultado31)){
			?>
		<div class="container_testimonios" style="border-top:5px solid rgb(51,156,72);">
			<div class="div_doctores"> 
				
				<div class="centro_doctores">
					
					<div class="div_doctor">
						<div class="titulo_doctores">Testimonios </div>		

						        <?php
		      

$i=0;
	  $peticion31 ='SELECT * FROM `testimonios` WHERE `estado`=1 order by fecha desc';
		$resultado31 = mysqli_query($conexion, $peticion31);
		while($fila31 = mysqli_fetch_array($resultado31)){
		$i++;
				
					?>
<div class="doctores <?php if((($i-1)%3)!=0){ echo 'doctores2'; } ?> ">

						<?php if($fila31['imagen']!=''){ ?>	
						<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/testimonios/<?php echo $fila31['imagen']; ?>" class="doctor_nosotros" />
						<?php }else{ ?>
						<img src="images/no_foto.jpg" class="doctor_nosotros" />
						<?php } ?>
<div class="nombre_doctor"><?php echo $fila31['titulo'] ?>  <span></span></div>
							<div class="descripcion_doctor">
								<?php if(strlen( $fila31['publicacion'] )>80){
											$texto_mensaje = substr($fila31['publicacion'],0,80);
											echo $texto_mensaje=$texto_mensaje."<strong> ...</strong>";
										}else{
											echo $texto_mensaje=$fila31['publicacion'];
										}               ?>
                               <span class="abre_testi" onClick="abre_testi('<?php echo $fila31['id']; ?>')">Leer M&aacute;s</span>
							</div>
						</div>
                        
                    <div class="fancy_testimonio<?php echo $fila31['id']; ?> fancy_ocultar" id="fancy_testi" >
                        
                        <p>
                            <?php echo $texto_mensaje=$fila31['publicacion']; ?>
                        </p>

                        
                    </div>    
<?php

}



	?>				
							
						
						
					</div>
				</div>
			</div>
		</div>
        
       
        
        
        <?php  } ?>
		<div class="fancy fancy_mision">
			<div class="cerrar_fancy"></div>
			<div class="titulo_mision">Misi&oacute;n</div>
			<p>Nuestra misi&oacute;n es educar y proveer servicios quiropr&aacute;cticos de alta calidad de vida.</p>
			
			<div class="titulo_mision">Visi&oacute;n</div>
			<p>Nuestra visi&oacute;n es una en la que el pueblo de la Rep&uacute;blica Dominicana este cada d&iacute;a mas saludable y viviendo una vida mas plena, al recibir los beneficios del cuidado quiropr&aacute;ctico y que sea capaz de expresar su bienestar al 100%.</p>
			
			
			<div class="titulo_mision">Valores</div>
			<p>-Pasi&oacute;n por lo que hacemos.</p>			
			<p>-Conducta &eacute;tica, actuamos con profesionalidad, integridad, moral , lealtad y respeto por las personas.</p>			
			<p>-Solidaridad.</p>			
			<p>-Responsabilidad Social.</p>			
			<p>-Trabajo en equipo, fomentamos la participaci&oacute;n de todos para lograr un objetivo com&uacute;n, compartiendo informaci&oacute;n y conocimiento.</p>			
			
		</div>
		<div class="fancy fancy_doctor1">
			<div class="cerrar_fancy"></div>
			<div class="titulo_mision">Dr. Alejandro Nalda</div>
			<p>Es americano, de origen cubano,  graduado en Life Chiropractic College 1996 Bilingual (both parents are Cuban)</p>
			<p>Doctor quiropráctico con más de 18 años de experiencia , graduado de la Universidade Life University en Estados Unidos de Norteamérica, donde son formado
				en quiropráctica, la cual se ocupa del diagnóstico, tratamiento y prevención de las alteraciones del sistema músculo-esquelético, así como de los efectos que producen estos desórdenes en la función del sistema nervioso y en la salud en general.</p>
			
						
			
		</div>
		<div class="fancy fancy_doctor2">
			<div class="cerrar_fancy"></div>
			<div class="titulo_mision">Dr. Alexandre Pham</div>
			<p>Naci&oacute; en Montreal, Quebec - una de las ciudades m&aacute;s grandes de Canad&aacute;, así como una de las m&aacute;s              cultural y &eacute;tnicamente diversa. Dr. Pham comenz&oacute;  a recibir cuidados quiropr&aacute;cticos a la edad de 11 años. Tras ser testigo             de numerosos "milagros quiropr&aacute;cticos", &eacute;l desarroll&oacute;  un gran inter&eacute;s en este enfoque de la salud natural durante sus años de adolescencia.
            </p>
            
            <p>
                Se gradu&oacute;   de Champlain Regional College con un diploma de Ciencias de la Salud. A continuac&oacute;n, se gradu&oacute;   de                     Life University en Marietta, Georgia (EE.UU.) para obtener su t&iacute;tulo de Doctor en Quiropr&eacute;ctica (DC) en 2001. 
            </p>
            
            <p>
                Es el primer quiropr&aacute;ctico a trabajar para CQMLI. &Eacute;l ha abierto hasta el momento 2 cl&iacute;nicas con nosotros: la primera en Puerto Plata, y la segunda en Santiago. Es voluntario regular por las misiones quiropr&aacute;cticas del Dr. Peter Morgan en la Rep&uacute;blica Dominicana para ayudar y enseñar a los estudiantes. Dr. Pham tiene un total de 13 años de experiencia quiropr&aacute;ctica en Canad&aacute;, los EE.UU., y la Rep&uacute;blica Dominicana.
            
            </p>
            
          
			
            
		
			
		</div>
	
		<div class="fancy fancy_doctor3">
			<div class="cerrar_fancy"></div>
			<div class="titulo_mision">Dr. Stephanie Lafountant</div>
			<p>Naci&oacute; en Puerto Pr&iacute;ncipe, Hait&iacute;, el 12 de febrero de 1978 vivi&oacute; all&aacute; hasta la edad de 17 años. En 1995, viaj&oacute; a Estados Unidos de Am&eacute;rica para termina el bachillerato. Despu&eacute;s de terminarlo fue directamente al Instituto de Tecnolog&iacute;a de New York (NYIT) a estudiar enfermer&iacute;a y nutrici&oacute;n.
            </p>
            
            <p>
            En el 2002 se gradu&oacute; e inmediatamente se cas&oacute; con Davidson Remy, con quien tiene 3 hijos:
            </p>
            
            <p>-Sebastian Kyle Remy </p>
            <p>-Dathanie Gail Remy</p>
            <p>-Ameerah Jade Remy</p>

            <p>
                Trabajo como enfermera en el hospital Norwood durante 8 años, luego decidi&oacute; convertirse en Quiropr&aacute;ctico. Desde la edad de 12 años es Adventista del S&eacute;ptimo Día.Habla Ingl&eacute;s, franc&eacute;s, creole y est&aacute; aprendiendo español. Vino por primera vez a la Rep&uacute;blica Dominicana el 01 de enero del 2015 para ser parte de nuestro equipo de quiropr&aacute;cticos.
            </p>
            
		
			
		</div>
		<div class="fancy fancy_doctor4">
			<div class="cerrar_fancy"></div>
			<div class="titulo_mision">Dr. Albert Revoltós</div>
			<p>Titulado superior universitario en Quiropráctica en el Barcelona College of Chiropractic (BCC) y  máster en Quiropráctica en la Universidad Pompeu Fabra de Barcelona, además de 7 años de experiencia trabajando en consultas quiroprácticas.
            </p>
            
            <p>
                Conocí la quiropráctica cuando tenía 14 años de edad cuando mi familia y yo empezamos a tener cuidado quiropráctico. Desde entonces con el paso del tiempo fui viendo los beneficios que el cuidado quiropráctico iba reportando en mi vida diaria, en mi salud y en mi familia, además de un estilo de vida saludable, deporte, alimentación…
            </p>


            <p>
Más adelante decidí estudiar la profesión Quiropráctica para poder ayudar a la gente a vivir de una forma saludable y corrigiendo la causa directa de muchos de los problemas o dolencias que sufre la sociedad de hoy en día.
            </p>
            
            <p>
                Actualmente trabajo en Centro Quiropráctico Mission Life.
            </p>
		
			
		</div>
		<div class="fancy fancy_doctor5">
			<div class="cerrar_fancy"></div>
			<div class="titulo_mision">Dr. Matthew Sorell</div>
			<p>Nació en Kansas, Estados Unidos. Pertenece a una segunda generación de Quiroprácticos, siendo el tercero en su familia.
            </p>
            
            <p>
				Estudió Biología cuatro años en Kansas Estate University. Fue a la Universidad de Palmer, recibiendo su Diploma de Doctor en Quiropáctico en el año 2005. El Dr. Sorell tiene 11 años de experiencia, durante los cuales ha realizado varias especialidades en áreas de Neurología, tales como:           
            </p>


            <p>
				1.  Instituto Carrick de Cíencias Neuroclínicas, recibiendo su Diploma en Neurología año 2011. <br/>

				2. Fellow en Rehabilitación Vestibular. (2012). <br/>

				3. Fellow en Electrodiagnóstico. (2013). <br/>

				4. Fellow en Traumatismo Craneal Suave y Conmoción cerebral (2015).
			
            </p>
            
            <p>
				Es uno de los 1000 Quiroprácticos neurológos en USA. Combinar ambas especialidades le ha permitido

				ayudar aún más a sus pacientes. El Dr. Sorell ha estado casado por 12 años con su esposa Fiord, 

				dominicana y tienen 4 hijos.               
            </p>
		
			
		</div>
	
	
	
	
	
	</div>
	<!-- SECCION SERVICIOS -->
	<div  id="servicios">
		<div id="ancla_servicios"></div>
	
		<div class="container_servicios">
			<div class="div_servicios"> 
				
				<div class="centro_servicios">
					
					
					<div class="div_doctor">
						<div class="doctores_servicios">
							<div class="titulo_servicios">Ajustes <span>Quiropr&aacute;ticos</span></div>
								<div class="descripcion_servicios">
							<!--	T&eacute;cnica espec&iacute;fica aplicada solo por el Doctor Quiropr&aacute;ctico debidamente certificado internacionalmente... --> Ajuste quiropr&aacute;ctico es el nombre utilizado para describir el procedimiento que sigue un doctor quiropr&aacute;ctico para corregir las subluxaciones vertebrales. <!--<span class="leer_mas_ajustes">Leer M&aacute;s</span>-->
								</div>
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/servicio1.jpg" class="img_servicio" />
							
						
							
						</div>
							
						
						<div class="doctores_servicios doctores2">
							<div class="titulo_servicios_vacio"></div>
							<div class="descripcion_servicios">
								Es un m&eacute;todo completamente seguro y altamente efectivo para reducir y/o eliminar las interferencias en el sistema nervioso. 
								<!--<span class="leer_mas_masajes">Leer M&aacute;s</span> -->
							</div>
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/servicio2.jpg" class="img_servicio" />
							
							
						</div>
				
						
					</div>
				</div>
			</div>
			<!--
			<div class="fancy fancy_ajustes">
			<div class="cerrar_fancy"></div>
			<p>Ajuste quiropr&aacute;ctico es el nombre utilizado para describir el procedimiento que sigue un doctor quiropr&aacute;ctico para corregir las subluxaciones vertebrales.Es un m&eacute;todo completamente seguro y altamente efectivo para reducir y/o eliminar las interferencias en el sistema nervioso. </p>
					
			
			</div>
			<div class="fancy fancy_masajes">
			<div class="cerrar_fancy"></div>
			<p>Distintos tipos de masajes complementarios a los ajustes quiropr&aacute;cticos dirigidos a relajar los tejidos musculares, eliminando n&oacute;dulos, rompiendo adhesiones, reduciendo los espasmos, etc. </p>
					
			
			</div>
			-->
			<a class="ver_numeros" href="#ancla_contactos"><div class="info_servicios">¿Informaci&oacute;n o citas? Ll&aacute;manos Ver Tel&eacute;fonos  </div></a>
			
		</div>
	
	
	
	</div>

	<!--Quiropractica  -->
	<div id="quiropractica">
		<div id="ancla_quiropractica"></div>
	
		<div class="container_quiropractica">
			<div class="header_nosotros">
						<div class="div_header_nosotros">
							<div class="container_texto_nosotros">	
							<div class="titulo_header_nosotros">La Quiropr&aacute;ctica</div>
							
							<div class="texto_header_quiropractica">
								La Quiropr&aacute;ctica nace a finales del siglo XIX y fue el Dr. Daniel David Palmer su precursor.
								Corr&iacute;a el año 1895, cuando en la ciudad de Davenport (EEUU) el Dr. Daniel David Palmer llevaba 17 años examinando a Harvey Lillard, un hombre afectado de sordera que era su portero. El Dr. Daniel se percat&oacute; r&aacute;pidamente de que su columna, a la altura del cuello presentaba un grosor anormal. Pensando que esta anomal&iacute;a pod&iacute;a tener una relaci&oacute;n con la sordera, ajust&oacute; manualmente la columna de Harvey, y &eacute;ste volvi&oacute; a recuperar su o&iacute;do.
								<span class="leer_mas_header_quiropractica">Leer M&aacute;s</span>
							</div>
							</div>
						</div>
			</div>
			
			<div class="fancy fancy_quiropractica">
				<div class="cerrar_fancy"></div>
				<p>
					La Quiropr&aacute;ctica nace a finales del siglo XIX y fue el Dr. Daniel David Palmer su precursor.</p>
				<p>
					Corr&iacute;a el año 1895, cuando en la ciudad de Davenport (EEUU) el Dr. Daniel David Palmer llevaba 17 años examinando a Harvey Lillard, un hombre afectado de sordera que era su portero. El Dr. Daniel se percat&oacute; r&aacute;pidamente de que su columna, a la altura del cuello presentaba un grosor anormal. Pensando que esta anomal&iacute;a pod&iacute;a tener una relaci&oacute;n con la sordera, ajust&oacute; manualmente la columna de Harvey, y &eacute;ste volvi&oacute; a recuperar su o&iacute;do.
				
				</p>
				<p>
					La experiencia desat&oacute; una serie de investigaciones que dio como consecuencia el nacimiento de la Quiropr&aacute;ctica, nombre que hace alusiones a Quiropraxia que en griego significa hacer el bien con las manos.
					</p>
					<p>
					En 1996, la organizaci&oacute;n mundial de la Salud (OMS) reconoci&oacute; oficialmente a la Federaci&oacute;n Mundial de Quiropr&aacute;ctica (WFC), por su beneficio y por su finalidad a nivel sanitario.
				</p>			
			</div>	
			
			<div class="div_quiropractica"> 
		
				<div class="centro_quiropractica">
					
					
					<div class="div_doctor">
							<!--
							<div class="titulo_header_quiropractica">La Quiropr&aacute;ctica </div>
				
							<div class="texto_header_quiropractica">
								This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
								
								This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
								
								This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean. 
							</div>
							-->
					
						<div class="doctores_servicios">
							
							<div class="titulo_quiropractica">Subluxaci&oacute;n <span>Vertebral </span></div>
							<div class="descripcion_servicios">
								La subluxaci&oacute;n es una v&eacute;rtebra que no se encuentra en su posici&oacute;n normal de manera que afecta en la transmisi&oacute;n de los mensajes nerviosos... <span class="leer_mas_subluxacion">Leer M&aacute;s</span>
							</div>
														
							<img src="images/sublu_quiro.jpg" class="img_quiropractica" />
							
							<div class="titulo_quiropractica titulo2_quiropractica">¿C&oacute;mo los Quiropr&aacute;cticos <span>ajustan la Columna? </span></div>
							<div class="descripcion_servicios descripcion_quiropractica">
								Existen m&aacute;s de 100 t&eacute;cnicas diferentes para ajustar la columna. El quiropr&aacute;ctico elige la t&eacute;cnica a usar dependiendo de su entrenamiento y las caracter&iacute;sticas corporales del paciente. <span class="leer_mas_ajustan">Leer M&aacute;s</span>
							</div>
						
							
						</div>
						<div class="fancy fancy_subluxacion">
							<div class="cerrar_fancy"></div>
							<p>
								La subluxaci&oacute;n es una v&eacute;rtebra que no se encuentra en su posici&oacute;n normal de manera que afecta en la transmisi&oacute;n de los mensajes nerviosos. Esta disfunci&oacute;n afecta en el funcionamiento de su organismo repercutiendo en su salud.
							</p>
							<p>
								En la mayor&iacute;a de los casos, las subluxaciones se deben a un estr&eacute;s cualquiera: traumatismo cervical al nacer, ca&iacute;das, lesiones producidas al hacer deporte, movimientos bruscos, repetitivos y descompensados, malas posturas, esfuerzos desacostumbrados, estr&eacute;s mental, tensi&oacute;n nerviosa, etc.						
							</p>
							<p>
								Una vez detectados los niveles de subluxaci&oacute;n, el objetivo del doctor quiropr&aacute;ctico ser&aacute; corregirlos para restablecer una buena comunicaci&oacute;n del sistema nervioso.

							</p>
							<p>
								El sistema nervioso est&aacute; formado principalmente por el cerebro, la m&eacute;dula espinal y por los nervios espinales que se van ramificando por todo nuestro organismo como las ra&iacute;ces de un &aacute;rbol. Es el sistema m&aacute;s importante que tenemos porque es el encargado de controlar cada c&eacute;lula, cada tejido y cada &oacute;rgano.

							</p>
							<p>
								La subluxaci&oacute;n provoca una alteraci&oacute;n en el flujo continuo de energ&iacute;a y comunicaci&oacute;n entre el cerebro y el resto del cuerpo y por tanto no podemos funcionar al 100%. A veces las subluxaciones s&iacute; que producen sintomatolog&iacute;a y patolog&iacute;as varias (ci&aacute;ticas, cefaleas, problemas digestivos, tunel carpiano…) pero en otras ocasiones son “silenciosas” y aunque en apariencia estamos sanos y no tenemos dolores, nos est&aacute;n mermando nuestra salud.
							</p>			
						</div>
						<div class="fancy fancy_ajustan">
							<div class="cerrar_fancy"></div>
							<p>
								Existen m&aacute;s de 100 t&eacute;cnicas diferentes para ajustar la columna. El quiropr&aacute;ctico elige la t&eacute;cnica a usar dependiendo de su entrenamiento y las caracter&iacute;sticas corporales del paciente. Cada persona es &uacute;nica; por lo tanto, cada ajuste quiropr&aacute;ctico est&aacute; diseñado y adaptado a cada paciente. Su quiropr&aacute;ctico estudiara su caso para brindarle un m&eacute;todo seguro, efectivo y específico para su columna.
							</p>
							<p>
								Existen muchos m&eacute;todos y t&eacute;cnicas que pueden ser usadas. Aqu&iacute; les brindamos algunos ejemplos para ayudarlos a entender como podr&iacute;an ser sus ajustes.

							</p>
							<p>
								Un m&eacute;todo es usar las manos para ajustar la v&eacute;rtebra subluxada, muchas veces durante el ajuste pueden escuchar algunos sonidos com&uacute;nmente llamados "crujido". Algunos pacientes se preocupan por estos sonidos y quieren saber su origen. Estos sonidos son producto del movimiento del l&iacute;quido que se encuentra al interior de las articulaciones y son totalmente normales, algunas veces se escuchan y otras no. Es importante tambi&eacute;n tener en cuenta, que los sonidos no miden cuanto efectivo es un ajuste, el objetivo es corregir las subluxaciones vertebrales para estimular la sanaci&oacute;n del cuerpo.

							</p>
							<p>
								Otro m&eacute;todo muy utilizado es el uso de un pequeño instrumento el cual permite ajustar la v&eacute;rtebra muy suavemente. Algunas veces tan suave que los pacientes no lo sienten. La ciencia ha probado que los resultados obtenidos con esta t&eacute;cnica son tan efectivos como los otros m&eacute;todos. 

							</p>
							<p>
								Otros m&eacute;todos usados incluyen un tipo de camilla especial que tiene partes m&oacute;viles, y algunas veces el doctor puede colocar pequeñas almohadillas debajo de ciertas zonas de la columna. 

							</p>
							<p>
								Esta es una explicaci&oacute;n general, su quiropr&aacute;ctico le debe explicar qu&eacute; tipo de ajuste y t&eacute;cnica es buena para usted. 

							</p>
							<p>
								Recuerde, la quiropr&aacute;ctica ha sido una filosof&iacute;a, ciencia y arte desarrollada por m&aacute;s de 113 años, y el objetivo siempre es que su sistema nervioso funcione mejor y sea saludable.
							</p>			
						</div>	
						
						
						<div class="fancy fancy_estudios">
							<div class="cerrar_fancy"></div>
							<p>
								Los estudios quiropr&aacute;cticos tienen una duraci&oacute;n de siete años universitarios. El plan de estudios, consta de m&aacute;s de 5.000 horas lectivas, y se divide en ciencias b&aacute;sicas, ciencias cl&iacute;nicas e internado.
							</p>
							<p>
								Finalizada la carrera se obtiene el t&iacute;tulo de Doctor en Quiropr&aacute;ctica.


							</p>
							<p>
								En la actualidad existen m&aacute;s de 24 universidades quiropr&aacute;cticas en todo el mundo. La mayor&iacute;a de ellas ubicadas en EEUU, d&oacute;nde naci&oacute; la quiropr&aacute;ctica.

							</p>
							<p>
								Recientemente en España, el Real Centro Universitario Escorial-Mª Cristina de Madrid imparte la Titulaci&oacute;n Superior Universitaria en Quiropr&aacute;ctica, una titulaci&oacute;n de car&aacute;cter propio y privado.

							</p>
										
						</div>	
						<div class="fancy fancy_porque">
							<div class="cerrar_fancy"></div>
							<p>
								Porque las subluxaciones causan presi&oacute;n en los nervios interfiriendo con el funcionamiento normal del sistema nervioso, lo cual puede tener efectos desastrosos en la salud, sin darnos cuenta. Lamentablemente muchas subluxaciones no causan dolor hasta que el daño alcanzado en la columna, nervios y &oacute;rganos es considerable. La subluxaci&oacute;n vertebral es una condici&oacute;n muy com&uacute;n y extremadamente peligrosa, muchas veces pasa desapercibida por otros profesionales y pacientes debido a la falta de conciencia para prevenir y mantener una columna saludable. Los quiropr&aacute;cticos son los &uacute;nicos profesionales de la salud que est&aacute;n altamente calificados y entrenados para detectar y corregir las subluxaciones vertebrales. Muchas personas reciben su primer ajuste quiropr&aacute;ctico luego de haber pasado años gastando dinero tratando el dolor, maltratando a&uacute;n m&aacute;s su columna y hasta someti&eacute;ndose a intervenciones quir&uacute;rgicas. 
							
							</p>
							
							
							
										
						</div>	
						<div class="doctores_servicios doctores2">
							<div class="titulo_quiropractica">Estudios </div>
							<div class="descripcion_servicios">
								Los estudios quiropr&aacute;cticos tienen una duraci&oacute;n de siete años universitarios. El plan de estudios, consta de m&aacute;s de 5.000 horas lectivas... <span class="leer_mas_estudios">Leer M&aacute;s</span>
							</div>
							
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/estudios_quiro.jpg" class="img_quiropractica" />
							
							<div class="titulo_quiropractica titulo2_quiropractica">¿Por qu&eacute; necesito un <span>Ajuste Quiropr&aacute;ctico? </span></div>
							<div class="descripcion_servicios descripcion_quiropractica">
								Porque las subluxaciones causan presi&oacute;n en los nervios interfiriendo con el funcionamiento normal del sistema nervioso, lo cual puede tener efectos desastrosos en la salud, sin darnos cuenta... <span class="leer_mas_porque">Leer M&aacute;s</span>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
		
			
		</div>
	
	
		<!-- PARA  QUIEN ES UTIL --> 
		<div class="container_util">
            <div id="ancla_util"></div>
			<div class="div_util"> 
				
				<div class="centro_util">
					
					<div class="titulo_util">Para Qui&eacute;n <span>es &uacute;til?</span></div>
					<div class="subtitulo_util">La mayor&iacute;a de pacientes que acuden al quiropr&aacute;ctico suele ser por un problema concreto, sobre todo por problemas de dolores de espalda, dolores de cuello, lumbalgia, ci&aacute;tica, hernia discal, dolores de brazos, dolores de cabeza, migrañas, v&eacute;rtigos, artrosis, fibromialgia. </div>
					
					<div class="container_img_util">
						<div class="img_util verde">
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/img_util1.png" />
						</div>
						<div class="text_img_util">Salud en la infancia</div>
						<div class="ver_img_util ver_salud">Ver Descripci&oacute;n</div>
						
						
					</div>
					<div class="container_img_util">
						<div class="img_util amarillo">
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/img_util2.png" />
						</div>
						<div class="text_img_util">Mujeres embarazadas</div>
						<div class="ver_img_util ver_mujeres">Ver Descripci&oacute;n</div>
					</div>
					<div class="container_img_util">
						<div class="img_util rojo">
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/img_util3.png" />
						</div>
						<div class="text_img_util">Adultos: mejor calidad de vida y bienestar</div>
						<div class="ver_img_util ver_adultos">Ver Descripci&oacute;n</div>
					</div>
					<div class="container_img_util">
						<div class="img_util crema">
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/img_util4.png" />
						</div>
						<div class="text_img_util">Salud en la tercera edad</div>
						<div class="ver_img_util ver_edad">Ver Descripci&oacute;n</div>
					</div>
					<div class="container_img_util ">
						<div class="img_util negro">
							<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/img_util5.png" />
						</div>
						<div class="text_img_util">Deportistas:rendimiento atl&eacute;tico</div>
						<div class="ver_img_util ver_deportista">Ver Descripci&oacute;n</div>
					</div>
					
					
					
				</div>
			</div>
			
			<div class="fancy fancy_salud">
				<div class="cerrar_fancy"></div>
				<p>
					Los niños son los m&aacute;s propensos a sufrir subluxaciones debido a ca&iacute;das, mochilas pesadas, malas posturas o el mismo parto. Esto afecta al bienestar del niño aunque no se presente ning&uacute;n problema en concreto. El doctor quiropr&aacute;ctico se encarga de tratar a este grupo de riesgo.

				</p>
									
			</div>
			<div class="fancy fancy_mujeres">
				<div class="cerrar_fancy"></div>
				<p>
					La Quiropr&aacute;ctica se hace imprescindible para la mujer embarazada debido a los importantes cambios f&iacute;sicos y qu&iacute;micos que se producen en su cuerpo. Desde nuestros centros ya son muchas las mujeres que han sido tratadas por nuestros doctores en quiropr&aacute;ctica obteniendo unos resultados enormemente positivos.

				</p>
									
			</div>
			<div class="fancy fancy_adultos">
				<div class="cerrar_fancy"></div>
				<p>
					Recientes estudios nacionales como internacionales revelan que los pacientes quiropr&aacute;cticos mejoran su calidad de vida gracias a los cuidados del doctor en quiropr&aacute;ctica.

				</p>
									
			</div>
			<div class="fancy fancy_edad">
				<div class="cerrar_fancy"></div>
				<p>
					A esta edad, el cuerpo se vuelve m&aacute;s fr&aacute;gil y requiere de mayores cuidados y prevenci&oacute;n. Un estudio realizado por la Rand Corporation demostr&oacute; que los mayores que estaban bajo el cuidado quiropr&aacute;ctico ten&iacute;an mejor salud en general y una mejor calidad de vida: eran menos propensos a ser hospitalizados, a tener asistencia en el hogar y m&aacute;s propensos a comunicar un mejor estado de Salud.

				</p>
									
			</div>
			<div class="fancy fancy_deportista">
				<div class="cerrar_fancy"></div>
				<p>
					La pr&aacute;ctica del deporte exige estar en las mejores condiciones posibles, por esta raz&oacute;n, en numerosos pa&iacute;ses los atletas de alto nivel y los equipos ol&iacute;mpicos suelen estar bajo cuidado Quiropr&aacute;ctico para mejorar su rendimiento.

				</p>
									
			</div>
			
		</div>
		
		<div class="container_casos">
			<div id="ancla_casos"></div>
			<div class="div_casos">
				
				<div class="titulo_casos">Casos <span>Frecuentes</span></div>
				
				<div class="casos_frecuentes casos_top">
					<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/asma.jpg" />
					<div class="hover_casos">
						<div class="title_hover_casos">ASMA</div>
						<div class="text_hover_casos">
							Es una condici&oacute;n muy seria que afecta a los pulmones...<span class="leer_mas_asma">Leer M&aacute;s</span>
						</div>
					</div>
				</div>
				<div class="casos_frecuentes casos_top">
					<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/artrosis.jpg" />
					<div class="hover_casos">
						<div class="title_hover_casos">ARTROSIS</div>
						<div class="text_hover_casos">
							Es una condici&oacute;n &oacute;sea degenerativa de las articulaciones vertebrales... <span class="leer_mas_artrosis">Leer M&aacute;s</span>
						</div>
					</div>
				</div>
				<div class="casos_frecuentes casos_top">
					<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/ciatica.jpg" />
					<div class="hover_casos">
						<div class="title_hover_casos">CIATICA</div>
						<div class="text_hover_casos">
							Esta es una condici&oacute;n  dolorosa y debilitante que afecta... <span class="leer_mas_ciatica">Leer M&aacute;s</span>
						</div>
					</div>
				</div>
				<div class="casos_frecuentes casos_top">
					<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/artritis.jpg" />
					<div class="hover_casos">
						<div class="title_hover_casos">ARTRITIS</div>
						<div class="text_hover_casos">
							Los Quiropr&aacute;cticos saben que una de las causas m&aacute;s...<span class="leer_mas_artritis">Leer M&aacute;s</span>
						</div>
					</div>
				</div>
				<div class="casos_frecuentes casos_top">
					<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/migrana.jpg" />
					<div class="hover_casos">
						<div class="title_hover_casos">MIGRAÑA</div>
						<div class="text_hover_casos">
							La causa m&aacute;s com&uacute;n de los dolores de cabeza es de origen...<span class="leer_mas_migrana">Leer M&aacute;s</span>
						</div>
					</div>
				</div>
				<div class="casos_frecuentes casos_bottom">
					<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/espasmos.jpg" />
					<div class="hover_casos">
						<div class="title_hover_casos">ESPASMOS</div>
						<div class="text_hover_casos">
							La mayor&iacute;a de veces ocurre como resultado de 3 causas...<span class="leer_mas_espasmos">Leer M&aacute;s</span> 
						</div>
					</div>
				</div>
				<div class="casos_frecuentes casos_bottom">
					<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/escoliosis.jpg" />
					<div class="hover_casos">
						<div class="title_hover_casos">ESCOLIOSIS</div>
						<div class="text_hover_casos">
							La escoliosis es una enfermedad deformante y debilitante... <span class="leer_mas_escoliosis">Leer M&aacute;s</span>
						</div>
					</div>
				</div>
				<div class="casos_frecuentes casos_bottom">
					<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/hernia.jpg" />
					<div class="hover_casos">
						<div class="title_hover_casos">HERNIA DISCAL</div>
						<div class="text_hover_casos">
							La causa m&aacute;s com&uacute;n de la degeneraci&oacute;n de los discos es...<span class="leer_mas_hernia">Leer M&aacute;s</span>
						</div>
					</div>
				</div>
				<div class="casos_frecuentes casos_bottom">
					<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/postura.jpg" />
					<div class="hover_casos">
						<div class="title_hover_casos">MALA POSTURA</div>
						<div class="text_hover_casos">
							Las anormalidades en la postura son causas comunes de dolor...<span class="leer_mas_postura">Leer M&aacute;s</span>
						</div>
					</div>
				</div>
				<!--
				<div class="casos_frecuentes casos_bottom">
					<img src="images/img_casos2.jpg" />
					<div class="hover_casos">Dolor de Espalda</div>
				</div>
				-->
				
				<!-- FANCY CASOS FRECUENTES -->
				<div class="fancy fancy_asma">
					<div class="cerrar_fancy"></div>
					<div class="titulo_mision">ASMA</div>
					<p>
						Es una condici&oacute;n muy seria que afecta a los pulmones. El Alveolo, es un saco de aire que se encuentra dentro de los pulmoes, y/o el bronquio no se abre completamente dando como resultado un pobre cambio de ox&iacute;geno a di&oacute;xido de carbono o la constricci&oacute;n de las v&iacute;s a&eacute;reas.
					</p>							
			
				</div>
				<div class="fancy fancy_artrosis">
					<div class="cerrar_fancy"></div>
					<div class="titulo_mision">ARTROSIS</div>
					<p>
						Es una condici&oacute;n &oacute;sea degenerativa de las articulaciones vertebrales. Las subluxaciones vertebrales son las causas m&oacute;s comunes de artrosis en la columna vertebral (espondilosis). Los Quiropr&aacute;cticos son los &uacute;nicos especialistas que corrigen la causa de la artrosis a trav&eacute;s de la realizaci&oacute;n de ajustes espec&iacute;ficos en la columna.
					</p>							
			
				</div>
				<div class="fancy fancy_ciatica">
					<div class="cerrar_fancy"></div>
					<div class="titulo_mision">CIATICA</div>
					<p>
						Esta es una condici&oacute;n  dolorosa y debilitante que afecta al nervio m&aacute;s largo del cuerpo. Mientras que la mayor&iacute;a de los nervios son de tamaño microsc&oacute;pico, el nervio ci&aacute;tico tiene un di&aacute;metro aproximado al de una moneda de 1 c&eacute;ntimo de sol.
					</p>							
			
				</div>
				<div class="fancy fancy_artritis">
					<div class="cerrar_fancy"></div>
					<div class="titulo_mision">ARTRITIS</div>
					<p>
						Los Quiropr&aacute;cticos saben que una de las causas m&aacute;s comunes para las articulaciones de la columna que est&aacute;n inflamadas, es la yuxtaposici&oacute;n de la alineaci&oacute;n individual de la v&eacute;rtebra tambi&eacute;n conocida como Subluxaci&oacute;n Vertebral.
					</p>							
			
				</div>
				<div class="fancy fancy_migrana">
					<div class="cerrar_fancy"></div>
					<div class="titulo_mision">MIGRAÑA</div>
					<p>
						La causa m&aacute;s com&uacute;n de los dolores de cabeza es de origen cervical es decir de procedencia de la columna cervical o cuello. Las desalineaciones de la columna cervical y dorsal casi siempre existen en pacientes que afirman tener dolores de cabeza.
					</p>							
			
				</div>
				<div class="fancy fancy_espasmos">
					<div class="cerrar_fancy"></div>
					<div class="titulo_mision">ESPASMOS</div>
					<p>
						La mayor&iacute;a de veces ocurre como resultado de 3 causas: estr&eacute;s f&iacute;sico, qu&iacute;mico y mental. El estr&eacute;s f&iacute;sico es com&uacute;nmente causado por la subluxaci&oacute;n vertebral.Si bien las terapias convencionales pueden abordar de manera eficaz de estr&eacute;s mental y qu&iacute;mico.
					</p>							
			
				</div>
				<div class="fancy fancy_escoliosis">
					<div class="cerrar_fancy"></div>
					<div class="titulo_mision">ESCOLIOSIS</div>
					<p>
						La escoliosis es una enfermedad deformante y debilitante. Por definici&oacute;n es una desviaci&oacute;n lateral anormal de la columna. La causa es desconocida, los quiropr&aacute;cticos han encontrado que a trav&eacute;s de los años muchos pacientes con escoliosis han encontrado un gran beneficio con el tratamiento quiropráctico.
					</p>							
			
				</div>
				<div class="fancy fancy_hernia">
					<div class="cerrar_fancy"></div>
					<div class="titulo_mision">HERNIA DISCAL</div>
					<p>
						La causa m&aacute;s com&uacute;n de la degeneraci&oacute;n de los discos es la subluxaci&oacute;n vertebral. La subluxaci&oacute;n vertebral conlleva a una presi&oacute;n anormal y a la inestabilidad que soportan el peso de las delicadas paredes fibrocartilaginosas del disco.
					</p>							
			
				</div>
				<div class="fancy fancy_postura">
					<div class="cerrar_fancy"></div>
					<div class="titulo_mision">MALA POSTURA</div>
					<p>
						Las anormalidades en la postura son causas comunes de dolor y de incapacidad que casi siempre pasan desapercibidas por los tratantes, quienes solo se enfocan en el sufrimiento de los pacientes con problemas agudos y cr&oacute;nicos en el sistema m&uacute;sculo-esquel&eacute;tico.
					</p>							
			
				</div>
				
				
				
			</div>
		
		
		</div>
	
	
	</div>

	<!-- VIDEOS -->
	<div id="videos">
		
		
		<div id="ancla_videos"></div>
		
		<div class="container_quiropractica" >
		
			<div class="div_videos">
			
				<div class="centro_videos">
					
					<div class="titulo_videos">Aquí encontrara una pequeña selecci&oacute;n de videos importantes para que conozca m&aacute;s de nosotros. </div>
					
					<!--
					<video  src="" class="video-js vjs-default-skin video video_left" controls preload="auto" width="316" height="178" data-setup='{ "techOrder": ["youtube"], "src": "https://www.youtube.com/watch?v=eAyQpyHa_ms" }'></video>
					<video src="" class="video-js vjs-default-skin video video_center" controls preload="auto" width="316" height="178" data-setup='{ "techOrder": ["youtube"], "src": "https://www.youtube.com/watch?v=HZaDbUofNgE" }'></video>
					<video  src="" class="video-js vjs-default-skin video video_right" controls preload="auto" width="316" height="178" data-setup='{ "techOrder": ["youtube"], "src": "https://www.youtube.com/watch?v=eAyQpyHa_ms" }'></video>
					
					-->
					<div id="ca-container" class="ca-container">
						<div class="ca-wrapper">
							<?php 
								$conexion=mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
								$consulta="SELECT * FROM videos";
								$resultado= mysqli_query($conexion,$consulta);
                                mysqli_set_charset($conexion,"utf8");
								while($fila=mysqli_fetch_array($resultado)){
                                    
							?>
							<div class="ca-item ca-item-1">
								<video  src="" class="video-js vjs-default-skin video video_right" controls preload="auto" width="316" height="178" data-setup='{ "techOrder": ["youtube"], "src": "<?php echo $fila['video']; ?>" }'></video>
								<div class="titulo_video"><?php echo $fila['titulo']; ?></div>
								<div class="play_video"></div>
								
								<div class="fancy_video">
									<div class="cerrar_video"></div>
									<video  src="" class="video-js vjs-default-skin video_fancy" controls preload="auto" width="800" height="380" data-setup='{ "techOrder": ["youtube"], "src": "<?php echo $fila['video']; ?>" }'></video>
								</div>
								
								
							</div>
							
							<?php } ?>
							
							
						</div>
					</div>
				
				</div>
			
			</div>
		
		</div>
		<!-- FONDO FANCY VIDEOS -->
							<div class="fondo_fancy_videos"></div>
	
	</div>

	<div id="contactos">
		<div id="ancla_contactos"></div>
		<div class="container_mapas">
			<div id="googleMap" style="width:100%;height:100%;"></div> 				
		</div>		
		
		<div class="container_info_map">
			<div class="info_map_izq ">
				<div class="header_info_map">
					<div class="title_map">Santo Domingo Gazcue</div>
					<div class="ver_mapa map_santo_domingo" id="map_santo_domingo">Ver Contacto</div>
				</div>
				
				<div class="contenido_map">
					<div id="icon_direccion"></div>
					<div class="text_direccion">Calle Cayetano Rodriguez #7, Gazcue, Santo Domingo, Rep.Dom.</div>
				</div>
				<div class="contenido_map">
					<div id="icon_telefono"></div>
					<div class="text_direccion">(809)682-9218 <br/> (829)423-3925</div>
				</div>
				<div class="contenido_map">
					<div id="icon_horario"></div>
					<div class="text_horario">
						
						Lunes, Mi&eacute;rcoles y Viernes  8:00 a.m. - 12:00 a.m. /  3:00 p.m. - 7:00 p.m.
						 <br/>
						Martes,  Jueves y S&aacute;bado   de 8:00 a.m.   a 12:00 a.m.
					</div>
				</div>
				<div class="contenido_map">
					<div id="icon_mail"></div>
					<div class="text_horario">
						
                    <div class="mail1_sto_dgo mail">info@quiropractico.com.do</div>
						
					</div>
				</div>
				
				
				
			</div>
            
            <div class="info_map_izq info_map_santiago">
				<div class="header_info_map">
					<div class="title_map">Santo Domingo Bella Vista</div>
					<div class="ver_mapa map_bella_vista" id="map_bella_vista">Ver Contacto</div>
				</div>
				
				<div class="contenido_map">
					<div id="icon_direccion"></div>
					<div class="text_direccion">Calle Ernesto de la Maza No. 8 Terraza de La Laguna, Bella Vista Santo Domingo, R. D.</div>
				</div>
				<div class="contenido_map">
					<div id="icon_telefono"></div>
					<div class="text_direccion">(809) 508-3218 </div>
					<div class="text_direccion">(829) 423-5449 </div>
				</div>
				<div class="contenido_map">
					<div id="icon_horario"></div>
					<div class="text_horario">						
						Lunes a Viernes 8:00 a.m. a 12:00 p.m. y 3:00 pm hasta 7:00 pm <br/>
                        Sábado de 8:00 a.m. a 12:00 a.m.
					</div>
				</div>
                
                <div class="contenido_map">
					<div id="icon_mail"></div>
					<div class="text_horario">
						
                       <div class="mail1_sto_dgo mail">info@quiropractico.com.do</div>
						 
                       
					</div>
				</div>
				
				
				
			</div>
            
            
            
			<div class="info_map_izq">
			
				<div class="header_info_map">
					<div class="title_map">Puerto Plata</div>
					<div class="ver_mapa map_puerto_plata" id="map_puerto_plata">Ver Contacto</div>
				</div>
				
				<div class="contenido_map">
					<div id="icon_direccion"></div>
					<div class="text_direccion">Calle Prof. Juan Bosch 102, Esq.20 de Diciembre, Puerto Plata,Rep.Dom.</div>
				</div>
				<div class="contenido_map">
					<div id="icon_telefono"></div>
					<div class="text_direccion">(809)244-4142 <br/> (829)423-3926</div>
				</div>
				<div class="contenido_map">
					<div id="icon_horario"></div>
					<div class="text_horario">
						Lunes- Martes - Mi&eacute;rcoles 8:00 a.m. hasta 12:00 p.m.  y de 3:00 p.m. hasta 7:00 p.m.<br/>
						Jueves de 3:00 p.m. hasta 7:00 p.m.<br/>
						Viernes de 8:00 a.m. hasta 12:00 p.m y  de 2:00 p.m. a 6:00 p.m.
					</div>
				</div>
                
                <div class="contenido_map">
					<div id="icon_mail"></div>
					<div class="text_horario">
						
                        <div class="mail1_sto_dgo mail">info@quiropractico.com.do</div>
						 
                       
					</div>
				</div>
			
			
			</div>
			
			<div class="info_map_izq info_map_santiago">
				<div class="header_info_map">
					<div class="title_map">Santiago</div>
					<div class="ver_mapa map_santiago" id="map_santiago">Ver Contacto</div>
				</div>
				
				<div class="contenido_map">
					<div id="icon_direccion"></div>
					<div class="text_direccion"> Calle Onésimo Jiménez esquina Poyecto 7, Jardines Metropolitanos, Santiago, Rep.Dom. </div>
				</div>
				<div class="contenido_map">
					<div id="icon_telefono"></div>
					<div class="text_direccion">(809) 582-5408 <br/>(829)423-3928</div>
				</div>
				<div class="contenido_map">
					<div id="icon_horario"></div>
					<div class="text_horario">						
						Lunes- Mi&eacute;rcoles- Viernes 8:00 a.m. hasta 12:00 p.m.  y de 3:00 p.m. hasta 7:00 p.m.<br/>
						Martes - Jueves y sábado 8:00am- 12:00pm
					</div>
				</div>
                
                <div class="contenido_map">
					<div id="icon_mail"></div>
					<div class="text_horario">
						
                       <div class="mail1_sto_dgo mail">info@quiropractico.com.do</div>
						 
                       
					</div>
				</div>
				
				
				
			</div>
            

            
           
            <div class="fondo"></div>
		</div>
	</div>

	<?php include("include/footer.php"); ?>
		 <div class="desplegable_correo"></div>
		<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/jquery.js"></script>	
		<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/waypoints.min.js"></script>		
			<!-- SCRIPT PARA WAYPOINTS -->
		<script type="text/javascript">
		
			var device = navigator.userAgent;

			if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
			{
				
				//alert("estas en un smartphone");
				
			}else{
				/*
				$("#nosotros").waypoint(function(direction){
				  
				  if(direction=="down"){
					$(".container_menu").css({"background":"rgb(255,255,255)","transition":"0.5s"});
					$(".logo_pc").css({"background":"rgb(255,255,255)","transition":"0.5s"});
				  
					$(".container_texto_nosotros").css({
						"transition":"0.5s",
						"-webkit-transition":"0.5s",
						"-moz-transition":"0.5s",
						"-o-transition":"0.5s",
						"-ms-transition":"0.5s",
						"top":"0px"
					});
					//$(".doctor_nosotros").fadeIn(100);
					
					$(".doctor_nosotros").fadeIn(500);									
					$(".doctor_nosotros").css({											
						"transition":"0.3s",
						"-webkit-transition":"0.3s",
						"-moz-transition":"0.3s",
						"-o-transition":"0.3s",
						"-ms-transition":"0.3s",
						"top":"0px"
					});
					$(".nombre_doctor").css({
						"top":"0px",
						"transition":"0.7s",
						"-webkit-transition":"0.7s",
						"-moz-transition":"0.7s",
						"-o-transition":"0.7s",
						"-ms-transition":"0.7s"
					});
					$(".descripcion_doctor").css({
						"top":"0px",
						"transition":"0.9s",
						"-webkit-transition":"0.9s",
						"-moz-transition":"0.9s",
						"-o-transition":"0.9s",
						"-ms-transition":"0.9s"
					});
					
					
				  }	  
				  
				}, { offset: 100 });
			$("#servicios").waypoint(function(direction){
				  
				  if(direction=="down"){	
					$(".img_servicio").fadeIn(0);
					$(".img_servicio").css({							
						"transition":"0.5s",
						"-webkit-transition":"0.5s",
						"-moz-transition":"0.5s",
						"-o-transition":"0.5s",
						"-ms-transition":"0.5s",
						"top":"0px"
					});				
					
				  }	  
				  
				}, { offset: 150 });
				
			$("#quiropractica").waypoint(function(direction){
				  
				  if(direction=="down"){		
					$(".img_quiropractica").fadeIn(0);
					$(".img_quiropractica").css({						
						"transition":"0.7s",
						"-webkit-transition":"0.7s",
						"-moz-transition":"0.7s",
						"-o-transition":"0.7s",
						"-ms-transition":"0.7s",
						"top":"0px"
					});
					
					$(".titulo2_quiropractica").css({
						"top":"0px",
						"transition":"0.7s",
						"-webkit-transition":"0.7s",
						"-moz-transition":"0.7s",
						"-o-transition":"0.7s",
						"-ms-transition":"0.7s"
					});				
					$(".descripcion_quiropractica").css({
						"top":"0px",
						"transition":"0.9s",
						"-webkit-transition":"0.9s",
						"-moz-transition":"0.9s",
						"-o-transition":"0.9s",
						"-ms-transition":"0.9s"
					});
				
					
					
				  }	  
				  
				}, { offset: 150 });
				
			$(".container_util").waypoint(function(direction){
				  
				  if(direction=="down"){		
					$(".container_util").css({
						"background":"rgb(255,255,255)",
						"transition":"0.5s",
						"-webkit-transition":"0.5s",
						"-moz-transition":"0.5s",
						"-o-transition":"0.5s",
						"-ms-transition":"0.5s"
					});	
					$(".titulo_util").css({
						"transform":"scale(1,1)",
						"-webkit-transform":"scale(1,1)",
						"-moz-transform":"scale(1,1)",
						"-o-transform":"scale(1,1)",
						"-ms-transform":"scale(1,1)",
						"transition":"0.3s",
						"-webkit-transition":"0.3s",
						"-moz-transition":"0.3s",
						"-o-transition":"0.3s",
						"-ms-transition":"0.3s"
					});			
					$(".subtitulo_util").css({
						"transform":"scale(1,1)",
						"-webkit-transform":"scale(1,1)",
						"-moz-transform":"scale(1,1)",
						"-o-transform":"scale(1,1)",
						"-ms-transform":"scale(1,1)",
						"transition":"0.7s",
						"-webkit-transition":"0.7s",
						"-moz-transition":"0.7s",
						"-o-transition":"0.7s",
						"-ms-transition":"0.7s"
					});		
					$(".img_util").css({
						"transform":"scale(1,1)",
						"-webkit-transform":"scale(1,1)",
						"-moz-transform":"scale(1,1)",
						"-o-transform":"scale(1,1)",
						"-ms-transform":"scale(1,1)",						
						"transition":"0.7s",
						"-webkit-transition":"0.7s",
						"-moz-transition":"0.7s",
						"-o-transition":"0.7s",
						"-ms-transition":"0.7s",
						"transform":"rotate(0deg)",
						"-webkit-transform":"rotate(0deg)",
						"-moz-transform":"rotate(0deg)",
						"-o-transform":"rotate(0deg)"
						
					});							
					
				  }	  
				  
				}, { offset: 390 });
				
			$(".container_casos").waypoint(function(direction){
				  
				  if(direction=="down"){		
					$(".casos_top").fadeIn(100);
					$(".casos_top").css({
						"top":"0px",
						"transition":"0.7s",
						"-webkit-transition":"0.7s",
						"-moz-transition":"0.7s",
						"-o-transition":"0.7s",
						"-ms-transition":"0.7s"
						
					});		
					$(".casos_bottom").fadeIn(100);
					$(".casos_bottom").css({
						"top":"0px",
						"transition":"1s",
						"-webkit-transition":"1s",
						"-moz-transition":"1s",
						"-o-transition":"1s",
						"-ms-transition":"1s"
						
					});					
					
				  }	  
				  
				}, { offset: 350 });
				
			$("#videos").waypoint(function(direction){
				  
				  if(direction=="down"){	
					
					$(".video_center").css({
						"top":"0px",
						"transition":"0.3s",
						"-webkit-transition":"0.3s",
						"-moz-transition":"0.3s",
						"-o-transition":"0.3s",
						"-ms-transition":"0.3s"
						
					});	
					$(".video_left").css({
						"top":"0px",
						"transition":"0.6s",
						"-webkit-transition":"0.6s",
						"-moz-transition":"0.6s",
						"-o-transition":"0.6s",
						"-ms-transition":"0.6s"
						
					});	
					$(".video_right").css({
						"top":"0px",
						"transition":"0.9s",
						"-webkit-transition":"0.9s",
						"-moz-transition":"0.9s",
						"-o-transition":"0.9s",
						"-ms-transition":"0.9s"
						
					});		
							
					
				  }	  
				  
				}, { offset: 300 });
				
			}
			*/
			
			$("#inicio").waypoint(function(direction){
				  
				  if(direction=="up"){
						
						$(".container_menu").css({"background":"rgba(255,255,255,0.95)","transition":"0.5s"});
						$(".logo_pc").css({"background":"rgba(252,247,243,0.9)","transition":"0.5s"});
						
						$("#menu_inicio").css({
							"background":"rgb(51,156,72)",
							"color":"rgb(255,255,255)"
						});
						$("#menu_nosotros").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_servicios").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_quiropractica").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_videos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_contactos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
					
					
					
				  }	  
				  
				}, { offset: -200 });
			$("#nosotros").waypoint(function(direction){
				  
				  if(direction=="down"){
						
						$(".container_menu").css({"background":"rgb(255,255,255)","transition":"0.5s"});
						$(".logo_pc").css({"background":"rgb(255,255,255)","transition":"0.5s"});
						
						$("#menu_nosotros").css({
							"background":"rgb(51,156,72)",
							"color":"rgb(255,255,255)"
						});
						$("#menu_inicio").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_servicios").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_quiropractica").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_videos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_contactos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
					
					
					
				  }	  
				  
				}, { offset: 200 });
			$("#nosotros").waypoint(function(direction){
				  
				  if(direction=="up"){
						
						$("#menu_nosotros").css({
							"background":"rgb(51,156,72)",
							"color":"rgb(255,255,255)"
						});
						$("#menu_inicio").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_servicios").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_quiropractica").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_videos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_contactos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
					
					
					
				  }	  
				  
				}, { offset: -200 });
			
			$("#servicios").waypoint(function(direction){
				  
				  if(direction=="down"){
						
						$("#menu_servicios").css({
							"background":"rgb(51,156,72)",
							"color":"rgb(255,255,255)"
						});
						$("#menu_inicio").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_nosotros").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_quiropractica").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_videos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_contactos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
					
					
					
				  }	  
				  
				}, { offset: 200 });
			$("#servicios").waypoint(function(direction){
				  
				  if(direction=="up"){
						
						$("#menu_servicios").css({
							"background":"rgb(51,156,72)",
							"color":"rgb(255,255,255)"
						});
						$("#menu_inicio").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_nosotros").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_quiropractica").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_videos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_contactos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
					
					
					
				  }	  
				  
				}, { offset: -200 });
			$("#quiropractica").waypoint(function(direction){
				  
				  if(direction=="down"){
						
						$("#menu_quiropractica").css({
							"background":"rgb(51,156,72)",
							"color":"rgb(255,255,255)"
						});
						$("#menu_inicio").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_nosotros").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_servicios").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_videos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_contactos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
					
					
					
				  }	  
				  
				}, { offset: 200 });
			$("#quiropractica").waypoint(function(direction){
				  
				  if(direction=="up"){
						$("#menu_quiropractica").css({
							"background":"rgb(51,156,72)",
							"color":"rgb(255,255,255)"
						});
						$("#menu_inicio").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_nosotros").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_servicios").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_videos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_contactos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
					
					
					
				  }	  
				  
				}, { offset: -1600 });
			$("#videos").waypoint(function(direction){
				  
				  if(direction=="down"){
						 
						$("#menu_videos").css({
							"background":"rgb(51,156,72)",
							"color":"rgb(255,255,255)"
						});
						$("#menu_inicio").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_nosotros").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_servicios").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_quiropractica").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_contactos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
					
					
					
				  }	  
				  
				}, { offset: 200 });
			$("#videos").waypoint(function(direction){
				  
				  if(direction=="up"){
                       
						
						$("#menu_videos").css({
							"background":"rgb(51,156,72)",
							"color":"rgb(255,255,255)"
						});
						$("#menu_inicio").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_nosotros").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_servicios").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_quiropractica").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_contactos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
					
					
					
				  }	  
				  
				}, { offset: -50 });
			$("#contactos").waypoint(function(direction){
				  
				  if(direction=="down"){
						
						$("#menu_contactos").css({
							"background":"rgb(51,156,72)",
							"color":"rgb(255,255,255)"
						});
						$("#menu_inicio").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_nosotros").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_servicios").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_quiropractica").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
						$("#menu_videos").css({
							"background":"none",
							"color":"rgb(114,114,114)"
						});
					
					
					
				  }	  
				  
				}, { offset: 200 });
			
			
			
			
			
			}
			
			
			
			
		</script>
		
		
		
		
		
		
		<!-- FIN SCRIPT PARA WAYPOINTS -->
		
			
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/jquery.easing.1.3.js"></script>
		<!-- the jScrollPane script -->
		<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/jquery.contentcarousel.js"></script>
		<script type="text/javascript">
			$('#ca-container').contentcarousel({
				// speed for the sliding animation
				sliderSpeed     : 500,
				// easing for the sliding animation
				sliderEasing    : 'easeOutExpo',
				// speed for the item animation (open / close)
				itemSpeed       : 500,
				// easing for the item animation (open / close)
				itemEasing      : 'easeOutExpo',
				// number of items to scroll at a time
				scroll          : 1 
			});
		</script>
		
		<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/script2.js"></script>
		<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/main.js"></script>	
		<script src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/video.js"></script>
		<script src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/vjs.youtube.js"></script>
		<script>
			videojs.options.flash.swf = "video-js.swf";
		</script>		
		
		
		<script
			src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
		</script>
		

		<script>
		var santo_domingo = new google.maps.LatLng(18.4627092,-69.9057681);
		var puerto_plata = new google.maps.LatLng(19.7960837,-70.6883988,54);
		var santiago = new google.maps.LatLng(19.4621637,-70.6948069,18);
		var bella_vista = new google.maps.LatLng(18.453896,-69.9480529,18);
		
		
		function HomeControl(controlDiv, map) {
			  var santo_domingo_center=document.getElementById('map_santo_domingo');
			  var puerto_plata_center=document.getElementById('map_puerto_plata');	  
			  var santiago_center=document.getElementById('map_santiago');	  
			  var bella_vista_center=document.getElementById('map_bella_vista');	  
				  
			  google.maps.event.addDomListener(santo_domingo_center, 'click', function() {				
				map.setCenter(santo_domingo)
			  });
			  google.maps.event.addDomListener(puerto_plata_center, 'click', function() {				
				map.setCenter(puerto_plata)			
			  });	
			  google.maps.event.addDomListener(santiago_center, 'click', function() {				
				map.setCenter(santiago)			
			  });	
			  google.maps.event.addDomListener(bella_vista_center, 'click', function() {				
				map.setCenter(bella_vista)			
			  });			 
			
			}
		function initialize()
		{
		// var myLatlng = new google.maps.LatLng(18.4647927,-69.9069715);		
		
		 var mapOptions = {
			zoom: 17,
			center: santo_domingo,
			scrollwheel: false,
			icon:image
		  }

		var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
		var image = '<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/icono_map_2.png';

		var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h2 id="firstHeading" class="firstHeading">Mission Life Internacional</h2>'+
			'<div id="bodyContent">'+
			'<p></p>'+
			'</div>'+
			'</div>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		  var marker = new google.maps.Marker({
			  position: santo_domingo,
			  map: map,
			  icon: image,
			  title: 'MISSION LIFE'
		  });
		  $(".map_santo_domingo").click(function(){
			marker.setPosition(santo_domingo);	
				$(".map_santo_domingo").addClass("red_map");
				$(".map_puerto_plata").removeClass("red_map");
				$(".map_santiago").removeClass("red_map");
				$(".map_bella_vista").removeClass("red_map");
              
                $(this).parents(".info_map_izq").css({
                    "height":"auto"
                });
              $(this).parents(".info_map_izq").siblings(".info_map_izq").css({
                    "height":"36px"
                });
				
			});
		  $(".map_puerto_plata").click(function(){
			marker.setPosition(puerto_plata);	
				$(".map_puerto_plata").addClass("red_map");
				$(".map_santo_domingo").removeClass("red_map");
				$(".map_santiago").removeClass("red_map");
				$(".map_bella_vista").removeClass("red_map");
              
       
              $(this).parents(".info_map_izq").css({
                    "height":"auto"
                });
              $(this).parents(".info_map_izq").siblings(".info_map_izq").css({
                    "height":"36px"
                });
              
              
			});
		  $(".map_santiago").click(function(){
			marker.setPosition(santiago);	
				$(".map_santiago").addClass("red_map");
				$(".map_puerto_plata").removeClass("red_map");
				$(".map_santo_domingo").removeClass("red_map");
				$(".map_bella_vista").removeClass("red_map");
              
              $(this).parents(".info_map_izq").css({
                    "height":"auto"
                });
              $(this).parents(".info_map_izq").siblings(".info_map_izq").css({
                    "height":"36px"
                });
			});
		  $(".map_bella_vista").click(function(){
//              alert(bella_vista);
			marker.setPosition(bella_vista);	
				$(".map_bella_vista").addClass("red_map");
				$(".map_santiago").removeClass("red_map");
				$(".map_puerto_plata").removeClass("red_map");
				$(".map_santo_domingo").removeClass("red_map");
              
              $(this).parents(".info_map_izq").css({
                    "height":"auto"
                });
              $(this).parents(".info_map_izq").siblings(".info_map_izq").css({
                    "height":"36px"
                });
			});
		

		var homeControlDiv = document.createElement('div');
		var homeControl = new HomeControl(homeControlDiv, map);
		homeControlDiv.index = 1;
		map.controls[google.maps.ControlPosition.TOP_RIGHT].push(homeControlDiv);
		  
		google.maps.event.addListener(marker, 'click', function() {
		  infowindow.open(map,marker);
		});
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		
		
		</script>
		
		<script>
		$(window).load(function() {
		  $('#preloader').fadeOut(300, function() {
			//$('body').css('overflow','hidden');
			$(this).remove();
		  });
		});
		</script>

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
              <script>
                  $(document).ready(function(){
                      
                      
                     $(function() {
                        $( "#datepicker" ).datepicker();
                        $( "#datepicker" ).datepicker("option","dateFormat","dd-mm-yy");
                      });
                  
                  });
             
              </script>
    
    
    
    
            <script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/jssor.js"></script>
        <script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/jssor.slider.js"></script>
		
        
    <script>
	 var _SlideshowTransitions = [
            //Fade
            { $Duration: 1500, $Opacity: 2 }
            ];
        jQuery(document).ready(function ($) {
 
 
            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

            var options = {
				
				$SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
		
    </script>
    
    
    
    
    
    
        