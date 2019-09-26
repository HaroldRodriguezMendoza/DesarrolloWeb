<?php

// Connexion à la base de données
require_once('bdd.php');
if (isset($_POST['titulo']) && isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['start_hour'])&& isset($_POST['end_hour'])){

	$titulo = $_POST['titulo'];
	$start = $_POST['start_date'];
	$end = $_POST['end_date'];
  $horainicio = $_POST['start_hour'];
	$horafin = $_POST['end_hour'];
	session_start();
	$usuarioID=$_SESSION['id'];
	$sql = "INSERT INTO evento(titulo, fechainicio,horainicio, fechafin,horafin,idusuario) values ('$titulo', '$start','$horainicio', '$end','$horafin', '$usuarioID')";
	echo "OK";

  $query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Error execute');
	}

}



?>
