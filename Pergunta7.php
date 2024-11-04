<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 7</title>
	<?php 
	session_start();

	if ($_POST["resp6"] == 3) {
		$_SESSION["cont"]++;
	}
	 ?>
</head>
<body>
	<h1>Pergunta numero 7</h1>
	<h2>existem mob-spawner de creepers no survival?</h2>
	<form name="Question7" method="post" action="Pergunta8.php">
		<p>1-Sim</p>
		<p>2-Não</p>
		<input type="number" name="resp7">
		<input type="submit" name="enviar" value="Enviar">
		<?php echo $_SESSION["cont"] ?>
	</form>
</body>
</html>