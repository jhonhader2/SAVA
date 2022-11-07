<?php

class Categoria extends Conectar
{

    public function getCategorias()
    {
        $conectar = parent::Conexion();
        parent::set_names();

        $query = "SELECT * FROM categorias WHERE estado = 1 ORDER BY nombre ASC";
        $stmt = $conectar->prepare($query);
        $stmt->execute();

        return $result = $stmt->fetchAll();
    }
}
