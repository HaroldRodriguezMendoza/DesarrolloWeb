<?php
  	require_once('conector.php');
  	$datos = array(
      'nombre' => 'Harold Rodriguez',
      'email' => 'hrodrimendoza@gmail.com',
      'clave' => password_hash("Usr2k15", PASSWORD_DEFAULT),
      'nacimiento' => '1969-05-20');
    $con = new ConectorBD('localhost','root','');
  	$respuesta = $con->initConexion('agendadb');
  	if ($respuesta == 'OK') {
    	if($con->insertData('usuario', $datos)){
      		$respuesta = "Se registro nuevo usuario";
	    }else {
	      	$respuesta = "Hubo un error y los datos no han sido cargados";
	    }
  	}else {
    	$respuesta = "No se pudo conectar a la base de datos";
  	}
    $con->cerrarConexion();
?>