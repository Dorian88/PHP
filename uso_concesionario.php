<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin titulo</title>
	</head>

	<body>
		<?php
			include("concesionario.php");

			Compra_vehiculo::descuento_gov();

			$compra_Dorian = new Compra_vehiculo("compacto");
			$compra_Dorian -> tapiceria_cuero("negro");
			echo $compra_Dorian -> precio_final() . "<br>";

			$compra_Diana = new Compra_vehiculo("compacto");
			$compra_Diana -> tapiceria_cuero("beige");
			echo $compra_Diana -> precio_final();
		?>	
	</body>
</html>