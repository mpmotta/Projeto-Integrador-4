<?php	
require_once('../Models/conectar.php');
$db = new conectar();

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $Nome = $_POST['nome'];
  $Desc = $_POST['descricao'];
 if($Nome == '' || $Desc == ''){
  $erro = "Atenção! Todos os campos devem ser preenchidos!";
 } else {
  $sql = "UPDATE produtos 
  SET nome = '$Nome',
      descricao = '$Desc'
	WHERE id = $id";  
	
  $update = $db->atualizar($sql);
 }
}
