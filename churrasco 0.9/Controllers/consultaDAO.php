<?php	
require_once('../Models/conectar.php');
$db = new conectar();
$sql = "SELECT * FROM produtos";
$read = $db->consulta($sql);
?>
