<?php
session_start();
require('../server/lib.php');
$titulo_evt=$_POST['titulo_evt'];
$fecha_inicio_evt=$_POST['fecha_inicio_evt'];
$hora_inicio_evt=$_POST['hora_inicio_evt'];
$fecha_fin_evt=$_POST['fecha_fin_evt'];
$hora_fin_evt=$_POST['hora_fin_evt'];
$todo_dia_evt=$_POST['todo_dia_evt'];
$id_usuario=$_POST['id_usuario'];
$con = new ConectorBD();
if ($con->initConexion()=='OK'){
	$datos['id_usuario'] = "'".$_SESSION['id']."'";
	$datos['title'] = "'".$title."'";
    $datos['fecha_inicio_evt'] = "'".$fecha_inicio_evt."'";
    $datos['fecha_fin_evt'] = "'".$fecha_fin_evt."'";
    $datos['hora_fin_evt'] = "'".$hora_fin_evt."'";
    $datos['todo_dia_evt'] = "'".$todo_dia_evt."'";
    if ($con->crearEvento('eventos', $datos)) {
      	$php_response=array("msg"=>"OK","data"=>"2");  
    }else{
    	$php_response=array("msg"=>"Error la registrar los datos","data"=>"2"); 
    }
    echo json_encode($php_response,JSON_FORCE_OBJECT);
    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}
?>