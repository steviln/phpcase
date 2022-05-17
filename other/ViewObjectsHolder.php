<?php


class ViewObjectsHolder{

    private Session $session;
    private Connection $connection;
    private String $action = 'frontpage';

    public function getSession(){
        return $this->session;
    }

    public function setSession($newsession){
        $this->session = $newsession;
    }

    public function getConnection(){
        return $this->connection;
    }

    public function setConnection($newconnection){
        $this->connection = $newconnection;
    }


}








?>