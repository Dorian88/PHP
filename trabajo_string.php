<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin titulo</title>
		<style>
			.resaltar{
				color: #F00;
				font-weight: bold;
			}
		</style>
	</head>

	<body>
		<?php
			echo "<p class = \"resaltar\">Esto es un ejemplo de frase</p>";

			echo '-----Otros usos de los string-----<br><br>';
			$nombre = "Diana";

			echo 'Usando echo \'Hola $nombre\'<br>';
			echo "Hola $nombre<br><br>";

			echo 'Usando echo \'Hola \' . $nombre<br>';
			echo "Hola $nombre<br><br>";

			echo '-----Comparando string-----<br><br>';
			echo 'Compara Casa con CASA<br>';
			echo '-----Función strcmp-----<br>';
			echo 'Devuelve cero (0) si son iguales o uno (1) si no lo es<br>';
			$variable1 = "Casa";
			$variable2 = "CASA";

			$resultado = strcmp($variable1, $variable2);
			echo "El resultado es: " . $resultado . " Es decir, no coinciden" . "<br><br>";

			echo '-----Función strcasecmp-----<br>';
			echo 'Devuelve cero (0) si son iguales o uno (1) si no lo es<br>';

			$resultado = strcasecmp($variable1, $variable2);
			echo "El resultado es: " . $resultado . " Es decir, coinciden" . "<br><br>"; 

		?>
	</body>
</html>
