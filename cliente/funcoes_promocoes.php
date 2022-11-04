<?php

function SelecionaTodos()
{
	$sql = "Select p.id_promocao, v.modelo, v.preco, p.desconto, p.data from tb_promocao p, tb_veiculo v where v.id_veiculo=p.id_veiculo";
    return mysql_query($sql);
}

function SelecionaUm($id)
{
$sql="Select * from tb_promocao Where id_promocao= '$id'";
$rs = mysql_query($sql);
return mysql_fetch_object($rs);
 
}

function AlteraPromocao($desconto, $data, $Cod)
{

$sql="Update tb_promocao, tb_veiculo Set desconto='$desconto', data='$data' Where id_promocao=$Cod and tb_veiculo.id_veiculo=tb_promocao.id_veiculo ";
mysql_query($sql);
  	if(mysql_affected_rows() > 0)
	   return true;
	else
	   return false;
}


function Excluir($id_promocao)
{
$sql="delete from tb_promocao where id_promocao='$id_promocao'" ;
mysql_query($sql);
if (mysql_affected_rows() > 0)
return true;
else
return false;
}
?>
