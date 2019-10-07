<?php
session_start();
require('../server/connection.php');
$con = new ConectorBD();
if ($con->initConexion()=='CORRECTO'){
    $resul=$con->obtenerEventos($_SESSION['id_usuario']);
    $rows = array();
	while($r = mysqli_fetch_assoc($resul)) {
	    $rows[] = $r;
	}
	$php_response=array("msg"=>"OK","eventos"=>$rows);   
	echo json_encode($php_response);
    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}
?>