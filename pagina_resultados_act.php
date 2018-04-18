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
				//echo "<table><tr><td>";
				echo "<form action='Actualizar.php' method='get'>";
				echo "<input type='text' name='c_art' value='" . $fila['CÓDIGOARTÍCULO'] ."'><br>";
				echo "<input type='text' name='n_art' value='" . $fila['NOMBREARTÍCULO'] ."'><br>";
				echo "<input type='text' name='seccion' value='" . $fila['SECCIÓN'] ."'><br>";
				echo "<input type='text' name='importado' value='" . $fila['IMPORTADO'] ."'><br>";
				echo "<input type='text' name='precio' value='" . $fila['PRECIO'] ."'><br>";
				echo "<input type='text' name='fecha' value='" . $fila['FECHA'] ."'><br>";
				echo "<input type='text' name='p_orig' value='" . $fila['PAÍSDEORIGEN'] ."'><br>";
				echo "<input type='submit' name='Enviar' value='Actualizar'>";
				echo "</form>";
			}

			mysqli_close($conexion);
		?>
	</body>
</html>
