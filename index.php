<?php require_once('./header.php'); //Header ?>
<body>
<div class="loader"></div>
  <div id="app">
    <section class="section">
    
      <div class="container mt-5">
      <center><h1>LOGISTICA CAMPAMENTO NACIONAL IDDPU</h1></center>
      
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <center><h1>Inicio de sesion</h1></center>
              </div>
              <div class="card-body">
              
                <form method="POST" action="./login.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input id="usuario" type="text" class="form-control" name="usuario" tabindex="1" required="" autofocus="">
                    <div class="invalid-feedback">
                      Por favor ingrese su usuario
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="contra" >Contraseña</label>
                    </div>
                    <input id="contra" type="password" class="form-control" name="contra" tabindex="2" required="">
                    <div class="invalid-feedback">
                      Por favor ingrese su contraseña
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Ingresar
                    </button>
                  </div>
                </form>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
      <!-- Fin Main Content -->
    <?php //require_once('./icon_conf.php'); ?> 
    <?php require_once('./footer.php'); ?>
</body>

</html>