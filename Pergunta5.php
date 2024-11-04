<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 5</title>
	<?php 

	session_start();
	if ($_POST["resp4"] == 3) {
		$_SESSION["cont"]++;
	}
	 ?>
</head>
<body>
	<h1>Perunta numero 5</h1>
	<h2>Qual a cor do creeper</h2>
	<form name="Question5" method="post" action="Perungta6.php">
		<p>1-Marrom</p> <br>
		<p>2-Preto</p> <br>
		<p>3-Rosa</p> <br>
		<p>4-Verde</p>
		<input type="number" name="resp5">
		<input type="submit" name="enviar" value="Enviar">
		<?php echo $_SESSION["cont"] ?>
	</form>
</body>
</html>