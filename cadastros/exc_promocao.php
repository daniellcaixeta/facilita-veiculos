<?php
require("conectar.php");
require("funcoes_gerais.php");
require("funcoes_promocoes.php");

$id=GetGET('id_promocao');
$r=Excluir($id);
if($r == true)
{
echo("<script>alert('Promoção excluida com sucesso')</script>");
echo("<script>window.location='admin_promocoes_ver.php'</script>");
}
?>
