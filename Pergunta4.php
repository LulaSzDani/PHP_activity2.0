<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 4</title>
	<?php 

	session_start();

	if ($_POST["resp3"] == 1) {
		$_SESSION["cont"] ++;
	}

	 ?>
</head>
<body>
	<h1>Pergunta numero 4</h1>
	<h2>De onde veio os creepers?</h2>
	<form name="Question4" method="post" action="Pergunta5.php">
		<p>1-Foi criado como primeiro MOB hóstil</p> <br>
		<p>2-Foi criado para ser um BOSS</p><br>
		<p>3-Foi criado a partir de um erro</p><br>
		<p>4-Nehuma das alternativas</p><br>
		<input type="number" name="resp4">
		<input type="submit" name="enviar" value="Enviar">
		<?php echo $_SESSION["cont"] ?>
	</form>
</body>
</html>