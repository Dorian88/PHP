<?php
	class Carro{
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


	class Camion{
		var $ruedas, $color, $motor;

		//Método constructor
		function Camion(){
			$this -> ruedas = 8;
			$this -> color = "Negro";
			$this -> motor = 2600;
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
	}

	
?>