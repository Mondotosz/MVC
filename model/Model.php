<?php
include_once $_SERVER["DOCUMENT_ROOT"]."\\config\\config.php";

class Model
{
    private $mysqli;

    public function __construct($server = NULL,$user = NULL,$password = NULL,$database = NULL)
    {

        $server != NULL ?: $server = $GLOBALS["config"]["dbHostname"];
        $user != NULL ?: $user = $GLOBALS["config"]["dbUser"];
        $password != NULL ?: $password = $GLOBALS["config"]["dbPassword"];
        $database != NULL ?: $database = $GLOBALS["config"]["dbDatabase"];

        $this->mysqli = new mysqli($server,$user,$password,$database);

        //check connection
        if($this->mysqli->connect_errno){
            error_log("Failed to connect to MySQL: " . $this->mysqli->connect_error);
            exit();
        }
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }

    public function insert(string $table,array $columns, array $values)
    {
        $clone = $columns;
        $clone2 = $columns;
        $sql = "INSERT INTO $table (";

        foreach($columns as $col)
        {
            $sql .= $col;
            if (next($clone)){
                $sql .=",";
            };
        }

        $sql .= ") VALUES (";

        foreach($columns as $col)
        {
            $sql .= isset($values[$col])?"'$values[$col]'":"''";
            if (next($clone2)){
                $sql .=",";
            };
        }
        $sql .= ')';

        if ($this->mysqli->query($sql) === true) {
            error_log("Successful query: " . $sql);
        } else {
            error_log("Unsuccessful query: " . $sql . "\nError L" . $this->mysqli->error);
        }
    }

}