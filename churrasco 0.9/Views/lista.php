<h2>Lista de Produtos</h2>
<table class="tabela" cellspacing="0">
	<tr>
		<th>NUM</th>
		<th>IMAGEM</th>
		<th>NOME</th>
		<th>DESCRIÇÃO</th>
		<th>DATA</th>
	</tr>
<?php
require_once('../Controllers/consultaDAO.php');
$i = 1;
while($linha = $read->fetch_assoc()){
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
			</tr>";
}  
?>
</table>