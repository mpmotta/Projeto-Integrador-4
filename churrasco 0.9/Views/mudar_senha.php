<?php
session_start();
$tipo = $_SESSION['tipo'];
if($_SESSION['validacao']==1){
$level = 'root';
	if($level == $tipo){
		require_once('../Controllers/senhaDAO.php');
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
		<title>Mudar Senha</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header class="topo2">
			<h1>Mudar Senha</h1>
		</header>
		<div class="container">
		<?php
			echo "<p class='titulo'>".$linha['usuario']."<p>";
			$avatar = $linha['avatar'];
			if(empty($linha['avatar'])){
				echo "<img src='img/usuarios/sem-avatar.png' class='avatar'>";		
			}else{
				echo "<img src='img/usuarios/$avatar' class='avatar'>";
			}
		
		?>
			<form method="POST" class="atualizar" 
			action="mudar_senha.php">
			
				<input type="hidden" name="id" 
				value="<?php echo $linha['id'];?>" />
				
				<input type="password" name="senha" 
				placeholder="Digite a nova senha:"/>
				
				<input type="password" name="senha2" 
				placeholder="Repita a nova senha:"/>			

				<input type="submit" class="botao2" name="submit"
				value="Mudar Senha" />
			</form>
			<a href="gerenciar_usuarios.php"><button>Voltar</button></a>
		</div>
		<?php
		if(isset($_GET['erro'])){
		 echo "<div id='erro'>".$_GET['erro']."</div>";
		}
		?>
		
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/erro.js"></script>
	</body>
</html>
<?php
}else{
header("Location: entrar.php");
}
?>