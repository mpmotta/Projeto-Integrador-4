<?php	
require_once('../Models/conectar.php');
$db = new conectar();

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $avatarTMP = $_FILES['avatar']['name'];
  $array = explode('.',$avatarTMP);
  $md5 = md5(microtime($array[0]));
  $avatar = $md5 . "." . $array[1];
  $destino = '../Views/img/usuarios/';

 if($avatarTMP == ''){
  $erro = "Atenção! Todos os campos devem ser preenchidos!";
 } else {
	move_uploaded_file($_FILES['avatar']['tmp_name'], $destino.$avatar); 
	$sql = "UPDATE usuarios 
		SET avatar = '$avatar'
	WHERE id = $id";  
	
  $update = $db->atualizarUser($sql);
 }
}
