<?php
require_once('bdd.php');

session_start();
$usuarioID=$_SESSION['id'];

$sql = "SELECT id, titulo, concat(DATE(fechainicio),' ',horainicio) as 'start', concat(DATE(fechafin),' ',horafin) as 'end'  FROM evento  where idusuario='$usuarioID'";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();
echo json_encode($events);
?>
