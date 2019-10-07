<?php
session_start();
require('../server/connection.php');
$con = new ConectorBD();
$passw=$_POST["password"];
$email=$_POST["username"];
if ($con->initConexion()=='OK'){
	$resul=$con->datosUsuario($correo_usr);
	while ($rows = $resul->fetch_array()) {
		if(password_verify($passw,$rows["password"])) {
			$_SESSION['id'] = $rows["id"];
	    	$php_response=array("msg"=>"GRACIAS","data"=>"2");   
		}else{
			$php_response=array("msg"=>"EL USUARIO NO EXISTE","data"=>"2"); 
		}
		echo json_encode($php_response,JSON_FORCE_OBJECT);
	}
    $con->cerrarConexion();
}
?>
