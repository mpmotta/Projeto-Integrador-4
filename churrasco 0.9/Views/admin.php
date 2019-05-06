<?php
session_start();
$tipo = $_SESSION['tipo'];
if($_SESSION['validacao']==1){
$level = 'root';
	if($level == $tipo){
		
	}else{
		header("Location: usuario.php");
	}
?>
<!Doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Página Administrativa</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header class="topo2">
			<h1>Página Administrativa</h1>
		</header>
		<div class="container">
			<table class="adm">
				<tr>
					<td>
						<a href="gerenciar_produtos.php" id="gerenciar">	
							<img src="img/produtos.png" />
							<p>Gerenciar Produtos</p>
						</a>	
					</td>
					<td>
						<a href="gerenciar_usuarios.php">	
							<img src="img/users.png" />
							<p>Gerenciar Usuários</p>
						</a>	
					</td>					
				</tr>
			</table>
		<a href="../Controllers/deslogar.php"><button>Deslogar</button></a>
		</div>	
	</body>
</html>

<?php
}else{
header("Location: entrar.php");
}
?>