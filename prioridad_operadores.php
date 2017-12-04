<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin titulo</title>
	</head>

	<body>
		<?php
			$var1 = true;
			$var2 = false;

			echo "----------Usando el operador &&----------<br>";
			echo "<br>En la operacion variable1 = variable2 && variable3, se ejecuta primero la operacion que esta en el lado derecho<br>";
			echo "y depues de asigna a la variable que esta en el lado izquierdo<br>";

			$resultado = $var1 && $var2;

			if ($resultado == true){
				echo "Es correcto";
			}else{
				echo "Es incorrecto";
			}

			echo "<br><br>----------Usando el operador and----------<br>";
			echo "<br>En la operacion variable1 = variable2 and variable3, se ejecuta primero la operacion de asignación<br>";
			echo "y depues la operación de comparación<br>";

			$resultado = $var1 and $var2;

			if ($resultado == true){
				echo "Es correcto";
			}else{
				echo "Es incorrecto";
			}
		?>	
	</body>
</html>
