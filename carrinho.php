<?php
session_start();

if (!isset($_SESSION['carrinho']))
{
	$_SESSION['carrinho'] = array();
}

if (isset($_GET['acao']))
{
	if ($_GET['acao'] == 'add')
	{
		$id = $_GET['id'];
		//echo 'inserido o ultimo produto código '.$id.'<br/>';
		
		if (!isset($_SESSION['carrinho'][$id]))
		{
			$_SESSION['carrinho'][$id] = 1;
			header('Location: carrinho.php');
		}
		else 
		{
			$_SESSION['carrinho'][$id] += 1;
			header('Location: carrinho.php');
		}
	}
	
	if ($_GET['acao'] == 'exc')
	{
		$id = $_GET['id'];

		if (isset($_SESSION['carrinho'][$id]))
		{
			$_SESSION['carrinho'][$id]--;
			if($_SESSION['carrinho'][$id] <= 0)
			{
				unset($_SESSION['carrinho'][$id]);
			}
			header('Location: carrinho.php');
		}
	}
	
	
	
	if ($_GET['acao'] == 'del')
	{
		$id = $_GET['id'];
		if(isset($_SESSION['carrinho'][$id]))
		{
			unset($_SESSION['carrinho'][$id]);
			header('Location: carrinho.php');
		}
	}
	
	
	//if ($_GET['acao'] == 'up')
	//{
		//if (is_array($_POST['prod']))
		//{
		//	foreach($_POST['prod'] as $id => $qtd )
		//	{
		//		$id = intval($id);
		//		$qtd = intval($qtd);
		//		if (!empty($qtd) || $qtd <> 0)
		//		{
		//			$_SESSION['carrinho'][$id] = $qtd;
		//			header('Location: carrinho.php');
		//		}
		//		else
		//		{
		//			unset($_SESSION['carrinho'][$id]);
		//			header('Location: carrinho.php');
		//		}
		//	}
		//}
	//}
}

?>

<html lang="pt-br">
	<head>
		<link rel="stylesheet" href="tentativas.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Carrinho</title>
		<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
		*{margin:0 auto; padding:0; box-sizing: border-box; font-family: 'Poppins',sans-serif;}
		
		body {
			background-color: #eee;
		}
		
		td {
		  /*border: 1px solid;*/
		  padding: 5px 5px 5px 5px;
		}
		
		th{
			padding: 5px 5px 5px 5px;
		}
		
		table {
		  width: 90%;
		  border-collapse: collapse;
		  margin: auto;
		  text-align: center;
		  background-color: #fff;
		}
		
		.tb{
			border-radius: 15px 15px 0 0;
		}
		
		thead tr th {
			border-bottom: 1px solid #a9a9a9;
		}
		
		tbody tr td {
			border-bottom: 1px solid #a9a9a9;
		}
		
		.imagem {
			max-width: 50%;
			max-height: 50%;
		}
		
		form{
			text-align: center;
		}
		
		.tela{
			margin: auto;
            background-color: rgba(0,0,0,0.8);
            padding: 50px;
            border-radius: 15px;
            color: #fff;
			width: 25%;
			text-align:center;
        }

        .caixat{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
		
		.botao{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 75%;
            border-radius: 10px;
            color: #fff;
            font-size: 15px;
        }

        .botao:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
		
		.remover{
			text-decoration: none;
			color: black;
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
			
			/*main {
				background: url("img/ESCOLAR/crianca.png") no-repeat
				center center;
				background-size: cover;
				height: 120vh;
			}*/
			
			.nav-list {
				list-style: none;
				display: flex;
			}
			
			.nav-list li {
				/*letter-spacing: 3px;*/
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
				background-color: #ffe401;
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
			
			.aumentar{
				margin-left: 5px;
			}
			
			.diminuir{
				margin-right: 5px;
			}
		
		</style>
		
	</head>
	<body>
		<header>
			<nav>
				<a class="logoo" href="pagina1.html"><img src="img/logo.png"></a>
				<div class="mobile-menu">
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>
				<ul class="nav-list">
					<li><a href="pagina1.html">Home</a></li>
					<li><a href="escolaralmirante.php">Escolar</a></li>
					<li><a href="linhacamisas.php">Linha<br>Camisas</a></li>
					<li><a href="linhaoperacional.php">Linha Operacional</a></li>
					<li><a href="acessorios.php">Acessórios</a></li>
					<li><a href="linhasocial.php">Linha Social</a></li>
					<li><a href="linhahospitalar.php">Linha Hospitalar<br>e Estética</a></li>
					<li><a class="nav__link nav__link--btn" href="carrinho.php">Orçamento</a></li>
				</ul>
			</nav>
		</header>
		<br><br><br>
		
		<script src="mobile-navbar.js"></script>
		
		
		<br><br>
		<form action="?acao=up" method="post">
		
			
		
		<?php
		
		if (count($_SESSION['carrinho'])==0 )
		{
			echo '<br><br>';
			echo 'Não há pedido!';
			
		}
		else
		{
			echo "<table class='tb' cellspacing='10' cellpadding='5' > 
			<thead>
				<tr>
					<th width='244'>Imagem</th>
					<th width='244'>Produto</th>
					<th width='244'>Quantidade</th>
					<th width='244'>Remover</th>
				</tr>
				</thead>";
				
			include "conexao.php";
			
			foreach ($_SESSION['carrinho'] as $id => $qtd)
			{
				$sql = "select produto_id, imagem, nome, descricao from produtos where produto_id = '$id'";
				
				$resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
				$produtos = mysqli_fetch_array($resultado);
				
				$imagem = $produtos['imagem'];
				$nome = $produtos['nome'];
				
				
				echo "<tbody><tr>
						<td width='244'><img class='imagem' src='$imagem'/></td>
						<td width='244'>$nome</td>
						<td width='244'><a class='diminuir' href='carrinho.php?acao=exc&id=$id'>
						<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-dash' viewBox='0 0 16 16'>
						  <path d='M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z'/>
						</svg>
						</a>
						". $qtd ." 
						<a class='aumentar' href='carrinho.php?acao=add&id=$id'>
						<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-lg' viewBox='0 0 16 16'>
						  <path fill-rule='evenodd' d='M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z'/>
						</svg>
						</a> 
						</td>
						<td width='64'><a class='remover' href='carrinho.php?acao=del&id=$id'>
						<!--svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-lg' viewBox='0 0 16 16'>
						  <path d='M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z'/>
						</svg-->
						
						<svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-x-square' viewBox='0 0 16 16'>
						  <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
						  <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
						</svg>
						</a></td>
						</tr></tbody>";
			}
			echo '</table>';
		}
		?>
			<!--p><input type="submit" value="Atualizar"/></p-->
			
		
		</form><br><br>
		
		<?php
			if ( count($_SESSION['carrinho'])<>0)
			{
				echo "
					
					
						<form action='finalizar.php' method='GET'>
							<div class='tela'>
							<p><input class='caixat' type='text' name='nome' placeholder='Nome Completo' required></p><br>
							<p><input class='caixat' type='email' name='email' placeholder='Email' required></p><br>
							<p><input class='caixat' type='text' name='celular' placeholder='Celular' required></p><br>
							<p><input class='botao' type='submit' name='finalizar' value='Finalizar Pedido'/></p>
							</div>
						</form>";
				
				
			}
			
		?>
		
		<!-- LIBRAS -->
            <div vw class="enabled">
                <div vw-access-button class="active"></div>
                <div vw-plugin-wrapper>
                    <div class="vw-plugin-top-wrapper"></div>
                </div>
            </div>
            <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
            <script>
                new window.VLibras.Widget('https://vlibras.gov.br/app');
            </script>
         <!--FIM LIBRAS-->
		 <br><br><br><br>
		 
		 
		 <!--footer>
                <div class="contents">
                    <div class="left boxx">
                        <div class="upper">
                            <div class="topic">Endereço</div>
							<div class="endereco">
                            <a
                                href="https://www.google.com/maps/place/Aldeia+109+-+Uniformes+Profissionais+e+Escolares/@-22.8367269,-42.1051134,17z/data=!3m1!4b1!4m5!3m4!1s0x970fbf36855869:0x5bcc1dd731035148!8m2!3d-22.8367269!4d-42.1029247"><i
                                    class="fas fa-map-marker-alt"></i> R. Duque de Caxias, 75 - Centro, São
                                Pedro da Aldeia - RJ,
                                28941-166</a>
								</div>
                        </div>
                        <div class="lower">
                            <div class="topic">Contatos</div>
                            <div class="phone">
                                <a href="tel:+55-22-2621-1015"><i class="fas fa-phone-volume"></i>(22)
                                    2621-1015</a><br>
                                <a
                                    href="https://api.whatsapp.com/send/?phone=%2B5522988285219&text&type=phone_number&app_absent=0">
                                    <i class="fab fa-whatsapp"></i>(22) 98828-5219</a>
                            </div>
                            <div class="email">
                                <a
                                    href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GTvVlcSHxwLXnMGBPDJBrgnnPMsdfcKJvDnWvfNwtXQkfhjMpFkTWgZwBjVMZCgknmhmrtqpGHflX">
                                    <i class="fas fa-envelope"></i>aldeia109@gmail.com</a>

                                <div class="topic">Redes sociais</div>
                                <div class="redes">
                                    <a href="https://pt-br.facebook.com/Aldeia109uniformes/"><i
                                            class="fab fa-facebook-f"></i>Aldeia 109 Uniformes</a><br>
                                    <a href="https://www.instagram.com/aldeia109uniformes/"><i
                                            class="fab fa-instagram"></i>@aldeia109uniformes</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="middle boxx">
                        <div class="topic">Horários</div>
                        <div class="topicc">Domingo Fechado</div>
                        <div class="topicc">Segunda-feira 09:00–18:00</div>
                        <div class="topicc">Terça-feira 09:00–18:00</div>
                        <div class="topicc">Quarta-feira 09:00–18:00</div>
                        <div class="topicc">Quinta-feira 09:00–18:00</div>
                        <div class="topicc">Sexta-feira 09:00–18:00</div>
                        <div class="topicc">Sábado 09:00–13:00</div><br>

                    </div>
                    <div>
                        <p class="logo"><img src="img/logoo.png"></p>
                    </div>
                    <div class="bottom">
                        <br>
                        <p>EquipeIFRJ</a>©2022 </p>
                    </div>
            </footer-->
		 
		 
	</body>
</html>