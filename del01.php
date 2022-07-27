<?php
  require("sessao.php");
  ?>
  <!DOCTYPE html>
		<html>
	      <head>
			        <meta charset="utf-8">
			        <title>DELETAR USUÁRIOS</title>
			        <script type="text/javascript">
		function valida() 
		{
			mensagem="";

			//várias validações
			if (document.del01.CPF.value =="") {
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
	<h1>DELETAR USUÁRIOS</h1>
	<br>
			<form name="del01"action="del02.php" method="POST" onsubmit="return valida()"> 
			CPF: <br>
			 <input type="text" name="CPF" value="" maxlength="11" size="11"><br>
			 <br>
			 	Insira SUA senha: <br>
			  <input type="password" name="del01"><br>
			 	<br>
			<input type="submit" name="btnEnvio" value="deletar">
   			</form>
   		</body>
   		</html>