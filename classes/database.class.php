<?php
class Database{
    public $connection = '';
    private $db_config  = '';
    public function __construct(){
        $this->db_config  = require_once $_SERVER['DOCUMENT_ROOT'].'/pdo/config/database.config.php';
        try{
            $this->connection = new PDO('mysql:host = '.$this->db_config['DB_HOST'].'; dbname='.$this->db_config['DB_NAME'], $this->db_config['DB_USER'], $this->db_config['DB_PASS']);
        }catch (PDOException $e){
            echo "Sorry! Database connection error!!";
        }
    }
}