<?php
    include '../dbcon.php';
    include './session.php';
    $id = $_POST['id'];
    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];
    

    $query = "UPDATE campamento SET lugar = '$lugar', fecha_camp='$fecha', fecha_mod=NOW() WHERE id_camp = '$id'";
    $result = mysqli_query($connection,$query) or die (mysqli_error($connection));

    if($result == 1){
      mysqli_query($connection,"INSERT INTO bitacora(concepto, fecha_registro, id_part) VALUES ('Modificacion de la tabla campamento, el registro $id', NOW(), '$_SESSION[id]')") or die (mysqli_error($connection));

      echo "<script '>
          alert('Actualizacion de Campamento existosamente!');
          window.location.href=' ../campamento-list.php'
        </script>";
      //  header("Location: ../campamento-list.php");
        
    }
?>