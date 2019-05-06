<?php
session_start();
$tipo = $_SESSION['tipo'];
if($_SESSION['validacao']==1){
$level = 'root';
	if($level == $tipo){
		require_once('../Controllers/atualiza_usuarioDAO.php');
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
		<title>Editar Usuário</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header class="topo2">
			<h1>Editar Usuário</h1>
		</header>
		<div class="container">
		<?php
			$avatar = $linha['avatar'];
			if(empty($linha['avatar'])){
				echo "<img src='img/usuarios/sem-avatar.png' class='avatar'>";		
			}else{
				echo "<img src='img/usuarios/$avatar' class='avatar'>";
			}
		echo "<a href='mudar_avatar.php?id=$id' class='mudar'>
				<button>Mudar Avatar</button></a>";
		?>
			
			<form method="POST" class="atualizar" 
			action="editar_usuario.php">
				<input type="hidden" name="id" 
				value="<?php echo $linha['id'];?>" />
				
				<input type="text" name="usuario" 
				value="<?php echo $linha['usuario'];?>" />
				
				<input type="email" name="email" 
				value="<?php echo $linha['email'];?>" />
				
				<h4>Tipo de Usuário:</h4>
				<label for="root" class="radio">
				<input type="radio" name="tipo" value="root" id="root"
				/>ROOT</label>
				
				<label for="comum" class="radio">
				<input type="radio" name="tipo" value="comum" id="comum"
				checked />COMUM</label>				

				<input type="submit" class="botao" name="submit"
				value="Atualizar" />
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