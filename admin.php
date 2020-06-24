<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Participantes</title>
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
          <div class="section-body">
            <!-- Inicio de contenido -->

            <div class="container-fluid">
			
		</div>
           
              <div >
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" href="participante.php" role="tab" aria-selected="false">Nuevo Administrador	</a>
                      </li>
                        
                  
			  	</li>
                
                    </ul>
       
        <table class="table table-hover text-center" id="datos" width="100%">
							<thead>
								<tr>
									
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Apellido</th>
                                    <th class="text-center">Sexo</th>
                                    <th class="text-center">Direccion</th>
                                    <th class="text-center">Departamento</th>
                                    <th class="text-center">Edad</th>
                                    <th class="text-center">Pago</th>
                                    <th class="text-center">Telefono</th>
                                    <th class="text-center">ACCIONES</th>
                        
								</tr>
							</thead>
							<tbody>
							<div class="container-fluid">
			
		</div>
                                    <?php 
                                      $part = "SELECT * FROM participantes WHERE tipo = 1 AND estado = 1";

                                        $result = mysqli_query($connection,$part);
   
                                          while ($data = mysqli_fetch_assoc($result)) {
                                          
                                          $id_part = $data['id_part'];
                                      ?>
                                    <tr>
                                    <td><?php echo $data['nombre']; ?></td>
                                    <td><?php echo $data['apellido']; ?></td>
                                    <td><?php echo $data['sexo']; ?></td>
                                    <td><?php echo $data['usuario']; ?></td>
                                    <td><?php echo $data['direccion']; ?></td>
                                    <td><?php echo $data['edad']; ?></td>
                                    <td><?php echo $data['pago']; ?></td>
                                    <td><?php echo $data['telefono']; ?></td>
									
                                    <td>
                                    <a href="participante.php?tip=1&id=<?php echo $id_part; ?>" title="Editar" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                        </a>
                                        <a href="funciones/del-participante.php?id=<?php echo $id_part; ?>"  title="Eliminar" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a></a>
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