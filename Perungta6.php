<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 6</title>
	<?php 

	session_start();

	if ($_POST["resp5"] == 4) {
		$_SESSION["cont"]++;
	}

	 ?>
</head>
<body>
	<h1>Pergunta numero 6</h1> <br>
	<h2>O creeper tem medo de qual animal</h2>
	<form name="Question6" method="post" action="Pergunta7.php">
	<p>1-Galinha</p>
	<p>2-Cachorro</p>
	<p>3-Gato</p>
	<p>4-Nehum</p>
	<input type="number" name="resp6">
	<input type="submit" name="enviar" value="Enviar">
	<?php echo $_SESSION["cont"] ?>
	</form>
</body>
</html>