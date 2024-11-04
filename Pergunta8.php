<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 8</title>
	<?php 
	session_start();

		if ($_POST["resp7"] == 2) {
			$_SESSION["cont"]++;
		}
	 ?>
</head>
<body>
	<h1>Pergunta numero 8</h1>
	<h2>Os creepers morrem ao amanhcer?</h2>
	<form name="Question8" method="post" action="Pergunta9.php">
		<p>1-Sim</p>
		<p>2-Não</p>
		<input type="number" name="resp8">
		<input type="submit" name="enviar" value="Enviar">
		<?php echo $_SESSION["cont"] ?>
	</form>
</body>
</html>