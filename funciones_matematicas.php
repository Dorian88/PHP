<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin titulo</title>
	</head>

	<body>
		<?php
			echo "----------Usando la función rand----------<br>";

			$num1 = rand();
			$num2 = rand(10, 50);

			echo "El número es: " . $num1;
			echo "<br>En el rango de 10 y 50 es: " . $num2;

			echo "<br><br>----------Usando la función pow para la potencia----------<br>";

			$num1 = pow(5, 3);

			echo "El número es: " . $num1;

			echo "<br><br>----------Usando la función round para redondear un numero decimal----------<br>";

			$num1 = round(5.3469432, 2);

			echo "El número es: " . $num1;
		?>	
	</body>
</html>
