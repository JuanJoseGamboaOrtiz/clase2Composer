<?php

namespace App;

class Connect extends Credential{
    public $conn;
    public function __construct(private $dsn="mysql", private $port=3306)
    {   
        try{
            $this->conn=new \PDO( $this->dsn.":host=".$this->__get('host').";dbname=".$this->__get('dbname').";user=". $this->username.";password=".$this->__get('password').";port=". $this->port);
        }catch(\PDOException $e){
            print_r($e->getMessage());            
        }
        
        return $this-> conn;
    }
}