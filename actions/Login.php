<?php


class Login implements Action{

    private $data = array();

    public function setData($holder){
        $this->data['holder'] = $holder;
    }
    public function display(){
        $data = $this->data;
        include 'templates/login.php';
    }
    public function postCheck() : bool{ 
     
        $noLogin = true;

        if(isset($_POST['submit'])){
            // I would never considering putting code like this in a real application
            $loginUser = UserRepository::checkLogin($this->data['holder']->getConnection());
            if(mysqli_num_rows($loginUser) > 0){
                $userForLogin = $loginUser->fetch_assoc();
                UserRepository::logInUser($this->data['holder']->getConnection(), $userForLogin);
                $noLogin = false;
            }
        }
        
        return $noLogin; 
    
    }
    public function redirect(){
        header("Location: /index.php");
    }


}



?>