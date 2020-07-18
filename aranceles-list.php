

<?php 
//estilos
require_once('./header.php');
?>
<title>Aranceles</title>
<body> 
<?php    // Cabecera
     require_once('./cabecera.php'); 
    // Menu
 require_once('./menu.php');
  
?>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
       <!-- Cabecera-->
     
       
   
			
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                  <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                      <a class="nav-link active" href="aranceles.php" role="tab" aria-selected="false">Nuevo Arancel	</a>
                      </li>

                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
			
                          <thead>
                            <tr>
                                    
                                    <th class="text-center">TIPO</th>
                                    <th class="text-center">VALOR</th>
                                  <th class="text-center">DESCUENTO</th>
                                  <th class="text-center">Campamento</th>
                                  <th class="text-center">ACCION</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <div class="container-fluid">
        
		</div>
                                    <?php 
                                        $part = " SELECT a.id_aran, a.tipo, a.valor, a.descuento, c.lugar
                                        FROM aranceles a
                                        inner join campamento c on a.camp = c.id_camp
                                        
                                        WHERE  a.estado = 1";
                                        $result = mysqli_query($connection,$part);
                                          
                                        while ($data = mysqli_fetch_assoc($result)) {
                                        
                                        $id = $data['id_aran'];
                                        
                                    ?>
                                    <tr>
                                    <td class="text-center"><?php echo $data['tipo']; ?></td>
                                    <td class="text-center"><?php echo $data['valor']; ?></td>
                                    <td class="text-center"><?php echo $data['descuento']; ?></td>
                                    <td class="text-center"><?php echo $data['lugar']; ?></td>
									
                                    <td class="text-center">
                                    <a href="aranceles.php?&id=<?php echo $id; ?>" title="Editar" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                    <a href="funciones/del-aranceles.php?id=<?php echo $id; ?>" title="Eliminar" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                    </td>
                                        
                                </tr>
                                <?php } ?>
							</tbody>
						</table>
	
        </section>
      </div>

<?php require_once('./footer.php'); ?>
</body>
</html>