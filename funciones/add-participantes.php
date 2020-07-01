
<?php
    include '../dbcon.php';

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
    $foto = "";

    $par1 = strtolower(substr($nombre,0, -1));
    $par2 = random_int(100, 1000);
    $usuario = $par1.$par2;

    $query = "INSERT INTO participantes (nombre, apellido, sexo, direccion, email, telefono, edad, dui, encargado, pago, departamento, usuario, contra, tipo, fecha_registro) 
    VALUES ('$nombre', '$apellido', '$sexo', '$direccion', '$email', '$telefono', '$edad', '$dui', '$encargado', '$pago', '$departamento', '$usuario', 12345, '$tipo', NOW());";


    $result = mysqli_query($connection,$query) or die (mysqli_error($connection));

    if($result == 1){
        
        if($tipo == 1){
            header('Location: ../admin.php');
        }elseif ($tipo == 2) {
            header('Location: ../lideres.php');
        }elseif ($tipo==3) {
            header('Location: ../participantes-list.php');
        }else{
            header('Location: ../home.php');
        }
    }else{
        echo "Fallo al guardar";
    }


?>
