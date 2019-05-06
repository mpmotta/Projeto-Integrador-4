<?php	
require_once('../Models/conectar.php');
$db = new conectar();

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $usuario = $_POST['usuario'];
  $tipo = $_POST['tipo'];
  $email = $_POST['email'];
 if($usuario == '' || $tipo == '' || $email == ''){
  $erro = "Atenção! Todos os campos devem ser preenchidos!";
 } else {
  $sql = "UPDATE usuarios 
  SET usuario = '$usuario',
	  tipo = '$tipo',
	  email = '$email'
	WHERE id = $id";  
	
  $update = $db->atualizarUser($sql);
 }
}
