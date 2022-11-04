<?php

$mensagem = "Nome: ".$_POST['txtnome']." \n";
$mensagem .= "Modelo: ".$_POST['txtmodelo']." \n";
$mensagem .= "Chassi: ".$_POST['txtchassi']." \n";
$mensagem .= "Cor: ".$_POST['txtcor']." \n";
$mensagem .= "Ano: ".$_POST['txtano']." \n";
$mensagem .= "Preço: ".$_POST['txtpreco']." \n";
$mensagem .= "Mensagem: ".$_POST['txtobs']." \n";
$de = "Email: ".$_POST['txtmail']." \n";
$cabecalho = "MIME-Version: 1.0\r\n";
$cabecalho .= "Content-type: text/html; charset=iso-8859-1\r\n";
$cabecalho .= "From: ".$de." \r\n";


if (mail("thiagomelo35@hotmail.com", "Solicitação de Venda de Veículo - Facilita Veículo,", $mensagem, $cabecalho))
	echo("<script>alert('Mensagem enviada com sucesso!')</script>");
else
   echo("<script>alert('Erro inesperado ao tentar enviar mensagem! Tente novamente mais tarde.')</script>");

  echo("<script>window.location='solicitacao_venda.php'</script>");

?> 


