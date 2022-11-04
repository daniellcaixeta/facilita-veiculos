<?php
require("conectar.php");
require("funcoes_gerais.php");
require("funcoes_marca.php");

$id=GetGET('id_marca');
$r=Excluir($id);
if($r == true)
{
echo("<script>alert('Marca de Veículo excluida com sucesso')</script>");
echo("<script>window.location='admin_marca_ver.php'</script>");
}
?>
