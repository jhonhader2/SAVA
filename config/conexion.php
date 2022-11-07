<?php
session_start();

class Conectar
{
    protected $con;

    protected function Conexion()
    {
        try {
            $conectar = $this->con = new PDO("mysql:local=localhost;dbname=sava", "root", "");
            return $conectar;
        } catch (Exception $e) {
            print $e->getMessage();
            die();
        }
    }

    public function set_names()
    {
        return $this->con->query("SET NAMES 'utf8'");
    }

    public static function ruta()
    {
        return "http://localhost:80/sava/";
    }
}
