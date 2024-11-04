<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 1</title>
	<?php 


	session_start();
	//gravamos o nome 
	$_SESSION["nome"] = $_POST["nome"];
	$_SESSION["cont"] = 0;
	 ?>
</head>
<body>
	<h1>Pergunta numero 1</h1>
	<h2>Qual a sua função?</h2>
	<form name="Question1" method="post" action="Pergunta2.php">

		<p>1-Dar comida ao jogador</p>
		<p>2-Se aliar ao jogador</p>
		<p>3-Atrapalhar o jogador</p>
		<p>4-Nehuma alternatica</p>
		<?php //definimos o input com o nomde de "resp1" ?>
		<input type="number" name="resp1">
		<input type="submit" name="enviar" value="Enviar">
		<?php echo $_SESSION["cont"] ?>
	</form>
</body>
</html>