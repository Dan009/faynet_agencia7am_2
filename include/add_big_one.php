<div class="header-overview">
	<div class="title-windows">
    Add <span><?php if ($_POST['tipo'] == "COMPANY") { echo "COMPANY"; }else{ echo "CONTRACTOR"; } ?> </span>
    </div>
    <div class="botonera"></div>
</div>

<div class="division"></div>

	<!-- action="<?php /*echo "http://".$_SERVER['HTTP_HOST'].$directorio;*/ ?>include/procesa_asdesigner.php" -->
<form name="form_designer" id="form_designer" method="POST" enctype="multipart/form-data" action="include/agregarUsuarios.php"  autocomplete="off" >

	  		<?php  

				$campos_empresas = array(
				"Company Name","Username","Correo","Password");

					for ($i=0; $i < sizeof($campos_empresas); $i++) { 

			?>     	
				<div id="form_request" style="float:none; margin-bottom:15px;"> 
					<label for="<?php  echo $campos_empresas[$i];?>" style="display: table-cell;"><?php  echo $campos_empresas[$i];?></label>

						<?php if ($campos_empresas[$i] != "Password") {  ?>

							<input type="text" id="<?php  echo preg_replace('/\s+/', '_', $campos_empresas[$i]);?>" name="<?php echo preg_replace('/\s+/', '_', $campos_empresas[$i]);;?>" autocomplete="off" >	

						<?php }else{ ?>

							<input type="password" id="<?php  echo $campos_empresas[$i];?>" name="<?php  echo $campos_empresas[$i];?>"  style="width: 288px; height: 50px;margin-top: 5px; padding-left: 10px; border: 1px solid rgb(220,220,220); outline: none; font-family: ArialNarrow; font-size: 14px; color: rgb(117,117,117);" autocomplete="off"  >
							
						<?php } ?>


				</div>
	      
	      	<?php } /* FIN FOR*/ ?>


	<input name="send" type="submit" id="submit_request" style="margin-top:0;float:none; margin-bottom:15px; margin-left:2%;" value="ADD <?php  echo $_POST['tipo']; ?>">
	<div class="division"></div>
	<input type="hidden" name="tipo" value="<?php echo $_POST['tipo']; ?>"></input>
</form>




 



