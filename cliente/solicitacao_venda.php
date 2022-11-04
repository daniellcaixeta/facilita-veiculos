<?

		session_start();

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
.style5 {color: #454545}
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
				<h1 class="title"><a href="../login/cliente.php">Solicitar Venda de Veículo </a></h1>
				<p class="byline">
			  <div class="entry">
				  <p align="center">
				  </p>
			  <form id="form2" method="post" action="funcoes_venda.php">
                 
					<table width="665" border="0">
                      <tr>
                        <td width="107" height="32"><span class="style11">Nome Completo:
                            <label></label>
                        </span>                          <span class="style13">
                        <label> </label>
                        </span></td>
                        <td width="548"><input name="txtnome" type="text" class="style11" id="txtnome" size="90" /></td>
                      </tr>
                      <tr>
                        <td height="32"><span class="style13">E-mail:
                            <label></label>
                        </span>                          <label> </label></td>
                        <td><input name="txtmail" type="text" class="style11" id="txtmail" size="90" /></td>
                      </tr>
                      <tr>
                        <td><span class="style13">
                          <label></label>
                        </span>                          <label>Modelo do Veículo: </label></td>
                        <td><label>
                          <input name="txtmodelo" type="text" id="txtmodelo" size="90" />
                        </label></td>
                      </tr>
                      <tr>
                        <td>Chassi:</td>
                        <td><label>
                          <input name="txtchassi" type="text" id="txtchassi" size="90" />
                        </label></td>
                      </tr>
                      <tr>
                        <td>Cor:</td>
                        <td><label>
                          <input name="txtcor" type="text" id="txtcor" size="90" />
                        </label></td>
                      </tr>
                      
                      <tr>
                        <td>Ano:</td>
                        <td><label>
                          <input name="txtano" type="text" id="txtano" size="90" />
                        </label></td>
                      </tr>
                      <tr>
                        <td>Preço:</td>
                        <td><label>
                          <input name="txtpreco" type="text" id="txtpreco" size="90" />
                        </label></td>
                      </tr>
                      <tr>
                        <td colspan="2"><span class="style13">Observações:</span></td>
                      </tr>
                      <tr>
                        <td colspan="2"><textarea name="txtobs" cols="79" rows="5" class="style11" id="txtobs"></textarea></td>
                      </tr>
                      <tr>
                        <td colspan="2"><div align="center">
                          <input name="Submit2" type="submit" class="botao" value="Enviar" />
                        </div></td>
                      </tr>
                </table>
			    </form></div>
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
                        <div align="left"><a href="solicitacao_venda.php">Solicitar Venda de Veículo </a></div>
                      </li>
                      <li>
                        <div align="left"><a href="consulta_veiculos.php">Consultar Veículos</a></div>
                      </li>
                      <li>
                        <div align="left"><a href="promocao_ver.php">Ver Promoções </a></div>
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