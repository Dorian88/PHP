<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
	if (isset($_POST["enviando"])){
		
		$nombre = $_POST["nombre_usuario"];
		$contra = $_POST["contra_usuario"];
		$edad = $_POST["edad_usuario"];


		echo "----------Usando el else if----------<br>";
		if ($edad < 18){
			echo "Eres menor de edad";
		}else if ($edad < 40){
			echo "Eres joven";
		}else if ($edad < 65){
			echo "Eres maduro";
		}else{
			echo "Cuídate";
		}

		echo "<br><br>----------Usando el if/else----------<br>";

		if ($edad < 18){
			echo "Eres menor de edad. No puedes entrar";
		}else{
			echo "Eres mayor de edad. Puedes entrar";
		}

		echo "<br><br>----------Usando el operador ternario----------<br>";

		echo $nombre == "Dorian" && $contra == "diana" ? "Puedes entrar" : "No puedes entrar";

		echo "----------Usando switch----------<br>";
		switch (true) {
			case $nombre == 'Dorian' && $contra == '0000':
				Echo "Usuario autorizado. Hola Dorian";
				break;
			case $nombre == 'Diana' && $contra == '1234':
				Echo "Usuario autorizado. Hola Diana";
				break;
			case $nombre == 'Andres' && $contra == '5678':
				Echo "Usuario autorizado. Hola Andres";
				break;
			
			default:
				Echo "Usuario no autorizado";
				break;
		}
	}	
?>