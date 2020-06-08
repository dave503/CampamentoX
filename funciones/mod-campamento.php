<?php
    include '../dbcon.php';
    
    $id = $_POST['id'];
    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];
    

    $query = "UPDATE campamento SET lugar = '$lugar', fecha_camp='$fecha', fecha_mod=NOW() WHERE id_camp = '$id'";
    $result = mysqli_query($connection,$query) or die (mysqli_error());

    if($result == 1){
        
        header("Location: ../campamento-list.php");
        
    }
?>