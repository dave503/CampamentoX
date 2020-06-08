<?php require_once('./header.php'); //Header ?>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
       <!-- Cabecera-->
       <?php require_once('./cabecera.php'); ?>
       
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- Inicio de contenido -->

            <div class="row mt-sm-2">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                      <img alt="image" src="./files/<?php echo $row['foto']; ?>" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php echo $row['nombre']." ".$row['apellido']; ?></a>
                      </div>
                      <div class="author-box-job"><?php echo $row['usuario']; ?></div>
                    </div>
                    <div class="text-center">
                      
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Detalle personal</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-2">
                      <p class="clearfix">
                        <span class="float-left">
                          Sexo
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $row['sexo']; ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Telefono
                        </span>
                        <span class="float-right text-muted">
                        <?php echo $row['telefono']; ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Correo electronico
                        </span>
                        <span class="float-right text-muted">
                        <?php echo $row['email']; ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Direccion
                        </span>
                        <span class="float-right text-muted">
                        <?php echo $row['direccion']; ?>
                        </span>
                      </p>
                      <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Fecha de registro</div><br>
                          <?php echo $row['fecha_registro']; ?>  
                        </div>                      
                      </li>
                      
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Ultima modificacion</div><br>
                          <?php echo $row['fecha_mod']; ?>  
                        </div>                      
                      </li>
                    </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="profile-tab2" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Editar perfil</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <form action="./funciones/add-foto.php" method="post" class="needs-validation" enctype="multipart/form-data" name="foo">
                          <input type="hidden" name="id" value="<?php echo $row['id_part'];?>">
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>Nombre</label>
                                <input name="nombre" type="text" class="form-control" value="<?php echo $row['nombre']; ?>">
                                <div class="invalid-feedback">
                                  Inserte su nombre
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Apellido</label>
                                <input name="apellido" type="text" class="form-control" value="<?php echo $row['apellido']; ?>">
                                <div class="invalid-feedback">
                                  Inserte su apellido
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>Contraseña</label>
                                <input name="contra" type="password" class="form-control" value="<?php echo $row['contra']; ?>">
                              </div>
                              
                              <div class="form-group col-md-6 col-12">
                                <label>Confirmar contraseña</label>
                                <input name="contra_conf" type="password" class="form-control" value="<?php echo $row['contra']; ?>">
                              </div>
                            </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cambiar foto</label>
                                <div class="col-sm-12 col-md-7">
                                  <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Buscar foto</label>
                                    <input type="file" name="image" id="image-upload" value="./files/<?php echo $row['foto']; ?>">
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="card-footer text-right">
                            <input type="submit" value="Guardar cambios" class="btn btn-primary">
                          </div>
                        </form>
                        
                      </div>
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
