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
   

        return $holder;

    }


}

?>