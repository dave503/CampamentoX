<?php
    include '../dbcon.php';
    include './session.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $dui = $_POST['dui'];
    $encargado = $_POST['encargado'];
    $pago = $_POST['pago'];
    $direccion = $_POST['direccion'];
    $departamento = $_POST['departamento'];
    $tipo = $_POST['tipo'];

    $query = "UPDATE participantes SET nombre = '$nombre', apellido='$apellido', sexo='$sexo', telefono='$telefono', email='$email', edad='$edad', 
    dui='$dui', encargado='$encargado', pago='$pago', direccion='$direccion', departamento='$departamento', tipo='$tipo', fecha_mod=NOW() WHERE id_part = '$id'";
    $result = mysqli_query($connection,$query) or die (mysqli_error());

    if($result == 1){
        
        mysqli_query($connection,"INSERT INTO bitacora(concepto, fecha_registro, id_part) VALUES ('Modificacion de la tabla participante, el registro $id', NOW(), '$_SESSION[id]')") or die (mysqli_error($connection));

        if($tipo == 1){
            echo   "<script '>
                            alert('Actulizacion de  Administrador existosamente!');
                            window.location.href='../admin.php'
                </script>";
            //header('Location: ../admin.php');
        }elseif ($tipo == 2) {
            echo   "<script '>
            alert('Actulizacion de  Lider existosamente!');
            window.location.href='../lideres.php'
        </script>";
           // header('Location: ../lideres.php');
        }elseif ($tipo==3) {
            echo   "<script '>
            alert('Actulizacion de  PArticipante existosamente!');
            window.location.href='../participantes-list.php'
        </script>";
            //header('Location: ../participantes-list.php');
        }else{
            header('Location: ../home.php');
        }
    }else{
         echo   "<script '>
            alert('Fallo al guardar!');
           
        </script>";
    }


?>