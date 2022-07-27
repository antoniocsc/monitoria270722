<?php
	require("sessao.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CADASTRO DE VAGAS</title>
	<script type="text/javascript">
		function valida(){
			mensagem="";
			if(document.cadvagas.vaga.value==""){
				mensagem=mensagem + "\nPreencha O Nome";
			}
			if (mensagem == ""){
				return true;
			}
			else {
				alert("Atenção:\n" + mensagem);
				return false;
			}
		}
	</script>
</head>
<body>
	<form name="cadvagas" method="POST" action="cadvaga02.php" onsubmit="return valida()">
				NUMERO:<br>
				<input type="text" name="vaganome" maxlength="4"><br>
				<input type="submit" name="envio" value="Enviar">
		</form>
	<?php 
	require("rodape.php");
	require("dbconnect.php");
	?>
</body>
</html>