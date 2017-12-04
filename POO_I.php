<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Programación Orientados a Objetos</title>
	</head>

	<body>
		<?php
			echo "Programación Orientados a Objetos" . "<br>" . "<br>";

			/*class Carro{
				var $ruedas, $color, $motor;

				//Método constructor
				function Carro(){
					$this -> ruedas = 4;
					$this -> color = "";
					$this -> motor = 1600;
				}

				function arrancar(){
					echo "Estoy arrancando" . "<br>";
				}

				function girar(){
					echo "Estoy girando" . "<br>";	
				}

				function frenar(){
					echo "Estoy frenando" . "<br>";
				}

				function establece_color ($colorCarro, $nombreCarro){
					$this->color =$colorCarro;
					echo "El color del " . $nombreCarro . " es: " . $this->color . "<br>";
				}
			}

			$renault = new Carro();
			$mazda = new Carro();
			$ferrari = new Carro();

			$mazda -> girar();
			echo $mazda -> ruedas . "<br>";
			$ferrari -> establece_color("Amarillo", "ferrari");*/

			echo "Reutilizando código" . "<br>" . "<br>";

			include ("vehiculo.php");

			$renault = new Carro();
			$proton = new Camion();

			echo "El Renault tiene " .  $renault->ruedas . " ruedas." . "<br>";
			echo "El camión Protón tiene " .  $proton->ruedas . " ruedas." . "<br>";
		?>	
	</body>
</html>