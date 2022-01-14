	<?php
	/*
	* Formulario de consulta de cadastro de clientes 
	* feito para a visão ótica para fins de agilizar os processos que demandam
	* a consulta do cadastro dos clientes facilitando o trabalho dos funcionarios.
	* e contribuindo com o meio ambiente ;pois finda se o uso do papel para este 
	* mesmo fim.
	* ----------------------------------------------------------------------------
	* Autor: Denilson Ribeiro de França.
	* Empresa: Infotec soluções em tecnologia. Portadora dos direitos sobre o código.
	* Versão do código: 1.0 
	* Data: 05/01/2022
	*/
	//conecta ao banco de dados
	include_once("conexao.php");
		
	//query SQL para selecionar os dados da tabela Cliente
	$lista = mysqli_query($link, "SELECT * FROM Cliente");
	?>
		<!DOCTYPE html>
		<html>
		<head>
			 <meta charset="utf-8">
			 <meta http-equiv="X-UA-Compatible" content="IE=edge">
			 <meta name="viewport" content="width=device-width, initial-scale=1">
			 <meta charset="utf-8">
			 <title>Visão-otica</title>
			 <link href="css/bootstrap.css" rel="stylesheet">
			 <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
			 <script src="js/ie-emulation-modes-warning.js"></script>
			 <link rel="icon" href="imagens\Logo4.jpg">

			 <style type="text/css">
				body{
					text-align: center;
					height: 100%
				}
				.container{ 
				line-height: 7px;
				}
				.row{
					width: 100%;
					min-height: 100%;
				}
				#logo{
					margin: auto;
					padding: auto;
					background-color: black;
					color: white;
					width: 300px;
					height: 70px;
					border-radius: 50px;
				}
				#a{
					margin: auto;
					padding: auto;
					font-size: 12pt;
					display: inline;
					text-align: center;
					}
					a:hover{
						text-decoration: none;
						text-color: black;
					}
					
			 </style>
			  <script>
			alert("Antes de excluir um cadastro pense bem. Esta ação excluirá o cadastro permanentemente.");
		 </script>

		</head>
		<body>
			<header>
				<div style="width: 100%; height: px;">
					
				</div>
			</header>
			<div class="container">
				<label>
					<div id="logo"> 
						<center>			
							<h1>Visão-otica</h1>			
							<h4>A melhor opção para sua visão!</h4>
						</center>
					</div>
				</label>
				<hr>
				<div class="container">
					<body>
					<label><h1>Consulta</h1></label>
		<a class="btn btn-success" style="float: right" href="index.php" role="button">Cadastrar</a>
		<div id="ret" class="retangulo"style="overflow:scroll;height:450px;width:100%;overflow:auto;">
			<table style="width:100%; border:1px";>
			<tr>
			<th> Codigo: </th>
			<th> Loja: </th>
			<th> Vendedora: </th>
			<th> Data da compra: </th>
			<th> Cliente: </th>

			</tr>
			<hr>
		<?php
			//instrução de repetição while com a função mysqli_fetch_array
			while($linha = mysqli_fetch_array($lista)) {
		?>
			<tr>
			<td><?= $linha['id'] ?></td>
			<td><?= $linha['Loja'] ?></td>
			<td><?= $linha['Vendedora'] ?></td>
			<td><?= $linha['DataCompra'] ?></td>
			<td><?= $linha['Cliente'] ?></td>

			<td><a class="btn btn-danger" href="Excluir.php?id=<?= $linha['id'] ?>" role="button">Excluir</a></td>
			<td><a class="btn btn-info" href="detalhes.php?id=<?= $linha['id'] ?>" role="button">Detalhes</a></td>
			<td><a class="btn btn-warning" href="formularioalterar.php?id=<?= $linha['id'] ?>" role="button">Alterar</a></td>
			<td><a class="btn btn-secondary" href="criarpdf.php?id=<?= $linha['id'] ?>" role="button">Gerar Relatório</a></td>
			</tr>
		<?php
			}
		?>
			</table>
		<hr>

		</div>				
		<div class="container">
		<footer>
			
		</footer>
		</div>
	</body>
	</html>