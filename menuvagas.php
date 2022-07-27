<?php
 require("sessao.php");
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VAGAS</title>
</head>
<body>
	<?php
		
		echo("<h1>VAGAS</h1>");
	?>
	<button onclick="window.location.href = 'cadvagas.php'">CADASTRO DE VAGAS</button><br>
	<button onclick="window.location.href = 'delvaga.php'">DELETAR VAGAS</button><br>
	<button onclick="window.location.href = 'lisvaga.php'">LISTAR VAGAS</button><br>
	<br>
	<button onclick = "window.location.href = 'menuestacionamento.php'">MENU DAS VAGAS</button><br>

</body>
</html>