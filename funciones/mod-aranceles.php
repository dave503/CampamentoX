<?php
    include '../dbcon.php';
    
    $id = $_POST['id'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $descuento = $_POST['descuento'];

    $query = "UPDATE aranceles SET tipo = '$tipo', valor='$valor', descuento='$descuento', fecha_mod=NOW() WHERE id_aran = '$id'";

    $result = mysqli_query($connection,$query) or die (mysqli_error($connection));

    if($result == 1){
        
        header("Location: ../aranceles-list.php");
        
    }else {
        echo "valio bersh";
    }
?>