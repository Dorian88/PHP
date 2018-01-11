<?php
	class Carro{
		protected $ruedas, $motor;
		var $color;

		//Método constructor
		function Carro(){
			$this -> ruedas = 4;
			$this -> color = "";
			$this -> motor = 1600;
		}

		function get_ruedas(){
			return $this->ruedas;
		}

		function get_motor(){
			return $this->motor;
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

		function set_color ($colorCarro, $nombreCarro){
			$this->color =$colorCarro;
			echo "El color del " . $nombreCarro . " es: " . $this->color . "<br>";
		}
	}


	class Camion extends Carro{
		var $ruedas, $color, $motor;

		//Método constructor
		function Camion(){
			$this -> ruedas = 8;
			$this -> color = "Negro";
			$this -> motor = 2600;
		}

		function establece_color ($colorCamion, $nombreCamion){
			$this->color =$colorCamion;
			echo "El color del " . $nombreCamion . " es: " . $this->color . "<br>";
		}

		function arrancar(){
			parent::arrancar();
			echo "Camión arrancado " . "<br>";
		}
	}
?>