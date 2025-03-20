<?php

class DB {
    private $HOST = 'localhost';
    private $USER = 'root';
    private $PASSWORD = 'root';
    private $DB = "auladb";
    private $PORT = 8081;
    private $CHARSET = "utf8mb4";

    public function getConnection(){
        $this->conn = new PDO("mysql:host=$this->HOST;dbname=$this->DB;charset=$this->CHARSET; port=$this->PORT", $this->USER, $this->PASSWORD);
        return $this->conn;
    }
}


// $conn = new mysqli($HOST, $USER, $PASSWORD, $DB, $PORT);

// if($conn->connect_error){
//     die("Connection failed: " . $conn->connect_error);
// }

?>