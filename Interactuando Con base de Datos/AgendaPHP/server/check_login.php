<?php
  session_start();
  require('conector.php');
  $con = new ConectorBD('localhost','root','');
  $response['conexion'] = $con->initConexion('bdagenda');
    if ($response['conexion']=='OK') {
    $resultado_consulta = $con->consultar(['usuario'],['email', 'password'], 'WHERE email="'.$_POST['username'].'" AND password="'.$_POST['password'].'"');
    if ($resultado_consulta->num_rows != 0) {
      $response['acceso'] = 'concedido';
     }else $response['acceso'] = 'rechazado';
    }
  echo json_encode($response);
  $con->cerrarConexion();
?>
