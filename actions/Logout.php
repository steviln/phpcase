<?php


class Logout implements Action{

    private $data = array();

    public function setData($holder){
        $this->data['holder'] = $holder;
    }
    public function display(){
      
    }
    public function postCheck() : bool{ 
     
        UserRepository::logOutuser($this->data['holder']->getConnection());
        
        return false; 
    
    }
    public function redirect(){
        header("Location: /index.php");
    }


}



?>