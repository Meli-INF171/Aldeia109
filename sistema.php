<?php
session_start();
include('verificalogin.php');
include_once('conexao.php');

if(!empty($_GET['search']))
{
	$data = $_GET['search'];
	$sql = "select * from tb_pedidos where codigo like '%$data%' or cliente like '%$data%' or email like '%$data%' or celular like '%$data%' order by codigo desc";
} 
else 
{
	$sql = "select * from tb_pedidos order by codigo desc";
}

$result = $conexao->query($sql);



if(!empty($_GET['pes']))
{
	$data = $_GET['pes'];
	$s = "select * from tb_pedido_itens where pedido like '%$data%' order by codigo desc";
} 
else 
{
	$s = "select * from tb_pedido_itens order by codigo desc";
}

$resultado = $conexao->query($s);


?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
		*{margin:0; padding:0; box-sizing: border-box; font-family: 'Poppins',sans-serif;}
		
		body { 
			background-color: #eee;
		}

		h2.title{
			background-color: rgba(0,0,0,0.8);
			width:100%;
			padding:20px;
			text-align: center;
			color: white;
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
		}
		
		.tb{
			background: #B0C4DE;
			border-radius: 15px 15px 0 0;
		}
		
		tr:nth-child(even) {
			background:lightgray;
		}
		
		thead tr th {
			border-bottom: 1px solid #ddd;
		}
		
		.bntsearch{
			background: blue;
			color: white;
			font: 12px;
			border: blue;
			padding: 5px 5px;
			margin-left: 5px;
			//margin-right: 5px;
			cursor: pointer;
			border-radius: 5px 5px 5px 5px;
		}
		button:hover {
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.boxsearch{
			display: flex;
			justify-content: center;
		}
		
		.boxsearch input{
			width: 600px;
		}
		
		a.bnt img {
			width: 30px;
			height: 30px;
			background: #fff;
			border-radius: 6px;
			padding: 5px 5px;
		}
		
		a.bnt2 img {
			width: 30px;
			height: 30px;
			background: #fff;
			border-radius: 6px;
			padding: 5px 5px;
		}
		
		/*.sair a {
			text-decoration: none;
			color: blue;
		}*/
		
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
			

	</style>
</head>
<body>
	<header>
			<nav>
				<a class="logoo" href="/"><img src="img/logo.png"></a>
				<div class="mobile-menu">
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>
				<ul class="nav-list">
					<li><a href="sistema.php">Home</a></li>
					<li><a href="produtos.php">Produtos</a></li>
					<li><a href="formularioupload.php">Adicionar Produtos</a></li>
					<li><a href="logout.php">Sair</a></li>
				</ul>
			</nav>
		</header>
	<!--h2 class="title">Pedidos</h2-->
		<br><br><br><br><br>
		
		<div class='boxsearch'>
			<input type="search" placeholder="Pesquisar" id="pesquisar">
			<button onclick="searchData()" class="bntsearch">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
				</svg>
			</button>
		</div>
	<br>
	<div>
		<table class="tb" cellspacing="10" cellpadding="5">
		  <thead>
			<tr>
			  <th>Código</th>
			  <th>Data e hora</th>
			  <th>Cliente</th>
			  <th>Celular</th>
			  <th>Email</th>
			  <!--th>Configurar</th-->
			</tr>
		  </thead>
		  <tbody>
			<?php
				while($user_data = mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>".$user_data['codigo']."</td>";
					echo "<td>".$user_data['datahora']."</td>";
					echo "<td>".$user_data['cliente']."</td>";
					echo "<td>".$user_data['celular']."</td>";
					echo "<td>".$user_data['email']."</td>";
					echo "</tr>";
				}
			?>
		  </tbody>
		</table>
	</div>
	
	<br><br>
		<div class='boxsearch'>
			<input type="search" placeholder="Pesquisar" id="pes">
			<button onclick="pesData()" class="bntsearch">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
				</svg>
			</button>
		</div>
	<br>
	<div>
		<table class="tb" cellspacing="10" cellpadding="5">
		  <thead>
			<tr>
			  <th>Código</th>
			  <th>Tipo</th>
			  <th>Produto</th>
			   <th>Descrição</th>
			  <th>Quantidade</th>
			  <th>N° Pedido</th>
			  <th>Cod Produto</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				while($user_data = mysqli_fetch_assoc($resultado))
				{
					echo "<tr>";
					echo "<td>".$user_data['codigo']."</td>";
					echo "<td>".$user_data['tipo']."</td>";
					echo "<td>".$user_data['produto']."</td>";
					echo "<td>".$user_data['descricao']."</td>";
					echo "<td>".$user_data['qtd']."</td>";
					echo "<td>".$user_data['pedido']."</td>";
					echo "<td>".$user_data['codproduto']."</td>";
					echo "</tr>";
				}
			?>
		  </tbody>
		</table>
	</div>
	
	
	
	
	<br><br>
	
	
	
</body>

<script>
	var search = document.getElementById("pesquisar");
	
	search.addEventListener("keydown", function(event){
		if (event.key === "Enter")
		{
			searchData();
		}
	});
	
	function searchData()
	{
		window.location = 'sistema.php?search='+search.value;
	}
	
	
	var pes = document.getElementById("pes");
	
	pes.addEventListener("keydown", function(event){
		if (event.key === "Enter")
		{
			pesData();
		}
	});
	
	function pesData()
	{
		window.location = 'sistema.php?pes='+pes.value;
	}
	
</script>

</html>