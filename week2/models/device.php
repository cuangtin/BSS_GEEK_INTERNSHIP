<?php

class Device
{

    private $name;
    private $mac_address;
    private $ip_address;
    private $c_time;
    private $power;

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

    public function getMac()
    {
        return $this->mac_address;
    }

    public function setMac($mac_address)
    {
        return $this->mac_address = $mac_address;
    }

    public function getIp()
    {
        return $this->ip_address;
    }

    public function setIp($ip_address)
    {
        return $this->ip_address = $ip_address;
    }

    public function getCreateTime()
    {
        return $this->c_time;
    }

    public function setCreateTime()
    {
        return $this->c_time = date("Y-m-d");
    }

    public function getPower()
    {
        return $this->power;
    }

    public function setPower($power)
    {
        return $this->power = $power;
    }

    public function add()
    {
        $sql = "INSERT INTO devices (name,mac_address,ip_address,c_time,power) VALUES (?,?,?,?,?)";
        $conn = $this->conn->connect();
        $ppst = $conn->prepare($sql);
        $ppst->execute([$this->getName(), $this->getMac(), $this->getIp(), $this->getCreateTime(), $this->getPower()]);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM devices ";
        $conn = $this->conn->connect();
        $ppst = $conn->query($sql);
        $devices = $ppst->fetchAll(PDO::FETCH_ASSOC);
        return $devices;
    }

    public function getChartData()
    {
        $sql = "SELECT name, power FROM devices ";
        $conn = $this->conn->connect();
        $ppst = $conn->query($sql);
        $devices = $ppst->fetchAll(PDO::FETCH_ASSOC);
        return $devices;
    }

    public function getMacs()
    {
        $sql = "SELECT mac_address FROM devices";
        $conn = $this->conn->connect();
        $query = $conn->prepare($sql);
        $query->execute();
        $device = array();
        while ($kq = $query->fetch(PDO::FETCH_OBJ)) {
            array_push($device, $kq);
        }
        return $device;
    }

    // public function findDevice($_id)
    // {
    //     $sql = "SELECT * FROM devices WHERE _id=`$_id`";
    //     $conn = $this->conn->connect();
    //     $ppst = $conn->query($sql);
    //     $device = $ppst->fetch(PDO::FETCH_OBJ);
    //     return $device;
    // }

    public function deleteDevice($_id)
    {
        $sql = "DELETE FROM devices WHERE _id = $_id";
        $conn = $this->conn->connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}
