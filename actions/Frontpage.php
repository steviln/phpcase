<?php


class Frontpage implements Action{

    private $data = array();

    public function setData($holder){
        $this->data['holder'] = $holder;
    }
    // Did not take the time to include a templating framework
    public function display(){
        $data = $this->data;
        include 'templates/frontpage.php';
    }
    public function postCheck() : bool{ return true; }
    public function redirect(){}


}



?>