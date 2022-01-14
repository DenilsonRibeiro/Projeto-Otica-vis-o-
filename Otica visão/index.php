	<!DOCTYPE html>
	<html>
	<!-- 
	 Formulario de cadastro de clientes 
	 feito para a visão ótica para fins de agilizar a os processos que demandam
	 o cadastro dos clientes facilitando o trabalho dos funcionarios.
	 e contribuindo com o meio ambiente ;pois finda se o uso do papel para este 
	 mesmo fim.
	 --------------------------------------------------------------------------
	 Autor: Denilson Ribeiro de França.
	 Empresa: Infotec soluções em tecnologia. Portadora dos direitos sobre o código.
	 Versão do código: 1.0 
	 Data: 05/01/2022
	 -->
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
				
			}
			.container{
				line-height: 7px;
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
				
		 </style>
		 
		 <script>
			function exibeAlerta(){
				alert("Salvo com sucesso!")
			}
			//alert("Olá, tudo bem? pronto para começar.");
		 </script>

	</head>
	<body>
		<header>
			<div style="width: 100%; height: px;">
				
			</div>
		</header>
		<div class="container">
			<label>
			<div>
				<div id="logo"> 
					<center>			
						<h1>Visão-otica</h1>			
						<h4>A melhor opção para sua visão!</h4>
					</center>
				</div>
				
			</div>
			</label>
			<hr>
			<div style="float:right;">
			<label>Pesquisar cliente:</label>
				<form class="form-inline my-2 my-lg-0" method="POST" action="pesquisar.php">
					<input class="form-control mr-sm-2" type="search" name="CPF" placeholder="Informe o CPF do cliente..." aria-label="Pesquisar">
					<button class="btn btn-success my-2 my-sm-0" type="submit" >Pesquisar</button>
					<a class="btn btn-primary" href="consulta.php" role="button">Cosultar todos</a>
				</form>		
			</div>
			<div class="container">
					<center>
					<h2>Cadastro de clientes</h2>
					<hr>
					</center>
			</div>		
			<div class="container">
				<form method="post" action="inserir.php" onsubmit="exibeAlerta()" >
					<label>Loja:</label>
						<input class="form-control" type="text" name="Loja" style="width: 150px;display: inline;" placeholder=" Ex: Loja 2..."/>			
					<label>Código do cliente:</label>
						<input class="form-control" type="text" name="id" style="width: 160px;display:inline;"/>				
					<label>Vendedora:</label>
						<input class="form-control" type="text" name="Vendedora" style="width: 150px;display:inline;" placeholder=" Ex: Edilma..."/ required>				
					<label>Data da compra:</label>
						<input class="form-control" type="date" name="DataCompra" style="width: 160px;display:inline;"/ required>				
					<br><br><label>Cliente:</label><br>
					<label>Nome:</label>
						<input class="form-control" type="text" name="Cliente" style="width: 340px;display: inline;" placeholder=" Nome..."/ required>							
					<label>Data de nascimento:</label>
						<input class="form-control" type="date" name="DataNascimento" style="width: 160px;display: inline;"/ required>			
					<label>Filiação:</label>
						<input class="form-control" type="text" name="Filiacao" style="width: 340px;display: inline;" placeholder=" Filiação..."/required><br>						
					<br><label>Endereço:</label><br>
					<label>Rua:</label>
						<input class="form-control" type="text" name="Endereco" style="width: 400px;display: inline;" placeholder=" rua, av ... "/ required>				
					<label>Nº :</label>
						<input class="form-control" type="text" name="Numero" style="width: 100px;display: inline;" placeholder=" Ex: 8A..."/ required>							
					<label>Cep:</label>
						<input class="form-control" type="text" name="Cep" style="width: 150px;display: inline;" placeholder=" Ex: 50.761-440... "/required>				
					<label>Bairro:</label>
						<input class="form-control" type="text" name="Bairro" style="width: 250px;display: inline;" placeholder=" Ex: Jardim Jordão..."/required><br>			
					<br><label>Ponto de referencia:</label>
						<input class="form-control" type="text" name=" PdeReferencia" style="width: 250px;display: inline;" placeholder=" Ex: Ladeira do petinho..."/ required>	
					<label>Cidade:</label>
						<input class="form-control" type="text" name="Cidade" style="width: 250px;display: inline;" placeholder=" Cidade..."/required>					
					<label>Estado:</label>
						<input class="form-control" type="text" name="Estado" style="width: 260px;display: inline;" placeholder=" Estado..."/ required><br>						
					<br><label>Contatos:</label><br>
					<label>Telefone fixo:</label>
						<input class="form-control" type="text" name="Fixo" style="width: 150px;display: inline;" placeholder=" Ex: 3445-1123..."/ required>						
					<label>Celular:</label>
						<input class="form-control" type="text" name="Movel" style="width: 150px;display: inline;" placeholder=" Ex: (81) 9.95289191..."/required>				
					<label>E-mail:</label>
						<input class="form-control" type="email" name="email" style="width: 450px;display: inline;" placeholder="Ex: gustavo@gmail.com..."/required><br>		
					<br><label>Redes sociais:</label><br>
					<label>Instagram:</label>
						<input class="form-control" type="text" name="Instagram" style="width: 450px;display: inline;" placeholder=" Ex: joséjoão1000..."/>					
					<label>Facebook:</label>
						<input class="form-control" type="text" name="Facebook" style="width: 450px;display: inline;" placeholder=" Ex: josé.joão1000..."/><br>				
					<br><label>Documentos do cliente:</label><br>
					<label>RG:</label>
						<input class="form-control" type="text" name="RG" style="width: 150px;display: inline;" placeholder=" Ex: 5508658..."/ required>						
					<label>Orgão expedidor:</label>
						<input class="form-control" type="text" name="OrgaoExpedidor" style="width: 120px;display: inline;" placeholder=" Ex: SDSPE..."/ required>					
					<label>Data de expedição:</label>
						<input class="form-control" type="date" name="DataDeExpedicao" style="width: 160px;display: inline;" required>								
					<label>CPF:</label>
						<input class="form-control" type="text" name="CPF" style="width: 150px;display: inline;" placeholder=" Ex: 02587566602..."/ required><br><br>		
					<label>Profissão:</label>
						<input class="form-control" type="text" name="Profissao" style="width: 250px; display: inline;" placeholder=" Ex: Soldador..."/ required>					
					<label>Empresa onde trabalha:</label>
						<input class="form-control" type="text" name="trabalha" style="width: 250px; display: inline;" placeholder=" Ex: Vitarela..."/required>						
					<label>Função:</label>
						<input class="form-control" type="text" name="Funcao" style="width: 250px; display: inline;" placeholder=" Ex: Auxiliar de estoque..."/ required>
					<center><br>				
					<label>Informações adcionais:</label><br>
					<p><textarea type="text" name="InformacoesAdcionais" maxlength="100" style="width: 100%; height: 60px;">
					</textarea></p>
					</center>
					<center><br>
					<button class="btn btn-primary" type="submit" name="submit" value="cadastrar">
						<span class="glyphicon glyphicon-send"></span>
							Salvar
					</button>
				</center>
				</form>
				
			</div>
		</div>
		<div class="container">
		<footer>
			
		</footer>
		</div>
	</body>
	</html>