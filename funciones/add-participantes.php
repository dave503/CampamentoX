
<?php
    include '../dbcon.php';
  include '../funciones/session.php';
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

    if($sexo == "Masculino"){
        $foto="./assets/img/M.png";
    }elseif($sexo == "Femenino"){
        $foto = "./assets/img/F.png";
    }else{
        $foto = "./assets/img/camp.png";
    }
    
    $pass = "12345";
    $pass = md5($pass);

    $par1 = strtolower(substr($nombre,0, -1));
    $par2 = random_int(100, 1000);
    $usuario = $par1.$par2;

    $query = "INSERT INTO participantes (nombre, apellido, sexo, direccion, email, telefono, edad, dui, encargado, pago, departamento, usuario, contra, tipo, foto, fecha_registro) 
    VALUES ('$nombre', '$apellido', '$sexo', '$direccion', '$email', '$telefono', '$edad', '$dui', '$encargado', '$pago', '$departamento', '$usuario', '$pass', '$tipo', '$foto', NOW());";


    $result = mysqli_query($connection,$query) or die (mysqli_error($connection));

    if($result == 1){
           mysqli_query($connection,"INSERT INTO bitacora(concepto, fecha_registro, id_part) VALUES ('agregando un registro de la tabla Participantes, el registro $id', NOW(), '$_SESSION[id]')") or die (mysqli_error($connection));
        
        if($tipo == 1){
            echo   "<script '>
            alert('Registro de  Administrador existosamente!');
            window.location.href='../admin.php'
        </script>";
            //header('Location: ../admin.php');
        }elseif ($tipo == 2) {
            echo   "<script '>
            alert('Registro de  Lider existosamente!');
            window.location.href='../lideres.php'
        </script>";
           // header('Location: ../lideres.php');
        }elseif ($tipo==3) {
            echo   "<script '>
            alert('Registro de  Participante existosamente!');
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
