<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta 3</title>
	<?php 
	session_start();
	if ($_POST["resp2"] == 2) {
		$_SESSION["cont"]++;
	};

	 ?>
</head>
<body>
	<h1>Pergunta numero 3</h1>
	<h2>Quando foi criado o creeper? </h2>
	<form name="Question2" method="post" action="Pergunta4.php">
		<p>1-2009</p> 
		<p>2-2010</p> 
		<p>3-2014</p> 
		<p>4-2006</p> 
		<input type="number" name="resp3">
		<input type="submit" name="enviar" value="Enviar">
		<?php echo $_SESSION["cont"] ?>
	</form>
</body>
</html>