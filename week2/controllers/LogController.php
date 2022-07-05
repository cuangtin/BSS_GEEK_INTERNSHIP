<?php

    class LogController{

        private $log;

        public function __construct()
        {
            $this->device = new Log();
        }

        public function addDevice($name, $action, $c_time){
            try {
                $this->log->setName($name);
                $this->log->setAction($action);
                $this->log->setCreateTime($c_time);
                $this->log->add();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        public function loadLogToTable(){
            return $this->device->getAll();
        }
    }
