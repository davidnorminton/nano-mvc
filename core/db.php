<?php
/**
 * class to handle database connection and some common functions
 * change username, password, database, and server to correct settings
 */
namespace core;

class db{

    private $user = 'root';
   
    private $password = 'root';
    
    private $server = 'localhost';
    
    private $db_name = 'rota';
    
    public $conn;
    
    public function __construct()
    {
        // Create connection
        $this->conn = new \mysqli($this->server, $this->user, $this->password, $this->db_name);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "error";
        } 
   }
} 
