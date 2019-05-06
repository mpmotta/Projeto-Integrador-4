<!Doctype html>
<html lang="PT-br">
	<head>
		<meta charset="UTF-8" />
		<meta name="author" content="Aluno do curso" />
		<meta name="description" content="Site desenvolvido como projeto do curso técnico em Informática no Senac/RS" />
		<meta name="keywords" content="html, css, javascript, php, banco de dados, mysql" />
		<title>Artigos para Churrasco</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
		<link rel="icon" type="image/png" href="img/logo.png">
	</head>
	<body>
		<header class="topo">
			<section class="flex largura">
				<div class="logo"> 
					<a href="index.php">	
						<img src="img/logo.png" />
					</a>	
				</div>
				<h1>Artigos para Churrasco</h1>
				<div class="entrar"> 
					<a href="entrar.php" id="entrar">
						<img src="img/entrar.png" />
					</a>	
				</div>
			</section>
		</header>
		<div class="container">
			<nav class="menu">
				<a href="index.php?pagina=home">
					<button>
						Home
					</button></a>	
				<a href="index.php?pagina=lista" id="lista">
					<button>
						Lista
					</button></a>
				<a href="index.php?pagina=produtos" id="produtos">
					<button>
						Produtos
					</button></a>				
			</nav>
			<section class="principal">
				<?php
										
					if(empty($_GET['pagina'])){
						include "home.php";
					}else{					
					$pagina = $_GET['pagina'];
					switch ($pagina){ 
						case 'home': 
						include "home.php"; 
						break; 

						case 'lista': 
						include "lista.php"; 
						break;					

						case 'produtos': 
						include "produtos.php"; 
						break;	
						
						default: 
						include "home.php"; 
						break;	
						}
					}
				?>
			</section>
		</div>
		<footer class="rodape">
			Rodapé da Página
		</footer>
		
		<?php
		if(isset($_GET['msg'])){
		 echo "<div id='msg'>".$_GET['msg']."</div>";
		}
		?>
		
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/msg.js"></script>
		
		
		
		
		
		
	</body>
</html>