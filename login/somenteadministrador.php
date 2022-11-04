<?php
     require('autenticacao.php');
	$perfil =GetSESSION('perfil');

	if ($perfil != '1')
		echo("<script>window.location='../login/erroadmin.php'</script>");

?>
