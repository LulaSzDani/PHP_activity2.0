<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 9</title>
	<?php 
	session_start();
	if ($_POST["resp8"] == 2) {
		$_SESSION["cont"]++;
	}
	 ?>
</head>
<body>
	<h1>Pergunta numero 9</h1>
	<h2>Como o jogador ativa o creeper de forma manual</h2>
	<form name="Question9" method="post" action="Pergunta10.php">
		<p>1-Chegando perto</p>
		<p>2-Com um isqueiro</p>
		<p>3-Batendo nele</p>
		<p>4-Nehuma das alternativas</p>
		<input type="number" name="resp9">
		<input type="submit" name="enviar" value="Enviar">
		<?php echo $_SESSION["cont"] ?>
	</form>
</body>
</html>