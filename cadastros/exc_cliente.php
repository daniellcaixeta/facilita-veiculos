<?php
require("conectar.php");
require("funcoes_gerais.php");
require("funcoes_clientes.php");

$id_pessoa=GetGET('id_pessoa');
$r=Excluir($id_pessoa);
if($r == true)
{
echo("<script>alert('Cliente excluido com sucesso!')</script>");
echo("<script>window.location='admin_clientes_ver.php' </script>");

				}
		else {
			echo "erro";
		}
	
?>
