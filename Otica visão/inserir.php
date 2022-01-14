	<?php
	/*
	* Código para a inserção das informações de cadastro de clientes 
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

		include_once("conexao.php");

	//definindo as variaveis para receber os dados do formularios
		$Loja = $_POST["Loja"];
		$Vendedora = $_POST["Vendedora"];
		$DataCompra = $_POST["DataCompra"];
		$Cliente = $_POST["Cliente"];
		$DataNascimento = $_POST["DataNascimento"];
		$Filiacao = $_POST["Filiacao"];
		$Endereco = $_POST["Endereco"];
		$Numero = $_POST["Numero"];
		$Cep = $_POST["Cep"];
		$Bairro = $_POST["Bairro"];
		$PdeReferencia = $_POST["PdeReferencia"];
		$Cidade = $_POST["Cidade"];
		$Estado = $_POST["Estado"];
		$Fixo = $_POST["Fixo"];
		$Movel = $_POST["Movel"];
		$email = $_POST["email"];
		$Instagram = $_POST["Instagram"];
		$Facebook = $_POST["Facebook"];
		$RG = $_POST["RG"];
		$OrgaoExpedidor = $_POST["OrgaoExpedidor"];
		$DataDeExpedicao = $_POST["DataDeExpedicao"];
		$CPF = $_POST["CPF"];
		$Profissao = $_POST["Profissao"];
		$trabalha = $_POST["trabalha"];
		$Funcao = $_POST["Funcao"];
		$InformacoesAdcionais = $_POST["InformacoesAdcionais"];


	//criando a query em SQL para inserir os dados
	$result_cliente = "INSERT INTO Cliente 
	(Loja, Vendedora, DataCompra, Cliente, DataNascimento, 
	Filiacao, Endereco, Numero, Cep, Bairro, PdeReferencia, Cidade, Estado, Fixo, Movel, 
	email, Instagram, Facebook, RG, OrgaoExpedidor, DataDeExpedicao, CPF, Profissao, 
	trabalha, Funcao, InformacoesAdcionais) 
	VALUES 
	('$Loja', '$Vendedora', '$DataCompra', '$Cliente', '$DataNascimento', 
	'$Filiacao', '$Endereco', '$Numero', '$Cep', '$Bairro', '$PdeReferencia', 
	'$Cidade', '$Estado', '$Fixo', '$Movel', '$email', '$Instagram', '$Facebook', 
	'$RG', '$OrgaoExpedidor', '$DataDeExpedicao', '$CPF', '$Profissao', '$trabalha', 
	'$Funcao', '$InformacoesAdcionais')";

	//executando o comando SQL

		if(mysqli_query($link, $result_cliente)){
			echo "<br>Dados salvo com sucesso";
		header("location: index.php");
		}else{
			//exibindo mensagem de confirmação
			echo "<br>Dados não foram salvos.";
		}


		



	?>