<?php	
require_once('../Models/conectar.php');
$db = new conectar();

if(isset($_POST['submit'])){
  $usuario = $_POST['usuario'];
  $tipo = $_POST['tipo'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  //cria um salt aleatório
  $salt = md5("churrasco");
  
  //encriptação usando o salt criado
   $codifica = crypt($senha,$salt);
  
  //segunda ecriptação sha512
   $senhaNova = hash('sha512',$codifica);
  
 if($usuario == '' || $tipo == '' || $email == '' || $senha == ''){
  $erro = "Atenção! Todos os campos devem ser preenchidos!";
 } else {
  $sql = "INSERT INTO usuarios(usuario, senha, tipo, email) 
		VALUES('$usuario','$senhaNova','$tipo','$email')";
		
  $create = $db->cadastrarUser($sql);
 }
}
