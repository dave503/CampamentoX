    <?php
 
    include('funciones/session.php');

    $query = "SELECT * FROM participantes WHERE id_part = '$id'";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($result);
    ?>
    <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
          </ul>
        </div>
        <?php if($row['foto']=="null" || $row['foto']==""){
                      $fotoP="./assets/img/".$row['sexo'].".png";
                    }else{
                      $fotoP = "./files/".$row['foto'];
                    }
                    ?>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?php echo $fotoP; ?>" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hola <?php echo $row['nombre']." ".$row['apellido']; ?></div>
              <a href="./perfil.php" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Perfil
              
              </a> <a href="informacion.php" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Configuracion
              </a>
              <div class="dropdown-divider"></div>
              <a href="./logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Salir
              </a>
            </div>
          </li>
        </ul>
      </nav>
<!-- Menu--> 
<?php 
          if($row['tipo']==1){
            require_once('./menu.php');
          }else{
            echo require_once('./menu_norm.php');
          }
       ?>   