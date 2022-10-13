<?php
	session_start();
	require "conexao.php";
	
	if (isset($_GET['finalizar']))
				{
					$nome = $_GET['nome'];
					$email = $_GET['email'];
					$celular = $_GET['celular'];
					
					$sqlgeraped = "insert into tb_pedidos (cliente, email, celular) values ('$nome', '$email', '$celular')";
					mysqli_query($conexao, $sqlgeraped) or die (mysqli_error($conexao));
					
					$x = 'select max(codigo) as maiorcodigo from tb_pedidos';
					
					$queryconsulta = mysqli_query($conexao,$x) or die (mysqli_error());
					$produtos = mysqli_fetch_assoc($queryconsulta);
					
					$ultpedido =0;
					$ultpedido = $produtos['maiorcodigo'];
					
					echo '<b><i>Último pedido:</i></b>' . $ultpedido;
					
					foreach ($_SESSION['carrinho'] as $id => $qtd)
					{
						$sql = "select produto_id, tipo, imagem, nome, descricao from produtos where produto_id = '$id'";
						
						$resultado = mysqli_query($conexao,$sql) or die (mysqli_error());
						$registro = mysqli_fetch_array($resultado);
						$produto = $registro[3];
						$descricao = $registro[4];
						$tipo = $registro[1];
						$codproduto = $registro[0];
						
						$inspeditem = "insert into tb_pedido_itens (produto, tipo, descricao, qtd, codproduto, pedido) values('$produto', '$tipo', '$descricao', '$qtd', '$codproduto', '$ultpedido')";
						
						mysqli_query($conexao,$inspeditem) or die (mysqli_error());
					}
					
					session_unset();
					session_destroy();
					header('Location: carrinho.php');
				}
			header('Location: carrinho.php');

?>