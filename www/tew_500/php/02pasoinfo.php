<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Envios de datos por el metodo GET de php</h1>
	
	<?php

		$nombre = "Juan";
		$apellido = "Perez";
	
	?>

	<a href="02recibiendo.php?nom=<?=$nombre?>&$ape=<?=$apellido?> ">Enviar Datos</a>

	<h1>envio de datos mediante post de php</h1>
	<form action="02recibiendo.php" method="post">
		<label>nombre;
			<input type="Text" name="nombre">
			
		</label>
		<br>
		<label>apellido
			<input type="text" name="apellido">
		</label>
<input type="submit">
</input>
</body>
</html>