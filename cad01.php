<?php
 require("sessao.php");
  ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CADASTRO DE USUÁRIOS</title>
		<script type="text/javascript">
		function valida() 
		{
			mensagem="";

			//várias validações
			if (document.cad01.senha1.value!=document.cad01.senha2.value) {
				mensagem=mensagem+"\nSenhas não combinam!";
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
	<h1>CADASTRO DE USUÁRIOS</h1>
	
	<br>
	<form name="cad01" action="cad02.php" method="POST" onsubmit="return valida()">
		CPF:
		<input type="text" name="CPF" value="" maxlength="11" size="11"><br>
		Nome Completo:
		<input type="text" name="nomeCompleto" maxlength="150" size="50"><br>
		Senha:
		<input type="password" name="senha1" value="" maxlength="50" size="50"><br>
		Confirme a senha:
		<input type="password" name="senha2" value="" maxlength="50" size="50"><br>
		Data nascimento:
		<input type="date" name="dtNasc"><br>
		<br>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>




