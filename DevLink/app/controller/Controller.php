<?php
include_once("globals.php");
include_once(VIEW_PATH."View.php");

class Controller{
    protected View $view;
    
    public function __construct(){
       $this->view = new View();
    }
}