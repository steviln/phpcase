<?php


    class Session{

        // I also see that some variable names are inconsistent, like not using camel case consistently

        private bool $logged        = false;
        private int $userID         = 0;
        private String $username    = '';


        public function init($connection){
            $loggedResult = UserRepository::findUserSession($connection);
            if(mysqli_num_rows($loggedResult) > 0){
                $result = $loggedResult->fetch_assoc();
                $this->logged = true;
                $this->userID = $result['id'];
                $this->username = $result['username'];
            }
        }

        public function getLogged() : bool{
            return $this->logged;
        }

        public function getUserID() : bool{
            return $this->userID;
        }

        public function getUsername() : bool{
            return $this->username;
        }










    }


?>