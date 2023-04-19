<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>
	<?php
		//obtenemos los datos del formulario
		$nombre = $_GET["nombre"];
		$edad = $_GET["edad"];

		//verificamos si es mayor o menor de edad
		if($edad>=18){
			echo "<p>El usuario $nombre es mayor de edad.</p>";
		}else{
			echo "<p>El usuario $nombre es menor de edad.</p>";
		}
	?>
</body>
</html>