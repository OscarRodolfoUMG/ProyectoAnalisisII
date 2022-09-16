<?php

   $conexionDB = mysqli_connect ("localhost","root","","prototipo") #Nombre base de datos
   or  die("No se conecto a la DB");

   $query = "select * from ficha Where id_interno = $_REQUEST[id_interno]";
?>

<!Doctype html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale-1.0">
      <title>searc_prototipe</title>
  </head>

  <body>

   

     <?php $resultado = mysqli_query ($conexionDB, $query) or die ("Problemas en el query");

        while ($row = mysqli_fetch_assoc($resultado)){ 
      
      ?>
       <div><?php echo $row['id_interno'];?>    </div>
       <div><?php echo $row['nombre'];?>        </div>
       <div><?php echo $row['apellido'];?>      </div>
       <div><?php echo $row['fecha'];?>         </div>
       <div><?php echo $row['motivo'];?>        </div>
       <div><?php echo $row['medico'];?>        </div>
       <div><?php echo $row['especialidad'];?>  </div>
       <div><?php echo $row['examenes'];?>      </div>
       <div><?php echo $row['resultado_ex'];?>  </div>
       <div><?php echo $row['diagnostico'];?>   </div>
       <div><?php echo $row['medicamentos'];?>  </div>
       <div><?php echo $row['observaciones'];?> </div>
       <br>
     <?php}mysqli_free_result($resultado);?>


  </body>
</html>