<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TAREA: REALIZAR UN FORMULARIO DE UN EMPLEADO</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-primary">
		<div class="hero-body">
			<h1 class="title is-1">DATOS DEL EMPLEADO</h1>
		</div>
	</section>

	<section class="section is-medium columns">

		
		<form action="mostrar.php" method="post">


			<div class="container is-max-desktop">
				<div class="notification is-primary">
					<div class= "has-background-danger"><h2 class="subtitle is-2">Por favor ingrese los datos que se le solicitan</h2>
					</div></div> <br>
				</div>


				<div class="columns">
					<div class="column">
						<div>
							<label>Nombre(s):</label>
							<input class="input is-primary" type="text" name="nombre" required>
						</div>



						<div> 
							<label>Apellido Paterno: </label>
							<input class="input is-primary" type="text" name="paterno" required>
						</div>



						<div>
							<label>Apellido Materno: </label>
							<input class="input is-primary" type="text" name="materno" required>
						</div> 



						<div>
							<label>Cargo: </label>
							<input class="input is-primary" type="text" name="cargo" required>
						</div> 



						<div>
							<label>RFC: </label>
							<input class="input is-primary" type="text" name="rfc" required>
						</div> 


						<div>
							<label>CURP: </label>
							<input class="input is-primary" type="text" name="curp" required>
						</div> 



						<div>
							<label>Domicilio: </label>
							<input class="input is-primary" type="text" name="domicilio" required>
						</div> 




						<div>
							<label>Teléfono: </label>
							<input class="input is-primary" type="number" name="telefono" required>
						</div> 
					</div>
					<div class="column">
						<div>
							<label>Correo Electrónico: </label>
							<input class="input is-primary" type="email" name="correo" required>
						</div> 




						<div>
							<label>Sexo: </label>
							<input class="input is-primary" type="text" name="sexo" required>
						</div>




						<div>
							<label>Fecha de nacimiento:</label>
							<input class="input is-primary" type="date" name="fecha" required>
						</div>



						<div>
							<label>Estado Civil: </label>
							<input class="input is-primary" type="text" name="civil" required>
						</div>


						<div>
							<label>Escolaridad:</label>
							<input class="input is-primary" type="text" name="escolaridad" required>
						</div>





						<div>
							<label> Referencia familiar: </label>
							<input class="input is-primary" type="text" name="ref" required>
						</div>




						<div>
							<label> Observaciones: </label>
							<input class="input is-primary" type="text" name="observaciones" required>
						</div>

						<div class="column">
							<div>
								<input class="button is-primary" type="submit" value="Enviar">
							</div>
						</form>
					</div>
				</div>
				

				

			</section>

		</body>
		</html>