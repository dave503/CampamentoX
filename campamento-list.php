<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Lista de campamento</title>
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
        <div    >
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                      <a class="nav-link active" href="campamento.php" role="tab" aria-selected="false">Nuevo campamento	</a>
                      </li>

                    </ul>
                    </div>
                    <div class="container-fluid">
			<div class="panel panel-info">
     
			
        <table class="table table-hover text-center" id="datos" width="100%">
							<thead>
								<tr>
									
                                <th class="text-center">LUGAR</th>
									<th class="text-center">FECHA</th>
                                    <th class="text-center">FECHA DE REGISTRO</th>
                                    <th class="text-center">FECHA DE MODIFICACION</th>
                                    
								</tr>
							</thead>
							<tbody>
							<div class="container-fluid">
			
		</div>
                             
        <?php 
                                        $campa = "SELECT * FROM campamento WHERE estado = 1";
                                        $result = mysqli_query($connection,$campa);
                                          
                                        while ($data = mysqli_fetch_assoc($result)) {
                                        
                                        $id_camp = $data['id_camp'];

                                        if ($data['fecha_mod']== null){
                                            $fecha_mod = "No se ha modificado";
                                        }else{
                                            $fecha_mod = $data['fecha_mod'];
                                        }
                                    ?>
                                    <tr>
                                    <td><?php echo $data['lugar']; ?></td>
                                    <td><?php echo $data['fecha_camp']; ?></td>
                                    <td><?php echo $data['fecha_registro']; ?></td>
									<td><?php echo $fecha_mod; ?></td>
                                    <td>
                                        <a href="campamento.php?&id=<?php echo $id_camp; ?>" class="btn btn-success btn-raised btn-xs" title="Editar">
											<i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a href="funciones/del-campamento.php?id=<?php echo $id_camp; ?>" class="btn btn-danger btn-raised btn-xs" title="Borrar">
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