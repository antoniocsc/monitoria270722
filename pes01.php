<?php
  require("sessao.php");
  ?>
  <!DOCTYPE html>
		<html>
	      <head>
			        <meta charset="utf-8">
			        <title>PESQUISA DE USUÁRIOS</title>
			        <script type="text/javascript">
		function valida() 
		{
			mensagem="";
			//várias validações
			if (document.pes01.CPF.value=="") {
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
	<h1>PESQUISA DE USUÁRIOS</h1>
	<br>
			<form name="pes01"action="pes02.php" method="POST" onsubmit="return valida()"> 
			CPF: <br>
			 <input type="text" name="CPF" value="" maxlength="11" size="11"><br>
			 <br>
			<input type="submit" name="btnEnvio">
   			</form>
   		</body>
   		</html>