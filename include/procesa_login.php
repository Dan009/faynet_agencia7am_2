<?php 
    include("../confi/conf.inc.php");
	
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	
	/*
	echo $_POST['user_name'];
	echo "<br/>";
	echo $_POST['password']; 
	*/

		$consulta_diseñador = "SELECT * FROM designer WHERE username = '".$_POST['user_name']."' AND password = '".md5($_POST['password'])."'";
		$resultado_diseñador = mysqli_query($conexion,$consulta_diseñador);
		$fila_diseñador = mysqli_fetch_array($resultado_diseñador);


		if (empty($fila_diseñador)) {
			
			$password=mysqli_real_escape_string($conexion,htmlspecialchars($_POST['password']));
		    $pass_crypt= sha1(md5($password));
			
			$consulta="SELECT * FROM usuarios WHERE user_name='".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['user_name']))."' AND password='".$pass_crypt."' ";
			
			$resultado= mysqli_query($conexion,$consulta);

				while($fila=mysqli_fetch_array($resultado)){
					
					if($fila['estado'] == 1 ){
						
						$_SESSION['admin']=true;
					}
					
					$_SESSION['id']=$fila['id'];
					$_SESSION['estado']=$fila['estado'];
					$_SESSION['company']=$fila['company'];
					$_SESSION['user_name']=$_POST['user_name'];
					$_SESSION['full_name']=$fila['nombre']." ".$fila['apellido'];
					
					echo "<div id='logueado' class='login_resultado' ></div>";
					
				}


		}else{

			$_SESSION['id']=$fila_diseñador['designerid'];
			$_SESSION['estado']= 4;
			$_SESSION['company']=$fila_diseñador['company'];
			$_SESSION['user_name']=$fila_diseñador['username'];
			$_SESSION['full_name']=$fila_diseñador['name_designer']." ".$fila_diseñador['lastname'];
			
			echo "<div id='logueado' class='login_resultado' ></div>";

		}

	

if(mysqli_affected_rows($conexion)){
	echo "<div id='logueado' class='login_resultado' ></div>";

}else{
	echo "<div id='no_logueado' class='login_resultado' ></div>";

}
mysqli_close($conexion);
	
?>