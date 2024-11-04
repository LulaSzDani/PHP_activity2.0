<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado</title>
	<?php 
	session_start();
	if ($_POST["resp10"] == "1") {
		$_SESSION["cont"]++;
	}
	 ?>
</head>
<body>
	<h1>Aqui vamos descobrir qual crepper voce é</h1>
	<h2>10 acertos = Crepper raiz</h2>
	<h2>7-9 acertos = cabo Creeper</h2>
	<h2>4-6 acertos = Crepper</h2>
	<h2>1-3 acertos = Crepper nutella</h2>
	<h2>0 acertos = falso crepper</h2>
	<?php 
	if ($_SESSION["cont"] == 10) {
		echo "Parabens " . $_SESSION["nome"] . " você é um crepper raiz com " . $_SESSION["cont"] . " acertos";
	}elseif ($_SESSION["cont"] >= 7) {
		echo "Parabens " . $_SESSION["nome"] . " você é um cabo Crepper com " . $_SESSION["cont"] . " acertos";
	}elseif ($_SESSION["cont"] >= 4) {
		echo "Parabens " . $_SESSION["nome"] . " você é um Crepper com " . $_SESSION["cont"] . " acertos";
	}elseif ($_SESSION["cont"] >= 1) {
		echo "Parabens " . $_SESSION["nome"] . " você é um crepper nutella com " . $_SESSION["cont"] . " acertos";
	}elseif ($_SESSION["cont"] == 0) {
		echo "Parabens " . $_SESSION["nome"] . " você é um falso crepper com " . $_SESSION["cont"] . " acertos";
	}	
	 ?>
</body>
</html>