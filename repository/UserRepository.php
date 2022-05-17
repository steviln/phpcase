<?php


class UserRepository implements Repository{

    // Here, I should check how old the session is, which I may not have implemented here. 

    public static function findUserSession($connection){
        $relevantSessions = $connection->selectQuery("SELECT users.id, users.username FROM users, user_login WHERE users.id = user_login.userID AND session_id = '".session_id()."';");
        return $relevantSessions;
    }

    public function selectById($connection,$id){

    }
    public function selectList($connection){

    }
    public function addEntity($connection,$values){

    }







}


?>