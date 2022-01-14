<?php

/*
* Código para a pesquisa das informações de um unico cadastro de clientes 
* feito para a visão ótica para fins de agilizar a os processos que demandam
* o cadastro dos clientes facilitando o trabalho dos funcionarios.
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
//usando o método POST para capturar o valor do campo CPF do CLIENTE 
$CPF = $_POST['CPF'];
//query SQL para selecionar os dados da tabela cadastro
$lista = mysqli_query($link, "SELECT * FROM Cliente WHERE CPF = '$CPF' LIMIT 1");
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
		.container, .row{
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
			tabela{
				margin: auto;
				padding: auto;
				
				height: 50%;
			}
	 		
	 </style>

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
			<label><h2>Cliente - detalhes</h2></label>
<div id="ret" style="overflow:scroll;height:650px;width:100%;overflow:auto;">
<table class="table-sm" style="width:100%";>
<hr>
<?php
//instrução de repetição while com a função mysqli_fetch_array
while($linha = mysqli_fetch_array($lista)) {
?>
<thead>
</thead>
<tbody>
<tr>
<th> Codigo: </th>
<th> Loja: </th>
<th> Vendedora: </th>
<th> Data da compra: </th>
</tr>
<tr>
<td><?= $linha['id'] ?></td>
<td><?= $linha['Loja'] ?></td>
<td><?= $linha['Vendedora'] ?></td>
<td><?= $linha['DataCompra'] ?></td>
</tr>
<tr>
<th> Cliente: </th>
<th> Data de nascimento: </th>
<th> Filiação: </th>
</tr>
<tr>
<td><?= $linha['Cliente'] ?></td>
<td><?= $linha['DataNascimento'] ?></td>
<td><?= $linha['Filiacao'] ?></td>
</tr>
<tr>
<th> Endereço: </th>
<th> Numero: </th>
<th> Cep: </th>
<th> Bairro: </th>
</tr>
<tr>
<td><?= $linha['Endereco'] ?></td>
<td><?= $linha['Numero'] ?></td>
<td><?= $linha['Cep'] ?></td>
<td><?= $linha['Bairro'] ?></td>
</tr>
<tr>
<th> Ponto de referencia: </th>
<th> Cidade: </th>
<th> Estado: </th>
</tr>
<tr>
<td><?= $linha['PdeReferencia'] ?></td>
<td><?= $linha['Cidade'] ?></td>
<td><?= $linha['Estado'] ?></td>
</tr>
<tr>
<th> Tel. fixo: </th>
<th> Tel. celular: </th>
<th> Email: </th>
</tr>
<tr>
<td><?= $linha['Fixo'] ?></td>
<td><?= $linha['Movel'] ?></td>
<td><?= $linha['email'] ?></td>
</tr>
<tr>
<th> Instagram: </th>
<th> Facebook: </th>
</tr>
<tr>
<td><?= $linha['Instagram'] ?></td>
<td><?= $linha['Facebook'] ?></td>
</tr>
<tr>
<th> RG: </th>
<th> Orgão expedidor: </th>
<th> Data de expedição: </th>
<th> CPF: </th>
</tr>
<tr>
<td><?= $linha['RG'] ?></td>
<td><?= $linha['OrgaoExpedidor'] ?></td>
<td><?= $linha['DataDeExpedicao'] ?></td>
<td><?= $linha['CPF'] ?></td>
</tr>
<tr>
<th> Profissão: </th>
<th> Empresa onde trabalha: </th>
<th> Função:</th>
</tr>
<tr>
<td><?= $linha['Profissao'] ?></td>
<td><?= $linha['trabalha'] ?></td>
<td><?= $linha['Funcao'] ?></td>
</tr>
<tr>
<th> Informações adcionais: </th>
</tr>
<tr>
<td><?= $linha['InformacoesAdcionais'] ?></td>
</tr>
</tbody>
<tfoot>
<tr>
<td><a class="btn btn-danger" style="margin: 15px;" href="Excluir.php?id=<?= $linha['id'] ?>" role="button">Excluir</a></td>
<td><a class="btn btn-warning" style="margin: 15px;" href="formularioalterar.php?id=<?= $linha['id'] ?>" role="button">Alterar</a></td>
<td><a class="btn btn-primary" style="margin: 15px;" href="consulta.php?id=<?= $linha['id'] ?>" role="button">Voltar</a></td>
<td><a class="btn btn-secondary" style="margin: 15px;" href="criarpdf.php?id=<?= $linha['id'] ?>" role="button">Gerar Relatório</a></td>
</tr>
</tfoot>
<?php
}
?>
</table>
<hr>
</div>				
<div class="container">
	<footer>
		<a class="btn btn-success" href="index.php" role="button">Cadastrar</a>
	</footer>
	</div>
</body>
</html>