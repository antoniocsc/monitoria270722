<?php
  require("sessao.php");
  ?>
  <!DOCTYPE html>
		<html>
	    <head>
			<meta charset="utf-8">
			<title>LISTAGEM DE USUÁRIOS</title>
	    <style type="text/css">
				table {
					width:  100%;
					border: solid 1px greenyellow;
				}
				tr {
					background-color: lightblue;
				}
		</style>
	</head>
	<body>
		<h1>LISTAGEM DE USUÁRIOS</h1>
		<?php
		require("dbconnect.php");
		$sql ="select * from usuario ";
		$dataset=mysqli_query($linkDB, $sql);
		echo ("<table>");
	     echo("<tr>");
	     echo("<th>CPF</th>");
	     echo("<th>Nome Completo</th>");
	     echo("<th>Data de Nascimento</th>");
	     echo("</tr>");
		while( $linhaDB=mysqli_fetch_assoc($dataset)){
			 $CPF=$linhaDB["CPF"];
	     $nomeCompleto=$linhaDB["nomeCompleto"];
	     $dtNasc=$linhaDB["dtNasc"];
	     echo("<tr>");
	     echo("<td>$CPF</td>");
	     echo("<td>$nomeCompleto</td>");
	     echo("<td>$dtNasc</td>");
	     echo("</tr>");
		  }
	     echo("/<table>");
		  ?>
		<br>
		<button onclick="window.location.href='menu.php';">Menu do Sistema</button><br>
	</body>
	</html>