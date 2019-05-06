<?php
session_start();
$tipo = $_SESSION['tipo'];
if($_SESSION['validacao']==1){
$level = 'root';
	if($level == $tipo){
		require_once('../Controllers/atualiza_produtoDAO.php');
		$id = $_GET['id'];	
		$sql = "SELECT * FROM produtos WHERE id=$id";
		$linha = $db->consulta($sql)->fetch_assoc();
	}else{
		header("Location: usuario.php");
	}
?>
<!Doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Editar Produto</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header class="topo2">
			<h1>Editar Produto</h1>
		</header>
		<div class="container">
		<?php
			$imagem = $linha['imagem'];
			if(empty($linha['imagem'])){
				echo "<img src='img/produtos/sem-imagem.png' class='avatar'>";		
			}else{
				echo "<img src='img/produtos/$imagem' class='avatar'>";
			}
		echo "<a href='mudar_imagem.php?id=$id' class='mudar'>
				<button>Mudar imagem</button></a>";
		?>
			<form method="POST" class="atualizar" 
			action="editar_produto.php">
				<input type="hidden" name="id" 
				value="<?php echo $linha['id'];?>" />
				
				<input type="text" name="nome" 
				value="<?php echo $linha['nome'];?>" />
				
				<textarea name="descricao"><?php 
				echo $linha['descricao'];?></textarea>
				<input type="submit" class="botao" name="submit"
				value="Atualizar" />
			</form>
			<a href="gerenciar_produtos.php"><button>Voltar</button></a>
		</div>
	</body>
</html>
<?php
}else{
header("Location: entrar.php");
}
?>