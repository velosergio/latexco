<?php
include ("php/database.php");
// Inicializar la sesion
session_start();

// Comprobacion del estado del usuario, si no esta loggeado redirecionar
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Latexco Mayoristas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="sergioveloza.com">
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style.css">
    </head>

<body>

<!-- Formulario -->
<div class="wrapper">
    <form action="php/save.php" id="wizard" method="POST">
    <!-- Primera pagina -->
        <?php include ("includes/01_producto.php") ?>
    <!-- Segunda pagina -->
        <?php include ("includes/02_envio.php") ?>
    <!-- Tercera Pagina -->
        <?php include ("includes/03_pago.php") ?>
    </form>
</div>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span> <?php echo htmlspecialchars($_SESSION["nombre"]); ?> Copyright &copy; Latexco 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

<!-- JQUERY -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- JQUERY STEP -->
<script src="js/jquery.steps.js"></script>
<script src="js/main.js"></script>
<script src="js/app.js"></script>
<!-- Template created and distributed by Colorlib -->
</body>

</html>