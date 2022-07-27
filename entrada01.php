<?php
	require("sessao.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Entrada</title>
</head>
<body>
	<h1>MOVIMENTO</h1>
	<?php
		require("dbconnect.php");
		$sql = "select * from Vagas";
		$dataset = mysqli_query($linkDB, $sql);

		if(!$dataset){
			echo("Erro SQL");
		}else{
			$qtde=mysqli_num_rows($dataset);
			echo("VAGAS LIVRES: <br>");
			while($linhaBD=mysqli_fetch_array($dataset)){
				$Estado = $linhaBD["ESTADO"];
				$NVAGA = $linhaBD["NVAGA"];
				if($Estado == "LV"){
					echo "VAGA "."$NVAGA"."<br>";
				}
			}
		}
	?>
	<br>
	<form name="fEntrada" method="POST" action="entradadb.php">
		Placa: <input type="text" name="placa" maxlength="7"><br>
		Número da Vaga: <input type="text" name="vaga" maxlength="4"><br>
		<input type="submit" name="envio" value="Enviar">
	</form>
	<button onclick = "window.location.href = 'menuestacionamento.php'">VOLTAR</button><br>
</body>
</html>