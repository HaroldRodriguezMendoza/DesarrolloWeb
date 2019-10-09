<?php
  require('conector.php');
  $con = new ConectorBD();
  if ($con->initConexion('bdagenda')=='OK') {
    $data['titulo'] = '"'.$_POST['titulo'].'"';
    $data['fecha_inicio_evt'] = '"'.$_POST['fecha_inicio_evt'].'"';
    $data['fecha_fin_evt'] = '"'.$_POST['fecha_fin_evt'].'"';
    $data['hora_fin_evt'] = '"'.$_POST['hora_fin_evt'].'"';
    $data['todo_dia_evt'] = '"'.$_POST['todo_dia_evt'].'"';
    if ($con->insertData('eventos', $datos)) {
      echo "Se insertaron los datos correctamente";
    }else echo "Se ha producido un error en la inserción";
    $con->cerrarConexion();
  }else {
    echo "Se presentó un error en la conexión";
  }
 ?>
