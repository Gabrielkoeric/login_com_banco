<?php
include('verifica_login.php');

require_once("conexao.php");
$result = $con -> query("SELECT * FROM produtos ORDER BY id");
while($row = $result -> fetch_array()) {
  echo '<b>ID</b>: '. $row['id'] . " | " . 
  '<b>Nome</b>: '. $row['nome'] . " | " . 
  '<b>Marca</b>: '. $row['marca'] . " | " . 
  '<b>Valor</b>: R$ '. $row['valor'] . " | " . 
  '<b>Quantidade</b>: '. $row['quantidade'] . " | " . 
  '<b>Valor total</b>: R$ '. $row['quantidade'] * $row['valor'] . "<br><br>";
}
?>

<a href="home.php">voltar</a>