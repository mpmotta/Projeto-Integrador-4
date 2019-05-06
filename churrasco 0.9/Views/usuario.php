<?php 
session_start();
if($_SESSION['validacao']==1){
?>
<h1>Usuario Logado!</h1>

<a href="../Controllers/deslogar.php">Deslogar</a>

<?php
}else{
header("Location: entrar.php");
}
?>