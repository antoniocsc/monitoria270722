<?php
	require("sessao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listagem de Vagas</title>
</head>
<body>
	<?php
		require("dbconnect.php");

		$sql = "select * from Vagas";
		$dataset = mysqli_query($linkDB, $sql);

		if(!$dataset){
			echo("não foi possível encontrar essa vaga, verifique.!");
		}else{
			$qtde=mysqli_num_rows($dataset);

			echo("<table>");
		while($linhaDB=mysqli_fetch_assoc($dataset)){
			$Nvaga = $linhaDB["Nvaga"];
			$Estado = $linhaDB["ESTADO"];
			echo "<tr>";
			echo "<th>Vaga:</th><td>$NVAGA</td>";
			echo "<th>Estado:</th><td>$Estado</td>";
			echo "</tr>";
		}
		echo "</table>";
		}
	?>
</body>
</html>