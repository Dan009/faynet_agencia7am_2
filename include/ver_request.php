<?php
    include("../confi/conf.inc.php");
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

	// CONSULTA PARA LLENAR REQUEST
		$consulta="SELECT * FROM request WHERE id_request='".$_POST['id_request']."' AND tipo='".$_POST['tipo']."' AND estado='1'";	
		$resultado= mysqli_query($conexion,$consulta);
		$fila= mysqli_fetch_array($resultado);

	// CONSULTA PARA LLENAR GENERAL_INFORMATION
		$consulta_table="SELECT * FROM ".$_POST['tipo']." WHERE id_request='".$fila['id']."' ";
		$resultado_table= mysqli_query($conexion,$consulta_table);
		$fila_table= mysqli_fetch_array($resultado_table);

	// CONSULTA PARA ENCONTRAR AL GENERAL INFORMATION
		$consulta_general="SELECT * FROM general_information WHERE time_code='".$fila['id_request']."' ";
		$resultado_general= mysqli_query($conexion,$consulta_general);
		$fila_general=mysqli_fetch_array($resultado_general);	

	// CONSULTA PARA ENCONTRAR EL ESTATUS DEL TRABAJO
		$consulta_estatus_job = "SELECT estatus_job FROM request WHERE id='".$_POST['id_tipo']."'";
		$resultado_estatus_job = mysqli_query($conexion,$consulta_estatus_job);
		$fila_estatus_job = mysqli_fetch_array($resultado_estatus_job);

	// CONSULTA PARA ENCONTRAR EL MONTO DE LA COTIZACION
		$consulta_quoted_amount = "SELECT plan_quote FROM cotizacion WHERE id_request='".$fila['id']."'";
		$resultado_quoted_amount = mysqli_query($conexion,$consulta_quoted_amount);
		$fila_quoted_amount = mysqli_fetch_array($resultado_quoted_amount);	

	// CONSULTA PARA ENCONTRAR AL DISEÑADOR
		$consulta_designer = "SELECT designerid FROM request WHERE id='".$_POST['id_tipo']."'";
		$resultado_designer = mysqli_query($conexion,$consulta_designer);
		$fila_designer = mysqli_fetch_array($resultado_designer);

	// CONSULTA PARA ENCONTRAR EL COMENTARIO 
		$consulta_comentario = "SELECT * FROM comentarios WHERE id_request='".$_POST['id_tipo']."'";
		$resultado_comentario = mysqli_query($conexion,$consulta_comentario);
		$fila_comentario = mysqli_fetch_array($resultado_comentario);

	// CONSULTA LOS ESTADOS DE SI ESTA DECLINADO

		$consulta_declinado = "SELECT * FROM request WHERE  id='".$_POST['id_tipo']."' AND id_request='".$_POST['id_request']."' AND estatus_job='1' ";

		$resultado_declinado = mysqli_query($conexion,$consulta_declinado);
		$fila_resultado = mysqli_fetch_array($resultado_declinado);


?>
<!-- GENERAL INFORMATION-->
	<div id="type_plan"> <?php echo $fila['name']; ?> </div>

	<!-- CPE FORM BUTTON -->

	<?php  if($fila_estatus_job['estatus_job'] == 2 && $_SESSION['estado'] != 2){ ?>
		<a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>cpe_form.php?id_information=<?php echo $fila_general['id']; ?>&id_request=<?php echo $_POST['id_tipo']; ?>">
			<input class="div_file_inside div_button_cpeform" type="button" id="btnCPE" value="OPEN CPE QUOTE" title="VIEW_PDF_QUOTE "  /> 

		</a>

	<?php } ?>

	<div class="container-general-info">
		<!--<div><h1>GULINC REQUEST JOB FORM</h1></div>-->
	  <div class="campos-container">

	  	<div class="header-info" style="border-top:none; <?php if($fila_estatus_job['estatus_job'] == 2){ echo "margin-top: 0;";}?>">

	  	<strong>GENERAL INFO</strong></div>
	    
	        <div class="name"><strong>LT ENGINEERING</strong></div>
	        <div class="description">
				<?php
					$consulta_engineering="SELECT * FROM engineering WHERE id='".$fila_general['engineering_id']."' ";
					$resultado_engineering= mysqli_query($conexion,$consulta_engineering);
					$fila_engineering=mysqli_fetch_array($resultado_engineering);
					echo $fila_engineering['engineering'];
				?>
			
			</div>
	        <div class="name"><strong>SOLOMON #</strong></div>
	        <div class="description"> <?php echo $fila_general['solomon_number']; ?> </div>
			
	        <div class="name"><strong>Service #</strong></div>
	        <div class="description"> <?php echo $fila_general['service_number']; ?> </div>
			
	        <div class="name"><strong>customer name: </strong></div>
	        <div class="description"> <?php echo $fila_general['customer_name']; ?> </div>
			
	        <div class="name"><strong>PRJ. ASSING #</strong></div>
	        <div class="description"> <?php echo $fila_general['prj_assing_number']; ?>  </div>
			
	        <div class="name"><strong>KICK OFF DATE</strong></div>
	        <div class="description"> <?php echo $fila_general['kick_off_date']; ?> </div>
			
	        <div class="name"><strong>BLDG#</strong></div>
	        <div class="description"> <?php echo $fila_general['bldg_number']; ?> </div>
			
	        <div class="name"><strong>street</strong></div>
	        <div class="description"> <?php echo $fila_general['street_number']; ?>  </div>
			
	        <div class="name"><strong>muni</strong></div>
	        <div class="description">
				<?php 
					$consulta="SELECT * FROM city WHERE id='".$fila_general['city_id']."' ";
					$resultado= mysqli_query($conexion,$consulta);
					$fila_city= mysqli_fetch_array($resultado);
					echo $fila_city['city'];
				?>			
			
			</div>
			
	        <div class="name"><strong>state</strong></div>
	        <div class="description">

				<?php 
					$consulta="SELECT * FROM state WHERE id='".$fila_general['city_id']."' ";
					$resultado= mysqli_query($conexion,$consulta);
					$fila_state= mysqli_fetch_array($resultado);
					echo $fila_state['state'];
				?>			
			
			</div>
			
	        <div class="name"><strong>date request sent</strong></div>
	        <div class="description"> <?php echo $fila_general['date_request_sent']; ?>  </div>
			
	        <div class="name"><strong>DOC#</strong></div>
	        <div class="description"> <?php echo $fila_general['doc_number']; ?>  </div>
			
	        <div class="name"><strong>po#</strong></div>
	        <div class="description"> <?php echo $fila_general['po_number']; ?> </div>
			
	        <div class="name"><strong>LT EXP. JOB COMPLETION</strong></div>
	        <div class="description"> <?php echo $fila_general['lt_exp_job_completion']; ?> </div>
			
	        <div class="name"><strong>LT FIBER ENG.</strong></div>
	        <div class="description"> <?php echo $fila_general['lt_fiber_eng']; ?> </div>
			
	        <div class="name"><strong>LT PROJECT manager</strong></div>
	        <div class="description"> <?php echo $fila_general['lt_project']; ?>  </div>
			
	        <div class="name"><strong>Scope Work</strong></div>
	        <div class="description" style="height:75px; border:1px solid #000; margin-top:10px;"> <?php echo $fila_general['scope_work']; ?> </div>
	    
	  </div>
	</div>

<!-- BUILDING SITE SURVEY -->
	<?php if($_POST['tipo'] == "building_site_survey"){ 

			///// BUILDING SITE SURVEY 	
				$consulta_building="SELECT * FROM building_site_survey WHERE id_request='".mysqli_real_escape_string($conexion,htmlspecialchars($fila['id']))."' ";
				$resultado_building= mysqli_query($conexion,$consulta_building);
				$fila_building= mysqli_fetch_array($resultado_building);

			
		?>

			<div class="container-isp">
				<div class="header-info"><strong>BUILDING SITE SURVEY</strong></div>
	   				<div class="container_form">

						<div class="center_form" >
						
							<div class="content_option_inside"  style="width: 86.5%;">
										
										<div class="title_content_option_inside"> 

											<div class="div_title_content_option_inside"  >
												BUILDING SITE SURVEY 

												<div class="div_option_radio_inside" >
													<input type="radio" name="si_survey" id="si_survey" value="si" disabled="disabled" class="radio_click" <?php if(isset($fila_building)){ echo "checked"; }?> />
													<label for="si_survey" > Yes </label>
													
													<input type="radio" name="si_survey" id="no_survey" value="no" disabled="disabled" class="radio_click" disabled="disabled" <?php if(!isset($fila_building)){ echo "checked"; }?>/>
													<label for="no_survey" > No </label>
												</div>
											
											</div>
										</div>
										
										<div class="container_click_option_inside" <?php if(isset($fila_building)){ echo 'style="height:auto"'; }?> >
										<div class="container_option_survey" >
											
											<div class="title_container_option_survey" >
												<div class="text_title_container_option_survey"> SITE SURVEY </div>
												<input type="checkbox" name="active_survey" disabled="disabled" <?php if($fila_building['site_survey_company'] > 0){ echo 'checked' ;}?> />
											</div>
											<div class="container_click_check_inside" <?php if($fila_building['site_survey_company'] > 0){ echo 'style="height:auto"' ;}?>>
											<div class="div_select_survey">
														<?php 
														// BUSCA EL NOMBRE DE LA COMPANIA
														$consulta_company="SELECT * FROM company WHERE id='".$fila_building['site_survey_company']."' ";
														$resultado_company= mysqli_query($conexion,$consulta_company);
														$fila_company= mysqli_fetch_array($resultado_company);
													
														?>	
				                                
												<select name="company_survey" disabled="disabled">
													<option><?php echo $fila_company['company']; ?></option>
												</select>
											
											</div>
											<div class="div_select_survey">
												
				                                <?php 	
												// BUSCA EL NOMBRE DEL CONTACTO
												$consulta_contact="SELECT * FROM contact WHERE id='".$fila_building['site_survey_contact']."' ";
												$resultado_contact= mysqli_query($conexion,$consulta_contact);
												$fila_contact= mysqli_fetch_array($resultado_contact);
												?>
				                                	
												<select name="contact_survey" disabled="disabled" >
													<option><?php echo $fila_contact['contact']; ?></option>
												</select>
											
											</div>
											</div>
											
										</div>
										<div class="container_option_survey" >
											
											<div class="title_container_option_survey" >
												<div class="text_title_container_option_survey"> ISP ENG. PLANS </div>
												<input type="checkbox" name="active_isp_eng_plans" class="click_check" disabled="disabled" <?php if($fila_building['isp_eng_plans_company'] > 0){ echo 'checked';}?>  />
											</div>
											<div class="container_click_check_inside" <?php if($fila_building['isp_eng_plans_company'] > 0){ echo 'style="height:auto"' ;}?>>
											<div class="div_select_survey">
												
												<select name="company_isp_eng_plans_site_survey" disabled="disabled">
													<?php 
														$consulta_company="SELECT * FROM company WHERE id='".$fila_building['isp_eng_plans_company']."' ";
														$resultado_company= mysqli_query($conexion,$consulta_company);
														$fila_company= mysqli_fetch_array($resultado_company);

													?>										
														<option><?php echo $fila_company['company']; ?></option>									
												</select>
											
											</div>

										</div>
									</div>
								</div>
							</div>

									<div class="content_option_inside" style=" width: 97.5%; padding: 10px; background-color: #EDEAE3;">
					<div class="container_attach_center">
						<h3>Attached Files</h3>

								<!-- FILES ATTACHED -->
									<div style="margin-left: 4%;">
										<h3>FILES ATTACHED</h3>

										<?php 

											$consulta_archivos = "SELECT file,canvas FROM uploaded_file WHERE type ='".$fila['tipo']."' AND code ='".$fila['id_request']."'";

											$resultado_archivos = mysqli_query($conexion,$consulta_archivos);
											
											while ( $fila_archivos = mysqli_fetch_array($resultado_archivos)) {   

												?>

												
													

													<div class="container_attach_info" value="<?php echo $fila_archivos["file"]."_".$fila_archivos["canvas"]; ?>">
														<span> <?php echo $fila_archivos['file']; ?> CLICK TO VIEW THE FILE</span>


													</div>
												

										<?php  }?>
								</div>

								<!-- PO# DOC ATTACHED -->
								<div style="margin-left: 4%;">
									<h3>PO# DOC ATTACHED</h3>

									<?php  
										$consulta_po_doc = "SELECT po_doc_title FROM general_information WHERE time_code='".$_POST['id_request']."'";

											
										$resultado_po_doc = mysqli_query($conexion,$consulta_po_doc);

										while ($fila_po_doc = mysqli_fetch_array($resultado_po_doc)) {
										
									?>

										<a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio."archivos/po_documents/".$fila_po_doc['po_doc_title'];?>" style="text-decoration: none; color: inherit; " target="_blank"> 

											<div class="container_attach_info2" >
													<span> <?php echo $fila_po_doc['po_doc_title']; ?> CLICK TO VIEW THE FILE</span>


											</div>

										</a>
								

									<?php } ?>
							</div>
						
					</div>
				

				</div>

				</div>
			</div>
		</div>

<?php } ?>

<!-- INSIDE PLAN-->

		<?php if($_POST['tipo'] == "inside_plan" ){ 

			///// INSIDE PLAN		
				$consulta="SELECT * FROM inside_plans WHERE id_request='".mysqli_real_escape_string($conexion,htmlspecialchars($fila['id']))."' ";
				$resultado= mysqli_query($conexion,$consulta);
				$rows_inside= mysqli_num_rows($resultado);
				$fila_inside= mysqli_fetch_array($resultado);

		?>


		<div class="container-isp">
		  <div class="header-info"><strong>INSIDE PLAN REQUEST</strong></div>
	   			<div class="container_form" >

					<div class="center_form" >

						<div class="div_label_existing" > 

							<label for="existing" > EXISTING BUILDING </label>
							<input type="radio" name="new_building" id="existing" value="no" <?php if(!($fila_building['new_building']=="si")){ echo "checked";}?> disabled="disabled"/>
						</div>	

						<div class="div_label_existing" > 
						
							<label for="new" > NEW BUILDING </label>
							<input type="radio" name="new_building" id="new" value="si" <?php if($fila_building['new_building']=="si"){ echo "checked";}?> disabled="disabled"/>						
						</div>		
						
					
						
					</div>
					
				</div>

		<!-- BUILDING SITE SURVEY -->
				
		<!-- COMIENZA INSIDE PLAN-->
		<?php if($_POST['tipo'] == "inside_plan"){ ?>

			<!-- SP ENG. PLANS ONLY(NO SURVEY)  -->
					<?php if($fila_inside['assigned_company_eng_isp_plans_no_survey']!=0 || $fila_inside['assigned_company_eng_isp_plans_no_survey']!=0  ){ ?>
						<div class="content_option_inside" style="width: 99.5%">		
							<div class="title_content_option_inside " > 
								<div class="div_title_content_option_inside" >
									SP ENG. PLANS ONLY(NO SURVEY)
								
									<div class="div_option_radio_inside" >
										<input type="radio" name="si_sp_eng_plans" id="si_sp_eng_plans" value="si" disabled="disabled" <?php if(isset($fila_inside['assigned_company_eng_isp_plans_no_survey'])){ echo "checked"; } ?> />
										<label for="si_sp_eng_plans" disabled="disabled"> Yes </label>
										
										<input type="radio" name="si_sp_eng_plans" disabled="disabled" id="no_sp_eng_plans" value="no" <?php if(!isset($fila_inside['assigned_company_eng_isp_plans_no_survey'])){ echo "checked"; } ?> />
										<label for="no_sp_eng_plans" disabled="disabled"> No </label>
									</div>
								
								</div>
							</div>
							<div class="container_click_option_inside" <?php if(isset($fila_inside['assigned_company_eng_isp_plans_no_survey'])){ echo 'style="height:auto"'; } ?>>
							<div class="container_option_survey" >
								
								<div class="title_container_option_survey" >
									<div class="text_title_container_option_survey"> ENG. ISP PLANS </div>
									<input type="checkbox" name="active_eng_isp_plans" disabled="disabled" class="click_check" <?php if(isset($fila_inside['assigned_company_eng_isp_plans_no_survey'])){ echo "checked"; } ?>/>
								</div>
								<div class="container_click_check_inside" <?php if(isset($fila_inside['assigned_company_eng_isp_plans_no_survey'])){ echo 'style="height:auto"'; } ?>>
								<div class="div_select_survey">
									
									<select name="company_eng_isp_plans_no_survey" disabled="disabled" >
										<?php 
											$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_eng_isp_plans_no_survey']."' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											while($fila_company= mysqli_fetch_array($resultado_company)){
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
										<?php } ?>										
									</select>
								
								</div>

								</div>
								
							</div>
							</div>
						
						</div>
				<?php } ?>

			<!-- ISP AS-BUILT ENTIRE BLDG  -->	
			  <?php if($fila_inside['assigned_company_site_survey_isp_as_built']!=0 || $fila_inside['assigned_company_eng_isp_plans_isp_as_built']!=0  ){ ?> 
			  					<div class="content_option_inside" style="width: 99.5%;">
									<div class="title_content_option_inside "> 
										<div class="div_title_content_option_inside">
											ISP AS-BUILT ENTIRE BLDG
										
											<div class="div_option_radio_inside" >
												<input type="radio" name="si_isp_as_built" disabled="disabled" id="si_isp_as_built" value="si" <?php if($fila_inside['assigned_company_site_survey_isp_as_built'] > 0 or $fila_inside['assigned_company_eng_isp_plans_isp_as_built'] > 0){ echo "checked"; } ?>/>
												<label for="si_isp_as_built" > Yes </label>
												
												<input type="radio" name="si_isp_as_built" disabled="disabled" id="no_isp_as_built" value="no" <?php if($fila_inside['assigned_company_site_survey_isp_as_built'] <= 0 or $fila_inside['assigned_company_eng_isp_plans_isp_as_built'] <= 0){ echo "checked"; } ?> />
												<label for="no_isp_as_built" > No </label>
											</div>
										
										</div>
									</div>
									<div class="container_click_option_inside" <?php if(isset($fila_inside['assigned_company_site_survey_isp_as_built'])){ echo 'style="height:auto;"'; } ?>>
									<div class="container_option_survey" >
										
										<div class="title_container_option_survey" >
											<div class="text_title_container_option_survey"> SITE SURVEY </div>
											<input type="checkbox" name="active_site_survey_as_built" disabled="disabled" class="click_check" <?php if(isset($fila_inside['assigned_company_site_survey_isp_as_built'])){ echo "checked"; } ?>/>
										</div>
										<div class="container_click_check_inside" <?php if(isset($fila_inside['assigned_company_site_survey_isp_as_built'])){ echo 'style="height:auto;"'; } ?>>
										<div class="div_select_survey">
											
											<select name="company_site_survey_isp_as_built" disabled="disabled">
												<?php 
													$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_eng_isp_plans_no_survey']."' ";
													$resultado_company= mysqli_query($conexion,$consulta_company);
													$fila_company= mysqli_fetch_array($resultado_company);
												?>										
													<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
																					
											</select>
										
										</div>
										<div class="div_select_survey">
											
											<select name="contact_site_survey_isp_as_built" disabled="disabled">
												<?php 
													$consulta_company="SELECT * FROM contact WHERE id='".$fila_inside['contact_site_survey_isp_as_built']."' ";
													$resultado_company= mysqli_query($conexion,$consulta_company);
													$fila_company= mysqli_fetch_array($resultado_company);
												?>										
													<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>										
											</select>
										
										</div>
										</div>
										
									</div>
								</div>
							</div>

						<br/>
				<?php if($fila_inside['assigned_company_eng_isp_plans_isp_as_built']!=0 ){ ?>
						<div class="content_option_inside" style="width: 99.5%;">
							<div class="title_content_option_inside " > 
								<div class="div_title_content_option_inside" >
									ISP AS-BUILT ENTIRE BLDG
								
									<div class="div_option_radio_inside" >
										<input type="radio" name="si_isp_as_built" disabled="disabled" id="si_isp_as_built" value="si" <?php if($fila_inside['assigned_company_site_survey_isp_as_built'] > 0 or $fila_inside['assigned_company_eng_isp_plans_isp_as_built'] > 0){ echo "checked"; } ?>/>
										<label for="si_isp_as_built" > Yes </label>
										
										<input type="radio" name="si_isp_as_built" disabled="disabled" id="no_isp_as_built" value="no" <?php if($fila_inside['assigned_company_site_survey_isp_as_built'] <= 0 or $fila_inside['assigned_company_eng_isp_plans_isp_as_built'] <= 0){ echo "checked"; } ?> />
										<label for="no_isp_as_built" > No </label>
									</div>
								
								</div>
							</div>
							<div class="container_click_option_inside" <?php if(isset($fila_inside['assigned_company_site_survey_isp_as_built'])){ echo 'style="height:auto;"'; } ?>>
							<div class="container_option_survey" >
								
								<div class="title_container_option_survey" >
									<div class="text_title_container_option_survey"> SITE SURVEY </div>
									<input type="checkbox" name="active_site_survey_as_built" disabled="disabled" class="click_check" <?php if(isset($fila_inside['assigned_company_site_survey_isp_as_built'])){ echo "checked"; } ?>/>
								</div>
								<div class="container_click_check_inside" <?php if(isset($fila_inside['assigned_company_site_survey_isp_as_built'])){ echo 'style="height:auto;"'; } ?>>
								<div class="div_select_survey">
									
									<select name="company_site_survey_isp_as_built" disabled="disabled">
										<?php 
											$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_eng_isp_plans_no_survey']."' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											$fila_company= mysqli_fetch_array($resultado_company);
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
																			
									</select>
								
								</div>
								<div class="div_select_survey">
									
									<select name="contact_site_survey_isp_as_built" disabled="disabled">
										<?php 
											$consulta_company="SELECT * FROM contact WHERE id='".$fila_inside['contact_site_survey_isp_as_built']."' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											$fila_company= mysqli_fetch_array($resultado_company);
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>										
									</select>
								
								</div>
								</div>
								
							</div>

							<div class="container_option_survey" >
								
								<div class="title_container_option_survey" >
									<div class="text_title_container_option_survey"> ENG. ISP PLANS </div>
									<input type="checkbox" name="active_eng_isp_plans_as_built" class="click_check" disabled="disabled" <?php if($fila_inside['assigned_company_eng_isp_plans_isp_as_built'] > 0){ echo "checked"; } ?>/>
								</div>
								<div class="container_click_check_inside" <?php if(isset($fila_inside['assigned_company_eng_isp_plans_isp_as_built'])){ echo 'style="height:auto;"'; } ?>>
								<div class="div_select_survey">
									
									<select name="company_eng_isp_plans_isp_as_built" >
										<?php 
											$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_eng_isp_plans_isp_as_built']."' ";
											$resultado_company= mysqli_query($conexion,$consulta_company);
											$fila_company= mysqli_fetch_array($resultado_company);
										?>										
											<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
																				
									</select>
								
								</div>
								</div>
						
								
							</div>
							</div>
						</div>
					
					
				<?php } ?>

						<!--   <div style="width:100%; float:left; border-top:1px solid #000;"></div> -->
			  <?php } ?>

			<!-- PASSIVE FILTER SURVEY -->
				<?php if($fila_inside['assigned_company_site_survey_passive_filter']!=0 || $fila_inside['assigned_company_eng_isp_plans_passive_filter']!=0  ){ ?> 
							<div class="content_option_inside" style="width: 99.5%;">
									
									<div class="title_content_option_inside " > 
										<div class="div_title_content_option_inside">
											PASSIVE FILTER SURVEY
										
											<div class="div_option_radio_inside" >
												<input type="radio" name="si_passive_filter" id="si_passive_filter" value="si" disabled="disabled" <?php if($fila_inside['assigned_company_site_survey_passive_filter'] > 0 or $fila_inside['assigned_company_eng_isp_plans_passive_filter'] > 0){ echo "checked"; } ?>/>
												<label for="si_passive_filter" > Yes </label>
												
												<input type="radio" name="si_passive_filter" id="no_passive_filter" value="no" disabled="disabled" <?php if($fila_inside['assigned_company_site_survey_passive_filter'] <= 0 or $fila_inside['assigned_company_eng_isp_plans_passive_filter'] <= 0){ echo "checked"; } ?> />
												<label for="no_passive_filter" > No </label>
											</div>
										
										</div>
									</div>
									<div class="container_click_option_inside" <?php if(isset($fila_inside['assigned_company_site_survey_passive_filter'])){ echo 'style="height:auto;"'; } ?>>
									<div class="container_option_survey" >
										
										<div class="title_container_option_survey" >
											<div class="text_title_container_option_survey"> SITE SURVEY </div>
											<input type="checkbox" name="active_site_survey_passive_filter" disabled="disabled" class="click_check" <?php if($fila_inside['assigned_company_site_survey_passive_filter'] > 0){ echo "checked"; } ?> />
										</div>
										<div class="container_click_check_inside" <?php if($fila_inside['assigned_company_site_survey_passive_filter'] > 0){ echo "style='height:auto;'"; } ?>>
										<div class="div_select_survey">
											
											<select name="company_site_survey_passive_filter_survey" disabled="disabled" >
												<?php 
													$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_site_survey_passive_filter']."' ";
													$resultado_company= mysqli_query($conexion,$consulta_company);
													$fila_company= mysqli_fetch_array($resultado_company);
												?>										
													<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
																				
											</select>
										
										</div>
										<div class="div_select_survey">
											
											<select name="contact_site_survey_passive_filter_survey" >
												<?php 
													$consulta_company="SELECT * FROM contact WHERE id='".$fila_inside['assigned_company_site_survey_passive_filter']."' ";
													$resultado_company= mysqli_query($conexion,$consulta_company);
													$fila_company= mysqli_fetch_array($resultado_company)
												?>										
													<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>
																				
											</select>
										
										</div>
										</div>
										
									</div>
									<div class="container_option_survey" >
										
										<div class="title_container_option_survey" >
											<div class="text_title_container_option_survey"> ENG. ISP PLANS </div>
											<input type="checkbox" name="active_eng_isp_plans_passive_filter" disabled="disabled" class="click_check" <?php if($fila_inside['assigned_company_eng_isp_plans_passive_filter'] > 0){ echo "checked"; } ?>/>
										</div>
										<div class="container_click_check_inside" <?php if($fila_inside['assigned_company_eng_isp_plans_passive_filter'] > 0){ echo "style='height:auto;'"; } ?> >
										<div class="div_select_survey">
											
											<select name="company_eng_isp_plans_passive_filter_survey" >
												<?php 
													$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_eng_isp_plans_passive_filter']."' ";
													$resultado_company= mysqli_query($conexion,$consulta_company);
													while($fila_company= mysqli_fetch_array($resultado_company)){
												?>										
													<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
												<?php } ?>										
											</select>
										
										</div>
										</div>
								
										
									</div>
									</div>
								</div>
			  

				<?php } ?>
			     
			<!-- RESEARCH FLOOR--> 
				<?php if($fila_inside['floor_site_survey_research_floor']!="" || $fila_inside['assigned_company_site_survey_research_floor']!=0  ){ ?> 
						<div class="content_option_inside" style="width: 99.5%;">
								
								<div class="title_content_option_inside " > 
									<div class="div_title_content_option_inside" >
										RESEARCH FLOOR
									
										<div class="div_option_radio_inside" >
											<input type="radio" name="si_research_floor" id="si_research_floor" disabled="disabled" value="si" <?php if($fila_inside['assigned_company_site_survey_research_floor'] > 0){ echo "checked"; } ?> />
											<label for="si_research_floor" > Yes </label>
											<input type="radio" name="si_research_floor" id="no_research_floor" disabled="disabled" value="no" <?php if($fila_inside['assigned_company_site_survey_research_floor'] <= 0){ echo "checked"; } ?> />
											<label for="no_research_floor" > No </label>
										</div>
									
									</div>
								</div>
								<div class="container_click_option_inside" <?php if($fila_inside['assigned_company_site_survey_research_floor'] > 0){ echo "style='height:auto;'"; } ?>>
								<div class="container_option_survey" >
									
									<div class="title_container_option_survey" >
										<div class="text_title_container_option_survey"> SITE SURVEY </div>
										<input type="checkbox" name="active_site_survey_research_floor" disabled="disabled" class="click_check" <?php if($fila_inside['assigned_company_site_survey_research_floor'] > 0){ echo "checked"; } ?> />
									</div>
									<div class="container_click_check_inside" <?php if($fila_inside['assigned_company_site_survey_research_floor'] > 0){ echo "style='height:auto;'"; } ?>>
										<div class="container_input_research_floor" >
											<div class="text_container_input_research_floor" > Working floors </div>
											<input type="text" name="floor_research_floor" disabled="disabled" placeholder="Floor" value="<?php echo $fila_inside['floor_site_survey_research_floor'] ?>" />
										</div>
										<div class="div_select_survey">
											
											<select name="company_site_surve_research_floor" disabled="disabled" >
											<?php 
												$consulta_company="SELECT * FROM company WHERE id='".$fila_inside['assigned_company_site_survey_research_floor']."' ";
												$resultado_company= mysqli_query($conexion,$consulta_company);
												$fila_company= mysqli_fetch_array($resultado_company)
											?>										
												<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
															
											</select>
										
										</div>
							
									</div>
									
									
									
								</div>
							</div>
							
						</div>

			<!-- MOSTRAR LOS ARCHIVOS ATACHADOS -->
				<div class="content_option_inside" style=" width: 97.5%; padding: 10px; background-color: #EDEAE3;">
					<div class="container_attach_center">
						<h3>Attached Files</h3>

								<!-- FILES ATTACHED -->
									<div style="margin-left: 4%;">
										<h3>FILES ATTACHED</h3>

										<?php 

											$consulta_archivos = "SELECT file,canvas FROM uploaded_file WHERE type ='".$fila['tipo']."' AND code ='".$fila['id_request']."'";

											$resultado_archivos = mysqli_query($conexion,$consulta_archivos);
											
											while ( $fila_archivos = mysqli_fetch_array($resultado_archivos)) {   

												?>

												
													

													<div class="container_attach_info" value="<?php echo $fila_archivos["file"]."_".$fila_archivos["canvas"]; ?>">
														<span> <?php echo $fila_archivos['file']; ?> CLICK TO VIEW THE FILE</span>


													</div>
												

										<?php  }?>
								</div>

								<!-- PO# DOC ATTACHED -->
								<div style="margin-left: 4%;">
									<h3>PO# DOC ATTACHED</h3>

									<?php  
										$consulta_po_doc = "SELECT po_doc_title FROM general_information WHERE time_code='".$_POST['id_request']."'";

											
										$resultado_po_doc = mysqli_query($conexion,$consulta_po_doc);

										while ($fila_po_doc = mysqli_fetch_array($resultado_po_doc)) {
										
									?>

										<a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio."archivos/po_documents/".$fila_po_doc['po_doc_title'];?>" style="text-decoration: none; color: inherit; " target="_blank"> 

											<div class="container_attach_info2" >
													<span> <?php echo $fila_po_doc['po_doc_title']; ?> CLICK TO VIEW THE FILE</span>


											</div>

										</a>
								

									<?php } ?>
							</div>
						
					</div>
				

				</div>

			  <div style="width:100%; float:left; border-top:1px solid #000;"></div>
			  <?php } ?> <!-- TERMINA REASEARCH FLOOR -->
		

		<?php } ?> <!-- TERMINA INSIDE PLAN -->

		  <div style="float:left; width:100%; padding-top:10px;"><strong>CABLE INSTALLATION CONTRACTOR'S CONTACT</strong></div>

		  
		  <div class="name"><strong>company name</strong></div>
		   	<div class="description">
			<?php 
				$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['company_name_cable']."' ";
				$resultado= mysqli_query($conexion,$consulta);
				$fila_company_inside= mysqli_fetch_array($resultado);
				echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
			?> 	
			
			</div>
			
		    <div class="name"><strong>Contact name</strong></div>
		   	<div class="description"> <?php echo $fila_inside['contact_name_cable']; ?> </div>
			
		    <div class="name"><strong>contact</strong></div>
		   	<div class="description"> <?php echo $fila_inside['contact_number_cable']; ?>  </div>
			
		    <div class="name"><strong>contact email</strong></div>
		   	<div class="description"> <?php echo $fila_inside['contact_email_cable']; ?>  </div>
		    
		 
		  <div style="float:left; width:100%; padding-top:10px;"><strong> TENANT'S CONTACT </strong></div>

		  
		  <div class="name"><strong>company name</strong></div>
		   	<div class="description">
			<?php 
				$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['company_name_tenant']."' ";
				$resultado= mysqli_query($conexion,$consulta);
				$fila_company_inside= mysqli_fetch_array($resultado);
				echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
			?> 	
			
			</div>
			
		    <div class="name"><strong>Contact name</strong></div>
		   	<div class="description"> <?php echo $fila_inside['contact_name_tenant']; ?> </div>
			
		    <div class="name"><strong>contact</strong></div>
		   	<div class="description"> <?php echo $fila_inside['contact_number_tenant']; ?>  </div>
			
		    <div class="name"><strong>contact email</strong></div>
		   	<div class="description"> <?php echo $fila_inside['contact_email_tenant']; ?>  </div>
		    
		    

		  <div style="float:left; width:100%; padding-top:10px;"><strong> PROPERTY MANAGER'S CONTACT </strong></div>

		  
		  <div class="name"><strong>company name</strong></div>
		   	<div class="description">
			<?php 
				$consulta="SELECT * FROM usuarios WHERE id='".$fila_inside['company_name_property']."' ";
				$resultado= mysqli_query($conexion,$consulta);
				$fila_company_inside= mysqli_fetch_array($resultado);
				echo $fila_company_inside['nombre']." ".$fila_company_inside['apellido'];
			?> 	
			
			</div>
			
		    <div class="name"><strong>Contact name</strong></div>
		   	<div class="description"> <?php echo $fila_inside['contact_name_property']; ?> </div>
			
		    <div class="name"><strong>contact</strong></div>
		   	<div class="description"> <?php echo $fila_inside['contact_number_property']; ?>  </div>
			
		    <div class="name"><strong>contact email</strong></div>
		   	<div class="description"> <?php echo $fila_inside['contact_email_property']; ?>  </div>

				<div class="name"><strong>Scope Work</strong></div>
			   	<div class="description" style="height:75px; border:1px solid #000; margin-top:10px;"> <?php echo $fila_inside['scope_work_inside_plans']; ?> </div>
			    
			</div>



		<?php } ?>

<!-- POLE PLANS -->

	<?php if($_POST['tipo'] == "proposed_pole_plan_task"){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
				 <div class="header-info"><strong>PROPOSED POLE PLAN TASK</strong></div>
			<div class="content_option_modal" >
				
				<div class="title_content_option_pole" style="width: 99.5%;"> 
					<div class="div_title_content_option_pole"  >
						PROPOSED POLE PLAN TASK
					
					</div>
				</div>
				
				<div class="div_option_pole" > 
					
					<div class="text_option_pole" > CONSTRUCTION PROPOSED POLE PLANS NEEDED </div>
					<div class="container_radio_option_pole">
						<div class="margin_radio_pole" >
							<input type="radio" name="si_construction_pole" id="si_construction_pole" value="si"  <?php if($fila_table['construction_proposed_plans']=="si" ){echo "checked"; } ?> disabled="disabled" />
							<label for="si_construction_pole" > Yes</label>
						</div>
						
						<div class="margin_radio_pole">
							<input type="radio" name="si_construction_pole" id="no_construction_pole" value="no" <?php if($fila_table['construction_proposed_plans']=="no" ){echo "checked"; } ?> disabled="disabled" />
							<label for="no_construction_pole">No</label>
						</div>
						
					</div>
					
				</div>
				
				<div class="div_option_pole" > 
					
					<div class="text_option_pole" > GPS FIELD SURVEY POLE NEEDED </div>
					<div class="container_radio_option_pole">
						<div class="margin_radio_pole" >
							<input type="radio" name="gsp_field_pole" id="si_gsp_field_pole" value="si"  <?php if($fila_table['gps_field_survey_pole']=="si" ){echo "checked"; } ?> disabled="disabled" />
							<label for="si_gsp_field_pole" > Yes</label>
						</div>
						
						<div class="margin_radio_pole">
							<input type="radio" name="gsp_field_pole" id="no_gsp_field_pole" value="no" <?php if($fila_table['gps_field_survey_pole']=="no" ){echo "checked"; } ?> disabled="disabled" />
							<label for="no_gsp_field_pole">No</label>
						</div>
						
					</div>
					
				</div>
				
				<div class="div_option_pole" > 
					
					<div class="text_option_pole" > LICENSE PROPOSED POLE PLANS NEEDED </div>
					<div class="container_radio_option_pole">
						<div class="margin_radio_pole" >
							<input type="radio" name="license_proposed_pole" id="si_license_proposed_pole" value="si" <?php if($fila_table['license_proposed_pole']=="si" ){echo "checked"; } ?> disabled="disabled" />
							<label for="si_license_proposed_pole" > Yes</label>
						</div>
						
						<div class="margin_radio_pole">
							<input type="radio" name="license_proposed_pole" id="no_license_proposed_pole" value="no" <?php if($fila_table['license_proposed_pole']=="no" ){echo "checked"; } ?> disabled="disabled" />
							<label for="no_license_proposed_pole">No</label>
						</div>
						
					</div>
					
				</div>
				
				<div class="div_option_pole" > 
					
					<div class="text_option_pole" > MEASURE HEIGHT OF ATTACHED CABLES NEED </div>
					<div class="container_radio_option_pole">
						<div class="margin_radio_pole" >
							<input type="radio" name="measure_height_pole" id="si_measure_height_pole" value="si"  <?php if($fila_table['measure_height_attached']=="si" ){echo "checked"; } ?> disabled="disabled" />
							<label for="si_measure_height_pole" > Yes</label>
						</div>
						
						<div class="margin_radio_pole">
							<input type="radio" name="measure_height_pole" id="no_measure_height_pole" value="no"  <?php if($fila_table['measure_height_attached']=="no" ){echo "checked"; } ?> disabled="disabled" />
							<label for="no_measure_height_pole">No</label>
						</div>
						
					</div>
					
				</div>
				
				<div class="div_option_pole" > 
					
					<div class="text_option_pole" > LICENSE FORMS NEEDED </div>
					<div class="container_radio_option_pole">
						<div class="margin_radio_pole" >
							<input type="radio" name="license_forms_pole" id="si_license_forms_pole" value="si" <?php if($fila_table['license_forms_needed']=="si" ){echo "checked"; } ?> disabled="disabled" />
							<label for="si_license_forms_pole" > Yes</label>
						</div>
						
						<div class="margin_radio_pole">
							<input type="radio" name="license_forms_pole" id="no_license_forms_pole" value="no" <?php if($fila_table['license_forms_needed']=="no" ){echo "checked"; } ?> disabled="disabled" />
							<label for="no_license_forms_pole">No</label>
						</div>
						
					</div>
					
				</div>
				
				
				
			</div>
			</div>
							
		</div>
							

	<?php } ?>


	<?php if($_POST['tipo'] == "as_built_pole_plan_task"){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
				<div class="header-info"><strong>AS-BUILT POLE PLAN TASK</strong></div>
			<div class="content_option_modal" >

							<div class="title_content_option_pole" > 
								<div class="div_title_content_option_pole"  >
									AS-BUILT POLE PLAN TASK
								
								</div>
							</div>	
		
							<div class="div_option_pole" > 
								
								<div class="text_option_pole" > AS-BUILT LICENSED POLE PLANS NEEDED </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="as_built_licensed_pole" id="si_as_built_licensed_pole" value="si" <?php if($fila_table['as_built_licensed_pole_plans']=="si" ){echo "checked"; } ?> disabled="disabled" />
										<label for="si_as_built_licensed_pole" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="as_built_licensed_pole" id="no_as_built_licensed_pole" value="no" <?php if($fila_table['as_built_licensed_pole_plans']=="no" ){echo "checked"; } ?> disabled="disabled" />
										<label for="no_as_built_licensed_pole">No</label>
									</div>
									
								</div>
								
							</div>
								
							<div class="div_option_pole" > 
								
								<div class="text_option_pole" > GIS AS-BUILT FILE NEED </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="gis_as_built_file_pole" id="si_gis_as_built_file_pole" value="si" <?php if($fila_table['gis_as_built_file_need']=="si" ){echo "checked"; } ?> disabled="disabled" />
										<label for="si_gis_as_built_file_pole" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="gis_as_built_file_pole" id="no_gis_as_built_file_pole" value="no" <?php if($fila_table['gis_as_built_file_need']=="no" ){echo "checked"; } ?> disabled="disabled" />
										<label for="no_gis_as_built_file_pole">No</label>
									</div>
									
								</div>
								
							</div>
													
							
							
							
						</div>
							
		
		
		</div>
		
		
		</div>
						
	</div>
						

	<?php } ?>


	<?php if($_POST['tipo'] == "outsite_utility_pole_plan_task" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
				<div class="header-info"><strong>OUTSITE UTILITY APPLICATION TASK</strong></div>
			<div class="content_option_modal" >
							
					<div class="content_option_inside" >
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside" >
								OUTSITE UTILITY APPLICATION TASK
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_outsite_utility_task" id="si_outsite_utility_task" value="si" class="radio_click" disabled="disabled" <?php if(isset($fila_table)){ echo "checked"; }?>/>
									<label for="si_outsite_utility_task"  > Yes </label>
									
									<input type="radio" name="si_outsite_utility_task" id="no_outsite_utility_task" value="no" class="radio_click" disabled="disabled" <?php if(!isset($fila_table)){ echo "checked"; }?> />
									<label for="no_outsite_utility_task" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" <?php  if(isset($fila_table)){ echo 'style="height: auto; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-style: none solid solid; border-right-color: rgb(240, 240, 240); border-bottom-color: rgb(240, 240, 240); border-left-color: rgb(240, 240, 240);'; }?>>
							<div class="container_option_survey" >
							
								<div class="div_select_survey">								
									<?php 
										// BUSCA EL NOMBRE DE LA COMPANIA
										$consulta_company="SELECT * FROM company WHERE id='".$fila_table['outsite_utility_company']."' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										$fila_company= mysqli_fetch_array($resultado_company);
									
										?>	
                                
								<select name="company_survey" disabled="disabled">
									<option><?php echo $fila_company['company']; ?></option>
								</select>
								
								</div>
								<div class="div_select_survey">
										<?php 
										// BUSCA EL NOMBRE DEL CONTACTO
										$consulta_contact="SELECT * FROM contact WHERE id='".$fila_table['outsite_utility_contact']."' ";
										$resultado_contact= mysqli_query($conexion,$consulta_contact);
										$fila_contact= mysqli_fetch_array($resultado_contact);
									
										?>	

									<select name="contact_outsite_pole" disabled="disabled">								
											<option value="<?php echo $fila_contact['id']; ?>"><?php echo $fila_contact['contact']; ?></option>									
									</select>
								
								</div>	


				
							</div>
							
							<div class="container_option_under_pole" > 
							
								<div class="div_option_under_pole" >
                               
                               		<div class="text_option_pole" style="">UNDERGROUND APPLICATION </div>
									
                                    
                                    <div class="container_radio_option_pole" style="margin-right:10px; margin-left:10px;">
                                    <label for="nounderground_application" style="margin-right:6px;"> No </label>
                                    <input disabled="disabled" <?php if($fila_table['outsite_underground_application'] == 'no'){ echo "checked"; }?> type="radio" name="underground_application" id="underground_application" value="no"  />
                                    
                                    </div>
                                    
                                    <div class="container_radio_option_pole" style="margin-right:10px; margin-left:60px;">
									<input type="radio" name="underground_application" id="underground_application" value="si" disabled="disabled" <?php if($fila_table['outsite_underground_application'] == 'si'){ echo "checked"; }?> />
                                    <label for="yesunderground_application" style="margin-right:6px;" > yes </label>
                                     </div>
                                    
									
									
									
								</div>
								<div class="div_option_under_pole" >
                                    
                                    
                                    <div class="text_option_pole" style="">AERIAL APPLICATION</div>
                                    <div class="container_radio_option_pole" style="margin-right:10px; margin-left:10px;">
                                    <label for="noaerial_application" style="margin-right:6px;"> No </label>
                                    <input type="radio" name="aerial_application" id="underground_application" value="no" disabled="disabled" <?php if($fila_table['outsite_aerial_application'] == 'no'){ echo "checked"; }?> />
                                    
                                    </div>
                                    
                                    <div class="container_radio_option_pole" style="margin-right:10px; margin-left:60px;">
									<input type="radio" name="aerial_application" id="siaerial_application" value="si"disabled="disabled" <?php if($fila_table['outsite_aerial_application'] == 'si'){ echo "checked"; }?> />
                                    <label for="yesunderground_application" style="margin-right:6px;" > yes </label>
                                     </div>
                                    
									
								</div>
							
							</div>	
							
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > Application Needed For: </div>
									<div class="select_under_pole">
											<?php 
												// BUSCA EL NOMBRE DE LA COMPANIA QUE NECESITA LA APLICACION
												$consulta_company_needed="SELECT * FROM company WHERE id='".$fila_table['outsite_application_company']."' ";
												$resultado_company_needed= mysqli_query($conexion,$consulta_company_needed);
												$fila_company_needed= mysqli_fetch_array($resultado_company_needed);
												
											?>	

										<select name="company_application_needed" disabled="disabled">
											<option><?php echo $fila_company_needed['company']; ?></option>
						
																				
										</select>
									</div>	
									<div class="select_under_pole">
										<?php 
										// BUSCA EL NOMBRE DEL CONTACTO
											$consulta_contact_needed="SELECT * FROM contact WHERE id='".$fila_table['outsite_applicacion_contact']."' ";
											$resultado_contact_needed= mysqli_query($conexion,$consulta_contact_needed);
											$fila_contact_needed= mysqli_fetch_array($resultado_contact_needed);
										
										?>	

									<select name="contact_outsite_pole" disabled="disabled">								
											<option value="<?php echo $fila_contact_needed['id']; ?>"><?php echo $fila_contact_needed['contact']; ?></option>									
									</select>
									</div>
								
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > CUST. CABLE COUNT </div>
								
									<input type="text" name="cust_cable_count" class="input_under_pole" value="<?php echo $fila_table['outsite_cust_cable']; ?>" disabled="disabled" />
								
									<div class="text_div_select_under_pole" > CUST. TIE LOC TO NET </div>
								
									<input type="text" name="cust_loc_net" class="input_under_pole" value=<?php echo $fila_table['outsite_cust_tie_net']; ?> disabled="disabled" />
								</div>
								
							
							</div>	
							
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >						
									<textarea name="textarea_under_pole" placeholder="Text Here" disabled="disabled"><?php  echo $fila_table['outsite_text_here']; ?></textarea>

								</div>
								
							
							</div>							
							
						</div>
						
					</div>
								

			</div>

		</div>
						
	</div>
						

	<?php } ?>


	<?php if ($_POST['tipo'] == "highway_traffic_pole_plan") { ?>
			<div class="container-general-info">
				<div class="container-isp" >
						<div class="header-info"><strong>HIGHWAY TRAFFIC PLANS NEEDED</strong></div>
					<div class="content_option_inside" style="width: 99.5%;">
						<div class="text_option_pole" style="margin-bottom: 10px;font-family: OpenSans-Bold; font-size: 14px; color: rgb(1,76,178);"> 		HIGHWAY TRAFFIC PLANS NEEDED

						</div> 

							<div class="container_radio_option_pole" style="float:left;margin-left:50px;" >
								<div class="margin_radio_pole" >
									<input type="radio" name="si_hightway_traffic_pole" id="si_hightway_traffic_pole" value="si" disabled="disabled" <?php if ($_POST['tipo']== 'highway_traffic_pole_plan'){ echo "checked"; } ?> />
									<label for="si_hightway_traffic_pole"> Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="si_hightway_traffic_pole" id="no_hightway_traffic_pole" value="no" disabled="disabled" <?php if(!($_POST['tipo'] == 'highway_traffic_pole_plan')){ echo "checked";} ?> />
									<label for="no_hightway_traffic_pole">No</label>
								</div>
								
							</div>
							
							<div class="container_click_other_pole" <?php if ($_POST['tipo'] == 'highway_traffic_pole_plan'){ echo 'style="height: auto; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-style: none solid solid; border-right-color: rgb(240, 240, 240); border-bottom-color: rgb(240, 240, 240); border-left-color: rgb(240, 240, 240); padding-bottom: 10px;"'; } ?>>
							
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_pole" class="input_highway_pole" disabled="disabled" value="<?php echo $fila_table['other_highway_task_request_number']; ?>" />
									
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED  </div>
									
										<input type="text" name="date_task_requested_pole" class="input_highway_pole" disabled="disabled" value="<?php echo $fila_table['other_highway_date_task']; ?>" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE  </div>
									
										<input type="text" name="expected_return_date_pole" class="input_highway_pole" disabled="disabled" value="<?php echo $fila_table['other_highway_expected_date']; ?>"  />
									</div>
									
								
								</div>	
								
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > PROPOSED TMP LENGTH </div>
									
										<input type="text" name="proposed_tmp_length_pole" class="input_highway_pole" disabled="disabled" value="<?php echo $fila_table['other_highway_proposed_tmp']; ?>" />
									
									
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
										<input type="checkbox" name="check_find_aerial_path" id="check_find_aerial_path" value="si" <?php if( $fila_table['other_highway_traffic']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
										<label for="highway_proposed_pole"> Highway Traffic  Management proposed plans </label>
										
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									<input type="checkbox" name="check_find_aerial_path" id="check_find_aerial_path" value="si" <?php if( $fila_table['other_highway_engineering_plans_pole']=="si" ){ ?> checked <?php } ?>  disabled="disabled" />
										<label for="engineering_plans_polee"> Engineering Stamped Plans needed </label>
											
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="text" name="from_proposed_pole" class="input_highway_pole" placeholder="From" disabled="disabled" value="<?php echo $fila_table['other_highway_from']; ?>" />
										<input type="text" name="to_proposed_pole" class="input_highway_pole" placeholder="To" disabled="disabled" value="<?php echo $fila_table['other_highway_to']; ?>" />
										
									</div>
									
								</div>	
							
								<div class="container_option_under_pole" style="" > 
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
										<textarea placeholder="SCOPE WORK" name="scope_work_proposed_pole" disabled="disabled"><?php echo $fila_table['other_highway_scope']; ?></textarea>
										
									</div>							
								</div>
							
							</div>
					</div>
				</div>
			</div>
	<?php } ?>

	<?php  if ($_POST['tipo'] == "railroad_crossing_pole_plans") { ?>
				<div class="container-general-info">
					<div class="container-isp" >
							<div class="header-info"><strong>RAILROAD CROSSING PLANS NEEDED</strong></div>
						<div class="content_option_inside" style="width: 99.5%;">
						<div class="text_option_pole" style="margin-bottom: 10px;font-family: OpenSans-Bold; font-size: 14px; color: rgb(1,76,178);" > 		RAILROAD CROSSING PLANS NEEDED 

						</div> 

							<div class="container_radio_option_pole" style="float:left;margin-left:37px;">
								<div class="margin_radio_pole" style="margin-top: 3px;">
									<input type="radio" name="si_railroad_pole" id="si_railroad_pole" value="si" disabled="disabled" <?php if($_POST['tipo'] == 'railroad_crossing_pole_plans'){ echo "checked";}  ?> />
									<label for="si_railroad_pole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole" style="margin-top: 3px;">
									<input type="radio" name="si_railroad_pole" id="no_railroad_pole" value="no" disabled="disabled" <?php if(!($_POST['tipo'] == 'railroad_crossing_pole_plans')){ echo "checked";} ?> />
									<label for="no_railroad_pole">No</label>
								</div>
								
							</div>
							
						
							<div class="container_click_other_pole"  <?php if($_POST['tipo'] == 'railroad_crossing_pole_plans'){ echo 'style="height: auto; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-style: none solid solid; border-right-color: rgb(240, 240, 240); border-bottom-color: rgb(240, 240, 240); border-left-color: rgb(240, 240, 240); padding-bottom: 10px;"'; } ?> >
							
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_pole_railroad" class="input_highway_pole" disabled="disabled" value="<?php echo $fila_table['other_railroad_task_request_number']; ?>"/>
									
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED  </div>
									
										<input type="text" name="date_task_requested_pole_railroad" class="input_highway_pole" disabled="disabled" value="<?php echo $fila_table['other_railroad_date_task']; ?>"/>
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE  </div>
									
										<input type="text" name="expected_return_date_pole_railroad" class="input_highway_pole" disabled="disabled" value="<?php echo $fila_table['other_railroad_expected_date']; ?>"/>
									</div>
									
								
								</div>	
								
								<div class="container_option_under_pole" > 
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
										<input type="checkbox" name="check_attached_map_electric_utility" id="check_attached_map_electric_utility" value="si" <?php if($fila_table['other_railroad_crossing_proposed'] =="si" ){ echo "checked"; } ?> disabled="disabled" />
										<label for="highway_proposed_pole"> Highway Traffic  Management proposed plans </label>
											
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
										<input type="checkbox" name="check_attached_map_electric_utility" id="check_attached_map_electric_utility" value="si" <?php if($fila_table['engineering_plans_pole_railroad'] =="si" ){ echo "checked"; }?> disabled="disabled" />
										<label for="engineering_plans_polee"> Engineering Stamped Plans needed </label>
												
									</div>
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
										<input type="text" name="from_proposed_pole_railroad" class="input_highway_pole" placeholder="From" disabled="disabled" value="<?php echo $fila_table['other_railroad_from']; ?>"/>
										<input type="text" name="to_proposed_pole_railroad" class="input_highway_pole" placeholder="To" disabled="disabled" value="<?php echo $fila_table['other_railroad_to']; ?>"/>
										
									</div>
																
								</div>	
							
								<div class="container_option_under_pole" > 
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<textarea placeholder="SCOPE WORK" name="scope_work_proposed_pole_railroad" disabled="disabled"><?php echo $fila_table['other_railroad_scope']; ?> </textarea>	
									
									</div>							
								</div>



						</div>
					</div>
				</div>
	<?php } ?>

<!--  UTILITY AB -->
	<?php if($_POST['tipo'] == "electric_request_utility_plans" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>ELECTRIC PLAN REQUEST</strong></div>
				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							ELECTRIC PLAN REQUEST
						</div>				
					</div>		
				
									<div class="container_option_under_pole" > 
									
										<div class="container_div_select_under_pole" >
										
											<div class="text_div_select_under_pole" > TASK REQUEST # </div>
										
											<input type="text" name="task_request_number_utility" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_utility']; ?>"  disabled="disabled" />
									
											
										</div>
										
									
									</div>	
									
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > Utility Company: </div>
										<div class="select_under_pole">
											<select name="company_utility" disabled="disabled">
												
											<?php 
												$consulta_company="SELECT * FROM company WHERE id='".$fila_table['company_utility']."' AND estado='1' ";
												$resultado_company= mysqli_query($conexion,$consulta_company);
												while($fila_company= mysqli_fetch_array($resultado_company)){
											?>										
												<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
											<?php } ?>												
											</select>
										</div>	
										
										<div class="text_div_select_under_pole" > Path Length </div>
									
										<input type="text" name="path_length_utility" class="input_path_utility" value="<?php echo $fila_table['path_length_utility']; ?>" disabled="disabled" />		
										<!--
										<div class="div_check_utility" style="margin-top:10px;margin-left:20px;margin-right:0px;" >
											
											<input type="checkbox" name="check_attached_map_electric_utility" id="check_attached_map_electric_utility" value="si" <?php if($fila_table['see_attached_map_utility'] =="si" ){ echo "checked"; } ?> />
												<div class="text_div_check_utility" > <label for="check_attached_map_electric_utility" > See attached map </label>  </div>
											</div>											
											-->	
											
										
										</div>
									
								
								</div>	
								
								<div class="container_option_under_pole" style="padding:0px;" > 
								
									<div class="container_div_select_under_pole" >
									
										<input type="text" placeholder="FROM" name="form_utility" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_electric_utility']; ?>"  disabled="disabled" />
										<input type="text" placeholder="TO" name="to_utility" class="input_from_utility" value="<?php echo $fila_table['to_electric_utility']; ?>" disabled="disabled" />
										
									</div>
									
								
								</div>	
								
							
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<textarea name="textarea_scope_utility" placeholder="SCOPE WORK" disabled="disabled"><?php echo $fila_table['scope_word_electric_utility']; ?></textarea>
									</div>
									
								
								</div>	
			
		
			</div>
		</div>
	</div>	

	<?php } ?>


	<?php if($_POST['tipo'] == "telephone_request_utility_plans" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>TELEPHONE PLAN REQUEST</strong></div>
				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							TELEPHONE PLAN REQUEST
						</div>				
					</div>		
				
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<div class="text_div_select_under_pole" > TASK REQUEST # </div>
								
									<input type="text" name="task_request_number_telephone_utility" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_telephone'];  ?>" disabled="disabled" />
									
								</div>
								
							
							</div>	
							
				
						<div class="container_option_under_pole" > 
						
							<div class="container_div_select_under_pole" >
							
								<div class="text_div_select_under_pole" > Utility Company: </div>
								<div class="select_under_pole">
									<select name="company_telephone_utility" disabled="disabled">
										
									<?php 
										$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_utility_telephone']."' AND  estado='3' ";
										//$consulta_company ="SELECT * FROM company WHERE id='".$fila_table['company_utility_telephone']."' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);

											var_dump($consulta_company);
										while($fila_company= mysqli_fetch_array($resultado_company)){
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
									<?php } ?>												
									</select>
								</div>	
								
								<div class="text_div_select_under_pole" > Path Length </div>
							
								<input type="text" name="path_length_telephone_utility" class="input_path_utility" value="<?php echo $fila_table['path_length_utility_telephone']; ?>" disabled="disabled" />	
								
															
									
								
							
							</div>
							
						
						</div>	
						
						<div class="container_option_under_pole" style="padding:0px;" > 
						
							<div class="container_div_select_under_pole" >
							
								<input type="text" placeholder="FROM" name="form_telephone_utility" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_utility_telephone']; ?>"  disabled="disabled" />
								<input type="text" placeholder="TO" name="to_telephone_utility" class="input_from_utility" value="<?php echo $fila_table['to_utility_telephone']; ?>" disabled="disabled"  />
								
							</div>
							
						
						</div>	
						
					
						<div class="container_option_under_pole" > 
						
							<div class="container_div_select_under_pole" >
							
								<textarea name="textarea_scope_telephone_utility" placeholder="SCOPE WORK" disabled="disabled" ><?php echo $fila_table['scope_work_telephone']; ?></textarea>
							</div>
							
						
						</div>							
										
			
				</div>
			</div>
		</div>	

	<?php } ?>



	<?php if($_POST['tipo'] == "private_request_utility_plans" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>PRIVATE P. PLAN REQUEST</strong></div>
				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							PRIVATE P. PLAN REQUEST
						</div>				
					</div>	
					
										<div class="container_option_under_pole" > 
										
											<div class="container_div_select_under_pole" >
											
												<div class="text_div_select_under_pole" > TASK REQUEST # </div>
											
												<input type="text" name="task_request_number_private_plan_utility" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_private']; ?>" disabled="disabled" />
											
												
											</div>
											
										
										</div>	
										
							
									<div class="container_option_under_pole" > 
									
										<div class="container_div_select_under_pole" >
										
											<div class="text_div_select_under_pole" > Utility Company: </div>
											<div class="select_under_pole">
												<select name="company_private_plan_utility" disabled="disabled">
													
												<?php 
													$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_utility_private']."' AND estado='3' ";
													$resultado_company= mysqli_query($conexion,$consulta_company);
													while($fila_company= mysqli_fetch_array($resultado_company)){
												?>										
													<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
												<?php } ?>												
												</select>
											</div>	
											
											<div class="text_div_select_under_pole" > Path Length </div>
										
											<input type="text" name="path_length_private_plan_utility" class="input_path_utility" value="<?php echo $fila_table['path_length_private']; ?>" disabled="disabled"/>							
										
																			
																		
										</div>
										
									
									</div>	
									
									<div class="container_option_under_pole" style="padding:0px;" > 
									
										<div class="container_div_select_under_pole" >
										
											<input type="text" placeholder="FROM" name="form_private_plan_utility" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_utility_private']; ?>"  disabled="disabled" />
											<input type="text" placeholder="TO" name="to_private_plan_utility" class="input_from_utility" value="<?php echo $fila_table['to_utility_private']; ?>"  disabled="disabled" />
											
										</div>
										
									
									</div>	
									
								
									<div class="container_option_under_pole" > 
									
										<div class="container_div_select_under_pole" >
										
											<textarea name="textarea_scope_private_plan_utility" placeholder="SCOPE WORK" disabled="disabled"><?php echo $fila_table['scope_work_private']; ?></textarea>
										</div>
										
									
									</div>				
					
					

			
				</div>
			</div>
		</div>	

	<?php } ?>


	<?php if($_POST['tipo'] == "all_request_utility_plans" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>ALL UTILITY PLAN REQUEST</strong></div>
				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							ALL UTILITY PLAN REQUEST
						</div>				
					</div>	
					
										<div class="container_option_under_pole" > 
										
											<div class="container_div_select_under_pole" >
											
												<div class="text_div_select_under_pole" > TASK REQUEST # </div>
											
												<input type="text" name="task_request_number_all_plan_utility" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_all_utility']; ?>" disabled="disabled" />
											
												
											</div>
											
										
										</div>	
										
							
									<div class="container_option_under_pole" > 
									
										<div class="container_div_select_under_pole" >
										
											<div class="text_div_select_under_pole" > Utility Company: </div>
											<div class="select_under_pole">
												<select name="company_all_plan_utility" disabled="disabled">
												
												<?php 
													$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_all_utility']."' AND estado='3' ";
													$resultado_company= mysqli_query($conexion,$consulta_company);
													while($fila_company= mysqli_fetch_array($resultado_company)){
												?>										
													<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
												<?php } ?>												
												</select>
											</div>	
											
											<div class="text_div_select_under_pole" > Path Length </div>
										
											<input type="text" name="path_length_all_plan_utility" class="input_path_utility" value="<?php echo $fila_table['path_lenth_all_utility']; ?>" disabled="disabled" />		
											
										
										</div>
										
									
									</div>	
									
									<div class="container_option_under_pole" style="padding:0px;" > 
									
										<div class="container_div_select_under_pole" >
										
											<input type="text" placeholder="FROM" name="form_all_plan_utility" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_all_utility']; ?>"  disabled="disabled" />
											<input type="text" placeholder="TO" name="to_all_plan_utility" class="input_from_utility" value="<?php echo $fila_table['to_all_utility']; ?>" disabled="disabled"  />
											
										</div>
										
									
									</div>	
									
								
									<div class="container_option_under_pole" > 
									
										<div class="container_div_select_under_pole" >
										
											<textarea name="textarea_scope_all_plan_utility" placeholder="SCOPE WORK" disabled="disabled" ><?php echo $fila_table['scope_work_all_utility']; ?></textarea>
										</div>
										
									
									</div>				
					

			
				</div>
			</div>
		</div>	

	<?php } ?>

	<?php if($_POST['tipo'] == "find_request_utility_plans" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>FIND A POSSIBLE PATH REQUEST</strong></div>
				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							FIND A POSSIBLE PATH REQUEST
						</div>				
					</div>	
					
										<div class="container_option_under_pole" > 
										
											<div class="container_div_select_under_pole" >
											
												<div class="text_div_select_under_pole" > TASK REQUEST # </div>
											
												<input type="text" name="task_request_number_find_plan_utility" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_find_utility']; ?>" disabled="disabled" />
																		
											</div>
											
										
										</div>	
										
							
									<div class="container_option_under_pole" > 
									
										<div class="container_div_select_under_pole" >
										
										
											
											<div class="text_div_select_under_pole" > Path Length </div>
										
											<input type="text" name="path_length_find_plan_utility" class="input_path_utility" value="<?php echo $fila_table['path_lenth_find_utility']; ?>" disabled="disabled" />							
										
										</div>
										
										<div class="container_div_select_under_pole" style="margin-top:20px;" >
										
										
											
											<div class="div_check_utility" >
												
												<input type="checkbox" name="check_find_aerial_path" id="check_find_aerial_path" value="si" <?php if( $fila_table['find_aerial_utility']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="check_find_aerial_path" > Find aerial path </label>  </div>
											</div>														
											<div class="div_check_utility" >
												
												<input type="checkbox" name="check_find_underground_path" id="check_find_underground_path" value="si" <?php if( $fila_table['find_underground_utility']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="check_find_underground_path" > Find underground path </label>  </div>
											</div>													
											<div class="div_check_utility" >
												
												<input type="checkbox" name="check_elec_path" id="check_elec_path" value="si" <?php if( $fila_table['elec_find_utility']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="check_elec_path" > Elec </label>  </div>
											</div>												
											<div class="div_check_utility" >
												
												<input type="checkbox" name="check_tel_path" id="check_tel_path" value="si" <?php if( $fila_table['tel_find_utility']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="check_tel_path" > Tel </label>  </div>
											</div>										
											<div class="div_check_utility" >
												
												<input type="checkbox" name="check_private_path" id="check_private_path" value="si"  <?php if( $fila_table['private_find_utility']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="check_private_path" > Private </label>  </div>
											</div>									
											<div class="div_check_utility" >
												
												<input type="checkbox" name="check_attached_path" id="check_attached_path" value="si"  <?php if( $fila_table['see_attached_redline_map_utility']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="check_attached_path" > See attached redline map </label>  </div>
											</div>						
										
										</div>
										
									
									</div>	
									
									<div class="container_option_under_pole" style="padding:0px;" > 
									
										<div class="container_div_select_under_pole" >
										
											<input type="text" placeholder="FROM" name="form_find_plan_utility" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_find_utility']; ?>" disabled="disabled"  />
											<input type="text" placeholder="TO" name="to_find_plan_utility" class="input_from_utility" value="<?php echo $fila_table['to_find_utility']; ?>"  disabled="disabled" />
											
										</div>
										
									
									</div>	
									
								
									<div class="container_option_under_pole" > 
									
										<div class="container_div_select_under_pole" >
										
											<textarea name="textarea_scope_find_plan_utility" placeholder="SCOPE WORK" disabled="disabled"><?php echo $fila_table['scope_work_find_utility']; ?></textarea>
										</div>
										
									
									</div>							
									
			
				</div>
			</div>
		</div>	

	<?php } ?>

<!-- MANHOLE PLANS-->

	<?php if($_POST['tipo']== "electric_proposed_manhole_plan" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>ELECTRIC PROPOSED MANHOLE PLANS</strong></div>
				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							ELECTRIC PROPOSED MANHOLE PLANS
						</div>				
					</div>	

										<div class="container_option_under_pole" > 
										
											<div class="container_div_select_under_pole" >
											
												<div class="text_div_select_under_pole" > TASK REQUEST # </div>
											
												<input type="text" name="task_request_number_manhole" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_electric_manhole']; ?>" disabled="disabled" />
												
												<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
											
												<input type="text" name="date_task_requested_manhole" class="input_highway_pole" value="<?php echo $fila_table['expected_date_electric_manhole']; ?>" disabled="disabled" />
												
										
											</div>
											<div class="container_div_select_under_pole" style="margin-top:5px;"  >								
												
												<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
											
												<input type="text" name="expected_return_date_manhole" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_electric_manhole']; ?>" disabled="disabled" />
											
											
												
											</div>
											
											
											
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" > MH OPTION </div>
											
												<input type="text" name="mh_option_manhole" class="input_highway_pole" style="margin-left:33px;" value="<?php echo $fila_table['mh_option_electric_manhole']; ?>" disabled="disabled" />
											
												
											</div>
											
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" > Utility Company: </div>
												<div class="select_under_pole" style="margin-left:14px;width:151px;" >
													<select name="company_manhole" disabled="disabled">
														
													<?php 
														$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_electric_manhole']."' AND estado='3' ";
														$resultado_company= mysqli_query($conexion,$consulta_company);
														while($fila_company= mysqli_fetch_array($resultado_company)){
													?>										
														<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
													<?php } ?>												
													</select>
												</div>	
																					
											
												
											</div>
											
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" > PROP. FIBER </div>
											
												<input type="text" name="prop_fiber_manhole" class="input_highway_pole" style="margin-left:25px;" value="<?php echo $fila_table['prop_fiber_electric_manhole']; ?>" disabled="disabled" />
											
												
											</div>
												
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" > PATH LENGTH </div>
											
												<input type="text" name="path_length_manhole" class="input_highway_pole" style="margin-left:17px;" value="<?php echo $fila_table['path_length_electric_manhole']; ?>" disabled="disabled" />
											
												
											</div>
																				
											
											
										
										</div>	
										
							
									<div class="container_option_under_pole" style="padding:0px;" > 
									
										<div class="container_div_select_under_pole" >
										
											<input type="text" placeholder="FROM" name="form_manhole" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_electric_manhole']; ?>" disabled="disabled"  />
											<input type="text" placeholder="TO" name="to_manhole" class="input_from_utility" value="<?php echo $fila_table['to_electric_manhole']; ?>" disabled="disabled" />
											
										</div>
										
									
									</div>	
									
								
									<div class="container_option_under_pole" > 
									
										<div class="container_div_select_under_pole" >
										
											<textarea name="textarea_scope_manhole" placeholder="SCOPE WORK" disabled="disabled"><?php echo $fila_table['scope_work_electric_manhole']; ?></textarea>
										</div>
										
									
									</div>							

			
				</div>
			</div>
		</div>	

	<?php } ?>



	<?php if($_POST['tipo'] == "telephone_proposed_manhole_plan" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>TELEPHONE PROPOSED MANHOLE PLANS</strong></div>
				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							TELEPHONE PROPOSED MANHOLE PLANS
						</div>				
					</div>	

										<div class="container_option_under_pole" > 
										
											<div class="container_div_select_under_pole" >
											
												<div class="text_div_select_under_pole" > TASK REQUEST # </div>
											
												<input type="text" name="task_request_number_telephone_manhole" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_telephone_manhole']; ?>" disabled="disabled" />
												
												<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
											
												<input type="text" name="date_task_requested_telephone_manhole" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_telephone_manhole']; ?>" disabled="disabled" />
																			
												
											</div>
											
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
											
												<input type="text" name="expected_return_date_telephone_manhole" class="input_highway_pole" value="<?php echo $fila_table['expected_date_telephone_manhole']; ?>" disabled="disabled" />
																					
											</div>
											
											
											
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" > MH OPTION </div>
											
												<input type="text" name="mh_option_telephone_manhole" class="input_highway_pole" style="margin-left:33px;" value="<?php echo $fila_table['mh_option_telephone_manhole']; ?>" disabled="disabled" />
											
												
											</div>
											
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" > Utility Company: </div>
												<div class="select_under_pole" style="margin-left:14px;width:151px;" >
													<select name="company_telephone_manhole" disabled="disabled">
													<?php 
														$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_telephone_manhole']."' AND estado='3' ";
														$resultado_company= mysqli_query($conexion,$consulta_company);
														while($fila_company= mysqli_fetch_array($resultado_company)){
													?>										
														<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
													<?php } ?>												
													</select>
												</div>	
																					
											
												
											</div>
											
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" > PROP. FIBER </div>
											
												<input type="text" name="prop_fiber_telephone_manhole" class="input_highway_pole" style="margin-left:25px;" value="<?php echo $fila_table['prop_fiber_telephone_manhole']; ?>" disabled="disabled" />
											
												
											</div>
												
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" > PATH LENGTH </div>
											
												<input type="text" name="path_length_telephone_manhole" class="input_highway_pole" style="margin-left:17px;" value="<?php echo $fila_table['path_length_telephone_manhole']; ?>"  disabled="disabled" />
											
												
											</div>
																				
											
											
										
										</div>	
										
							
									<div class="container_option_under_pole" style="padding:0px;" > 
									
										<div class="container_div_select_under_pole" >
										
											<input type="text" placeholder="FROM" name="form_telephone_manhole" class="input_from_utility" style="width:46.5% !important;" value="<?php echo $fila_table['from_telephone_manhole']; ?>"  disabled="disabled" />
											<input type="text" placeholder="TO" name="to_telephone_manhole" class="input_from_utility" value="<?php echo $fila_table['to_telephone_manhole']; ?>" disabled="disabled" />
											
										</div>
										
									
									</div>	
									
								
									<div class="container_option_under_pole" > 
									
										<div class="container_div_select_under_pole" >
										
											<textarea name="textarea_scope_telephone_manhole" placeholder="SCOPE WORK" disabled="disabled"><?php echo $fila_table['scope_work_telephone_manhole']; ?></textarea>
										</div>
										
									
									</div>							
												
					
					

			
				</div>
			</div>
		</div>	

	<?php } ?>


	<?php if($_POST['tipo'] == "private_proposed_manhole_plan" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>PRIVATE PROPOSED MANHOLE PLANS</strong></div>
				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							PRIVATE PROPOSED MANHOLE PLANS
						</div>				
					</div>	

								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_private_manhole" class="input_highway_pole" value="<?php echo $fila_table['task_request_number_private_manhole']; ?>" disabled="disabled" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_private_manhole" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_private_manhole']; ?>"disabled="disabled" />
										
										
									</div>
									<div class="container_div_select_under_pole" >							
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_private_manhole" class="input_highway_pole" value="<?php echo $fila_table['expected_date_private_manhole']; ?>" disabled="disabled" />
									
										
									</div>
									
									
									
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > MH OPTION </div>
									
										<input type="text" name="mh_option_private_manhole" class="input_highway_pole" style="margin-left:33px;" value="<?php echo $fila_table['mh_option_private_manhole']; ?>" disabled="disabled" />
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > Utility Company: </div>
										<div class="select_under_pole" style="margin-left:14px;width:151px;" >
											<select name="company_private_manhole" disabled="disabled">
											<?php 
												$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_private_manhole']."' AND estado='3' ";
												$resultado_company= mysqli_query($conexion,$consulta_company);
												while($fila_company= mysqli_fetch_array($resultado_company)){
											?>										
												<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
											<?php } ?>												
											</select>
										</div>	
																			
									
										
									</div>
									
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PROP. FIBER </div>
									
										<input type="text" name="prop_fiber_private_manhole" class="input_highway_pole" style="margin-left:25px;" value="<?php echo $fila_table['prop_fiber_private_manhole']; ?>" disabled="disabled"/>
									
										
									</div>
										
									<div class="container_div_select_under_pole" style="margin-top:5px;" >
									
										<div class="text_div_select_under_pole" > PATH LENGTH </div>
									
										<input type="text" name="path_length_private_manhole" class="input_highway_pole" style="margin-left:17px;" value="<?php echo $fila_table['path_length_private_manhole']; ?>" disabled="disabled" />
									
										
									</div>

								</div>	
										
						
						<div class="container_option_under_pole" style="padding:0px;" > 
						
							<div class="container_div_select_under_pole" >
							
								<input type="text" placeholder="FROM" name="form_private_manhole" class="input_from_utility"  style="width:46.5% !important;" value="<?php echo $fila_table['from_private_manhole']; ?>" disabled="disabled" />
								<input type="text" placeholder="TO" name="to_private_manhole" class="input_from_utility" value="<?php echo $fila_table['to_private_manhole']; ?>" disabled="disabled" />
								
							</div>
							
						
						</div>	
						
					
						<div class="container_option_under_pole" > 
						
							<div class="container_div_select_under_pole" >
							
								<textarea name="textarea_scope_private_manhole" placeholder="SCOPE WORK" disabled="disabled"><?php echo $fila_table['scope_work_private_manhole']; ?></textarea>
							</div>
							
						
						</div>							

				</div>
			</div>
		</div>	

	<?php } ?>


	<?php if($_POST['tipo'] == "outsite_utility_manhole_plan" ){ ?>
		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>OUTSIDE UTILITY APPLICATION</strong></div>
				<div class="content_option_inside" >			
					<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								OUTSIDE UTILITY APPLICATION
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_outside_proposed_manhole" id="si_outside_proposed_manhole" value="si" class="radio_click" disabled="disabled" <?php  if(isset($fila_table)){ echo "checked"; } ?> />
									<label for="si_outside_proposed_manhole" > Yes </label>
									
									<input type="radio" name="si_outside_proposed_manhole" id="no_outside_proposed_manhole" value="no" class="radio_click" disabled="disabled" <?php  if(!isset($fila_table)){ echo "checked"; } ?> />
									<label for="no_outside_proposed_manhole" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" <?php  if(isset($fila_table)){ echo "style='height: auto;'"; }?>>
								<div class="container_option_under_pole"> 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_outside_manhole" class="input_highway_pole" disabled="disabled" value="<?php echo $fila_table['task_request_number_outsite_manhole']; ?>" disabled="disabled" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_outside_manhole" class="input_highway_pole" disabled="disabled" value="<?php echo $fila_table['date_task_request_outsite_manhole']; ?>" disabled="disabled" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_outside_manhole" class="input_highway_pole" disabled="disabled" value="<?php echo $fila_table['expected_date_outsite_manhole']; ?>" disabled="disabled" />

									</div>
									
									<div class="container_div_select_under_pole" >
									
								<div class="div_select_survey">
									
									<?php 
										// BUSCA EL COMPANY DEL OUTSITE MANHOLE
										$consulta_company_outsite_manhole="SELECT * FROM company WHERE id='".$fila_table['company_outsite_manhole']."' ";
										$resultado_company_outsite_manhole= mysqli_query($conexion,$consulta_company_outsite_manhole);
										$fila_company_outsite_manhole= mysqli_fetch_array($resultado_company_outsite_manhole);
									
										?>	

									<select name="contact_manhole_electric" disabled="disabled" disabled="disabled">								
											<option value="<?php echo $fila_company_outsite_manhole['id']; ?>"><?php echo $fila_company_outsite_manhole['company']; ?></option>									
									</select>
															
							</div>
							<div class="div_select_survey">
								
								<?php 
									// BUSCA EL CONTACT DEL OUTSITE MANHOLE
									$consulta_contact_outsite_manhole="SELECT * FROM contact WHERE id='".$fila_table['contact_outsite_manhole']."' ";
									$resultado_contact_outsite_manhole= mysqli_query($conexion,$consulta_contact_outsite_manhole);
									$fila_contact_outsite_manhole= mysqli_fetch_array($resultado_contact_outsite_manhole);
						
									?>	

								<select name="contact_outsite_pole" disabled="disabled" disabled="disabled" >								
										<option value="<?php echo $fila_contact_outsite_manhole['id']; ?>"><?php echo $fila_contact_outsite_manhole['contact']; ?></option>									
								</select>
						
							</div>										

								</div>

							</div>
					</div>
				</div>
			</div>
		</div>

	<?php } ?>

		
	<?php if($_POST['tipo'] == "underground_outsite_manhole_plan" ){ ?>

					<div class="container-general-info">
						<div class="container-isp" >
								<div class="header-info"><strong>UNDERGROUND APPLICATION TASK</strong></div>
							<div class="container_div_click_manhole" >
								<div class="title_content_option_inside title_content_option_manhole " > 
									<div class="div_title_content_option_inside"  >
										UNDERGROUND APPLICATION TASK
										
										<div class="div_option_radio_inside" >
											<input type="radio" name="si_underground_task_manhole" id="si_underground_task_manhole" value="si" class="radio_click" disabled="disabled" <?php  if(isset($fila_table)){ echo "checked"; } ?> />
											<label for="si_underground_task_manhole" > Yes </label>
											
											<input type="radio" name="si_underground_task_manhole" id="no_underground_task_manhole" value="no" class="radio_click" disabled="disabled" <?php  if(!isset($fila_table)){ echo "checked"; } ?> />
											<label for="no_underground_task_manhole" > No </label>
										</div>
																
									
									</div>
									
								</div>								
								
								
								<div class="container_click_option_inside" <?php  if(isset($fila_table)){ echo "style='height: auto;'"; } ?>>
								
										<div class="container_option_under_pole"  > 
										
											<div class="container_div_select_under_pole" >
											
												<div class="text_div_select_under_pole" > License Application Needed: </div>
												<div class="div_select_survey" style="margin-top:0px;" >
													
													<?php 
														// BUSCA EL COMPANY DEL UNDERGROUND MANHOLE
														$consulta_company_underground_outsite_manhole="SELECT * FROM company WHERE id='".$fila_table['company_underground_manhole']."' ";
														$resultado_company_underground_outsite_manhole= mysqli_query($conexion,$consulta_company_underground_outsite_manhole);
														$fila_company_underground_outsite_manhole= mysqli_fetch_array($resultado_company_underground_outsite_manhole);
													
														?>	

													<select name="contact_manhole_electric" disabled="disabled">								
															<option value="<?php echo $fila_company_underground_outsite_manhole['id']; ?>"><?php echo $fila_company_underground_outsite_manhole['company']; ?></option>									
													</select>
												
												</div>
												<div class="div_select_survey" style="margin-top:0px;" >
													<?php 
														// BUSCA EL CONTACT DEL UNDERGROUND MANHOLE
														$consulta_contact_underground_outsite_manhole="SELECT * FROM contact WHERE id='".$fila_table['contact_underground_manhole']."' ";
														$resultado_contact_underground_outsite_manhole= mysqli_query($conexion,$consulta_contact_underground_outsite_manhole);
														$fila_contact_underground_outsite_manhole= mysqli_fetch_array($consulta_contact_underground_outsite_manhole);
													
														?>	

													<select name="contact_outsite_pole" disabled="disabled">								
															<option value="<?php echo $fila_contact_underground_outsite_manhole['id']; ?>"><?php echo $fila_contact_underground_outsite_manhole['contact']; ?></option>									
													</select>
																					
												</div>																							
												
											
												
											</div>
										
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" style="margin-top:18px; " > CUST. CABLE COUNT </div>
											
												<input type="text" name="cust_cable_count_manhole" class="cust_cable_count_manhole" style="margin-left:26px; width:200px !important; height:37px !important; " disabled="disabled" value="<?php echo $fila_table['cust_cable_count_underground_manhole']; ?>" />
											
												
											</div>
										
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" style="margin-top:18px; " > CUST. TIE LOC TO NET </div>
											
												<input type="text" name="cust_tie_loc_to_net_manhole" class="cust_tie_loc_to_net_manhole" style="margin-left:18px; width:200px !important; height:37px !important; " disabled="disabled" value="<?php echo $fila_table['cust_tie_loc_underground_manhole']; ?>" />
												
											</div>
												
											
											<div class="container_div_select_under_pole" style="margin-top:10px;" >
											
												<textarea name="textarea_scope_underground_manhole" placeholder="SCOPE WORK" style="border:1px solid rgb(240,240,240) !important; width: 94% !important; min-width: 94% !important;  max-width: 94% !important; " disabled="disabled"><?php echo $fila_table['scope_work_underground_manhole']; ?></textarea>
											</div>
											
										
										</div>

									</div>
								
								</div>		
						</div>
					</div>	

	<?php } ?>
		
	<?php if($_POST['tipo'] == "aerial_outsite_manhole_plan" ){ ?>

					<div class="container-general-info">
						<div class="container-isp" >
								<div class="header-info"><strong>AERIAL APPLICATION TASK</strong></div>
							<div class="content_option_modal" >

								<div class="title_content_option_inside" > 
									<div class="div_title_content_option_inside"  >
										AERIAL APPLICATION TASK
									</div>				
								</div>	

										<div class="container_option_under_pole" > 
										
											<div class="container_div_select_under_pole" >
											
												<div class="text_div_select_under_pole" > License Application Needed: </div>
												<div class="div_select_survey" style="margin-top:0px;" >
													
													<select name="company_aerial_manhole" disabled="disabled">
														<?php 
															$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_aerial_manhole']."' AND estado='3' ";
															$resultado_company= mysqli_query($conexion,$consulta_company);
															while($fila_company= mysqli_fetch_array($resultado_company)){
														?>										
															<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
														<?php } ?>										
													</select>
												
												</div>
												<div class="div_select_survey" style="margin-top:0px;" >
													
													<select name="contact_aerial_manhole" disabled="disabled">
														<?php 
															$consulta_company="SELECT * FROM contact WHERE id='".$fila_table['contact_aerial_manhole']."' AND estado='1' ";
															$resultado_company= mysqli_query($conexion,$consulta_company);
															while($fila_company= mysqli_fetch_array($resultado_company)){
														?>										
															<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['contact']; ?></option>
														<?php } ?>										
													</select>
												
												</div>																							
												
											
												
											</div>
										
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" style="margin-top:18px; " > CUST. CABLE COUNT </div>
											
												<input type="text" name="cust_cable_count_aerial_manhole" class="cust_cable_count_manhole" style="margin-left:26px; width:200px !important; height:37px !important; " value="<?php echo $fila_table['cust_cable_count_aerial_manhole']; ?>" disabled="disabled" />
											
												
											</div>
										
											<div class="container_div_select_under_pole" style="margin-top:5px;" >
											
												<div class="text_div_select_under_pole" style="margin-top:18px; " > CUST. TIE LOC TO NET </div>
											
												<input type="text" name="cust_tie_loc_to_net_aerial_manhole" class="cust_tie_loc_to_net_manhole" style="margin-left:18px; width:200px !important; height:37px !important; " value="<?php echo $fila_table['cust_tie_loc_aerial_manhole']; ?>" disabled="disabled" />
												
											</div>
												
											
											<div class="container_div_select_under_pole" style="margin-top:10px;" >
											
												<textarea name="textarea_scope_aerial_manhole" placeholder="SCOPE WORK" style="border:1px solid rgb(240,240,240) !important; width: 94% !important; min-width: 94% !important;  max-width: 94% !important; " disabled="disabled"><?php echo $fila_table['scope_work_aerial_manhole']; ?></textarea>
											</div>
												
											
											
										
										</div>
								
								</div>
							</div>
						</div>	

	<?php } ?>	

					
	<?php if($_POST['tipo'] == "breakout_manhole" ){ ?>
		<div class="container-general-info">
			<div class="container-isp" >
						<div class="header-info"><strong>BREAKOUT APPLICATION TASK</strong></div>
		          <div class="container_div_click_manhole" >
						<div class="title_content_option_inside title_content_option_manhole " > 
							<div class="div_title_content_option_inside"  >
						  		BREAKOUT APPLICATION TASK
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_breakout_manhole" id="si_breakout_manhole" value="si" class="radio_click" disabled="disabled" <?php  if(isset($fila_table)){ echo "checked"; } ?> />
									<label for="si_breakout_manhole" > Yes </label>
									
									<input type="radio" name="si_breakout_manhole" id="no_breakout_manhole" value="no" class="radio_click" disabled="disabled" <?php  if(!isset($fila_table)){ echo "checked"; } ?> />
									<label for="no_breakout_manhole" > No </label>
								</div>
														
							
							</div>
							
						</div>								
						
						
						<div class="container_click_option_inside" <?php  if(isset($fila_table)){ echo "style='height: auto;'"; }?>>
						
							<div class="div_option_pole" > 
							
							<div class="text_option_pole" > MANHOLE LOOK OUT/FIELD SURVEY </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="si_look_out_field_manhole" id="si_look_out_field_manhole" value="si" disabled="disabled" <?php  if($fila_table['look_survey_manhole'] == 'si'){ echo "checked"; } ?> />
									<label for="si_look_out_field_manhole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="si_look_out_field_manhole" id="no_look_out_field_manhole" value="no" disabled="disabled" <?php  if($fila_table['look_survey_manhole'] == 'no'){ echo "checked"; } ?> />
									<label for="no_look_out_field_manhole">No</label>
								</div>
								
							</div>
							
						</div>
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > FINAL MANHOLE & BUTTERFLY  AS-BUILT PLANS </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="si_final_butterfly_manhole" id="si_final_butterfly_manhole" value="si" disabled="disabled" <?php  if($fila_table['final_butterfly_manhole'] == 'si'){ echo "checked"; } ?> />
									<label for="si_final_butterfly_manhole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="si_final_butterfly_manhole" id="no_final_butterfly_manhole" value="no" disabled="disabled" <?php  if($fila_table['final_butterfly_manhole'] == 'no'){ echo "checked"; } ?> />
									<label for="no_final_butterfly_manhole">No</label>
								</div>
								
							</div>
							
						</div>
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > PRELIMINARY/PROPOSED MANHOLE PLANS </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" > 
									<input type="radio" name="si_preliminary_proposed_manhole" id="si_preliminary_proposed_manhole" value="si"  disabled="disabled" <?php  if($fila_table['preliminary_proposed_manhole'] == 'si'){ echo "checked"; } ?> />
									<label for="si_preliminary_proposed_manhole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="si_preliminary_proposed_manhole" id="no_preliminary_proposed_manhole" value="no"  disabled="disabled" <?php  if($fila_table['preliminary_proposed_manhole'] == 'no'){ echo "checked"; } ?>/>
									<label for="no_preliminary_proposed_manhole">No</label>
								</div>
								
							</div>
							
						</div>
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > GIS AS-BUILT FILE TASK </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="si_gis_as_built_file_manhole" id="si_gis_as_built_file_manhole" value="si" disabled="disabled" <?php  if($fila_table['preliminary_proposed_manhole'] == 'si'){ echo "checked"; } ?>/>
									<label for="si_gis_as_built_file_manhole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="si_gis_as_built_file_manhole" id="no_gis_as_built_file_manhole" value="no" disabled="disabled" <?php  if($fila_table['preliminary_proposed_manhole'] == 'no'){ echo "checked"; } ?>/>
									<label for="no_gis_as_built_file_manhole">No</label>
								</div>
								
							</div>
							
						</div>
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > MANHOLE BUTTERFLY PROPOSED DETAILS </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" > 
									<input type="radio" name="si_butterfly_details_manhole" id="si_butterfly_details_manhole" value="si" disabled="disabled" <?php  if($fila_table['gis_as_built_manhole'] == 'si'){ echo "checked"; } ?>/>
									<label for="si_butterfly_details_manhole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="si_butterfly_details_manhole" id="no_butterfly_details_manhole" value="no" disabled="disabled" <?php  if($fila_table['gis_as_built_manhole'] == 'no'){ echo "checked"; } ?>/>
									<label for="no_butterfly_details_manhole">No</label>
								</div>
								
							</div>
							
						</div>
						
						<div class="div_option_pole" > 
							
							<div class="text_option_pole" > OUTSIDE UTILITY APPLICATION </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="si_outside_utility_manhole" id="si_outside_utility_manhole" value="si" disabled="disabled" <?php  if($fila_table['outsite_utility_application_manhole'] == 'si'){ echo "checked"; } ?>/>
									<label for="si_outside_utility_manhole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="si_outside_utility_manhole" id="no_outside_utility_manhole" value="no" disabled="disabled" <?php  if($fila_table['outsite_utility_application_manhole'] == 'no'){ echo "checked"; } ?> />
									<label for="no_outside_utility_manhole">No</label>
								</div>
								
							</div>
							
						</div>
						
						<div class="container_click_option_inside" > 
							
							<div class="text_option_pole" > MANHOLE BUTTERFLY AS-BUILT DETAILS </div>
							<div class="container_radio_option_pole">
								<div class="margin_radio_pole" >
									<input type="radio" name="si_butterfly_as_build_details_manhole" id="si_butterfly_as_build_details_manhole" value="si" disabled="disabled" <?php  if($fila_table['butterfly_as_built_manhole'] == 'si'){ echo "checked"; } ?>/>
									<label for="si_butterfly_as_build_details_manhole" > Yes</label>
								</div>
								
								<div class="margin_radio_pole">
									<input type="radio" name="si_butterfly_as_build_details_manhole" id="no_butterfly_as_build_details_manhol" value="no" disabled="disabled" <?php  if($fila_table['butterfly_as_built_manhole'] == 'no'){ echo "checked"; } ?> />
									<label for="no_butterfly_as_build_details_manhol">No</label>
                                    <input type="hidden" name="code_plan" id="code" value="<?php echo $_SESSION['time_code']; ?>"/>
                                    <input type="hidden" name="type_plan" value="manhole"/>
								</div>
								
							</div>
							
						</div>
					</div>


			</div>
		</div>
	<?php } ?> 

<!-- CIVIL PLANS -->

	<?php if($_POST['tipo'] == "civil_plans" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
						<div class="header-info"><strong>CIVIL PLAN</strong></div>
				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							CIVIL PLAN
						</div>				
					</div>	

							<div class="content_option_pole" style="padding-bottom:0px;" >
								
								<div class="col_izq_option_civil" >
									
									<div class="div_option_civil width_option_civil" > 
										
										<div class="text_option_pole" > CIVIL PROPOSED PLANS & TMP </div>
										<div class="container_radio_option_pole">
											<div class="margin_radio_pole" >
												<input type="radio" name="si_civil_proposed_tmp_civil" id="si_civil_proposed_tmp_civil" value="si" <?php if( $fila_table['proposed_plan_tmp_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<label for="si_civil_proposed_tmp_civil" > Yes</label>
											</div>
											
											<div class="margin_radio_pole">
												<input type="radio" name="si_civil_proposed_tmp_civil" id="no_civil_proposed_tmp_civil" value="no" <?php if( $fila_table['proposed_plan_tmp_civil']=="no" ){ ?> checked <?php } ?> disabled="disabled" />
												<label for="no_civil_proposed_tmp_civil">No</label>
											</div>
											
										</div>
										
									</div>
									
									<div class="div_option_civil width_option_civil" > 
										
										<div class="text_option_pole" > AS-BUILT CIVIL PLAN </div>
										<div class="container_radio_option_pole">
											<div class="margin_radio_pole" >
												<input type="radio" name="si_as_built_civil" id="si_as_built_civil" value="si" <?php if( $fila_table['as_built_plan_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<label for="si_as_built_civil" > Yes</label>
											</div>
											
											<div class="margin_radio_pole">
												<input type="radio" name="si_as_built_civil" id="no_as_built_civil" value="no" <?php if( $fila_table['as_built_plan_civil']=="no" ){ ?> checked <?php } ?> disabled="disabled" />
												<label for="no_as_built_civil">No</label>
											</div>
											
										</div>
										
									</div>
									
									<div class="div_option_civil width_option_civil" > 
										
										<div class="text_option_pole" > TOTAL STATION </div>
										<div class="container_radio_option_pole">
											<div class="margin_radio_pole" >
												<input type="radio" name="si_total_station_civil" id="si_total_station_civil" value="si" <?php if( $fila_table['total_station_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<label for="si_total_station_civil" > Yes</label>
											</div>
											
											<div class="margin_radio_pole">
												<input type="radio" name="si_total_station_civil" id="no_total_station_civil" value="no" <?php if( $fila_table['total_station_civil']=="no" ){ ?> checked <?php } ?> disabled="disabled" />
												<label for="no_total_station_civil">No</label>
											</div>
											
										</div>
										
									</div>
									
									<div class="div_option_civil width_option_civil" > 
										
										<div class="text_option_pole" > PRINT AB PLANS IN MYLAR PAPER </div>
										<div class="container_radio_option_pole">
											<div class="margin_radio_pole" >
												<input type="radio" name="si_print_milar_paper_civil" id="si_print_milar_paper_civil" value="si" <?php if( $fila_table['print_a_b_mylar_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<label for="si_print_milar_paper_civil" > Yes</label>
											</div>
											
											<div class="margin_radio_pole">
												<input type="radio" name="si_print_milar_paper_civil" id="no_print_milar_paper_civil" value="no" <?php if( $fila_table['print_a_b_mylar_civil']=="no" ){ ?> checked <?php } ?> disabled="disabled" />
												<label for="no_print_milar_paper_civil">No</label>
											</div>
											
										</div>
										
									</div>
									
									<div class="div_option_civil width_option_civil" > 
										
										<div class="text_option_pole" > DELIVER MYLAR AB PLANS </div>
										<div class="container_radio_option_pole">
											<div class="margin_radio_pole" >
												<input type="radio" name="si_deliver_mylar_plans_civil" id="si_deliver_mylar_plans_civil" value="si" <?php if( $fila_table['deliver_mylar_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<label for="si_deliver_mylar_plans_civil" > Yes</label>
											</div>
											
											<div class="margin_radio_pole">
												<input type="radio" name="si_deliver_mylar_plans_civil" id="no_deliver_mylar_plans_civil" value="no" <?php if( $fila_table['deliver_mylar_civil']=="no" ){ ?> checked <?php } ?> disabled="disabled" />
												<label for="no_deliver_mylar_plans_civil">No</label>
											</div>
											
										</div>
										
									</div>
										
									<div class="div_option_civil width_option_civil" > 	
										<div class="container_div_select_under_pole" style="margin-top:5px;" >
										
											<div class="text_option_pole" style="margin-top:15px; font-weight:400 !important;" > PROPOSED CIVIL ROUTE LENGTH </div>
										
											<input type="text" name="proposed_route_length_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" value="<?php echo $fila_table['proposed_route_civil']; ?>" disabled="disabled" />
										
											
										</div>					
									</div>		
									<div class="div_option_civil width_option_civil" > 	
										<div class="container_div_select_under_pole" style="margin-top:5px;" >
										
											<div class="text_option_pole" style="margin-top:15px; font-weight:400 !important;" > FROM </div>
										
											<input type="text" name="from_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" value="<?php echo $fila_table['from_civil']; ?>" disabled="disabled" />
										
											
										</div>					
									</div>		
									<div class="div_option_civil width_option_civil" > 	
										<div class="container_div_select_under_pole" style="margin-top:5px;" >
										
											<div class="text_option_pole" style="margin-top:15px;font-weight:400 !important;" > TO </div>
										
											<input type="text" name="to_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" value="<?php echo $fila_table['to_civil']; ?>" disabled="disabled" />
										
											
										</div>					
									</div>	
									
									<div class="separador_civil" ></div>
									
									<div class="div_option_civil width_option_civil" > 	
										<div class="container_div_select_under_pole" style="margin-top:5px;" >
										
									
										<div class="container_div_select_under_pole" style="margin-left:10px;" >
										
											<textarea name="textarea_scope_proposed_civil" placeholder="SCOPE WORK" disabled="disabled"> <?php echo $fila_table['scope_work_civil']; ?></textarea>
										</div>							
										
											
										</div>					
									</div>					
															
							
									
									
									
								</div>	

								<div class="col_izq_option_civil" >
									
									<div class="div_option_civil width_option_civil" > 
										
										<div class="text_option_pole" style="font-weight:400 !important;" > PROPOSED TRENCH DETAIL INFORMATION </div>
								
										
									</div>
									
									<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
										
										<div class="div_check_utility" style="margin-top:7px;" >
											
											<input type="checkbox" name="check_proposed_uno_civil" id="check_proposed_uno_civil" value="si" <?php if( $fila_table['check_uno_trench_detail_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
											<div class="text_div_check_utility" style="margin-left:5px;cursor:pointer;" > <label for="check_proposed_uno_civil" style="cursor:pointer;" > 1-4" </label>  </div>
										</div>	
										
										<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
											<select name="company_proposed_uno_civil" disabled="disabled">
											<?php 
												$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_uno_trench_detail_civil']."' AND estado='3' ";
												$resultado_company= mysqli_query($conexion,$consulta_company);
												while($fila_company= mysqli_fetch_array($resultado_company)){
											?>										
												<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
											<?php } ?>												
											</select>
										</div>	
																					
										
										
									</div>
									
									<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
										
										<div class="div_check_utility" style="margin-top:7px;" >
											
											<input type="checkbox" name="check_proposed_dos_civil" id="check_proposed_dos_civil" value="si" <?php if( $fila_table['check_dos_trench_detail_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
											<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_dos_civil" style="cursor:pointer;" > 2-4"(1 City shadow) </label>  </div>
										</div>	
										
										<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
											<select name="company_proposed_dos_civil" disabled="disabled">
											<?php 
												$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_dos_trench_detail_civil']."' AND estado='3' ";
												$resultado_company= mysqli_query($conexion,$consulta_company);
												while($fila_company= mysqli_fetch_array($resultado_company)){
											?>										
												<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
											<?php } ?>												
											</select>
										</div>	
																					
										
										
									</div>
								
									<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
										
										<div class="div_check_utility" style="margin-top:7px;" >
											
											<input type="checkbox" name="check_proposed_tres_civil" id="check_proposed_tres_civil" value="si" <?php if( $fila_table['check_tres_trench_detail_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
											<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_tres_civil" style="cursor:pointer;" > 1-2" </label>  </div>
										</div>	
										
										<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
											<select name="company_proposed_tres_civil" disabled="disabled">
											<?php 
												$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_tres_trench_detail_civil']."' AND estado='3' ";
												$resultado_company= mysqli_query($conexion,$consulta_company);
												while($fila_company= mysqli_fetch_array($resultado_company)){
											?>										
												<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
											<?php } ?>												
											</select>
										</div>	
																					
										
										
									</div>
								
									<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
										
										<div class="div_check_utility" style="margin-top:7px;" >
											
											<input type="checkbox" name="check_proposed_cuatro_civil" id="check_proposed_cuatro_civil" value="si" <?php if( $fila_table['micro_trench_detail_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
											<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_cuatro_civil" style="cursor:pointer;" > MICRO TRENCH </label>  </div>
										</div>	

										<div class="select_proposed_civil" style="margin-left:0px;margin-right:0px;width:151px;" >
											<select name="company_proposed_cuatro_civil" disabled="disabled">
											<?php 
												$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['company_micro_trench_detail_civil']."' AND estado='3' ";
												$resultado_company= mysqli_query($conexion,$consulta_company);
												while($fila_company= mysqli_fetch_array($resultado_company)){
											?>										
												<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
											<?php } ?>												
											</select>
										</div>	
										<input type="text" name="text_micro_trench" class="input_highway_pole" style="margin-left:0px; width:101px !important;float:left !important;height:35px !important;margin-top:5px !important;" value="<?php echo $fila_table['text_micro_trench_detail_civil']; ?>" disabled="disabled" />																			
										
										
									</div>
								
									<div class="separador_civil" style="margin-top:113px;" ></div>
									
									<div class="div_option_civil width_option_civil"  > 	
										<div class="container_div_select_under_pole" style="margin-top:5px;" >
										
									
										<div class="container_div_select_under_pole" style="margin-left:10px;" >
										
											<textarea name="textarea_scope_installation_civil" placeholder="INSTALLATION'S NOTES" disabled="disabled"><?php echo $fila_table['installations_notes_civil']; ?></textarea>
										</div>							
										
											
										</div>					
									</div>					
																	
									
								</div>	


								
							</div>						
								
					
					
					
					

				</div>
			</div>
		</div>	

	<?php } ?>


	<?php if($_POST['tipo'] == "permit_request_civil_plans" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>PERMIT REQUEST</strong></div>
				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							PERMIT REQUEST
						</div>				
					</div>	

										<div class="container_option_under_pole" > 
										
											<div class="container_div_select_under_pole" >
											
												<div class="text_div_select_under_pole" > TASK REQUEST # </div>
											
												<input type="text" name="task_request_number_telephone_civil" class="input_highway_pole" value="<?php echo $fila_table['task_request_permit_civil']; ?>" disabled="disabled" />
												
												<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
											
												<input type="text" name="date_task_requested_telephone_civil" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_permit_civil']; ?>" disabled="disabled" />
																						
											</div>
											
											<div class="container_div_select_under_pole" >
												
												<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
											
												<input type="text" name="expected_return_date_telephone_civil" class="input_highway_pole" value="<?php echo $fila_table['expected_return_permit_civil']; ?>" disabled="disabled" />
											
												
											</div>
									
								
											
										
										</div>	
										
										<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px; width:95%;" >
										
											
											<div class="div_check_utility" >
												
												<input type="checkbox" name="muni_civil" id="muni_civil" value="si" <?php if( $fila_table['muni_permit_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="muni_civil"  > MUNI CIVIL </label>  </div>
											</div>														
											<div class="div_check_utility" >
												
												<input type="checkbox" name="dcr_civil" id="dcr_civil" value="si"  <?php if( $fila_table['dcr_permit_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="dcr_civil" > DCR </label>  </div>
											</div>													
											<div class="div_check_utility" >
												
												<input type="checkbox" name="nh_dot_civil" id="nh_dot_civil" value="si"  <?php if( $fila_table['nh_dot_permit_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="nh_dot_civil" > NH DOT </label>  </div>
											</div>												
											<div class="div_check_utility" >
												
												<input type="checkbox" name="ct_dot" id="ct_dot" value="si" <?php if( $fila_table['ct_dot_permit_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="ct_dot" > CT DOT </label>  </div>
											</div>										
											<div class="div_check_utility" >
												
												<input type="checkbox" name="highway_civil" id="highway_civil" value="si" <?php if( $fila_table['highway_permit_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="highway_civil" > HIGHWAY </label>  </div>
											</div>									
											<div class="div_check_utility" >
												
												<input type="checkbox" name="mass_dot_civil" id="mass_dot_civil" value="si" <?php if( $fila_table['mass_dot_permit_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="mass_dot_civil" > MASS DOT </label>  </div>
											</div>								
															
										
										</div>
												
										<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px;margin-bottom:20px; width:95%;" >
										
											
															
											<div class="div_check_utility" >
												
												<input type="checkbox" name="me_dot_civil" id="me_dot_civil" value="si" <?php if( $fila_table['me_dot_permit_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="me_dot_civil" > ME DOT </label>  </div>
											</div>						
											<div class="div_check_utility" style="margin-left:15px;" >
												
												<input type="checkbox" name="ny_dot_civil" id="ny_dot_civil" value="si"  <?php if( $fila_table['ny_dot_permit_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="ny_dot_civil" > NY DOT </label>  </div>
											</div>			
											<div class="div_check_utility" >
												
												<input type="checkbox" name="railroad_civil" id="railroad_civil" value="si"  <?php if( $fila_table['railroad_permit_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="railroad_civil" > RAILROAD </label>  </div>
											</div>		
											<div class="div_check_utility" >
												
												<input type="checkbox" name="ri_dot_civil" id="ri_dot_civil" value="si"  <?php if( $fila_table['ri_dot_permit_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="ri_dot_civil" > RI DOT </label>  </div>
											</div>		
											<div class="div_check_utility" >
												
												<input type="checkbox" name="vi_dot_civil" id="vi_dot_civil" value="si"  <?php if( $fila_table['vi_dot_permit_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
												<div class="text_div_check_utility" > <label for="vi_dot_civil" > VI DOT </label>  </div>
											</div>						
										
										</div>
															
								
									<div class="container_option_under_pole" > 
									
										<div class="container_div_select_under_pole" >
										
											<textarea name="textarea_scope_permit_civil" placeholder="SCOPE WORK" disabled="disabled" ><?php echo $fila_table['scope_work_permit_civil']; ?></textarea>
										</div>
										
									
									</div>	
									<div class="separador_civil"  ></div>
									<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px;margin-bottom:20px; width:95%;" >
									
										<div class="container_div_select_under_pole" style="margin-top:5px;" >
										
											<div class="text_div_select_under_pole" > ASSIGNED COMPANY: </div>
											<div class="select_under_pole" style="margin-left:14px;width:151px;" >
												<select name="assigned_company_civil_permit_request_civil" disabled="disabled">
												<?php 
													$consulta_company="SELECT * FROM usuarios WHERE id='".$fila_table['assigned_company_permit_civil']."' AND estado='3' ";
													$resultado_company= mysqli_query($conexion,$consulta_company);
													while($fila_company= mysqli_fetch_array($resultado_company)){
												?>										
													<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['nombre']; ?></option>
												<?php } ?>												
												</select>
											</div>					
																			
										</div>
				
									</div>


				</div>
			</div>
		</div>	

	<?php } ?>


	<?php if($_POST['tipo'] == "mwra_request_civil_plans" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>MWRA CIVIL PLANS TASK NEEDED</strong></div>
				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							MWRA CIVIL PLANS TASK NEEDED
						</div>				
					</div>	

					<div class="container_option_under_pole" > 
					
						<div class="container_div_select_under_pole" >
						
							<div class="text_div_select_under_pole" > TASK REQUEST # </div>
						
							<input type="text" name="task_request_number_mwra_plans_civil" class="input_highway_pole" value="<?php echo $fila_table['task_request_mwra_civil']; ?>" disabled="disabled" />
							
							<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
						
							<input type="text" name="date_task_requested_mwra_plans_civil" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_mwra_civil']; ?>" disabled="disabled" />
							
						
						</div>
						<div class="container_div_select_under_pole" >
							
							<div class="text_div_select_under_pole" style="margin-top:23px;" > EXPECTED RETURN DATE </div>
						
							<input type="text" name="expected_return_date_mwra_plans_civil" class="input_highway_pole" style="margin-top:10px !important ;" value="<?php echo $fila_table['expected_return_mwra_civil']; ?>"  disabled="disabled" />
							
							<div class="text_div_select_under_pole" style="margin-top:23px;" > PROPOSED LENGTH </div>
						
							<input type="text" name="proposed_length_mwra_plans_civil" class="input_highway_pole" style="margin-top:10px !important ;" value="<?php echo $fila_table['proposed_length_mwra_civil']; ?>" disabled="disabled" />
						
						
						</div>
				
						<div class="container_div_select_under_pole" style="margin-top: 10px;" >
						
							<input type="radio" name="existing_utility_file_civil" id="existing_utility_file_civil" value="highway" <?php if( $fila_table['existing_profile_mwra_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled"  />
							<label for="existing_utility_file_civil">EXISTING UTILITY PROFILE </label>
							
						
						</div>	
				
						<div class="container_div_select_under_pole" style="margin-top: 10px;" >
						
							<input type="radio" name="existing_utility_file_civil" id="engineering_stamped_civil" value="engineering" <?php if( $fila_table['engineering_stamped_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
							<label for="engineering_stamped_civil"> ENGINEERING STAMPED PLANS NEEDED </label>
							
						
						</div>						
						
						<div class="container_div_select_under_pole" style="margin-top: 10px;" >
						
							<div class="text_div_select_under_pole" > FROM </div>
						
							<input type="text" name="from_mwra_civil" class="input_highway_pole" value="<?php echo $fila_table['from_mwra_civil']; ?>" disabled="disabled" />
							
						</div>	
						<div class="container_div_select_under_pole" style="margin-top: 10px;" >
						
							<div class="text_div_select_under_pole" > TO </div>
						
							<input type="text" name="to_mwra_civil" class="input_highway_pole"  value="<?php echo $fila_table['to_mwra_civil']; ?>" disabled="disabled" />
							
						</div>						
						
					
					</div>	
					
								
				
				<div class="container_option_under_pole" > 
				
					<div class="container_div_select_under_pole" >
					
						<textarea name="textarea_scope_mrwa_civil" placeholder="SCOPE WORK" disabled="disabled"><?php echo $fila_table['scope_work_mwra_civil']; ?></textarea>
					</div>
					
				
				</div>	
				

				</div>
			</div>
		</div>	

	<?php } ?>

	<?php if($_POST['tipo'] == "railroad_request_civil_plans" ){ ?>


		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>RAILROAD CROSSING PLANS TASK NEEDED</strong></div>
				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							RAILROAD CROSSING PLANS TASK NEEDED
						</div>				
					</div>	

						<div class="container_option_under_pole" > 
						
							<div class="container_div_select_under_pole" >
							
								<div class="text_div_select_under_pole" > TASK REQUEST # </div>
							
								<input type="text" name="task_request_number_railroad_plans_civil" class="input_highway_pole" value="<?php echo $fila_table['task_request_railroad_civil']; ?>" disabled="disabled" />
								
								<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
							
								<input type="text" name="date_task_requested_railroad_plans_civil" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_railroad_civil']; ?>" disabled="disabled" />

							
							</div>
							<div class="container_div_select_under_pole" >
								
								<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
							
								<input type="text" name="expected_return_date_railroad_plans_civil" class="input_highway_pole" value="<?php echo $fila_table['expected_return_railroad_civil']; ?>" disabled="disabled" />
							
								
							</div>
					
					
					
					
							<div class="container_div_select_under_pole" style="margin-top: 10px;" >
							
								<input type="radio" name="railroad_plans_radio_civil" id="railroad_plans_radio_civil" value="highway" <?php if( $fila_table['crossing_proposed_railroad_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
								<label for="railroad_plans_radio_civil">RAILROAD CROSSING PROPOSED PLANS </label>
								
							
							</div>	
					
							<div class="container_div_select_under_pole" style="margin-top: 10px;" >
							
								<input type="radio" name="railroad_plans_radio_civil" id="engineering_stamped_railroad_civil" value="engineering"  <?php if( $fila_table['engineering_stamped_railroad_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
								<label for="engineering_stamped_railroad_civil"> ENGINEERING STAMPED PLANS NEEDED </label>
								
							
							</div>						
							
							<div class="container_div_select_under_pole" style="margin-top: 10px;" >
							
								<div class="text_div_select_under_pole" > FROM </div>
							
								<input type="text" name="from_railroad_civil" class="input_highway_pole" value="<?php echo $fila_table['from_railroad_civil']; ?>" disabled="disabled" />
								
							</div>	
							<div class="container_div_select_under_pole" style="margin-top: 10px;" >
							
								<div class="text_div_select_under_pole" > TO </div>
							
								<input type="text" name="to_railroad_civil" class="input_highway_pole" value="<?php echo $fila_table['to_railroad_civil']; ?>"  disabled="disabled" />
								
							</div>						
							
						
						</div>	

						<div class="container_option_under_pole" > 
						
							<div class="container_div_select_under_pole" >
							
								<textarea name="textarea_scope_railroad_civil" placeholder="SCOPE WORK" disabled="disabled"><?php echo $fila_table['scope_work_railroad_civil']; ?></textarea>
							</div>
							
						
						</div>	


			</div>
		</div>
	</div>	

	<?php } ?>

	<?php if($_POST['tipo'] == "highway_request_civil_plans" ){ ?>

		<div class="container-general-info">
			<div class="container-isp" >
					<div class="header-info"><strong>HIGHWAY TRAFFIC MANAGEMENT PLANS TASK NEEDED</strong></div>

				<div class="content_option_modal" >

					<div class="title_content_option_inside" > 
						<div class="div_title_content_option_inside"  >
							HIGHWAY TRAFFIC MANAGEMENT PLANS TASK NEEDED
						</div>				
					</div>	

						<div class="container_option_under_pole" > 
						
							<div class="container_div_select_under_pole" >
							
								<div class="text_div_select_under_pole" > TASK REQUEST # </div>
							
								<input type="text" name="task_request_number_highway_traffic_civil" class="input_highway_pole" value="<?php echo $fila_table['task_request_highway_civil']; ?>" disabled="disabled" />
								
								<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
							
								<input type="text" name="date_task_requested_highway_traffic_civil" class="input_highway_pole" value="<?php echo $fila_table['date_task_request_highway_civil']; ?>" disabled="disabled" />
																	
							</div>
							<div class="container_div_select_under_pole" style="margin-top:10px;" >										
								<div class="text_div_select_under_pole"  > EXPECTED RETURN DATE </div>
							
								<input type="text" name="expected_return_date_highway_traffic_civil" class="input_highway_pole" value="<?php echo $fila_table['expected_return_highway_civil']; ?>" disabled="disabled" />									
								
							</div>
							
							
							
							
							<div class="container_div_select_under_pole" style="margin-top: 10px;" >
							
								<input type="radio" name="highway_plans_radio_civil" id="highway_plans_radio_civil" value="highway" <?php if( $fila_table['traffic_proposed_highway_civil']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
								<label for="highway_plans_radio_civil">HIGHWAY TRAFFIC MANAGEMENT PROPOSED PLANS </label>
								
							
							</div>	
					
							<div class="container_div_select_under_pole" style="margin-top: 10px;" >
							
								<input type="radio" name="engineering_stamped_highway_traffic_civil" id="engineering_stamped_highway_traffic_civil" value="engineering" <?php if( $fila_table['engineering_stamped_highway']=="si" ){ ?> checked <?php } ?> disabled="disabled" />
								<label for="engineering_stamped_highway_traffic_civil"> ENGINEERING STAMPED PLANS NEEDED </label>
								
							
							</div>						
							
							<div class="container_div_select_under_pole" style="margin-top: 10px;" >
							
								<div class="text_div_select_under_pole" > FROM </div>
							
								<input type="text" name="from_highway_traffic_civil" class="input_highway_pole" value="<?php echo $fila_table['from_highway_civil']; ?>" disabled="disabled"/>
								
							</div>	
							<div class="container_div_select_under_pole" style="margin-top: 10px;" >
							
								<div class="text_div_select_under_pole" > TO </div>
							
								<input type="text" name="to_highway_traffic_civil" class="input_highway_pole" value="<?php echo $fila_table['to_highway_civil']; ?>" disabled="disabled"/>
								
							</div>						
							
						
						</div>	
				
						<div class="container_option_under_pole" > 
						
							<div class="container_div_select_under_pole" >
							
								<textarea name="textarea_scope_highway_traffic_civil" placeholder="SCOPE WORK" disabled="disabled"><?php echo $fila_table['scope_work_highway_civil']; ?></textarea>
							</div>
							
						
						</div>	
						
			</div>
		</div>
	</div>	

	<?php } ?>

<div class="div_line">

	<form name="form_cotizacion" id="form_cotizacion2" method="POST" enctype="multipart/form-data" action="<?php if($_SESSION['id'] == 3){ echo "include\salvar_cotizacion_factura.php";}?>" > <!-- CONTAINER Y FORM -->

		<!-- FORM LADO DEL CLIENTE -->
			<?php  if($_SESSION['id'] == 2){ ?>
				<div class="container_div_mostrar_cotizacion">
					<div class="container_archive_inside div_file_inside vertical_div" >

						<div class="container_archive_inside div_file_inside">
							<span> ENGINERING PLAN QUOTE </span>
							<h1 class="monto_cotizacion"> 
								<?php 

									$consulta_quoted_amount = "SELECT plan_quote from cotizacion where id_request='".$_POST['id_tipo']."'";
									$resultado_quoted_amount = mysqli_query($conexion,$consulta_quoted_amount);
									$fila_quoted_amount = mysqli_fetch_array($resultado_quoted_amount);

										if (mysqli_num_rows($resultado_quoted_amount) > 0) { 
											echo "US$ ".number_format($fila_quoted_amount['plan_quote'],2);

										 }else{ echo "Request still to be quoted";  }
									
								?>		

							</h1>
									

						</div>

						<input type="hidden" id="id_request" value="<?php echo $_POST['id_tipo']; ?>" />
						<input type="hidden" id="id_general_information" value="<?php echo $fila_general['id']; ?>" />

						<div class="container_archive_inside div_file_inside">
							<?php if($fila_estatus_job['estatus_job'] < 2){ ?> <!-- Mostrar el formulario para poder insertar en la data -->
 
								<div id="div_input_numbers">
									<input type="text" class="inputDOCnumber" placeholder="DOC#"/>
									<input type="text" class="inputPOnumber" placeholder="PO#" />

									<?php if (!isset($fila_resultado)){   ?>
										<div class="div_file_inside"     style="width: 22%;position: relative;top: 3px; right: -5px; padding: 0;">

											<div class="text_file_inside" > 
												<div class="icon_file_inside" > </div> 
												<div class="div_text_file_inside"> UPLOAD PO# PDF FILE </div> 

											</div>

							               <input type="file" name="POPDF" id="POPDF" accept="application/pdf" />
							              

							            </div>  

						             <input type="text" id="inputTypeFile" value="" disabled style="background-color:inherit; border: none;width: 22%;" />

						             <?php } ?>

								</div>

								<textarea id="textarea_cotizacion" placeholder="COMMENT"></textarea>
											
						</div>	

						<div class="mensaje_error"> Please complete the fields DOC# y PO#, to continue with the process. </div>
										<a href="<?php 

											$consulta_buscar_cotizacion = "SELECT FILE_PLAN_QUOTE from cotizacion where id_request='".mysqli_real_escape_string($conexion,htmlspecialchars($fila['id']))."'";
											
											$resultado_buscar_cotizacion = mysqli_query($conexion,$consulta_buscar_cotizacion) or die(mysqli_error($conexion));

											$fila_nombre_archivo = mysqli_fetch_array($resultado_buscar_cotizacion);

												if (isset($fila_nombre_archivo)) {
													echo "http://".$_SERVER['HTTP_HOST'].$directorio."archivos/cotizaciones/".$fila_nombre_archivo['FILE_PLAN_QUOTE'];

												}

										 ?>" onclick="" target="_blank">
										 	<input class="div_file_inside div_buttom_viewpdf" type="button" id="sbtViewPDF" value="VIEW PDF QUOTE" title="VIEW_PDF_QUOTE "  /> 

										 </a>

										<?php if (!isset($fila_resultado)){   ?>

											<input class="div_file_inside div_buttom_decline" type="submit" id="sbtDecline" value="DECLINE" /> 

										<?php  }?>
										<input class="div_file_inside div_buttom" type="button" id="sbtAPPROVE" value="APPROVE" />

			<?php }else{ ?> <!-- Mostrar la info si el request fue aprobado -->
						<span> ENGINERING PLAN INVOICE </span>
						<h2> <?php 
							$consulta_invoice_amount = "SELECT plan_invoice from factura where id_request='".$_POST['id_tipo']."'";
							$resultado_invoice_amount = mysqli_query($conexion,$consulta_invoice_amount);
							$fila_invoice_amount = mysqli_fetch_array($resultado_invoice_amount);

								echo "US$ ".number_format($fila_invoice_amount['plan_invoice'],2);

						 ?></h2>

						<div class="linea_horizontal"></div>
							<a href="<?php 

							$consulta_buscar_cotizacion = "SELECT FILE_PLAN_QUOTE from cotizacion where id_request='".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_tipo']))."'";
							
							$resultado_buscar_cotizacion = mysqli_query($conexion,$consulta_buscar_cotizacion) or die(mysqli_error($conexion));

							$fila_nombre_archivo = mysqli_fetch_array($resultado_buscar_cotizacion);

								if (isset($fila_nombre_archivo)) {
									echo "http://".$_SERVER['HTTP_HOST'].$directorio."archivos/cotizaciones/".$fila_nombre_archivo['FILE_PLAN_QUOTE'];

								}

						 ?>" target="_blank">
						 	<input class="div_file_inside div_buttom_viewpdf" type="button" id="sbtViewPDF" value="VIEW PDF QUOTE" title="VIEW_PDF_QUOTE " /> 

						 </a>

						 <a href="<?php 

							$consulta_buscar_factura = "SELECT file_plan_invoice from factura where id_request='".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_tipo']))."'";
							
							$resultado_buscar_factura = mysqli_query($conexion,$consulta_buscar_factura) or die(mysqli_error($conexion));

							$fila_buscar_factura = mysqli_fetch_array($resultado_buscar_factura);

								if (isset($fila_buscar_factura)) {
									echo "http://".$_SERVER['HTTP_HOST'].$directorio."archivos/facturas/".$fila_buscar_factura['file_plan_invoice'];

								}

						 ?>" target="_blank">
							<input class="div_file_inside div_buttom" type="button" id="sbtView" value="VIEW PDF INVOICE" />

						</a>
					<?php } ?>	

				</div>

			</div>

		<?php }else if($_SESSION['id'] == 3){ ?>

		<!-- FORM LADO DEL CONTRATISTA -->
				<div class="container_div_mostrar_cotizacion">
					<div class="container_archive_inside div_file_inside vertical_div" >
						<div class="container_archive_inside div_file_inside">

							<span> ENGINERING PLAN QUOTE </span>

								<?php  /* IMPRIMIR COTIZACION SI EXISTE */

									$consulta_quoted_amount = "SELECT plan_quote from cotizacion where id_request='".$_POST['id_tipo']."'";

									$resultado_quoted_amount = mysqli_query($conexion,$consulta_quoted_amount);
									$fila_quoted_amount = mysqli_fetch_array($resultado_quoted_amount);					

									if ($fila_quoted_amount['plan_quote']) { ?>

										<h2> US$ <?php echo number_format($fila_quoted_amount['plan_quote'],2); ?> </h2>	

										<?php   if ($fila_estatus_job['estatus_job'] != 2){ ?>
											<input type="hidden" id="alertarCambioValue" value="si" ></input>

										<?php } ?>

									<?php } ?>
									
							
							<?php if ($fila_estatus_job['estatus_job'] < 2) {  ?> <!-- MOSTRAR FORMULARIO INSERTAR COTIZACION -->

								<input type="number" name="inputQuoteValue" class="inputQuoteValue" placeholder="QUOTE" min="0" />

									<div class="button_upload">
										<label for="fileUploadInput">
											<img src="images/quote_03.png" />

										</label>

										<input id="<?php echo $fila_quoted_amount['plan_quote']?"fileUploadInput2":"fileUploadInput";?>" name="<?php echo $fila_quoted_amount['plan_quote']?"fileUploadInput2":"fileUploadInput";?>" type="file" accept="application/pdf"/>
										<input type="text" id="filename" disabled="disabled" />
									</div>

									<!-- SECCION DEL COMENTARIO -->

										<?php if (isset($fila_comentario)) { ?>
											THE CUSTOMER HAS <strong> <?php echo $fila_comentario['tipo'] ?></strong> THIS PLAN. <br />

											COMMENT: <strong><?php echo $fila_comentario['comentario'] ?> </strong> DATE: <i><?php echo $fila_comentario['date'] ?></i>

										<?php  } ?>
									<div class="linea_horizontal"></div>
										<input type="hidden" name="id_request" id="id_request" value="<?php echo $_POST['id_tipo']; ?>" />
										<input type="hidden" name="id_company" id="id_company" value="<?php echo $_SESSION['id']; ?>" />
										<input type="hidden" name="tipo_solicitud" id="tipo_solicitud" value="QUOTE" />

									<div class="mensaje_error"> Please complete the fields to continue with the process. </div>

									<input name="button_submit"class="div_file_inside div_buttom" type="submit" id="sbtSave" value="<?php if ($fila_quoted_amount) { echo 'CHANGE'; }else{	echo 'SAVE'; }?>" />

							<?php  }else{ ?> <!-- MOSTRAR FORMULARIO INSERTAR INVOICE -->

								<?php if($_POST['siDiseñador'] == "diseñador"){   ?>

									<!-- FORMULARIO INVOICE-->
									
										<span> ENGINERING PLAN INVOICE </span>
										

										<h2> <?php 
											$consulta_invoice_amount = "SELECT plan_invoice from factura where id_request='".$_POST['id_tipo']."'";
											$resultado_invoice_amount = mysqli_query($conexion,$consulta_invoice_amount);
											$fila_invoice_amount = mysqli_fetch_array($resultado_invoice_amount);

												echo "US$ ".number_format($fila_invoice_amount['plan_invoice'],2);

										 ?></h2>

										<div class="linea_horizontal"></div>

											<a href="<?php 
											$consulta_buscar_cotizacion = "SELECT FILE_PLAN_QUOTE from cotizacion where id_request='".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_tipo']))."'";
											
											$resultado_buscar_cotizacion = mysqli_query($conexion,$consulta_buscar_cotizacion) or die(mysqli_error($conexion));

											$fila_nombre_archivo = mysqli_fetch_array($resultado_buscar_cotizacion);

												if (isset($fila_nombre_archivo)) {
													echo "http://".$_SERVER['HTTP_HOST'].$directorio."archivos/cotizaciones/".$fila_nombre_archivo['FILE_PLAN_QUOTE'];

												}

										 ?>" target="_blank">
										 	<input class="div_file_inside div_buttom_viewpdf" type="button" id="sbtViewPDF" value="VIEW PDF QUOTE" title="VIEW_PDF_QUOTE " /> 

										 </a>

										 <a href="<?php 
											$consulta_buscar_factura = "SELECT file_plan_invoice from factura where id_request='".mysqli_real_escape_string($conexion,htmlspecialchars($_POST['id_tipo']))."'";
											
											$resultado_buscar_factura = mysqli_query($conexion,$consulta_buscar_factura) or die(mysqli_error($conexion));

											$fila_buscar_factura = mysqli_fetch_array($resultado_buscar_factura);

												if (isset($fila_buscar_factura)) {
													echo "http://".$_SERVER['HTTP_HOST'].$directorio."archivos/facturas/".$fila_buscar_factura['file_plan_invoice'];

												}

										 ?>" target="_blank">
											<input class="div_file_inside div_buttom" type="button" id="sbtView" value="VIEW PDF INVOICE" />

										</a>

								<?php }else{ ?> <!-- TERMINA CONDICION MOSTRAR FORMULARIOS CONTRATISTA DISEÑADOR -->

									<span> ENGINERING PLAN INVOICE </span>

									 <?php /* MOSTRAR CANTIDAD SI YA SE HA ENVIADO UN INVOICE, PARA QUE TAMBIEN EL PUEDA MODIFICARLO */
									$consulta_invoice_amount = "SELECT plan_invoice from factura where id_request='".$_POST['id_tipo']."'";
									$resultado_invoice_amount = mysqli_query($conexion,$consulta_invoice_amount);
									$fila_invoice_amount = mysqli_fetch_array($resultado_invoice_amount); 
									
										if ($fila_invoice_amount) { ?>

											<h2> 
												<?php  echo "US$ ".number_format($fila_invoice_amount['plan_invoice'],2);?>

											</h2>	
												<input type="hidden" id="alertarCambioValue" value="si" ></input>


									<?php	} ?>

										<input type="number" name="inputQuoteValue" class="inputQuoteValue" placeholder="INVOICE" min="0" />

										<div class="button_upload">
											<label for="fileUploadInput">
												<img src="images/quote.jpg" />

											</label>

											<input id="<?php echo $fila_invoice_amount?"fileUploadInput2":"fileUploadInput";?>" name="<?php echo $fila_invoice_amount?"fileUploadInput2":"fileUploadInput";?>" type="file" accept="application/pdf"/>
											<input type="text" id="filename" disabled="disabled" />
										</div>

										<!-- SECCION DEL COMENTARIO-->

											<?php if (isset($fila_comentario) && $fila_estatus_job['estatus_job'] < 2) { ?>
												THE CUSTOMER HAS <strong> <?php echo $fila_comentario['tipo'] ?></strong> THIS PLAN. <br />

												COMMENT: <strong><?php echo $fila_comentario['comentario'] ?> </strong> DATE: <i><?php echo $fila_comentario['date'] ?></i>

											<?php  } ?>

									<div class="linea_horizontal"></div>
										<input type="hidden" name="id_request" id="id_request" value="<?php echo $_POST['id_tipo']; ?>" />
										<input type="hidden" name="id_company" id="id_company" value="<?php echo $_SESSION['id']; ?>" />
										<input type="hidden" name="tipo_solicitud" id="tipo_solicitud" value="INVOICE" />

									<div class="mensaje_error"> Please complete the fields to continue with the process. </div>

									<input name="button_submit"class="div_file_inside div_buttom" type="submit" id="sbtSave" value="<?php if ($fila_invoice_amount){ echo "CHANGE";}else{ echo "SAVE";}  ?>" />
							
							<?php } ?> <!-- TERMINA CONDICION MOSTRAR FORMULARIOS CONTRATISTA SEGUN -->
						</div>

					</div>

				</div>

			<?php } ?>

		<?php } ?>
	</form>
		
</div>

    <br />

</div>

</div>

<div class="fondo_list_job2">
	<div id="vnImagenesCanva">
		<div class="headerShowImageCanva">
			<strong>Displaying the </strong>

		</div>

		<img id="imgFoto" />
		<img id="imgCanva" />
		<img id="imgCanva2" style="position: relative; visibility: hidden;" />


	</div>
</div>


<script>

	$(document).ready(function(){
		 $('input').iCheck({
			checkboxClass: 'icheckbox_square',
			radioClass: 'iradio_square',
			increaseArea: '20%' // optional
		  });

		 	//////////////////////////////////////////////////////////////////////
			// ESTE CODIGO ES PARA MOSTRAR LA VENTANA DE LAS IMAGENES DEL ATTACH
			//////////////////////////////////////////////////////////////////////

				$(".container_attach_info").click(function(){

					var idNames = $(".container_attach_info").attr("value").split("_");

						$(".headerShowImageCanva").find("strong").append(idNames[0]+" AND "+idNames[1]);

						// IMG FOTO
							$("#imgFoto").attr("src","archivos/attach/"+idNames[0]);

							$("#imgFoto").css({
								"position": "relative",
								"top": 0,
								"left": 0

							});

						// IMG CANVA
							$("#imgCanva").attr("src","archivos/canvas/"+idNames[1]);
							$("#imgCanva2").attr("src","archivos/canvas/"+idNames[1]);

							$("#imgCanva").css({
								"position": "absolute",
								"top": "37px",
								"left": 0
								
							});

					$(".fondo_list_job2").fadeIn(100);

					$(".fondo_list_job").animate({scrollTop: 0},'slow');
				
					$("#vnImagenesCanva").fadeIn(100);

				});	


					$(".fondo_list_job2").click(function(){
						alert("asdfsdf");
						$(".vnImagenesCanva").fadeOut(100);
						$(".fondo_list_job2").fadeOut(100);

					});

		 	///////////////////////////////////////////////////////////////////////
			// ESTE CODIGO ES PARA MOSTRAR EL NOMBRE DEL ARCHIVO EN EL INPUT
			//////////////////////////////////////////////////////////////////////
				$('#fileUploadInput').change(function() {
					var filename = $(this).val();
				    var lastIndex = filename.lastIndexOf("\\");

					    if (lastIndex >= 0) {
					        filename = filename.substring(lastIndex + 1);

					    }

				    $('#filename').val(filename);

				});


				$('#fileUploadInput2').change(function() {
					var filename = $(this).val();
				    var lastIndex = filename.lastIndexOf("\\");

					    if (lastIndex >= 0) {
					        filename = filename.substring(lastIndex + 1);

					    }

				    $('#filename').val(filename);

				});


				$('#POPDF').change(function() {
					var filename = $(this).val();
				    var lastIndex = filename.lastIndexOf("\\");

					    if (lastIndex >= 0) {
					        filename = filename.substring(lastIndex + 1);

					    }

				    $('#inputTypeFile').val(filename);

				});

			///////////////////////////////////////////////////////////////////////
			// ESTE CODIGO ES PARA VERIFICAR QUE REALMENTE DESEA SUBIR UNA COTIZACION
			//////////////////////////////////////////////////////////////////////
				$('#fileUploadInput2').click(function() {
					var confirmacion_cambiar = confirm("¿Are you sure you want to change the .pdf quote?");
				  		
				  		if(confirmacion_cambiar){
				  				// DEJA QUE LA PAGINA CONTINUE LA EJECUCION

				  		}else{
				  			return false;
				  		}

				});

			///////////////////////////////////////////////////////////////////////
			// BOTON DECLINE
			//////////////////////////////////////////////////////////////////////
		    	$("#sbtDecline").click(function(e) {
		    		var tipo_solicitado = $("#sbtDecline").val();
		    		var declino = confirm("ARE YOU SURE YOU WANT TO DECLINE THIS QUOTE ?");
		    		var comentarioText = $("#textarea_cotizacion").val();
		    		var id_request = $("#id_request").val();

			    		if(declino){
							$(".exito_insert").fadeIn(200);	

								$.ajax({
									type: 'POST',
									url: "http://"+hostname+ruta+"include/evalua_aprobacion_declinacion.php",
									data:{id_request:id_request,tipo:tipo_solicitado,comentario:comentarioText},
									success: function(data) {   
									$(".exito_insert").append(data);
										if($(".ejecuta_cotizacion").attr("id") == "cotizado"){
											window.location.reload();
											$(".loader_request").fadeOut(0);
											$(".exito_insert").fadeIn(100);


										}

									}

								});

						
						}

		    	});  

		    ///////////////////////////////////////////////////////////////////////
			// BOTON APPROVE
			//////////////////////////////////////////////////////////////////////
		    	$("#sbtAPPROVE").click(function(e) {
		    		var PO_VALUE = ($(".inputPOnumber").val() == "")?"vacio":($(".inputPOnumber").val());
		    		var DOC_VALUE = ($(".inputDOCnumber").val() == "")?"vacio":$(".inputDOCnumber").val();
		    		var tipo_solicitado = "APPROVE";
		    		var comentarioText = $("#textarea_cotizacion").val();
		    		var filenameInput = $("#inputTypeFile").val();
		    		var PO_PDF = $("#POPDF").get(0).files[0];


						if(PO_VALUE != "vacio" && DOC_VALUE != "vacio" && filenameInput != ""){
							$(".exito_insert").fadeIn(200);

							var id_request = $("#id_request").val();
							var id_general_information = $("#id_general_information").val();

									var datosFormularios = new FormData();

						    		var elements = {
						    			id_request:id_request,
						    			id_general_information:id_general_information,
						    			PONum:PO_VALUE, 
						    			DOCNum:DOC_VALUE,
						    			tipo:tipo_solicitado,
						    			comentario:comentarioText,
						    			POPDF: PO_PDF

						    		};
						    		
						    		for (llaves in elements) {
						    			datosFormularios.append(llaves,elements[llaves]);

						    		}			    		

								$.ajax({
									type: 'POST',
									url: "http://"+hostname+ruta+"include/evalua_aprobacion_declinacion.php",
									data: datosFormularios,
									processData: false,
      								contentType: false,
									success: function(data) {  
										$(".exito_insert").append(data);
											if($(".ejecuta_cotizacion").attr("id") == "cotizado"){
												$(".loader_request").fadeOut(0);
												$(".text_exito_insert").fadeIn(100);

											}

									}

								});

						}else{
							$(".mensaje_error").addClass("mostrar");
							e.preventDefault();
				
						}

								
				});

		     ///////////////////////////////////////////////////////////////////////
			// BOTON SAVE
			//////////////////////////////////////////////////////////////////////
				$("#sbtSave").click(function(e) {
					var input_quote = ($(".inputQuoteValue").val() == "")?"vacio":$(".inputQuoteValue").val();
					var file_name = $("#fileUploadInput").val();
					var button_submit_value = $("#sbtSave").val();
					var alertarCambio = $("#alertarCambioValue").val()?true:false

						
						if(input_quote != "vacio" && button_submit_value == "CHANGE"){
							// CONTINUA CON SU EJECUCION NORMAL PARA MODIFICAR
							
						}else if (input_quote != "vacio"){
							if (!file_name) { 
								$(".mensaje_error").empty();
								$(".mensaje_error").append("PLEASE UPLOAD THE FILE OF THE CLIENT");
								$(".mensaje_error").addClass("mostrar");
								e.preventDefault();
							}


						}else if (input_quote == "vacio") {
							$(".mensaje_error").addClass("mostrar");
							e.preventDefault();

						}

						
							if (alertarCambio){

								if(input_quote != "vacio"){
									var confirmacion = confirm("¿Are you sure do you want to modify this quote value ?");
									
										if (confirmacion) {
											// CONTINUA CON LA EJECUCION NORMAL

										}else{
											return false;

										}

								}

							}

							
				});

				
			}); // TERMINA EL DOCUMENT.READY
</script>