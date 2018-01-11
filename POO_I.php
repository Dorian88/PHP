<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Programación Orientados a Objetos</title>
	</head>

	<body>
		<?php
			echo "Programación Orientados a Objetos" . "<br>" . "<br>";

			echo "Reutilizando código" . "<br>" . "<br>";

			echo "Por medio de un archivo" . "<br>" . "<br>";

			include ("vehiculo.php");

			echo "<br>" . "Se puede usar las variables directamente" . "<br>" . "<br>";

			$renault = new Carro();
			$proton = new Camion();

			/*echo "El Renault tiene " .  $renault->ruedas . " ruedas." . "<br>";
			echo "El camión Protón tiene " .  $proton->ruedas . " ruedas." . "<br>";*/

			echo "<br>" . "Herencia" . "<br>" . "<br>";

			echo "Pertenece al camión:" . "<br>";
			$proton->frenar();
			echo "<br>" . "Pertenece al carro:" . "<br>";
			$renault->arrancar();
			echo "<br>" . "Pertenece al camión:" . "<br>";
			$proton->arrancar();

			echo "<br>" . "Modificadores de acceso" . "<br>" . "<br>";

			echo "El Renault tiene " .  $renault->get_ruedas() . " ruedas." . "<br>";
			echo "El camión Protón tiene " .  $proton->get_ruedas() . " ruedas." . "<br>";

			echo "<br>El Renault tiene un motor de " .  $renault->get_motor() . " cc.<br>";
			echo "El camión Protón tiene un motor de " .  $proton->get_motor() . " cc.<br>";

		?>	
	</body>
</html>