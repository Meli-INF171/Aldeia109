<?php

	define("HOST", "127.0.0.1");
	define("USUARIO", "root");
	define("SENHA", "patrick147");
	define("DB", "aldeia109");
	
	
	$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>