<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste de criptografia</title>
</head>
<body>
<?php
	require("cryp2graph2.php");
	$senha="algumacoisa";
	$senhacripto=FazSenha("user", $senha);
	echo("<hr>");
	$simnao=ChecaSenha($senha,$senhacripto);
	if ($simnao==true) {
		echo("igual...");
	} else {
		echo("Diferente....");
	}
   ?>
</body>
</html>