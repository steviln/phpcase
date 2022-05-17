<?php


    class Session{


        private bool $logged = false;
        private int $userID     = 0;


        public function init($connection){
            $loggedResult = UserRepository::findUserSession($connection);

        }










    }


?>