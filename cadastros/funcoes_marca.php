<?php

function InsereMarca($nome, $pais)
{
	$sql="insert into tb_marca (nome, pais) values ('$nome', '$pais')"; 
	$res=mysql_query($sql);
 	if(mysql_affected_rows() > 0)
	   return true;
	else
	   return false;
}

function SelecionaTodos()
{
	$sql = "Select * from tb_marca";
    return mysql_query($sql);
}

function SelecionaUm($id)
{
$sql="Select * from tb_marca Where id_marca= '$id'";
$rs = mysql_query($sql);
return mysql_fetch_object($rs);
 
}

function AlteraMarca($nome, $pais, $Cod)
{

$sql="Update tb_marca Set nome='$nome', pais='$pais' Where id_marca=$Cod";
mysql_query($sql);
  	if(mysql_affected_rows() > 0)
	   return true;
	else
	   return false;
}


function Excluir($id_marca)
{
$sql="delete from tb_marca where id_marca='$id_marca'" ;
mysql_query($sql);
if (mysql_affected_rows() > 0)
return true;
else
return false;
}
?>
