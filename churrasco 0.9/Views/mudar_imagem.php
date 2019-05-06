<?php
session_start();
$tipo = $_SESSION['tipo'];
if($_SESSION['validacao']==1){
$level = 'root';
	if($level == $tipo){
		require_once('../Controllers/imagemDAO.php');
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
		<title>Mudar Imagem</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header class="topo2">
			<h1>Mudar Imagem</h1>
		</header>
		<div class="container">
		<?php
			$imagem = $linha['imagem'];
			if(empty($linha['imagem'])){
				echo "<img src='img/produtos/sem-imagem.png' class='avatar'>";		
			}else{
				echo "<img src='img/produtos/$imagem' class='avatar'>";
			}
		?>
			
			<form method="POST" class="atualizar" 
			enctype="multipart/form-data" action="mudar_imagem.php">
			
				<input type="hidden" name="id" 
				value="<?php echo $linha['id'];?>" />
				
				<input type="file" name="imagem" />			

				<input type="submit" class="botao2" name="submit"
				value="Mudar Imagem" />
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