<?php 
			
			
			//subir el archivo
			$ruta_attach = 'archivos/attach/'.basename($_FILES['attach_file_inside']['name']);
			$info_attach = pathinfo($ruta_attach);
			$tipo_attach = $info_attach['extension'];
			
			$fileAttach="attach_".$fecha.".".$tipo_attach;  
			$uploaddir_temp_attach="archivos/attach/";
			$upload_temp_attach = $uploaddir_temp_attach."attach_".$fecha.".".$tipo_attach;     

			/*
			$tamano= getimagesize(rtrim($_FILES['attach_file_inside']['tmp_name']));
			$ancho = $tamano[0];              
			$alto = $tamano[1];  
			*/
			move_uploaded_file($_FILES['attach_file_inside']['tmp_name'], $upload_temp_attach);
			echo $_POST['new_building'];
			echo $_FILES['attach_file_inside']['name'];
			echo "--> Success";
?>

