<?php

function SelecionaTodos()
{
	$sql = "Select v.id_veiculo, m.nome, v.modelo, v.chassi, v.cor, v.ano, v.preco from tb_veiculo v , tb_marca m  where m.id_marca=v.id_marca";
    return mysql_query($sql);
}

function SelecionaUm($id)
{
$sql="Select * from tb_veiculo Where id_veiculo= '$id'";
$rs = mysql_query($sql);
return mysql_fetch_object($rs);
 
}

function AlteraVeiculo($modelo, $chassi, $cor, $preco, $Cod)
{

$sql="Update tb_veiculo, tb_marca Set modelo='$modelo', chassi='$chassi', cor='$cor', preco='$preco', Where id_veiculo=$Cod and tb_marca.id_marca=tb_veiculo.id_marca ";
mysql_query($sql);
  	if(mysql_affected_rows() > 0)
	   return true;
	else
	   return false;
}


function Excluir($id_veiculo)
{
$sql="delete from tb_veiculo where id_veiculo='$id_veiculo'" ;
mysql_query($sql);
if (mysql_affected_rows() > 0)
return true;
else
return false;
}
?>
