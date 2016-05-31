<?php 
    include("../confi/conf.inc.php");
	
		$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

?>
<div class="header-overview">
	<div class="title-windows">
    Add <span>Designer </span>
    </div>
    <div class="botonera"></div>
</div>

<div class="division"></div>

	<!-- action="<?php /*echo "http://".$_SERVER['HTTP_HOST'].$directorio;*/ ?>include/procesa_asdesigner.php" -->
<form name="form_designer" id="form_designer" method="POST" enctype="multipart/form-data" action="include/agregarUsuarios.php"  autocomplete="off" >

 
  		<?php  

			$campos_diseñador = array(
			"First Name", "Last Name","Username","Company","Correo","Password");

				for ($i=0; $i < sizeof($campos_diseñador); $i++) { 

		?>     	
			<div id="form_request" style="float:none; margin-bottom:15px;"> 
				<label for="<?php  echo $campos_diseñador[$i];?>" style="display: table-cell;"><?php  echo $campos_diseñador[$i];?></label>

					<?php if ($campos_diseñador[$i] != "Password") {  ?>
							<?php if ($campos_diseñador[$i] == "Company"){ ?>
								<select name="<?php  echo $campos_diseñador[$i];?>" style="width: 288px; height: 50px;margin-top: 5px; padding-left: 10px; border: 1px solid rgb(220,220,220); outline: none; font-family: ArialNarrow; font-size: 14px; color: rgb(117,117,117);" >

									<?php 
										$consulta_company="SELECT * FROM company WHERE estado='1' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										while($fila_company= mysqli_fetch_array($resultado_company)){
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
									<?php } ?>										
								</select>
								
							<?php }else{ ?>

								<input type="text" id="<?php  echo preg_replace('/\s+/', '_', $campos_diseñador[$i]);?>" name="<?php echo preg_replace('/\s+/', '_', $campos_diseñador[$i]);?>" autocomplete="off" >	

							<?php }  ?>

					<?php }else{ ?>

						<input type="password" id="<?php  echo $campos_diseñador[$i];?>" name="<?php  echo $campos_diseñador[$i];?>"  style="width: 288px; height: 50px;margin-top: 5px; padding-left: 10px; border: 1px solid rgb(220,220,220); outline: none; font-family: ArialNarrow; font-size: 14px; color: rgb(117,117,117);" >
						
					<?php } ?>


			</div>
      
      	<?php } ?>

	
	<input name="send" type="submit" id="submit_request" style="margin-top:0;float:none; margin-bottom:15px; margin-left:2%;" value="ADD DESIGNER">
	<div class="division"></div>
	<input type="hidden" name="tipo" value="disenador"></input>
</form>




 



