<?php
require('conector.php');
$con = new ConectorBD('localhost','root','');
$response['conexion'] = $con->initConexion('bdagenda');
if($response['conexion']=='OK'){
	$con->eliminarRegistro('eventos','id='.$_POST['id']);
	$response['msg'] = 'OK';
}
else{
	$response['msg'] = 'NO SE PUEDO ELIMINAR';
	}
	echo json_encode($response);
	$con->cerrarConexion();
?>