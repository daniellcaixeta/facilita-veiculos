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


function SelecionaRS($id)
{
$sql="Select * from tb_veiculo Where id_veiculo= '$id'";
return mysql_query($sql);
 
}

function PesqRS($id)
{
$sql="Select * from tb_veiculo where modelo like '%$id%'";
$rs = mysql_query($sql);
return $rs;
}

?>
