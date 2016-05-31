<?php 
    include("../confi/conf.inc.php");
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
?>	
<div class="content_form content_oculto"  id="content_test_plan" >

			<div class="container_form" >

				<div class="center_form" >

					<div class="title_center_form" > CIVIL PLAN TASK</div>		
					
				
					
				</div>
				
			</div>

			<div class="container_form" >

				<div class="center_form" >

					<div class="content_option_pole" style="padding-bottom:0px;" >
						
						<div class="col_izq_option_civil" >
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > CIVIL PROPOSED PLANS & TMP </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_civil_proposed_tmp_civil" id="si_civil_proposed_tmp_civil" value="si" />
										<label for="si_civil_proposed_tmp_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_civil_proposed_tmp_civil" id="no_civil_proposed_tmp_civil" value="no" />
										<label for="no_civil_proposed_tmp_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > AS-BUILT CIVIL PLAN </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_as_built_civil" id="si_as_built_civil" value="si" />
										<label for="si_as_built_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_as_built_civil" id="no_as_built_civil" value="no" />
										<label for="no_as_built_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > TOTAL STATION </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_total_station_civil" id="si_total_station_civil" value="si" />
										<label for="si_total_station_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_total_station_civil" id="no_total_station_civil" value="no" />
										<label for="no_total_station_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > PRINT AB PLANS IN MYLAR PAPER </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_print_milar_paper_civil" id="si_print_milar_paper_civil" value="si" />
										<label for="si_print_milar_paper_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_print_milar_paper_civil" id="no_print_milar_paper_civil" value="no" />
										<label for="no_print_milar_paper_civil">No</label>
									</div>
									
								</div>
								
							</div>
							
							<div class="div_option_civil width_option_civil" > 
								
								<div class="text_option_pole" > DELIVER MYLAR AB PLANS </div>
								<div class="container_radio_option_pole">
									<div class="margin_radio_pole" >
										<input type="radio" name="si_deliver_mylar_plans_civil" id="si_deliver_mylar_plans_civil" value="si" />
										<label for="si_deliver_mylar_plans_civil" > Yes</label>
									</div>
									
									<div class="margin_radio_pole">
										<input type="radio" name="si_deliver_mylar_plans_civil" id="no_deliver_mylar_plans_civil" value="no" />
										<label for="no_deliver_mylar_plans_civil">No</label>
									</div>
									
								</div>
								
							</div>
								
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_option_pole" style="margin-top:15px; font-weight:400 !important;" > PROPOSED CIVIL ROUTE LENGTH </div>
								
									<input type="text" name="proposed_route_length_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" />
								
									
								</div>					
							</div>		
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_option_pole" style="margin-top:15px; font-weight:400 !important;" > FROM </div>
								
									<input type="text" name="from_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" />
								
									
								</div>					
							</div>		
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_option_pole" style="margin-top:15px;font-weight:400 !important;" > TO </div>
								
									<input type="text" name="to_civil" class="input_highway_pole" style="margin-left:17px; width:101px !important;float:right !important;" />
								
									
								</div>					
							</div>	
							
							<div class="separador_civil" ></div>
							
							<div class="div_option_civil width_option_civil" > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
							
								<div class="container_div_select_under_pole" style="margin-left:10px;" >
								
									<textarea name="textarea_scope_proposed_civil" placeholder="SCOPE WORK" ></textarea>
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
									
									<input type="checkbox" name="check_proposed_uno_civil" id="check_proposed_uno_civil" value="si" />
									<div class="text_div_check_utility" style="margin-left:5px;cursor:pointer;" > <label for="check_proposed_uno_civil" style="cursor:pointer;" > 1-4" </label>  </div>
								</div>	
								
								<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
									<select name="company_proposed_uno_civil">
										<option value="" > Select </option>
									<?php 
										$consulta_company="SELECT * FROM company WHERE estado='1' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										while($fila_company= mysqli_fetch_array($resultado_company)){
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
									<?php } ?>												
									</select>
								</div>	
																			
								
								
							</div>
							
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_dos_civil" id="check_proposed_dos_civil" value="si" />
									<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_dos_civil" style="cursor:pointer;" > 2-4"(1 City shadow) </label>  </div>
								</div>	
								
								<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
									<select name="company_proposed_dos_civil">
										<option value="" > Select </option>
									<?php 
										$consulta_company="SELECT * FROM company WHERE estado='1' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										while($fila_company= mysqli_fetch_array($resultado_company)){
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
									<?php } ?>												
									</select>
								</div>	
																			
								
								
							</div>
						
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_tres_civil" id="check_proposed_tres_civil" value="si" />
									<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_tres_civil" style="cursor:pointer;" > 1-2" </label>  </div>
								</div>	
								
								<div class="select_proposed_civil" style="margin-left:14px;width:151px;" >
									<select name="company_proposed_tres_civil">
										<option value="" > Select </option>
									<?php 
										$consulta_company="SELECT * FROM company WHERE estado='1' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										while($fila_company= mysqli_fetch_array($resultado_company)){
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
									<?php } ?>												
									</select>
								</div>	
																			
								
								
							</div>
						
							<div class="div_option_civil width_option_civil" style="margin-left:20px;" > 
								
								<div class="div_check_utility" style="margin-top:7px;" >
									
									<input type="checkbox" name="check_proposed_cuatro_civil" id="check_proposed_cuatro_civil" value="si" />
									<div class="text_div_check_utility" style="margin-left:5px; cursor:pointer;" > <label for="check_proposed_cuatro_civil" style="cursor:pointer;" > MICRO TRENCH </label>  </div>
								</div>	
								<input type="text" name="text_micro_trench" class="input_highway_pole" style="margin-left:0px; width:101px !important;float:left !important;height:35px !important;" />
								<div class="select_proposed_civil" style="margin-left:0px;margin-right:0px;width:151px;" >
									<select name="company_proposed_cuatro_civil">
										<option value="" > Select </option>
									<?php 
										$consulta_company="SELECT * FROM company WHERE estado='1' ";
										$resultado_company= mysqli_query($conexion,$consulta_company);
										while($fila_company= mysqli_fetch_array($resultado_company)){
									?>										
										<option value="<?php echo $fila_company['id']; ?>"><?php echo $fila_company['company']; ?></option>
									<?php } ?>												
									</select>
								</div>	
																			
								
								
							</div>
						
							<div class="separador_civil" style="margin-top:113px;" ></div>
							
							<div class="div_option_civil width_option_civil"  > 	
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
							
								<div class="container_div_select_under_pole" style="margin-left:10px;" >
								
									<textarea name="textarea_scope_installation_civil" placeholder="INSTALLATION'S NOTES" ></textarea>
								</div>							
								
									
								</div>					
							</div>					
															
							
						</div>	


						
					</div>						
			
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								PERMIT REQUEST
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_permit_request_manhole" id="si_permit_request_manhole" value="si" class="radio_click" />
									<label for="si_permit_request_manhole" > Yes </label>
									
									<input type="radio" name="si_permit_request_manhole" id="no_permit_request_manhole" value="no" class="radio_click" checked />
									<label for="no_permit_request_manhole" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_telephone_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_telephone_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_telephone_civil" class="input_highway_pole" />
									
									
										
									
										
									</div>
							
						
									
								
								</div>	
								
								<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px; width:95%;" >
								
									
									<div class="div_check_utility" >
										
										<input type="checkbox" name="muni_civil" id="muni_civil" value="si" />
										<div class="text_div_check_utility" > <label for="muni_civil" > MUNI CIVIL </label>  </div>
									</div>														
									<div class="div_check_utility" >
										
										<input type="checkbox" name="dcr_civil" id="dcr_civil" value="si" />
										<div class="text_div_check_utility" > <label for="dcr_civil" > DCR </label>  </div>
									</div>													
									<div class="div_check_utility" >
										
										<input type="checkbox" name="nh_dot_civil" id="nh_dot_civil" value="si" />
										<div class="text_div_check_utility" > <label for="nh_dot_civil" > NH DOT </label>  </div>
									</div>												
									<div class="div_check_utility" >
										
										<input type="checkbox" name="ct_dot" id="ct_dot" value="si" />
										<div class="text_div_check_utility" > <label for="ct_dot" > CT DOT </label>  </div>
									</div>										
									<div class="div_check_utility" >
										
										<input type="checkbox" name="highway_civil" id="highway_civil" value="si" />
										<div class="text_div_check_utility" > <label for="highway_civil" > HIGHWAY </label>  </div>
									</div>									
									<div class="div_check_utility" >
										
										<input type="checkbox" name="mass_dot_civil" id="mass_dot_civil" value="si" />
										<div class="text_div_check_utility" > <label for="mass_dot_civil" > MASS DOT </label>  </div>
									</div>								
													
								
								</div>
										
								<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px;margin-bottom:20px; width:95%;" >
								
									
													
									<div class="div_check_utility" >
										
										<input type="checkbox" name="me_dot_civil" id="me_dot_civil" value="si" />
										<div class="text_div_check_utility" > <label for="me_dot_civil" > ME DOT </label>  </div>
									</div>						
									<div class="div_check_utility" style="margin-left:15px;" >
										
										<input type="checkbox" name="ny_dot_civil" id="ny_dot_civil" value="si" />
										<div class="text_div_check_utility" > <label for="ny_dot_civil" > NY DOT </label>  </div>
									</div>			
									<div class="div_check_utility" >
										
										<input type="checkbox" name="railroad_civil" id="railroad_civil" value="si" />
										<div class="text_div_check_utility" > <label for="railroad_civil" > RAILROAD </label>  </div>
									</div>		
									<div class="div_check_utility" >
										
										<input type="checkbox" name="ri_dot_civil" id="ri_dot_civil" value="si" />
										<div class="text_div_check_utility" > <label for="ri_dot_civil" > RI DOT </label>  </div>
									</div>		
									<div class="div_check_utility" >
										
										<input type="checkbox" name="vi_dot_civil" id="vi_dot_civil" value="si" />
										<div class="text_div_check_utility" > <label for="vi_dot_civil" > VI DOT </label>  </div>
									</div>						
								
								</div>
													
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_permit_civil" placeholder="SCOPE WORK" ></textarea>
								</div>
								
							
							</div>	
							<div class="separador_civil"  ></div>
							<div class="container_div_select_under_pole" style="margin-top:20px;margin-left:20px;margin-bottom:20px; width:95%;" >
							
								<div class="container_div_select_under_pole" style="margin-top:5px;" >
								
									<div class="text_div_select_under_pole" > ASSIGNED COMPANY: </div>
									<div class="select_under_pole" style="margin-left:14px;width:151px;" >
										<select name="assigned_company_civil_permit_request_civil">
											<option value="" > Select </option>
										<?php 
											$consulta_company="SELECT * FROM company WHERE estado='1' ";
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
				
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								MWRA CIVIL PLANS TASK NEEDED
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_mwra_plans_civil" id="si_mwra_plans_civil" value="si" class="radio_click" />
									<label for="si_mwra_plans_civil" > Yes </label>
									
									<input type="radio" name="si_mwra_plans_civil" id="no_mwra_plans_civil" value="no" class="radio_click" checked />
									<label for="no_mwra_plans_civil" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_mwra_plans_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_mwra_plans_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_mwra_plans_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" style="margin-top:23px;" > PROPOSED LENGTH </div>
									
										<input type="text" name="proposed_length_mwra_plans_civil" class="input_highway_pole" style="margin-top:10px !important ;" />
									
									
										
									
										
									</div>
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="existing_utility_file_civil" id="existing_utility_file_civil" value="highway" />
										<label for="existing_utility_file_civil">EXISTING UTILITY PROFILE </label>
										
									
									</div>	
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="existing_utility_file_civil" id="engineering_stamped_civil" value="engineering" />
										<label for="engineering_stamped_civil"> ENGINEERING STAMPED PLANS NEEDED </label>
										
									
									</div>						
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > FROM </div>
									
										<input type="text" name="from_mwra_civil" class="input_highway_pole" />
										
									</div>	
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > TO </div>
									
										<input type="text" name="to_mwra_civil" class="input_highway_pole" />
										
									</div>						
									
								
								</div>	
								
											
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_mrwa_civil" placeholder="SCOPE WORK" ></textarea>
								</div>
								
							
							</div>	
							
												
							
						</div>
									
				
					
				</div>
				
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								RAILROAD CROSSING PLANS TASK NEEDED
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_railroad_plans_civil" id="si_railroad_plans_civil" value="si" class="radio_click" />
									<label for="si_railroad_plans_civil" > Yes </label>
									
									<input type="radio" name="si_railroad_plans_civil" id="no_railroad_plans_civil" value="no" class="radio_click" checked />
									<label for="no_railroad_plans_civil" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_railroad_plans_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_railroad_plans_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_railroad_plans_civil" class="input_highway_pole" />
									
										
									</div>
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="railroad_plans_radio_civil" id="railroad_plans_radio_civil" value="highway" />
										<label for="railroad_plans_radio_civil">RAILROAD CROSSING PROPOSED PLANS </label>
										
									
									</div>	
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="railroad_plans_radio_civil" id="engineering_stamped_railroad_civil" value="engineering" />
										<label for="engineering_stamped_railroad_civil"> ENGINEERING STAMPED PLANS NEEDED </label>
										
									
									</div>						
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > FROM </div>
									
										<input type="text" name="from_railroad_civil" class="input_highway_pole" />
										
									</div>	
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > TO </div>
									
										<input type="text" name="to_railroad_civil" class="input_highway_pole" />
										
									</div>						
									
								
								</div>	
								
											
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_railroad_civil" placeholder="SCOPE WORK" ></textarea>
								</div>
								
							
							</div>	
							
												
							
						</div>
									
				
					
				</div>
				
					<div class="content_option_inside" >
						
						<div class="title_content_option_inside" > 
							<div class="div_title_content_option_inside"  >
								HIGHWAY TRAFFIC MANAGEMENT PLANS TASK NEEDED
								
								<div class="div_option_radio_inside" >
									<input type="radio" name="si_highway_traffic_civil" id="si_highway_traffic_civil" value="si" class="radio_click" />
									<label for="si_highway_traffic_civil" > Yes </label>
									
									<input type="radio" name="si_highway_traffic_civil" id="no_highway_traffic_civil" value="no" class="radio_click" checked />
									<label for="no_highway_traffic_civil" > No </label>
								</div>
														
							
							</div>
							
						</div>
						
						<div class="container_click_option_inside" >
						
								<div class="container_option_under_pole" > 
								
									<div class="container_div_select_under_pole" >
									
										<div class="text_div_select_under_pole" > TASK REQUEST # </div>
									
										<input type="text" name="task_request_number_highway_traffic_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > DATE TASK REQUESTED </div>
									
										<input type="text" name="date_task_requested_highway_traffic_civil" class="input_highway_pole" />
										
										<div class="text_div_select_under_pole" > EXPECTED RETURN DATE </div>
									
										<input type="text" name="expected_return_date_highway_traffic_civil" class="input_highway_pole" />
									
										
									</div>
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="highway_plans_radio_civil" id="highway_plans_radio_civil" value="highway" />
										<label for="highway_plans_radio_civil">HIGHWAY TRAFFIC MANAGEMENT PROPOSED PLANS </label>
										
									
									</div>	
							
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<input type="radio" name="highway_plans_radio_civil" id="engineering_stamped_highway_traffic_civil" value="engineering" />
										<label for="engineering_stamped_highway_traffic_civil"> ENGINEERING STAMPED PLANS NEEDED </label>
										
									
									</div>						
									
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > FROM </div>
									
										<input type="text" name="from_highway_traffic_civil" class="input_highway_pole" />
										
									</div>	
									<div class="container_div_select_under_pole" style="margin-top: 10px;" >
									
										<div class="text_div_select_under_pole" > TO </div>
									
										<input type="text" name="to_highway_traffic_civil" class="input_highway_pole" />
										
									</div>						
									
								
								</div>	
								
											
						
							<div class="container_option_under_pole" > 
							
								<div class="container_div_select_under_pole" >
								
									<textarea name="textarea_scope_highway_traffic_civil" placeholder="SCOPE WORK" ></textarea>
								</div>
								
							
							</div>	
							
												
							
						</div>
										
															
							
				
					
				</div>
						
					<div class="div_file_inside" >
						<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside"> UPLOAD REDLINE PAGE </div> </div>
						<input type="file" name="redline_page_civil" />
					</div>	
					<div class="div_file_inside" style="margin-left: 30px;" >
						<div class="text_file_inside" > <div class="icon_file_inside" > </div> <div class="div_text_file_inside"> UPLOAD REDLINE FILE </div> </div>
						<input type="file" name="redline_file_civil" />
					</div>					
				
			</div>



			
			
			
			
			
			
			

			
			<script>
				$(document).ready(function(){
				
				 $('input').iCheck({
					checkboxClass: 'icheckbox_square',
					radioClass: 'iradio_square',
					increaseArea: '20%' // optional
				  });
				  
				  
					//$('input').iCheck('update');
					$('input ').on('ifClicked ', function(event) {
						if ($(this).attr("name")=="new_building" ) {
							
						} else {
							
							if ($(this).attr("value")=="si" ) {
								
								$(this).parents(".title_content_option_inside").siblings(".container_click_option_inside").css({
									"height":"auto"
								});
								
								$(this).parents(".container_radio_option_pole").siblings(".container_click_other_pole").css({
									"height":"auto"
								});
								
							}else{
								$(this).parents(".title_content_option_inside").siblings(".container_click_option_inside").css({
									"height":"0px"
									
								});
								$(this).parents(".container_radio_option_pole").siblings(".container_click_other_pole").css({
									"height":"0px"
									
								});
									
							}
							
							if($(this).attr("class")=="click_check" ){
								
								if( $(this).is(':checked') ){
									// aqui no esta en checked
									$(this).parents(".title_container_option_survey").siblings(".container_click_check_inside").css({
										"height":"0px"										
									})
																		
								}else{
									// aqui esta en checked
									$(this).parents(".title_container_option_survey").siblings(".container_click_check_inside").css({
										"height":"auto"										
									})									
									
								}
								
							}
							
							
						}
					});	
								  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				});
			</script>			
			
			
			

</div>