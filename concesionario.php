<?php
	class Compra_vehiculo{
		private $precio_base;
		static $ayuda = 4500;

		function Compra_vehiculo($gama){

			if ($gama == "urbano"){
				$this->precio_base=10000;
			}else if ($gama == "compacto"){
				$this->precio_base=20000;
			}else if ($gama == "berlina"){
				$this->precio_base=30000;
			}
		}//Fin constructor

		function climatizador(){
			$this -> precio_base += 2000;
		}

		function navegador_gps(){
			$this -> precio_base += 2500;
		}

		function tapiceria_cuero($color){
			if ($color == "blanco"){
				$this -> precio_base += 3000;
			}else if ($color == "beige"){
				$this -> precio_base += 3500;
			}else{
				$this -> precio_base += 5000;
			}
		}

		function precio_final(){
			$valor_final = $this -> precio_base - self::$ayuda;
			return $valor_final;
		}
	}
?>