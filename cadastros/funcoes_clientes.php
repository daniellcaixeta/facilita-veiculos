<?php

function InsereCliente($nome, $cpf, $email, $tel, $rua, $num, $bairro, $comple, $usuario, $senha, $perfi, $estado, $cidade)
{
	$sql="insert into pessoa (nome, cpf, email, tel, rua, nume, bairro, complemento, id_login, ds_senha, id_perfil, estado, cidade) values ('$nome', '$cpf', '$email', '$tel', '$rua', '$num', '$bairro', '$comple', '$usuario', '$senha', '$perfi','$estado','$cidade')"; 
	$res=mysql_query($sql);
    
	$sql2="select max(id_pessoa)as id_pessoa from pessoa";
	$res=mysql_query($sql2);
	$obj = mysql_fetch_object($res);
	$codigoautoinc = ($obj->id_pessoa);  // "codigo" &#65533; o nome do seu campo da tabela
	$sql3 = "insert into tb_cliente (id_pessoa) values ('$codigoautoinc')";
	//echo $sql3;
	$res=mysql_query($sql3);
	
	if(mysql_affected_rows() > 0)
	   return true;
	else
	   return false;
}

function SelecionaTodos()
{
	$sql = 'Select pessoa.id_pessoa, tb_cliente.id_pessoa, nome, cpf, email, tel, id_login, ds_senha from pessoa, tb_cliente where pessoa.id_pessoa= tb_cliente.id_pessoa';
    return mysql_query($sql);
}

function SelecionaUm($id)
{
$sql="Select * from pessoa a, tb_cliente b where a.id_pessoa= b.id_pessoa and a.id_pessoa= $id";
$rs = mysql_query($sql);
return mysql_fetch_object($rs);
 
}


function AlteraCliente($nome, $cpf, $email, $tel, $rua, $num, $bairro, $comple, $usuario, $senha, $perfi, $estado, $cidade, $id_pessoa)
{

$sql="Update pessoa, tb_cliente Set nome='$nome', cpf='$cpf', email='$email', tel='$tel', rua='$rua', nume='$num', bairro='$bairro', complemento='$comple', id_login='$usuario', ds_senha='$senha', id_perfil='$perfi', estado='$estado', cidade='$cidade' where pessoa.id_pessoa=$id_pessoa and tb_cliente.id_pessoa=$id_pessoa";
mysql_query($sql);
  	if(mysql_affected_rows() > 0)
	   return true;
	else
	   return false;
}


function Excluir($id_pessoa)
{
$sql="delete from tb_cliente where id_pessoa='$id_pessoa'";
mysql_query($sql);

$sql3 ="delete from pessoa where id_pessoa='$id_pessoa'";
mysql_query($sql3);

if (mysql_affected_rows() > 0)
return true;
else
return false;
}

?>
