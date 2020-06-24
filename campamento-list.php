
<!DOCTYPE html>
<html lang="en">
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Campamentos</title>
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
<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
       <!-- Cabecera-->
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
                    <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
			
                          <thead>
							                    	<tr>
									
                                    <th class="text-center">LUGAR</th>
							                  		<th class="text-center">FECHA</th>
                                    <th class="text-center">FECHA DE REGISTRO</th>
                                    <th class="text-center">FECHA DE MODIFICACION</th>
                                    <th class="text-center">ACCION</th>     
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
                                        <a href="campamento.php?&id=<?php echo $id_camp; ?>" title="Editar" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                        </a>
                                        <a href="funciones/del-campamento.php?id=<?php echo $id_camp; ?>" title="Eliminar" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a></a>
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