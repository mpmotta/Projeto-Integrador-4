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
		<title>Gerenciar Usuários</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header class="topo2">
			<h1>Gerenciar Usuários</h1>
		</header>
		<div class="container">
			<a href="cadastrar_usuario.php" class="mudar">
				<button class="botao3">Cadastrar Usuário</button></a>	
			<table class="tabela" cellspacing="0">
				<tr>
					<th>NUM</th>
					<th>AVATAR</th>
					<th>USUÁRIO</th>
					<th>TIPO</th>
					<th>EMAIL</th>
					<th>DATA</th>
					<th>SENHA</th>
					<th>EDITAR</th>
					<th>EXCLUIR</th>
				</tr>
			<?php
			require_once('../Controllers/usuarioDAO.php');
			$i = 1;
			while($linha = $read->fetch_assoc()){
				$id = $linha['id'];
				$avatar = $linha['avatar'];
				$usuario = $linha['usuario'];
				$tipo = $linha['tipo'];
				$email = $linha['email'];
				$data = $linha['data_cadastro'];
				$data = date('d/m/Y H:i:s',strtotime($data));
				
				echo "
						<tr>
							<td>".$i++."</td>
							<td>";
								if(empty($avatar)){
							echo	"<img src='img/usuarios/sem-avatar.png' class='mini'>";		
								}else{
							echo	"<img src='img/usuarios/$avatar' class='mini'>";
								}
								
						echo "</td>
							<td>$usuario</td>
							<td>$tipo</td>
							<td>$email</td>
							<td>$data</td>

							<td><a href='mudar_senha.php?id=$id'>
							<button>MUDAR SENHA</button></a></td>
	
							<td><a href='editar_usuario.php?id=$id'>
							<img src='img/edit.png' /></a></td>";
							
						if($tipo == "root"){
							echo "<td>Não</td>";
							}else{	
							echo "							
							<td><a onclick='return confirm(\"Você tem certeza que deseja excluir o usuário?\")' href='../Controllers/excluir_usuarioDAO.php?id=$id'>
							<img src='img/delete.png'; /></a></td>
						</tr>";
						}
			}  
			?>
			</table>
			
		<a href="admin.php"><button>Voltar</button></a>
		<a href="../Controllers/deslogar.php"><button>Deslogar</button></a>
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