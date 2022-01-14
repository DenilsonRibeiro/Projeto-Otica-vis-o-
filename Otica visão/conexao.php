<?php

	/*
	* Código para a fazer a conexão com o banco de dados 
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

	$servidor="localhost";
	$usuario="root";
	$senha="";
	$dbname="test";


//fazendo a conexão com o banco de dados dados
	$link = mysqli_connect($servidor, $usuario, $senha, $dbname); 

//checando a conexão
		if(!$link) {
	printf ("Erro ao conectar ao banco de dados: Cadastro", mysqli_connect_error());
		}
?>