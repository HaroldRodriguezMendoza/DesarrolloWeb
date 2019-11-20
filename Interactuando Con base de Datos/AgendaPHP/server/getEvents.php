<?php
  require_once('conector.php');
	$con = new ConectorBD('localhost','root','');
	$response['msg'] = $con->initConexion('bdagenda');
  	if ($response['msg']=='OK') {
      $resultado = $con->consultar(['eventos'],['*'], "WHERE fk_id_usuarios ='1'",'');
      if ($resultado->num_rows <= 0) {
      	$response['eventos'] = [];
    	}else{
	  		$eventos = array();
	  		while ($fila = $resultado->fetch_assoc()) {
	  			$evento = array(
            'id'=>$fila['id'],
            'user_id'=>$fila['fk_id_usuarios'],
            'title'=>$fila['titulo'],
            'start'=>$fila['start_date'].' '.$fila['start_hour'],
            'end'=>$fila['end_date'].' '.$fila['end_hour'],
            'allDay'=>$fila['allDay']);
	      	array_push($eventos, $evento);
	  		}
	  		$response['eventos'] = $eventos;
    	}
    }else{
      $response['estado'] = "Error PHP-004 en la comunicación con el servidor";
    }
  $con->cerrarConexion();
	echo json_encode($response);
?>
