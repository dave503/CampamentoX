
<?php
    include '../dbcon.php';

    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $descuento = $_POST['descuento'];

    $query = "INSERT INTO aranceles (tipo,valor, descuento, fecha_registro) VALUES ('$tipo', '$valor', '$descuento', NOW())";
    
    $result = mysqli_query($connection,$query) or die (mysqli_error($connection));
    if($result == 1){
        echo "<script >
        funtion prueba()   
        alert('prueba');
        window.location.href='../aranceles-list.php'
        
    </script>";
        
       // header("Location: ../aranceles-list.php");
      //s window.location.href='../aranceles-list.php'

    }
    
    var_dump($result);
?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>