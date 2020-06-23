<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Lista de aranceles</title>
</head>
<body>
<?php 
//estilos
require_once('./header.php');
     // Cabecera
     require_once('./cabecera.php'); 
    // Menu
 require_once('./menu.php');
  
?>

	  <div class="main-content">
        <section class="section">
        <div class="">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                      <a class="nav-link active" href="aranceles.php" role="tab" aria-selected="false">Nuevo Aranceles	</a>
                      </li>

                    </ul>
                    <div class="container-fluid">
			<div class="panel panel-info">
			
        <table class="table table-hover text-center" id="datos" width="100%">
							<thead>
								<tr>
									
									<th class="text-center">TIPO</th>
									<th class="text-center">VALOR</th>
                 <th class="text-center">DESCUENTO</th>
								</tr>
							</thead>
							<tbody>
							<div class="container-fluid">
			
		</div>
                                    <?php 
                                        $part = "SELECT * FROM aranceles WHERE estado = 1";
                                        $result = mysqli_query($connection,$part);
                                          
                                        while ($data = mysqli_fetch_assoc($result)) {
                                        
                                        $id = $data['id_aran'];
                                        
                                    ?>
                                    <tr>
                                    <td><?php echo $data['tipo']; ?></td>
                                    <td><?php echo $data['valor']; ?></td>
                                    <td><?php echo $data['descuento']; ?></td>
									
                                    <td>
									<a href="aranceles.php?&id=<?php echo $id; ?>" class="btn btn-success btn-raised btn-xs" title="Editar">
											<i class="zmdi zmdi-edit"></i>
                                        </a>
										<a href="funciones/del-aranceles.php?id=<?php echo $id; ?>" class="btn btn-danger btn-raised btn-xs" title="Borrar">
											<i class="zmdi zmdi-delete"></i>
										</a>
                                    </td>
                                        
                                </tr>
                                <?php } ?>
							</tbody>
						</table>
	
        </section>
      </div>

<?php require_once('./footer.php'); ?>
</body>
</html>