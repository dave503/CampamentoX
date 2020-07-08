<?php
    include '../dbcon.php';
    include './session.php';
    $id = $_POST['id'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $descuento = $_POST['descuento'];
    $campamento = $_POST['campamento'];

    $query = "UPDATE aranceles SET tipo = '$tipo', valor='$valor', descuento='$descuento', camp='$campamento', fecha_mod=NOW() WHERE id_aran = '$id'";

    $result = mysqli_query($connection,$query) or die (mysqli_error($connection));

    if($result == 1){
        mysqli_query($connection,"INSERT INTO bitacora(concepto, fecha_registro, id_part) VALUES ('Modificacion de la tabla aranceles, el registro $id', NOW(), '$_SESSION[id]')") or die (mysqli_error($connection));
      
        
        echo "<script '>
              alert('Actulizado con exito!');
              window.location.href=' ../aranceles-list.php'
          </script>";
        
    }
?>