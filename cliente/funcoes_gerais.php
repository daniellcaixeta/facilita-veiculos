<?php
   function GetPOST($var)
   {
      return (isset($_POST[$var])) ? $_POST[$var] : "";
   }

   function GetGET($var)
   {
      return (isset($_GET[$var])) ? $_GET[$var] : "";
   }
   
   function GetSESSION($var)
   {
      return (isset($_SESSION[$var])) ? $_SESSION[$var] : "";
   }
   
   function SetSESSION($var,$valor)
   {
   	  $_SESSION[$var] = $valor;
   }
   
   function LimpaSESSION($var)
   {
      unset($_SESSION[$var]);
   }
   
   
  /**
  Gera uma tabela html
  $rs: conjunto de registros que será usado para gerar tabela
  $headers: array com cabeçalhos das colunas. Ex.: array('Identificador','Descrição')
  $chave: nome do campo chave da tabela (não considera chave composta). Ex.: "id_teste"
  $editar: se igual a "1", botão editar aparecerá na tabela
  $excluir: se igual a "1", botão excluir aparecerá na tabela
  */
   function GeraTabela($rs, $headers, $chave, $editar, $excluir)
   {
      $s = "<table class='tabela'>\n";
	  $s .= "\t<tr class='titulo'>\n";
	  foreach ($headers as $header)
	  {
		  $s .=  "\t\t<td class='titulocelula'>$header</td>\n";
	  }
	  
	  if ($editar == 1)
		    $s .=  "\t\t<td  class='linhacelula'>&nbsp;</td>\n";

	  if ($excluir == 1)
		    $s .=  "\t\t<td  class='linhacelula'>&nbsp;</td>\n";
				  
	  $s .= "\t</tr>\n";		  
	  while ($row = mysql_fetch_object($rs))
	  {
		  $s .= "\t<tr  class='linha'>\n";
		  foreach ($row as $data)
		  {
			  $s .=  "\t\t<td  class='linhacelula'>$data</td>\n";
		  }
		  
		  if ($editar == 1)
		    $s .=  "\t\t<td  class='linhacelula'><input type='button' value='Editar' onclick='editar(\"". $row->$chave."\")' /></td>\n";

		  if ($excluir == 1)
		    $s .=  "\t\t<td  class='linhacelula'><input type='button' value='Excluir' onclick='excluir(\"". $row->$chave."\")' /></td>\n";
		  
		  $s .= "\t</tr>\n";		  		  
	  }

	  $s .= "</table>";	  
	  
	  echo $s;
   }
   
   function GeraTabela2($rs, $headers, $chave, $editar, $excluir)
   {
      $s = "<table class='tabela'>\n";
	  $s .= "\t<tr class='titulo'>\n";
	  foreach ($headers as $header)
	  {
		  $s .=  "\t\t<td class='titulocelula'>$header</td>\n";
	  }
	  
	  if ($editar == 1)
		    $s .=  "\t\t<td  class='linhacelula'>&nbsp;</td>\n";

	  if ($excluir == 1)
		    $s .=  "\t\t<td  class='linhacelula'>&nbsp;</td>\n";
				  
	  $s .= "\t</tr>\n";		  
	  while ($row = mysql_fetch_object($rs))
	  {
		  $s .= "\t<tr  class='linha'>\n";
		  foreach ($row as $data)
		  {
			  $s .=  "\t\t<td  class='linhacelula'>$data</td>\n";
		  }
		  
		  if ($editar == 1)
		    $s .=  "\t\t<td  class='linhacelula'><input type='button' value='Comprar' onclick='editar(\"". $row->$chave."\")' /></td>\n";

		  if ($excluir == 1)
		    $s .=  "\t\t<td  class='linhacelula'><input type='button' value='Excluir' onclick='excluir(\"". $row->$chave."\")' /></td>\n";
		  
		  $s .= "\t</tr>\n";		  		  
	  }

	  $s .= "</table>";	  
	  
	  echo $s;
   }
   
   
   function MontaCombo($nome, $rs, $valor, $descricao, $selecionado, $onchange)
   {
   		echo("<Select name='$nome' onchange='$onchange' class='combo'>\n");
		$s = ($selecionado == "") ? ' Selected ' :  '';
		echo("\t<option value='-1' $s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selecione&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>\n");
		while ($obj = mysql_fetch_object($rs))
		{
			$s = ($selecionado == $obj->$valor) ? ' Selected ' :  '';
			echo("\t<option value='".$obj->$valor."' $s> ". $obj->$descricao." </option>\n");
		}
		echo("</Select>\n");
   }

?>