<?php
require("conectar.php");
require("funcoes_gerais.php");
require("funcoes_funcionario.php");

$id_pessoa=GetGET('id_pessoa');
$r=Excluir($id_pessoa);
if($r == true)
{
echo("<script>alert('Funcionário excluido com sucesso!')</script>");
echo("<script>window.location='admin_funcionario_ver.php' </script>");

				}
		else {
			echo "erro";
		}
	
?>
