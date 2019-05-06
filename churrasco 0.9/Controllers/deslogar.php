<?php 
	require_once('../Models/conectar.php');
	$db = new conectar();
	$logout = $db->deslogar();
?>