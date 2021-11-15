<?php
session_start();

include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$query = "select id, nome from usuarios where nome = '{$usuario}' and password = md5('{$senha}')";

$result = mysqli_query($con, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: home.php');
    exit();
} else {
    header('Location: index.php');
    $_SESSION['falha_aut'] = true;
    exit();
}
?>