<?php

// I know I get a bit inconsistent with the use of the Action class here compared to the others

class Question implements Action{

    private $data = array();
    private $id = 0;
    private $subaction = 0;

    public function setData($holder){
        $this->data['holder'] = $holder;
        if(isset($_GET['id']) && is_numeric($_GET['id'])){
            $this->id = intval($_GET['id']);
        }
        if(isset($_GET['subaction']) && is_numeric($_GET['subaction'])){
            $this->subaction = intval($_GET['subaction']);
        }
    }
    // Did not take the time to include a templating framework
    public function display(){
        $data = $this->data;
        if($this->id == 0 && $this->subaction == 0){
            $data['questions'] = QuestionRepository::selectList($data['holder']->getConnection());
            include 'templates/questionlist.php';
        }elseif($this->id > 0 && $this->subaction == 0){
            $data['question'] = QuestionRepository::selectById($data['holder']->getConnection(),$this->id);
            $data['answers'] = AnswerRepository::selectByParent($data['holder']->getConnection(),$this->id);
            include 'templates/question.php';
        }else if($this->subaction == 1){
            include 'templates/questionform.php';
        }
        
    }
    public function postCheck() : bool{ 
        if(isset($_POST['submit']) && $this->data['holder']->getSession()->getLogged()){
            if($this->subaction == 2){
                $values = array();
                foreach($_POST as $key => $postvar){
                    $values[$key] = $postvar;
                }
                $values['userID'] = $this->data['holder']->getSession()->getUserID();
                QuestionRepository::addEntity($this->data['holder']->getConnection(),$values);
            }elseif($this->subaction == 3){
                $values = array();
                foreach($_POST as $key => $postvar){
                    $values[$key] = $postvar;
                }
                $values['userID'] = $this->data['holder']->getSession()->getUserID();
                AnswerRepository::addEntity($this->data['holder']->getConnection(),$values);
            }             
            return false;
        }else{
            return true; 
        }
    }
    public function redirect(){
        header("Location: /index.php");
    }


}



?>