<script type="text/javascript">
function valida()
{
 return true;
}
function gravar(){
if(valida()==true)
  {
	document.form1.fl_Salvar.value = '1';
	document.form1.submit();
  }
}
</script>

<?php
	
		require('../login/somenteadministrador.php');
		require('conectar.php');
  	  	require('funcoes_promocoes.php');
	
$fl_gravar=GetPOST('fl_gravar');
if($fl_gravar == 1)
{
	  $desconto = GetPOST('txtdesconto');
	  $data = GetPOST('txtdata');
	  $Cod = GetPOST('txtcod');
	  $r = AlteraPromocao($desconto, $data, $Cod);
	  if ($r == true)
	  {
		echo("<script>alert('Promoção Alterada com Sucesso!')</script>");
		echo("<script>window.location='admin_promocoes_ver.php' </script>");
	  }
}
else  
{
	$Cod=GetGET('id_promocao');
	$promocao = SelecionaUm($Cod);			
	$desconto = $promocao->desconto;
	$data = $promocao->data;
	


}

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
				<h1 class="title"><a href="../login/admin.php">Alterar Promoção </a></h1>
				<p class="byline">
			  <div class="entry">
			  <form id="form1" name="form1" method="post" action="">
		  		  
                <input name="fl_Salvar" type="hidden" id="fl_Salvar" value="0"/>
         <input type="hidden" name="txtcod" value="<?=$Cod ;?>" /> 
		 
              <span class="style11">
              <input type="hidden" name="combo" value="2" />
              </span>
              <table width="490" border="0">
                <tr>
                  <td width="56"><span class="style11">Desconto:</span></td>
                  <td><input name="txtdesconto" type="text" id="txtdesconto" size="30" tabindex="1" class="style11" value="<?= $desconto; ?>"/></td>
                  <td width="69"><div align="left"><span class="style14">Data:</span></div></td>
                  <td><input name="txtdata" type="text" class="style11" id="txtdata" tabindex="6" size="30" value="<?= $data; ?>" /></td>
                </tr>
                <tr>
                  
                  <td height="29" colspan="4"><label></label></td>
                </tr>
                <tr>
                  <td colspan="4"><div align="center">
                  <input name="Button" type="button" class="botao" tabindex="13" onClick="gravar()" value="Alterar"/>
                  </div></td>
                </tr>
            </table>
          </form>
						  
		          <a href="admin_promocoes_ver.php">Voltar</a></div>
			    <p>&nbsp;</p>
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
				  <div align="center"><span class="centered">Voce est&aacute; logado com <b><? print $_SESSION["usuario"]; ?> . </b></span><a href="../login/sair.php">Sair</a>
			        </p>
					<ul>
						<li class="style1">CADASTROS</li>
						<li>
						  <div align="left"><a href="admin_clientes.php">Clientes </a></div>
						</li>
						<li>
						  <div align="left"><a href="admin_funcionario.php">Funcionários </a></div>
						</li>
						<li>
						  <div align="left"><a href="admin_marca.php">Marca de Veículo</a> </div>
						</li>
						<li>
						  <div align="left"><a href="admin_veiculo.php">Veículos </a></div>
						</li>
						<li>
						  <div align="left"><a href="admin_promocoes.php">Promoções </a></div>
						</li> 
						<p>
						<li class="style1">CONSULTAS</li>
						<li>
						  <div align="left"><a href="admin_clientes_ver.php">Clientes </a></div>
						</li>
						<li>
						  <div align="left"><a href="admin_funcionario_ver.php">Funcionários </a></div>
						</li>
						<li>
						  <div align="left"><a href="admin_marca_ver.php">Marca de Veículo</a> </div>
						</li>
						<li>
						  <div align="left"><a href="admin_veiculo_ver.php">Veículos </a></div>
						</li>
						<li>
						  <div align="left"><a href="admin_promocoes_ver.php">Promoções </a></div>
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

	


