<?php
	
	if (!empty($_GET['produto_id'])) {
		include_once('conexao.php');
		
		$id = $_GET['produto_id'];
		
		$sqlSelect = "select * from produtos where produto_id = $id";
		
		$result = $conexao->query($sqlSelect);
		
		if ($result->num_rows > 0)
		{
			$sqlDelete = "delete from produtos where produto_id = $id";
			$resultDelete = $conexao->query($sqlDelete);
			
			
		}
		else{
			header('Location: produtos.php');
		}
		
	}
	else{
			header('Location: produtos.php');
		}
	
	header('Location: produtos.php');
?>