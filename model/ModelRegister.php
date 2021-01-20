<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/model/Model.php";
class ModelRegister extends Model
{
    public function addUser($pseudo,$userName,$inputEmail,$inputPassword,$inputPhoneNumber="",$checkNewsLetter="")
    {
        try
        {
            // Prepare statement
            $statement = $this->conn->prepare("INSERT INTO users (pseudo, userName, inputEmail, inputPassword, inputPhoneNumber, checkNewsLetter)
        VALUES (:pseudo, :userName, :inputEmail, :inputPassword, :inputPhoneNumber, :checkNewsLetter)");
        // TODO: account for null values
        $statement->bindParam(":pseudo",$pseudo);
        $statement->bindParam(":userName",$userName);
        $statement->bindParam(":inputEmail",$inputEmail);
        $statement->bindParam(":inputPassword",$inputPassword);
        $statement->bindParam(":inputPhoneNumber",$inputPhoneNumber);
        $statement->bindParam(":checkNewsLetter",$checkNewsLetter);
        
        // Execute statement
        $statement->execute();
            } catch(PDOException $e){
                error_log("error : ".$e->getMessage());
        }

    }
}
?>