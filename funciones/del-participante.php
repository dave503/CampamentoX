<?php
include '../dbcon.php';

$id = $_GET['id'];
echo $id;
$query = "UPDATE participantes SET estado = '0' WHERE id_part = '$id'";
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