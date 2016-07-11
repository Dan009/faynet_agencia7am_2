<?php 
	include("../../../confi/conf.inc.php");
	
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	$type = $_POST['form_type']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN
	$code = $_POST['TxtId_information']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN	
	$picture_code = $_POST['code_picture']; //PARA HACER LA CONSULTA Y SABER CUAL ES LA IMAGEN	
		
			// VERIFICAR QUE ALGUNOS CAMPOS ESTEN LLENOS

				if (isset($_POST['txtLGXFloor']) || isset($_POST['txtLGXRoom']) || isset($_POST['txtWallMount1']) || isset($_POST['txtWallMount2']) || isset($_POST['txtLGXTermSize1']) || isset($_POST['txtLGXTermSize2']) || isset($_POST['txtRoomNameLGX']) || isset($_POST['TxtOwnedPanel']) || isset($_POST['if_dark_fiber']) || isset($_POST['if_rack_size']) || isset($_POST['if_room_type']) || isset($_POST['if_splice']) || isset($_POST['txtFiberTerminated']) || isset($_POST['txtFiberTerminated'])) { 

					//var_dump($_POST);

						// INPUT VALUES
							$lgx_floors = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtLGXFloor']));
							$lgx_room = "";

								if ($_POST['chkNone'] == "none") {
									$lgx_room = "none";

								}else{
									$lgx_room = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtLGXRoom']));
								}

								$txtWallMounts = htmlspecialchars($_POST['txtWallMount1'])+" "+htmlspecialchars($_POST['txtWallMount2']);

							$wall_mount_panel_size = mysqli_real_escape_string($conexion,$txtWallMounts);

								$txtTermSize = htmlspecialchars($_POST['txtLGXTermSize1'])+" "+htmlspecialchars($_POST['txtLGXTermSize2']);

							$room_name = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtRoomNameLGX']));

							$owned_panel = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['TxtOwnedPanel']));

							$owned_panel = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['TxtOwnedPanel']));

							$number_fiber_terminated = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtRoomNameLGX']));

							$total_bulkheads = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtTotalBulkHeads']));

								$txtConnectorType = htmlspecialchars($_POST['txtConnectorType1'])+" "+htmlspecialchars($_POST['txtConnectorType2']);

							$connector_type = mysqli_real_escape_string($conexion,htmlspecialchars($txtConnectorType));
							$fiber_terminated = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtFiberTerminated']));

									// PARA USAR MAS TARDE
										//$first_cpe_panel_photo_code = mysqli_real_escape_string($conexion,	htmlspecialchars($_POST['']));$second_cpe_panel_photo_code = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['']));$third_cpe_panel_photo_code = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['']));

								// PHOTOS DATA

									// IF PHOTOS WHERE INSERTED
										$first_photo_inserted = $_POST['TxtPhotoUploaded1'];
										$second_photo_inserted = $_POST['TxtPhotoUploaded2'];
										$thrid_photo_inserted = $_POST['TxtPhotoUploaded3'];


							$lgx_info_number = $_POST['txtLGXNumber'];
							$id_request = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['TxtId_request']));

						/// RADIO VALUES

							$dark_fiber = $_POST['if_dark_fiber'];
								
								if ($_POST['if_rack_size'] == "other") {
									$rack_size = mysqli_real_escape_string($conexion,htmlspecialchars($_POST['txtOtherRackSize']));;

								}else{
									$rack_size = $_POST['if_rack_size'];

								}

							$room_type = $_POST['if_room_type'];
							$splice_only = $_POST['if_splice'];

						/// INSERTANDO LOS DATOS EN LA TABLA DE LGX_BUILDING

							$consulta_cpe_building = "INSERT INTO cpe_lgx_info (lgx_floor_number, lgx_room_number, lgx_term_panel, lgx_term_panel_size, room_name_lgx_panel, panel_owned_by,dark_fiber_hand, rack_size, room_type, fusion_splice_only, connector_type, fiber_terminated_number, total_bulkhead_number, first_cpe_panel_photo_code,second_cpe_panel_photo_code, third_cpe_panel_photo_code, first_panel_photo_inserted, second_cpe_panel_photo_inserted, third_cpe_panel_photo_inserted, lgx_form_number, id_information, id_request) VALUES ('$lgx_floors','$lgx_room', '$txtTermSize', '$wall_mount_panel_size','$room_name','$owned_panel','$dark_fiber','$rack_size','$room_type', '$splice_only','$connector_type','$fiber_terminated','$total_bulkheads','$picture_code','$picture_code','$picture_code','$first_photo_inserted','$second_photo_inserted','$thrid_photo_inserted','$lgx_info_number','$code','$id_request');"; 

								$resultado_cpe_building = mysqli_query($conexion,$consulta_cpe_building);

									$last_id = mysqli_insert_id($conexion);

									//var_dump($_POST);
									//var_dump($consulta_cpe_building);

										/// VERIFICAR QUE SE INSERTO EL REGISTRO
											if($last_id > 0){
												echo "LGX INFO OK !<br>";

											}else{

												echo "LGX INFO Error <br>";

											}

										/// VERIFICA QUE SE SUBIO UNA IMAGEN
											/*if($_POST['TxtIfFile'] == "yes"){
				
												//INCLUIR CODIGO QUE GUARDA LAS IMAGENES
													include("save_img.php");
											}*/

				}


	mysqli_close($conexion);	

?> 