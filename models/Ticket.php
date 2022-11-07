<?php

class Ticket extends Conectar
{

    public function createTicket($titulo, $id_categoria, $detalles, $created_by)
    {
        $conectar = parent::Conexion();
        parent::set_names();

        $query = "INSERT INTO tickets(titulo, id_categoria, detalles, created_by) VALUES (?, ?, ?, ?);";
        $stmt = $conectar->prepare($query);
        $stmt->bindValue(1, $titulo);
        $stmt->bindValue(2, $id_categoria);
        $stmt->bindValue(3, $detalles);
        $stmt->bindValue(4, $created_by);
        $stmt->execute();

        return $result = $stmt->fetchAll();
    }

    public function verMisTickets($id)
    {
        $conectar = parent::Conexion();
        parent::set_names();

        $query = "SELECT t.id, t.titulo, t.detalles, te.nombre AS estado, c.nombre AS nombre_categoria, t.created_at AS fecha_creado, CONCAT(IFNULL(primer_nombre,''),' ',IFNULL(segundo_nombre,''),' ',IFNULL(primer_apellido,''),' ',IFNULL(segundo_apellido,'')) AS usuario
        FROM tickets AS t
        JOIN usuarios AS u ON u.id = t.created_by
        JOIN categorias AS c ON c.id = t.id_categoria
        JOIN ticket_estados AS te ON te.id = t.estado
        WHERE u.id = ?";


        $stmt = $conectar->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $result = $stmt->fetchAll();
    }
}
