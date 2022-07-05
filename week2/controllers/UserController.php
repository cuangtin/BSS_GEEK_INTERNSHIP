<?php

    class UserController{
        private $user;

        public function __construct()
        {
            $this->user = new User();
        }

        public function getAllUsers(){
            return $this->user->getAll();
        }

        public function login($username, $password){
            $users = $this->getAllUsers();
            var_dump($users);
            for($i = 0; $i < count($users); $i++){
                if($users[$i]['username']==$username && $users[$i]['password'] == $password){
                    header('location: ./views/menu/dashboard.php');
                }
            }
        }
    }

?>