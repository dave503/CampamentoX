<?php
include '../dbcon.php';

$id = $_GET['id'];
$query = "UPDATE aranceles SET estado = '0' WHERE id_aran = '$id'";

$result = mysqli_query($connection,$query) or die (mysqli_error());

if($result == 1){
    
    header('Location: ../aranceles-list.php');   
    mysqli_close($connection);
}
?>