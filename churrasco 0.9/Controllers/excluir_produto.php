<?php
require_once('../Models/conectar.php');
$db = new conectar();

$id = $_GET['id'];
$sql = "DELETE FROM produtos WHERE id=$id";
$delete = $db->apagar($sql);

?>