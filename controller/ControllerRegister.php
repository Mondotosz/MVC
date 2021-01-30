<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/class/Controller.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/model/ModelRegister.php';

class ControllerRegister extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function control()
    {
        //define args
        $args = [
            "required"=>["pseudo","userName","inputEmail","inputPassword"],
            "optional"=>["inputPhoneNumber","checkNewsLetter"]
        ];

        //check if required arguments exist
        $requiredOk = true;
        foreach ($args["required"] as $arg)
        {
            //checks for each required arguments
            isset($_POST[$arg])?:$requiredOk = false;
        }

        //check args validity
        
        if ($requiredOk){
            $pseudo=$_POST["pseudo"];
            $userName=$_POST["userName"];
            $inputEmail=$_POST["inputEmail"];
            $inputPassword=$_POST["inputPassword"];
            $inputPhoneNumber=isset($_POST["inputPhoneNumber"])?$_POST["inputPhoneNumber"]:"";
            $checkNewsLetter=(isset($_POST["checkNewsLetter"]))?$_POST["checkNewsLetter"]:"";
            $valid = true;
        } else {
            $valid = false;
        }

        //register
        if($valid)
        {
            $model = new ModelRegister();
            $model->addUser($pseudo,$userName,$inputEmail,$inputPassword,$inputPhoneNumber,$checkNewsLetter);
        }

        //return view accordingly
        $this->show();
    }

    public function show()
    {
        require_once $_SERVER["DOCUMENT_ROOT"] . "\\view\\formRegister.php";
    }
}
?>