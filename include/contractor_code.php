<?php

	//INSERTA LOS DATOS DEL CABLE INSTALLATION
		if(intval($_POST['company_cable']) > 0)  {
			
			$consulta_cable_installation ="INSERT INTO cable_installation_contractor (company,contact_name,contact_number,contact_email,id_request,type) VALUES('".$company_cable."','".$contact_name_cable."','".$contact_number_cable."','".$contact_email_cable."','".$last_id."','".$type."') ";	
			$resultado_cable_installation= mysqli_query($conexion,$consulta_cable_installation);
			
			$consulta_request="INSERT INTO request_contract (id_request,tipo,estado, contratista_id, usuario_id) VALUES('".$last_id."','".$type."','1','".$_POST['company_cable_inside']."','".$_SESSION['id']."')";
			
			$resultado_request= mysqli_query($conexion,$consulta_request);
			
			echo "cable ready<br>";
			
		}

    
	//INSERTA LOS DATOS DEL TENANT'S CONTACT
		if(intval($_POST['company_tenant']) > 0){
			
			$consulta_tenant ="INSERT INTO tenants_contact (company,contact_name,contact_office_number,contact_cell_number,contact_email,id_request,type) VALUES('".$company_tenant."','".$contact_name_tenant."','".$contact_office_number_tenant."','".$contact_cell_number_tenant."','".$contact_email_tenant."','".$last_id."','".$type."')";	
			
			$resultado_tenant= mysqli_query($conexion,$consulta_tenant);
			
			$consulta_request="INSERT INTO request_contract (id_request,tipo,estado, contratista_id, usuario_id) VALUES('".$last_id."','".$type."','1','".$_POST['company_tenant_inside']."','".$_SESSION['id']."')";
			
			$resultado_request= mysqli_query($conexion,$consulta_request);
			
			echo "Tenant ready<br>";
		
		
		}
	
	
	//INSERTA LOS DATOS DEL PROPERTY MANAGER'S 
		if(intval($_POST['company_property']) > 0){
				
			$consulta_property ="INSERT INTO property_managers (company,contact_name,contact_office_phone,contact_cell_number,contact_email,id_request,type) VALUES('".$company_property."','".$contact_name_property."','".$contact_office_number_property."','".$contact_cell_number_property."','".$contact_email_property."','".$last_id."','".$type."') ";	
			
			$resultado_tenant= mysqli_query($conexion,$consulta_property);
			
			$consulta_request="INSERT INTO request_contract (id_request,tipo,estado, contratista_id, usuario_id) VALUES('".$last_id."','".$type."','1','".$_POST['company_property_inside']."','".$_SESSION['id']."')";
			$resultado_request= mysqli_query($conexion,$consulta_request);

				echo "Property Ready<br>";

		
		}
		
 ?>
		