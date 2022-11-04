<?php
require("conectar.php");
require("funcoes_gerais.php");
require("funcoes_veiculo.php");

$id=GetGET('id_veiculo');
$r=Excluir($id);
if($r == true)
{
echo("<script>alert('Veículo excluido com sucesso')</script>");
echo("<script>window.location='admin_veiculo_ver.php'</script>");
}
?>
