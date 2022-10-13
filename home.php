<?php
    session_start();
    include('conexao.php');

    if (empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: loginsistema.php');
        exit();
    }

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id, login from administrador where login = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['login'] = $usuario;
	header('Location: sistema.php');
	exit();
}else{
	header('Location: loginsistema.php');
	exit();
}

?>