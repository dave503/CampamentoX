
<?php
    include '../dbcon.php';
  include '../funciones/session.php';
    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO campamento (lugar, fecha_camp, fecha_registro) VALUES ('$lugar', '$fecha',NOW())";
    $result = mysqli_query($connection,$query) or die (mysqli_error($connection));

    if($result == 1){
           mysqli_query($connection,"INSERT INTO bitacora(concepto, fecha_registro, id_part) VALUES ('agregando un registro de la tabla Campamento, el registro ', NOW(), '$_SESSION[id]')") or die (mysqli_error($connection));
     echo   "<script '>
              alert('Registro Guardado existosamente!');
              window.location.href='  ../campamento-list.php'
          </script>";
        
       // header("Location: ../campamento-list.php");
    }
    
?>
