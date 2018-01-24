<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Arrays</title>
	</head>

	<body>
		<?php
			echo "---------Arrays indexados---------<br>";
			$semana[]="Lunes";
			$semana[]="Martes";
			$semana[]="Miércoles";

			echo $semana[1];
			echo "<br>";

			$semana1=array("Lunes", "Martes", "Miércoles", "Jueves");

			echo $semana1[3];

			echo "<br>---------Arrays por asociacion---------<br>";
			$datos = array("Nombre"=>"Dorian","Apellido"=>"Jaramillo","Edad"=>34);

			echo $datos["Apellido"];

			echo "<br>---------Verificar si es un Array o no (is_array)---------<br>";
			$datos1 = array("Nombre"=>"Dorian","Apellido"=>"Jaramillo","Edad"=>34);
			//$datos1 = "Alexander";

			if(is_array($datos1)){
				echo "Es un array";
			}else{
				echo "No es un array";
			}

			echo "<br>---------Recorrer un array---------<br>";
			echo "---------Para recorrer un array asociativos (foreach)---------<br>";

			$datos2 = array("Nombre"=>"Dorian","Apellido"=>"Jaramillo","Edad"=>34);

			foreach($datos2 as $clave=>$valor){
				echo "A $clave le corresponde $valor <br> ";
			}

			echo "<br>---------Agregamos un elemento a un array y lo recorremos---------<br>";

			$datos2["Pais"] = "Colombia";

			foreach($datos2 as $clave=>$valor){
				echo "A $clave le corresponde $valor <br> ";
			}

			echo "<br>---------Para recorrer un array indexado (for)---------<br>";

			$semana2[]="Lunes";
			$semana2[]="Martes";
			$semana2[]="Miércoles";
			$semana2[]="Jueves";

			for($i = 0; $i < count($semana2); $i++){
				echo $semana2[$i] . "<br>";
			}

			echo "<br>---------Agregamos un elemento a un array y lo recorremos---------<br>";

			$semana2[]="Viernes";

			for($i = 0; $i < count($semana2); $i++){
				echo $semana2[$i] . "<br>";
			}

			echo "<br>---------Ordenar un arreglo (sort)---------<br>";

			$semana3=array("Lunes", "Martes", "Miércoles", "Jueves");

			sort($semana3);

			for($i = 0; $i < count($semana3); $i++){
				echo $semana3[$i] . "<br>";
			}

			echo "<br>---------Array multidimencionales---------<br>";

			$alimentos=array("fruta"=>array("tropical"=>"kiwi",
											"citrico"=>"mandarina",
											"otros"=>"manzana"),
							 "leche"=>array("animal"=>"vaca",
											"vegetal"=>"coco"),
							 "carne"=>array("vacuno"=>"lomo",
											"porcino"=>"pata"));
			//echo $alimentos["carne"]["vacuno"];

			foreach($alimentos as $clave_alim => $alim){
				echo "$clave_alim:<br>";
				while(list($clave,$valor)=each($alim)){
					echo "$clave=$valor<br>";
				}
				echo "<br>";
			}

			echo "<br>---------Usando la función var_dump---------<br>";

			echo var_dump($alimentos);
		?>	
	</body>
</html>
