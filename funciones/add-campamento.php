
<?php
    include '../dbcon.php';

    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO campamento (lugar, fecha_camp, fecha_registro) VALUES ('$lugar', '$fecha',NOW())";
    $result = mysqli_query($connection,$query) or die (mysqli_error());

    if($result == 1){
        
        header("Location: ../campamento-list.php");
    }
    
?>
