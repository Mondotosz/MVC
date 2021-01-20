<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/model/Model.php";
class ModelRegister extends Model
{
    public function addUser($pseudo,$userName,$inputEmail,$inputPassword,$inputPhoneNumber="",$checkNewsLetter="")
    {
        try
        {
            // Prepare statement
            $statement = $this->conn->prepare("INSERT INTO users (pseudo, username, email, password, phoneNumber, newsLetter)
        VALUES (:pseudo, :username, :email, :password, :phoneNumber, :newsLetter)");
        // TODO: account for null values
        $statement->bindParam(":pseudo",$pseudo);
        $statement->bindParam(":username",$userName);
        $statement->bindParam(":email",$inputEmail);
        $statement->bindParam(":password",$inputPassword);
        $statement->bindParam(":phoneNumber",$inputPhoneNumber);
        $statement->bindParam(":newsLetter",$checkNewsLetter);
        
        // Execute statement
        $statement->execute();
            } catch(PDOException $e){
                error_log("error : ".$e->getMessage());
        }

    }
}
?>