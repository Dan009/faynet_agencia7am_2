<?php 
 
	include("../../confi/conf.inc.php");
	
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	$fecha=date('U');
	
	
	///////////////////////////////////////////////////////////////////////////////////////
	//////////////  ESTE CODIGO PARA INSERTAR GENERAL INFORMATION  ////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	 

$consulta_general_information="INSERT INTO general_information (engineering_id,customer_name,solomon_number,service_number,prj_assing_number,kick_off_date,bldg_number,street_number,city,state,doc_number,po_number,date_request_sent,lt_exp_job_completion,lt_fiber_eng,lt_project,scope_work,estatus,usuario_id, time_code,file_time_code) VALUES('".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['engineering']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['customer_name']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['solomon_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['service_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['prj_assing_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['kick_off_date']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['bldg_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['street_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['city']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['state']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['doc_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['po_number']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['date_request_sent']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['lt_exp_job_completion']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['lt_fiber_eng']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['lt_project']))."','".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['scope_work']))."','0','".$_SESSION['id']."','".$_SESSION['time_code']."','".$_POST['code_plan']."')  ";

	$resultado_general_information=mysqli_query($conexion,$consulta_general_information);
	
	//$last_id=mysqli_insert_id($conexion);
	
	/*echo "<script>alert('YES GENERAL INFO')</script>";
*/
	
	
///////////////////////////////////////////////////////////////////////////////////////////
/// AQUI SE COMPRUEBA QUE FUNCIONO Y LUEGO SE CIERRA LA CONEXION	
	
if(mysqli_affected_rows($conexion)){
    //echo "<div class='ejecuta_insert' id='ejecuto' name='".$last_id."' ></div>";
	echo "General Information Ok<br>";
}else{
   echo "General Information Error<br>";
}
mysqli_close($conexion);	
	
	
?>