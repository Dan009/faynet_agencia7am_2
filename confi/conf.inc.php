<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "llego_el_pavo01";
$basededatos = "faynet"; 
$directorio = "/faynet/"; 


	
    $conexion= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	$link = mysql_connect('localhost','root',$contrasena); 
	mysql_select_db('faynet') or die ('Error al seleccionar la Base de Datos: '.mysql_error());
	if (!class_exists('Conectar')) {
	class Conectar{
		public static function con(){
			$con = mysql_connect("localhost","root", $contrasena) or die("conexiÃ³n incorrecta");
			mysql_select_db("faynet") or die("base de datos incorrecta");
			mysql_query("SET NAMES 'utf8'");
			return $con;
		}
	}
}
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

if (!function_exists('sanear_string')) {
function sanear_string($string)
{

    $string = trim($string);

    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä', 'A'),
        array('a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
        $string
    );

    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'M', 'N', 'L', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'),
        array('e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'm', 'n', 'l', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z' ),
        $string
    );

    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î',),
        array('i', 'i', 'i', 'i', 'i', 'i', 'i', 'i'),
        $string
    );

    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'o', 'o', 'o', 'o'),
        $string
    );

    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'u', 'u', 'u', 'u'),
        $string
    );

    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'n', 'c', 'c',),
        $string
    );
    $string = str_replace(
        array(',',' , '),
        array('-','-'),
        $string
    );
    $string = str_replace(
        array('#',' # ','*',' * ','/',' / ','¡','¢','£','¤','¥','§','¨','©','«','¬','®','¯','°','±','²','³','´','µ','¶','·','<','>','_','+','»','¼','½','¾','¿','?','Æ','÷','ø','[',']','{','}','(',')','@','$','%','&','^','|','.',' .',' . '),
        array('-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-'),
        $string
    );
	
	 $string = str_replace(
        array(' ', ''),
        array('-', '-'),
        $string
    );

    //Esta parte se encarga de eliminar cualquier caracter extraño
   
    return $string;
}
}


$t=time(); 
$time_code = $t."-".$_SESSION['id'];
?>