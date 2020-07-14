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
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- Inicio de contenido -->
            
            <div class="row">
                
              <div class="col-12">
                <div class="card">
                    
                  <div class="card-header">
                    <h3>Campamentos</h3>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>LUGAR</th>
                            <th>FECHA</th>
                            <th>FECHA DE REGISTRO </th>
                            <th>FECHA DE MODIFICACION</th>
                            <th>ESTADO</th>
                            <th>ACIONES</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Lago</td>
                            <td>2/5/20</td>
                            <td>asasasas</td>
                            <td>sasasas</td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Fin del contenido -->
          </div>
        </section>
      </div>
      <!-- Fin Main Content -->
    <?php //require_once('./icon_conf.php'); ?> 
    <?php require_once('./footer.php'); ?>
</body>

</html>