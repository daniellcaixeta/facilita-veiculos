<?php 
require('conectar.php');
require('funcoes_gerais.php');
$desconto=GetPOST('txtdesconto');
$data=GetPOST('txtdata');
$veiculo=GetPOST('cboVeiculo');

$sql="Insert into tb_promocao (desconto, data, id_veiculo) values ('$desconto', '$data', '$veiculo')";

//echo $sql;

$res=mysql_query($sql);
if (mysql_affected_rows()>0)
{
echo("<script> alert ('Promoção Cadastrada com Sucesso!!') </script>");
echo("<script>window.location='admin_promocoes_ver.php' </script>");
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
