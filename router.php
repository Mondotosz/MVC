<?php
include_once $_SERVER["DOCUMENT_ROOT"]."\\config\\config.php";

switch($_SERVER["REQUEST_URI"]){
    case "/" :
        case "/chat":
            require_once 'controller/ControllerChat.php';
            $view = new ControllerChat;     
            $view->show();
            break;
        case "/register":
        require_once 'controller/ControllerRegister.php';
        $view = new ControllerRegister;
        $view->control();
        break;
    default:
    require_once 'view/404.php';
}

