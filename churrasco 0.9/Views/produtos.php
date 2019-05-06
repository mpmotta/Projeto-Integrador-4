<h2>Produtos em destaque</h2>
<div class='row'>
<?php
require_once('../Controllers/consultaDAO.php');

while($linha = $read->fetch_assoc()){
	$id = $linha['id'];
	$nome = $linha['nome'];
	$imagem = $linha['imagem'];
	$descricao = $linha['descricao'];
	
	echo "
			<div class='produto'>
				<h3>$nome</h3>";
			
	echo	"<a href='index.php?pagina=prod&id=$id'>";		
			if(empty($imagem)){
				echo	"<img src='img/produtos/sem-imagem.png' class='medio'>";		
					}else{
				echo	"<img src='img/produtos/$imagem' class='medio'>";
					}
					
	echo	"<p>$descricao</p></a>
			</div>";
	
}  
?>
</div>
