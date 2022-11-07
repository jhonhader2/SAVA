<?php

require_once('../config/conexion.php');
require_once('../models/Ticket.php');

$ticket = new Ticket();

switch ($_GET["op"]) {
    case 'insert':
        $titulo         = strtoupper($_POST['titulo']);
        $id_categoria   = $_POST['categoria'];
        $detalles       = $_POST['detalles'];
        $created_by     = $_POST['id_user'];

        $ticket = $ticket->createTicket($titulo, $id_categoria, $detalles, $created_by);

    break;
}
