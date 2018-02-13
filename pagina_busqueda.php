<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin titulo</title>
	</head>

	<body>
		<?php
			$busqueda =$_GET["buscar"];

			require("conexionDatos.php");

			$conexion = mysqli_connect($db_host, $db_usuario, $db_pass);

			if(mysqli_connect_errno()){
				echo "La conexión con la Base de Datos ha fallado";
				exit();
			}

			mysqli_select_db($conexion, $db_nombre) or die ("La Base de Datos no se encuentra");
			mysqli_set_charset($conexion, "utf8");

			$query="SELECT * FROM productos WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";

			$resultados = mysqli_query($conexion, $query);
			
			while($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
				echo "<table><tr><td>";
				echo $fila['CÓDIGOARTÍCULO'] . "</td><td>";
				echo $fila['NOMBREARTÍCULO'] . "</td><td>";
				echo $fila['SECCIÓN'] . "</td><td>";
				echo $fila['IMPORTADO'] . "</td><td>";
				echo $fila['PRECIO'] . "</td><td>";
				echo $fila['PAÍSDEORIGEN'] . "</td></tr></table>";
				echo "<br>";
			}

			mysqli_close($conexion);
		?>		
	</body>
</html>
