<?php
session_start();
$tipo = $_SESSION['tipo'];
if($_SESSION['validacao']==1){
$level = 'root';
	if($level == $tipo){
		require_once('../Controllers/avatarDAO.php');
		$id = $_GET['id'];	
		$sql = "SELECT * FROM usuarios WHERE id=$id";
		$linha = $db->consulta($sql)->fetch_assoc();
	}else{
		header("Location: usuario.php");
	}
?>
<!Doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Mudar Avatar</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header class="topo2">
			<h1>Mudar Avatar</h1>
		</header>
		<div class="container">
		<?php
			$avatar = $linha['avatar'];
			if(empty($linha['avatar'])){
				echo "<img src='img/usuarios/sem-avatar.png' class='avatar'>";		
			}else{
				echo "<img src='img/usuarios/$avatar' class='avatar'>";
			}
		
		?>
			
			<form method="POST" class="atualizar" 
			enctype="multipart/form-data" action="mudar_avatar.php">
			
				<input type="hidden" name="id" 
				value="<?php echo $linha['id'];?>" />
				
				<input type="file" name="avatar" />			

				<input type="submit" class="botao2" name="submit"
				value="Mudar Avatar" />
			</form>
			<a href="gerenciar_usuarios.php"><button>Voltar</button></a>
		</div>
	</body>
</html>
<?php
}else{
header("Location: entrar.php");
}
?>