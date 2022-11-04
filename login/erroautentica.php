<?php

	session_start();
	require('conectar.php');
	require('funcoes_gerais.php');
	require('funcoes_login.php');	
	
	$fl_logar = GetPOST('fl_logar');
	if ($fl_logar == '1'){
		
		$usuario = GetPOST('txtUsuario');
		$senha = GetPOST('txtSenha');		
		
			
		if (validaLogin($usuario,$senha))
		{
			SetSESSION('usuario',$usuario);
			$perfil = GetPerfil($usuario);
			SetSESSION('perfil', $perfil);
			
			if($perfil=='1')
				echo("<script>window.location = 'admin.php'</script>");
			else
				echo("<script>window.location = 'cliente.php'</script>");
				
		}
		
		else
			echo("<script>alert('Usuário e/ou senha incorretos!')</script>");
	}
	
?>

<script type="text/javascript">
	function valida(){
		return true;
	}
	
	function entrar(){
		if(valida()){
			document.form1.fl_logar.value = '1';
			document.form1.submit();
		}
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
.style1 {color: #8C0209}
-->
</style>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul id="main">
			<li class="current_page_item"><a href="#" class="first">&nbsp;&nbsp;Principal&nbsp;&nbsp;</a></li>
			<li><a href="#">&nbsp;Quem Somos &nbsp;</a></li>
			<li><a href="#">&nbsp;Veículos&nbsp;</a></li>
			<li><a href="#">&nbsp;&nbsp;Promoções&nbsp;&nbsp;</a></li>
			<li><a href="#">&nbsp;&nbsp;Venda&nbsp;&nbsp;</a></li>
		</ul>
		<ul id="feed">
			<li><a href="#">&nbsp;&nbsp;Registra-se&nbsp;&nbsp;</a></li>
			<li><a href="#">&nbsp;&nbsp;Contato&nbsp;&nbsp;</a></li>
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
						<li><a href="#">Principal</a></li>
						<li><a href="#">Quem Somos </a></li>
						<li><a href="#">Veículos</a></li>
						<li><a href="#">Promoções</a></li>
						<li><a href="#">Venda</a></li>
						<li><a href="#">Registra-se</a></li>
						<li><a href="#">Contato</a></li>
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
				
				<p align="center" class="title style1"><strong>Erro</strong>
				<div class="entry">
					
			  </div>
		  </div>
		  <div class="post">
		  <p align="center"><strong>Voc&ecirc; n&atilde;o tem permiss&atilde;o para acessar essa p&aacute;gina!</strong></p>
		  <p align="center"><strong><a href="../index.php">Entrar no sistema </a></strong></p>
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
							<h2>Login</h2>
							</p>
							<form id="form1" name="form1" method="post" action="">
  <input type="hidden" name="fl_logar" value="0" />
					<table width="220" border="0">
                      <tr>
                        <td width="48"><span class="entry">Usuário:</span></td>
                        <td width="156"><input name="txtUsuario" type="text" class="style11" id="txtUsuario" size="20" /></td>
                      </tr>
                      <tr>
                        <td><span class="entry">Senha:</span></td>
                        <td><input name="txtSenha" type="password" class="style11" id="txtSenha" size="20" /></td>
                      </tr>
                      <tr>
                        <td height="29" colspan="2"><label> </label>
                            <div align="center">
                              <input name="Submit" type="button" class="botao" onClick="entrar()" value="Entrar" />
                            </div></td>
                      </tr>
                    </table>
					</form>
				
				</li><li>
					<h2>Top Veículos </h2>
					<ul>
						<li><a href="#">Blazer Advantage 2.4L 4X2 04 Ptas - Flexpower - Pdf R9Z BIA D08 </a></li>
						<li><a href="#">Blazer Advantage 2.4L 4X2 04 Ptas - Flexpower - Pdf R9Z BIA D08 </a></li>
						<li><a href="#">Blazer Advantage 2.4L 4X2 04 Ptas - Flexpower - Pdf R9Z BIA D08 </a></li>
						<li><a href="#">Blazer Advantage 2.4L 4X2 04 Ptas - Flexpower - Pdf R9Z BIA D08 </a></li>
						<li><a href="#">Blazer Advantage 2.4L 4X2 04 Ptas - Flexpower - Pdf R9Z BIA D08 </a></li>
						
					</ul>
				</li>
				<li>
					<h2>Notícias</h2>
					<div id="calendar_wrap">
						<ul>
						<li><a href="http://g1.globo.com/Noticias/Carros/0,,MUL1288703-9658,00-CARRO+MAIS+RAPIDO+DA+JAGUAR+CHEGA+AO+BRASIL+POR+R+MIL.html" target="_blank">Carro mais rápido da Jaguar chega ao Brasil por R$ 481 mil </a></li>
						<li><a href="http://revistaautoesporte.globo.com/Revista/Autoesporte/0,,EMI90269-10142,00-SMART+BRABUS+CHEGA+AS+LOJAS+EM+NOVEMBRO.html" target="_blank">Smart Brabus chega às lojas em novembro</a></li>
						<li><a href="http://g1.globo.com/Noticias/Carros/0,,MUL1244861-9658,00-VEJA+COMO+EVITAR+BATER+O+CARRO+NO+TRANSITO.html" target="_blank">Direção Defensiva: Veja como evitar bater o carro no trânsito </a></li>
						<li><a href="http://g1.globo.com/Noticias/Carros/0,,MUL962062-9658,00-CALCULADORA+MOSTRA+QUAL+COMBUSTIVEL+E+MAIS+VANTAJOSO.html" target="_blank">Alcool ou Gasolina?<br />
					    Calcule qual combustível é mais vantajoso </a></li>
					  </ul>
				  </div>
				</li>
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
