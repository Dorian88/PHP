<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Paso de Parámetros por Referencia</title>
	</head>

	<body>
		<?php
			function incrementa($valor1){
				$valor1++;
				return  $valor1;
			}

			function cambia_mayus($param){
				$param = strtolower($param);
				$param = ucwords($param);

				return $param;
			}

			function incrementa1(&$valor2){
				$valor2++;
				return  $valor2;
			}

			function cambia_mayus1(&$param){
				$param = strtolower($param);
				$param = ucwords($param);

				return $param;
			}

			$numero = 5;
			$cadena = "hOlA mUnDo";

			echo "El paso del parámetro por valor" . "<br>";

			echo incrementa($numero) . "<br>";
			echo $numero . "<br>";

			echo cambia_mayus($cadena) . "<br>";
			echo $cadena . "<br>" . "<br>";

			echo "El paso del parámetro por referencia" . "<br>";

			echo incrementa1($numero) . "<br>";
			echo $numero . "<br>";

			echo cambia_mayus1($cadena) . "<br>";
			echo $cadena . "<br>";
		?>	
	</body>
</html>
