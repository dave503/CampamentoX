<?php
include '../dbcon.php';

$id = $_GET['id'];
echo $id;
$query = "UPDATE participantes SET estado = '0' WHERE id_part = '$id'";
$result = mysqli_query($connection,$query) or die (mysqli_error());

if($result == 1){
    
    header('Location: ../participantes-list.php');   
    mysqli_close($connection);
}
?>