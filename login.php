<?php include('include/head.php'); ?>

<body>
    <?php // include("include/menu.php"); ?>

     <div class="container_form" >

            <div class="center_form" >
		
			<div class="div_login" >
				<form id="form_login" name="form_login" action="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>include/procesa_login.php" method="POST" >
					
					<div class="top_login"> 
						<div class="text_top_login"> Login </div> 
						<div class="error_mensaje" >* Usuario y Contraseña incorrectos</div> 
					</div>
					
					<div style="width:100%;float:left;" >
						<div class="div_input_login" >
							<div class="label_login" > <div> USERNAME: </div> </div>
							<input type="text" name="user_name" placeholder="Enter Your Username" />
						</div>
						<div class="div_input_login" >
							<div class="label_login" > <div> PASSWORD: </div> </div>
							<input type="password" name="password" placeholder="Enter Your Password"  />
						</div>
					</div>
					<div class="bottom_login"> 
						<input type="submit" value="Login" />
						<div class="text_forgot_password" > FORGOT <span> PASSWORD? </span> </div>
						
					</div>
				</form>
			</div>
			
		</div>
    
    </div>

   
    
    <?php // include("include/footer.php"); ?>

</body>
</html>









