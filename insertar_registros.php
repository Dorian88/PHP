<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insertar Registros BD</title>
	</head>

	<body>
		<?php
			require("conexionDatos.php");

			$conexion = mysqli_connect($db_host, $db_usuario, $db_pass);

			if(mysqli_connect_errno()){
				echo "La conexión con la Base de Datos ha fallado";
				exit();
			}

			mysqli_select_db($conexion, $db_nombre) or die ("La Base de Datos no se encuentra");
			mysqli_set_charset($conexion, "utf8");

			$query="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO) VALUES ('AR44', 'DEPORTES', 'RAQUETA BADMINTON')";

			$resultados = mysqli_query($conexion, $query);
			
			mysqli_close($conexion);
		?>	
	</body>
</html>