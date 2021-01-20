<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/controller/Controller.php';

class ControllerChat extends Controller {
    public function control()
    {

    }

    public function show()
    {
        require_once $_SERVER["DOCUMENT_ROOT"] . "\\view\\Chat.php";
    }
}