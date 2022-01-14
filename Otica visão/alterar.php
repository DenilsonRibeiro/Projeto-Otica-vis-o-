	<?php 
	/*
	* Código para alterar o cadastro de clientes 
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

	//checando a conexão 
	if(!$link){
		printf ("Erro ao conectar ao banco de dados: ", 
	mysqli_connect_error()); 
		}	

	//definindo as variaveis para receber os dados do formulario 

			
		$id = $_POST['id'];
		$Loja = $_POST['Loja'];
		$Vendedora = $_POST['Vendedora'];
		$DataCompra = $_POST['DataCompra'];
		$Cliente = $_POST['Cliente'];
		$DataNascimento = $_POST['DataNascimento'];
		$Filiacao = $_POST['Filiacao'];
		$Endereco = $_POST['Endereco'];
		$Numero = $_POST['Numero'];
		$Cep = $_POST['Cep'];
		$Bairro = $_POST['Bairro'];
		$PdeReferencia = $_POST['PdeReferencia'];
		$Cidade = $_POST['Cidade'];
		$Estado = $_POST['Estado'];
		$Fixo = $_POST['Fixo'];
		$Movel = $_POST['Movel'];
		$email = $_POST['email'];
		$Instagram = $_POST['Instagram'];
		$Facebook = $_POST['Facebook'];
		$RG = $_POST['RG'];
		$OrgaoExpedidor = $_POST['OrgaoExpedidor'];
		$DataDeExpedicao = $_POST['DataDeExpedicao'];
		$CPF = $_POST['CPF'];
		$Profissao = $_POST['Profissao'];
		$trabalha = $_POST['trabalha'];
		$Funcao = $_POST['Funcao'];
		$InformacoesAdcionais = $_POST['InformacoesAdcionais'];


	//criando a query em SQL para alterar os dados 
			$query = ("UPDATE cliente SET Loja='$Loja', 
		Vendedora='$Vendedora', DataCompra='$DataCompra',
		Cliente='$Cliente', DataNascimento='$DataNascimento',
		Filiacao='$Filiacao', Endereco='$Endereco', Numero='$Numero',
		Cep='$Cep', Bairro='$Bairro', PdeReferencia='$PdeReferencia',
		Cidade='$Cidade', Estado='$Estado', Fixo='$Fixo', 
		Movel='$Movel', email='$email', Instagram='$Instagram', 
		Facebook='$Facebook', RG='$RG', OrgaoExpedidor='$OrgaoExpedidor', 
		DataDeExpedicao='$DataDeExpedicao', CPF='$CPF', 
		Profissao='$Profissao', trabalha='$trabalha',Funcao='$Funcao',
		InformacoesAdcionais='$InformacoesAdcionais' WHERE id = '$id'"); 

	//executando o comando SQL 
	if(mysqli_query($link, $query)){
				echo "<br>Dados alterado com sucesso";
		header("location: index.php");
		}else{
			//exibindo mensagem de confirmação
				echo "<br>Dados não foram alterados.";
		}
	?>