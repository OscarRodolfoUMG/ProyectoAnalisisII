<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prototipo</title>
</head>
<body>
	<div class="head"> 
		<h1>Prototipo</h1>
	</div>

	<ul>
	        <li><a href="prototipo.php">Ingresar Ficha</a></li>
	        <li><a href="prototipoBuscar.php">Buscar Ficha</a></li>
	        <li><a href="prototipoActualizar.php">Actualizar Ficha</a></li>
	        <li><a href="prototipoEliminar.php">Eliminar Ficha</a></li>
    	</ul>

	<div class="subcontainer">
		<div class="pre">
			<input class="bar" type="summbit" name="">
			<input class="btn-search" type="submit" name="">
		</div>
	</div>
	
	<div class="container">
		<h2>Ficha Interno</h2>

		

		<form action = "add_prototipo.php" method ="post">

			<div class="subcontainer fecha">
				<div class="pre">
				<p>Fecha   </p><input type="date" name="fecha">
				</div>
			</div>

			<div class="subcontainer interno">
				<p>ID Interno </p><input type="text" name="id_interno">
			</div>

			<div class="subcontainer nombres">
				<p>Nombre </p><input type="text" name="nombre">
				<p>Apellido</p><input type="text" name="apellido">
			</div>

			<div class="subcontainer motivo">
				<div class="pre">
				<p>Motivo de Visita</p><textarea name="motivo"></textarea>
				</div>
			</div>

			<div class="subcontainer medico">
				<p>Medico </p><input type="text" name="medico">
				<p>Especialidad</p><input type="text" name="especialidad">
			</div>

			<div class="subcontainer examens">
				<p>Examenes realizados </p><textarea name="examenes" ></textarea>
			</div>

			<div class="subcontainer resultados">
				<p>Resultados de Examenes </p><textarea name="resultado_ex"></textarea>
			</div>

			<div class="subcontainer diagnostico">
				<p>Diagnostico </p><textarea name="diagnostico"></textarea>
			</div>

			<div class="subcontainer medicamento">
				<p>Medicamento </p><textarea name="medicamentos"></textarea>
			</div>

			<div class="subcontainer observaciones">
				<p>Observaciones </p><textarea name="observaciones"></textarea>
			</div>

			<div class="subcontainer botones">
				<input class="btn delete" type="reset" name="" value="Eliminar">
				<input class="btn actualizar" type="submit" name="" value="Actualizar">
				<input class="btn guardar" type="submit" name="" value="Guardar">
			</div>

		</form>


		 <?php
		   
		 ?>

	</div>
	
</body>
</html>