<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/class/Controller.php';

class ControllerChat extends Controller {
    public function control()
    {

    }

    public function show()
    {
        require_once $_SERVER["DOCUMENT_ROOT"] . "\\view\\Chat.php";
    }
}