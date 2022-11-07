<?php
require_once('../../config/conexion.php');
if (isset($_SESSION['id'])) {
?>

    <!DOCTYPE html>
    <html>

    <head lang="es">
        <?php require_once("../../views/Template/MainCss.php") ?>

        <!-- SummerNote -->
        <link rel="stylesheet" href="../../public/css/lib/summernote/summernote.css" />
        <link rel="stylesheet" href="../../public/css/separate/pages/editor.min.css">
        <!-- .SummerNote -->
        <title>SAVA::Nuevo Ticket</title>
    </head>

    <body class="with-side-menu">

        <?php require_once("../../views/Template/MainHeader.php") ?>

        <div class="mobile-menu-left-overlay"></div>

        <?php require_once("../../views/Template/MainNav.php") ?>
        <!--.side-menu-->

        <!-- page-content -->
        <div class="page-content">
            <div class="container-fluid">
                <header class="section-header">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">
                                <h3>Nuevo Ticket</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="../Home/">Inicio</a></li>
                                    <li class="active">Nuevo Ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="box-typical box-typical-padding">
                    <p>Desde esta ventana podrá generar su caso para que sea estudiado por la mesa de ayuda, por favor sea muy claro en su solicitud.</p>

                    <h5 class="m-t-lg with-border">Detalles del caso</h5>

                    <form id="nuevo_caso" name="nuevo_caso" method="POST"  autocomplete="off">
                        <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?= $_SESSION['id'] ?>">

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Título</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">
                                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título del caso" required autofocus>
                                </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="categoria" class="col-sm-2 form-control-label">Categoría</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="categoria" name="categoria" required></select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="detalles" class="col-sm-2 form-control-label">Detalles</label>
                            <div class="col-sm-10 summernote-theme-1">
                                <textarea class="form-control summernote" id="detalles" name="detalles" placeholder="Ingrese más detalles del caso"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-rounded btn-inline btn-primary" name="enviar">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--.container-fluid-->
            </div>
            <!--.page-content-->

            <?php require_once("../../views/Template/MainJs.php") ?>
            <script type="text/javascript" src="nuevoTicket.js"></script>

            <!-- SummerNote -->
            <script src="../../public/js/lib/summernote/summernote.min.js"></script>
            <script src="../../public/js/lib/summernote/summernote-es-ES.js"></script>
            <!-- .SummerNote -->
    </body>

    </html>

<?php } else {
    header("location:" . Conectar::ruta() . "index.php?m=3");
}
