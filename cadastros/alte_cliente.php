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
  	  	require('funcoes_clientes.php');
	
	
	$fl_Salvar = GetPOST('fl_Salvar');
  
  if ($fl_Salvar == '1')
    {
	  $id_pessoa = GetPOST('txtpessoa');
	  $nome = GetPOST('txtnome');
	  $cpf = GetPOST('txtcpf');
	  $email = GetPOST('txtmail');
	  $tel = GetPOST('txttel');
	  $rua = GetPOST('txtend');
	  $num = GetPOST('txtnum');
	  $bairro = GetPOST('txtbairro');
	  $comple = GetPOST('txtcomp');
	  $usuario = GetPOST('txtuser');
	  $senha = GetPOST('txtsen');	
	  $perfi = GetPOST('combo'); 
	  $cidade = GetPOST('txtcidade');
	  $estado = GetPOST('cmbestado'); 
	  $r = AlteraCliente($nome, $cpf, $email, $tel, $rua, $num, $bairro, $comple, $usuario, $senha, $perfi, $estado, $cidade, $id_pessoa);
	  if ($r == true)
	     {
		  echo("<script>alert('Cliente Alterado com Sucesso!')</script>");
		  echo("<script>window.location='admin_clientes_ver.php' </script>");
		 }
	}	
else  
{
	$id_pessoa=GetGET('id_pessoa');
	$Cliente = SelecionaUm($id_pessoa);			
	$nome = $Cliente->nome;
	$cpf = $Cliente->cpf;
	$email = $Cliente->email;
	$tel = $Cliente->tel;
	$rua = $Cliente->rua;
	$num = $Cliente->nume;
	$bairro = $Cliente->bairro;
	$comple = $Cliente->complemento;
	$usuario = $Cliente->id_login;
	$senha = $Cliente->ds_senha;
	$perfi = $Cliente->id_perfil;
	$cidade = $Cliente->cidade;
	$estado = $Cliente->estado;
	
	
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
				<h1 class="title"><a href="../login/admin.php">Alterar Cliente</a></h1>
				<p class="byline">
			  <div class="entry">
					<p align="center">&nbsp;</p>
						   <form id="form1" name="form1" method="post" action="">
		  		  
                <input name="fl_Salvar" type="hidden" id="fl_Salvar" value="0"/>
         <input type="hidden" name="txtpessoa" value="<?=$id_pessoa;?>" /> 
		 
              <span class="style11">
              <input type="hidden" name="combo" value="2" />
              </span>
              <table width="490" border="0">
                <tr>
                  <td width="56"><span class="style11">Nome:</span></td>
                  <td><input name="txtnome" type="text" id="txtnome" size="30" tabindex="1" class="style11" value="<?= $nome; ?>"/></td>
                  <td width="69"><div align="left"><span class="style14">Número:</span></div></td>
                  <td><input name="txtnum" type="text" class="style11" id="txtnum" tabindex="6" size="30" value="<?= $num; ?>" /></td>
                </tr>
                <tr>
                  <td><span class="style11">CPF:</span></td>
                  <td class="style11"><input name="txtcpf" type="text" class="style11" id="txtcpf" tabindex="2" size="30" value="<?= $cpf; ?>"/></td>
                  <td><div align="left"><span class="style14">Bairro:</span></div></td>
                  <td class="style11"><input name="txtbairro" type="text" class="style11" id="txtbairro" tabindex="7" size="30" value="<?= $bairro; ?>" /></td>
                </tr>
                <tr>
                  <td><span class="style11">E-mail:</span></td>
                  <td class="style11"><input name="txtmail" type="text" class="style11" id="txtmail" tabindex="3" size="30" value="<?= $email; ?>"/></td>
                  <td><div align="left"><span class="style14">Complemento:</span></div></td>
                  <td class="style11"><input name="txtcomp" type="text" class="style11" id="txtcomp" tabindex="8" size="30" value="<?= $comple; ?>"/></td>
                </tr>
                <tr>
                  <td><span class="style11"><span class="style14">Telefone:</span></span></td>
                  <td class="style11"><input name="txttel" type="text" class="style11" id="txttel" tabindex="4" size="30" value="<?= $tel; ?>"/></td>
                  <td><div align="left"><span class="style14">Cidade:</span></div></td>
                  <td class="style11"><input name="txtcidade" type="text" class="style11" id="txtcidade" tabindex="9" size="30" value="<?= $cidade; ?>"/></td>
                </tr>
                <tr>
                  <td><span class="style14">Enderenço:</span></td>
                  <td class="style11"><input name="txtend" type="text" class="style11" id="txtend" tabindex="5" size="30" value="<?= $rua; ?>"/></td>
                  <td><div align="left"><span class="style14">Estado:</span></div></td>
                  <td class="style11"><label>
                  <input name="cmbestado" type="text" class="style11" id="cmbestado" tabindex="10" value="<?= $estado; ?>" size="30" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="39"><span class="style14">Usuário:</span></td>
                  <td class="style11"><input name="txtuser" type="text" class="style11" id="txtuser" tabindex="11" size="30" value="<?= $usuario; ?>"/></td>
                  <td class="style11"><span class="style14">Senha:</span></td>
                  <td><label><span class="style11">
                    <input name="txtsen" type="text" class="style11" id="txtsen" tabindex="12" size="30" value="<?= $senha; ?>" />
                  </span></label></td>
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
			               <p><a href="admin_clientes_ver.php">Voltar</a></p>
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
