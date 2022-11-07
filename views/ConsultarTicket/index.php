<?php
require_once('../../config/conexion.php');
if (isset($_SESSION['id'])) {
?>

    <!DOCTYPE html>
    <html>

    <head lang="es">
        <?php require_once("../../views/Template/MainCss.php") ?>
        <link rel="stylesheet" href="../../public/css/lib/datatables-net/datatables.min.css">
        <link rel="stylesheet" href="../../public/css/separate/vendor/datatables-net.min.css">
        <title>SAVA::Consultar Ticket</title>
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
                                <h3>Tickets</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="../Home/">Inicio</a></li>
                                    <li class="active">Mis Tickets</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="box-typical box-typical-padding">
                    <input type="hidden" name="id" id="id" value="<?= $_SESSION['id'] ?>">
                    <table class="table table-bordered table-striped table-vcenter table-sm js-dataTable-full" id="table-myTickets">
                        <thead>
                            <tr>
                                <th style="width: 10%;">#</th>
                                <th style="width: 15%;" class="text-center">Categoria</th>
                                <th style="width: 25%;" class="d-none d-sm-table-cell text-center">Título</th>
                                <th style="width: 15%;" class="text-center">Estado</th>
                                <th style="width: 15%;" class="text-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>



            </div>
            <!--.container-fluid-->
        </div>
        <!--.page-content-->

        <?php require_once("../../views/Template/MainJs.php") ?>
        <script src="../../public/js/lib/datatables-net/datatables.min.js"></script>
        <script type="text/javascript" src="consultarTicket.js"></script>
    </body>

    </html>

<?php } else {
    header("location:" . Conectar::ruta() . "index.php?m=3");
}
