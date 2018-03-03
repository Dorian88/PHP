<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Eliminacion de Datos</title>
	</head>

	<body>
		<?php
			$cod = $_GET["c_art"];
			$sec = $_GET["seccion"];
			$nom = $_GET["n_art"];
			$pre = $_GET["precio"];
			$fec = $_GET["fecha"];
			$imp = $_GET["importado"];
			$por = $_GET["p_orig"];

			require("conexionDatos.php");

			$conexion = mysqli_connect($db_host, $db_usuario, $db_pass);

			if(mysqli_connect_errno()){
				echo "La conexión con la Base de Datos ha fallado";
				exit();
			}

			mysqli_select_db($conexion, $db_nombre) or die ("La Base de Datos no se encuentra");
			mysqli_set_charset($conexion, "utf8");

			$consulta="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO='$cod'";

			$resultados = mysqli_query($conexion, $consulta);

			if($resultados == false){
				echo "Error en la consulta";
			}else{
				/*echo "Registro eliminado<br><br>";
				echo mysqli_affected_rows($conexion);*/

				if(mysqli_affected_rows($conexion) == 0){
					echo "No hay registros que eliminar.<br>";
				}else{
					echo "Se ha eliminado " . mysqli_affected_rows($conexion) . " registros.";
				}
			}
			
			mysqli_close($conexion);
		?>
	</body>
</html>