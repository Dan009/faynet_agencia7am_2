<?php

    include("../confi/conf.inc.php");
	$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);


 	//SELECCIONANDO EL DESIGNER; 

		$consulta="SELECT * FROM designer WHERE estado='1'";	
		$resultado= mysqli_query($conexion,$consulta);
		//$fila= mysqli_fetch_array($resultado);
		//while($fila= mysqli_fetch_array($resultado)){ 
		//echo $fila['name_designer'];
		
		//SELECCIONANDO EL PLAN; 
			$consulta_plan="SELECT * FROM request WHERE id='".$_POST['id_request']."' ";	
			$resultado_plan= mysqli_query($conexion,$consulta_plan);
			$fila_plan= mysqli_fetch_array($resultado_plan);
			
		//SELECCIONANDO EL DESIGNER ASIGNADO; 	
		$consulta_asignado="SELECT designerid FROM request WHERE id='".$_POST['id_request']."'";	
		$resultado_asignado= mysqli_query($conexion,$consulta_asignado);
		$fila_asignado= mysqli_fetch_array($resultado_asignado);
		
		//SELECCIONANDO EL NOMBRE DEL DISENADOR; 	
		$consulta_nombre="SELECT * FROM designer WHERE designerid='".$fila_asignado['designerid']."'";	
		$resultado_nombre= mysqli_query($conexion,$consulta_nombre);
		$fila_nombre= mysqli_fetch_array($resultado_nombre);
	
	
?>

<div class="header-overview">
	<div class="title-windows">
    Assigne <span>Designer </span>
    </div>
    <div class="botonera"></div>
</div>

<div class="division"></div>

	<!-- action="<?php /*echo "http://".$_SERVER['HTTP_HOST'].$directorio;*/ ?>include/procesa_asdesigner.php" -->
<form name="form_designer" id="form_designer" method="POST" enctype="multipart/form-data" action="include/procesa_asdesigner.php">

  	<div class="div_select_request" style="margin-left:2%;float:none; margin-bottom:15px;">
     	
        <select name="designerid">
	        <option selected="selected">Select Designer</option>
		        <?php while($fila= mysqli_fetch_array($resultado)){ ?>
		      	  <option value="<?php echo $fila['designerid']; ?>" >
		      	  	<?php echo $fila['name_designer']." ".$fila['lastname']; ?>

		      	  </option>

		        <?php }?>
	  </select>
      
      
	</div>

	<input type="hidden" name="id_request" value="<?php echo $fila_plan['id']; ?>" />
	<input name="send" type="submit" id="submit_request" style="margin-top:0;float:none; margin-bottom:15px; margin-left:2%;" value="ASSIGNE DESIGNER">
	<div class="division"></div>

</form>




 



