<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Uso de Funciones</title>
	</head>

	<body>
		<?php
			$palabra1 = "DORIAN";
			$palabra2 = "diana";
			echo "----------Usando Funciones Predefinidas----------<br>";

			echo (strtolower($palabra1). ": Usando la función strtolower convierte la palabra a minusculas.<br>"); //Convierte la palabra a minusculas
			echo (strtoupper($palabra2). ": Usando la función strtoupper convierte la palabra a mayusculas.<br>"); //Convierte la palabra a mayusculas

			echo "<br>----------Usando Funciones Propias----------<br>";

			function suma ($num1, $num2){
				$resultado = $num1 + $num2;
				return $resultado;
			}

			echo "Creamos una función para sumar, en este caso sumamos 5 y 8 y el resultado es: " . suma(5, 8) . "<br>";

			echo "<br>----------Repasando lo visto hasta ahora----------<br>";

			function frase_mayus($frase, $conversion = true){
				$frase = strtolower($frase);
				
				if ($conversion == true){
					$res = ucwords($frase);
				}else{
					$res = strtoupper($frase);
				}

				return $res;
			}

			echo (frase_mayus("tu eres un idiota", false));
		?>	
	</body>
</html>