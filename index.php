<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
	<style type="text/css">
	body 
	{
	  background-image: url("kaido.jpg");
	  background-size: 1600px;
      color:white;
      font-family: BAUHAUS 93;
      font-size: 20px;
  }
 </style>
<title></title>
</head>
<body>
		<h1>index.php</h1>
			<form name="flogin" method="POST" action="login.php"> 
			CPF: <input type="text" name="CPF" required="true"><br>
		Senha: <input type="password" name="senha" required="true"><br>
			<input type="submit" name="btnEnvio" value="Enviar">
   			</form>
<?php 
		require("dbconnect.php");
 ?>
</body>
</html>