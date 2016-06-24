<?php 
    include("confi/conf.inc.php");
	$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	
    $directorio = "/faynet/"; 
	
	if(!isset($_SESSION['id']) AND $_SERVER['REQUEST_URI']!="/faynet/login.php"){		
		header("location: login.php");		
	}	
	if(isset($_SESSION['id']) AND $_SERVER['REQUEST_URI']=="/faynet/login.php"){		
		header("location: request.php");		
	}
	

			
?>
<!DOCTYPE html>
<html>
    
    <head>
    
        <title> Guerrero - Your System </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
		<meta name="author" content="agencia7am.com" />
		<meta name="rating" content="general"/>
		<meta name="ROBOTS" content="index, follow">
		<meta name="revisit-after" content="1 days">
        <link type="text/css" rel="stylesheet" href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>css/main.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>css/request.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>css/square.css" />
		<link rel="stylesheet" href="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>css/jquery-ui.css"> 

        <!--<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/jquery.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>-->
        <script src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/respaldo/jquery-1.11.3.js"></script> 
        <script src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/respaldo/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/icheck.js"></script>
        <script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/icheck.js"></script>
        <script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/main.js"></script>

<!-- --><script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/mascaras/inputmask.js"></script>
        <script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/mascaras/jquery.inputmask.bundle.min.js"></script>
        <script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/mascaras/inputmask.date.extensions.js"></script>
        
        <script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/mascaras/mascaras.js"></script>
        
		
		 
		<script>
			   $.datepicker.regional['es'] = {
				 closeText: 'Cerrar',
				 prevText: '<Ant',
				 nextText: 'Sig>',
				 currentText: 'Hoy',
				 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
				 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
				 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
				 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
				 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
				 weekHeader: 'Sm',
				 dateFormat: 'dd/mm/yy',
				 firstDay: 1,
				 isRTL: false,
				 showMonthAfterYear: false,
				 yearSuffix: ''
				 };
				 $.datepicker.setDefaults($.datepicker.regional['es']);
				  $(function() {
							  
					 
					  
					$( "#kick_off_date" ).datepicker();					
					$( "#kick_off_date" ).datepicker( "option", "dateFormat", "yy-mm-dd");
					$( "#date_request_sent" ).datepicker();					
					$( "#date_request_sent" ).datepicker( "option", "dateFormat", "yy-mm-dd");
					  
					  
				   

				  });
	  </script>		
		
        <script>
            $(document).ready(function(){
              $('input').iCheck({
                checkboxClass: 'icheckbox_square',
                radioClass: 'iradio_square',
                increaseArea: '20%' // optional
              });
            });
        </script>
		<script type="text/javascript">
			var hostname= location.hostname;
			var ruta="/faynet/";
		</script>  
        
		
    
    </head>