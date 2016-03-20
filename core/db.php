<?php
/**
 * class to handle mysqli database connection and some common functions
 * change username, password, database, and server to correct settings
 */
namespace core;

class db {
    
    /** 
     * @var string $user 
     * databse user name
     */
    private $user = '';
   
   /**
    * @var string $password
    * database access password
    */
    private $password = 'root';
    
    /**
     * @var string  $server
     * localhost or ip address
     */
    private $server = 'localhost';
    
    /**
     * @var string $db_name
     * database to access
     */
    private $db_name = 'rota';
    
    /**
     * public @var resource $conn
     * database connection
     * access this property to use a database connection
     */
    public $conn;
     
    /**
     * public method __consruct
     * create a mysqli database connection
     *
     */
    public function __construct()
    {
        // Create connection
        $this->conn = new \mysqli($this->server, $this->user, $this->password, $this->db_name);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "error";
        } 
   }
} 
