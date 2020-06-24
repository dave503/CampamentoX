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
                        <a class="nav-link active" href="participante.php?tip=0" role="tab" aria-selected="false">Nuevo Participante	</a>
                      </li>
                        
                  
			  	</li>
                
                    </ul>
			
        <table class="table table-hover text-center" id="datos" width="100%">
							<thead>
								<tr>
                                    
                                    <th class="text-center">NOMBRE</th>
                                    <th class="text-center">APELLIDO</th>
                                    <th class="text-center">SEXO</th>
                                    <th class="text-center">DIRECCION</th>
                                    <th class="text-center">DEPARTAMENTO</th>
                                    <th class="text-center">EDAD</th>
                                    <th class="text-center">PAGO</th>
                                    <th class="text-center">TELEFONO</th>
                                    <th class="text-center">ACCION</th>
								</tr>
							</thead>
							<tbody>
							<div class="container-fluid">
			
		</div>
                                    <?php 
                                      $part =  "SELECT p.id_part, p.nombre, p.apellido, p.sexo, p.direccion, d.nombre, p.edad, a.tipo, a.valor, p.telefono FROM participantes p INNER JOIN aranceles a ON p.pago = a.id_aran INNER JOIN departamento d ON p.departamento = d.id_dep WHERE p.tipo = 0 AND p.estado = 1";

                                        $result = mysqli_query($connection,$part);
   
                                          while ($data = mysqli_fetch_assoc($result)) {
                                          
                                          $id_part = $data['id_part'];
                                      ?>
                                    <tr>
                                    <td  ><?php echo $data['nombre']; ?></td>
                                    <td><?php echo $data['apellido']; ?></td>
                                    <td><?php echo $data['sexo']; ?></td>
                                    <td><?php echo $data['direccion']; ?></td>
							                   		<td><?php echo $data['nombre']; ?></td>
                                    <td><?php echo $data['edad']; ?></td>
                                    <td ><?php echo $data['tipo']." $".$data['valor']; ?></td>
                                    <td><?php echo $data['telefono']; ?></td>
									
                                    <td>
									<a href="participante.php?tip=0&id=<?php echo $id_part; ?>"title="Editar" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                        </a>
										<a href="funciones/del-participante.php?tip=0&idid=<?php echo $id_part; ?>"  title="Eliminar" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
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