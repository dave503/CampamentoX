<?php require_once('./header.php'); //Header ?>

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

            <?php echo "Hola: ".$_SESSION['id']; ?>

            <!-- Fin del contenido -->
          </div>
        </section>
      </div>
      <!-- Fin Main Content -->
    <?php //require_once('./icon_conf.php'); ?> 
    <?php require_once('./footer.php'); ?>
</body>

</html>