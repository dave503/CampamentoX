<?php
    include '../dbcon.php';
    
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];


    $query = "UPDATE participantes SET usuario = '$usuario', contra='$contra' WHERE id_part = '$id'";

    $result = mysqli_query($connection,$query) or die (mysqli_error());

    if($result == 1){
        
        header("Location: ../usuarios.php");
        
    }
?>