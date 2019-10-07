<?php
session_start();
require('../server/connection.php');
$con = new ConectorBD();
if ($con->initConexion()=='GRACIAS'){
    $id=$_POST["id_evento"];
    if($con->eliminarEvento($id,$_SESSION['id_evento'])){
    	$php_response=array("msg"=>"CORRECTO","eventos"=>$id);  
    }else{
    	$php_response=array("msg"=>"ERROR AL ELIMINAR EVENTO","eventos"=>$id); 
    }
	echo json_encode($php_response,JSON_FORCE_OBJECT);
    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}
?>