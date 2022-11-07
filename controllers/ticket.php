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

    case 'listMyTickets':
        $tickets = $ticket->verMisTickets($_POST['id']);
        $data    = [];
        $total   = 1;

        foreach ($tickets as $row) {
            $sub_array = [];
            $sub_array[] = $total;
            $sub_array[] = $row['nombre_categoria'];
            $sub_array[] = $row['titulo'];
            $sub_array[] = $row['estado'];
            $sub_array[] = '<button type="button" onClick="ver(' . $row["id"] . ')" id="' . $row["id"] . '" class="btn btn-inline btn-primary btn-sm ladda-button"<div><i class="fa fa-edit"</i></div></button>';
            $total++;
            $data[] = $sub_array;
        }

        $results = array(
            "sEcho"                 => 1,
            "iTotalRecords"         => count($data),
            "iTotalDisplayRecords"  => count($data),
            "aaData"                => $data
        );
        echo json_encode($results);
        break;
}
