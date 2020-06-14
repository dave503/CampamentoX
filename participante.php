<?php
	if($_GET['tip']==0){
		$tip= "PARTICIPANTE";
		$ruta = "participantes-list.php";
	}elseif($_GET['tip']==1){
		$tip = "ADMINISTRADOR";
		$ruta = "admin.php";
	}else{
		$tip = "LIDER";
		$ruta = "lideres.php";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participantes</title>
</head>
<body>

<?php
require_once('./header.php');
// Cabecera
require_once('./cabecera.php'); 
// Menu
require_once('./menu.php');

if(!isset($_GET['id'])){
	$nombre = "";
    $apellido = "";
    $sexo = "";
    $telefono = "";
    $email = "";
    $edad = "";
	$dui =   
	$encargado = "";
    $pago = "";
	$direccion = "";
	$departamento = "";
	$tipo = "";
	$titulo = "NUEVO";
	$path = "funciones/add-participantes.php";
}else{
	$id = $_GET['id'];
	$query = "SELECT * FROM participantes WHERE id_part = '$id'";
	$result = mysqli_query($connection,$query);
	$row = mysqli_fetch_array($result);
	$nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $sexo = $row['sexo'];
    $telefono = $row['telefono'];
    $email = $row['email'];
    $edad = $row['edad'];
	$dui =   $row['dui'];
	$encargado = $row['encargado'];
    $pago = $row['pago'];
	$direccion = $row['direccion'];
	$departamento = $row['departamento'];
	$tipo = $row['tipo'];
	$titulo = "MODIFICAR";
	$path = "funciones/mod-participantes.php";
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
                        <a class="nav-link active" href="<?php echo $ruta;?>" role="tab" aria-selected="false">Lista de <?php echo $tip; ?>	</a>
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
                                <label>nombre</label>
                                <input name="nombre" type="text" class="form-control" value="<?php echo $nombre ?>">
                                <div class="invalid-feedback">
                                  Inserte el nombre participante
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>apellido</label>
                                <input name="apellido" type="text" class="form-control" value="<?php echo $apellido ?>">
                                <div class="invalid-feedback">
                                  Inserte el apellido del participantes
                                </div>
                              </div>

                              <div class="form-group col-md-6 col-12">
                                <label>sexo</label>
                                <input name="sexo" type="text" class="form-control" value="<?php echo $sexo ?>">
                                <div class="invalid-feedback">
                                  Inserte el sexo de el participantes
                                </div>
                              </div>

                              <div class="form-group col-md-6 col-12">
                                <label>telefono</label>
                                <input name="telefono" type="text" class="form-control" value="<?php echo $telefono ?>">
                                <div class="invalid-feedback">
                                  Inserte el telefono de el participantes
                                </div>
                              </div>

                                    <div class="form-group col-md-6 col-12">
                                      <label>email</label>
                                      <input name="email" type="text" class="form-control" value="<?php echo $email ?>">
                                      <div class="invalid-feedback">
                                        Inserte el email de el participantes
                                      </div>
                                    </div>
                                <div class="form-group col-md-6 col-12">
                                <label>edad</label>
                                <input name="edad" type="text" class="form-control" value="<?php echo $edad ?>">
                                <div class="invalid-feedback">
                                  Inserte el edad de el participantes
                                </div>
                              </div>

                              <div class="form-group col-md-6 col-12">
                                <label>dui</label>
                                <input name="dui" type="text" class="form-control" value="<?php echo $dui ?>">
                                <div class="invalid-feedback">
                                  Inserte el dui de el participantes
                                </div>
                              </div>


                                 <div class="form-group col-md-6 col-12">
                                <label>encargado</label>
                                <input name="encargado" type="text" class="form-control" value="<?php echo $encargado ?>">
                                <div class="invalid-feedback">
                                  Inserte el encargado de el participantes
                                </div>
                              </div>

                              
                              <div class="form-group col-md-6 col-12">
                                <label>pago</label>
                                <input name="pago" type="text" class="form-control" value="<?php echo $pago ?>">
                                <div class="invalid-feedback">
                                  Inserte el pago de el participantes
                                </div>
                              </div>

                              
                              <div class="form-group col-md-6 col-12">
										<div class="form-group label-floating">
										  	<label class="control-label"></label>
                          <select name="tipo" class="form-control" required>
										<option selected value="<?php echo $_GET['tip']; ?>"><?php echo ucwords(strtolower($tip)); ?></option>
									          	
									        </select>
										</div>
				    				</div>
                    
                    <div class="form-group ">
                                <label>departamento</label>
                               
                                <div class="form-group col-md-6 col-12">
                                <input name="departamento" type="text" class="form-control" value="<?php echo $departamento ?>">
                                <div class="invalid-feedback">

                                  Inserte el departamento de el participantes
                                </div>
                              </div>

                            </div>
                   
                              

                              <div class="form-group col-md-6 col-12">
                                <label>direccion</label>
                                <input name="direccion" type="text" class="form-control" value="<?php echo $direccion ?>">
                                <div class="invalid-feedback">
                                  Inserte la direccion de el participantes
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