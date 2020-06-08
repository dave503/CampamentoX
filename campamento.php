<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campamento</title>
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
	$lugar = "";
    $fecha = "";

	$path = "funciones/add-campamento.php";
}else{
	$id = $_GET['id'];
	$query = "SELECT * FROM campamento WHERE id_camp = '$id'";
	$result = mysqli_query($connection,$query);
	$row = mysqli_fetch_array($result);
	$lugar = $row['lugar'];
    $fecha = $row['fecha_camp'];
  
	
	$path = "funciones/mod-campamento.php";
}



?>
  <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- Inicio de contenido -->

            <div class="container-fluid">
			
		</div>
           
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" href="campamento-list.php" role="tab" aria-selected="false">Lista de Campamento	</a>
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
                                <label>Lugar</label>
                                <input name="lugar" type="text" class="form-control" value="<?php echo $lugar ?>">
                                <div class="invalid-feedback">
                                  Inserte el lugar de el Campamento
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Fecha</label>
                                <input name="fecha" type="date" class="form-control" value="<?php echo $fecha ?>">
                                <div class="invalid-feedback">
                                  Inserte la feha de inscripcion
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



<?php require_once('./footer.php'); ?>
</body>
</html>