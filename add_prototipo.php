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

   mysqli_query ($conexionDB, "insert into ficha(fecha, id_interno, nombre, apellido, motivo, medico, especialidad, examenes, resultado_ex, diagnostico, medicamentos, observaciones) 
   values ('$_REQUEST[fecha]',$_REQUEST[id_interno],'$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[motivo]',
           '$_REQUEST[medico]','$_REQUEST[especialidad]','$_REQUEST[examenes]','$_REQUEST[resultado_ex]',
           '$_REQUEST[diagnostico]','$_REQUEST[medicamentos]','$_REQUEST[observaciones]')")
   or die ("Problemas en el insert");

   echo "Registro insertado!!!!!!!";
 ?>
</body>