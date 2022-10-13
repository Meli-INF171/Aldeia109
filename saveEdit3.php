<?php

	include_once('conexao.php');
	
	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$tipo = $_POST['tipo'];
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		
		$sqlUpdate = "update produtos set tipo = '$tipo', nome = '$nome', descricao = '$descricao'
		where produto_id = '$id'";
		
		$result = $conexao->query($sqlUpdate);
	}
	header('Location: produtos.php');
?>