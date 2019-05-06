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
		<title>Gerenciar Produtos</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header class="topo2">
			<h1>Gerenciar Produtos</h1>
		</header>
		<div class="container">
			<a href="cadastrar_produto.php" class="mudar">
				<button class="botao3">Cadastrar Produto</button></a>
			<table class="tabela" cellspacing="0">
				<tr>
					<th>NUM</th>
					<th>IMAGEM</th>
					<th>NOME</th>
					<th>DESCRIÇÃO</th>
					<th>DATA</th>
					<th>EDITAR</th>
					<th>EXCLUIR</th>
				</tr>
			<?php
			require_once('../Controllers/consultaDAO.php');
			$i = 1;
			while($linha = $read->fetch_assoc()){
				$id = $linha['id'];
				$nome = $linha['nome'];
				$imagem = $linha['imagem'];
				$descricao = $linha['descricao'];
				$data = $linha['data'];
				$data = date('d/m/Y H:i:s',strtotime($data));
				
				echo "
						<tr>
							<td>".$i++."</td>
							<td>";
								if(empty($imagem)){
							echo	"<img src='img/produtos/sem-imagem.png' class='mini'>";		
								}else{
							echo	"<img src='img/produtos/$imagem' class='mini'>";
								}
								
						echo "</td>
							<td>$nome</td>
							<td>$descricao</td>
							<td>$data</td>
							<td><a href='editar_produto.php?id=$id'>
							<img src='img/edit.png' /></a></td>
							<td><a onclick='return confirm(\"Você tem certeza que deseja excluir o produto?\")' href='../Controllers/excluir_produto.php?id=$id'>
							<img src='img/delete.png'; /></a></td>
						</tr>";
			}  
			?>
			</table>
			
		<a href="admin.php"><button>Voltar</button></a>
		<a href="../Controllers/deslogar.php" id="deslogar"><button>Deslogar</button></a>
		</div>	
		
		<?php
			if(isset($_GET['msg'])){
			echo "<div id='msg'>".$_GET['msg']."</div>";
			}
		?>
		
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/msg.js"></script>
		
		
	</body>
</html>
<?php
}else{
header("Location: entrar.php");
}
?>