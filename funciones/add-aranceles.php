
<?php
    include '../dbcon.php';
    include '../funciones/session.php';

    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $descuento = $_POST['descuento'];
    $campamento= $_POST['campamento'];

    $query = "INSERT INTO aranceles (tipo,valor, descuento,camp, fecha_registro) VALUES ('$tipo', '$valor', '$descuento', '$campamento', NOW())";
    
    $result = mysqli_query($connection,$query) or die (mysqli_error($connection));
    
    if($result == 1){

          mysqli_query($connection,"INSERT INTO bitacora(concepto, fecha_registro, id_part) VALUES ('agregando un registro de la tabla aranceles, el registro $id', NOW(), '$_SESSION[id]')") or die (mysqli_error($connection));
      echo "<script '>
              alert('Registro Guardado existosamente!');
              window.location.href=' ../aranceles-list.php'
          </script>";
       
        //header("Location: ../aranceles-list.php");
      //s window.location.href='../aranceles-list.php'

    }
    
   
?>