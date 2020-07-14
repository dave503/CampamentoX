<?php require_once('./header.php'); //Header ?>
<link rel='shortcut icon' type='image/x-icon' href='assets\img\favicon.ico'>
<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
       <!-- Cabecera-->
       <?php require_once('./cabecera.php'); ?>
      <!-- Menu-->
      <?php require_once('./menu.php'); ?>
      <!-- Main Content -->
    
            <!-- Inicio de contenido -->
            

            <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                
                  </div>
            <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
			
                          <thead>
                            <tr>
                                    
                                    <th class="text-center">ULTIIMA MODIFICACION</th>
                                    <th class="text-center">FECHA</th>
                                  <th class="text-center">NOMBRE</th>
                                  <th class="text-center">AEPLLDIO </th>
                                  
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <div class="container-fluid">
        
		</div>
                                    <?php 
                                        $part = "SELECT bitacora.id_con, bitacora.concepto, bitacora.fecha_registro,   participantes.nombre, participantes.apellido
                                        FROM bitacora
                                          inner JOIN participantes ON bitacora.id_part = participantes.id_part
                                        
                                          WHERE  participantes.estado = 1";
                                        $result = mysqli_query($connection,$part);
                                          
                                        while ($data = mysqli_fetch_assoc($result)) {
                                        
                                        $id = $data['id_con'];
                                        
                                    ?>
                                    <tr>
                                    <td class="text-center"><?php echo $data['concepto']; ?></td>
                                    <td class="text-center"><?php echo $data['fecha_registro']; ?></td>
                                    <td class="text-center"><?php echo $data['nombre']; ?></td>
                                    <td class="text-center"><?php echo $data['apellido']; ?></td>
									
                                  
                                </tr>
                                <?php } ?>
							</tbody>
						</table>
	
        </section>
      </div>

            <?php echo "Hola " .$row['nombre']; ?>
            <!-- Fin del contenido -->
          </div>
        </section>
      </div>
      <!-- Fin Main Content -->
    <?php //require_once('./icon_conf.php'); ?> 
    <?php require_once('./footer.php'); ?>
</body>

</html>