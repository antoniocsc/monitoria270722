<?php
    require("sessao.php");
 ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ALTERAÇÃO DE USUÁRIOS</title>
   </head>
   <body>
	<?php
		$CPF=$_POST['CPF'];
      $nomeCompleto=$_POST['nomeCompleto'];
      $dtNasc=$_POST['dtNasc'];
		echo ("<!-- var ok -->");
         // validações em PHP
      $mensagem="";
       if ($nomeCompleto=="")
        {
     	 $mensagem+="preencha o nome!<br>";
        }
     if ($mensagem!=""){
     	die("Atenção:<br>$mensagem");
     }
    require("dbconnect.php");
     // montar SQL para envio do banco de dados
     $sql = "update usuario set nomeCompleto='$nomeCompleto',dtNasc='$dtNasc'";
     $sql.=" where ";
     $sql.=" CPF='$CPF' ";
     // die("SQL: $sql<br>");
     $dataset=mysqli_query($linkDB,$sql);
     if (!$dataset) {
     	echo("Não foi possível ATUALIZAR este usuário! verifique!");
     } 
     else{
        echo("Atualização realizada com sucesso!<br>");
        }
      ?>
       <button onclick="window.location.href='menu.php';">Menu do Sistema</button><br>
       </body>
       </html> 