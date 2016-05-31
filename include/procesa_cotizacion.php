<?php 
    include("../confi/conf.inc.php");
	
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	$fecha= date('U');

	$_POST['text_plan_quote'];
	$_POST['text_plan_invoice'];
	$_POST['id_request'];
	$_SESSION['id'];
	
	////////// ESTE CODIGO ES PARA HACER LA COTIZACION ////////////
	
		$consulta="SELECT * FROM cotizacion WHERE id_request='".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_request']))."'  ";
		$resultado= mysqli_query($conexion,$consulta);
		$rows= mysqli_num_rows($resultado);
		if($rows == 0){
			
			echo $_FILES['file_plan_quote']['error'];
			
			if( $_FILES['file_plan_quote']['error']!=4 ){
			
				echo "NO HAS HECHO LA COTIZACION";
				$ruta_attach = '../archivos/cotizaciones/'.basename($_FILES['file_plan_quote']['name']);
				$info_attach = pathinfo($ruta_attach);
				$tipo_attach = $info_attach['extension'];
				
				$fileAttach="quote_".$fecha.".".$tipo_attach;  
				$uploaddir_temp_attach="../archivos/cotizaciones/";
				$upload_temp_attach = $uploaddir_temp_attach."quote_".$fecha.".".$tipo_attach;     

				/*
				$tamano= getimagesize(rtrim($_FILES['attach_file_inside']['tmp_name']));
				$ancho = $tamano[0];              
				$alto = $tamano[1];  
				*/
				move_uploaded_file($_FILES['file_plan_quote']['tmp_name'], $upload_temp_attach);   		
			
			}else{
				$fileAttach="";			
			}
			
			$consulta_quote="INSERT INTO cotizacion(id_request,id_company,plan_quote,file_plan_quote,fecha,estado) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_request']))."','".$_SESSION['id']."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['text_plan_quote']))."','".$fileAttach."','".$fecha."','1' ) ";
			
			$resultado_quote=mysqli_query($conexion,$consulta_quote) or die(mysqli_error($conexion));
			
		}
		
	//////////  ESTE CODIGO ES PARA HACER LA FACTURA  ////////////
	
		$consulta_invoice="SELECT * FROM factura WHERE id_request='".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_request']))."'  ";
		$resultado_invoice= mysqli_query($conexion,$consulta_invoice);
		$rows_invoice= mysqli_num_rows($resultado_invoice);
		if($rows_invoice == 0){
			
			
			echo $_FILES['file_plan_quote']['error'];
			
			if( $_FILES['file_plan_quote']['error']!=4 ){
			
				echo "NO HAS HECHO LA COTIZACION";
				$ruta_attach = '../archivos/facturas/'.basename($_FILES['file_plan_invoice']['name']);
				$info_attach = pathinfo($ruta_attach);
				$tipo_attach = $info_attach['extension'];
				
				$file_invoice="invoice_".$fecha.".".$tipo_attach;  
				$uploaddir_temp_attach="../archivos/facturas/";
				$upload_temp_attach = $uploaddir_temp_attach."invoice_".$fecha.".".$tipo_attach;     

				/*
				$tamano= getimagesize(rtrim($_FILES['attach_file_inside']['tmp_name']));
				$ancho = $tamano[0];              
				$alto = $tamano[1];  
				*/
				move_uploaded_file($_FILES['file_plan_invoice']['tmp_name'], $upload_temp_attach);   		
			
			}else{
				$fileAttach="";			
			}
			
			$consulta_invoice="INSERT INTO factura(id_request,id_company,plan_invoice,file_plan_invoice,fecha,estado) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_request']))."','".$_SESSION['id']."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['text_plan_invoice']))."','".$file_invoice."','".$fecha."','1' ) ";
			
			$resultado_invoice=mysqli_query($conexion,$consulta_invoice) or die(mysqli_error($conexion));
			
		}
		
	
	
	
	
	

if(mysqli_affected_rows($conexion)){
	echo "<div id='cotizado' class='ejecuta_cotizacion' ></div>";
}else{
	echo "<div id='no_cotizado' class='ejecuta_cotizacion' ></div>";
}
mysqli_close($conexion);
	
?>