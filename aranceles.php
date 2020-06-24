<!DOCTYPE html>
<html lang="en">
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Aranceles</title>
</head>
<body>
<?php 
//estilos
require_once('./header.php');
     // Cabecera
     require_once('./cabecera.php'); 
    // Menu
 require_once('./menu.php');

 if(!isset($_GET['id'])){
	$tipo = "";
    $valor = "";
    $descuento = "";
	$titulo = "NUEVO";
	$path = "funciones/add-aranceles.php";
}else{
	$id = $_GET['id'];
	$query = "SELECT * FROM aranceles WHERE id_aran = '$id'";
	$result = mysqli_query($connection,$query);
	$row = mysqli_fetch_array($result);
	$tipo = $row['tipo'];
    $valor = $row['valor'];
    $descuento = $row['descuento'];
	$titulo = "MODIFICAR";
	$path = "funciones/mod-aranceles.php";
}
  
?>



<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
       <!-- Cabecera-->
     
       
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="container-fluid">

            <div>
			

              <div>
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" href="aranceles-list.php" role="tab" aria-selected="false">Lista de Aranceles	</a>
                      </li>
                        
                  
			  	</li>
                
                    </ul>
       
            
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <form action="<?php echo $path; ?>" method="POST"class="needs-validation">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>tipo</label>
                                <input name="tipo" type="text" class="form-control" value="<?php echo $tipo ?>">
                                <div class="invalid-feedback">
                                  Inserte su tipo de pago
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Valor</label>
                                <input name="valor" type="text" class="form-control" value="<?php echo $valor ?>">
                                <div class="invalid-feedback">
                                  Inserte su valor
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                    <label>Descuento</label>
                                    <select name="descuento" class="form-control">
                                    <option value="<?php echo $descuento; ?>"></option>
                                    <option value="0.10">10%</option>
                                    <option value="0.20">20%</option>
                                    <option value="0.30">30%</option>
                                    <option value="0.40">40%</option>
                                    <option value="O">otro</option>
                                    </select>
                                    </div>
                            </div>
                      
                            </div>
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary">Guardar Cambios</button>
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


</body>
</html>
       <!-- footers -->
<?php require_once('./footer.php'); ?>
</body>

</html>