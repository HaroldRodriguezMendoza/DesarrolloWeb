<?php
  require('conector.php');
  $con = new ConectorBD('localhost','root','');
  if ($con->initConexion('bdagenda')=='OK') {
    $conexion = $con->getConexion();

    $insert = $conexion->prepare('INSERT INTO usuario (id_usuario, nombres, password, email, fecha_nacimiento) VALUES (?,?,?,?,?)');
    $insert->bind_param("isssi", $id_usuario, $nombres, $password, $email, $fecha_nacimiento);

    $id_usuario = 1;
    $nombres = 'Harold Keizo Rodriguez Mendoza';
    $password = '123456';
    $email = 'hrodrimendoza@gmail.com';
    $fecha_nacimiento = '27-07-1997';
    $insert->execute();

    $id_usuario = 2;
    $nombres = 'Hector Rodriguez';
    $password = '123456';
    $email = 'hrodriguez@gmail.com';
    $fecha_nacimiento = '30-07-1997';
    $insert->execute();

    echo "Se insertaron los registros exitosamente";

    $con->cerrarConexion();

  }else {
    echo "Se presentó un error en la conexión";
  }




 ?>
