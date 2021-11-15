<?php
include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2><br><br>

<a href="cadastrar.php">Cadastrar Produto</a><br>
<a href="select.php">Listar Produto</a><br>
<a href="alterar.php">Alterar Produto</a><br>
<a href="excluir.php">Remover Produto</a><br><br>

<h2><a href="logout.php">Sair</a></h2> 