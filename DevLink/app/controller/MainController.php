<?php
include("Controller.php");

class MainController extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function principal(){
        $this->view->show('login');
    }
}