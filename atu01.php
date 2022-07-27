<?php
  require("sessao.php");
  ?>
  <!DOCTYPE html>
		<html>
	    <head>
			<meta charset="utf-8">
			<title>ATUALIZAÇAO DE USUÁRIOS</title>
			<script type="text/javascript">
		function valida() 
		{
			mensagem="";

			//várias validações
			if (document.atu01.CPF.value=="") {
				mensagem=mensagem+"\nPreencha o CPF!";
			}
			if (mensagem==""){
				return true;
			} else {
              alert("Atenção:\n"+mensagem);
              return false;
			}
		}
	</script>
</head>
	<body>
	<h1>ATUALIZAÇAO DE USUÁRIOS</h1>
	<br>
			<form name="atu01"action="atu02.php" method="POST" onsubmit="return valida()"> 
			CPF: <br>
			 <input type="text" name="CPF" value="" maxlength="11" size="11"><br>
			 <br>
			<input type="submit" name="btnEnvio" value="Enviar">
   			</form>
   		</body>
   		</html>