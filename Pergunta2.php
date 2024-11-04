<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 2</title>
	<?php 
	session_start();
																	// caso resp1 for igual a 3 que seria a respsota certa vamos acrescentar 1 ao nosso contador
	if ($_POST["resp1"] == 3) {
		$_SESSION["cont"]++;};
		echo $_SESSION["cont"];
	 ?>
</head>
<body>
	<h1>Pergunta numero 2</h1>
	<h2>O que acontece quando você a acertado por um raio?</h2>
	<form name="Question2" method="post" action="Pergunta3.php">
		
		<p>1-Você morre</p> 
		<p>2-Você fica eletrizado</p> 
		<p>3-Nada</p>
		<p>4-Perde a cabeça</p> 
		<input type="number" name="resp2">
		<input type="submit" name="enviar" value="Enviar">

	</form>
</body>
</html>