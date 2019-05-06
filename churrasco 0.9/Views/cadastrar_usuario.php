<?php
session_start();
$tipo = $_SESSION['tipo'];
if($_SESSION['validacao']==1){
$level = 'root';
	if($level == $tipo){
		require_once('../Controllers/cadastra_usuarioDAO.php');
	}else{
		header("Location: usuario.php");
	}
?>
<!Doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastrar Usuário</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header class="topo2">
			<h1>Cadastrar Usuário</h1>
		</header>
		<div class="container">
		
			<form method="POST" class="atualizar" 
			action="cadastrar_usuario.php">
				
				<input type="text" name="usuario" 
				placeholder="Nome de Usuário" />
				
				<input type="email" name="email" 
				placeholder="Digite seu email" />

				<input type="password" name="senha" 
				placeholder="Digite sua senha" />
				
				<h4>Tipo de Usuário:</h4>
				<label for="root" class="radio">
				<input type="radio" name="tipo" value="root" id="root"
				/>ROOT</label>
				
				<label for="comum" class="radio">
				<input type="radio" name="tipo" value="comum" id="comum"
				checked />COMUM</label>				

				<input type="submit" class="botao" name="submit"
				value="Cadastrar" />
			</form>
			<a href="gerenciar_usuarios.php"><button>Voltar</button></a>
		</div>
		<?php
		if(isset($erro)){
		 echo "<div id='erro'>".$erro."</div>";
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