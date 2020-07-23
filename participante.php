<?php
	if($_GET['tip']==3){
		$tip= "Participante";
		$ruta = "participantes-list.php";
	}elseif($_GET['tip']==1){
		$tip = "Administrador";
		$ruta = "admin.php";
	}else{
		$tip = "Lider";
		$ruta = "lideres.php";
  }
  require_once('./header.php');
?>
<title><?php echo $tip; ?></title>
<body>

<?php

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
$dui =   "";
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
                                <label>Nombre</label>
                                <input value="<?php echo $nombre; ?>"class="form-control" type="text" name="nombre" required="" maxlength="30">
                               
                              </div>
                          		<div class="col-xs-12 col-sm-6">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Apellidos </label>
                                      <input value="<?php echo $apellido; ?>" class="form-control" type="text" name="apellido" required="" maxlength="30">
                                  </div>
				    			          	</div>

                              <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Sexo </label>
                                          <select name="sexo" class="form-control" required>
                                                <option value="<?php echo $sexo; ?>"><?php echo $sexo; ?></option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Otro">Otro</option>
									                       </select>
								                  		</div>
                              </div>

                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Teléfono </label>
                                    <input value="<?php echo $telefono; ?>" pattern="[0-9+]{1,15}" class="form-control" type="text" name="telefono" maxlength="15" required>
                                </div>
				    			        	</div>

                            <div class="col-xs-12 col-sm-6">
                                 <div class="form-group label-floating">
                                    <label class="control-label">E-mail</label>
                                    <input value="<?php echo $email; ?>" class="form-control" type="email" name="email" maxlength="30">
                                </div>
				    			        	</div>

                            <div class="col-xs-12 col-sm-6">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Edad </label>
                                      <input value="<?php echo $edad; ?>" required pattern="[0-9+]{1,15}" class="form-control" type="text" name="edad" maxlength="2">
                                  </div>    
				    		         		</div>

                             <div class="col-xs-12 col-sm-6">
                                  <div class="form-group label-floating">
                                      <label class="control-label">DUI </label>
                                      <input value="<?php echo $dui; ?>" pattern="[0-9+]{1,15}" class="form-control" type="text" name="dui" maxlength="9">
                                  </div>
				    			        	</div>

                            <div class="col-xs-12 col-sm-6">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Encargado</label>
                                      <input value="<?php echo $encargado; ?>" class="form-control" type="text" name="encargado" maxlength="50">
                                  </div>
				    			        	</div>

                            <div class="col-xs-12 col-sm-6">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Pago </label>
                                            <select name="pago" class="form-control" required>
                                                <?php
                                                $consulta = "SELECT * FROM aranceles WHERE estado = 1";
                                                  $res = mysqli_query($connection,$consulta);
                                                
                                                  while ($data = mysqli_fetch_assoc($res)) {

                                                ?>
                                               option>
                                         <option value="<?php echo $data['id_aran']; ?>"><?php echo $data['tipo']." $".$data['valor']; ?></option>
											  
										                        	<?php } ?> 
									                           </select> 
										              </div>
				    				        </div>

                            <div class="col-xs-12 col-sm-6">
									              	<div class="form-group label-floating">
										              	<label class="control-label">Miembro</label>
                                    
                                        <select name="tipo" class="form-control" required>
                                        
                                                      
                                              <option selected value="<?php echo $_GET['tip']; ?>"><?php echo ucwords(strtolower($tip)); ?></option>
                                                      
									                      </select>
										             </div>
				    			        	</div>

                            <div class="col-xs-12 col-sm-6">
									                 	<div class="form-group label-floating">
										                         	<label class="control-label">Departamento </label>
                                              <select name="departamento" class="form-control" required>
                                                  <?php
                                                  $consul = "SELECT * FROM departamento";
                                                    $re = mysqli_query($connection,$consul);
                                                  
                                                    while ($dat = mysqli_fetch_assoc($re)) {
                                                    
                                                  ?>
                                               
                                              <option value="<?php echo $dat['id_dep']; ?>"><?php echo $dat['nombre_dep']; ?></option>
											  
											                              	<?php } ?> 
									                                 </select> 
									             	  
                                    </div>  
				    		         		</div>

                             <div class="col-xs-12 col-sm-6">
                                  <div class="form-group label-floating">
                                      <label class="control-label">Dirección</label>
                                      <textarea name="direccion" class="form-control" rows="2" required maxlength="100"><?php echo $direccion; ?></textarea>
									                	</div>
				    				          </div>
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