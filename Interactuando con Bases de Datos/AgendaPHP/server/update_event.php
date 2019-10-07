<?php
session_start();
require('../server/lib.php');
$con = new ConectorBD();
if ($con->initConexion()=='OK'){
    $idevento=$_POST["id_evento"];
    $fecha_inicio_evt=$_POST['fecha_inicio_evt'];
    $hora_inicio_evt=$_POST['hora_inicio_evt'];
    $fecha_fin_evt=$_POST['fecha_fin_evt'];
    $hora_fin_evt=$_POST['hora_fin_evt'];
    $todo_dia_evt=$_POST['todo_dia_evt'];
    if($con->actualizarEvento($idevento,$datos)){
    	$php_response=array("msg"=>"OK","evento actualizado"=>$idevento);  
    }else{
    	$php_response=array("msg"=>"Error al actualizar el evento","eventos"=>$idevento); 
    }
	echo json_encode($php_response,JSON_FORCE_OBJECT);
    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}
?>