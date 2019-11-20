<!--?php
  require('conector.php');
  $con = new ConectorBD('localhost','root','');
  $response['conexion'] = $con->initConexion('bdagenda');
  if ($response['conexion']=='OK') {
    $condicion = 'id="'.$_POST['id'].'"';
    $datos = array(
      //'id' => $_POST['id'],
    'start_date' => $_POST['start_date'],
    'end_date' => $_POST['end_date'],
    'start_hour' =>$_POST['start_hour'],
    'end_hour' => $_POST['end_hour']);
    $con->actualizarRegistro('eventos', $datos, $condicion);
      $response['msg'] = 'OK';
    }else {
      $response['msg'] = 'NO SE PUEDO ELIMINAR';
  }
  echo json_encode($response);
  $con->cerrarConexion();
?-->
<?php

    require_once('conector.php');

    /*$datos = array(
        'start_date' => $_POST['start_date'],
        'start_hour' => $_POST['start_hour'],
        'end_date' => $_POST['end_date'],
        'end_hour' => $_POST['end_hour']
    );*/

    $datos = array(
'start_date' => '"' . $_POST['start_date'] . '"',
'start_hour' => '"' . $_POST['start_hour'] . '"',
'end_date' => '"' . $_POST['end_date'] . '"',
'end_hour' => '"' . $_POST['end_hour'] . '"'
);

    $con = new ConectorBD('localhost', 'root', '');
    $response['conexion'] = $con->initConexion('bdagenda');

    if ($response['conexion']=='OK') {
        $condicion = 'id="' . $_POST['id'] . '"';
        if ($con->actualizarRegistro('eventos', $datos, $condicion)) {
            $response['msg'] = 'OK';
        } else {
            $response['msg'] = 'NO SE PUDO ACTUALIZAR';
        }
    }
    echo json_encode($response);
    $con->cerrarConexion();


?>