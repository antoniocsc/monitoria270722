<?php
	require("sessao.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cadastrar vaga</title>
</head>
<body>
	<?php
		$nomeVaga = $_POST['vaganome'];
		require("dbconnect.php");

		$sql = "insert into Vagas (NVAGA) values ('$nomeVaga')";
		$dataset = mysqli_query($linkDB, $sql);

		if(!$dataset){
			echo("Erro ao cadastrar a vaga<br>");
		}else {
			echo("Vaga Cadastrada<br>");
		}
		?>
			<button onclick="window.location.href='menuvagas.php';">VOLTAR</button><br>
		<?php
		require("rodape.php");

	?>
</body>
</html>