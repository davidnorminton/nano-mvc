<?php
/**
 * class to handle PDO database connection and some common functions
 * change username, password, database, and server to correct settings
 * usage :
 *       start a connection:
         $conn = \core\pdo();
         
         Then get resource string(use this for queries)
         $conn->db;
 */
namespace core;

class pdo {
    
    /** 
     * @var string $user 
     * databse user name
     */
    private $user = '';
   
   /**
    * @var string $password
    * database access password
    */
    private $password = '';
    
    /**
     * @var string  $server
     * localhost or ip address
     */
    private $server = 'localhost';
    
    /**
     * @var string $db_name
     * database to access
     */
    private $db_name = '';
    
    /**
     * public @var resource $conn
     * database connection
     * access this property to use a database connection
     */
    public $db;
     
    /**
     * public method __consruct
     * create a PDO database connection
     *
     */
    public function __construct()
    {
        try {
            $this->db = new \PDO('mysql:host='.$this->server.';
                                  dbname='.$this->db_name.';charset=utf8mb4',
                                  $this->user, $this->password);
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        } catch(\PDOException $e) {
            echo "PDO connection error : " . $e->getMessage();
        }
        
        return $this->db;
   }
} 
