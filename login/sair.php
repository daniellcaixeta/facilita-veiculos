<?php
	session_start();
	require('funcoes_gerais.php');
	LimpaSESSION('usuario');
	echo("<script>window.location='../index.php'</script>");


?>