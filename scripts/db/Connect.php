<?php

namespace App;

class Connect extends Credential{
    protected $con;
    public function __construct(private $dsn="mysql", private $port=3306)
    {   
        try{
            $this->con=new \PDO( $this->dsn.":host=".$this->__get('host').";dbname=".$this->__get('dbname').";user=". $this->username.";password=".$this->__get('password').";port=". $this->port);

            print("Conexión exitosa");

        }catch(\PDOException $e){
            print_r($e->getMessage());            
        }
    }
}