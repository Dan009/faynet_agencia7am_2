<?php 
	include('include/head.php');
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);

 ?>

<body>
    <?php include("include/menu.php"); ?>

    <div class="container_title_request">
    
        <div class="center_title_request"> 
			Dashboard  			
		</div>
    
    </div>	


         <div class="fondo_list_job">
            <div class="fancy_list_job" style="width: 961px;"></div>

        </div>
        
        	<div class="exito_insert" >
        		
        		<div class="div_exito_insert" >
                <div class="hola"></div>
        			<!--<img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/default.gif" class="loader_request" />-->
        			<div class="text_exito_insert" >
                    	<div class="insidemsj"></div>
                    </div>
        			
        		</div>
        	</div>

</body>
</html>









