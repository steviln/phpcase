<?php


class UserRepository implements Repository{

    // Here, I should check how old the session is, which I may not have implemented here. 

    public static function findUserSession($connection){
        $relevantSessions = $connection->selectQuery("SELECT users.id, users.username FROM users, user_login WHERE users.id = user_login.userID AND session_id = '".session_id()."';");
        return $relevantSessions;
    }

    // This is code I know very well should never be in a "real" program
    public static function checkLogin($connection){
        $login = $connection->selectQuery("SELECT id FROM users WHERE username = '".$_POST['username']."' AND userpassword = '".$_POST['password']."';");
        return $login;    
    }

    public static function logInUser($connection, $userRow){
        $connection->insertQuery("INSERT INTO user_login(userID, session_id, dato) VALUES(".$userRow['id'].",'".session_id()."',NOW());");
    }

    public function selectById($connection,$id){

    }
    public function selectList($connection){

    }
    public function addEntity($connection,$values){

    }







}


?>