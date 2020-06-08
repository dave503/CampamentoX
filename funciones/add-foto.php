<?php 
    include('./dbcon.php');
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $pass = $_POST['contra'];
    $passconf = $_POST['contra_conf'];
    $id = $_POST['id'];

    if($pass == $passconf){
        $archivo = $_FILES['image']['tmp_name'];
        $destino = "./../files/".basename($_FILES["image"]['name']);
        move_uploaded_file($archivo, $destino);
        
        $foto = basename($_FILES["image"]['name']);

        $query = "UPDATE participantes SET nombre = '$nombre', apellido='$apellido',contra='$pass', foto='$foto', fecha_mod=NOW() WHERE id_part = '$id'";
        $result = mysqli_query($connection,$query) or die (mysqli_error());

        if($result == 1){
            if($tipo == 0){
                header('Location: ../perfil.php');
            }
        }
    }else{
        echo "nel";
    }

    
?>
