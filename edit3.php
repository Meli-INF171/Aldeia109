<?php
	
	if (!empty($_GET['produto_id'])) {
		include_once('conexao.php');
		
		$id = $_GET['produto_id'];
		
		$sqlSelect = "select * from produtos where produto_id = $id";
		
		$result = $conexao->query($sqlSelect);
		
		if ($result->num_rows > 0)
		{
			while($user_data = mysqli_fetch_assoc($result))
			{
				$tipo = $user_data['tipo'];
				$nome = $user_data['nome'];
				$descricao = $user_data['descricao'];
			}
			
		}
		else{
			header('Location: produtos.php');
		}
		
	}
	else{
			header('Location: produtos.php');
		}
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide de imagens</title>
	<style>
		.voltar img {
				width: 50px;
				height: 50px;
				margin: 10px;
			}
			
			body{
            font-family: arial;
            background-color: #eee;
        }

        .tela{
            background-color: rgba(0,0,0,0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        .input-form{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .botao{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #fff;
            font-size: 15px;
        }

        .botao:hover{
            background-color: deepskyblue;
            cursor: pointer;
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
			
			
	</style>
</head>
<body>
	<a class="nav__link nav__link--btn" href="produtos.php">Voltar</a>
	<!--div class="voltar"><a href='produtos.php'><img src="img/voltar.png" alt="Voltar"></a></div-->
	<div class="tela">
	<form action="saveEdit3.php" method="POST">
        <p><input class="input-form" name="tipo" type="text" placeholder="Tipo" autofocus required value="<?php echo $tipo ?>"></p>
		<p><input class="input-form" name="nome" type="text" placeholder="Nome" required value="<?php echo $nome ?>"></p>
		<p><input class="input-form" name="descricao" type="text" placeholder="Descrição" required value="<?php echo $descricao ?>"></p>
		<input type="hidden" name="id" value="<?php echo $id ?>"><br>
		<input class="botao" type="submit" name="update" id="update" >
	</form>
	</div>
</body>
</html>