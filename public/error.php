<?php
    require_once 'vendor.config.php';
    require_once __DIR__.'/../recursos/html/head.php';
?>

<br><br>
<body class="hold-transition">

    <!-- Main content -->
    <section class="content">
        <h1 align="center" class="headline text-warning"> <?php echo $_GET['codigo']; ?></h1>

        <div align="center" class="error-content">
          <h3 class="text-warning"><i class="fas fa-exclamation-triangle text-warning"></i> Algo salio mal</h3>
            <br>
          <p><a class="btn btn-main" href="<?php echo APP_URL; ?>index.php?controlador=inicio&metodo=index&session_id=<?php echo $_GET['session_id']; ?>">Pagina Principal</a></p>

        </div>
        <!-- /.error-content -->
      
    </section>
    <!-- /.content -->

<?php require_once __DIR__.'/../recursos/html/final.php'; ?>