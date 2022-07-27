<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>APAGANDO</title>
</head>
<body>
	<?php
		$deletarVaga = $_POST['deletarvaga'];
		require("dbconnect.php");

		$sql = "delete from Vagas WHERE Vagas.Nvaga = '$deletarVaga'";
		$dataset = mysqli_query($linkDB, $sql);

		if(!$dataset){
			echo "Essa vaga não existe<br>";
		}else{
			echo("Vaga deletada<br>");
		}
		?>
			<button onclick="window.location.href='menuvagas.php';">VOLTAR</button><br>
		<?php
		require("rodape.php");
	?>

</body>
</html>