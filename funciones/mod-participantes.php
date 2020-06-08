<?php
    include '../dbcon.php';
    
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
        if($tipo == 0){
            header('Location: ../participantes-list.php');
        }elseif ($tipo == 1) {
            header('Location: ../admin.php');
        }elseif ($tipo==2) {
            header('Location: ../lideres.php');
        }else{
            header('Location: ../home.php');
        }
           
        
    }
?>