<?php
	session_start();
	require('funcoes_gerais.php');
	if(GetSESSION('usuario')==''){
		echo("<script>window.location = '../login/erroautentica.php'</script>");
	}
?>