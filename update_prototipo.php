<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prototipo</title>



</head>
<body>

	<?php 
	$conexionDB = mysqli_connect ("localhost","root","","prototipo") #Nombre base de datos
   	or  die("No se conecto a la DB");

   	$query = "select * from ficha Where id_interno = $_REQUEST[id_interno]";

	$resultado = mysqli_query ($conexionDB, $query) or die ("Problemas en el query");

       while ($row = mysqli_fetch_assoc($resultado)){ 
	       $varIdInterno = $row['id_interno'];
	       $varNombre = $row['nombre'];
	       $varApellido = $row['apellido'];
	       $varFecha = $row['fecha'];
	       $varMotivo = $row['motivo'];
	       $varMedico = $row['medico'];
	       $varEspecialidad = $row['especialidad'];
	       $varExamenes = $row['examenes'];
	       $varResultado = $row['resultado_ex'];
	       $varDiagnostico = $row['diagnostico'];  
	       $varMedicamentos = $row['medicamentos']; 
	       $varObservaciones = $row['observaciones'];
     	}mysqli_free_result($resultado);

     		#echo "<div>".$varObservaciones."</div>";
     		#echo '<input type="summit" placeholder="'.$varObservaciones.'" name="observaciones">'
     		# <input type="summit" placeholder="$varObservaciones" name="observaciones">

     	echo '<form action = "upp_prototipo.php" method ="post">

			<div class="subcontainer fecha">
				<div class="pre">
				<p>Fecha   </p><input type="date" name="fecha" value="'.$varFecha.'">
				</div>
			</div>

			<div class="subcontainer interno">
				<p>ID Interno </p><input type="text" name="id_interno" value="'.$varIdInterno.'">
			</div>

			<div class="subcontainer nombres">
				<p>Nombre </p><input type="text" name="nombre" value="'.$varNombre.'">
				<p>Apellido</p><input type="text" name="apellido" value="'.$varApellido.'">
			</div>

			<div class="subcontainer motivo">
				<div class="pre">
				<p>Motivo de Visita</p><textarea name="motivo">'.$varMotivo.'</textarea>
				</div>
			</div>

			<div class="subcontainer medico">
				<p>Medico </p><input type="text" name="medico" value="'.$varMedico.'">
				<p>Especialidad</p><input type="text" name="especialidad" value="'.$varEspecialidad.'">
			</div>

			<div class="subcontainer examens">
				<p>Examenes realizados </p><textarea name="examenes" >'.$varExamenes.'"</textarea>
			</div>

			<div class="subcontainer resultados">
				<p>Resultados de Examenes </p><textarea name="resultado_ex">'.$varResultado.'</textarea>
			</div>

			<div class="subcontainer diagnostico">
				<p>Diagnostico </p><textarea name="diagnostico">'.$varDiagnostico.'</textarea>
			</div>

			<div class="subcontainer medicamento">
				<p>Medicamento </p><textarea name="medicamentos">'.$varMedicamentos.'</textarea>
			</div>

			<div class="subcontainer observaciones">
				<p>Observaciones </p><textarea name="observaciones">'.$varObservaciones.'</textarea>
			</div>

			<div class="subcontainer botones">
				
				<input class="btn actualizar" type="submit" name="" value="Actualizar">
				
			</div>

		</form>'





     	?>


	
	
</body>
</html>