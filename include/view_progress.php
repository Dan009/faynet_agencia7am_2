<?php 

	include('../confi/conf.inc.php');

	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	
		// CARGA LOS DATOS DEL DISEÑADOR
			$consulta_diseñador = "SELECT * FROM designer WHERE designerid = '".$_POST['id_designer']."'";
			$resultado_diseñado = mysqli_query($conexion,$consulta_diseñador);
			$fila_diseñador = mysqli_fetch_array($resultado_diseñado);

				
 ?>
<div class="header-overview">
	<div class="title-windows"> 
	 	<?php if (isset($fila_diseñador)) { echo $fila_diseñador['name_designer']." ".$fila_diseñador['lastname']."/"; } ?>  

	 	PROGRESS 

	</div>

</div>

    <div class="botonera"></div>
</div>

<div class="division"></div>

	<!-- action="<?php /*echo "http://".$_SERVER['HTTP_HOST'].$directorio;*/ ?>include/procesa_asdesigner.php" -->
	<div name="form_designer" id="form_designer" style=" width: 94%; margin: 0 auto;">

	 
	  		<?php  

				$imprimir_trabajos= array("Lorem Lipsum","Lorem Lipsum","Lorem Lipsum","Lorem Lipsum","Lorem Lipsum");

					for ($i=0; $i < sizeof($imprimir_trabajos); $i++) { 

			?>     	
				<div id="form_request" style="float:none; margin-bottom:15px;"> 
					<span style="font-size: 16px;"><?php  echo $i+1;?></span>. 
					<span style="margin: 0 18px; font-size: 13px;"><?php echo $imprimir_trabajos[$i]; ?><?php echo $i+1; ?></span> 

						<input type="checkbox" name="checkBoxProgress" id="checkBoxProgress" value="<?php echo 100/sizeof($imprimir_trabajos); ?>" />


				</div>
	      
	      	<?php } ?>

	      	<div class="progress_bar">
	      		<div class="progressFill"></div>


	      	</div>

		<div class="division" style="border:none; margin-bottom: 28px;"></div>

	</div>

<script type="text/javascript">
	$(document).ready(function(){

		var addWidth = 0;

		 $('input').iCheck({
			checkboxClass: 'icheckbox_square',
			radioClass: 'iradio_square',
			increaseArea: '20%' // optional
		  })
		 	.on('ifChecked',function () {
		 		//alert("sdfsdf");
		 			
		 		addWidth += parseInt($(this).val());

		 			$(".progressFill").animate({
		  				width: addWidth+"%"},500);


		  })
		 	.on('ifUnchecked',function () {
		 		//alert("sdfsdf");
		 			
		 		addWidth -= parseInt($(this).val());

		 			$(".progressFill").animate({
		  				width: addWidth+"%"},500);


		  });



	});



</script>




 



