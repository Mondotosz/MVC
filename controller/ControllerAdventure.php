<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/class/Controller.php';

class ControllerAdventure extends Controller {
    
    public function control()
    {
        $this->show();
    }

    public function show()
    {
        include_once $_SERVER["DOCUMENT_ROOT"] . "\\view\\Adventure\\Adventure.php";
    }
}