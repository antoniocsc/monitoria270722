 <?php
    require("sessao.php");
 ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ALTERAÇÃO DE USUÁRIO</title>
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
     $sql = "select * from usuario";
     $sql.=" where ";
     $sql.=" CPF='$CPF' ";
     // die("SQL: $sql<br>");
     $dataset=mysqli_query($linkDB,$sql);
     if (!$dataset) {
     	echo("Não foi possível LOCALIZAR este usuário! verifique!");
     } 
     else
     { $linkBD=mysqli_fetch_assoc($dataset);
      $nomeCompleto=$linkBD["nomeCompleto"];
      $dtNasc = $linkBD["dtNasc"];
      ?>
      <h1>ALTERAÇÃO DE USUÁRIOS</h1>
          <br>
          <form name="atu01"action="atu03.php" method="POST" onsubmit="return valida()"> 
          CPF: <br>
          <input type="hidden" name="CPF" value="<?php echo($CPF); ?>"><br>
          <br>
          Nome Completo: <br>
          <input type="text" name="nomeCompleto" maxlength="150" size="50" value="<?php echo($nomeCompleto); ?>"><br>
          Data de Nascimento: <br>
          <input type="date" name="dtNasc" value="<?php echo($dtNasc); ?>"><br>
          <br>
          <input type="submit" name="btnEnvio" value="Enviar">
      </form>
     <?php
    }
  ?>
         <button onclick="window.location.href='menu.php';">Menu do Sistema</button><br>
      </body>
 </html> 
