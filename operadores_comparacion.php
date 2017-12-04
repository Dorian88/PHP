<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin titulo</title>
	</head>

	<body>
		<?php
			$variable1 = 8;
			$variable2 = "8";
			$variable3 = "Diana";

			echo "Usando el comparador ==<br>";
			if($variable1 == $variable2){
				echo 'La "$variable1" y la "$variable2" son iguales.<br>';
			}else{
				echo 'La "$variable1" y la "$variable2" NO son iguales.<br>';
			}

			if($variable1 == $variable3){
				echo 'La "$variable1" y la "$variable3" son iguales.<br>';
			}else{
				echo 'La "$variable1" y la "$variable3" NO son iguales.<br>';
			}

			echo "<br>Usando el comparador ===<br>";
			if($variable1 === $variable2){
				echo 'La "$variable1" y la "$variable2" son iguales.<br>';
			}else{
				echo 'La "$variable1" y la "$variable2" NO son iguales.<br>';
			}

			if($variable1 === $variable3){
				echo 'La "$variable1" y la "$variable3" son iguales.<br>';
			}else{
				echo 'La "$variable1" y la "$variable3" NO son iguales.<br>';
			}

			echo "<br>Usando el comparador !=<br>";
			if($variable1 != $variable3){
				echo 'La "$variable1" y la "$variable3" son diferentes.<br>';
			}else{
				echo 'La "$variable1" y la "$variable3" NO son iguales.<br>';
			}

			if($variable1 != $variable2){
				echo 'La "$variable1" y la "$variable2" son diferentes.<br>';
			}else{
				echo 'La "$variable1" y la "$variable2" NO son diferentes.<br>';
			}

			echo "<br>Usando el comparador <><br>";
			if($variable1 <> $variable3){
				echo 'La "$variable1" y la "$variable3" son diferentes.<br>';
			}else{
				echo 'La "$variable1" y la "$variable3" NO son iguales.<br>';
			}

			if($variable1 <> $variable2){
				echo 'La "$variable1" y la "$variable2" son diferentes.<br>';
			}else{
				echo 'La "$variable1" y la "$variable2" NO son diferentes.<br>';
			}
		?>	
	</body>
</html>
