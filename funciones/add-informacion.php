<?php

include('./dbcon.php');
include '../funciones/session.php';

$pass = $_POST['contra'];
$confpass = $_POST['contra_conf'];

if($pass == $confpass){
    $query = "UPDATE participantes SET contra='$pass', fecha_mod=NOW() WHERE id_part = '$id'";
 $result = mysqli_query($connection,$query) or die (mysqli_error($connection));

 if($result == 1){

     mysqli_query($connection,"INSERT INTO bitacora(concepto, fecha_registro, id_part) VALUES ('Actualizando informacion del perfil de la tabla Usuario, el registro ', NOW(), '$_SESSION[id]')") or die (mysqli_error($connection));
     echo   "<script '>
              alert('Datos Actualizados  existosamente!');
              window.location.href='  ../informacion.php'
          </script>";
  
 }
}
 
else{
    echo   "<script '>
    alert('Las contraseñas no son iguales!');
    window.location.href='  ../informacion.php'
</script>";
}


?>
