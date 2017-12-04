<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ciclos</title>
	</head>

	<body>
		<?php
			$var1 = 1;

			echo("----------Usando el ciclo while----------<br>");
			while ($var1 < 6){
				echo "Estamos dentro del ciclo while.<br>";
				$var1 ++;
			}

			echo "<br>Hemos salido del ciclo while.<br>";

			echo("----------Usando el ciclo do/while----------<br>");
			do{
				echo "Estamos dentro del ciclo while.<br>";
				$var1 ++;
			}while ($var1 < 6);

			echo "<br>Hemos salido del ciclo while.<br>";

			echo("----------Usando el ciclo for----------<br>");
			for($i = 0; $i <= 10; $i++){
				echo "<p>Estamos dentro del ciclo for.</p>";
			}

			echo "Tabla de multiplicación del 9<br>";
			for($i = 0; $i <= 10; $i++){
				echo "9 * $i = ". 9 * $i . "<br>";
			}

			echo "<br>Hemos salido del ciclo for.<br>";

			echo "Tabla de división del 9<br>";
			for($i = 10; $i >= -10; $i--){
				if($i == 0){
					echo "No se puede dividir por cero<br>";
					continue;
				}
				echo "9 / $i = ". 9 / $i . "<br>";
			}

			echo "<br>Hemos salido del ciclo for.<br>";
		?>	
	</body>
</html>
