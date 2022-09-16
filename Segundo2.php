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
        $mysql_host = 'mysql8001.site4now.net'; 
        $mysql_user = 'a8caee_oscarum'; 
        $mysql_pass = 'Tornadoturbo@777'; 
        $mysql_db = 'db_a8caee_oscarum';
         
         
        $con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass) or die("Connection to MySQL-server failed!");

        mysqli_select_db($con, $mysql_db) or die("Selection of database $mysql_db failed!");

        $query = 'INSERT INTO `prototipo`(`id_interno`, `nombre`, `apellido`, `fecha`, `motivo`, `medico`, `especialidad`, `examenes`, `resultado_ex`, `diagnostico`, `medicamentos`, `observaciones`) VALUES ('$_REQUEST[id_interno]','$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[fecha]','$_REQUEST[motivo]','$_REQUEST[medico]','$_REQUEST[especialidad]','$_REQUEST[examenes]','$_REQUEST[resultado_ex]','$_REQUEST[diagnostico]','$_REQUEST[medicamentos]','$_REQUEST[observaciones]')'; 

        $result = mysqli_query($con, $query) or die("Invalid Query, " );
 ?>
</body>