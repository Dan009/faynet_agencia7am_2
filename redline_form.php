<?php 
	include('include/head.php');
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

?>

<script type="text/javascript">
	




</script>

    
<body>
    <?php include("include/menu.php"); ?>

    <div class="container_title_request">
    
        <div class="center_title_request"> 
			GULINC REQUEST JOB FORM
				
		</div>
    
    </div>	

    <div class="content_form">
        <div class="container_form_redline">

            <div class="center_form" >

            	<!-- FIRST LINE -->

                	<div class="container_info_redline">
	                	<div class="container_service_number">
	                		<label for="txtServiceNumber">SERVICE #: </label>
	                		<input type="text" id="txtServiceNumber" class="inputRedline" />

	                	</div>

	                	<div class="container_date_requested">
	                		<label for="txtDateRequested">Date requested:</label>
	                		<input type="text" id="txtDateRequested" class="inputRedline" />

	                	</div>

     				</div>

     			<!-- SECOND LINE -->

                	<div class="container_info_redline">
	                	<div class="container_company_engineer">
	                		<label for="txtCompanyEngineer">Lightower Engineer:</label>
	                		<input type="text" id="txtCompanyEngineer" class="inputRedline" />

	                	</div>

	                	<div class="container_requested_by">
	                		<label for="txtRequestedBy">Requested by:</label>
	                		<input type="text" id="txtRequestedBy" class="inputRedline" />

	                	</div>
     				</div>

     			<!-- THRID LINE -->

                	<div class="container_job_details">
	                	
	                	<div class="container_job_info">
	                		<label for="txtJobLocation">Job Location: </label>
	                		<input type="text" id="txtJobLocation" class="inputRedline" />

	      				</div>

     				</div>

     			<!-- FORTH LINE -->

                	<div class="container_info_redline">
	                	<div class="container_type_request">
	                		<label for="txtTypeRequest">Type of request: </label>
	                		<input type="text" id="txtTypeRequest" class="inputRedline" />

	                	</div>


     				</div>

            </div>

        </div>

        <div class="bottom_container_form_redline">

            <div class="center_form">

            	<div class="container_title_type_street_detail">
            		UTILITY PLANS REQUEST FOR:	

            	</div>

            <!-- STREET DETAILS  -->
            	<div class="center_form">
        
                	<div class="container_working_streets">
                		<label for="txtWorkingStreets">Working Streets: </label>
                		<input type="text" id="txtWorkingStreets" class="inputRedline" />

      				</div>

      				<div class="container_from_street">
                		<label for="txtFromStreet"> FROM: </label>
                		<input type="text" id="txtFromStreet" class="inputRedline" />

      				</div>

      				<div class="container_to_street">
                		<label for="txtToStreet">TO: </label>
                		<input type="text" id="txtToStreet" class="inputRedline" />

      				</div>

      				<div class="container_textarea_descrip_notes">
      					<label for="txtDescripNotes"> Description / Note: </label>
      					<textarea id="txtDescripNotes"></textarea>

      				</div>

      				<div class="container_date_requested_completed" style="float: right;">
                		<label for="txtDateReCompleted">Request Completed:</label>
                		<input type="text" id="txtDateReCompleted" class="inputRedline" />

	                </div>
     	

            	</div>

            <!-- STREET PICTURES  -->
            	<div class="center_form">
	            	<div class="container_first_road_picture_details">
	            		<div class="container_job_street_info">
	                		<label for="txtJobLocation">Job Location: </label>
	                		<input type="text" id="txtJobLocation" class="inputRedline" />

		      			</div>

		      		<!-- FIRST STREET PICTURES  -->
		      			<div class="container_first_picture">
		      				<!--  DIVS PARA HABILITAR EL EDITOR  -->

							    <div class="temp"></div>  
							            
							        <div class="editor_imagenes" style="overflow:auto">
							            <div class="cont-button-editor">
							                
							                <input type="button" value="Save current image" onClick="exportAndSaveCanvas()" style="padding: 22px;width: 15%;">

							            </div>
							            
							            <div class="editor_imagenes_content" style="width:100%; height:800px; margin:auto;">
							        
							                  <!-- AQUI CARGA EL EDITOR-->
							            
							              </div>
							        
							    </div>
	
			      		</div>

			      	</div>


			      	<!-- SECOND STREET PICTURES  -->
			      		<div class="container_second_road_picture_details">
		            		<div class="container_from_info">
		                		<label for="txtFromLocation">FROM: </label>
		                		<input type="text" id="txtFromLocation" class="inputRedline" />

			      			</div>

				      			<div class="container_second_picture">
				      				<!--  DIVS PARA HABILITAR EL EDITOR  -->

									    <div class="temp"></div>  
									            
									        <div class="editor_imagenes" style="overflow:auto">
									            <div class="cont-button-editor">
									                
									                <input type="button" value="Save current image" onClick="exportAndSaveCanvas()" style="padding: 22px;width: 15%;">

									            </div>
									            
									            <div class="editor_imagenes_content" style="width:100%; height:800px; margin:auto;">
									        
									                  <!-- AQUI CARGA EL EDITOR-->
									            
									              </div>
									        
									    </div>
			
					      		</div>

					    </div>
			      	<!-- THRID STREET PICTURES  -->
			      		<div class="container_thrid_road_picture_details">
		            		<div class="container_to_street_info">
		                		<label for="txtToLocation">TO: </label>
		                		<input type="text" id="txtToLocation" class="inputRedline" />

			      			</div>

			      			<div class="container_thrird_picture">
			      				<!--  DIVS PARA HABILITAR EL EDITOR  -->

								    <div class="temp"></div>  
								            
								        <div class="editor_imagenes" style="overflow:auto">
								            <div class="cont-button-editor">
								                
								                <input type="button" value="Save current image" onClick="exportAndSaveCanvas()" style="padding: 22px;width: 15%;">

								            </div>
								            
								            <div class="editor_imagenes_content" style="width:100%; height:800px; margin:auto;">
								        
								                  <!-- AQUI CARGA EL EDITOR-->
								            
								              </div>
								        
								    </div>
		
				      		</div>

				      	</div>

	            	</div>

	            </div>

            </div>

        </div>

    </div>



</body>
</html>









