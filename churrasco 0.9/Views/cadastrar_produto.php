<?php
session_start();
$tipo = $_SESSION['tipo'];
if($_SESSION['validacao']==1){
$level = 'root';
	if($level == $tipo){
		require_once('../Controllers/cadastra_produtoDAO.php');
	}else{
		header("Location: usuario.php");
	}
?>
<!Doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastrar Produto</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header class="topo2">
			<h1>Cadastrar Produto</h1>
		</header>
		<div class="container">
		
			<form method="POST" class="atualizar" 
			action="cadastrar_produto.php">
				
				<input type="text" name="nome" id="nome" 
				placeholder="Nome do produto" />
				
				<textarea name="descricao" id="descricao" 
				placeholder="Descrição do Produto"></textarea>

				<input type="submit" class="botao" name="submit"
				value="Cadastrar" />
			</form>
			<a href="gerenciar_produtos.php"><button>Voltar</button></a>
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