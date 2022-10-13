<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$celular = mysqli_real_escape_string($conexao, trim($_POST['celular']));
$pedido = mysqli_real_escape_string($conexao, trim($_POST['pedido']));



if (!$conexao) {
	die('Não foi possível conectar ao Banco de Dados');
}
$sql = "INSERT INTO pedidos (nome, email, celular, pedido) VALUES ('$nome', '$email', '$celular', '$pedido')";
mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
		

$conexao->close();

header('Location: acessorios.php');
exit;
?>