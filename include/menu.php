<div id="container_menu">

    <div id="center_menu">
    
        <img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/logo2.jpg" class="img_logo" />
    
        <ul class="ul_menu">
        
           <a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>index.php"><li id="li_home" >Dashboard</li> </a>
           <a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>search.php"><li id="li_home" >Search</li> </a>
             
    			<li id="li_request" >REQUEST 
    				<ul class="ul_desplegable" >
                    <?php if ($_SESSION['estado']!=3){ ?>
    					<a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>request.php">  <li>New Request</li> </a><?php }?>
    					<a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>pending_request.php"> <li>Pending Request</li> </a>
    				
    				</ul>
    			</li> 

          <a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>job.php"><li id="li_report" >Jobs</li> </a>
          <li id="li_report"> Designer 
              <ul class="ul_desplegable" >
                   <li class="">New Designer</li> 
                   <a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>view_designer.php"> <li>View Designer</li> </a> 
        
              </ul>
          </li> 
        
        </ul>
        
        <div class="menu_logueado">
        
            <div class="foto_user"></div>
            <div class="name_user"> <?php echo $_SESSION['full_name']; ?> </div>
        
      			<ul class="desplegable_user" >
              <?php if ($_SESSION['id'] == 1) {?>
                <li> <div> ADD COMPANY </div> </li>
                <li> <div> ADD CONTRACTOR </div> </li>
                <li class="open_add_designer"> <div> ADD DESIGNER </div> </li>

              <?php }else if ($_SESSION['id'] == 3){?>
                 <li class="open_add_designer"> <div> ADD DESIGNER </div> </li>

              <?php }?>

                <li class="logout" > <div> LOGOUT </div> </li>
      			   	
      			</ul>
			
        </div>
        
    
    </div>

</div>