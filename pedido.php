<?php include ("php/database.php") ?>

<!-- Cabecera-->
<?php include ("includes/01_header.php") ?>

<!-- Primera pagina -->
<div class="wrapper">
    <form action="php/save.php" id="wizard" method="POST">
        <?php include ("includes/02_producto.php") ?>
    <!-- Segunda pagina -->
        <?php include ("includes/03_envio.php") ?>
    <!-- Tercera Pagina -->
        <?php include ("includes/04_pago.php") ?>
    </form>
</div>
<!-- Footer -->
<?php include ("includes/05_footer.php") ?>