<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin titulo</title>
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

			$consulta="UPDATE PRODUCTOS SET CÓDOGOARTÍCULO='$cod', SECCIÓN='$sec', NOMBREARTÍCULO='$nom', PRECIO='$pre', FECHA='$fec', IMPORTADO='$imp', PAÍSDEORIGEN='$por' WHERE CÓDOGOARTÍCULO='$cod'";

			$resultados = mysqli_query($conexion, $consulta);

			if($resultados == false){
				echo "Error en la consulta";
			}else{
				echo "Registro guardado<br><br>";

				echo "<table><tr><td>$cod</td></tr>";
				echo "<tr><td>$sec</td></tr>";
				echo "<tr><td>$nom</td></tr>";
				echo "<tr><td>$pre</td></tr>";
				echo "<tr><td>$fec</td></tr>";
				echo "<tr><td>$imp</td></tr>";
				echo "<tr><td>$por</td></tr></table>";
			}
			
			mysqli_close($conexion);
		?>
	</body>
</html>