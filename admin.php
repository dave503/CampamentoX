

    <?php
//estilos
require_once('./header.php');

?>
<title>Administradores</title>
<body>
<?php
     // Cabecera
     require_once('./cabecera.php'); 
    // Menu
 require_once('./menu.php');
  
    ?>
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
                        <a class="nav-link active" href="participante.php?tip=1" role="tab" aria-selected="false">Nuevo Administrador	</a>
                      </li>
                        
                  
			  
                
                    </ul>
       
                    <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
			
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
                                 
                                 $part =  "SELECT p.id_part, p.nombre, p.apellido, p.sexo, p.direccion,  d.nombre_dep, p.edad, a.tipo, 
                                 a.valor, p.telefono FROM 
                                 participantes p INNER JOIN aranceles a ON p.pago = a.id_aran INNER JOIN 
                                 departamento d ON p.departamento = d.id_dep WHERE p.tipo = 1 AND p.estado = 1";
                          

                                        $result = mysqli_query($connection,$part);
   
                                          while ($data = mysqli_fetch_assoc($result)) {
                                          
                                          $id_part = $data['id_part'];
                                      ?>
                                    <tr>
                                    <td  ><?php echo $data['nombre']; ?></td>
                                    <td><?php echo $data['apellido']; ?></td>
                                    <td><?php echo $data['sexo']; ?></td>
                                    <td><?php echo $data['direccion']; ?></td>
							                   		<td><?php echo $data['nombre_dep']; ?></td>
                                    <td><?php echo $data['edad']; ?></td>
                                    <td ><?php echo $data['tipo']." $".$data['valor']; ?></td>
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