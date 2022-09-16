<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>guardado</title>
</head>
</html>
<body>

 <?php
   $conexionDB = mysqli_connect ("localhost","root","","prototipo") #Nombre base de datos
   or  die("No se conecto a la DB");

   mysqli_query ($conexionDB, "update ficha set fecha ='$_REQUEST[fecha]', id_interno = $_REQUEST[id_interno], nombre ='$_REQUEST[nombre]', apellido ='$_REQUEST[apellido]', motivo ='$_REQUEST[motivo]', medico ='$_REQUEST[medico]', especialidad ='$_REQUEST[especialidad]', examenes ='$_REQUEST[examenes]', resultado_ex = '$_REQUEST[resultado_ex]', diagnostico ='$_REQUEST[diagnostico]', medicamentos ='$_REQUEST[medicamentos]', observaciones ='$_REQUEST[observaciones]'
   where  id_interno = $_REQUEST[id_interno]") 
   or die ("Problemas en el Update");

   echo "Registro Actualizado!!!!!!!";
 ?>
</body>