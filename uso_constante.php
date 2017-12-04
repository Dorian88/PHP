<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin titulo</title>
	</head>

	<body>
		<?php
			define("AUTOR", "Dorian");

			echo AUTOR;
			echo "<br>El nombre del autor es: " . AUTOR;

			echo "<br>";
			echo "<br>";

			echo "Trabajando con constantes predefinidas<br>";
			echo "La linea de esta instrucción es la: " . __LINE__ . "<br>";
			echo "El mensaje anterior se logró usando la constante __LINE__";
			echo "<br>";
			echo "<br>";
			echo "Estamos trabajando con el archivo: " . __FILE__ . "<br>";
			echo "El mensaje anterior se logró usando la constante __FILE__";
		?>	
	</body>
</html>
