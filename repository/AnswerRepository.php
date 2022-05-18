<?php


    class AnswerRepository implements Repository{
        public static function selectById($connection,$id){

        }

        public static function selectList($connection){

        }

        public static function selectByParent($connection,$id){
            $listResult = $connection->selectQuery("SELECT answer.*, users.username FROM answer, users WHERE answer.questionID = ".$id." AND answer.userID = users.id ORDER BY postdate DESC;");
            $result = array();
            while($list = $listResult->fetch_assoc()){
                $result[] = $list;
            }
            return $result;
        }

        public static function addEntity($connection,$values){
            $connection->insertQuery("INSERT INTO answer(header,text,userID,questionID,postdate) VALUES('".$values['header']."','".$values['text']."',".$values['userID'].",".$values['parentID'].",NOW());");
        }
    }

?>