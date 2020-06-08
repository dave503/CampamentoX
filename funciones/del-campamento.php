<?php
include '../dbcon.php';

$id = $_GET['id'];
$query = "UPDATE campamento SET estado = '0' WHERE id_camp = '$id'";
$result = mysqli_query($connection,$query) or die (mysqli_error());

if($result == 1){
    
    header('Location: ../campamento-list.php');   
    mysqli_close($connection);
}
?>