<?php
include_once("globals.php");
class Conexion{
    public static function connection(){
        try {
            $db = new PDO(DSN, USER, PASS);
        } catch (PDOException $th) {
            error_log($th->getMessage());
            die();
        }
        return $db;
    }
}