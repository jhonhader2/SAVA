<?php

class usuario extends Conectar
{

    public function login()
    {
        $conectar = parent::Conexion();
        parent::set_names();

        if (isset($_POST['enviar'])) {
            $numero_documento   = $_POST['numero_documento'];
            $user_password      = $_POST['user_password'];

            if (empty($numero_documento) and empty($user_password)) {
                header("Location:" . conectar::ruta() . "index.php?m=2");
                exit();
            } else {

                $query = "SELECT *, CONCAT(IFNULL(primer_nombre,''),' ',IFNULL(segundo_nombre,''),' ',IFNULL(primer_apellido,''),' ',IFNULL(segundo_apellido,'')) AS usuario FROM usuarios WHERE numero_documento = ? AND user_password = ? AND estado = 1";
                $stmt = $conectar->prepare($query);
                $stmt->bindValue(1, $numero_documento);
                $stmt->bindValue(2, $user_password);
                $stmt->execute();

                $res = $stmt->fetch();

                if (is_array($res) && count($res) > 0) {
                    $_SESSION['id']         = $res['id'];
                    $_SESSION['usuario']    = $res['usuario'];

                    header("Location:" . conectar::ruta() . "views/Home/");
                } else {
                    header("Location:" . conectar::ruta() . "index.php?m=1");
                    exit();
                }
            }
        }
    }
}
