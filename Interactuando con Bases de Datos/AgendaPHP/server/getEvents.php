<?php
  require('conector.php');
  $con = new ConectorBD();
  if ($con->initConexion('bdagenda')=='OK') {
    if ($con->consultar(['eventos'], ['*'],"WHERE fk_usuarios ='".$_SESSION['email']."'",'')) {
      echo "Se consultaron los registros exitosamente";
    }else {
    	echo "Hubo un problema y los registros no fueron consultados";
  }
  else {
    echo "Se presentó un error en la conexión";
  }
 ?>