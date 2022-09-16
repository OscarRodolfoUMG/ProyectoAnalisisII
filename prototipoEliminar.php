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

	
	
	<div class="container">
		<h2>Eliminar Ficha Interno</h2>

		<form action = "delete_prototipo.php" method ="post">

			<div class="subcontainer interno">
				<p>ID Interno </p><input type="text" name="id_interno">
			</div>

			<br>

			<div class="subcontainer botones">
				<input class="btn guardar" type="submit" name="" value="Eliminar">
			</div>

		</form>


		 <?php
		   
		 ?>

	</div>
	
</body>
</html>