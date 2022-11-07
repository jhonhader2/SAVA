<?php 
    require_once('../../config/conexion.php');
    if (isset($_SESSION['id'])) {
?>

<!DOCTYPE html>
<html>

<head lang="es">
    <?php require_once("../../views/Template/MainCss.php") ?>
    <title>SAVA::Home</title>
</head>

<body class="with-side-menu">

    <?php require_once("../../views/Template/MainHeader.php") ?>

    <div class="mobile-menu-left-overlay"></div>
    
    <?php require_once("../../views/Template/MainNav.php") ?>
    <!--.side-menu-->

    <!-- page-content -->
    <div class="page-content">
        <div class="container-fluid">
            Blank page.
        </div>
        <!--.container-fluid-->
    </div>
    <!--.page-content-->

    <?php require_once("../../views/Template/MainJs.php") ?>
    <script type="text/javascript" src="home.js"></script>
</body>

</html>

<?php } else {
    header("location:".Conectar::ruta()."index.php?m=3");
}