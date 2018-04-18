<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin titulo</title>
	</head>

	<body>
		<?php
			
			require("conexionDatos.php");

			$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

			$usuario = mysqli_real_escape_string($conexion, $_GET["usu"]);
			$contra = mysqli_real_escape_string($conexion, $_GET["con"]);

			if(mysqli_connect_errno()){
				echo "La conexión con la Base de Datos ha fallado";
				exit();
			}

			mysqli_select_db($conexion, $db_nombre) or die ("La Base de Datos no se encuentra");
			mysqli_set_charset($conexion, "utf8");

			//$query="SELECT * FROM productos WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";
			$consulta="DELETE FROM USUARIOS WHERE USUARIO = '$usuario' AND CONTRA = '$contra'";

			echo "$consulta<br><br>";

			/*if(mysqli_query($conexion, $consulta)){
				echo "Baja procesada";
			}*/

			mysqli_query($conexion, $consulta);

			if(mysqli_affected_rows($conexion)>0){
				echo "Baja procesada";
			}else{
				echo "No se ha encontrado el usuario.";
			}

			mysqli_close($conexion);
		?>
	</body>
</html>