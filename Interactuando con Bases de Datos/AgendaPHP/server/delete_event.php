<?php
require('conector.php');
$con = new ConectorBD();
if($con->initConexion('bdagenda')=='OK'){
	if($con->eliminarRegistro()){('eventos','id='.$_POST['id'])
		echo "Se eliminaron el evento exitosamente";
	}
	else{
		echo "Hubo un problema y el evento no fueron eliminados";
	}
	$con->cerrarConexion();
}
else{
	echo "Se presento un error en la conexion";
}
?>