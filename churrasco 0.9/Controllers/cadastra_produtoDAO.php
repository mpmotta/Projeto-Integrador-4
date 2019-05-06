<?php	
require_once('../Models/conectar.php');
$db = new conectar();

if(isset($_POST['submit'])){
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
 if($nome == '' || $descricao == ''){
  $erro = "Atenção! Todos os campos devem ser preenchidos!";
 } else {
  $sql = "INSERT INTO produtos(nome, descricao) 
		VALUES('$nome','$descricao')";
		
  $create = $db->cadastrar($sql);
 }
}
?>