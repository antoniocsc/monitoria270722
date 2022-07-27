<?php
require("sessao.php");
 ?>
<!DOCTYPE html>
<html>
   <head>
	     <meta charset="utf-8">
	     <title>CADASTRO DE USUSARIO</title>
</head>
<body>
     <?php
       $CPF=$_POST['CPF'];
       $nomeCompleto=$_POST['nomeCompleto'];
       $senha1=$_POST['senha1'];
       $senha2=$_POST['senha2'];
       $dtNasc=$_POST['dtNasc'];
        echo ("<!-- var ok -->");
         // validações em PHP
      $mensagem="";
       if ($senha1!=$senha2)
        {
     	 $mensagem+="Senhas não combinam!<br>";
        }
     if ($mensagem!=""){
     	die("Atenção:<br>$mensagem");
     }
        require("dbconnect.php");
        require("cryp2graph2.php");
     $senhaCripto=FazSenha($senha1,$CPF);
     $sql ="insert into usuario (CPF, nomeCompleto, senha, dtNasc) ";
     $sql.=" values ";
     $sql.=" ('$CPF', '$nomeCompleto', '$senhaCripto', '$dtNasc') ";
     // die("SQL: $sql<br>");
     $dataset=mysqli_query($linkDB,$sql);
     if (!$dataset) {
     	echo("Não foi possível cadastrar este usuário! verifique!");
     } 
     else
     {
     	echo("Cadrastro efetuado com sucesso!<br>");
     }
            ?>
            <button onclick="window.location.href='menu.php';">Menu do Sistema</button><br>
   </body>
</html>