<?php
class Db{

    private $conn;
    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost; dbname=geek_intern", "root");
    }

    public function connect(){
        return $this->conn;
    }

} 