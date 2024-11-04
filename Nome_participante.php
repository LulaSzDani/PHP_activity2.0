<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Informe seu nome</title>
	<?php 
	// iniciamos a sessão para armazenar a variavel nome digitada no campo de texto
	session_start();
	// contador de respostas 
	

	 ?>
</head>
<body>
	<h1>Olá seja bem vindo ao Quizprer</h1>
	<h2>Vamos descobrir se você é um creeper</h2>
	<form name="participante" method="post" action="Pergunta1.php">
		Informe seu nome:
		<input type="text" name="nome">
	<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>