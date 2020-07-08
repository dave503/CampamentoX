<?php
include '../dbcon.php';
include '../funciones/session.php';

$id = $_GET['id'];
$query = "UPDATE aranceles SET estado = '0' WHERE id_aran = '$id'";

$result = mysqli_query($connection,$query) or die (mysqli_error($connection));

if($result == 1){
    mysqli_query($connection,"INSERT INTO bitacora(concepto, fecha_registro, id_part) VALUES ('Eliminacion de un registro de la tabla aranceles, el registro $id', NOW(), '$_SESSION[id]')") or die (mysqli_error($connection));
      
            
    echo "<script '>
            alert('Registro Eliminado con exito!');
            window.location.href=' ../aranceles-list.php'
         </script>";

    
    //header('Location: ../aranceles-list.php');   
    mysqli_close($connection);
}
?>