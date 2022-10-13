<?php
session_start();
require "conexao.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Linha Escolar</title>
		<meta name="viewport" content="width=device-width, initial-scale1.0">
		<style type="text/css">
			@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
			*{margin:0 auto; padding:0; box-sizing: border-box; font-family: 'Poppins',sans-serif;}
			
			body {
				background-color:#eee;
			}
			
			
			.carrinho-container{
				margin-top:10px;
				margin-bottom: 25px;
				display: grid;
				grid-template-columns: 1fr 1fr 1fr;
				grid-gap: 20px;
			}
			
			.box1{
				width: 300px;
				height: 455px;
				border-radius: 10px;
				padding: 20px;
				//position:relative;
				margin-top: 15px;
				background-color: #fff;
			}
			
			.box1 img{
				color:#404040;
				margin-top:10px;
				padding: 20px;
				width:100%;
				height:235px;
				object-fit: cover;
			}
			
			
			.box1 p {
				font-size: 13px;
				color: #bbb;
			}
			
			.box2{
				width: 300px;
				height: 475px;
				/*border: 1px solid #505050;*/
				border-radius: 10px;
				padding: 20px;
				margin-top: 15px;
				background-color: #fff;
			}
			
			.box2 img{
				color:#404040;
				margin-top:10px;
				padding: 20px;
				width:100%;
				height:260px;
				object-fit: cover;
			}
			
			
			.box2 p {
				font-size: 13px;
				color: #bbb;
			}
			
			.box3{
				width: 300px;
				height: 420px;
				/*border: 1px solid #505050;*/
				border-radius: 10px;
				padding: 20px;
				margin-top: 15px;
				background-color: #fff;
			}
			
			.box3 img{
				color:#404040;
				margin-top:10px;
				padding: 20px;
				width:100%;
				height:200px;
				object-fit: cover;
			}
			
			
			.box3 p {
				font-size: 13px;
				color: #bbb;
			}
			
			.box4{
				width: 300px;
				height: 435px;
				/*border: 1px solid #505050;*/
				border-radius: 10px;
				padding: 20px;
				margin-top: 15px;
				background-color: #fff;
			}
			
			.box4 img{
				color:#404040;
				margin-top:10px;
				padding: 20px;
				width:100%;
				height:200px;
				object-fit: cover;
			}
			
			
			.box4 p {
				font-size: 13px;
				color: #bbb;
			}
			
			.box5{
				width: 300px;
				height: 420px;
				/*border: 1px solid #505050;*/
				border-radius: 10px;
				padding: 20px;
				margin-top: 15px;
				background-color: #fff;
			}
			
			.box5 img{
				color:#404040;
				margin-top:10px;
				padding: 20px;
				width:100%;
				height:200px;
				object-fit: cover;
			}
			
			
			.box5 p {
				font-size: 13px;
				color: #bbb;
			}
			
			.box6{
				width: 300px;
				height: 420px;
				/*border: 1px solid #505050;*/
				border-radius: 10px;
				padding: 20px;
				margin-top: 15px;
				background-color: #fff;
			}
			
			.box6 img{
				color:#404040;
				margin-top:10px;
				padding: 20px;
				width:100%;
				height:200px;
				object-fit: cover;
			}
			
			
			.box6 p {
				font-size: 13px;
				color: #bbb;
			}
			
			.box7{
				width: 300px;
				height: 430px;
				/*border: 1px solid #505050;*/
				border-radius: 10px;
				padding: 20px;
				margin-top: 15px;
				background-color: #fff;
			}
			
			.box7 img{
				color:#404040;
				margin-top:10px;
				padding: 20px;
				width:100%;
				height:200px;
				object-fit: cover;
			}
			
			
			.box7 p {
				font-size: 13px;
				color: #bbb;
			}
			
			.box8{
				width: 300px;
				height: 455px;
				/*border: 1px solid #505050;*/
				border-radius: 10px;
				padding: 20px;
				margin-top: 15px;
				background-color: #fff;
			}
			
			.box8 img{
				color:#404040;
				margin-top:10px;
				padding: 20px;
				width:100%;
				height:200px;
				object-fit: cover;
			}
			
			
			.box8 p {
				font-size: 13px;
				color: #bbb;
			}
			
			.box9{
				width: 300px;
				height: 420px;
				/*border: 1px solid #505050;*/
				border-radius: 10px;
				padding: 20px;
				margin-top: 15px;
				background-color: #fff;
			}
			
			.box9 img{
				color:#404040;
				margin-top:10px;
				padding: 20px;
				width:100%;
				height:200px;
				object-fit: cover;
			}
			
			
			.box9 p {
				font-size: 13px;
				color: #bbb;
			}
			
			.botao a{
				width:100%;
				text-decoration: none;
				display: flex;
				width:100%;
				padding:10px;
				text-align: center;
				text-decoration: none;
			}
			
			button {
				margin-top: 10px;
				/*margin-left: 30px;*/
				margin-bottom: 20px;
				border: 2px solid #0000CD;
				border-radius: 12px;
				background-color: #fff;
			}
			
			button:hover {
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
			}
			
			.b2{
				color: #0000CD;
				border: 2px solid #0000CD;
			}
			.b22{
				color: #0000CD;
			}
			
			.b11{
				color: #0000CD;
			}
			
			.botao {
				display: flex;
				margin: auto;
			}
			
			@media (max-width: 999px){
				.carrinho-container{
					grid-template-columns: 1fr 1fr;
				}
			}
			
			@media (max-width: 620px){
				.carrinho-container{
					grid-template-columns: 1fr;
				}
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
				height: 25vh;
				padding: 2em 3em;
			}
			
			main {
				background: url("img/ESCOLAR/crianca.png") no-repeat
				center center;
				background-size: cover;
				height: 120vh;
			}
			
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
			  
			  .nav-list li a {
				  color: black;
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
			
			
			.home-about {
				padding: 4em 0;
				max-width: 900px;
				margin: 0 auto;
				}
				
			.columns {
				display: flex;
				}
				
			.col{
				margin-left: 1.5em;
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
				
			.text1 {
				font-size: 15px;
			}
			
			.text2 {
				font-size: 15px;
			}
			
			.more-stuff-grid{
				display: grid;
				grid-template-columns: 1fr 1fr;
				grid-gap: 2em;
				align-items: center;
				
			}
			
			
		</style>
		
		 <link rel="stylesheet" href="tentativas.css">
		
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
		<main></main>
		<br><br><br>
		<div class="home-about">
            <div class="columns">
                <div class="col fade-in" style="font-size: 20px; color: #12196b;">
                    
					<b><h3>ESCOLHA A MELHOR FORMA DE COMERCIALIZAR SEU UNIFORME ESCOLAR.</h3></b><br>
                    <b><p class="text1">O uniforme escolar ajuda a criança a diferenciar e compreender as 
					demandas dos diversos ambientes, entendendo que quando está uniformizada, 
					inicia sua rotina escolar, onde existem regras e pessoas distintas do ambiente 
					familiar que estarão disponíveis para acolher, brincar, estimular e estabelecer 
					limites específicos.</p></b><br>
					<p class="text2">A Linha Escolar da ALDEIA 109 UNIFORMES, é pensada e desenvolvida buscando materiais 
					que possam trazer mais conforto, proteção e qualidade para acompanhar os desafios do dia 
					a dia escolar do seu filhos.</p>.
                    <br>

                </div>
                <div class="col fade-in">
                    <img style="width: 400px; height: 400px;" src="img/ESCOLAR/criancas2.png" alt="" class="slide-in from-right" />
                </div>

            </div>
			
        </div>
		
        <!--FIM INFROMAÇÃO-->
		<script src="mobile-navbar.js"></script>
		
		<br><br>
		
		<div class="more-stuff-grid">
                <p class="texto" style="font-size: 50px ;  color: #12196b;">
                    <b>NOSSOS UNIFORMES</B>
                </p>
                <img src="img/uni.png" alt="" class="slide-in from-right" />
            </div>
		
		<br><br><br>
		
		<div class="home-about">
            <div class="columns">
                <div class="col fade-in" style="font-size: 25px; color: #12196b;">
                    <br>
                    <b><br>VENDA DIRETA AOS PAIS E ALUNOS VIA LOJA FÍSICA.</b><br>
                     As logos das escolas ao lado são as que trabalhamos neste sistema.
                     <BR>

                </div>
                <div class="col fade-in">
                    <img src="img/UNI FISICO.png" alt="" class="slide-in from-right" />
                </div>

            </div>
        </div>
		
		<br><br><br>
		<h3 style="font-size: 20px; color: #12196b; margin-left: 75px;">Colégio Almirante</h3>
		<div class="carrinho-container">
		<?php
			$sql = "select * from produtos where tipo = 'COLÉGIO ALMIRANTE'"; //where tipo(acessorio, uniforme...) = nome da linha
			$query = $conexao->query($sql);	
				while ($produtos = $query->fetch_array()){
						//echo $produtos["produto_id"]."</br>";
				?>
			<div class="box1">
				<img src="<?php echo $produtos['imagem'] ?>" /><br><br>
				<h4><?php echo $produtos["nome"] ?></h4>
				<p><?php echo $produtos["descricao"] ?></p>
				<div class = "botao">
					<button type="submit" class="b1"><a class="b11" href="carrinho.php?acao=add&id=<?php echo $produtos['produto_id'] ?>">Adicionar</a></button>
					<button type="submit" class="b2"><a class="b22" href="carrinho.php?acao=exc&id=<?php echo $produtos['produto_id'] ?>">Remover</a></button>
				</div>
			</div>
		<?php
				}
			
		?>
		</div>
		<br><br>
		<h3 style="font-size: 20px; color: #12196b; margin-left: 75px;">Escola Arca de Noé</h3>
		<div class="carrinho-container">
		<?php
			$sql = "select * from produtos where tipo = 'ARCA DE NOÉ'"; //where tipo(acessorio, uniforme...) = nome da linha
			$query = $conexao->query($sql);	
				while ($produtos = $query->fetch_array()){
						//echo $produtos["produto_id"]."</br>";
				?>
			<div class="box2">
				<img src="<?php echo $produtos['imagem'] ?>" /><br><br>
				<h4><?php echo $produtos["nome"] ?></h4>
				<p><?php echo $produtos["descricao"] ?></p>
				<div class = "botao">
					<button type="submit" class="b1"><a class="b11" href="carrinho.php?acao=add&id=<?php echo $produtos['produto_id'] ?>">Adicionar</a></button>
					<button type="submit" class="b2"><a class="b22" href="carrinho.php?acao=exc&id=<?php echo $produtos['produto_id'] ?>">Remover</a></button>
				</div>
			</div>
		<?php
				}
			
		?>
		</div>
		<br><br>
		<h3 style="font-size: 20px; color: #12196b; margin-left: 75px;">Escola CESSA</h3>
		<div class="carrinho-container">
		<?php
			$sql = "select * from produtos where tipo = 'CESSA'"; //where tipo(acessorio, uniforme...) = nome da linha
			$query = $conexao->query($sql);	
				while ($produtos = $query->fetch_array()){
						//echo $produtos["produto_id"]."</br>";
				?>
			<div class="box3">
				<img src="<?php echo $produtos['imagem'] ?>" /><br><br>
				<h4><?php echo $produtos["nome"] ?></h4>
				<p><?php echo $produtos["descricao"] ?></p>
				<div class = "botao">
					<button type="submit" class="b1"><a class="b11" href="carrinho.php?acao=add&id=<?php echo $produtos['produto_id'] ?>">Adicionar</a></button>
					<button type="submit" class="b2"><a class="b22" href="carrinho.php?acao=exc&id=<?php echo $produtos['produto_id'] ?>">Remover</a></button>
				</div>
			</div>
		<?php
				}
			
		?>
		</div>
		<br><br>
		<h3 style="font-size: 20px; color: #12196b; margin-left: 75px;">Escola Chapeuzinho Vermelho</h3>
		<div class="carrinho-container">
		<?php
			$sql = "select * from produtos where tipo = 'CHAPEUZINHO'"; //where tipo(acessorio, uniforme...) = nome da linha
			$query = $conexao->query($sql);	
				while ($produtos = $query->fetch_array()){
						//echo $produtos["produto_id"]."</br>";
				?>
			<div class="box4">
				<img src="<?php echo $produtos['imagem'] ?>" /><br><br>
				<h4><?php echo $produtos["nome"] ?></h4>
				<p><?php echo $produtos["descricao"] ?></p>
				<div class = "botao">
					<button type="submit" class="b1"><a class="b11" href="carrinho.php?acao=add&id=<?php echo $produtos['produto_id'] ?>">Adicionar</a></button>
					<button type="submit" class="b2"><a class="b22" href="carrinho.php?acao=exc&id=<?php echo $produtos['produto_id'] ?>">Remover</a></button>
				</div>
			</div>
		<?php
				}
			
		?>
		</div>
		<br><br>
		<h3 style="font-size: 20px; color: #12196b; margin-left: 75px;">Escola Lápis de Cor</h3>
		<div class="carrinho-container">
		<?php
			$sql = "select * from produtos where tipo = 'LAPIS DE COR'"; //where tipo(acessorio, uniforme...) = nome da linha
			$query = $conexao->query($sql);	
				while ($produtos = $query->fetch_array()){
						//echo $produtos["produto_id"]."</br>";
				?>
			<div class="box5">
				<img src="<?php echo $produtos['imagem'] ?>" /><br><br>
				<h4><?php echo $produtos["nome"] ?></h4>
				<p><?php echo $produtos["descricao"] ?></p>
				<div class = "botao">
					<button type="submit" class="b1"><a class="b11" href="carrinho.php?acao=add&id=<?php echo $produtos['produto_id'] ?>">Adicionar</a></button>
					<button type="submit" class="b2"><a class="b22" href="carrinho.php?acao=exc&id=<?php echo $produtos['produto_id'] ?>">Remover</a></button>
				</div>
			</div>
		<?php
				}
			
		?>
		</div>
		<br><br>
		<h3 style="font-size: 20px; color: #12196b; margin-left: 75px;">Escola Missão</h3>
		<div class="carrinho-container">
		<?php
			$sql = "select * from produtos where tipo = 'MISSAO'"; //where tipo(acessorio, uniforme...) = nome da linha
			$query = $conexao->query($sql);	
				while ($produtos = $query->fetch_array()){
						//echo $produtos["produto_id"]."</br>";
				?>
			<div class="box6">
				<img src="<?php echo $produtos['imagem'] ?>" /><br><br>
				<h4><?php echo $produtos["nome"] ?></h4>
				<p><?php echo $produtos["descricao"] ?></p>
				<div class = "botao">
					<button type="submit" class="b1"><a class="b11" href="carrinho.php?acao=add&id=<?php echo $produtos['produto_id'] ?>">Adicionar</a></button>
					<button type="submit" class="b2"><a class="b22" href="carrinho.php?acao=exc&id=<?php echo $produtos['produto_id'] ?>">Remover</a></button>
				</div>
			</div>
		<?php
				}
			
		?>
		</div>
		<br><br>
		<h3 style="font-size: 20px; color: #12196b; margin-left: 75px;">Escola Moranguinho</h3>
		<div class="carrinho-container">
		<?php
			$sql = "select * from produtos where tipo = 'MORANGUINHO'"; //where tipo(acessorio, uniforme...) = nome da linha
			$query = $conexao->query($sql);	
				while ($produtos = $query->fetch_array()){
						//echo $produtos["produto_id"]."</br>";
				?>
			<div class="box7">
				<img src="<?php echo $produtos['imagem'] ?>" /><br><br>
				<h4><?php echo $produtos["nome"] ?></h4>
				<p><?php echo $produtos["descricao"] ?></p>
				<div class = "botao">
					<button type="submit" class="b1"><a class="b11" href="carrinho.php?acao=add&id=<?php echo $produtos['produto_id'] ?>">Adicionar</a></button>
					<button type="submit" class="b2"><a class="b22" href="carrinho.php?acao=exc&id=<?php echo $produtos['produto_id'] ?>">Remover</a></button>
				</div>
			</div>
		<?php
				}
			
		?>
		</div>
		<br><br>
		<h3 style="font-size: 20px; color: #12196b; margin-left: 75px;">Escola Paraíso</h3>
		<div class="carrinho-container">
		<?php
			$sql = "select * from produtos where tipo = 'PARAISO'"; //where tipo(acessorio, uniforme...) = nome da linha
			$query = $conexao->query($sql);	
				while ($produtos = $query->fetch_array()){
						//echo $produtos["produto_id"]."</br>";
				?>
			<div class="box8">
				<img src="<?php echo $produtos['imagem'] ?>" /><br><br>
				<h4><?php echo $produtos["nome"] ?></h4>
				<p><?php echo $produtos["descricao"] ?></p>
				<div class = "botao">
					<button type="submit" class="b1"><a class="b11" href="carrinho.php?acao=add&id=<?php echo $produtos['produto_id'] ?>">Adicionar</a></button>
					<button type="submit" class="b2"><a class="b22" href="carrinho.php?acao=exc&id=<?php echo $produtos['produto_id'] ?>">Remover</a></button>
				</div>
			</div>
		<?php
				}
			
		?>
		</div>
		<br><br>
		<h3 style="font-size: 20px; color: #12196b; margin-left: 75px;">Escola Potêncial</h3>
		<div class="carrinho-container">
		<?php
			$sql = "select * from produtos where tipo = 'POTENCIAL'"; //where tipo(acessorio, uniforme...) = nome da linha
			$query = $conexao->query($sql);	
				while ($produtos = $query->fetch_array()){
						//echo $produtos["produto_id"]."</br>";
				?>
			<div class="box9">
				<img src="<?php echo $produtos['imagem'] ?>" /><br><br>
				<h4><?php echo $produtos["nome"] ?></h4>
				<p><?php echo $produtos["descricao"] ?></p>
				<div class = "botao">
					<button type="submit" class="b1"><a class="b11" href="carrinho.php?acao=add&id=<?php echo $produtos['produto_id'] ?>">Adicionar</a></button>
					<button type="submit" class="b2"><a class="b22" href="carrinho.php?acao=exc&id=<?php echo $produtos['produto_id'] ?>">Remover</a></button>
				</div>
			</div>
		<?php
				}
			
		?>
		</div>
		
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
		 
		 <footer>
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
            </footer>
		 <script type="text/javascript">(function(n,r,l,d){try{var h=r.head||r.getElementsByTagName("head")[0],s=r.createElement("script");s.defer=true;s.setAttribute("type","text/javascript");s.setAttribute("src",l);n.neuroleadId=d;h.appendChild(s);}catch(e){}})(window,document,"https://cdn.leadster.com.br/neurolead/neurolead.min.js", 54975);</script>

	</body>
</html>
