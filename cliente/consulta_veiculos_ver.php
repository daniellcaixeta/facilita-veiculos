<?php

session_start();
		require('conectar.php');
		require('funcoes_gerais.php');
  	  	require('funcoes_consulta_veiculo.php');
	

$busca = GetGET('busca');

$rs=PesqRS($busca);

$cab=array('Cod','Marca', 'Modelo', 'Chassi', 'Cor', 'Ano', 'Preço');


?> 

<script type="text/javascript">
function editar(id_veiculo)
{
window.location='comprar_veiculo.php?id_veiculo=' + id_veiculo;
}

function excluir(id_veiculo)
{
if(confirm('Tem certeza que deseja excluir esse Veiculo?'))
window.location='exc_veiculo.php?id_veiculo=' + id_veiculo;
}

</script>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Detachable 
Description: A three-column, fixed-width blog design.
Version    : 1.0
Released   : 20090805

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Facilita Veículos - Patos de Minas - MG</title>
<meta name="keywords" content="" />
<meta name="Premium Series" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.style1 {
	color: #b94546;
	font-weight: bold;
}
-->
</style>
<link href="../cadastros/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {color: #454545}
-->
</style>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul id="main">
			<li class="current_page_item"><a href="../index.php" class="first">&nbsp;&nbsp;Principal&nbsp;&nbsp;</a></li>
			<li><a href="../empresa.php">&nbsp;Quem Somos &nbsp;</a></li>
			<li><a href="../veiculos.php">&nbsp;Veículos&nbsp;</a></li>
			<li><a href="../promocoes.php">&nbsp;&nbsp;Promoções&nbsp;&nbsp;</a></li>
			<li><a href="../venda.php">&nbsp;&nbsp;Venda&nbsp;&nbsp;</a></li>
		</ul>
		<ul id="feed">
			<li><a href="../registrar.php">&nbsp;&nbsp;Registra-se&nbsp;&nbsp;</a></li>
			<li><a href="../contato.php">&nbsp;&nbsp;Contato&nbsp;&nbsp;</a></li>
		</ul>
	</div>
	<div id="logo">
		<h1><a href="#"></a></h1>
		<p>&nbsp;</p>
	</div>
</div>
<!-- end header -->
<div id="wrapper">
	<!-- start page -->
	<div id="page">
		
		<!-- start content -->
		<div id="content_administrador">
			<div class="flower"></div>
			<div class="post">
				<h1 class="title"><a href="../login/cliente.php">Consultar Veiculos  </a><span class="style2">- Resultado</span> </h1>
				<p class="byline">
			  <div class="entry">
					<p align="center">&nbsp;</p>
					<p class="tabela">
			    <form id="form1" name="form1" method="post" action="">
		     <?php GeraTabela2($rs,$cab,"id_veiculo","1",""); ?>
          </form>
</p>
					<a href="consulta_veiculos.php">Voltar</a>
				<p class="tabela"><a href="../cadastros/admin_promocoes.php"></a>			                              </p>
			  </div>
			</div>
		  <div class="post">
			  <h2 class="title">&nbsp;</h2>
		  </div>
			<div class="post"><div class="entry"></div>
			</div>
		</div>
		<!-- end content -->
		<!-- start sidebars -->
		<div id="sidebar2" class="sidebar">
			<ul>
				<li>
					
					  <div>
							<h2>Cliente</h2>
				            <div id="calendar_wrap">
				  <div align="center"><span class="centered">Voce est&aacute; logado com <b><? print $_SESSION["usuario"]; ?> . </b></span><a href="sair.php">Sair</a>
                    </p>
                    <ul>
                      <li class="style1">SERVIÇOS</li>
                      <li>
                        <div align="left"><a href="../cliente/solicitacao_venda.php">Solicitar Venda de Veículo </a></div>
                      </li>
                      <li>
                        <div align="left"><a href="consulta_veiculos.php">Consultar Veículos</a></div>
                      </li>
                      <li>
                        <div align="left"><a href="../cliente/promocao_ver.php">Ver Promoções </a></div>
                      </li>
                    </ul>
				  </div>
				</div>
			  </li>
			    <li></li>
			    <li></li>
		  </ul>
	  </div>
	  
		<!-- end sidebars -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end page -->
</div>
<div id="footer">
	<p align="center" class="copyright"><strong> Facilita Veículos: </strong>Rua José de Santana nº. 530 - Centro - Patos de Minas<br />
	    <strong>Telefones:</strong> (34) 3823-8787 / (34) 9975-5350 / (34) 9103-8668 </p>
	<p class="link">&nbsp;</p>
</div>
<div style="text-align: center; font-size: 0.75em;"></div>
</body>
</html>
