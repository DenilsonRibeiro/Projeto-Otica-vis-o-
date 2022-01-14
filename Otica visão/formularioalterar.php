	<?php 
	/*
	* Formulario de atualização de cadastro de clientes 
	* feito para a visão ótica para fins de agilizar a os processos que demandam
	* a atualização do cadastro dos clientes facilitando o trabalho dos funcionarios.
	* e contribuindo com o meio ambiente ;pois finda se o uso do papel para este 
	* mesmo fim.
	* Autor: Denilson Ribeiro de França.
	* Empresa: Infotec soluções em tecnologia. Portadora dos direitos sobre o código.
	* Versão do código: 1.0 
	* Data: 05/01/2022
	*/

	//conecta ao banco de dados
	include_once("conexao.php");

	//usando o método GET para capturar o valor do campo id do formulário 
	$id = $_GET['id']; 

	//query SQL para selecionar os dados 
	$lista = mysqli_query($link, "SELECT * FROM Cliente WHERE id = '$id'"); 

	//coleta a linha solicitada $linha = mysqli_fetch_array($lista); 
	$linha = mysqli_fetch_array($lista);
	?>
	<!DOCTYPE html>
	<!-- Inicio do código html -->
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

		 <!-- Seção de estilização da pagina feita em CSS3 -->
		 <style type="text/css">
			body{
				
			}
			.container{
				line-height: 6px;
			}
			label{
				font-size: 12pt;
			}
			
			h2{
				
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
				
				<!-- Fim da parte de estilização da página. -->
				
		 </style>
		  <script>
			function exibeAlerta(){
				alert("Alterado com sucesso!")
			}
			alert("Antes de clicar em Alterar esteja certo(a) do que esta fazendo.");
		 </script>
	</head>
	<body>

	<!-- Inicio do corpo da página do formulário de cadastro. -->
		<header>
			
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
					<center>
					<h2>Atualização de cadastro-clientes:</h2>
					<hr>
					</center>
			</div>		
			<div class="container">
				<form method="post" action="alterar.php" onsubmit="exibeAlerta()" >
					<label>Loja:</label>
						<input class="form-control" type="text" name="Loja" value="<?= $linha['Loja'] ?>" style="width: 150px;display: inline;" placeholder=" Ex: Loja 2..."/>			
					<label>Código do cliente:</label>
						<input class="form-control" type="text" name="id" value="<?= $linha['id'] ?>" style="width: 160px;display:inline;"/>				
					<label>Vendedora:</label>
						<input class="form-control" type="text" name="Vendedora" value="<?= $linha['Vendedora'] ?>" style="width: 150px;display:inline;" placeholder=" Ex: Edilma..."/>				
					<label>Data da compra:</label>
						<input class="form-control" type="date" name="DataCompra" value="<?= $linha['DataCompra'] ?>" style="width: 160px;display:inline;"/>				
					<br><br><label>Cliente</label><br>
					<label>Nome:</label>
						<input class="form-control" type="text" name="Cliente" value="<?= $linha['Cliente'] ?>" style="width: 340px;display: inline;" placeholder=" Nome..."/>							
					<label>Data de nascimento:</label>
						<input class="form-control" type="date" name="DataNascimento" value="<?= $linha['DataNascimento'] ?>" style="width: 160px;display: inline;"/>			
					<label>Filiação:</label>
						<input class="form-control" type="text" name="Filiacao" value="<?= $linha['Filiacao'] ?>" style="width: 340px;display: inline;" placeholder=" Filiação..."/><br>						
					<br><label>Endereço:</label><br>
					<label>Rua:</label>
						<input class="form-control" type="text" name="Endereco" value="<?= $linha['Endereco'] ?>" style="width: 400px;display: inline;" placeholder=" rua, av ... "/>				
					<label>Nº :</label>
						<input class="form-control" type="text" name="Numero" value="<?= $linha['Numero'] ?>" style="width: 100px;display: inline;" placeholder=" Ex: 8A..."/>							
					<label>Cep:</label>
						<input class="form-control" type="text" name="Cep" value="<?= $linha['Cep'] ?>" style="width: 150px;display: inline;" placeholder=" Ex: 50.761-440... "/>				
					<label>Bairro:</label>
						<input class="form-control" type="text" name="Bairro" value="<?= $linha['Bairro'] ?>" style="width: 250px;display: inline;" placeholder=" Ex: Jardim Jordão..."/><br>			
					<br><label>Ponto de referencia:</label>
						<input class="form-control" type="text" name=" PdeReferencia" value="<?= $linha['PdeReferencia'] ?>" style="width: 250px;display: inline;" placeholder=" Ex: Ladeira do petinho..."/>	
					<label>Cidade:</label>
						<input class="form-control" type="text" name="Cidade" value="<?= $linha['Cidade'] ?>" style="width: 250px;display: inline;" placeholder=" Cidade..."/>					
					<label>Estado:</label>
						<input class="form-control" type="text" name="Estado" value="<?= $linha['Estado'] ?>" style="width: 260px;display: inline;" placeholder=" Estado..."/><br>						
					<br><label>Contatos:</label><br>
					<label>Telefone fixo:</label>
						<input class="form-control" type="text" name="Fixo" value="<?= $linha['Fixo'] ?>" style="width: 150px;display: inline;" placeholder=" Ex: 3445-1123..."/>						
					<label>Celular:</label>
						<input class="form-control" type="text" name="Movel" value="<?= $linha['Movel'] ?>" style="width: 150px;display: inline;" placeholder=" Ex: (81) 9.95289191..."/>				
					<label>E-mail:</label>
						<input class="form-control" type="email" name="email" value="<?= $linha['email'] ?>" style="width: 450px;display: inline;" placeholder="Ex: gustavo@gmail.com..."/><br>		
					<br><label>Redes sociais:</label><br>
					<label>Instagram:</label>
						<input class="form-control" type="text" name="Instagram" value="<?= $linha['Instagram'] ?>" style="width: 450px;display: inline;" placeholder=" Ex: joséjoão1000..."/>					
					<label>Facebook:</label>
						<input class="form-control" type="text" name="Facebook" value="<?= $linha['Facebook'] ?>" style="width: 450px;display: inline;" placeholder=" Ex: josé.joão1000..."/><br>				
					<br><label>Documentos do cliente:</label><br>
					<label>RG:</label>
						<input class="form-control" type="text" name="RG" value="<?= $linha['RG'] ?>" style="width: 150px;display: inline;" placeholder=" Ex: 5508658..."/>						
					<label>Orgão expedidor:</label>
						<input class="form-control" type="text" name="OrgaoExpedidor" value="<?= $linha['OrgaoExpedidor'] ?>" style="width: 120px;display: inline;" placeholder=" Ex: SDSPE..."/>					
					<label>Data de expedição:</label>
						<input class="form-control" type="text" name="DataDeExpedicao" value="<?= $linha['DataDeExpedicao'] ?>" style="width: 160px;display: inline;">								
					<label>CPF:</label>
						<input class="form-control" type="text" name="CPF" value="<?= $linha['CPF'] ?>" style="width: 150px;display: inline;" placeholder=" Ex: 02587566602..."/><br><br>		
					<label>Profissão:</label>
						<input class="form-control" type="text" name="Profissao" value="<?= $linha['Profissao'] ?>" style="width: 250px; display: inline;" placeholder=" Ex: Soldador..."/>					
					<label>Empresa onde trabalha:</label>
						<input class="form-control" type="text" name="trabalha" value="<?= $linha['trabalha'] ?>" style="width: 250px; display: inline;" placeholder=" Ex: Vitarela..."/>						
					<label>Função:</label>
						<input class="form-control" type="text" name="Funcao" value="<?= $linha['Funcao'] ?>" style="width: 250px; display: inline;" placeholder=" Ex: Auxiliar de estoque...">
					<center><br>				
					<label>Informações adcionais:</label><br>
					<textarea style="width: 100%; height: 60px;" name="InformacoesAdcionais" id="InformacoesAdcionais"><?php echo $linha['InformacoesAdcionais']?></textarea>
					<input type="hidden" name="id" value="<?= $linha['id'] ?>" />
					</center>
					<center><br>
					<button class="btn btn-primary" type="submit" name="submit" value="alterar">
						<span class="glyphicon glyphicon-send"></span>
							Alterar
					</button>
					<a class="btn btn-primary" style="margin: 15px;" href="consulta.php?id=<?= $linha['id'] ?>" role="button">Voltar</a>
					<a class="btn btn-success" href="index.php" role="button">Cadastrar</a>
				</center>
				</form>
			</div>
		</div>
		<div class="container">
		<footer>
			
		</footer>
		</div>
		
		<!-- Fim do corpo do formalario de cadastro. -->
		
	</body>
	</html>