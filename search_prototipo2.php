<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prototipo</title>

	<style type="text/css">
		div{
			height: 100px;
			width: 100px;
			background: blue;
			color: white;
		}
	</style>

</head>
<body>
	


	<?php 
	$conexionDB = mysqli_connect ("localhost","root","","prototipo") #Nombre base de datos
   	or  die("No se conecto a la DB");

   	$query = "select * from ficha Where id_interno = $_REQUEST[id_interno]";

	$resultado = mysqli_query ($conexionDB, $query) or die ("Problemas en el query");

       while ($row = mysqli_fetch_assoc($resultado)){ 
	       echo $row['id_interno'];
	       echo $row['nombre'];
	       echo $row['apellido'];
	       echo $row['fecha'];
	       echo $row['motivo'];
	       echo $row['medico'];
	       echo $row['especialidad'];
	       echo $row['examenes'];
	       echo $row['resultado_ex'];
	       echo $row['diagnostico'];  
	       echo $row['medicamentos']; 
	       $varObservaciones = $row['observaciones'];
     	}mysqli_free_result($resultado);

     		echo "<div>".$varObservaciones."</div>";
     		echo '<input type="summit" placeholder="'.$varObservaciones.'" name="observaciones">'
     		# <input type="summit" placeholder="$varObservaciones" name="observaciones">
     	?>


	
	
</body>
</html>