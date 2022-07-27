<?php
	require("sessao.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Entrada2</title>
</head>
<body>
	<?php
		$placa = $_POST["placa"];
		$NVAGA = $_POST["vaga"];
		require("dbconnect.php");

		$sql = "select * from vagas where NVAGA = '$NVAGA'";
		$dataset=mysqli_query($linkDB, $sql);

		if(!$dataset){
			die("ERRO NO SQL");

		}else{
		$linhaBD=mysqli_fetch_assoc($dataset);
		$Estado = $linhaBD["ESTADO"];

		if($Estado == "LV"){

			echo "A vaga foi ocupada pelo veículo com a placa "."$placa"."<br>";
			$hora = date('H:i:s');
			$oc = "OC";

			$sql = "insert into movimento (INICIO, PLACA, NVAGA) values ('$hora', '$placa', '$NVAGA')";
			$dataset=mysqli_query($linkDB, $sql);

			if(!$dataset){
			die("ERRO NO SQL");
			}
			
			$sql = "update vagas set ESTADO = '$oc' where NVAGA = '$NVAGA'";
			$dataset=mysqli_query($linkDB, $sql);

		}
		else{
			echo "A vaga selecionada já está em uso";
		}
}
	?>
		<button onclick="window.location.href='menumovimento.php';">Voltar</button><br>
	<?php
	?>