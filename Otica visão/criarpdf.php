<?php

	/*
	* Código para a geração de um relatório com todas as informações de cadastro 
	* de apenas um cliente. 
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

  define('fpdf/fontpath', 'font/');
  require('fpdf/fpdf.php');
  include_once('conexao.php');
 
  $pdf = new FPDF('L','pt','A4');  
  $pdf->SetAuthor("Visão ótica",0);  
  $pdf->SetTitle("Detalhes cliente",0); 
  $pdf->AddPage(); 
  $pdf->Image('imagens/logo.jpg');
  $pdf->ln(20);
  $pdf->SetFont('arial','B',20); 
  $pdf->Cell(0,30,"Detalhes do cliente",0,1,'C'); 
  $pdf->Cell(0,1,"","B",1,'C'); 
  $data = date('dd_mm_yyyy');
  $pdf->ln(20);  
  
  $id = $_GET['id'];
  $lista = mysqli_query($link,  "SELECT * FROM Cliente WHERE id = $id");
  while ($linha = mysqli_fetch_array($lista)){
  

  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(760,20,utf8_decode("Controle interno:"), 0, 0, 'C');
  $pdf->ln(20);
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(115,20,utf8_decode("Código do cliente:"), 0, 0, 'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(50,20,utf8_decode($linha['id']), 0, 0, 'C'); 
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(78,20,utf8_decode("Vendedora:"), 0, 0, 'C');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(70,20,utf8_decode($linha['Vendedora']), 0, 0,'C'); 
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(100,20,utf8_decode("Data da compra: "), 0, 0, 'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(70,20,utf8_decode($linha['DataCompra']), 0, 0, 'R');   
   $pdf->ln(20);
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(760,20,utf8_decode("Cliente:"), 0, 0, 'C');
   $pdf->ln(20);
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(50,20,utf8_decode("Nome:"), 0, 0, 'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(250,20,utf8_decode($linha['Cliente']), 0, 0, 'L');   
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(125,20,utf8_decode("Data de nascimento:"), 0, 0, 'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(70,20,utf8_decode($linha['DataNascimento']), 0, 0, 'C');  
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(60,20,utf8_decode("Filiação:"), 0, 0,'C');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(210,20,utf8_decode($linha['Filiacao']), 0, 0, 'L');
   $pdf->ln(20);
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(70,20,utf8_decode("Endereço: "), 0, 0,'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(200,20,utf8_decode($linha['Endereco']), 0, 0, 'L');   
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(30,20,utf8_decode("Nº:"), 0, 0, 'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(40,20,utf8_decode($linha['Numero']), 0, 0, 'C');  
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(35,20,utf8_decode("Cep:"), 0, 0, 'C');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(70,20,utf8_decode($linha['Cep']), 0, 0, 'C'); 
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(50,20,utf8_decode("Bairro:"), 0, 0,'C');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(120,20,utf8_decode($linha['Bairro']), 0, 0, 'L');
   $pdf->ln(20);
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(125,20,utf8_decode("Ponto de referencia:"), 0, 0, 'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(300,20,utf8_decode($linha['PdeReferencia']), 0, 0, 'L');  
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(55,20,utf8_decode("Cidade:"), 0, 0, 'C');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(150,20,utf8_decode($linha['Cidade']), 0, 0, 'L');  
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(50,20,utf8_decode("Estado:"), 0, 0, 'C');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(130,20,utf8_decode($linha['Estado']), 0, 0, 'L');
   $pdf->ln(20);   
   $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(760,20,utf8_decode("Informações de contato:"), 0, 0,'C');
   $pdf->ln(20);
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(85,20,utf8_decode("Telefone fixo:"), 0, 0, 'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(80,20,utf8_decode($linha['Fixo']), 0, 0, 'L'); 
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(50,20,utf8_decode("Celular:"), 0, 0,'R');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(100,20,utf8_decode($linha['Movel']), 0, 0, 'L'); 
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(50,20,utf8_decode("Email:"), 0, 0,'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(350,20,utf8_decode($linha['email']), 0, 0, 'L');
   $pdf->ln(20);
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(70,20,utf8_decode("Instagram:"), 0, 0,'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(300,20,utf8_decode($linha['Instagram']), 0, 0, 'L'); 
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(70,20,utf8_decode("Facebook: "), 0, 0,'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(300,20,utf8_decode($linha['Facebook']), 0, 0, 'L');
   $pdf->ln(20);  
   $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(760,20,utf8_decode("Documentação:"), 0, 0,'C');
   $pdf->ln(20);
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(30,20,utf8_decode("Rg:"), 0, 0,'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(70,20,utf8_decode($linha['RG']), 0, 0, 'L');  
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(110,20,utf8_decode("Orgão expedidor:"), 0, 0,'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(50,20,utf8_decode($linha['OrgaoExpedidor']), 0, 0, 'L');   
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(120,20,utf8_decode("Data de expedição:"), 0, 0,'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(70,20,utf8_decode($linha['DataDeExpedicao']), 0, 0, 'L'); 
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(40,20,utf8_decode("CPF:"), 0, 0,'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(100,20,utf8_decode($linha['CPF']), 0, 0, 'L');
   $pdf->ln(20); 
   $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(760,20,utf8_decode("Sobre:"), 0, 0,'C');
   $pdf->ln(20);
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(70,20,utf8_decode("Profissão:"), 0, 0, 'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(150,20,utf8_decode($linha['Profissao']), 0, 0, 'L');  
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(150,20,utf8_decode("Empresa onde trabalha:"), 0, 0,'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(150,20,utf8_decode($linha['trabalha']), 0, 0, 'L');  
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(55,20,utf8_decode("Função:"), 0, 0,'L');
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40); 
  $pdf->Cell(180,20,utf8_decode($linha['Funcao']), 0, 0, 'L');
   $pdf->ln(20); 
  $pdf->SetFont('arial', 'B' ,12);
  $pdf->SetLeftMargin(40);
  $pdf->Cell(170,20,utf8_decode("Informações adcionais: "), 0, 0,'L');  
  $pdf->setFont('arial','',12);
  $pdf->SetLeftMargin(40);
  $pdf->ln(20);  
  $pdf->Cell(400,20,utf8_decode($linha['InformacoesAdcionais']), 0, 0, 'L');  
   $pdf->ln(20);
  }  
  $pdf->Output('Relatorio.pdf', 'I');
?>