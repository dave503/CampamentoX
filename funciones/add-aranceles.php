
<?php
    include '../dbcon.php';

    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $descuento = $_POST['descuento'];

    $query = "INSERT INTO aranceles (tipo,valor, descuento, fecha_registro) VALUES ('$tipo', '$valor', '$descuento', NOW())";
    
    $result = mysqli_query($connection,$query) or die (mysqli_error());
    if($result == 1){
        
        header("Location: ../aranceles-list.php");

    }
    
    var_dump($result);
?>
