<?php
include_once $_SERVER["DOCUMENT_ROOT"]."\\config\\config.php";
require_once 'controller/ControllerRegister.php';

switch($_SERVER["REQUEST_URI"]){
    case "/" :
    case "/register":
        $view = new ControllerRegister;
        $view->control();
        break;
    default:
    require_once 'view/404.php';
}

