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

   mysqli_query ($conexionDB, "Delete From ficha Where id_interno = $_REQUEST[id_interno]") 
   or die ("Problemas en el insert");

   echo "Registro Eliminado!!!!!!!";
 ?>
</body>