<?php

session_start();
include('verificalogin.php');
include("conexao.php");

if(isset($_FILES['imagem'])) {
	$arquivo = $_FILES['imagem'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$tipo = $_POST['tipo'];
	
	if($arquivo['error'])
		die('Falha ao enviar arquivo');
	
	
	if($arquivo['size'] > 2097152)
		die("Arquivo muito grande! Max: 2MB");
	
	
	$pasta = "img/ACESSORIOS/";
	$pasta2 = "img/ESCOLAR/ALMIRANTE/";
	$nomeDoArquivo = $arquivo['name'];
	$novoNomeDoArquivo = uniqid();
	$extensao = strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION));
	
	if ($extensao != "jpg" && $extensao != "png")
		die("Tipo de arquivo não aceito ");
	
	$imagem = $pasta . $novoNomeDoArquivo . "." . $extensao;
	$imagem2 = $pasta2 . $novoNomeDoArquivo . "." . $extensao;
	
	if ($tipo == "ACESSÓRIO"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	if ($tipo == "COLÉGIO ALMIRANTE"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	if ($tipo == "ARCA DE NOÉ"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	if ($tipo == "CESSA"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	if ($tipo == "CHAPEUZINHO"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	if ($tipo == "LAPIS DE COR"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	if ($tipo == "MISSAO"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	if ($tipo == "MORANGUINHO"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	if ($tipo == "PARAISO"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	if ($tipo == "POTENCIAL"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	
	if ($tipo == "HOSPITALAR"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	if ($tipo == "OPERACIONAL"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	if ($tipo == "SOCIAL"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}
	
	if ($tipo == "CAMISAS"){
		$deu_certo = move_uploaded_file($arquivo["tmp_name"], $imagem2);
		if ($deu_certo) {
			
			$conexao->query("insert into produtos (tipo, imagem, nome, descricao) values('$tipo', '$imagem2', '$nome', '$descricao')") or die($conexao->error);
			echo "<p>Arquivo enviado com sucesso! </p>";
		} else 
			echo "<p> Falha ao enviar arquivo </p>";
	}

}

?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		
		<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
		*{
			font-family: 'Poppins',sans-serif;
		}
		body{
            
            background-color: #eee;
        }
		
		.box{
			background-color: rgba(0,0,0,0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 60px;
            border-radius: 15px;
            color: #fff;
		}
		
		input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
			width: 90%;
        }

        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #fff;
            font-size: 15px;
        }

        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
		
		
		a {
				color: black;
				text-decoration: none;
				transition: 0.3s;
			}
			
			a:hover {
				opacity: 0.7;
			}
			
			.logoo {
				font-size: 24px;
				text-transform: uppercase;
				letter-spacing: 4px;
			}
			
			.logoo img{
				margin-top: 10px;
			}
			
			nav {
				display: flex;
				position: fixed;
				width: 100%;
				justify-content: space-around;
				align-items: center;
				background: #fff;
				height: 15vh;
				padding: 2em 3em;
			}
			
			main {
				background: url("img/HOSPITALAR/hospital.png") no-repeat
				center center;
				background-size: cover;
				height: 100vh;
			}
			
			.nav-list {
				list-style: none;
				display: flex;
			}
			
			.nav-list li {
				letter-spacing: 3px;
				margin-left: 32px;
				font-size: 15px;
			}
			
			.mobile-menu{
				display: none;
				cursor: pointer;
			}
			
			.mobile-menu div {
				width: 32px;
				height: 2px;
				background: black;
				margin: 8px;
				transition: 0.3s;
			}
			
			@media (max-width: 999px) {
			  body {
				overflow-x: hidden;
			  }
			  
			  nav {
				display: flex;
				width: 100%;
				justify-content: space-around;
				align-items: center;
				background: #fff;
				height: 15vh;
			}
			  
			  .nav-list {
				position: absolute;
				top: 8vh;
				right: 0;
				width: 50vw;
				height: 92vh;
				background: #fff;
				flex-direction: column;
				align-items: center;
				justify-content: space-around;
				transform: translateX(100%);
				transition: transform 0.3s ease-in;
			  }
			  .nav-list li {
				//margin-left: 0;
				opacity: 0;
			  }
			  .mobile-menu {
				display: block;
			  }
			}

			.nav-list.active {
			  transform: translateX(0);
			}
			
			@keyframes navLinkFade {
			  from {
				opacity: 0;
				transform: translateX(50px);
			  }
			  to {
				opacity: 1;
				transform: translateX(0);
			  }
			}

			.mobile-menu.active .line1 {
			  transform: rotate(-45deg) translate(-8px, 8px);
			}

			.mobile-menu.active .line2 {
			  opacity: 0;
			}

			.mobile-menu.active .line3 {
			  transform: rotate(45deg) translate(-5px, -7px);
			}
			
			.voltar img {
				width: 50px;
				height: 50px;
				margin: 10px;
			}
			
			.nav__link {
				--text: rgba(0, 0, 0, 0.944);
				--text-inverse: rgb(255, 255, 255);
				--spacing: 1em;
				text-decoration: none;
				color: inherit;
				display: inline-block;
				padding: calc(var(--spacing) / 2) var(--spacing);
				position: relative;
				text-transform: uppercase;
				letter-spacing: 2px;
				font-size: 0.9rem;
			  }
			  
			  .nav__link:after {
				content: "";
				position: absolute;
				bottom: 0;
				left: var(--spacing);
				right: var(--spacing);
				height: 2px;
				background: currentColor;
				-webkit-transform: scaleX(0);
				transform: scaleX(0);
				transition: -webkit-transform 150ms ease-in-out;
				transition: transform 150ms ease-in-out;
				transition: transform 150ms ease-in-out, -webkit-transform 150ms ease-in-out;
			  }
			  
			  .nav__link:hover::after {
				-webkit-transform: scaleX(1);
				transform: scaleX(1);
			  }
			  
			  .nav__link--btn {
				background-color: dodgerblue;
				border-radius: 2em;
				margin-left: 1em;
				transition: background 600ms ease-in-out;
				letter-spacing: 0.5px;
				padding: 0.75em 1.5em;
			  }
			  
			  .nav__link--btn:hover {
				background: var(--text);
				color: var(--text-inverse);
				border-color: var(--text);
			  }
			  
			  .nav__link--btn::after {
				display: none;
			  }
			  
			  .nav__link--btn--highlight {
				background: #271aa3;
				border-color: #000000;
				color: rgb(255, 255, 255);
			  }
			  
			  .nav__link--btn--highlight:hover {
				background: var(--text);
				border-color: var(--text);
			  }
			  
			  .div-select {
				width: 285px;
				/* Tamanho final do select */
				overflow: hidden;
				/* Esconde o conteúdo que passar do tamanho especificado */
			}

			.div-select select {
				background: url(http://www.webcis.com.br/images/imagens-noticias/select/ico-seta-select.gif) no-repeat #fff;
				/* Imagem de fundo (Seta) */
				background-position: 205px center;
				/*Posição da imagem do background*/
				width: 280px;
				/* Tamanho do select, maior que o tamanho da div "div-select" */
				height: 48px;
				/* altura do select, importante para que tenha a mesma altura em todo os navegadores */
				/*font-family: Arial, Helvetica, sans-serif;*/
				/* Fonte do Select */
				font-size: 15px;
				/* Tamanho da Fonte */
				padding: 13px 20px 13px 12px;
				/* Configurações de padding para posicionar o texto no campo */
				color: #5e5e5e;
				/* Cor da Fonte */
				text-indent: 0.01px;
				/* Remove seta padrão do FireFox */
				text-overflow: "";
			}

			/* Remove seta padrão do FireFox */
			.div-select select::-ms-expand {
				display: none;
			}
			/* Remove seta padrão do IE*/
			
			input[type="file"] {
				display: none;
			}
			label {
				padding: 10px 5px;
				width: 200px;
				background-color: #fff;
				color: #5e5e5e;
				//text-transform: uppercase;
				text-align: center;
				display: block;
				margin-top: 10px;
				cursor: pointer;
			}
		
		</style>
		
	</head>
	<body>
		<a class="nav__link nav__link--btn" href="sistema.php">Voltar</a>
		<div class="box">
		<h1>Adicionar novos produtos</h1>
			<form method="POST" enctype="multipart/form-data" action="">
				<input type="text" name="nome" placeholder="Nome do Produto">
				<br><br>
				<input type="text" name="descricao" placeholder="Descrição do Produto">
				<br><br>
				<div class="div-select">
					<select name="tipo" class="input-form" required>
						<option selected disabled value="">Selecione o tipo de produto</option>
						<option value="ACESSÓRIO">ACESSÓRIO</option>
						<option value="COLÉGIO ALMIRANTE">COLÉGIO ALMIRANTE</option>
						<option value="ARCA DE NOÉ">ARCA DE NOÉ</option>
						<option value="CESSA">CESSA</option>
						<option value="CHAPEUZINHO">CHAPEUZINHO</option>
						<option value="LAPIS DE COR">LAPIS DE COR</option>
						<option value="MISSAO">MISSAO</option>
						<option value="MORANGUINHO">MORANGUINHO</option>
						<option value="PARAISO">PARAISO</option>
						<option value="POTENCIAL">POTENCIAL</option>
						<option value="HOSPITALAR">HOSPITALAR</option>
						<option value="OPERACIONAL">OPERACIONAL</option>
						<option value="SOCIAL">SOCIAL</option>
						<option value="CAMISAS">CAMISAS</option>
					</select>
				</div>
				<br>
				<label for="arquivo">Selecione o arquivo</label>
				<input type="file" name="imagem" id="arquivo" required>
				<br>
				<button type="submit">Enviar arquivo</button>
		</form>
		</div>
	</body>
</html>