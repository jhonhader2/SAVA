<?php

require_once('../config/conexion.php');
require_once('../models/Categoria.php');

$categoria = new Categoria();

switch ($_GET["op"]) {
    case 'combo':
        $html       = null;
        $categorias = $categoria->getCategorias();

        if (is_array($categorias) == true && count($categorias) > 0) {
            foreach ($categorias as $row) {
                $html .= "<option value='" . $row['id'] . "'>" . ucfirst(strtolower($row['nombre'])) . "</option>";
            }
            echo $html;
        }

    break;
}
