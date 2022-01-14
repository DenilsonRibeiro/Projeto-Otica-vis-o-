<?php
/*
* Código para a exclusão do cadastro de apenas um cliente 
* feito para a visão ótica para fins de agilizar a os processos que demandam
* a atualização do cadastro dos clientes facilitando o trabalho dos funcionarios.
* e contribuindo com o meio ambiente ;pois finda se o uso do papel para este 
* mesmo fim.
* -----------------------------------------------------------------------------
* Autor: Denilson Ribeiro de França.
* Empresa: Infotec soluções em tecnologia. Portadora dos direitos sobre o código.
* Versão do código: 1.0 
* Data: 05/01/2022
*/
include_once('conexao.php');
//definindo a variavel id utilizando o método GET 
$id = $_GET['id']; 
//criando a query em SQL para deletar os dados 
$query = "DELETE FROM Cliente WHERE id=$id"; 
//executando o comando SQL 
mysqli_query($link, $query); 
//exibe mensagem de confirmação 
echo "<br>Dados excluidos com sucesso!";
 header("location: index.php");
?>