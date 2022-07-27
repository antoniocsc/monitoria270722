<?php
    require("sessao.php");
 ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DELETAR USUÁRIOS</title>
   </head>
   <body>
	<?php
		$CPF=$_POST['CPF'];
		echo ("<!-- var ok -->");
         // validações em PHP
      $mensagem="";
       if ($CPF=="")
        {
     	 $mensagem+="preencha o cpf!<br>";
        }
      if ($mensagem!=""){
     	die("Atenção:<br>$mensagem");
      }
    require("dbconnect.php");
     // montar SQL para envio do banco de dados
     $sql = "delete from usuario";
     $sql.=" where ";
     $sql.=" CPF='$CPF' ";
     // die("SQL: $sql<br>");
     $dataset=mysqli_query($linkDB,$sql);
     if (!$dataset) {
     	echo("Não foi possível LOCALIZAR este usuário! verifique!");
     } 
     else{
         echo("usuário DELETADO com sucessso!");
      }
      ?>
       <button onclick="window.location.href='menu.php';">Menu do Sistema</button><br>
       </body>
       </html> 
