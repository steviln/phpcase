<?php


class Register implements Action{

    private $data = array();

    public function setData($holder){
        $this->data['holder'] = $holder;
    }
    public function display(){
        $data = $this->data;
        include 'templates/register.php';
    }
    public function postCheck() : bool{ 
     
        $showForm = true;

        if(isset($_POST['submit'])){
            // I would never considering putting code like this in a real application
            $loginUser = UserRepository::addEntity($this->data['holder']->getConnection(),array());
            $showForm = false;
        }
        
        return $showForm; 
    
    }
    public function redirect(){
        header("Location: /index.php");
    }


}



?>