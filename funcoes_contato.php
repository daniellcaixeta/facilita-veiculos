<?php

$mensagem = "Nome: ".$_POST['txtnome']." \n";
$mensagem .= "Mensagem: ".$_POST['txtmen']." \n";
$de = "Email: ".$_POST['txtmail']." \n";
$cabecalho = "MIME-Version: 1.0\r\n";
$cabecalho .= "Content-type: text/html; charset=iso-8859-1\r\n";
$cabecalho .= "From: ".$de." \r\n";


if (mail("thiagomelo35@hotmail.com", "Solicita��o de Venda de Ve�culo - Facilita Ve�culo,", $mensagem, $cabecalho))
	echo("<script>alert('Mensagem enviada com sucesso!')</script>");
else
   echo("<script>alert('Erro inesperado ao tentar enviar mensagem! Tente novamente mais tarde.')</script>");

  echo("<script>window.location='contato.php'</script>");

?> 


