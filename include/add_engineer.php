<?php 
	include("../confi/conf.inc.php");
	$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

?>

<div class="header-overview">
	<div class="title-windows">
    Add <span>Engineer </span>
    </div>
    <div class="botonera"></div>
</div>

<div class="division"></div>

	<!-- action="<?php /*echo "http://".$_SERVER['HTTP_HOST'].$directorio;*/ ?>include/procesa_asdesigner.php" -->
<form name="form_designer" id="form_designer" method="POST" enctype="multipart/form-data" action="include/agregarUsuarios.php">

  	<!-- <div class="div_select_request" style="margin-left:2%;float:none; margin-bottom:15px;"></div> -->

  		<?php  

			$campos_diseñador = array(
				"First Name", "Last Name","Company");

					//var_dump($campos_diseñador[0]);

					for ($i=0; $i < sizeof($campos_diseñador); $i++) { 

		?>     	
			<div id="form_request" style="margin-left:2%;float:none; margin-bottom:15px;"> 

				<label for="<?php  echo $campos_diseñador[$i];?>" style="display: table-cell;"><?php  echo $campos_diseñador[$i];?></label>



					<?php if ($campos_diseñador[$i] != "Company"){ ?>

							<input type="text" id="<?php  echo preg_replace('/\s+/', '_', $campos_diseñador[$i]);?>" name="<?php echo preg_replace('/\s+/', '_', $campos_diseñador[$i]);;?>" autocomplete="off" >	

							
					<?php }else{ ?>

						<select name="<?php echo preg_replace('/\s+/', '_', $campos_diseñador[$i]);?>" style="width: 31%;height: 44px;padding: 10px;margin-top: 8px;margin-left: 0px;">

								<?php 
									$consulta_companies = "SELECT id,nombre FROM usuarios WHERE apellido = 'contratista'";
									$resultado_companies = mysqli_query($conexion,$consulta_companies);

										while ($fila_companies =mysqli_fetch_array($resultado_companies)) {
																			

								?>		
									<option value="<?php echo $fila_companies['id']; ?>"><?php echo $fila_companies['nombre']; ?></option>


								<?php } ?>

						</select>
							
					<?php } ?>

			</div>
      
      	<?php } ?>

	
	<input name="send" type="submit" id="submit_request" style="margin-top:0;float:none; margin-bottom:15px; margin-left:2%;" value="ADD ENGINEER">

	<div class="division"></div>

	<input type="hidden" name="tipo" value="engineer"></input>

</form>




 



