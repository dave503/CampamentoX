<?php 
    include('./dbcon.php');
    include '../funciones/session.php';
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $pass = $_POST['contra'];
    $passconf = $_POST['contra_conf'];
    $id = $_POST['id'];

    if($pass == $passconf){
        
        $archivo = $_FILES['image']['tmp_name'];

        $foto_ok = $_FILES["image"]['name'];

        $destino = "./../files/".$foto_ok;

        $ok = move_uploaded_file($archivo, $destino);
        
        if($ok){
           $foto = $foto_ok;
        }else{
            //Alerta
          $foto = null;
        }

        $query = "UPDATE participantes SET  foto='$foto', fecha_mod=NOW() WHERE id_part = '$id'";
            $result = mysqli_query($connection,$query) or die (mysqli_error($connection));

            if($result == 1){

                mysqli_query($connection,"INSERT INTO bitacora(concepto, fecha_registro, id_part) VALUES ('Actualizando  Foto de perfil de la tabla Usuario, el registro ', NOW(), '$_SESSION[id]')") or die (mysqli_error($connection));
                echo   "<script '>
                         alert('Datos Actualizados  existosamente!');
                         window.location.href='  ../perfil.php'
                     </script>";
                if($tipo == 0){
                    header('Location: ../perfil.php');
                }
            }
    }else{
        echo "Las contrasenias no son las mismas!";
    }

    
?>
