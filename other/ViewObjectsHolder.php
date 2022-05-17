<?php


class ViewObjectsHolder{

    private Session $session;
    private Connection $connection;
    private String $actionString = 'frontpage';
    private Action $action;

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

    public function setActionString($newaction){
        $this->actionString = $newaction;
    }

    public function initializeAction(){
        $this->action = new $this->actionString();
    }

    public function setAction($newaction){
        $this->action = $newaction;
    }

    public function getAction(){
        return $this->action;
    }


}








?>