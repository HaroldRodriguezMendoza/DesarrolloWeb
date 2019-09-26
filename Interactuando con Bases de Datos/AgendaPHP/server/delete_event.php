<?php
require_once('bdd.php');
if (isset($_POST['id'])){
$id = $_POST['id'];

	$sql = "DELETE FROM evento WHERE id = $id";

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
