<?php
include('verifica_login.php');

require("conexao.php");
if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $result = $con->query("DELETE FROM produtos WHERE id='$id'");
}
?>

REMOVER
<form action="#" method="POST">
    <div class="field">
        <input name="id" name="text" placeholder="ID do produto" required>
    </div>
    <button type="submit" class="button">Remover</button>
</form>

<a href="home.php">voltar</a>