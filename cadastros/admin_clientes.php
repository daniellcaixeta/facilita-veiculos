<script type="text/javascript">
function valida()
{
 if (document.form1.txtnome.value == '')
   {
   alert('Campo Nome é obrigatorio!');
   document.form1.txtnome.focus();
   return false;
   }
 if (document.form1.txtcpf.value == '')
   {
   alert('Campo CPF é obrigatorio!');
   document.form1.txtcpf.focus();
   return false;
   }
 if (document.form1.txtmail.value == '')
   {
   alert('Campo E-mail é obrigatorio!');
   document.form1.txtmail.focus();
   return false;
   }
 if (document.form1.txttel.value == '')
   {
   alert('Campo Telefone é obrigatorio!');
   document.form1.txttel.focus();
   return false;
   }
 if (document.form1.txtend.value == '')
   {
   alert('Campo Endereço é obrigatorio!');
   document.form1.txtend.focus();
   return false;
   }
 if (document.form1.txtnum.value == '')
   {
   alert('Campo Número é obrigatorio!');
   document.form1.txtnum.focus();
   return false;
   }
 if (document.form1.txtbairro.value == '')
   {
   alert('Campo Bairro é obrigatorio!');
   document.form1.txtbairro.focus();
   return false;
   }
 if (document.form1.txtcomp.value == '')
   {
   alert('Campo Complemento é obrigatorio!');
   document.form1.txtcomp.focus();
   return false;
   }
 if (document.form1.txtcidade.value == '')
   {
   alert('Campo Cidade é obrigatorio!');
   document.form1.txtcidade.focus();
   return false;
   }
 if (document.form1.txtcidade.value == '')
   {
   alert('Campo Cidade é obrigatorio!');
   document.form1.txtcidade.focus();
   return false;
   }
 if (document.form1.cmbestado.value == '-1')
   {
   alert('Selecione um Estado!');
   document.form1.cmbestado.focus();
   return false;
   }
 if (document.form1.txtuser.value == '')
   {
   alert('Campo Usuário é obrigatorio!');
   document.form1.txtuser.focus();
   return false;
   }
 if (document.form1.txtsen.value == '')
   {
   alert('Campo Senha é obrigatorio!');
   document.form1.txtusen.focus();
   return false;
   }
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
	  $r = InsereCliente($nome, $cpf, $email, $tel, $rua, $num, $bairro, $comple, $usuario, $senha, $perfi, $cidade, $estado);
	  if ($r == true)
	     {
		  echo("<script>alert('Cliente Cadastrado com Sucesso!')</script>");
		  echo("<script>window.location='admin_clientes_ver.php' </script>");
		 }
		
	  else  
	    {
		  echo "Erro";
	    }
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
				<h1 class="title"><a href="../login/admin.php">Cadastrar Clientes </a></h1>
				<p class="byline">
				<div class="entry">
					<p align="center">&nbsp;</p>
						  <form id="form1" name="form1" method="post" action="">
		  		  
                <input name="fl_Salvar" type="hidden" id="fl_Salvar" value="0"/>
         <input type="hidden" name="txtpessoa" value="<?=$id_pessoa;?>" /> 
		 
            
              <input type="hidden" name="combo" value="2" />
              </span>
              <table width="490" border="0" align="center">
                <tr>
                  <td width="56">Nome:</td>
                  <td><input name="txtnome" type="text" id="txtnome" size="30" tabindex="1" class="entry"/></td>
                  <td width="69"><div align="left"><span class="style14">Número:</span></div></td>
                  <td><input name="txtnum" type="text" class="style11" id="txtnum" tabindex="6" size="30" /></td>
                </tr>
                <tr>
                  <td><span class="style11">CPF:</span></td>
                  <td class="style11"><input name="txtcpf" type="text" class="style11" id="txtcpf" tabindex="2" size="30"/></td>
                  <td><div align="left"><span class="style14">Complemento:</span></div></td>
                  <td class="style11"><input name="txtcomp" type="text" class="style11" id="txtcomp" tabindex="8" size="30"/></td>
                </tr>
                <tr>
                  <td><span class="style11">E-mail:</span></td>
                  <td class="style11"><input name="txtmail" type="text" class="style11" id="txtmail" tabindex="3" size="30"/></td>
                  <td><div align="left"><span class="style14">Bairro:</span></div></td>
                  <td class="style11"><input name="txtbairro" type="text" class="style11" id="txtbairro" tabindex="7" size="30" /></td>
                </tr>
                <tr>
                  <td><span class="style11"><span class="style14">Telefone:</span></span></td>
                  <td class="style11"><input name="txttel" type="text" class="style11" id="txttel" tabindex="4" size="30"/></td>
                  <td><div align="left"><span class="style14">Cidade:</span></div></td>
                  <td class="style11"><input name="txtcidade" type="text" class="style11" id="txtcidade" tabindex="9" size="30"/></td>
                </tr>
                <tr>
                  <td><span class="style14">Enderenço:</span></td>
                  <td class="style11"><input name="txtend" type="text" class="style11" id="txtend" tabindex="5" size="30"/></td>
                  <td><div align="left"><span class="style14">Estado:</span></div></td>
                  <td class="style11"><label>
                    <select name="cmbestado" class="style11" id="cmbestado">
                      <option value="AC">Acre&nbsp;</option>
                      <option value="AL">Alagoas&nbsp;</option>
                      <option value="AP">Amapá&nbsp;</option>
                      <option value="AM">Amazonas&nbsp;</option>
                      <option value="BA">Bahia&nbsp;</option>
                      <option value="CE">Ceará&nbsp;</option>
                      <option value="DF">Distrito Federal&nbsp;</option>
                      <option value="ES">Espírito Santo&nbsp;</option>
                      <option value="GO">Goiás&nbsp;</option>
                      <option value="MA">Maranhão&nbsp;</option>
                      <option value="MT">Mato Grosso&nbsp;</option>
                      <option value="MS">Mato Grosso do Sul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                      <option value="MG" selected="selected">&nbsp;Minas Gerais&nbsp;</option>
                      <option value="PA">Pará </option>
                      <option value="PB">Paraíba</option>
                      <option value="PR">Paraná</option>
                      <option value="PE">Pernambuco</option>
                      <option value="PI">Piauí</option>
                      <option value="RJ">Rio de Janeiro</option>
                      <option value="RN">Rio Grande do Norte</option>
                      <option value="RS">Rio Grande do Sul</option>
                      <option value="RO">Rondônia</option>
                      <option value="RR">Roraima</option>
                      <option value="SC">Santa Catarina</option>
                      <option value="SP">São Paulo</option>
                      <option value="SE">Sergipe</option>
                      <option value="TO">Tocantins</option>
                    </select>
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
                  <td class="style11"><input name="txtuser" type="text" class="style11" id="txtuser" tabindex="11" size="30"/></td>
                  <td class="style11"><span class="style14">Senha:</span></td>
                  <td><label><span class="style11">
                    <input name="txtsen" type="text" class="style11" id="txtsen" tabindex="12" size="30" />
                  </span></label></td>
                </tr>
                <tr>
                  <td height="29" colspan="4"><label></label></td>
                </tr>
                <tr>
                  <td colspan="4"><div align="center">
                  <input name="Button" type="button" class="botao" tabindex="13" onClick="gravar()" value="Gravar"/>
                  <label>
                  <input type="reset" name="Reset" value="Limpar" />
                  </label>
                  </div></td>
                </tr>
            </table>
          </form>
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
