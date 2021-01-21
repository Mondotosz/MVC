<?php
class Model
{
    protected $conn;

    public function __construct($server = NULL,$user = NULL,$password = NULL,$database = NULL)
    {

        $server != NULL ?: $server = $GLOBALS["config"]["database"]["hostname"];
        $user != NULL ?: $user = $GLOBALS["config"]["database"]["user"];
        $password != NULL ?: $password = $GLOBALS["config"]["database"]["password"];
        $database != NULL ?: $database = $GLOBALS["config"]["database"]["database"];

        // TODO:add db options
        try {
            $this->conn = new PDO("mysql:host=$server;dbname=$database",$user,$password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            error_log("Connected successfully");
            } catch(PDOException $e) {
                error_log("Connection failed : ".$e->getMessage());
            }

    }

    public function __destruct()
    {
        $this->conn = null;
    }

}