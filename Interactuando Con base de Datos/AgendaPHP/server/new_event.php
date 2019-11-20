<?php
  require('conector.php');
  $con = new ConectorBD('localhost','root','');
  $response['conexion'] = $con->initConexion('bdagenda');
  if ($response['conexion']=='OK') {
    $data['titulo'] = '"'.$_POST['titulo'].'"';
    $data['start_date'] = '"'.$_POST['start_date'].'"';
    $data['end_date'] = '"'.$_POST['end_date'].'"';
    $data['start_hour'] = '"'.$_POST['start_hour'].'"';
    $data['end_hour'] = '"'.$_POST['end_hour'].'"';
    $data['allDay'] = "'1'";
    $data['fk_id_usuarios'] = "'1'";
    $con->insertData('eventos', $data);
      $response['msg'] = 'OK';
    }else {
      $response['msg'] = 'NO SE INGRESO';
  }
  echo json_encode($response);
  $con->cerrarConexion();
 ?>
