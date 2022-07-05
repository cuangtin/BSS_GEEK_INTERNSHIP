<?php

class Log
{

    private $name;
    private $action;
    private $c_time;

    private $conn;


    public function __construct()
    {
        $this->conn = new Db();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setAction($action)
    {
        return $this->action = $action;
    }


    public function getCreateTime()
    {
        return $this->c_time;
    }

    public function setCreateTime()
    {
        return $this->c_time = date("Y-m-d");
    }


    public function add()
    {
        $sql = "INSERT INTO logs (name,action,c_time) VALUES (?,?,?)";
        $conn = $this->conn->connect();
        $ppst = $conn->prepare($sql);
        $ppst->execute([$this->getName(), $this->getAction(), $this->getCreateTime()]);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM logs ";
        $conn = $this->conn->connect();
        $ppst = $conn->query($sql);
        $logs = $ppst->fetchAll(PDO::FETCH_ASSOC);
        return $logs;
    }

    public function deleteLogs($name)
    {
        $sql = "DELETE FROM game_locais_zumbis WHERE name in (" . str_repeat("?,", count($name) - 1) . "?)";
        $conn = $this->conn->connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($name);
    }
}
