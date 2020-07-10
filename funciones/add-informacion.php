<?php

include('./dbcon.php');
include '../funciones/session.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$pass = $_POST['contra'];

 $query = "UPDATE participantes SET nombre = '$nombre', apellido='$apellido',contra='$pass', fecha_mod=NOW() WHERE id_part = '$id'";
 $result = mysqli_query($connection,$query) or die (mysqli_error($connection));

 if($result == 1){

     mysqli_query($connection,"INSERT INTO bitacora(concepto, fecha_registro, id_part) VALUES ('Actualizando informacion del perfil de la tabla Usuario, el registro ', NOW(), '$_SESSION[id]')") or die (mysqli_error($connection));
     echo   "<script '>
              alert('Datos Actualizados  existosamente!');
              window.location.href='  ../informacion.php'
          </script>";
  
 }
else{
echo "Las contrasenias no son las mismas!";
}


?>
