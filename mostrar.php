<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TAREA</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-primary">
		<div class="hero-body">
			<p class="title">
				EMPLEADO REGISTRADO
			</p>
		</div>
	</section>

	<section class="section is-medium columns">

		<div class="column"></div>

		<div class="column is-two-fifths">
			

			<?php
				
				$nombre = $_POST['nombre'];
				$paterno = $_POST['paterno'];
				$materno = $_POST['materno'];
				$cargo = $_POST['cargo'];
				$rfc = $_POST['rfc'];
				$curp = $_POST['curp'];
				$domicilio = $_POST['domicilio'];
				$telefono = $_POST['telefono'];
				$correo = $_POST['correo'];
				$sexo = $_POST['sexo'];
				$fecha = $_POST['fecha'];
				$civil = $_POST['civil'];
				$escolaridad = $_POST['escolaridad'];
				$referencia = $_POST['ref'];
				$observaciones = $_POST['observaciones'];
				
				
				

				echo "<h1 class='is-subtitle'>";
					echo "Usted es: " . $nombre . " " . $paterno . " " . $materno ;
					echo "<br>Tiene el cargo de: " . $cargo ;
					echo "<br>Su RFC: " . $rfc;
					echo "<br>Su CURP: " . $curp;
					echo "<br>Domicilio: " . $domicilio;
					echo "<br>Teléfono de contacto: " . $telefono;
					echo "<br>Correo electrónico de contacto: " . $correo;
					echo "<br>Sexo: " . $sexo;
					echo "<br>Su fecha de nacimiento: " . $fecha;
					echo "<br>Estado civil: " . $civil;
					echo "<br>Escolaridad: " . $escolaridad;
					echo "<br>Alguna referencia familiar: " . $referencia;
					echo "<br>Observaciones extras: " . $observaciones;
				echo "</h1>";
			?>


		</div>

		<div class="column"></div>

	</section>

</body>
</html>