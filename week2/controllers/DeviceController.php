<?php

    class DeviceController{

        private $device;
        private $log;

        public function __construct()
        {
            $this->device = new Device();
            // $this->log = new Log();
        }

        public function addDevice($name, $mac_address, $ip_address, $c_time, $power){
            try {
                if($this->validateMacAddress($mac_address)){
                    return;
                }
                $this->device->setName($name);
                $this->device->setMac($mac_address);
                $this->device->setIp($ip_address);
                $this->device->setCreateTime($c_time);
                $this->device->setPower($power);
                $this->device->add();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        public function loadDeviceToTable(){
            return $this->device->getAll();
        }

        public function loadChart(){
            return $this->device->getChartData();
        }

        

        // public function deleteDevice($_id){
        //     $device = $this->device->findDevice($_id);
        //     return $this->log->deleteLogs($device['name']);
        //     return $this->device->deleteDevice($_id);
        // }

        public function validateMacAddress($mac_address){
            $macs = $this->device->getMacs();
            return in_array($mac_address, $macs);
        }
    }
