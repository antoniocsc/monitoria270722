<?php
	require("sessao.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DELETAR VAGAS</title>
</head>
<body>
	<form name="delvaga01" method="POST" action="deletarvaga.php">
		Número da Vaga: <br>
		 <input type="text" name="deletarvaga.php" maxlength="4"><br>
		<input type="submit" name="enviar" value="APAGAR">
	</form>
	<?php
		require("rodape.php"); 
	?>

</body>
</html>