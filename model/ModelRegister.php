<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/model/Model.php";
class ModelRegister extends Model
{
    public function addUser($pseudo,$userName,$inputEmail,$inputPassword,$inputPhoneNumber="",$checkNewsLetter="")
    {
        parent::insert("users",
        ["pseudo","userName","inputEmail","inputPassword","inputPhoneNumber","checkNewsLetter"],
        ["pseudo"=>$pseudo,"userName"=>$userName,"inputEmail"=>$inputEmail,"inputPassword"=>$inputPassword,"inputPhoneNumber"=>$inputPhoneNumber,"checkNewsLetter"=>$checkNewsLetter]
        );
    }
}
?>