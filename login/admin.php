<?php

	require('somenteadministrador.php');
	
?>


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
.style2 {color: #000000}
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
		<div id="sidebar1" class="sidebar">
			<ul>
				<li>
					<h2>Menu</h2>
					<ul>
						<li><a href="../index.php">Principal</a></li>
						<li><a href="../empresa.php">Quem Somos </a></li>
						<li><a href="../veiculos.php">Veículos</a></li>
						<li><a href="../promocoes.php">Promoções</a></li>
						<li><a href="../venda.php">Venda</a></li>
						<li><a href="../registrar.php">Registra-se</a></li>
						<li><a href="../contato.php">Contato</a></li>
					</ul>
				</li>
				<li>
					<h2>Newsletter</h2>
					<ul>
						<li>Preencha os campos abaixo para receber as novidades da Facilitar Veículos: </li>
						<li>
						<form id="form1" method="post" action="">
						  <table width="182" border="0">
                            <tr>
                              <td width="47">Nome:</td>
                              <td width="125">
                                <p>
                                  <label>
                                    <input name="textfield3" type="text" size="20" />
                                  </label>
                                </p>                              </td>
                            </tr>
                            <tr>
                              <td>E-mail:</td>
                              <td><label>
                                <input name="textfield4" type="text" size="20" />
                              </label></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><label>
                                <div align="center">
                                  <input type="submit" name="Submit2" value="Assinar" />
                                </div>
                              </label></td>
                            </tr>
                          </table>
					      </form>
						</li>
					</ul>
				</li>
				<li></li>
			</ul>
	  </div>
		<!-- start content -->
		<div id="content">
			<div class="flower"></div>
			<div class="post">
				<h1 class="title"><a href="#">Seja Bem vindo: </a><span class="style2"><b><? print $_SESSION["usuario"]; ?></b></span><b></b></h1>
				<p class="byline">
				<div class="entry">
					<p align="center"><img src="../images/img07.jpg" alt="" width="440" height="400" /></p>
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
							<h2>Administrador</h2>
				<div id="calendar_wrap">
				  <div align="center"><span class="centered">Voce est&aacute; logado com <b><? print $_SESSION["usuario"]; ?> . </b></span><a href="sair.php">Sair</a>
			        </p>
					<ul>
						<li class="style1">CADASTROS</li>
						<li>
						  <div align="left"><a href="../cadastros/admin_clientes.php">Clientes </a></div>
						</li>
						<li>
						  <div align="left"><a href="../cadastros/admin_funcionario.php">Funcionários </a></div>
						</li>
						<li>
						  <div align="left"><a href="../cadastros/admin_marca.php">Marca de Veículo</a> </div>
						</li>
						<li>
						  <div align="left"><a href="../cadastros/admin_veiculo.php">Veículos </a></div>
						</li>
						<li>
						  <div align="left"><a href="../cadastros/admin_promocoes.php">Promoções </a></div>
						</li> 
						<p>
						<li class="style1">CONSULTAS</li>
						<li>
						  <div align="left"><a href="../cadastros/admin_clientes_ver.php">Clientes </a></div>
						</li>
						<li>
						  <div align="left"><a href="../cadastros/admin_funcionario_ver.php">Funcionários </a></div>
						</li>
						<li>
						  <div align="left"><a href="../cadastros/admin_marca_ver.php">Marca de Veículo</a> </div>
						</li>
						<li>
						  <div align="left"><a href="../cadastros/admin_veiculo_ver.php">Veículos </a></div>
						</li>
						<li>
						  <div align="left"><a href="../cadastros/admin_promocoes_ver.php">Promoções </a></div>
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
