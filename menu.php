<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu do sistema</title>
</head>
<style type="text/css">
  body 
  {
    background-image: url("naruto.jpg");
    background-size: 1400px;
      color:white;
      font-family: BAUHAUS 93;
      font-size: 20px;
  }
 </style>
        <body>
        <h1>MENU DO SISTEMA</h1>
<?php
  require("sessao.php");
  $CPF=$_SESSION['CPF'];
  $nomeCompleto=$_SESSION['nomeCompleto'];
  echo("<h3>CPF: $CPF</h3>");
  echo("<h3>Nome: $nomeCompleto</h3>");
?>
  <button onclick="window.location.href='cad01.php';">Cadastrar Usuário</button><br>
  <button onclick="window.location.href='lis01.php';">Listar Usuário</button><br>
  <button onclick="window.location.href='atu01.php';">Atualizar Usuário</button><br>
  <button onclick="window.location.href='del01.php';">Deletar Usuário</button><br>
  <button onclick="window.location.href='pes01.php';">Pesquisar Usuário</button><br>
  <button onclick="window.location.href='sair.php';">Sair do sistema</button><br>
  <button onclick="window.location.href='menuvagas.php';">Ir para o menu de vagas</button><br>
  <br>
<?php require("rodape.php"); ?>
</body>
</html>