<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 10</title>
	<?php 
	session_start();
	if ($_POST["resp9"] == 2) {
		$_SESSION["cont"]++;
	}
	 ?>
</head>
<body>
	<h1>Pergunta numero 10</h1>
	<h2>voce gostou do Quiz</h2>
	<form name="Question10" method="post" action="Resultado.php">
		<p>1-Sim</p>
		<p>2-Não</p>
		<input type="number" name="resp10">
		<input type="submit" name="enviar" value="Enviar">
		<?php echo $_SESSION["cont"] ?>
	</form>
</body>
</html>