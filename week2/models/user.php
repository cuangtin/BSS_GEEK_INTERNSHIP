<?php

class User{
    
    private $username;
    private $password;
    
    public function __construct()
    {
        $this->conn = new Db();
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        return $this->username = $username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        return $this->password = $password;
    }

    public function getAll(){
        $sql = "SELECT * FROM users ";
        $conn = $this->conn->connect();
        $ppst = $conn->query($sql);
        $users = $ppst->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }


    public function findUser($username, $password){
        $sql = "SELECT * FROM users WHERE name=`$username` and password=$password";
        $conn = $this->conn->connect();
        $ppst = $conn->query($sql);
        $user = $ppst->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}

?>