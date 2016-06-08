<div class="header-overview">
	<div class="title-windows">
    Add <span>Designer </span>
    </div>
    <div class="botonera"></div>
</div>

<div class="division"></div>

	<!-- action="<?php /*echo "http://".$_SERVER['HTTP_HOST'].$directorio;*/ ?>include/procesa_asdesigner.php" -->
<form name="form_designer" id="form_designer" method="POST" enctype="multipart/form-data" action="agregarUsuarios.php">

  	<!-- <div class="div_select_request" style="margin-left:2%;float:none; margin-bottom:15px;"></div> -->

  		<?php  

			$campos_diseñador = array(
			"First Name", "Last Name","Username","Company","Correo","Password");

			var_dump($campos_diseñador[0]);

				for ($i=0; $i < sizeof($campos_diseñador); $i++) { 

		?>     	
			<div id="form_request" style="margin-left:2%;float:none; margin-bottom:15px;"> 
				<label for="<?php  echo $campos_diseñador[$i];?>"><?php echo $campos_diseñador[$i]; ?></label>
				<input type="text" id="<?php  echo $campos_diseñador[$i];?>" name="<?php  echo $campos_diseñador[$i];?>" />

			</div>
      
      	<?php } ?>

	
	<input name="send" type="submit" id="submit_request" style="margin-top:0;float:none; margin-bottom:15px; margin-left:2%;" value="ADD DESIGNER">
	<div class="division"></div>

</form>




 



