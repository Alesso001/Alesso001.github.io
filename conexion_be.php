<?php
  

  $conexion = mysqli_connect("localhost","root", "", " nutricion");
  
  if ($conexion){

    echo 'conectado exitosamente a la base de datos';

  }else
  echo 'no se ha podido conectar a la base de datos '
  

?>