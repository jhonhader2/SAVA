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
}
