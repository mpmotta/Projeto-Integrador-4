<?php
require_once('../Controllers/logarDAO.php');
?>

<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Login</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header class="topo2">
			<h1>Login do Usuário</h1>
		</header>	
		
		<div class="login">
			<form method="POST" name="logar" action="entrar.php">
				<input type="text" name="usuario" id="usuario"
				placeholder="Usuário"	/>
				<input type="password" name="senha" id="senha" 
				placeholder="Senha" />
				<input type="submit" id="logar" name="submit" value="Logar"/>
		</form>
		<a href="index.php">Voltar</a>
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