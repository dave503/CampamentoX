<?php
include '../dbcon.php';
include '../funciones/session.php';
$id = $_GET['id'];
//echo $id;
$query = "UPDATE participantes SET estado = '0' WHERE id_part = '$id'";
$result = mysqli_query($connection,$query) or die (mysqli_error($connection));
//echo $result;
if($result == 1){


        mysqli_query($connection,"INSERT INTO bitacora(concepto, fecha_registro, id_part) VALUES ('Eliminacion de un registro de la tabla Participante, el registro $id', NOW(), '$_SESSION[id]')") or die (mysqli_error($connection));
    echo "<script '>
    alert('Registro Eliminado con exito!');
    window.location.href=' ../participantes-list.php'
 </script>";

    mysqli_close($connection);
}
else {
    echo   "<script '>
    alert('Fallo al guardar!');
   
</script>";
}
?>