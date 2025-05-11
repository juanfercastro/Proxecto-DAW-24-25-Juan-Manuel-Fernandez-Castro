<?php
define("DSN","mysql:host=mariadb;dbname=DevLink");
define('USER', 'root');
define('PASS', 'bitnami');

class Connection{
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