<script type="text/javascript">
function valida()
{
 if (document.form5.txtnome.value == '')
   {
   alert('Campo Nome é obrigatorio!');
   document.form5.txtnome.focus();
   return false;
   }
 if (document.form5.txtcpf.value == '')
   {
   alert('Campo CPF é obrigatorio!');
   document.form5.txtcpf.focus();
   return false;
   }
 if (document.form5.txtmail.value == '')
   {
   alert('Campo E-mail é obrigatorio!');
   document.form5.txtmail.focus();
   return false;
   }
 if (document.form5.txttel.value == '')
   {
   alert('Campo Telefone é obrigatorio!');
   document.form5.txttel.focus();
   return false;
   }
 if (document.form5.txtend.value == '')
   {
   alert('Campo Endereço é obrigatorio!');
   document.form5.txtend.focus();
   return false;
   }
 if (document.form5.txtnum.value == '')
   {
   alert('Campo Número é obrigatorio!');
   document.form5.txtnum.focus();
   return false;
   }
 if (document.form5.txtbairro.value == '')
   {
   alert('Campo Bairro é obrigatorio!');
   document.form5.txtbairro.focus();
   return false;
   }
 if (document.form5.txtcomp.value == '')
   {
   alert('Campo Complemento é obrigatorio!');
   document.form5.txtcomp.focus();
   return false;
   }
 if (document.form5.txtcidade.value == '')
   {
   alert('Campo Cidade é obrigatorio!');
   document.form5.txtcidade.focus();
   return false;
   }
 if (document.form5.txtcidade.value == '')
   {
   alert('Campo Cidade é obrigatorio!');
   document.form5.txtcidade.focus();
   return false;
   }
 if (document.form5.cmbestado.value == '-1')
   {
   alert('Selecione um Estado!');
   document.form5.cmbestado.focus();
   return false;
   }
 if (document.form5.txtuser.value == '')
   {
   alert('Campo Usuário é obrigatorio!');
   document.form5.txtuser.focus();
   return false;
   }
 if (document.form5.txtsen.value == '')
   {
   alert('Campo Senha é obrigatorio!');
   document.form5.txtusen.focus();
   return false;
   }
  return true;
}

function gravar(){
if(valida()==true)
  {
	document.form5.fl_Salvar.value = '1';
	document.form5.submit();
  }
}
</script>

<?php
	
		session_start();
		require('conectar.php');
  	  	require('cadastros/funcoes_clientes.php');
		require('cadastros/funcoes_gerais.php');
	
	
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
		  echo("<script>alert('Parabens!! Você foi cadastrado com Sucesso! Agora efetue o Login')</script>");
		  echo("<script>window.location='index.php' </script>");
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
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul id="main">
			<li class="current_page_item"><a href="index.php" class="first">&nbsp;&nbsp;Principal&nbsp;&nbsp;</a></li>
			<li><a href="empresa.php">&nbsp;Quem Somos &nbsp;</a></li>
			<li><a href="veiculos.php">&nbsp;Veículos&nbsp;</a></li>
			<li><a href="promocoes.php">&nbsp;&nbsp;Promoções&nbsp;&nbsp;</a></li>
			<li><a href="venda.php">&nbsp;&nbsp;Venda&nbsp;&nbsp;</a></li>
		</ul>
		<ul id="feed">
			<li><a href="registrar.php">&nbsp;&nbsp;Registra-se&nbsp;&nbsp;</a></li>
			<li><a href="contato.php">&nbsp;&nbsp;Contato&nbsp;&nbsp;</a></li>
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
						<li><a href="index.php">Principal</a></li>
						<li><a href="empresa.php">Quem Somos </a></li>
						<li><a href="veiculos.php">Veículos</a></li>
						<li><a href="promocoes.php">Promoções</a></li>
						<li><a href="venda.php">Venda</a></li>
						<li><a href="registrar.php">Registra-se</a></li>
						<li><a href="contato.php">Contato</a></li>
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
				<h1 class="title"><a href="#">Registrar-se </a></h1>
				<p class="byline">
				<div class="entry">
					<form id="form5" name="form5" method="post" action="">
		  		  
                <input name="fl_Salvar" type="hidden" id="fl_Salvar" value="0"/>
         <input type="hidden" name="txtpessoa" value="<?=$id_pessoa;?>" /> 
		 
            
              <input type="hidden" name="combo" value="2" />
              <table width="289" border="0" align="left">
                <tr>
                  <td width="80">Nome:</td>
                  <td width="177"><input name="txtnome" type="text" id="txtnome" size="50" tabindex="1" class="entry"/></td>
                  <td width="4">&nbsp;</td>
                  <td width="10">&nbsp;</td>
                </tr>
                <tr>
                  <td>CPF:</td>
                  <td class="style11"><input name="txtcpf" type="text" class="style11" id="txtcpf" tabindex="2" size="50"/></td>
                  <td>&nbsp;</td>
                  <td class="style11">&nbsp;</td>
                </tr>
                <tr>
                  <td><span class="style11">E-mail:</span></td>
                  <td class="style11"><input name="txtmail" type="text" class="style11" id="txtmail" tabindex="3" size="50"/></td>
                  <td>&nbsp;</td>
                  <td class="style11">&nbsp;</td>
                </tr>
                <tr>
                  <td><span class="style11"><span class="style14">Telefone:</span></span></td>
                  <td class="style11"><input name="txttel" type="text" class="style11" id="txttel" tabindex="4" size="50"/></td>
                  <td>&nbsp;</td>
                  <td class="style11">&nbsp;</td>
                </tr>
                <tr>
                  <td height="24"><span class="style14">Enderenço:</span></td>
                  <td class="style11"><input name="txtend" type="text" class="style11" id="txtend" tabindex="5" size="50"/></td>
                  <td>&nbsp;</td>
                  <td class="style11">&nbsp;</td>
                </tr>
                <tr>
                  <td height="24"><span class="style14">Número:</span></td>
                  <td>
                    <input name="txtnum" type="text" class="style11" id="txtnum" tabindex="6" size="50" />
                  </td>
              
                </tr>
                <tr>
                  <td height="24"><span class="style14">Complemento:</span></td>
                  <td class="style11"><span class="style14">
                    <input name="txtcomp" type="text" class="style11" id="txtcomp" tabindex="8" size="50"/>
                  </span></td>
                  <td class="style11">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="24"><p><span class="style14">Bairro:</span></p>
                  <label></label></td>
                  <td height="24">
                    <input name="txtbairro" type="text" class="style11" id="txtbairro" tabindex="7" size="50" />
                  </td>
                  <td height="24">&nbsp;</td>
                  <td height="24">&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="center">
                    <label></label>
                    <div align="left"><span class="style14">Cidade:</span></div>
                  </div></td>
                  <td><span class="style14"><span class="style11">
                    <input name="txtcidade" type="text" class="style11" id="txtcidade" tabindex="9" size="50"/>
                  </span></span></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><span class="style14">Estado:</span></td>
                  <td><span class="style14"><span class="style11">
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
                  </span></span></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><span class="style14">Usuário:</span></td>
                  <td><span class="style14"><span class="style11">
                    <input name="txtuser" type="text" class="style11" id="txtuser" tabindex="11" size="50"/>
                  </span></span></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><span class="style11"><span class="style14">Senha:</span></span></td>
                  <td><span class="style11"><span class="style14">
                    <input name="txtsen" type="text" class="style11" id="txtsen" tabindex="12" size="50" />
                  </span></span></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4"><div align="center">
                    <input name="Button" type="button" class="botao" tabindex="13" onClick="gravar()" value="Gravar"/>
                    <input type="reset" name="Reset" value="Limpar" />
                  </div></td>
                </tr>
            </table>
          </form></p>
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
					
					        <div align="center">
					          <div>
		          </div>
					        <h2 align="left">Login</h2>
							</p>
							<form id="form1" name="form1" method="post" action="">
                              <div align="center">
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
                              </div>
					</form>
				
				            <div align="center"><a href="login/admin.php">Acessar Administrador</a></div>
				</li>
				<li>
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
