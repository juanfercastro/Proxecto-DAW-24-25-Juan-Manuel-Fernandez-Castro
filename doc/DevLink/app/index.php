<?php
include_once("globals.php");
include_once(CONTROLLER_PATH."MainController.php");
include_once(CONTROLLER_PATH."UserController.php");
session_start();
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

