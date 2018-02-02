<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Conexión a Base de Datos</title>
	</head>

	<body>
		<?php
			$db_host = "localhost";
			$db_nombre = "pruebas";
			$db_usuario = "root";
			$db_pass = "";

			$conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);
			$query="SELECT * FROM datospersonales";

			$resultados = mysqli_query($conexion, $query);
			$fila = mysqli_fetch_row($resultados);

			echo $fila[0] . " ";
			echo $fila[1] . " ";
			echo $fila[2] . " ";
			echo $fila[3] . " ";
		?>	
	</body>
</html>