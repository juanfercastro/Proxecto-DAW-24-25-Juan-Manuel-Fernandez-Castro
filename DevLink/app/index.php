<?php
include_once("globals.php");
include_once(CONTROLLER_PATH."MainController.php");
include_once(CONTROLLER_PATH."UserController.php");
include_once(CONTROLLER_PATH."ForoController.php");
session_start();
error_reporting(E_ALL);
ini_set('display_erorrs',1);
$controller = 'MainController';
$action = 'principal';

if (isset($_REQUEST['controller'])&& isset($_REQUEST['action'])) {
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];
}
try {
    $object = new $controller();
    $object->$action();
} catch (\Throwable $th) {
    $object = new MainController();
    $object->principal();
}

