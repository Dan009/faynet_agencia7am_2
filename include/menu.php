<?php 
  
  if ($_SESSION['estado']==4) {
      $presentarJob = "job_search.php?id=".$_SESSION['id'];

  }else{
     $presentarJob = "job.php";

  }
  


 ?>
<div id="container_menu">

    <div id="center_menu">
    
        <img src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>images/logo2.jpg" class="img_logo" />
    
        <ul class="ul_menu">
        
           <a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>index.php"><li id="li_home" >Dashboard</li> </a>

             <?php if ($_SESSION['estado']!=4){ ?>
               <a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>search.php"><li id="li_home" >Search</li> </a>

             <?php }?>

             <?php if ($_SESSION['estado']!=4){ ?>
          			<li id="li_request" >REQUEST 
          				<ul class="ul_desplegable" >
                      <?php if ($_SESSION['estado'] != 3){ ?>

          					    <a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>request.php">  <li>New Request</li> </a>

                      <?php }?>

          					     <a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>pending_request.php"> <li>Pending Request</li> </a>

                     
          				
          				</ul>
          			</li> 

            <?php }?>

          <a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio.$presentarJob; ?>"><li id="li_report" >Jobs <?php if ($_SESSION['estado']==4){ echo "ASSIGNED";}?></li> </a>
            
            <?php  if ($_SESSION['estado'] != 2 && $_SESSION['estado']!=4) {
              
            ?>
              <li id="li_report"> Designer 
                  <ul class="ul_desplegable" >
                       <a href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>view_designer.php"> <li>View Designer</li> </a> 
            
                  </ul>
              </li> 

            <?php } ?>

          </ul>
        
        <div class="menu_logueado">
        
            <div class="foto_user"></div>
            <div class="name_user"> <?php echo $_SESSION['full_name']; ?> </div>
  
      			<ul class="desplegable_user" >
              <?php if ($_SESSION['id'] == 1 && $_SESSION['estado']!=4) {?>
                <li class="open_add_company"> <div> ADD COMPANY </div> </li>
                <li class="open_add_contractor"> <div> ADD CONTRACTOR </div> </li>
                <li class="open_add_designer"> <div> ADD DESIGNER </div> </li>
                <li class="open_add_engineer"> <div> ADD ENGINEER </div> </li>

              <?php }else if ($_SESSION['id'] == 3){?>
                 <li class="open_add_designer"> <div> ADD DESIGNER </div> </li>

              <?php }?>

                <li class="logout" > <div> LOGOUT </div> </li>
      			   	
      			</ul>
			
        </div>
        
    
    </div>

</div>