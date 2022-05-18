<?php

class PageViewIntializer{


    public static function initialize(){

        include 'config.php';

        $holder = new ViewObjectsHolder(); 

        $connection = new Connection();
        $connection->init($username, $password, $host, $database);
        $holder->setConnection($connection);

        $session = new Session();
        $session->init($holder->getConnection());
        $holder->setSession($session);

        if(isset($_GET['action'])){
            $tempAction = $_GET['action'];
            if(ctype_alpha($tempAction) && strlen($tempAction) < 16){
                $holder->setActionString($tempAction);    
            }

        }

        $holder->initializeAction();
   

        return $holder;

    }


}

?>