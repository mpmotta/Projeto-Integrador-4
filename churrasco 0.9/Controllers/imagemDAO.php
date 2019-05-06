<?php	
require_once('../Models/conectar.php');
$db = new conectar();

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $imagemTMP = $_FILES['imagem']['name'];
  $array = explode('.',$imagemTMP);
  $md5 = md5(microtime($array[0]));
  $imagem = $md5 . "." . $array[1];
  $destino = '../Views/img/produtos/';

 if($imagemTMP == ''){
  $erro = "Atenção! Todos os campos devem ser preenchidos!";
 } else {
	move_uploaded_file($_FILES['imagem']['tmp_name'], $destino.$imagem); 
	$sql = "UPDATE produtos 
		SET imagem = '$imagem'
	WHERE id = $id";  
	
  $update = $db->atualizar($sql);
 }
}
