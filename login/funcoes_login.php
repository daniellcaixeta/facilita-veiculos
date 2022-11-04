<?php
	function validaLogin($usuario,$senha){
		$sql = "SELECT id_login FROM pessoa WHERE id_login = '$usuario' AND ds_senha = '$senha'";
		$rs = mysql_query($sql);
		if (mysql_num_rows($rs)>0)
			return true;
		else
			return false;
	}
	
	function GetPerfil($usuario)
	{
		$sql="SELECT id_perfil 
			   FROM pessoa 
			   WHERE id_login='$usuario'";	
		$rs= mysql_query($sql);
		if (mysql_num_rows ($rs) == 0)
			return 0;
		else
		{
			$obj = mysql_fetch_object($rs);
			return $obj->id_perfil;
		}
	}
?>