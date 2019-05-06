<?php
require_once('../Models/conectar.php');
$db = new conectar();
if(isset($_POST['submit'])){
 $usuario  = $_POST['usuario'];
 $senha = $_POST['senha'];
 $salt = md5("churrasco");
 $codifica = crypt($senha,$salt);
 $senhaNova = hash('sha512',$codifica);
 
 if($usuario == '' || $senha == ''){
  $erro = "Atenção! Todos os campos devem ser preenchidos!";
 } else {	
	$sql = "SELECT usuario,senha,tipo from usuarios 
	WHERE usuario='$usuario' AND senha='$senhaNova'";
	$logar = $db->logar($sql);
 }
}
?>