
<?php 
//estilos
require_once('./header.php');
?>
<title>Aranceles</title>
<body>    
<?php
// Cabecera
     require_once('./cabecera.php'); 
    // Menu
 require_once('./menu.php');

 if(!isset($_GET['id'])){
	$tipo = "";
    $valor = "";
    $descuento = "";
    $campamento ="";
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
    $campamento= $row['campamento'];
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
                                <input name="tipo" type="text" class="form-control" value="<?php echo $tipo ?>" required>
                                <div class="invalid-feedback">
                                  Inserte su tipo de pago
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Valor</label>
                                <input name="valor" type="text" class="form-control" value="<?php echo $valor ?>" required>
                                <div class="invalid-feedback">
                                  Inserte su valor
                                </div>
                              </div>

                                   <div class="form-group col-sm-6 col-12">
                                    <label>Descuento</label>

                                    <select name="descuento" class="form-control" required>
                                    <option value="<?php echo $descuento; ?>"></option>
                                    <option value="0.10">10%</option>
                                    <option value="0.20">20%</option>
                                    <option value="0.30">30%</option>
                                    <option value="0.40">40%</option>
                                    <option value="O">otro</option>
                                    </select>
                                    </div>
                                    <div class="form-goup col-sm-6 col-12">
                                    <label>campamento</label>
                                    <select name="campamento" class="form-control" required>
                                    <?php
                                          $consul = "SELECT * FROM campamento";
                                           $re = mysqli_query($connection,$consul);      
                                           while ($dat = mysqli_fetch_assoc($re)) {
                                                            
                                        ?>
                                               
                             <option value="<?php echo $dat['id_camp']; ?>"><?php echo $dat['lugar']; ?></option>
											  
											                    	<?php } ?> 
                                
                                    </select>
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