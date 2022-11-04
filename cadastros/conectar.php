<?php
//Conectar no servidor
 mysql_connect('localhost','root','unipam') or die ('Erro ao conectar com servidor = '. mysql_error()
 );
 
//Selecionar banco de dados
mysql_select_db('db_facilita') or die ('Banco inexistente');

?>