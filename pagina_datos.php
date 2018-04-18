<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin titulo</title>
	</head>

	<body>
		<?php
			$usuario =$_GET["usu"];
			$contra =$_GET["con"];

			require("conexionDatos.php");

			$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

			if(mysqli_connect_errno()){
				echo "La conexión con la Base de Datos ha fallado";
				exit();
			}

			mysqli_select_db($conexion, $db_nombre) or die ("La Base de Datos no se encuentra");
			mysqli_set_charset($conexion, "utf8");

			//$query="SELECT * FROM productos WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";
			$consulta="SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' AND CONTRA = '$contra'";

			echo "$consulta<br><br>";

			$resultados = mysqli_query($conexion, $consulta);
			
			while($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
				echo "<table><tr><td>";
				echo $fila['usuario'] . "</td><td>";
				echo $fila['contra'] . "</td><td>";
				echo $fila['tfno'] . "</td><td>";
				echo $fila['direccion'] . "</td><td>";
				echo "<br>";
				echo "<br>";
			}

			mysqli_close($conexion);
		?>
	</body>
</html>